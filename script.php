<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $id = $_POST["id"];
        $valore = $_POST["valore"];
        if(isset($_POST['mod'])) {
            $sql = "UPDATE recensioni SET Voto = $valore WHERE idRecensione = $id;";
        } else {
            $sql = "DELETE FROM recensioni WHERE idRecensione = $id;";
        }
        if($conn->query($sql)) {
            echo "<p>Aggiornamento andato a buon fine</p>";
        } else {
            echo "<p style='color: red;'>Aggiornamento non andato a buon fine</p>";
        }
    ?>
    <a href="index.html">Torna alla home</a>
</body>
</html>