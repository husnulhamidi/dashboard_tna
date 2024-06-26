<style type="text/css">
    .dropdown-menu {
        z-index: 5000 !important;
        position: relative;
        margin-left: -10px;
        right: auto;
    }
    .select2 {
        width:96%!important;
    }
    .loader-wrapper {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        z-index: 1000; /* Pastikan loader berada di atas tabel */
    }

    .loader {
        border: 20px solid #EAF0F6;
        border-radius: 50%;
        border-top: 20px solid #FF7A59;
        width: 200px;
        height: 200px;
        animation: spinner 4s linear infinite;
        margin-left:40%;
        margin-top:5%;
    }

    .loading-text {
        margin-top: -8%;
        margin-left:44%;
        font-size: 20px;
        font-weight: bold;
        color: #FF7A59;
    }

    @keyframes spinner {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            
            <?php $this->load->view('tna/pengawalan/dashlet');?>
            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">

                    <div class="box-header with-border">

                        <div class="col-lg-12">
                            <ul class="nav nav-tabs">
                                <?php $this->load->view('tna/pengawalan/header_tab');?>
                                <div class="pull-right">
                                    <a data-toggle='modal' data-target='#modalFilter'> 
                                        <button class="btn btn-grey btn-sm">
                                            <i class="fa fa-filter"></i> Filter
                                        </button>
                                    </a>
                                    <button class="btn btn-danger btn-sm btn-reset">
                                        <i class="fa fa-repeat"></i> Reset
                                    </button>
                                    <!-- <a href ="<?php echo base_url('tna/pengawalan/create'); ?>">
                                        <button class="btn btn-info btn-sm">
                                            <i class="glyphicon glyphicon-download"></i> Export
                                        </button>
                                    </a> -->
                                    <button class="btn btn-info btn-sm" id="btnExport">
                                        <i class="fa fa-download"></i> Export
                                    </button>
                                </div>
                            </ul>  
                        </div>
                    </div>
                </div>
                <div class="tab-content"  >
                    <div class="tab-pane active">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="loader-wrapper" style="display:none">
                                    <div class="loader" ></div>
                                    <div class="loading-text">Loading...</div>
                                </div>
                                <table  class="table table-striped table-bordered table-hover" id="table-pengawalan" cellspacing="0" width="100%">
                                    <thead>

                                        <tr>
                                            <th class="text-center text-nowrap">Action</th>
                                            <th class="text-center text-nowrap" width="70px">Status</th>
                                            <th class="text-center text-nowrap">ID TNA</th>
                                            <th class="text-center text-nowrap">Nama Karyawan</th>
                                            <th class="text-center text-nowrap">Subdit/Unit</th>
                                            <th class="text-center text-nowrap">Status Karyawan</th>
                                            <th class="text-center text-nowrap">Kompetensi</th>
                                            <th class="text-center text-nowrap">Jenis Dev. Karyawan</th>
                                            <th class="text-center text-nowrap">Pelatihan/Sertifikasi</th>
                                            <th class="text-center text-nowrap">Justifikasi Pengajuan</th>
                                            <th class="text-center text-nowrap">Metode Pembelajaran</th>
                                            <th class="text-center text-nowrap">Estimasi Biaya</th>
                                            <th class="text-center text-nowrap">Nama Penyelenggara</th>
                                            <th class="text-center text-nowrap">Waktu Pelaksanaan</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
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
<?php $this->load->view('tna/pengawalan/modal_popup/modal_filter');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_verifikasi');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_konfirmasi');?>

<?php $this->load->view('tna/pengawalan/modal_popup/modal_kelengkapan_dokumen');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_pakta_integritas');?>

<?php $this->load->view('tna/pengawalan/modal_popup/modal_nota_dinas_penugasan');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_upload_pembayaran');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_upload_sertifikat');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_upload_materi');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_evaluasi');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_internal_sharing');?>

<script type="text/javascript">
    var url_detail = '<?php echo base_url('tna/pengawalan/detail/');?>';
</script>

