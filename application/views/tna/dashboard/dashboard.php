<style>
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
            <div class="row">
                <div class="col-lg-7">
                </div>
                <div class="col-lg-2">
                    <div id="year">
                        <div class="input-group date">
                            <span class="input-group-addon">Tahun </span>
                            <input autocomplete="off" type="text" class="form-control" name="filter_year" id="filter_year"  value="<?php echo date('Y');?>">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group">
                        <select class="form-control" nama="filter_quartal" id="filter_quartal">
                            <option value="All"> Semua Quartal</option>
                            <option value="1"> Quartal 1 </option>
                            <option value="2"> Quartal 2 </option>
                            <option value="3"> Quartal 3 </option>
                            <option value="4"> Quartal 4 </option>
                        </select>
                        <span class="input-group-btn">
                        <button type="button" class="btn btn-info btn-flat">Filter <i class="fa fa-filter"></i></button>
                        </span>
                    </div>
                <!-- /input-group -->
            </div>
            </div>
            <br>
            <div class="row">
                
               <!-- /.col -->
                <div class="col-md-4">
                <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user animated slideInLeft">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-green-active">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="widget-user-username"><b>PELATIHAN</b></h3>
                                <h2 class="widget-user-desc"><span class="count" id="pelatihan">100</span></h2>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                        
                    
                    </div>
                    <div class="box-footer">
                    <div class="row" style="margin-top:-20px">
                        <div class="col-sm-12" style="border-bottom:1px dashed #ccc">
                        <div class="description-block">
                            <h5 class="description-header"><span class="count_dashboard" id="peserta_pelatihan">100</span></h5>
                            <span class="description-text">JUMLAH PESERTA</span>
                        </div>
                        <!-- /.description-block -->
                        </div>
                        <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header"><span class="count_dashboard" id="peserta_pelatihan_fte">100</span></h5>
                            <span class="description-text">FTE</span>
                        </div>
                        <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header"><span class="count_dashboard" id="peserta_pelatihan_non_fte">100</span></h5>
                            <span class="description-text">NON FTE</span>
                        </div>
                        <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header"><span class="count_dashboard" id="peserta_pelatihan_tba">100</span></h5>
                            <span class="description-text">TBA</span>
                        </div>
                        <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    </div>
                </div>
                <!-- /.widget-user -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
                <div class="col-md-4">
                <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-aqua-active">
                    <h3 class="widget-user-username"><b>SERTIFIKASI</b></h3>
                    <h2 class="widget-user-desc"><span class="count_dashboard" id="sertifikasi">100</span></h2>
                    </div>
                    <div class="box-footer">
                    <div class="row" style="margin-top:-20px">
                        <div class="col-sm-12" style="border-bottom:1px dashed #ccc">
                        <div class="description-block">
                            <h5 class="description-header"><span class="count_dashboard" id="peserta_sertifikasi">100</span></h5>
                            <span class="description-text">JUMLAH PESERTA</span>
                        </div>
                        <!-- /.description-block -->
                        </div>
                        <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header"><span class="count_dashboard" id="peserta_sertifikasi_fte">100</span></h5>
                            <span class="description-text">FTE</span>
                        </div>
                        <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header"><span class="count_dashboard" id="peserta_sertifikasi_non_fte">100</span></h5>
                            <span class="description-text">NON FTE</span>
                        </div>
                        <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header"><span class="count_dashboard" id="peserta_sertifikasi_tba">100</span></h5>
                            <span class="description-text">TBA</span>
                        </div>
                        <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    </div>
                </div>
                <!-- /.widget-user -->
                </div>
                <!-- /.col -->

                 <!-- /.col -->
                 <div class="col-md-4">
                <!-- Widget: user widget style 1 -->
                <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-orange-active">
                        <h3 class="widget-user-username"><b>INTERNAL SHARING</b></h3>
                        <h2 class="widget-user-desc"><span class="count_dashboard" id="internal_sharing"></span></h2>
                    </div>
                    <div class="box-footer">
                    <div class="row" style="margin-top:-20px">
                        <div class="col-sm-12" style="border-bottom:1px dashed #ccc">
                            <div class="description-block">
                                <h5 class="description-header"><span class="count_dashboard" id="internal_sharing_rencana">100</span></h5>
                                <span class="description-text">RENCANA</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <div class="col-sm-6">
                            <div class="description-block border-right">
                                <h5 class="description-header"><span class="count_dashboard" id="internal_sharing_realisasi">100</span></h5>
                                <span class="description-text">REALISASI</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                          <!-- /.col -->
                          <div class="col-sm-6">
                            <div class="description-block">
                                <h5 class="description-header"><span class="count_dashboard" id="internal_sharing_todo">100</span></h5>
                                <span class="description-text">TODO</span>
                            </div>
                            <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                    </div>
                </div>
                <!-- /.widget-user -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-12">
                    <h3> STATISTIK PLANING DAN REALISASI PELATIHAN PER QUARTAL <span id="tahun_filter" class="tahun_filter"></span></h3>
                </div>
                <div class="col-md-3">
                    <div class="panel">
                        <div id="pelatihan_q1"></div>
                    </div>
                </div>
                <div class="col-md-3 animated fadeInUp">
                    <div class="panel">
                        <div id="pelatihan_q2"></div>
                    </div>
                </div>
                <div class="col-md-3 animated fadeInUp">
                    <div class="panel">
                        <div id="pelatihan_q3"></div>
                    </div>
                </div>

                <div class="col-md-3 animated fadeInUp">
                    <div class="panel">
                        <div id="pelatihan_q4"></div>
                    </div>
                </div>
                
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <h3> STATISTIK PLANING DAN REALISASI SERTIFIKASI PER QUARTAL <span class="tahun_filter" id="tahun_filter_sertifikasi"></span></h3>
                </div>
                <div class="col-md-3 animated fadeInUp">
                    <div class="panel">
                        <div id="sertifikasi_q1"></div>
                    </div>
                </div>
                <div class="col-md-3 animated fadeInUp">
                    <div class="panel">
                        <div id="sertifikasi_q2"></div>
                    </div>
                </div>
                <div class="col-md-3 animated fadeInUp">
                    <div class="panel">
                        <div id="sertifikasi_q3"></div>
                    </div>
                </div>

                <div class="col-md-3 animated fadeInUp">
                    <div class="panel">
                        <div id="sertifikasi_q4"></div>
                    </div>
                </div>
                
            </div>

            <div class="row">
                <div class="col-md-6 animated fadeInUp">
                    <div class="panel">
                        <div id="internal_sharing_chart"></div>
                    </div>
                </div>
                <div class="col-md-6 animated fadeInUp">
                    <div class="panel">
                        <div id="peserta_internal_sharing"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h4> Daftar List TNA Urgent</h4>
                            <hr>
                            <table class="table table-urgent">
                                <thead>
                                    <th class="text-center"> No </th>
                                    <th class="text-center"> ID TNA </th>
                                    <th class="text-center"> Nama </th>
                                    <th class="text-center"> Subdit </th>
                                    <th class="text-center"> Pelatihan </th>
                                    <th class="text-center"> Jenis Sertifikasi </th>
                                    <th class="text-center"> Kompetensi </th>
                                    <th class="text-center"> Waktu Pelaksanaan </th>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="loader-wrapper" style="display:none">
                        <div class="loader" ></div>
                        <div class="loading-text">Loading...</div>
                    </div>
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <div class="row align-items-center mb-3">
                                <div class="col-md-8">
                                    <h4>Daftar Sertifikat <span id="title_sertificate"></span> - Tahun <span class="tahun_filter"></span></h4>
                                </div>
                                <div class="col-md-4 text-right">
                                    <select class="form-control d-inline-block" style="max-width: 60%; display: inline-block;" name="filter_sertifikat" id="filter_sertifikat">
                                        <option>Nasional</option>
                                        <option>Internasional</option>
                                    </select>
                                    <button class="btn btn-primary btn-sm ml-2 export-list-sertificate">
                                        <i class="fa fa-download"></i> Export
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <table class="table table-sertif">
                                <thead>
                                    <tr>
                                        <th class="text-center" rowspan="2">No</th>
                                        <th class="text-center" rowspan="2">Nama Sertifikat</th>
                                        <th class="text-center" rowspan="2">Nama Karyawan</th>
                                        <th class="text-center" rowspan="2">Subdit</th>
                                        <th class="text-center" colspan="2">Berlaku Sertifikat</th>
                                        <th class="text-center" rowspan="2">Sertifik No</th>
                                        <th class="text-center" rowspan="2">Lembaga</th>
                                        <th class="text-center" rowspan="2">Keterangan</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Mulai</th>
                                        <th class="text-center">Berakhir</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><span id="draft" class="draft"> 30 </span></h3>

                            <p>Draft</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><span id="verifMgrLini" class="count">10</span></h3>
                            <p>Menunggu Verifikasi Mgr. Lini</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-file-zip-o"></i>
                        </div>
                        
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3><span id="verifMgrHCPD" class="count">44</span></h3>

                        <p>Menunggu Verifikasi Mgr.HCPD</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-server"></i>
                        </div>
                        
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3><span id="verifAVPHCPD" class="count">65</span></h3>

                        <p>Menunggu Verifikasi AVP. HCPD</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-clipboard"></i>
                        </div>
                        
                    </div>
                </div>
                <!-- ./col -->

                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3><span id="pernyataanFormPeserta" class="count">30</span></h3>

                        <p>Menunggu <br>Form Pernyataan Peserta</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3><span id="rekonfirmasiKuota" class="count">53</span></h3>

                        <p>Menunggu <br>Konfirmasi Jadwal Pelaksanaan</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-file-zip-o"></i>
                        </div>
                        
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3><span id="kelengkapanDok" class="count">44</span></h3>

                        <p>Menunggu <br>Kelengkapan Dokumen Pendaftaran</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-server"></i>
                        </div>
                        
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3><span id="notaDinas" class="count">65</span></h3>

                        <p>Menunggu <br>Nota Dinas Penugasan</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-clipboard"></i>
                        </div>
                        
                    </div>
                </div>
            </div>
                <!-- ./col -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3><span id="pembayaran" class="count">30</span></h3>

                        <p>Menunggu Pembayaran</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                        
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3><span id="sertifikat" class="count">53</span></h3>

                        <p>Menunggu Upload Sertifikasi</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-file-zip-o"></i>
                        </div>
                        
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3><span id="materi" class="count">44</span></h3>

                        <p>Menunggu Upload Materi</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-server"></i>
                        </div>
                        
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3><span id="jadwal" class="count">65</span></h3>

                        <p>Menunggu Internal Sharing</p>
                        </div>
                        <div class="icon">
                        <i class="fa fa-clipboard"></i>
                        </div>
                        
                    </div>
                </div>
                <!-- ./col -->
                
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                        <h3><span id="evaluasi" class="count">250</span></h3>
                        <p>Menunggu Evaluasi Atasan</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-briefcase"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><span id="selesai" class="count">53</span></sup></h3>
                            <p>Selesai</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-file-zip-o"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-6">
                    <!-- USERS LIST -->
                    <div class="box box-default">
                        <div class="box-header with-border">
                            <h3 class="box-title">Anggaran TNA <span class="tahun_filter" id="thn_anggaran_tna"></span></h3>

                            <div class="box-tools pull-right">
                                <!-- <span class="label label-danger">10 karyawan</span> -->
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="rowx">
                                <div class="col-md-6">
                                    <div class="info-box bg-yellow">
                                        <span class="info-box-icon"><i class="fa fa-hourglass"></i></span>

                                        <div class="info-box-content">
                                        <span class="info-box-text">Rencana</span>
                                        <br>
                                        <span class="info-box-number"><span count="count_rencana_anggaran" id="count_rencana_anggaran"></span></span>
                                        
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 100%"></div>
                                        </div>
                                        
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!-- /.info-box -->
                                    <div class="info-box bg-green">
                                        <span class="info-box-icon"><i class="fa fa-hourglass-end"></i></span>

                                        <div class="info-box-content">
                                        <span class="info-box-text">Realisasi</span>
                                        <br>
                                        <span class="info-box-number"><span count="count_rencana_anggaran" id="count_realisasi_anggaran"></span></span>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 80%"></div>
                                        </div>
                            
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                </div>

                            </div>
                            
                        
                        </div>
                    </div>
                    <!--/.box -->
                </div>
                <div class="col-md-6">
                    <!-- USERS LIST -->
                    <div class="box box-default">
                        <div class="box-header with-border">
                        <h3 class="box-title">Anggaran NON TNA <?php echo $filter_year;?></h3>

                        <div class="box-tools pull-right">
                            <!-- <span class="label label-danger">10 karyawan</span> -->
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                        </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="info-box bg-yellow">
                                        <span class="info-box-icon"><i class="fa fa-hourglass"></i></span>

                                        <div class="info-box-content">
                                        <span class="info-box-text">Rencana</span>
                                        <br>
                                        <span class="info-box-number"><span count="count_rencana_anggaran" id="count_rencana_anggaran_non_tna"></span></span>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 100%"></div>
                                        </div>
                                        
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!-- /.info-box -->
                                    <div class="info-box bg-green">
                                        <span class="info-box-icon"><i class="fa fa-hourglass-end"></i></span>

                                        <div class="info-box-content">
                                        <span class="info-box-text">Realisasi</span>
                                        <br>
                                        <span class="info-box-number"><span count="count_rencana_anggaran" id="count_realisasi_anggaran_non_tna"></span></span>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 80%"></div>
                                        </div>
                            
                                        </div>
                                        <!-- /.info-box-content -->
                                    </div>
                                </div>
                                
                            </div>
                            
                        
                        </div>
                    </div>
                    <!--/.box -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h3>SUMMARY - TOTAL REALISASI COST TNA <span class="tahun_filter" id="thn_summary"></span>
                </div>
                <div class="col-md-3">
                    <a onclick="redirectDetail('tna',1)" style="cursor:pointer">
                        <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="fa fa-hourglass"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Quartal 1</span>
                            <br>
                            <span class="info-box-number summary_tna" id="summary_tna_q1"></span>
                        
                            <div class="progress">
                                <div class="progress-bar" style="width: 25%"></div>
                            </div>
                            
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <!-- /.info-box -->
                    <a onclick="redirectDetail('tna',2)" style="cursor:pointer">
                        <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="fa fa-hourglass-end"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Quartal 2</span>
                            <br>
                            <span class="info-box-number summary_tna" id="summary_tna_q2"></span>
                            
                            <div class="progress">
                                <div class="progress-bar" style="width: 20%"></div>
                            </div>
                
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <!-- /.info-box -->
                    <a onclick="redirectDetail('tna',3)" style="cursor:pointer">
                        <div class="info-box bg-blue">
                            <span class="info-box-icon"><i class="fa fa-hourglass-end"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Quartal 3</span>
                            <br>
                            <span class="info-box-number summary_tna" id="summary_tna_q3"></span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 40%"></div>
                            </div>
                
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <!-- /.info-box -->
                    <a onclick="redirectDetail('tna',4)" style="cursor:pointer">
                        <div class="info-box bg-orange">
                            <span class="info-box-icon"><i class="fa fa-hourglass-end"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Quartal 4</span>
                            <br>
                            <span class="info-box-number summary_tna" id="summary_tna_q"></span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 15%"></div>
                            </div>
                
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                </div>
                
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h3>SUMMARY - TOTAL REALISASI COST NON TNA <span class="tahun_filter" id="thn_summary_non_tna"></span>
                </div>
                <div class="col-md-3">
                    <a onclick="redirectDetail('non-tna',1)" style="cursor:pointer">
                        <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="fa fa-hourglass"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Quartal 1</span>
                            <br>
                            <span class="info-box-number summary_tna" id="summary_non_tna_q1"></span>
                            
                            <div class="progress">
                                <div class="progress-bar" style="width: 25%"></div>
                            </div>
                            
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <!-- /.info-box -->
                    <a onclick="redirectDetail('non-tna',2)" style="cursor:pointer">
                        <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="fa fa-hourglass-end"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Quartal 2</span>
                            <br>
                            <span class="info-box-number summary_tna" id="summary_non_tna_q2"></span>
                        
                            <div class="progress">
                                <div class="progress-bar" style="width: 20%"></div>
                            </div>
                
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <!-- /.info-box -->
                    <a onclick="redirectDetail('non-tna',3)" style="cursor:pointer">
                        <div class="info-box bg-blue">
                            <span class="info-box-icon"><i class="fa fa-hourglass-end"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Quartal 3</span>
                            <br>
                            <span class="info-box-number summary_tna" id="summary_non_tna_q3"></span>
                            
                            <div class="progress">
                                <div class="progress-bar" style="width: 40%"></div>
                            </div>
                
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <!-- /.info-box -->
                    <a onclick="redirectDetail('non-tna',4)" style="cursor:pointer">
                        <div class="info-box bg-orange">
                            <span class="info-box-icon"><i class="fa fa-hourglass-end"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Quartal 4</span>
                            <br>
                            <span class="info-box-number summary_tna" id="summary_non_tna_q4"></span>
                            
                            <div class="progress">
                                <div class="progress-bar" style="width: 15%"></div>
                            </div>
                
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                </div>
                
            </div>  


            <div class="row">
                <div class="col-md-12">
                    <h3>SUMMARY - TOTAL REALISASI COST INTERNAL SHARING <span class="tahun_filter" id="thn_summary_is"></span>
                </div>
                <div class="col-md-3">
                    <a onclick="redirectDetail('is',1)" style="cursor:pointer">
                        <div class="info-box bg-yellow">
                            <span class="info-box-icon"><i class="fa fa-hourglass"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Quartal 1</span>
                            <br>
                            <span class="info-box-number summary_tna" id="summary_is_q1"></span>
                            
                            <div class="progress">
                                <div class="progress-bar" style="width: 25%"></div>
                            </div>
                            
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <!-- /.info-box -->
                    <a onclick="redirectDetail('is',2)" style="cursor:pointer">
                        <div class="info-box bg-green">
                            <span class="info-box-icon"><i class="fa fa-hourglass-end"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Quartal 2</span>
                            <br>
                            <span class="info-box-number summary_tna" id="summary_is_q2"></span>
                        
                            <div class="progress">
                                <div class="progress-bar" style="width: 20%"></div>
                            </div>
                
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <!-- /.info-box -->
                    <a onclick="redirectDetail('is',3)" style="cursor:pointer">
                        <div class="info-box bg-blue">
                            <span class="info-box-icon"><i class="fa fa-hourglass-end"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Quartal 3</span>
                            <br>
                            <span class="info-box-number summary_tna" id="summary_is_q3"></span>
                            
                            <div class="progress">
                                <div class="progress-bar" style="width: 40%"></div>
                            </div>
                
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <!-- /.info-box -->
                    <a onclick="redirectDetail('is',4)" style="cursor:pointer">
                        <div class="info-box bg-orange">
                            <span class="info-box-icon"><i class="fa fa-hourglass-end"></i></span>

                            <div class="info-box-content">
                            <span class="info-box-text">Quartal 4</span>
                            <br>
                            <span class="info-box-number summary_tna" id="summary_is_q4"></span>
                            
                            <div class="progress">
                                <div class="progress-bar" style="width: 15%"></div>
                            </div>
                
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                </div>
                
            </div>  
        </div>
    </div>
</section>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<!-- <script src="https://code.highcharts.com/modules/series-label.js"></script> -->
<!-- <script src="https://code.highcharts.com/modules/exporting.js"></script> -->
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script type="text/javascript">

$('#year .input-group.date').datepicker({
    format: "yyyy",
    viewMode: "years", 
    minViewMode: "years",
    autoclose: true
});


</script>
