<?php 
    //exercice1
    function toto(){
        return true;
    }
?>

<?php
    //exercice2
    function string($str){
        return $str;
    }
?>

<?php
    //exercice3
    function doubleString($str1, $str2){
        return  $str1 . $str2;
    }
?>

<?php
    //exercice4
    function comparaison($nombre1, $nombre2){
        if ($nombre1 > $nombre2)
            echo "Le premier nombre est plus grand";
        
        else if ($nombre1 < $nombre2)
            echo "Le premier nombre est plus petit";
        
        else
            echo "Les deux nombres sont identiques";
    }
?>

<?php
    //exercice5
    function nombreEtChaine($nombre, $chaine){
        return $nombre . $chaine;
    }
?>

<?php
    //exercice6
    function bonjour($nom, $prenom, $age){
        return "Bonjour " . $nom . " " . $prenom . ", tu as " . $age . " ans.";
    }
?>

<?php
    //exercice7
    function majeurOuMineur($age, $genre){
        if ($age >= 18 && $genre == "Homme")
            return "Vous êtes un homme et vous êtes majeur";
        
        else if ($age < 18 && $genre == "Homme")
            return "Vous êtes un homme et vous êtes mineur";
        
        else if ($age >= 18 && $genre == "Femme")
            return "Vous êtes une femme et vous êtes majeur";

        else if ($age < 18 && $genre == "Femme")
            return "Vous êtes une femme et vous êtes mineur";

        else
            return "Vous ne pouvez pas être définit.";
    }
?>

<?php
    //exercice8
    function calcul($nombre1 = 1, $nombre2 = 2, $nombre3 = 3){
        return $nombre1 + $nombre2 + $nombre3;
    }
?>