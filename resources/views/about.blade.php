<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman About</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <a href="/home">Home</a>
    <a href="/about">About</a>
    <a href="/blog">Blog</a>
    <a href="/contact">Contact</a>

    <h1>About Page</h1>

    <h3>Nama : {{ $nama }}</h3>
    <h3>Umur : {{ $age }}</h3>
    <h3>Status : {{ $status }}</h3>

    <img src="img/bestie.jpeg" alt="bestie" width="300">

</body>
</html>