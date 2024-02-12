<style type="text/css">
    .dropdown-menu {
        left: auto;
        right: 0;
        z-index: 5000 !important;
        position: relative;
        margin-left: -100px
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
                                    <a href ="<?php echo base_url('tna/pengawalan/create'); ?>">
                                        <button class="btn btn-info btn-sm">
                                            <i class="glyphicon glyphicon-download"></i> Export
                                        </button>
                                    </a>
                                </div>
                            </ul>  
                        </div>
                    </div>
                </div>
                <div class="tab-content"  >
                    <div class="tab-pane active">
                        <div class="row">
                            <div class="col-md-12">
                                <table  class="table table-striped table-bordered table-hover" id="table-pengawalan" cellspacing="0" width="100%">
                                    <thead>

                                        <tr>
                                            <!-- <th width="7%">No</th> -->
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
                                            <th class="text-center text-nowrap">Status</th>
                                            <th class="text-center text-nowrap">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>                              
                                        <tr>
                                            <td>P0001001</td>
                                            <td>8674474-Citra Dewi</td>
                                            <td>Corporate Secretary</td>
                                            <td>FTE</td>
                                            <td>Busines Enabler</td>
                                            <td>Pelatihan</td>
                                            <td>Legal Compliance</td>
                                            <td>-</td>
                                            <td>Offline</td>
                                            <td>Rp.1.000.000</td>
                                            <td>Gajayana</td>
                                            <td>Maret 2023</td>
                                            <td>
                                                Menunggu verifikasi admin HCPD <br>
                                                <i class="fa fa-check-circle text-success"></i>
                                                <i class="fa fa-check-circle text-success"></i>
                                                <i class="fa fa-circle-o"></i>
                                                <i class="fa fa-circle-o"></i>
                                                <i class="fa fa-circle-o"></i>

                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-flat btn-default btn-sm dropdown-toggle" data-toggle="dropdown" style="width: 80px;">
                                                        Action  <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="<?php echo base_url('tna/pengawalan/detail/1/riwayat_verifikasi') ;?>">Detail</a>
                                                        </li>
                                                        <li>
                                                            <a 
                                                                onclick="verifikasi('Mgr. Lini')"> Verifikasi
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a 
                                                                onclick="konfirmasiJadwal()"> Konfirmasi Jadwal
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a 
                                                                onclick="kelengkapanDokumen()"> Kelengkapan Dokumen
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a 
                                                                onclick="paktaIntegritas()"> Pakta Integritas
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a 
                                                                onclick="notaDinasPenugasan()"> Nota Dinas Penugasan
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a 
                                                                onclick="uploadPembayaran()"> Upload Pembayaran
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a 
                                                                onclick="uploadSertifikat()"> Upload Sertifikat
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a 
                                                                onclick="uploadMateri()"> Upload Materi
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a 
                                                                onclick="evaluasi()"> Evaluasi
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a 
                                                                onclick="internalSharing()"> Jadwal Internal Sharing
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
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
<?php $this->load->view('tna/pengawalan/modal_popup/modal_verifikasi');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_konfirmasi');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_filter');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_kelengkapan_dokumen');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_pakta_integritas');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_nota_dinas_penugasan');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_upload_pembayaran');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_upload_sertifikat');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_upload_materi');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_evaluasi');?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_internal_sharing');?>

