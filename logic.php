<?php

    # initialize variable to hold error messages.
    $errorMessage = "";

    # server side validation for combine with argument. by default, combine words with hyphens
    $combineWith = "-";
    if (isset($_GET["combine_with"])) {
        if ($_GET["combine_with"] == "spaces") {
            $combineWith = " ";
        } else if ($_GET["combine_with"] == "no_spaces") {
            $combineWith = "";
        } else if ($_GET["combine_with"] == "hyphens") {
            $combineWith = "-";
        } else {
            # invalid combine_with was received, write to error message.
            $errorMessage = $errorMessage."Invalid combine with character was received. Using default (hyphen). <br>";
        }
    }

    # server side validation for upper/lowercase argument. by default, write words in all lowercase.
    $upperLower = "lower";
    if (isset($_GET["upper_lower"])) {
        if ($_GET["upper_lower"] == "all_lower") {
            $upperLower = "lower";
        } else if ($_GET["upper_lower"] == "all_upper") {
            $upperLower = "upper";
        } else if ($_GET["upper_lower"] == "capital_first_character") {
            $upperLower = "capital_first_character";
        } else {
            # invalid upper_lower was received, write to error message.
            $errorMessage = $errorMessage."Invalid upper/lower was received. Using default (all lowercase). <br>";
        }
    }

    # initialize default password length to 4 words
    $passwordLength = 4;

    # server side validation in case password length received is not a valid number. if a valid number, change password length variable.
    if (isset($_GET["passwordLength"])) {
        # see if it's a number that is between 1 and 9
        if (ctype_digit($_GET["passwordLength"]) && $_GET["passwordLength"] >= 1 && $_GET["passwordLength"] <= 9) {
            $passwordLength = $_GET["passwordLength"];
        } else {
            # test failed, the input turned out to be invalid, write to error message.
            $errorMessage = $errorMessage."Invalid number of words received. Showing default 4 words password. <br>";
        }
    }

    # initialize default words dictionary array
    $words = array("this", "that", "apples", "carry", "dull", "jet", "fall", "furniture", "science", "previous", "valuable", "box", "about", "after", "again", "air", "and", "another", "because", "both", "time", "year", "school");

    # initialize special symbols array
    $specialSymbol = array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")");

    # how many numbers to add? default is no numbers, set it to 0
    $addNumbers = 0;
    # if add_numbers from HTML is received
    if (isset($_GET["add_numbers"])) {
        # first see if it's a number that is between 0 and 9
        if (ctype_digit($_GET["add_numbers"]) && $_GET["add_numbers"] >= 0 && $_GET["add_numbers"] <= 9) {
            $addNumbers = $_GET["add_numbers"];
        } else {
            # test failed, the input turned out to be invalid, write to error message.
            $errorMessage = $errorMessage."Invalid number of numbers received. Showing default no numbers. <br>";
        }
    }

    # how many symbols to add? default is no symbol, set it to 0
    $addSymbols = 0;
    # if add_symbols from HTML is received
    if (isset($_GET["add_symbols"])) {
        # first see if it's a number that is between 0 and 9
        if (ctype_digit($_GET["add_symbols"]) && $_GET["add_symbols"] >= 0 && $_GET["add_symbols"] <= 9) {
            $addSymbols = $_GET["add_symbols"];
        } else {
            # test failed, the input turned out to be invalid, write to error message.
            $errorMessage = $errorMessage."Invalid number of symbols received. Showing default no symbols. <br>";
        }
    }

    # initialize the variable to hold generated password
    $generatedPassword = "";

    for ($i = 0; $i < $passwordLength; $i++) {
        $randomWord = $words[array_rand($words, 1)];
        if ($upperLower == "lower") {
            $generatedPassword = $generatedPassword.strtolower($randomWord);
        } else if ($upperLower == "upper") {
            $generatedPassword = $generatedPassword.strtoupper($randomWord);
        } else if ($upperLower == "capital_first_character") {
            $generatedPassword = $generatedPassword.ucwords($randomWord);
        }

        #add combine_with characters only between words
        if (($i+1) != $passwordLength) {
            $generatedPassword = $generatedPassword.$combineWith;
        }
    }

    if ($addNumbers >= 1 && $addNumbers <= 9) {
        for ($i = 0; $i < $addNumbers; $i++) {
            $generatedPassword = $generatedPassword.rand(0,9);
        }
    }

    if ($addSymbols >= 1 && $addSymbols <= 9) {
        for ($i = 0; $i < $addSymbols; $i++) {
            $generatedPassword = $generatedPassword.$specialSymbol[array_rand($specialSymbol,1)];
        }
    }

?>
