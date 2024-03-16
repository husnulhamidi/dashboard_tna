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
                    <h3> STATISTIK PLANING DAN REALISASI PELATIHAN PER QUARTAL <span id="tahun_filter" class=".tahun_filter"></span></h3>
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
                            <h3 class="box-title">Anggaran TNA <span id="thn_anggaran_tna"></span></h3>

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
                    <h3>SUMMARY - TOTAL REALISASI COST TNA <span id="thn_summary"></span>
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
                    <h3>SUMMARY - TOTAL REALISASI COST NON TNA <span id="thn_summary_non_tna"></span>
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

$(document).ready(function() {
    let filter_year = $('#filter_year').val();

    // Highcharts.chart('pelatihan_q2', {
    //     chart: {
    //         type: 'column'
    //     },
    //     title: {
    //         useHTML: true,
    //         text: '<h3 class="title">Quartal 2</h3>',
    //         align: 'center',
    //         x: 0
    //     },
    //     // subtitle: {
    //     //     text: 'REGIONAL'
    //     // },
    //     xAxis: {
    //         categories: ['Pelatihan', 'Peserta'],
    //         //crosshair: false
    //     },
    //     plotOptions: {
    //         series: {
    //             dataLabels: {
    //                 enabled: true,
    //                 format: '{point.y:.2f} ',
    //             }
    //         }
    //     },

    //     yAxis: { // Primary yAxis
    //         labels: {
    //             format: '{value} ',
    //             style: {
    //                 color: '#000'
    //             }
    //         },
    //         title: {
    //             text: ' ',
    //             style: {
    //                 color: '#000'
    //             }
    //         },
    //         gridLineColor: '#d8dade'
    //     },

    //     tooltip: {
    //         headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
    //         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    //             '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
    //         footerFormat: '</table>',
    //         shared: true,
    //         useHTML: true
    //     },
    //     credits: {
    //         enabled: false, // Enable/Disable the credits
    //         text: 'This is a credit'
    //     },


    //     series: [{
    //             name: 'Rencana',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#169aed'],
    //                     [0.9, '#8cd0fb'],
    //                 ]
    //             },
    //             data: [53.71, 42.57],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         },
    //         {
    //             name: 'Realisasi',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#2fcea3'],
    //                     [0.325, '#9bdd4e']
    //                 ]
    //             },
    //             data: [16.69, 7.89 ],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         }
        
    //     ]
    // });

    // Highcharts.chart('pelatihan_q3', {
    //     chart: {
    //         type: 'column'
    //     },
    //     title: {
    //         useHTML: true,
    //         text: '<h3 class="title">Quartal 3</h3>',
    //         align: 'center',
    //         x: 0
    //     },
    //     // subtitle: {
    //     //     text: 'REGIONAL'
    //     // },
    //     xAxis: {
    //         categories: ['Pelatihan', 'Peserta'],
    //         //crosshair: false
    //     },
    //     plotOptions: {
    //         series: {
    //             dataLabels: {
    //                 enabled: true,
    //                 format: '{point.y:.2f} ',
    //             }
    //         }
    //     },

    //     yAxis: { // Primary yAxis
    //         labels: {
    //             format: '{value} ',
    //             style: {
    //                 color: '#000'
    //             }
    //         },
    //         title: {
    //             text: ' ',
    //             style: {
    //                 color: '#000'
    //             }
    //         },
    //         gridLineColor: '#d8dade'
    //     },

    //     tooltip: {
    //         headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
    //         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    //             '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
    //         footerFormat: '</table>',
    //         shared: true,
    //         useHTML: true
    //     },
    //     credits: {
    //         enabled: false, // Enable/Disable the credits
    //         text: 'This is a credit'
    //     },


    //     series: [{
    //             name: 'Rencana',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#169aed'],
    //                     [0.9, '#8cd0fb'],
    //                 ]
    //             },
    //             data: [53.71, 42.57],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         },
    //         {
    //             name: 'Realisasi',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#2fcea3'],
    //                     [0.325, '#9bdd4e']
    //                 ]
    //             },
    //             data: [16.69, 7.89 ],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         }
        
    //     ]
    // });

    // Highcharts.chart('pelatihan_q4', {
    //     chart: {
    //         type: 'column'
    //     },
    //     title: {
    //         useHTML: true,
    //         text: '<h3 class="title">Quartal 4</h3>',
    //         align: 'center',
    //         x: 0
    //     },
    //     xAxis: {
    //         categories: ['Pelatihan', 'Peserta'],
    //         //crosshair: false
    //     },
    //     plotOptions: {
    //         series: {
    //             dataLabels: {
    //                 enabled: true,
    //                 format: '{point.y:.2f} ',
    //             }
    //         }
    //     },

    //     yAxis: { // Primary yAxis
    //         labels: {
    //             format: '{value} ',
    //             style: {
    //                 color: '#000'
    //             }
    //         },
    //         title: {
    //             text: ' ',
    //             style: {
    //                 color: '#000'
    //             }
    //         },
    //         gridLineColor: '#d8dade'
    //     },

    //     tooltip: {
    //         headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
    //         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    //             '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
    //         footerFormat: '</table>',
    //         shared: true,
    //         useHTML: true
    //     },
    //     credits: {
    //         enabled: false, // Enable/Disable the credits
    //         text: 'This is a credit'
    //     },


    //     series: [{
    //             name: 'Rencana',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#169aed'],
    //                     [0.9, '#8cd0fb'],
    //                 ]
    //             },
    //             data: [53.71, 42.57],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         },
    //         {
    //             name: 'Realisasi',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#2fcea3'],
    //                     [0.325, '#9bdd4e']
    //                 ]
    //             },
    //             data: [16.69, 7.89 ],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         }
        
    //     ]
    // });

    // Highcharts.chart('sertifikasi_q1', {
    //     chart: {
    //         type: 'bar'
    //     },
    //     title: {
    //         useHTML: true,
    //         text: '<h3 class="title">Quartal 1</h3>',
    //         align: 'center',
    //         x: 0
    //     },
    //     // subtitle: {
    //     //     text: 'REGIONAL'
    //     // },
    //     xAxis: {
    //         categories: ['Sertifikasi', 'Peserta'],
    //         //crosshair: false
    //     },
    //     plotOptions: {
    //         series: {
    //             dataLabels: {
    //                 enabled: true,
    //                 format: '{point.y:.2f} ',
    //             }
    //         }
    //     },

    //     yAxis: { // Primary yAxis
    //         labels: {
    //             format: '{value} ',
    //             style: {
    //                 color: '#000'
    //             }
    //         },
    //         title: {
    //             text: ' ',
    //             style: {
    //                 color: '#000'
    //             }
    //         },
    //         gridLineColor: '#d8dade'
    //     },

    //     tooltip: {
    //         headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
    //         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    //             '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
    //         footerFormat: '</table>',
    //         shared: true,
    //         useHTML: true
    //     },
    //     credits: {
    //         enabled: false, // Enable/Disable the credits
    //         text: 'This is a credit'
    //     },


    //     series: [{
    //             name: 'Rencana',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#ff5d5d'],
    //                     [0.325, '#ff9d33']
    //                 ]
    //             },
    //             data: [53.71, 42.57],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         },
    //         {
    //             name: 'Realisasi',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#2fcea3'],
    //                     [0.325, '#9bdd4e']
    //                 ]
    //             },
    //             data: [16.69, 7.89 ],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         }
        
    //     ]
    // });

    // Highcharts.chart('sertifikasi_q2', {
    //     chart: {
    //         type: 'bar'
    //     },
    //     title: {
    //         useHTML: true,
    //         text: '<h3 class="title">Quartal 2</h3>',
    //         align: 'center',
    //         x: 0
    //     },
    //     // subtitle: {
    //     //     text: 'REGIONAL'
    //     // },
    //     xAxis: {
    //         categories: ['Sertifikasi', 'Peserta'],
    //         //crosshair: false
    //     },
    //     plotOptions: {
    //         series: {
    //             dataLabels: {
    //                 enabled: true,
    //                 format: '{point.y:.2f} ',
    //             }
    //         }
    //     },

    //     yAxis: { // Primary yAxis
    //         labels: {
    //             format: '{value} ',
    //             style: {
    //                 color: '#000'
    //             }
    //         },
    //         title: {
    //             text: ' ',
    //             style: {
    //                 color: '#000'
    //             }
    //         },
    //         gridLineColor: '#d8dade'
    //     },

    //     tooltip: {
    //         headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
    //         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    //             '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
    //         footerFormat: '</table>',
    //         shared: true,
    //         useHTML: true
    //     },
    //     credits: {
    //         enabled: false, // Enable/Disable the credits
    //         text: 'This is a credit'
    //     },


    //     series: [{
    //             name: 'Rencana',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#ff5d5d'],
    //                     [0.325, '#ff9d33']
    //                 ]
    //             },
    //             data: [53.71, 42.57],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         },
    //         {
    //             name: 'Realisasi',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#2fcea3'],
    //                     [0.325, '#9bdd4e']
    //                 ]
    //             },
    //             data: [16.69, 7.89 ],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         }
        
    //     ]
    // });

    // Highcharts.chart('sertifikasi_q3', {
    //     chart: {
    //         type: 'bar'
    //     },
    //     title: {
    //         useHTML: true,
    //         text: '<h3 class="title">Quartal 3</h3>',
    //         align: 'center',
    //         x: 0
    //     },
    //     // subtitle: {
    //     //     text: 'REGIONAL'
    //     // },
    //     xAxis: {
    //         categories: ['Sertifikasi', 'Peserta'],
    //         //crosshair: false
    //     },
    //     plotOptions: {
    //         series: {
    //             dataLabels: {
    //                 enabled: true,
    //                 format: '{point.y:.2f} ',
    //             }
    //         }
    //     },

    //     yAxis: { // Primary yAxis
    //         labels: {
    //             format: '{value} ',
    //             style: {
    //                 color: '#000'
    //             }
    //         },
    //         title: {
    //             text: ' ',
    //             style: {
    //                 color: '#000'
    //             }
    //         },
    //         gridLineColor: '#d8dade'
    //     },

    //     tooltip: {
    //         headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
    //         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    //             '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
    //         footerFormat: '</table>',
    //         shared: true,
    //         useHTML: true
    //     },
    //     credits: {
    //         enabled: false, // Enable/Disable the credits
    //         text: 'This is a credit'
    //     },


    //     series: [{
    //             name: 'Rencana',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#ff5d5d'],
    //                     [0.325, '#ff9d33']
    //                 ]
    //             },
    //             data: [53.71, 42.57],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         },
    //         {
    //             name: 'Realisasi',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#2fcea3'],
    //                     [0.325, '#9bdd4e']
    //                 ]
    //             },
    //             data: [16.69, 7.89 ],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         }
        
    //     ]
    // });

    // Highcharts.chart('sertifikasi_q4', {
    //     chart: {
    //         type: 'bar'
    //     },
    //     title: {
    //         useHTML: true,
    //         text: '<h3 class="title">Quartal 4</h3>',
    //         align: 'center',
    //         x: 0
    //     },
    //     xAxis: {
    //         categories: ['Sertifikasi', 'Peserta'],
    //         //crosshair: false
    //     },
    //     plotOptions: {
    //         series: {
    //             dataLabels: {
    //                 enabled: true,
    //                 format: '{point.y:.2f} ',
    //             }
    //         }
    //     },

    //     yAxis: { // Primary yAxis
    //         labels: {
    //             format: '{value} ',
    //             style: {
    //                 color: '#000'
    //             }
    //         },
    //         title: {
    //             text: ' ',
    //             style: {
    //                 color: '#000'
    //             }
    //         },
    //         gridLineColor: '#d8dade'
    //     },

    //     tooltip: {
    //         headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
    //         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    //             '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
    //         footerFormat: '</table>',
    //         shared: true,
    //         useHTML: true
    //     },
    //     credits: {
    //         enabled: false, // Enable/Disable the credits
    //         text: 'This is a credit'
    //     },


    //     series: [{
    //             name: 'Rencana',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#ff5d5d'],
    //                     [0.325, '#ff9d33']
    //                 ]
    //             },
    //             data: [53.71, 42.57],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         },
    //         {
    //             name: 'Realisasi',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#2fcea3'],
    //                     [0.325, '#9bdd4e']
    //                 ]
    //             },
    //             data: [16.69, 7.89 ],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         }
        
    //     ]
    // });

        //==================================================================================================================================
    // internal sharing

    // Highcharts.chart('peserta_internal_sharing', {
    //     chart: {
    //         type: 'column'
    //     },
    //     title: {
    //         useHTML: true,
    //         text: '<h4 class="title">REALISASI JUMLAH PESERTA INTERNAL SHARING <br> (PER QUARTAL) '+filter_year+'</h4>',
    //         align: 'center',
    //         x: 0
    //     },
    //     xAxis: {
    //         categories: ['Quartal 1', 'Quartal 2', ' Quartal 3',' Quartal 4'],
    //         //crosshair: false
    //     },
    //     plotOptions: {
    //         series: {
    //             dataLabels: {
    //                 enabled: true,
    //                 format: '{point.y:.2f} ',
    //             }
    //         }
    //     },

    //     yAxis: { // Primary yAxis
    //         labels: {
    //             format: '{value} ',
    //             style: {
    //                 color: '#000'
    //             }
    //         },
    //         title: {
    //             text: ' ',
    //             style: {
    //                 color: '#000'
    //             }
    //         },
    //         gridLineColor: '#d8dade'
    //     },

    //     tooltip: {
    //         headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
    //         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
    //             '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
    //         footerFormat: '</table>',
    //         shared: true,
    //         useHTML: true
    //     },
    //     credits: {
    //         enabled: false, // Enable/Disable the credits
    //         text: 'This is a credit'
    //     },


    //     series: [{
    //             name: 'Total Peserta',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#ff5d5d'],
    //                     [0.325, '#ff9d33']
    //                 ]
    //             },
    //             data: [53, 42, 40, 45],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         },
    //         {
    //             name: 'FTE',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#2fcea3'],
    //                     [0.325, '#9bdd4e']
    //                 ]
    //             },
    //             data: [16, 7, 5,7],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         },
    //         {
    //             name: 'NON FTE',
    //             type: 'column',
    //             color: {
    //                 linearGradient: [0, 400, 0, 0],
    //                 stops: [
    //                     [0.1, '#169aed'],
    //                     [0.9, '#8cd0fb'],
    //                 ]
    //             },
    //             data: [16, 7, 5,7],
    //             tooltip: {
    //                 valueSuffix: 'T'
    //             },
    //             marker: {
    //                 lineWidth: 2,
    //                 lineColor: Highcharts.getOptions().colors[1],
    //                 fillColor: 'white'
    //             }
    //         }
        
    //     ]
    // });
});
</script>
