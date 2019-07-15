<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Bahan</title>
	<link rel="stylesheet" type="text/css" href="/kafe/bahan/index-bahan.css" >
</head>
<body id="body">
<div id="container">
<h3 class="judul">Daftar Bahan</h3>
		<a href='/kafe/bahan/add-bahan.php' id="buat-baru">Buat baru</a>
	<table border="1" width="100%" id="tabel">
		<tr>
            <th id="kolom1">Kode bahan</th>
            <th id="kolom2">Nama bahan</th>
            <th id="kolom3">Kode satuan</th>
            <th id="kolom4">Stock Bahan</th>
            <th id="kolom5">Tindakan</th>
        </tr>


        <?php
        $sql = "SELECT * FROM tb_bahan";
        $query = mysqli_query($db, $sql);

        while($bahan = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$bahan['kode_bahan']."</td>";
            echo "<td>".$bahan['nama_bahan']."</td>";
            echo "<td>".$bahan['kode_satuan']."</td>";
            echo "<td>".$bahan['stock_bahan']."</td>";

            echo "<td>";
            echo "<a href='/kafe/bahan/hapus-bahan.php?kode_bahan=".$bahan['kode_bahan']."' class='link'>Hapus</a> |";
            echo "<a href='/kafe/bahan/edit-bahan.php?kode_bahan=".$bahan['kode_bahan']."' class='link'> edit</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

	</table>
</div>
</body>
</html>