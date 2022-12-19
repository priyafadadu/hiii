<!DOCTYPE HTML>
<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>

<?php

$nameErr = $emailErr = $passwordErr = $countryErr = $stateErr = $cityErr = $addressErr = $genderErr = $websiteErr = $hobbyErr = $intrestErr = "";
$name = $email = $password = $country = $state = $city = $address = $gender = $comment = $website = $hobby = $intrest = "";
$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["name"]))
    {
        $nameErr = "Name is required";
    } else
    {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name))
        {
            $nameErr = "Only letters and white space allowed";
        }
    }


    if (empty($_POST["email"]))
    {
        $emailErr = "Email is required";
    } else
    {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $emailErr = "Invalid email format";
        }
    }
    if(empty($_POST["password"]))
    {
        $passwordErr = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character";
    }
    else
    {
        $password = test_input($_POST["password"]);
        if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8)
        {
            $passwordErr = "invalid password format";
        }
    }


    if (empty($_POST["country"]))
    {
        $countryErr = "country is required";
    }
    else
    {
        $country = test_input($_POST["country"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $country))
        {
            $countryErr = "Only letters and white space allowed";
        }
    }

     if (empty($_POST["state"]))
     {
        $stateErr = "state is required";

     }
     else
     {
         $state = test_input($_POST["state"]);
         if (!preg_match("/^[a-zA-Z-' ]*$/", $state))
         {
             $stateErr = "Only letters and white space allowed";
         }
     }

    if (empty($_POST["city"]))
    {
        $stateErr = "city is required";

    }
    else
    {
        $city = test_input($_POST["city"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $city))
        {
            $cityErr = "Only letters and white space allowed";
        }
    }
    if (empty($_POST["address"])) {
        $address = "";
    } else {
        $address = test_input($_POST["address"]);
    }


    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
            $websiteErr = "Invalid URL";
        }
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["hobby"])) {
        $hobbyErr = "hobby is required";
    } else {
        $hobby = test_input($_POST["hobby"]);
    }
    if (empty($_POST["intrest"])) {
        $intrestErr = "intrest is required";
    } else {
        $intrest = test_input($_POST["intrest"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    password:<input type="text" name="password">
    <span class="error">* <?php echo $passwordErr;?></span>
    <br><br>
    country:<input type="text" name="country">
    <span class="error">* <?php echo $countryErr;?></span>
    <br><br>
    state:<input type="text" name="state">
    <span class="error">* <?php echo $stateErr;?></span>
    <br><br>
    city:<input type="text" name="city">
    <span class="error">* <?php echo $cityErr;?></span>
    <br><br>
    address: <textarea name="address" rows="5" cols="40"></textarea>
    <br><br>
    Website: <input type="text" name="website">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    hobby: <input type="checkbox" name="hobby" value="reading" checked>reading
    <input type="checkbox" name="hobby" value="writing">writing
    <input type="checkbox" name="hobby" value="cooking">cooking
    <span class="error">* <?php echo $hobbyErr;?></span>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female" required>Female
    <input type="radio" name="gender" value="male">Male

    <span class="error">* <?php echo $genderErr;?></span>
    <br><br>
    are you intrested:
    <input type="checkbox" name="intrest" value="YES" checked>YES
    <input type="checkbox" name="intrest" value="NO">NO
    <span class="error">* <?php echo $intrestErr;?></span>

    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo $country;
echo "<br>";
echo $state;
echo "<br>";
echo $city;
echo "<br>";
echo $address;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
echo $hobby;
echo "<br>";
echo $intrest;
?>
</body>
</html>