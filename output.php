<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Form</title>
</head>
<body>
    <div class="container2">
        <br>
        <h1>Hasil Formulir Anda</h1>
        <table border="1">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $_POST['nama'] ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo $_POST['alamat'] ?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo $_POST['tglLahir'] ?></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><?php echo $_POST['umur'] ?></td>
            </tr>
        </table>
    </div>
</body>
</html>