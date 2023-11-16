<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
    $bdate = $_POST['bdate'];
    $plan = $_POST['plan'];
    $payment = $_POST['payment'];

    // You can add additional validation and processing logic here

    // For demonstration purposes, let's just print the submitted data
    echo "<p>Submitted Information:</p>";
    echo "<p>First Name: $fname</p>";
    echo "<p>Last Name: $lname</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Password: $pass</p>";
    echo "<p>Phone Number: $phone</p>";
    echo "<p>Birth Date: $bdate</p>";
    echo "<p>Selected Plan: $plan</p>";
    echo "<p>Selected Payment Method: $payment</p>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Your meta tags, title, and stylesheet links -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" type="text/css" href="StyleCreateAcc.css">
</head>

<body>
    <h1>Create Account</h1>
    <!-- Create Account Section -->
    <div class="container">
        <form id="myForm" action="action_page.php" method="POST">
            <div class="name">
                <label for="fmame">First name: </label>
                <input type="text" id="fname" name="fname" placeholder="Spongebob" required>
                <label for="lname"> Last Name: </label>
                <input type="text" id="lname" name="lname" placeholder="Squarepant" required>
            </div>
            <br>
            <div>
                <label for="email"> Email Id: </label>
                <input type="email" id="email" name="email" placeholder="spongebob@gmail.com">
            </div>
            <br>
            <div>
                <label for="pass"> Password:</label>
                <input type="password" id="pass" name="pass" maxlength="12" required placeholder="************">
            </div>
            <br>
            <div>
                <label for="phone"> Phone Number:</label>
                <input type="tel" id="phone" name="phone" maxlength="10" required placeholder="00000-00000">
            </div>
            <br>
            <div>
                <label for="bdate"> Birth Date:</label>
                <input type="date" id="bdate" name="bdate" required>
            </div>
            <br>

            <div>
                <label for="plan">Select Plan:</label>
                <select id="plan" name="plan">
                    <option>select</option>
                    <option value="visa"> ATHENA (Basic Plan) </option>
                    <option value="mastercard"> ARES (Advanced Plan)</option>
                    <option value="giftcard"> ZEUS (Enterprise Plan)</option>
                </select>
            </div>
            
            <br>

            <div>
                <label for="payment">payment:</label>
                <select id="payment" name="payment">
                    <option>select</option>
                    <option value="debit"> Debit Card </option>
                    <option value="credit"> Credit Card </option>
                    <option value="net">Net Banking</option>
                    <option value="UPI">UPI payment</option>
                    
                </select>
            </div>
            
            <br>
            <div class="buttons">
                <input id="reset" class="submit" role="button" type="reset" onclick="checkFields()"> &nbsp &nbsp
                <input id="submit" class="submit" role="button" type="submit" onclick="checkFields()" >
            </div>

        </form>
    </div>
    <script>
        function checkFields() {
            var inputs = document.getElementsByTagName("input");
            var empty = false;

            for (var i = 0; i < inputs.length; i++) {
                if (inputs[i].type == "text" || inputs[i].type == "email" || inputs[i].type == "password" || inputs[i].type == "tel") {
                    if (inputs[i].value == "") {
                        empty = true;
                        break;
                    }
                }
            }

            if (empty) {
                alert("Please fill out all fields before submitting.");
            } else {
                // Submit the form or perform other actions
                document.getElementById("myForm").submit();
            }
        }
    </script>
        <!-- Add any additional content or styling as needed -->

    </div>
</body>

</html>
