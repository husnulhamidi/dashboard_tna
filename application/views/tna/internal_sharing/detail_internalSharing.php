<style type="text/css">
    .error{
        color: #a94442;
    }
    #fieldset1 {
        border: 1px solid #DDDDDD;
        display: inline-block;
        /* font-size: 14px; */
        padding: 1em 2em;
        width: 100%;
    }

    legend {
        /*font-size: 14px;*/
        width:auto;
        border-bottom:none;
    }

    .card{
    	/*border: 1px solid #DDDDDD;*/
        display: inline-block;
        padding: 1em 2em;
        width: 100%;
        height: 150px;
    }
    .card1{
    	border: 1px solid #DDDDDD;
        display: inline-block;
        /*padding: 1em 2em;*/
        width: 97%;
        height:auto;
        margin-left: 20px;
    }

    hr{
    	position: relative;
        top: 20px;
        border: none;
        height: 2px;
        background: #DCDCDC;
        margin-bottom: 50px;
    }

    #containerImage {
	    position: relative; /* Pastikan container memiliki posisi relative */
	    width: 180px; /* Ganti lebar container sesuai kebutuhan */
	    height: 150px; /* Ganti tinggi container sesuai kebutuhan */
	}

	#gambar {
	    position: absolute;
	    top: 20%;
	    left: 30%;
	    transform: translate(-50%, -50%);
	    max-width: 100%; /* Untuk memastikan gambar tidak melebihi ukuran container */
    	max-height: 100%; /* Untuk memastikan gambar tidak melebihi ukuran container */
	}
