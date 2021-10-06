<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submited!</title>
    <link rel="stylesheet" href="sucsess.css">
</head>
<body>
    <!--NavBar-->
    <nav>
        <img src="smanda.png" alt="logo" class="logo">
        <h3>SMA NEGERI 2 SEMARANG</h3>
        <a href="Home.html" ><span class="inactive">Home</span></a>
        <a href="#" ><span class="inactive">Berita</span></a>
        <a href="ppdb.html" ><span class="active">PPDB</span></a>
        <a href="#" ><span class="inactive">Student</span></a>
        <a href="#" ><span class="inactive">Teacher</span></a>
    </nav>

    <!--content-->
    <div class="content">
        <img src="smanda.png" alt="logo_smanda">
        <h2>Terimakasih telah mengisi formulir pendaftaran PPDB 2021</h2>
        <p>Anda bisa melihat hasil seleksi di menu PPDB pada tangal 25 oktober 2021.</p>
        <a href="Home.html">Back</a>
    </div>

    <div class="php">
        <?php
        print_r($_POST)
        ?>
    </div>
</body>
</html>