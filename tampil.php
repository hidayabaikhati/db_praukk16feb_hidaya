<?php
include("koneksi.php");

?>
<html>
    <head>
</head>
<center>
<body>
    <h2>DATA INVENTARIS ALAT DAN BAHAN LAB </h2>
    <h4><a href="tambah.php">tambah bahan</a></h4>
    <table border="1">
        <tr>
            <th>no</th>
            <th>nama_user</th>
            <th>jabatan</th>
            <th>nama_bahan</th>
            <th>jenis_bahan</th>
            <th>stok</th>
            <th>harga</th>
            <th>kondisi</th>
            <th>tgl_masuk</th>
</tr>
<?php
include("koneksi.php");
$sql="SELECT * FROM tb_user INNER JOIN tb_bahan ON tb_user.id_user=tb_bahan.id_bahan";
$query =mysqli_query($koneksi,$sql);

while($row=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$row['id_user']."</td>";
    echo"<td>".$row['nama_user']."</td>";
    echo"<td>".$row['jabatan']."</td>";
    echo"<td>".$row['nama_bahan']."</td>";
    echo"<td>".$row['jenis_bahan']."</td>";
    echo"<td>".$row['stok']."</td>";
    echo"<td>".$row['harga']."</td>";
    echo"<td>".$row['kondisi']."</td>";
    echo"<td>".$row['tgl_masuk']."</td>";
    echo"<td>";
    echo"<a href='edit.php?id_user=".$row['id_user']."'>Edit</a>||";
    echo"<a href='hapus.php?id_user=".$row['id_user']."'>Hapus</a>";
    echo"</td>";
    echo"</tr>";


}
?>
</html>
</table>
</center>
</body>