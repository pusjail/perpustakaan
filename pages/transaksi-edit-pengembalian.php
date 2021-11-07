<!-- Begin Page Content --> 
<div class="container-fluid"> 

<!-- row table-->   
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <span class="fas fa-users text-primary mt-2 "> Form Ubah Data transaksi</span>         
    </div>

<?php
	$id_transaksi=$_GET['id'];
	$q_tampil_transaksi=mysqli_query($db,"SELECT * FROM tbtransaksi WHERE idtransaksi='$id_transaksi'");
	$r_tampil_transaksi=mysqli_fetch_array($q_tampil_transaksi);
	?>
	
<div id="label-page"><h3>Edit Data Transaksi</h3></div>
<div id="content">
	<form action="proses/transaksi-edit-proses.php" method="post" enctype="multipart/form-data">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Transaksi</td>
			<td class="isian-formulir"><input type="text" name="idtransaksi" value="<?php echo $r_tampil_transaksi['idtransaksi']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><input type="text" name="idanggota" value="<?php echo $r_tampil_transaksi['idanggota']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><input type="text" name="idbuku" value="<?php echo $r_tampil_transaksi['idbuku']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Pinjam</td>
			<td class="isian-formulir"><input type="date" name="tglpinjam" value="<?php echo $r_tampil_transaksi['tglpinjam']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>>
		</tr>
		<tr>
			<td class="label-formulir">Tanggal Kembali</td>
			<td class="isian-formulir"><input type="date" name="tglkembali" value="<?php echo $r_tampil_transaksi['tglkembali']; ?>"  class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
		
		
