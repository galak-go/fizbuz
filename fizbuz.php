<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FizBuz</title>
</head>
<body>
     <h2> le fizbuz </h2> 

<?php
     
             //récuperartion de la saisie

for ($i = 1; $i <= 100; $i++){
    
    if($i / 5 == round($i / 5)){
       echo $i . "fiz<br />";
}
    else if($i / 3 == round($i / 3)){
       echo $i . "buz<br />";
    }


     else if($i / 3 == round($i / 3) && $i / 5 == round($i / 5)){
        echo $i . "FizzBuzz<br />";
     }
        else {
            echo $i."<br />";
    }

}
?>


<?php


    //récuperation de la saisie
    $number = $_GET["n"] ?? 0;
    var_dump($number);

    //définition du résultat
    $resultat = "";

    if($number % 5 == 0){
        $result = "fiz";
    }

    if ($number % 3 == 0){
        $result = $result . "buz";
    }

    echo ($result=="")?$number:$result;
?>


</body>
</html>