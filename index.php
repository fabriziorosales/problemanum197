<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="X-UA-Compatible" charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje encriptado</title>
    <?php error_reporting(0);
     require_once './desencriptar.php'; ?>
</head>
<body>
    <form action="./index.php" method="POST">
        <fieldset>
            <legend>Desencriptar</legend>
            Mensaje encriptado2: <textarea name="msgE2" id="" cols="30" rows="10"><?php echo $_POST['msgE2']; ?></textarea> <br><br>
            Mensaje encriptado1: <textarea name="msgE1" id="" cols="30" rows="10"><?php echo $msgDE2; ?></textarea><br><br>
            Mensaje original: <textarea name="msgO" id="" cols="30" rows="10"><?php echo $msgDE1; ?></textarea> <br><br>
            <br>
            <input type="submit" value="Desencriptar">
        </fieldset>
    </form>
</body>
</html>