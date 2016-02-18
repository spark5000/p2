<!DOCTYPE html>
<html>
<head>
    <title>P2</title>
    <link href="css/style.css" rel="stylesheet">
    <?php require 'logic.php'; ?>
</head>
<body>
    <div class="wrapper">
        <h1>xkcd Password Generator</h1>

        <h3 class="generated_password"><?php echo $generatedPassword ?></h3>

        <form action="index.php" method="GET">
            <p>
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

                Combine words with: <br>
                <input type="radio" name="combine_with" id="hyphens" value="hyphens" checked><label for="hyphens">Hyphens</label><br>
                <input type="radio" name="combine_with" id="spaces" value="spaces"><label for="spaces">Spaces</label><br>
                <input type="radio" name="combine_with" id="no_spaces" value="no_spaces"><label for="no_spaces">No Spaces</label><br>
                <br>

                Upper/Lower case: <br>
                <input type="radio" name="upper_lower" value="all_lower" checked>all lower case<br>
                <input type="radio" name="upper_lower" value="all_upper">ALL UPPER CASE<br>
                <input type="radio" name="upper_lower" value="capital_first_word">Capital First Word<br>




            </p>
            <input class = "button" type="submit" value="click to generate">
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
