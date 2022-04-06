<?php
$myStates = array(
    "CT" => "Connecticut",
    "NY" => "New York",
    "NH" => "New Hampshire"
);

$productTypesArray = array(
    "Telephone" => "Telephone",
    "Computer" => "Computer",
    "TV" => "TV"
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Quiz 2</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        #quiz2_form {
            border: 1px solid grey;
            width: 700px;
            font-size: 16px;
            line-height: 30px; 
            padding: 5px;
        }
        .form_label {
            width: 200px;
            display: inline-block;
        }
        .form_textbox {
            width: 250px; 
        }
        .form_dropdown {
            width: 250px;
        }
    </style>
</head>
<body>  

<form id="quiz2_form" action="quiz_handler.php" method="post">
    <!-- State -->
    <label for="state" class="form_label">Your State:</label>
    <select id="state" class="form_dropdown" name="state" required>
        <option value="">Please select a State...</option>
        <?php
            // Associate array
            foreach ($myStates as $key => $value) {
               echo "<option value=$key>$value</option>";
            }
        ?>
    </select>

    <br>

    <!-- Product type -->
    <label for="productType" class="form_label">Product Type:</label>
    <select id="productType" name="productType" class="form_dropdown" required>
        <option value="">Please select a product type...</option>
        <?php
            foreach($productTypesArray as $key => $value) {
                echo "<option value=$key>$value</option>";
            }
        ?>
    </select>
        
    <input type="submit" value="Contact Us">
</form>

</body>
</html>