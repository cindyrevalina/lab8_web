<?php
include("koneksi.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>Data Barang</title>
</head>
<body>
    <div class="container">
        <h1>Data Barang</h1>

        <!-- Tombol Tambah Barang -->
        <a class="btn-tambah" href="tambah.php">Tambah Barang</a>

        <div class="main">
            <table>
                <tr>
                    <th>Gambar</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>

                <?php if($result && mysqli_num_rows($result) > 0): ?>
                    <?php while($row = mysqli_fetch_array($result)): ?>
                    <tr>
                        <td>
                            <img src="<?= $row['gambar']; ?>" 
                                 alt="<?= $row['nama']; ?>" 
                                 width="100">
                        </td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['kategori']; ?></td>
                        <td><?= $row['harga_jual']; ?></td>
                        <td><?= $row['harga_beli']; ?></td>
                        <td><?= $row['stok']; ?></td>

                        <td>
                            <a href="ubah.php?id=<?= $row['id_barang']; ?>">Ubah</a> |
                            <a href="hapus.php?id=<?= $row['id_barang']; ?>" 
                               onclick="return confirm('Yakin ingin menghapus?');">
                                Hapus
                            </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <!-- Jika database kosong, tampilkan contoh barang -->
                    <tr>
                        <td><img src="img/hp_samsung.jpg" width="100"></td>
                        <td>HP Samsung Galaxy</td>
                        <td>Hand Phone</td>
                        <td>3.500.000</td>
                        <td>3.000.000</td>
                        <td>10</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td><img src="img/hp_xiaomi.jpg" width="100"></td>
                        <td>HP Xiaomi Redmi</td>
                        <td>Hand Phone</td>
                        <td>2.800.000</td>
                        <td>2.300.000</td>
                        <td>8</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td><img src="img/hp_oppo.jpg" width="100"></td>
                        <td>HP Oppo A57</td>
                        <td>Hand Phone</td>
                        <td>2.900.000</td>
                        <td>2.400.000</td>
                        <td>12</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td><img src="gambar/kulkas.jpg" width="130"></td>
                        <td>Kulkas 2 Pintu</td>
                        <td>Elektronik</td>
                        <td>3.800.000</td>
                        <td>3.200.000</td>
                        <td>5</td>
                        <td>-</td>
                    </tr>

                    <tr>
                        <td><img src="gambar/ac.jpg" width="100"></td>
                        <td>AC Panasonic 1 PK</td>
                        <td>Elektronik</td>
                        <td>4.000.000</td>
                        <td>3.500.000</td>
                        <td>7</td>
                        <td>-</td>
                    </tr>

                <?php endif; ?>
            </table>
        </div>
    </div>
</body>
</html>
