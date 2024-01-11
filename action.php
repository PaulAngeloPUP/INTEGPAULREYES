<!DOCTYPE html>
<html>
    <head>
        <title>Submitted Data</title>
    </head>
    <body>
        <h2>Submitted Data:</h2>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "First Name: " . htmlspecialchars($_POST["fname"]) . "<br>";
    echo "Middle Name: " . htmlspecialchars($_POST["mname"]) . "<br>";
    echo "Last Name: " . htmlspecialchars($_POST["lname"]) . "<br>";
    echo "Email: " . htmlspecialchars($_POST["email"]) . "<br>";
    echo "Sex: " . htmlspecialchars($_POST["sex"]) . "<br>";

    if(isset($_POST["subjects"])) {
        echo "Subjects Taken: " . implode(", ", $_POST["subjects"]) . "<br>";
    }
}
?>

    </body>
</html>
