<!DOCTYPE HTML>
<html>
<head>
<title>Latihan5</title>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div>
    <h2>Masukkan nilai untuk hitung Deret Fibonacci</h2>

    <form action="fibofunct_latihan5.php" method="post">
        <label>Nilai deret 1:</label> <input type="text" name="angka1"><br>
        <label>Nilai deret 2:</label> <input type="text" name="angka2"><br>
        <label>Jumlah deret:</label> <input type="text" name="jumlah"><br>
        <input type="submit" name="calculate" class="btnSubmit">
    </form>
    </div>
    <div>
    <h2>Masukkan nilai untuk hitung Barisan Aritmatika</h2>

    <form action="aritmatika_latihan5.php" method="post">
        <label>Nilai baris 1:</label> <input type="text" name="ar1"><br>
        <label>Nilai selisih:</label> <input type="text" name="selisih"><br>
        <label>Jumlah deret:</label> <input type="text" name="baris"><br>
        <input type="submit" name="calculate" class="btnSubmit">
    </form>
    </div>
</div>
</body>
</html>