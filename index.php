<!DOCTYPE html>
<html>
<head>
    <title>Samuel Park - P2 xkcd Password Generator</title>
    <link href="css/style.css" rel="stylesheet">
    <?php require 'logic.php'; ?>
</head>
<body>
    <div class="wrapper">
        <h1>xkcd Password Generator</h1>

        <h3 class="generated_password"><?php echo $generatedPassword ?></h3>

        <form action="index.php" method="GET">
                Number of Words
                <select class="dropdown" name="passwordLength">
                    <?php if (isset($_GET["passwordLength"]) && $_GET["passwordLength"] >= 1 && $_GET["passwordLength"] <= 9)
                    { ?>
                        <option value="1" <?php if ($_GET["passwordLength"] == "1") {echo "selected";} ?>>1</option>
                        <option value="2" <?php if ($_GET["passwordLength"] == "2") {echo "selected";} ?>>2</option>
                        <option value="3" <?php if ($_GET["passwordLength"] == "3") {echo "selected";} ?>>3</option>
                        <option value="4" <?php if ($_GET["passwordLength"] == "4") {echo "selected";} ?>>4 (default)</option>
                        <option value="5" <?php if ($_GET["passwordLength"] == "5") {echo "selected";} ?>>5</option>
                        <option value="6" <?php if ($_GET["passwordLength"] == "6") {echo "selected";} ?>>6</option>
                        <option value="7" <?php if ($_GET["passwordLength"] == "7") {echo "selected";} ?>>7</option>
                        <option value="8" <?php if ($_GET["passwordLength"] == "8") {echo "selected";} ?>>8</option>
                        <option value="9" <?php if ($_GET["passwordLength"] == "9") {echo "selected";} ?>>9</option>
                    <?php
                    } else { ?>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4" selected="">4 (default)</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                    <?php }
                    ?>
                </select>
                <br>

                Add numbers?
                <select class="dropdown" name="add_numbers">
                    <?php if (isset($_GET["add_numbers"]) && $_GET["add_numbers"] >= 0 && $_GET["add_numbers"] <= 9)
                    { ?>
                        <option value="0" <?php if ($_GET["add_numbers"] == "0") {echo "selected";} ?>>0 (default)</option>
                        <option value="1" <?php if ($_GET["add_numbers"] == "1") {echo "selected";} ?>>1</option>
                        <option value="2" <?php if ($_GET["add_numbers"] == "2") {echo "selected";} ?>>2</option>
                        <option value="3" <?php if ($_GET["add_numbers"] == "3") {echo "selected";} ?>>3</option>
                        <option value="4" <?php if ($_GET["add_numbers"] == "4") {echo "selected";} ?>>4</option>
                        <option value="5" <?php if ($_GET["add_numbers"] == "5") {echo "selected";} ?>>5</option>
                        <option value="6" <?php if ($_GET["add_numbers"] == "6") {echo "selected";} ?>>6</option>
                        <option value="7" <?php if ($_GET["add_numbers"] == "7") {echo "selected";} ?>>7</option>
                        <option value="8" <?php if ($_GET["add_numbers"] == "8") {echo "selected";} ?>>8</option>
                        <option value="9" <?php if ($_GET["add_numbers"] == "9") {echo "selected";} ?>>9</option>
                    <?php
                    } else { ?>
                            <option value="0" selected="">0 (default)</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                    <?php }
                    ?>
                </select>
                <br>

                Add symbols?
                <select class="dropdown" name="add_symbols">
                    <?php if (isset($_GET["add_symbols"]) && $_GET["add_symbols"] >= 0 && $_GET["add_symbols"] <= 9)
                    { ?>
                        <option value="0" <?php if ($_GET["add_symbols"] == "0") {echo "selected";} ?>>0 (default)</option>
                        <option value="1" <?php if ($_GET["add_symbols"] == "1") {echo "selected";} ?>>1</option>
                        <option value="2" <?php if ($_GET["add_symbols"] == "2") {echo "selected";} ?>>2</option>
                        <option value="3" <?php if ($_GET["add_symbols"] == "3") {echo "selected";} ?>>3</option>
                        <option value="4" <?php if ($_GET["add_symbols"] == "4") {echo "selected";} ?>>4</option>
                        <option value="5" <?php if ($_GET["add_symbols"] == "5") {echo "selected";} ?>>5</option>
                        <option value="6" <?php if ($_GET["add_symbols"] == "6") {echo "selected";} ?>>6</option>
                        <option value="7" <?php if ($_GET["add_symbols"] == "7") {echo "selected";} ?>>7</option>
                        <option value="8" <?php if ($_GET["add_symbols"] == "8") {echo "selected";} ?>>8</option>
                        <option value="9" <?php if ($_GET["add_symbols"] == "9") {echo "selected";} ?>>9</option>
                    <?php
                    } else { ?>
                            <option value="0" selected="">0 (default)</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                    <?php }
                    ?>
                </select>
                <br>
                <br>

                <fieldset>
                    <legend>Combine words with: </legend>
                    <?php if (isset($_GET["combine_with"]) && ($_GET["combine_with"] =="hyphens" || $_GET["combine_with"] == "spaces" || $_GET["combine_with"] == "no_spaces"))
                    { ?>
                        <label><input type="radio" name="combine_with" value="hyphens" <?php if ($_GET["combine_with"] == "hyphens") {echo "checked";} ?> >Hyphens</label><br>
                        <label><input type="radio" name="combine_with" value="spaces" <?php if ($_GET["combine_with"] == "spaces") {echo "checked";} ?> >Spaces</label><br>
                        <label><input type="radio" name="combine_with" value="no_spaces" <?php if ($_GET["combine_with"] == "no_spaces") {echo "checked";} ?> >No Spaces</label><br>
                    <?php
                    } else { ?>
                        <label><input type="radio" name="combine_with" value="hyphens" checked>Hyphens</label><br>
                        <label><input type="radio" name="combine_with" value="spaces">Spaces</label><br>
                        <label><input type="radio" name="combine_with" value="no_spaces">No Spaces</label><br>
                    <?php }
                    ?>
                </fieldset>
                <br>

                <fieldset>
                    <legend>Upper/Lower case: </legend>

                    <?php if (isset($_GET["upper_lower"]) && ($_GET["upper_lower"] =="all_lower" || $_GET["upper_lower"] == "all_upper" || $_GET["upper_lower"] == "capital_first_character"))
                    { ?>
                        <label><input type="radio" name="upper_lower" value="all_lower" <?php if ($_GET["upper_lower"] == "all_lower") {echo "checked";} ?> >all lower case</label><br>
                        <label><input type="radio" name="upper_lower" value="all_upper" <?php if ($_GET["upper_lower"] == "all_upper") {echo "checked";} ?> >ALL UPPER CASE</label><br>
                        <label><input type="radio" name="upper_lower" value="capital_first_character" <?php if ($_GET["upper_lower"] == "capital_first_character") {echo "checked";} ?> >Capitalize First Character</label><br>
                    <?php
                    } else { ?>
                        <label><input type="radio" name="upper_lower" value="all_lower" checked>all lower case</label><br>
                        <label><input type="radio" name="upper_lower" value="all_upper">ALL UPPER CASE</label><br>
                        <label><input type="radio" name="upper_lower" value="capital_first_character">Capitalize First Character</label><br>
                    <?php }
                    ?>
                </fieldset>
                <br>
            <input class = "button-submit" type="submit" value="Click to generate">
        </form>
        <form action="index.php">
            <input class="button-reset" type="submit" value="Reset to default values">
        </form>

        <!-- if error message is not empty, something went wrong, display. -->
        <?php if ($errorMessage != "") { ?>
            <p class="error_message">
            <?php echo $errorMessage; ?>
            </p>
        <?php } ?>


    </div>
</body>

</html>
