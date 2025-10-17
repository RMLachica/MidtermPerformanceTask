<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MidtermPerformanceTask</title>
</head>
<body>
    <!-- HTML Form for user input -->
    <form action="" method="post">
        <!-- Text input for the user's first name, required to submit the form -->
        <label >First Name:</label>
        <input required name='name' type="text"><br>
        <!-- Text input for the user's age, also required -->
        <label>Age:  </label>
        <input required name='age' type="text"><br>
        <!-- Dropdown for selecting gender -->
        <label>Gender:  </label>
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>
        <!-- Text area for the user to input a quote or life motto -->
        <label>Qoute:</label>
        <textarea required name="qoute"></textarea><br>
        <!-- Submit button to send the form data -->
        <input type="submit">
    </form>
</body>
</html>

<?php
// Check if the form was submitted using the POST method
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Retrieve the value of 'age' from the POST request and store it in the $age variable
    $age = $_POST['age'];
    // Retrieve the value of 'gender' from the POST request and store it in the $gender variable
    $gender = $_POST['gender'];
    // Retrieve the value of 'qoute' (probably meant to be 'quote') from the POST request
    $qoute = $_POST['qoute'];
    //Prints a message using the age, gender, and quote provided
    echo "You are $fname, a $age-year-old $gender.  Your motto in life is: $qoute";
}
?>
