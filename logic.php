<?php
    $words = array("this", "that", "apples", "carry", "dull", "jet", "fall", "furniture", "science", "previous", "valuable", "box");
    $specialSymbol = array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")");
    $passwordLength = 4;
    $addANumber = true;
    $addASymbol = true;

    $generatedPassword = "";

    for ($i = 0; $i < $passwordLength; $i++) {
        #echo $words[rand(1, sizeof($words))];
        #echo $words[rand(10, (sizeof($words)-1))];
        #$generatedPassword = $generatedPassword.$words[rand(0, (sizeof($words)-1))];
        $generatedPassword = $generatedPassword.$words[array_rand($words, 1)];

        #add slashes only between words
        if (($i+1) != $passwordLength) {
            $generatedPassword = $generatedPassword."-";
        }

    }

    if ($addANumber) {
        $generatedPassword = $generatedPassword.rand(0, 9);
    }

    if ($addASymbol) {
        $generatedPassword = $generatedPassword.$specialSymbol[array_rand($specialSymbol,1)];
    }

    echo $generatedPassword;




?>
