<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">

            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    
                    <div class="box-header with-border">
                        <div class="col-lg-10">
                            <h3 class="box-title" style="padding-top:5px"><?php echo $title;?></h3>
                        </div>
                        <div class="col-lg-2 ">
                            <div class="pull-right">
                                <div id="year">
                                    <div class="input-group date">
                                        <span class="input-group-addon">Tahun </span>
                                        <input autocomplete="off" type="text" class="form-control" name="filter_year" id="filter_year"  value="<?php echo date('Y');?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                        <table  class="table table-striped table-bordered table-hover" id="report" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="7%" rowspan="3">No.</th>
                                    <th width="20%" rowspan="3"  class="text-center">JENIS PELATIHAN / SERTIFIKISI</th>
                                    <th rowspan="3">KOMPETENSI</th>
                                    <th colspan="15" class="text-center">PERENCANAAN - <span id="thn_perencanaan"></span></th>
                                    <th colspan="15" class="text-center">REALISASI - <span id="thn_realisasi"></span></th>
                                </tr>
                                <tr>
                                    <th colspan="4" class="text-center">Pelatihan</th>
                                    <th rowspan="2" class="text-center">Total Pelatihan</th>
                                    <th colspan="4" class="text-center">Sertifikasi</th>
                                    <th rowspan="2" class="text-center">Total Sertifikasi</th>
                                    <th colspan="2" class="text-center">Peserta Pelatihan</th>
                                    <th colspan="2" class="text-center">Peserta Sertifikasi</th>
                                    <th rowspan="2" class="text-center">Total Peserta</th>

                                    <th colspan="4" class="text-center">Pelatihan</th>
                                    <th rowspan="2" class="text-center">Total Pelatihan</th>
                                    <th colspan="4" class="text-center">Sertifikasi</th>
                                    <th rowspan="2" class="text-center">Total Sertifikasi</th>
                                    <th colspan="2" class="text-center">Peserta Pelatihan</th>
                                    <th colspan="2" class="text-center">Peserta Sertifikasi</th>
                                    <th rowspan="2" class="text-center">Total Peserta</th>
                                    
                                </tr>
                                <tr>
                                    <th>Q1</th>
                                    <th>Q2</th>
                                    <th>Q3</th>
                                    <th>Q4</th>

                                    <th>Q1</th>
                                    <th>Q2</th>
                                    <th>Q3</th>
                                    <th>Q4</th>

                                    <th>FTE</th>
                                    <th>NON FTE</th>

                                    <th>FTE</th>
                                    <th>NON FTE</th>

                                    <th>Q1</th>
                                    <th>Q2</th>
                                    <th>Q3</th>
                                    <th>Q4</th>

                                    <th>Q1</th>
                                    <th>Q2</th>
                                    <th>Q3</th>
                                    <th>Q4</th>

                                    <th>FTE</th>
                                    <th>NON FTE</th>

                                    <th>FTE</th>
                                    <th>NON FTE</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                            
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $('#year .input-group.date').datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose: true
    });
    $('#table-bank').DataTable();
      
            
</script>