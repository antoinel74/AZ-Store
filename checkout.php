<!DOCTYPE html>
<html>
<head>
    <title>Shipping Information</title>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = sanitize_input($_POST["firstname"]);
            $lastname = sanitize_input($_POST["lastname"]);
            $email = sanitize_input($_POST["email"]);
            $address = sanitize_input($_POST["address"]);
            $city = sanitize_input($_POST["city"]);
            $zip = sanitize_input($_POST["zip"]);
            $country = sanitize_input($_POST["country"]);

            if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($address) && !empty($city) && !empty($zip) && !empty($country)) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL) && is_numeric($zip)) {
                    echo "<p>Thank you for your order</p>";
                    // empty the shopping cart
                } else {
                    echo "<p>Please enter a valid email and zip code</p>";
                }
            } else {
                echo "<p>All fields are required</p>";
            }
        }

        function sanitize_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" required><br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="city">City:</label>
        <input type="text" id="city" name="city" required><br><br>

        <label for="zip">Zip Code:</label>
        <input type="text" id="zip" name="zip" required><br><br>

        <label for="country">Country:</label>
        <input type="text" id="country" name="country" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
