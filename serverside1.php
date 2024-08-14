<html lang = "en">
<head>
<meta charset = "UTF - 8">
<title>Input Form</title>
</head>
<body>
<form action = "file1.php" method = "post">
<label for ="textinput">Enter Text :</label>
<input type = "text" id = "textinput" name = "textinput" rquired > <br><br>
<label for = "numberinput"> Enter Number :</label>
<input type = "number" id = "numberinput" name = "numberinput" required > <br><br>
<label for = "specialinput"> Enter Specialcharacter :</label>
<input type = "text" id = "specialinput" name = "specialinput" required><br><br>
<input type = "submit" value = "Submit">
</form>
</body>
</html>

<?php
function sanitire_input($data){
    return htmlspecialchars(strip_tags(trim($data)));
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["textinput"])){
        $textInput = sanitire_input($_POST["textinput"]);
        if(preg_match("/^[a-zA-Z\s]+$/",$textInput)){
            echo "Valid Text Input : .$textInput <br><br>";
        }
        else{
            echo "Invalid..";
        }
    }
    if(isset($_POST["numberinput"])){
        $numberInput = sanitire_input($_POST["numerinput"])
        if (is_numeric($numberInput) && !preg_match('/\D/',$numberInput)){
            echo "Valid Number Input : .$numberInput <br><br>";
        }
        else{
            echo "Invald..";
        }
    }
    if(isset($_POST["specialinput"])){
        $specialInput = sanitire_input($_POST["specialinput"])
        if(preg_match('/^[a-zA-Z0-9]+$/',$specialInput)){
            echo "Valid Special Character : .$specialInput <br><br>";
        }
        else{
            echo "Invalid..";
        }
    }
}
else{
    echo "Form not submitted correctly.";
}
?>