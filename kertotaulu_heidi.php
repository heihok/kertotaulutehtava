<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kertotaulu</title>
</head>
<body>

<?php require "header.php";?>

<h1>kertotaulutulostin</h1>

<p>Anna numero, saat kertotaulun!</p>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

    <input type="number" name="luku">
    <br>
    <br>
    <input type="submit" value="tulosta kertotaulu" name="tulosta">
    <br>
    <br>
</form>

<?php

    if (!empty($_POST["tulosta"])) {

        $luku = $_POST["luku"];

        for ($i = 1; $i <= 10; $i++) {
            echo $luku . "*" . $i . "=" . $luku * $i;
            echo "<br>";   
        }
    }

?>

<?php require "footer.php";?>

</body>
</html>