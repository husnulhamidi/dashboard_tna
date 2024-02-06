<style type="text/css">
    .dropdown-menu {
        left: auto;
        right: 0
    }
</style>
<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>

            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    
                    <div class="box-header with-border">
                        <div class="col-lg-6">
                            <h3 class="box-title" style="padding-top:5px"><?php echo $title;?></h3>
                        </div>
                        <div class="col-lg-6 ">
                            <div class="pull-right">
                                <button class="btn btn-default btn-sm" data-toggle='modal' data-target='#modalFilter'  style="padding-right: 20px;padding-left: 20px;">
                                    <i class="glyphicon glyphicon-filter"></i> Filter
                                </button>
                            </div>
                        </div>
                    </div>
                   

                </div>

                <div class="tab-content"  >
                     
                    <div class="tab-pane active">

                       
                        <div class="row">
                            <div class="col-md-12">
                                <table  class="table table-striped table-bordered table-hover" id="tbl-internal-sharing-emp" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th width="7%" class="text-center">No.</th>
                                            <th class="text-nowrap text-center">Materi</th>
                                            <th class="text-nowrap text-center">Nara Sumber</th>
                                            <th class="text-nowrap text-center">Subdit/Unit</th>
                                            <th class="text-nowrap text-center">Tanggal</th>
                                            <th class="text-nowrap text-center">Waktu</th>
                                            <th class="text-nowrap text-center">Tempat</th>
                                            <th class="text-nowrap text-center">Biaya</th>
                                            <th class="text-nowrap text-center">Ket</th>
                                            <th class="text-nowrap text-center">Jumlah Peserta</th>
                                            <th class="text-center">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>Pelatihan scrum master</td>
                                            <td>Firman</td>
                                            <td>IT & Digital</td>
                                            <td>20 Oktober 2023</td>
                                            <td>14:00</td>
                                            <td>Room 1</td>
                                            <td>Rp. 300.000</td>
                                            <td>via zoom (http://zoom.com)</td>
                                            <td>500 Peserta</td>

                                            <td class="text-center">
                                                
                                                <a 
                                                    href="<?php echo site_url('tna/internalSharing-employee/detail/1');?>" 
                                                    data-toggle='tooltip' 
                                                    data-placement='bottom' 
                                                    title='Detail' 
                                                    class='btn btn-info btn-xs'>
                                                   <i class='fa fa-eye' ></i> 
                                                </a>&nbsp;
                                                <button
                                                	onclick="showModal('batal','Pelatihan scrum master')" 
                                                    data-toggle="tooltip" 
                                                    data-placement="bottom" 
                                                    title="klik untuk batal ikut internal sharing" 
                                                    class="btn btn-danger btn-xs">
                                                    <i class="fa fa-fw fa-remove"></i>
                                                </button>&nbsp;
                                               
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>Sertifikasi scrum master</td>
                                            <td>Firman</td>
                                            <td>IT & Digital</td>
                                            <td>29 Oktober 2023</td>
                                            <td>14:00</td>
                                            <td>Room 1</td>
                                            <td>Rp. 300.000</td>
                                            <td>via zoom (http://zoom.com)</td>
                                            <td>500 Peserta</td>

                                            <td class="text-center">
                                                
                                                <a 
                                                    href="<?php echo site_url('tna/internalSharing-employee/detail/2');?>" 
                                                    data-toggle='tooltip' 
                                                    data-placement='bottom' 
                                                    title='Detail' 
                                                    class='btn btn-info btn-xs'>
                                                   <i class='fa fa-eye' ></i> 
                                                </a>&nbsp;
                                                <button 
                                                	onclick="showModal('daftar','Sertifikasi scrum master')" 
                                                    data-toggle="tooltip" 
                                                    data-placement="bottom" 
                                                    title="klik untuk daftar internal sharing" 
                                                    class="btn btn-success btn-xs">
                                                    <i class="fa fa-file-text"></i>
                                                </button>&nbsp;
                                                
                                               
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
        </div>
    </div>
</section>
<?php 
    $this->load->view('tna/internal_sharing/modal_confrim');
?>
<script type="text/javascript">
	function showModal(ket, pelatihan){
		var formattedDateTime = getCurrentDateTime();
		console.log(formattedDateTime);
		var label = 'Konfirmasi Pendaftaran Internal Sharing'
		var text = 'Apakah anda yakin mau daftar Internal Sharing'
		var text2 = pelatihan
		if(ket == 'batal'){
			label = 'Konfirmasi Pembatalan Internal Sharing'
			text = 'Apakah anda yakin mau membatalkan keikutsertaan Internal Sharing'
		}
		$('#label').text(label)
		$('#text').text(text)
		$('#text2').html('<b> '+ pelatihan + ' pada '+ formattedDateTime +'</b> ')
		$('#modalConfirm').modal('show')
	}
</script>