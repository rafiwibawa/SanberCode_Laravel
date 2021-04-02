<?php
    require ('animal.php');
    
    $sheep = new Animal("shaun");

    echo "Name : ".$sheep->name."<br>"; // "shaun"
    echo "Legs : ".$sheep->legs."<br>"; // 4
    echo "Cold Blooded : ".$sheep->cold_blooded."<br><br>"; // "no"

    require ('Forg.php');

    $kodok = new Forg("buduk");
    echo "Name : ".$kodok->name."<br>"; // "shaun"
    echo "Legs : ".$kodok->legs."<br>"; // 4
    echo "Cold Blooded : ".$kodok->cold_blooded."<br>"; // "no"
    echo "Jump: ";
    $kodok->jump() ;// "Auooo"

    require ('Ape.php');

    $sungokong = new Ape("kera sakti");
    echo "<br><br>Name : ".$sungokong->name."<br>"; // "shaun"
    echo "Legs : ".$sungokong->legs."<br>"; // 4
    echo "Cold Blooded : ".$sungokong->cold_blooded."<br>"; // "no"
    echo "Jump: ";
    $sungokong->yell() ;// "Auooo"
