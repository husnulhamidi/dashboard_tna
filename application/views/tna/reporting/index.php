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
        margin-left:50%;
        margin-top:30%;
    }

    .loading-text {
        margin-top: -9%;
        margin-left:55%;
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
                                
                                <button class="btn btn-default btn-sm" data-toggle='modal' data-target='#ModalFilter'>
                                    <i class="fa fa-filter"></i> Filter
                                </button>
                                <button class="btn btn-danger btn-sm btn-reset">
                                    <i class="fa fa-repeat"></i> Reset
                                </button>
                                <button class="btn btn-success btn-sm btn-generate">
                                    <i class="fa fa-random"></i> Generate Data
                                </button>
                                <a href ="<?php echo base_url('tna/reporting/create'); ?>"><button class="btn btn-info btn-sm">
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
                                <table  class="table  table-bordered table-hover" id="table-reporting" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-nowrap"> No </th>
                                            <th class="text-center text-nowrap"> Tahun </th>
                                            <th class="text-center text-nowrap"> Nama Kegiatan </th>
                                            <th class="text-center text-nowrap"> Instituisi Penyelenggara </th>
                                            <th class="text-center text-nowrap"> Metode </th>
                                            <th class="text-center text-nowrap"> Jenis Pelatihan/Sertifikasi </th>
                                            <th class="text-center text-nowrap"> Kompetensi </th>
                                            <th class="text-center text-nowrap"> Tanggal Mulai </th>
                                            <th class="text-center text-nowrap"> Tanggal Selesai </th>
                                            <th class="text-center text-nowrap"> Lama Kegiatan </th>
                                            <th class="text-center text-nowrap"> Bulan </th>
                                            <th class="text-center text-nowrap"> Kuartal </th>
                                            <th class="text-center text-nowrap"> NIK </th>
                                            <th class="text-center text-nowrap"> Nama Peserta </th>
                                            <th class="text-center text-nowrap"> Posisi </th>
                                            <th class="text-center text-nowrap"> Direktori </th>
                                            <th class="text-center text-nowrap"> Subdit/subunit </th>
                                            <th class="text-center text-nowrap"> Jumlah NIK </th>
                                            <th class="text-center text-nowrap"> BP </th>
                                            <th class="text-center text-nowrap"> FTE/Non FTE </th>
                                            <th class="text-center text-nowrap"> Petihan/Sertifikasi </th>
                                            <th class="text-center text-nowrap"> Nomor Sertifikasi </th>
                                            <th class="text-center text-nowrap"> Kategori </th>
                                            <th class="text-center text-nowrap"> Tanggal Awal Sertifikasi </th>
                                            <th class="text-center text-nowrap"> Tanggal Akhir Sertifikasi </th>
                                            <th class="text-center text-nowrap"> No HT </th>
                                            <th class="text-center text-nowrap"> No SPB </th>
                                            <th class="text-center text-nowrap"> Biaya Kegiatan </th>
                                            <th class="text-center text-nowrap"> Currency Key </th>
                                            <!-- <th class="text-center text-nowrap"> Biaya Penjalanan Dinas </th>
                                            <th class="text-center text-nowrap"> Currency Key </th> -->
                                            <!-- <th class="text-center text-nowrap"> Scan Sertifikasi </th> -->
                                            <!-- <th class="text-center text-nowrap"> Materi Training </th>
                                            <th class="text-center text-nowrap"> Evaluasi Training </th> -->
                                            <th class="text-center text-nowrap"> Keterangan </th>
                                            
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
    $this->load->view('tna/reporting/form_filter');
?>
