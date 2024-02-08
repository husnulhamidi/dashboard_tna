
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $title;?></h3>
                    </div>
                   	<div class="box-body">
                   		<div class="row">
	                   		<div class="col-md-12">
	                   			<label class="col-md-2"> ID TNA </label>
	                   			<div class="col-md-10"><b> <?php echo $detail->id ;?> </b> </div>
	                   		</div>
	                   		<div class="col-md-12 mt-10" style="padding-top: 10px">
	                   			<label class="col-md-2"> Nama TNA </label>
	                   			<div class="col-md-10"><b> <?php echo $detail->judul_materi ;?> </b> </div>
	                   		</div>
	                   		<div class="col-md-12 mt-10" style="padding-top: 10px">
	                   			<label class="col-md-2">Kompetensi </label>
	                   			<div class="col-md-10"><b> Agile Method </b> </div>
	                   		</div>
	                   		<div class="col-md-12 mt-10" style="padding-top: 10px">
	                   			<label class="col-md-2"> Jenis Development </label>
	                   			<div class="col-md-10"><b> Sertifikasi </b> </div>
	                   		</div>
	                   		<div class="col-md-12 mt-10" style="padding-top: 10px">
	                   			<label class="col-md-2"> Pemateri </label>
	                   			<div class="col-md-10"><b> <?php echo $detail->narasumber;?> </b> </div>
	                   		</div>
	                   		<div class="col-md-12 mt-10" style="padding-top: 10px">
	                   			<label class="col-md-2"> Tanggal </label>
	                   			<div class="col-md-10"><b> <?php echo date("d F Y", strtotime($detail->tanggal)) . ' ' . $detail->jam ;?> </b> </div>
	                   		</div>
	                   		<div class="col-md-12 mt-10" style="padding-top: 10px">
	                   			<label class="col-md-2"> Tempat </label>
	                   			<div class="col-md-10"><b> <?php echo $detail->tempat ;?> </b> </div>
	                   		</div>
	                   	</div>
	                   	<hr>
	                   	<div class="row" style="display: none" id="terdaftar">
	                   		<div class="col-md-12">
	                   			<h3 style="padding-left: 10px; color: green">
	                   				<i class="fa fa-check-circle"></i> Terdaftar
	                   			</h3>
	                   			<button 
	                   				onclick="showModal('batal','<?php echo $detail->judul_materi ;?>','<?php echo $id ;?>')" 
	                   				style="padding-left: 10px;margin-top: 20px;margin-bottom: 20px;" 
	                   				class="btn btn-danger">
	                   				<i class="fa fa-fw fa-remove"></i>
	                   				Batalkan Pendaftaran Internal Sharing
	                   			</button>
	                   		</div>
	                   	</div>
	                   	<div class="row" style="display: none" id="belum-terdaftar">
	                   		<div class="col-md-12">
	                   			<h3 style="padding-left: 10px; color: red">
	                   				<i class="glyphicon glyphicon-remove-sign"></i> Belum Terdaftar
	                   			</h3>
	                   			<button 
	                   				onclick="showModal('daftar','<?php echo $detail->judul_materi ;?>','<?php echo $id ;?>')" 
	                   				style="padding-left: 10px;margin-top: 20px;margin-bottom: 20px;" 
	                   				class="btn btn-success">
	                   				<i class="fa fa-file-text"></i>
	                   				&nbsp;Daftar Internal Sharing
	                   			</button>
	                   		</div>
	                   	</div>
                   	</div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    $this->load->view('tna/internal_sharing/modal_confrim');
?>
<script type="text/javascript">
	$(document).ready(function(){

		const status_ikut = '<?php echo @$detail->jumlah_ikut;?>';
		if(status_ikut > 0){
			$('#terdaftar').css('display', 'block')
		}else{
			$('#belum-terdaftar').css('display', 'block')
		}
	})
	// function showModal(ket, pelatihan){
	// 	var formattedDateTime = getCurrentDateTime();
	// 	console.log(formattedDateTime);
	// 	var label = 'Konfirmasi Pendaftaran Internal Sharing'
	// 	var text = 'Apakah anda yakin mau daftar Internal Sharing'
	// 	var text2 = pelatihan
	// 	var nameBtn = 'Ya, Daftar'
	// 	if(ket == 'batal'){
	// 		label = 'Konfirmasi Pembatalan Internal Sharing'
	// 		text = 'Apakah anda yakin mau membatalkan keikutsertaan Internal Sharing'
	// 		nameBtn = 'Ya, Batal'
	// 	}
	// 	$('#label').text(label)
	// 	$('#text').text(text)
	// 	$('#text2').html('<b> '+ pelatihan + ' pada '+ formattedDateTime +'</b> ')
	// 	$('#nameBtn').text(nameBtn)
	// 	$('#modalConfirm').modal('show')
	// }
</script>
