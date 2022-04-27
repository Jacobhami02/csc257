<?php
    // Include helpers, utilities, etc.

    // NOTE: We're using require_once to ensure these libraries are only included
    // once across any/all files participating in the application
    require_once "includes/form_data.php";
    require_once "includes/form_validation.php";

    // Use data layer to build dropdowns
    $myStates = getStates(); // Set the array of states from a function call

    // Debugging    
    // print_r($_POST);
    $required = ""; // Turn on/off client-side validation
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cruise Entry Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>  

<?php if ($showForm === true) { ?>

    <form id="cruise_form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <!-- First Name -->
        <label for="firstName" class="form_label">First Name:</label>
        <input id="firstName"
            class="form_textbox <?php if(!$form_firstName && $isProcessingForm) echo 'requiredHighlight';?>" 
            name="firstName" 
            value="<?php echo $form_firstName; ?>" 
            type="text"
            <?php echo $required; ?>>
            <?php
                if (!$form_firstName) {
                    echo '<span class="requiredIndicator">*</span>';
                }
            ?>
        <br>    

        <!-- Last Name -->
        <label for="lastName" class="form_label">Last Name:</label>
        <input id="lastName"
            class="form_textbox <?php if(!$form_lastName && $isProcessingForm) echo 'requiredHighlight';?>" 
            name="lastName"
            value="<?php echo $form_lastName; ?>" 
            type="text"
            <?php echo $required; ?>>
            <?php
                if (!$form_firstName) {
                    echo '<span class="requiredIndicator">*</span>';
                }
            ?>
        <br>

        <!-- City -->
        <label for="city" class="form_label">City:</label>
        <input id="city"
            class="form_textbox <?php if(!$form_city && $isProcessingForm) echo 'requiredHighlight';?>" 
            name="city"
            value="<?php echo $form_city; ?>" 
            type="text"
            <?php echo $required; ?>>
            <?php
                if (!$form_city) {
                    echo '<span class="requiredIndicator">*</span>';
                }
            ?>

        <br>

        <!-- E-mail address -->
        <label for="email" class="form_label">E-mail Address:</label>
        <input id="email"
            class="form_textbox <?php if(!$form_email && $isProcessingForm) echo 'requiredHighlight';?>" 
            name="email"
            value="<?php echo $form_email; ?>" 
            type="text"
            <?php echo $required; ?>>
            <?php
                if (!$form_email) {
                    echo '<span class="requiredIndicator">*</span>';
                }
            ?>
        <br>

        <!-- State -->
        <label for="state" class="form_label">Your State:</label>
        <select id="state"
            class="form_dropdown"
            name="state"
            <?php echo $required; ?>>

            <option value="">Please select a State...</option>
            <?php
                // Associate array

                // Use the HTML attribute 'selected' for the default value
                // $form_state stores the chosen key
                // For example, $form_state="NJ"
                foreach ($myStates as $key => $value) {
                    $myAttribute="";

                    // Check the value of the array key and check against the value
                    // of the dropdown when the user submitted the form
                    if ($key == $form_state) { 
                        $myAttribute="selected";
                    }
                    echo "<option value=$key $myAttribute>$value</option>";
                }
            ?>
        </select>
        <?php
            if (!$form_state) {
                echo '<span class="requiredIndicator">*</span>';
            }
        ?>

        <br>

        <!-- Preferred Destination -->
        <label for="preferredDestination" class="form_label">Preferred Destination:</label>
        <select id="preferredDestination"
            name="preferredDestination"
            class="form_dropdown"
            <?php echo $required; ?>>

            <option value="">Please select a destination...</option>
            <?php
                foreach($destinationsArray as $key => $value) {
                    // Check the value of the array key and check against the value
                    // of the dropdown when the user submitted the form

                    // Another option is to merge the loginc into a single line using a ternary and concatenation
                    echo "<option value=$key " . ($key == $form_preferredDestination ? 'selected' : '') . ">$value</option>";
                }
            ?>
        </select>

        <br>

        <!-- Preferred cruise line -->
        <label for="preferredCruiseline" class="form_label">Preferred Cruise Line:</label>
        <select id="preferredCruiseline"
            name="preferredCruiseline"
            class="form_dropdown"
            <?php echo $required; ?>>

            <option value="">Please select a cruise line...</option>
            <?php
                foreach($cruiseLineArray as $key => $value) {
                    echo "<option value=$key " . ($key == $form_preferredCruiseline ? 'selected' : '') . ">$value</option>";
                }
            ?>
        </select>

        <br><br>

        <!-- Mailing list -->
        <label>Do you want to be on our mailing list?</label>
        <input type="radio"
            id="mailingList_yes"
            name="mailingList"
            value="yes"
            <?php if ($form_emailList === 'yes') echo "checked"; ?>
            <?php echo $required; ?>>
        <label for="mailingList_yes">Yes</label>

        <input type="radio"
            id="mailingList_no"
            name="mailingList"
            <?php if ($form_emailList === 'no') echo "checked"; ?>
            value="no"
            <?php echo $required; ?>>
        <label for="mailingList_no">No</label>

        <?php
            if (!$form_emailList) {
                echo '<span class="requiredIndicator">*</span>';
            }
        ?>

        <br><br>

        <!-- Terms -->
        <input type="checkbox"
            name="terms"
            <?php echo $required; ?>>I accept the terms
            <span class="requiredIndicator">*</span>
            <br>

        <input type="submit" value="Submit your entry">
       
    </form>

<?php } ?>

<!-- include footer -->
<?php include "includes/include_footer.php"; ?>
</body>
</html>