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
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane active">                       
                        <div class="row">
                            <div class="col-md-12">
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
