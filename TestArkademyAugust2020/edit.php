<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nama_produk=$_POST['nama_produk'];
    $keterangan=$_POST['keterangan'];
    $harga=$_POST['harga'];
    $jumlah=$_POST['jumlah'];


    $result = mysqli_query($mysqli, "UPDATE produk SET nama_produk='$nama_produk',keterangan='$keterangan',harga='$harga', jumlah='$jumlah' WHERE id=$id");

    header("Location: index.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama_produk = $user_data['nama_produk'];
    $keterangan = $user_data['keterangan'];
    $harga = $user_data['harga'];
    $jumlah = $user_data['jumlah'];
}
?>
<html>
<head>  
    <title>Edit Data Produk</title>
</head>

<body>
    <a href="index.php"><< Halaman Utama <<</a>
    <br/><br/>

    <form name="update_produk" method="post" action="edit.php">
    	
        <table border="0">
            <tr> 
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk" value= "<?php echo $nama_produk;?>" ></td>
            </tr>
            <tr> 
                <td>Keterangan</td>
                <td><input type="text" name="keterangan" value="<?php echo $keterangan;?>"></td>
            </tr>
            <tr> 
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $harga;?>"></td>
            </tr>
            <tr> 
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" value="<?php echo $jumlah;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>