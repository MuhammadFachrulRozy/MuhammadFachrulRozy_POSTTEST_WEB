<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>MANGZY SNEAKERS</title>
</head>
<body background = "img\logo sneakers.jpg">
    <div class="signup">
        <h3>MANGZY SNEAKERS</h3>
        <div class="border"></div>
        <a href="admin.php">Admin</a>
        <form action="page.php" method="get" name="input">
        <div>
                <input type="text" name="nama" required="" placeholder="Nama">
            </div>

            <div>
                <input type="email" name="email" required="" placeholder="Email">
            </div>

            <div>
                <input type="number" name="nomor" required="" placeholder="Nomor Handphone">
            </div>

            <div>
                <input type="text" name="merk" required="" placeholder="Merk Sepatu">
            </div>

            <div>
                <input type="number" name="size" required="" placeholder="Size Sepatu">
            </div>


            <div>
                <input type="number" name="jumlah" required="" placeholder="Jumlah">
            </div>

            <div>
                <input type="date" name="date" required="" placeholder="Tanggal Order Buy">
            </div>

            <input type="submit" name="input" value="ENTER">
        </form>
    </div>
</body>
</html>