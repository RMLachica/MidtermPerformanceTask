<?php
    // Retrieve the value of 'age' from the POST request and store it in the $age variable
    $age = $_POST['age'];
    // Retrieve the value of 'gender' from the POST request and store it in the $gender variable
    $gender = $_POST['gender'];
    // Retrieve the value of 'qoute' (probably meant to be 'quote') from the POST request
    $qoute = $_POST['qoute'];
    //Prints a message using the age, gender, and quote provided
    echo "You are $fname, a $age-year-old $gender.  Your motto in life is: $qoute";
?>