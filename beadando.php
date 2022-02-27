<?php

//echo "<body style=background-image: linear-gradient(to right, darkcyan, darkslateblue)>";
//echo  "<body style=background-color:green>";
//echo "<body style=font-weight:bold;>";
$file =fopen('password.txt','r');
//while (!feof($file)){
//    echo fgets($file)."<br>"; file kiírása, nem kell, ellenőrzés
//}
//    fclose($file);
$a=array(5,-14,31,-9,3);
$file =fopen('password.txt','r');

while (!feof($file)){
    $sor=fgets($file);
$j=0;
$s='';
for ($i=0;$i<strlen($sor)-1;$i++){
    $dec=ord($sor[$i]);
    $s=$s.chr($dec-$a[$j]);
    if ($j<4){
    $j+=1;
    }
    else {
        $j=0;
    }
}
    $b[]=$s;
    $kulcs=substr($s,0,strpos($s,'*'));
    $ertek=substr($s,strpos($s,'*')+1);
    $c[$kulcs]=$ertek;
}

$colors = array("zold"=>"green", "kek"=>"blue", "piros"=>"red", "feher"=>"white", "fekete"=>"black", "sarga"=>"yellow");

fclose($file);



 

 

    if (isset($_POST["username"])){
        if (array_key_exists($_POST['username'],$c)){
            if ($_POST['pwd']==$c[$_POST['username']] and $_POST["pwd"]!=null){
                $username=$_POST['username'];
                $link = mysqli_connect("localhost", "puzsarbalazs","skillethero","adatok")
                or die("nem sikerült kapcsolódni az adatbázishoz") ;
                $sql = "select Titkos, Username from tabla
                            where Username='$username'; ";
                          
                $ered=mysqli_query($link,$sql);
                $eredmeny= mysqli_fetch_row($ered);
               // echo $eredmeny[0]; //majd még alakítani kell, rendes kíásra
                $szin=$eredmeny[0];
                echo "<h1 align='center' style=background-color:dimgrey;width:450px;color:gainsboro;border-radius:7px;font-weight:bold;margin:auto>A te kedvenc színed a $szin<h2>";
                echo "<body style=background-color:$colors[$szin]>";
                

            }
            else{ 
                if ($_POST['username']!=null){
                echo "<h1 align='center'>Téves jelszó, sajnos értesítenem kellet a RENDŐRSÉGET!!</h1>";
                header('Refresh: 5; url=http://www.police.hu/');
                //header('Location: http://www.police.hu/');
            }
        }
        }
        else {
            echo "<h1 align='center'>HIBÁS EMAIL CÍM</h1>"; //rendes kiíratás kell majd
            
        }
    }



echo '<form align="center" action="beadando.php" method="POST" ><br>
    <p style=background-color:aquamarine;margin:auto;margin-bottom:25px;border-radius:15px;width:200px;>Felhasználónév:</p> 
    <input type="text" name="username" style=background-color:silver;width:200px;height:30px;border-radius:10px;margin-bottom:40px><br>
    <p style=background-color:aquamarine;margin:auto;margin-bottom:25px;border-radius:15px;width:200px;>Jelszó:</p> 
    <input type="password" name="pwd" style=background-color:silver;width:200px;height:30px;border-radius:10px;><br>
    <input type="submit" value="Kedvenc színem lekérdezése" style=margin:30px;width:450px;height:60px;font-size:30px;font-weight:bold;font-style:italic;background-color:darkgray;border-width:8px>
    ';
echo  '<body style=background-color:gray;font-weight:bold;font-style:italic;font-size:20px>';
?>
