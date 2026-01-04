<?php
// Biodata
$nama           = "Wilian";
$kelas          = "TI23J";
$nim            = "20230040095";
$email          = "wilianairawan94@gmail.com";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
        }
        .container {
            width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
        }
        td {
            padding: 6px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Biodata Diri</h2>
        <table>
            <tr>
                <td>Nama</td>
                <td>: <?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>kelas</td>
                <td>: <?php echo $tempat_lahir . ", " . $kelas; ?></td>
            </tr>
            <tr>
                <td>nim</td>
                <td>: <?php echo $nim; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <?php echo $email; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
