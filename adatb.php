<?php
    $link = mysqli_connect("sql105.epizy.com", "epiz_30162540","Aq2hNwx9D0Sv7","epiz_30162540_adatok")
    or die("nem sikerült kapcsolódni az adatbázishoz") ;
    $sql="insert into tabla values('1','katika@gmail.com','piros');";
    $query=mysqli_query($link,$sql);
    $sql="insert into tabla values('2','arpi40@freemail.hu','zold');";
    $query=mysqli_query($link,$sql);
    $sql="insert into tabla values('3','zsanettka@hotmail.com','sarga');";
    $query=mysqli_query($link,$sql);
    $sql="insert into tabla values('4','hatizsak@protonmail.com','kek');";
    $query=mysqli_query($link,$sql);
    $sql="insert into tabla values('5','terpeszterez@citromail.hu','fekete');";
    $query=mysqli_query($link,$sql);
    $sql="insert into tabla values('6','nagysanyi@gmail.hu','feher');";
    $query=mysqli_query($link,$sql);
?>