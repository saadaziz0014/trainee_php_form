<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    if (empty($name)) {
        echo "<h1>Input Missing</h1>";
    } else {
        echo "<h1>$name</h1>";
        $name = "";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?> method="post">
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="password">Password</label>
        <input type="password" name="name">
        <input type="submit" value="Send">
    </form>
</body>

</html>