<?php
include_once 'koneksi.php';
$title = 'kategori';
$sql = 'SELECT * FROM kategori';
$result = mysqli_query($conn, $sql);

include('header.php');
include('sidebar.php');
?>
	<div class="content_a">
		<div class="main">
			<?php 
				echo '<a href="form_kategori.php" class="btn btn-large">Tambah Kategori</a>';
			?>
			<table>
				<th>Nama Kategori</th>
				<th>Aksi</th>
				<?php while ($row= mysqli_fetch_array($result)):?>
				<tr>
					<td><?php echo $row ['nama_kategori'];?></td>
					<td>
						<a class="btn btn-default" href="edit_kategori.php?id=<?php  echo $row ['id_kategori'];?>">edit</a>
						<a class="btn btn-alert" onclick="return confirm ('Yakin Akan menghapus data?');"
						href="Hapus_Kategori.php?id=<?php echo $row['id_kategori'];?>">delete</a>
					</td>
				</tr>
				<?php endwhile; ?>
			</table>
		</div>
	</div>
<?php 
include('footer.php');
?>	
				