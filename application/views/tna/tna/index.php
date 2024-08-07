<style type="text/css">
    .dropdown-menu {
        z-index: 5000 !important;
        position: relative;
        margin-left: -10px;
        right: auto;
    }
    .changeColor {
        background-color: #ff000024;
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
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>

            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    
                    <div class="box-header with-border">
                        <div class="col-lg-6">
                            <h3 class="box-title" style="padding-top:5px"><?php echo $title;?></h3>
                        </div>
                        <div class="col-lg-6 ">
                            
                            <div class="pull-right">
                                <button class="btn btn-default btn-sm" data-toggle='modal' data-target='#ModalImportExcel'>
                                    <i class="fa fa-upload"></i> Upload
                                </button>
                                <button class="btn btn-default btn-sm" id="btnExport">
                                    <i class="fa fa-download"></i> Export
                                </button>
                                <button class="btn btn-default btn-sm" data-toggle='modal' data-target='#ModalFilter'>
                                    <i class="fa fa-filter"></i> Filter
                                </button>
                                <button class="btn btn-danger btn-sm btn-reset">
                                    <i class="fa fa-repeat"></i> Reset
                                </button>
                                <a href ="<?php echo base_url('tna/create'); ?>"><button class="btn btn-info btn-sm">
                                    <i class="glyphicon glyphicon-plus"></i> Tambah
                                </button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane active">                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="loader-wrapper" style="display:none">
                                    <div class="loader" ></div>
                                    <div class="loading-text">Loading...</div>
                                </div>
                                <table  class="table  table-bordered table-hover" id="table-tna" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-nowrap">Aksi</th>
                                            <th class="text-center text-nowrap">ID TNA</th>
                                            <th class="text-center text-nowrap">Sub Unit/Unit</th>
                                            <th class="text-center text-nowrap">Nama Karyawan</th>
                                            <th class="text-center text-nowrap">Status Karyawan</th>
                                            <th class="text-center text-nowrap">Nama Pelatihan</th>
                                            <th class="text-center text-nowrap">Objective</th>
                                            <th class="text-center text-nowrap">Jenis/Development</th>
                                            <th class="text-center text-nowrap">Metoda Pembelajaran</th>
                                            <th class="text-center text-nowrap">Jenis Pelatihan/Sertifikasi</th>
                                            <th class="text-center text-nowrap">Kompetensi</th>
                                            <th class="text-center text-nowrap">Nama Penyelenggara</th>
                                            <th class="text-center text-nowrap">Waktu Pelaksanaan</th>
                                            <th class="text-center text-nowrap">Estimasi Biaya</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody id="tbody" style="overflow-y: none;"></tbody>
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
    // $this->load->view('tna/tna/modal_upload');
    $this->load->view('tna/common/form_import_excel');
?>
<?php $this->load->view('tna/tna/modal_filter');?>
<script type="text/javascript">
    $(document).ready(function(){
        const link_template = base_url+'files/upload/excel/template_uplaod_tna.xlsx'
        $('#template_upload').html('Untuk template upload file <a href="'+link_template+'"> Download Disini </a>')
    })
    const url_submit_import = base_url+"tna/import";
    const url_detail = '<?php echo base_url('tna/detail/');?>';
   var url_edit ='<?php echo base_url('tna/edit/');?>';
</script>
