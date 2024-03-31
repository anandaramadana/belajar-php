<?php
    $produk = array(
        array(
            "nama_mobil" => "Toyota Veloz",
            "jumlah" => 5, 
            "harga" => 300000000,
            "deskripsi" => " Lengkap dengan fitur Toyota Safety Sense & Front Wheel Drive ",
            "gambar" => "img/veloz.jpeg"
        ),
        array(
            "nama_mobil" => "Toyota Avanza",
            "jumlah" => 5, 
            "harga" => 250000000,
            "deskripsi" => " Lengkap dengan fitur Toyota Safety Sense & Front Wheel Drive ",
            "gambar" => "img/avanza.jpeg"
        ),
        array(
            "nama_mobil" => "Toyota Rush",
            "jumlah" => 5, 
            "harga" => 300000000,
            "deskripsi" => " Mobil Keluarga 7 Seater & Rear Wheel Drive ",
            "gambar" => "img/rush.jpeg"
        ),
        array(
            "nama_mobil" => "Toyota Camry",
            "jumlah" => 5, 
            "harga" => 500000000,
            "deskripsi" => " Mobil dengan kualitas premium yang memiliki fitur keamanan lengkap dan tampilan elegan ",
            "gambar" => "img/camry.jpeg"
        ),
        array(
            "nama_mobil" => "Toyota BZ4X",
            "jumlah" => 5, 
            "harga" => 1400000000,
            "deskripsi" => " Mobil listrik pertama Toyota yang dirakit di Indonesia ",
            "gambar" => "img/bz4x.jpeg"
        ),
        array(
            "nama_mobil" => "Toyota Alphard",
            "jumlah" => 5, 
            "harga" => 1000000000,
            "deskripsi" => " Mobil segala aspek keperluan ",
            "gambar" => "img/alphard.jpeg"
        ),
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/produk.css">
    <title>Product</title>
</head>
<body>
    <div class="container">
        <h3 class="title">Produk</h3>
        <div class="product-container" id="list-produk">
            <?php foreach($produk as $item) { ?>
                <div class="product">
                    <img src="<?php echo $item["gambar"]; ?>" alt="Gambar Produk">
                    <h3> <?php echo $item["nama_mobil"]; ?> </h3>
                    <h5> Stok : <?php echo $item["jumlah"]; ?> </h5>
                    <div class="price"> Rp. <?php echo $item["harga"]; ?> </div>
                    <p> <?php echo $item["deskripsi"]; ?> </p>
                </div>
            <?php } ?>
        <div class="form-cancel-btn">
            <a href="index.php"><input type="submit" value="Kembali"></a>
        </div>
    </div>
</body>

<script src="js/product.js"></script>
</html>