</style>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <input type="hidden" id="id" value="<?php echo $detail->id ;?>">
            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $title;?></h3>
                    </div>
                   	<div class="box-body">
                   		<div class="row">
	                   		<div class="col-md-12">
	                   			<label class="col-md-2"> ID Internal Sharing </label>
	                   			<div class="col-md-10"><b> <?php echo $detail->id ;?> </b> </div>
	                   		</div>
	                   		<div class="col-md-12 mt-10" style="padding-top: 10px">
	                   			<label class="col-md-2"> Nama TNA </label>
	                   			<div class="col-md-10"><b> <?php echo $detail->judul_materi ;?> </b> </div>
	                   		</div>
	                   		<div class="col-md-12 mt-10" style="padding-top: 10px">
	                   			<label class="col-md-2">Pemateri </label>
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
	                   		<div class="col-md-12 mt-10" style="padding-top: 10px">
	                   			<label class="col-md-2"> Kuota </label>
	                   			<div class="col-md-10"><b> <?php echo $detail->kuota ;?> Peserta </b> </div>
	                   		</div>
	                   		<div class="col-md-12 mt-10" style="padding-top: 10px">
	                   			<label class="col-md-2"> Link Zoom </label>
	                   			<div class="col-md-10"><b> <?php echo $detail->link_zoom ;?> </b> </div>
	                   		</div>
	                   	</div>
	                   	<div class="row">
	                   		<div class="col-md-4" style="padding-top: 20px">
	                   			<div class="pull-right" style="padding-right: 10%">
	                   				<a 
	                   					href="<?php echo $action_url_edit.'/'.$detail->id ?>" 
	                   					class="btn btn-sm btn-primary">
	                   					<i class="fa fa-edit"></i> 
	                   					&nbsp;Edit 
	                   				</a>
	                   				<a 
	                   					href="<?php echo $action_url_generate.'/'.$detail->id.'/pemateri' ?>" 
	                   					class="btn btn-sm btn-primary"> 
	                   					<i class="fa fa-plus"></i> 
	                   					&nbsp; Generate Sertifikat Pemateri 
	                   				</a>
	                   			</div>
	                   		</div>
	                   	</div>
	                   	<hr>

	                   	<div class="row">
	                   		<div class="card1">
		                   		<div class="col-md-6" style="padding-left: 2%">
		                   			<fieldset id="fieldset1">
									  	<legend>Materi Internal Sharing</legend>
									  	<div class="pull-right" style="margin-top: -30px;padding-bottom: 10px">
									  		<button id="btnAddMateri" class="btn btn-xs btn-success">
									  			<i class="fa fa-plus"></i> Tambah
									  		</button>
									  	</div>
										<table class="table" id="table-materi">
											<thead>
												<tr>
													<th class="text-center"> Judul materi </th>
													<th class="text-center"> Dokumen </th>
													<th class="text-center"> Aksi </th>
												</tr>
											</thead>
											<tbody>
												<!-- <tr>
													<td> Pengenalan scrum master </td>
													<td>
														file_pengenalan_scrum_master.pdf
													</td>
													<td>
														<button class="btn-warning btn-xs">
															<i class="fa fa-edit"></i>
														</button>
														<button class="btn-danger btn-xs">
															<i class="fa fa-trash"></i>
														</button>
													</td>
												</tr> -->
											</tbody>
										</table>
									</fieldset>
		                   		</div>
		                   		<div class="col-md-6">
		                   			<fieldset id="fieldset1">
									  	<legend>Dokumentasi Internal Sharing</legend>
									  	<div class="pull-right" style="margin-top: -30px;padding-bottom: 10px; margin-right: 25px">
									  		<button id="uploadDokumentasi" class="btn btn-xs btn-success">
									  			<i class="fa fa-upload"></i> Upload Dokumentasi
									  		</button>
									  	</div>
									  	<div class="col-md-12">
									  		<div id="dataDokumentasi"></div>
									  		<!-- <div class="col-md-4">
									  			<div class="card">
												    <div class="card-body text-center">			Dokumentasi 1
												    </div>
												</div>
												<div class="text-center" style="padding-top: 5%">
													<button class="btn-warning btn-xs">
														<i class="fa fa-edit"></i>
													</button>
													<button class="btn-danger btn-xs">
														<i class="fa fa-trash"></i>
													</button>
												</div>
									  		</div>
									  		<div class="col-md-4">
									  			<div class="card">
												    <div class="card-body text-center">			Dokumentasi 2
												    </div>
												</div>
												<div class="text-center" style="padding-top: 5%">
													<button class="btn-warning btn-xs">
														<i class="fa fa-edit"></i>
													</button>
													<button class="btn-danger btn-xs">
														<i class="fa fa-trash"></i>
													</button>
												</div>
									  		</div>
									  		<div class="col-md-4">
									  			<div class="card">
												    <div class="card-body text-center">			Dokumentasi 3
												    </div>
												</div>
												<div class="text-center" style="padding-top: 5%">
													<button class="btn-warning btn-xs">
														<i class="fa fa-edit"></i>
													</button>
													<button class="btn-danger btn-xs">
														<i class="fa fa-trash"></i>
													</button>
												</div>
									  		</div> -->
									  	</div>
									</fieldset>
		                   		</div>
		                   	</div>
	                   	</div>
	                   	<hr>

	                   	<div class="row">
	                   		<div class="pull-right" style="padding-right: 2%; padding-bottom: 10px">
                   				<button
                   					id="btnAddPeserta"
                   					class="btn btn-sm btn-primary">
                   					<i class="fa fa-plus"></i> 
                   					&nbsp;Tambah Peserta 
                   				</button>
                   				<a 
                   					href="<?php echo $action_url_generate.'/'.$detail->id.'/peserta' ?>"
                   					class="btn btn-sm btn-primary"> 
                   					<i class="fa fa-plus"></i> 
                   					&nbsp; Generate Sertifikat Peserta 
                   				</a>
                   			</div>
                   			<div class="col-md-12">
                   				<table class="table" id="tbl-peserta">
                   					<thead>
                   						<tr>
                   							<th> No </th>
                   							<th> ID Internal Sharing </th>
                   							<th> Nama Peserta </th>
                   							<th> Jabatan </th>
                   							<th> Subunit/Unit </th>
                   							<th> Status Karyawan </th>
                   							<th> Aksi </th>
                   						</tr>
                   					</thead>
                   					<tbody>
                   						<!-- <tr>
                   							<td> 1 </td>
                   							<td> 12345 </td>
                   							<td> Citra Dewi </td>
                   							<td> Manager IT </td>
                   							<td> IT & Digital </td>
                   							<td> FTE </td>
                   							<td>
												<button class="btn-danger btn-xs">
													<i class="fa fa-trash"></i>
												</button>
                   							</td>
                   						</tr> -->
                   					</tbody>
                   				</table>
                   			</div>
	                   	</div>
                   	</div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php 
    $this->load->view('tna/internal_sharing/modal_form_tambah_peserta');
    $this->load->view('tna/internal_sharing/form_tambah_materi');
    $this->load->view('tna/internal_sharing/form_upload_dokumentasi');
?>
<script type="text/javascript">
	var url_file ='<?php echo base_url('files/upload/materi');?>';
	var url_dokumentasi ='<?php echo base_url('files/upload/dokumentasi');?>';
	var url_edit ='<?php echo base_url('tna/InternalSharing/materi/edit');?>';
    $(document).ready(function () {
        $('.select2').select2({
            placeholder: "Pilih Opsi"
        });

        $('#tgl').datepicker({
          autoclose: true
        });

        $(".timepicker").timepicker({
          showInputs: false
        });
    })
</script>
