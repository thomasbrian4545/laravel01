<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Pegawai</title>
</head>
<body>
    <p><h1>Daftar Pegawai</h1></p>
    <ol>
        <?php
            foreach ($pegawai as $value) {
                echo "<li>$value</li>";
            }
            ?>
    </ol>
</body>
</html>