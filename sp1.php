<?php  declare(strict_types=1);
    function descriereNume(string $nume, int $varsta): string{

        $nume = trim($nume," "); 
        $nume = ucfirst($nume);

        return $nume . " are " . $varsta . " ani.";
    }

    $m1 = descriereNume("ana", 17);
    $m2 = descriereNume("bianca", 19);
    $m3 = descriereNume("petru", 18);

    echo $m1 . "<br>"; 
    echo $m2 . "<br>"; 
    echo $m3 . "<br>"; 
?>