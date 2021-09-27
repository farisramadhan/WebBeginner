<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Tugas 1 Web Beginner</title>
</head>
<body>
    <br><br>
    <div class="container">
        <h1 class="data">Silahkan Mengisi Data Diri Anda!</h1>
            <form method="POST" action="output.php">
                Nama <br>
                <input type="text" name="nama" class="form-control mb-3" placeholder="Nama kamu"><br>
                Alamat <br>
                <input type="text" name="alamat" class="form-control mb-3" placeholder="Alamat kamu"><br>
                Tanggal lahir <br>
                <input type="date" name="tglLahir" class="form-control mb-3"><br>
                Umur <br>
                <input type="text" name="umur" class="form-control mb-3" placeholder="Umur kamu"><br>
                <button type="submit" nam="submit" value= "submit">Kirim</button>
            </form>
    </div>
</body>
</html>