<html>
<body>
	Dh,<br>
	<h4>Request Instalasi</h4>
	<table width="100%">
        <tr>
			<td colspan="3" height="10px" valign="top"><b>Data Dokumen</b></td>
		</tr>
		<tr>
			<td>No. Order</td>
			<td>:</td>
			<td><?php echo $order_number;?></td>
		</tr>
		<tr>
			<td>Work Order Internal</td>
			<td>:</td>
			<td>
				<?php echo $jenis_wo;?>
				<br>
				<?php echo $no_wo;?>
			</td>
		</tr>
		<tr>
			<td>Form Provisioning</td>
			<td>:</td>
			<td>
				<?php echo $no_provisioning;?>
			</td>
		</tr>
		<tr>
			<td>Nota Aktivasi</td>
			<td>:</td>
			<td>
				<?php echo $no_aktivasi;?>
			</td>
		</tr>
        <tr>
			<td>Lokasi</td>
			<td>:</td>
			<td>
				<?php echo $woi['sid']; ?>
				<br>
				<?php echo $woi['nama_sid']; ?>
			</td>
		</tr>
		<tr>
			<td>Customer</td>
			<td>:</td>
			<td>
				<?php echo $customer;?>
			</td>
		</tr>
		<tr>
			<td>Produk/Layanan</td>
			<td>:</td>
			<td><?php echo $produk.' - '.$layanan;?></td>
		</tr>
        <tr>
			<td>Teknisi</td>
			<td>:</td>
			<td><?php echo $teknisi; ?></td>
		</tr>
		<tr>
			<td><b>Status</b></td>
			<td>:</td>
			<td><?php echo $tahapan_nama;?></td>
		</tr>
		<tr>
			<td><b>Keterangan Histori</b></td>
			<td>:</td>
			<td><?php echo $keterangan_status;?></td>
		</tr>
	</table>
    <p><?php echo $verifikasi==1 ?'Disetujui':'Ditolak';?> oleh <b> <?php echo$verifikator;?></b>.</p>
	<br>
	Demikian disampaikan. <br>
	Selengkapnya dapat dilihat pada aplikasi 3EASy Modul One Stop Fulfillment <a href="https://3easy.telkomsat.co.id">https://3easy.telkomsat.co.id</a> <br>
	Jika ada kendala dapat menghubungi IT Service Desk Telkomsat di +62 821-1315-3427 <br>
	Terima Kasih.
</body>
</html>