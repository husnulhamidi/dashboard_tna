<style type="text/css">
    .error{
        color: #a94442;
    }
</style>
<!-- Main content -->
<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $title;?></h3>
                    </div>
                    <form method="post" action="javascript:void(0)" class="form-horizontal" enctype="multipart/form-data" id="form-submit-training">
                        <input type="hidden" name="id" id="id" value=<?php echo @$detail->id;?>>
                        <input type="hidden" name="userId" value="456">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Karyawan<span class="text-red">*</span></label>
                                        <div class="col-sm-7">
                                            <input  readonly class="form-control" name="pilih_produk" id="edit-pilih_produk" value="86744666-Firman"> 
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Kompetensi<span class="text-red">*</span></label>
                                        <div class="col-sm-7">
                                            <select class="select2 form-control" name="kompetensi" id="kompetensi">
                                                <option >Pilih Kompetensi</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Pelatihan<span class="text-red">*</span></label>
                                        <div class="col-sm-7">
                                            <select class="select2 form-control" name="pelatihan" id="pelatihan">
                                                <option>Pilih Pelatihan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Metode Pembelajaran<span class="text-red">*</span></label>
                                        <div class="col-sm-7">
                                            <select class="select2 form-control" name="metodePembelajaran" id="metodePembelajaran">
                                                <option>Pilih Metode Pembelajaran</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Kategori Pelatihan<span class="text-red">*</span></label>
                                        <div class="col-sm-7">
                                            <select class="select2 form-control" name="ketegoriPelatihan" id="ketegoriPelatihan">
                                                <option value="">Pilih Kategori Pelatihan</option>
                                                <option <?php echo @$detail->kategori_pelatihan == 'Pelatihan' ? 'selected' : ''; ?> > Pelatihan </option>
                                                <option <?php echo @$detail->kategori_pelatihan == 'Sertifikasi' ? 'selected' : ''; ?>> Sertifikasi </option>
                                                <option <?php echo @$detail->kategori_pelatihan == 'Internal Sharing' ? 'selected' : ''; ?>> Internal Sharing </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group" id="typeSertifikasi" style="display:none">
                                        <label class="col-sm-3 control-label">&nbsp;</label>
                                        <div class="col-sm-8">
                                            <input type="radio" id="Nasional" name="jenis_sertifikasi" value="Nasional" /> Nasional
                                            <input type="radio" id="Internasional" name="jenis_sertifikasi" value="Internasional" style="margin-left:20px"/> Internasional
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Penyelenggara<span class="text-red">*</span></label>
                                        <div class="col-sm-7">
                                            <input  class="form-control" name="penyelenggara" id="penyelenggara" value="<?php echo @$detail->nama_penyelenggara;?>"> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Biaya<span class="text-red">*</span></label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="biaya" id="biaya" value="<?php echo @$detail->biaya;?>"> 
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Waktu Pelaksanaan<span class="text-red">*</span></label>
                                        <div class="col-sm-7">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                <input type="text" class="form-control pull-right" id="waktu_pelaksanaan" name="waktu_pelaksanaan">
                                            </div>
                                        </div>

                                    </div>
                                        
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Justifikasi Pelatihan<span class="text-red">*</span></label>
                                        <div class="col-sm-7">
                                            <textarea type="text"  name="justifikasi" id="justifikasi"  class="form-control input-sm" ><?php echo @$detail->justifikasi_pelatihan;?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Upload Sertifikat</label>
                                        <div class="col-sm-7">
                                            <input type="file" class="fileName" name="fileNameSertifikat" id="fileNameSertifikat">
                                            <input type="hidden" name="input-file-sertifikat" value="fileNameSertifikat">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Upload Pembayaran</label>
                                        <div class="col-sm-7">
                                            <input type="file" class="fileName" name="fileNamepembayaran" id="fileNamepembayaran">
                                            <input type="hidden" name="input-file-pembayaran" value="fileNamepembayaran">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Upload Justifikasi</label>
                                        <div class="col-sm-7">
                                            <input type="file" class="fileName" name="fileName" id="fileName">
                                            <input type="hidden" name="input-file" value="fileName">
                                        </div>
                                    </div>

                                    <!-- <div class="form-group">
                                        <label class="col-sm-3 control-label">&nbsp;</label>
                                        <div class="col-sm-7">
                                            <?php
                                                if(@$detail->document){
                                                    echo "<img src='" . base_url('files/upload/training-mandiri/'.@$detail->document) . "' alt='Deskripsi Gambar' width='100%'>";
                                                }
                                            ?>
                                        </div>
                                    </div> -->
                                </div> 
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="col-sm-10">
                                <div class="pull-right"> 
                                    <a href="<?php echo base_url('tna/training-mandiri');?>" class="btn btn-default">Kembali </a>
                                    <button type="submit" id="btn-submit-training" class="btn btn-info btn-submit-training">Simpan</button>
                                </div>
                            </div>
                            <div class="col-sm-6"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    var url_site = '<?php echo base_url('tna/training-mandiri');?>';
</script>
<script>
    $(document).ready(function () {
        $('.fileName').filestyle({
            btnClass : 'btn-success',
            text : 'Select File',
            htmlIcon : '<span class="fa fa-folder"></span> ',
        }); 
         
        $('#waktu_pelaksanaan').daterangepicker();
        $('.select2').select2({
            placeholder: "Please Select"
        });
        const dataKompetensi = '<?php echo @$detail->r_tna_kompetensi_id;?>';
        getDataKompetensi(dataKompetensi);

        const dataTraining = '<?php echo @$detail->r_tna_training_id;?>';
        getDataPelatihan(dataTraining)

        const dataMetodePembelajaran = '<?php echo @$detail->metoda_pembelajaran;?>';
        getDataMetodePembelajaran(dataMetodePembelajaran);

        // const dataKategoriPelatihan = '<?php echo @$detail->kategori_pelatihan;?>';
        // getDatakategoriPelatihan(dataKategoriPelatihan);

        const tgl_mulai ='<?php echo @$detail->tanggal_mulai;?>';
        const format_tgl_mulai = formatDate2(tgl_mulai)

        const tgl_selesai ='<?php echo @$detail->tanggal_selesai;?>';
        const format_tgl_selesai = formatDate2(tgl_selesai)
        if(tgl_selesai){
            $('#waktu_pelaksanaan').val(format_tgl_mulai+ ' - ' +format_tgl_selesai)
        }
        
        $('#ketegoriPelatihan').change(function(){
            $('#typeSertifikasi').css('display', 'none')
            if($('#ketegoriPelatihan').val() == 'Sertifikasi'){
                $('#typeSertifikasi').css('display', 'block')
            }
        })

    });

    function getDataKompetensi(dataKompetensi){
        $('#kompetensi').empty()
        $('#kompetensi').append('<option></option')
        $.ajax({
            url:base_url+'tna/justifikasi/getDataDropdown/kompetensi',
            method: 'get',
            dataType: 'json',
            success: function(response){
                for (var i = 0; i < response.length; i++) {
                    var selected = "";
                    if(dataKompetensi == response[i]['id']){
                        selected = "selected";
                    }
                    $('#kompetensi').append('<option '+selected+' value='+response[i]['id']+'>'+response[i]['name']+'</option>')
                }
            }
        });
    }

    function getDataPelatihan(dataTraining){
        $('#pelatihan').empty()
        $('#pelatihan').append('<option></option')
        $.ajax({
            url:base_url+'tna/justifikasi/getDataDropdown/pelatihan',
            method: 'get',
            dataType: 'json',
            success: function(response){
                for (var i = 0; i < response.length; i++) {
                    var selected = "";
                    if(dataTraining == response[i]['id']){
                        selected = "selected";
                    }
                    $('#pelatihan').append('<option '+selected+' value='+response[i]['id']+'>'+response[i]['name']+'</option>')
                }
            }
        });
    }

    function getDataMetodePembelajaran(dataMetodePembelajaran){
        $('#metodePembelajaran').empty()
        $('#metodePembelajaran').append('<option></option')
        $.ajax({
            url:base_url+'tna/justifikasi/getDataDropdown/metodePembelajaran',
            method: 'get',
            dataType: 'json',
            success: function(response){
                for (var i = 0; i < response.length; i++) {
                    var selected = "";
                    if(dataMetodePembelajaran == response[i]['label']){
                        selected = "selected";
                    }
                    $('#metodePembelajaran').append('<option '+selected+' >'+response[i]['label']+'</option>')
                }
            }
        });
    }

    // function getDatakategoriPelatihan(dataKategoriPelatihan){
    //     $('#ketegoriPelatihan').empty()
    //     $('#ketegoriPelatihan').append('<option></option')
    //     $.ajax({
    //         url:base_url+'tna/justifikasi/getDataDropdown/kategoriPelatihan',
    //         method: 'get',
    //         dataType: 'json',
    //         success: function(response){
    //             for (var i = 0; i < response.length; i++) {
    //                 var selected = "";
    //                 if(dataKategoriPelatihan == response[i]['name']){
    //                     selected = "selected";
    //                 }
    //                 $('#ketegoriPelatihan').append('<option '+selected+'>'+response[i]['name']+'</option>')
    //             }
    //         }
    //     });
    // }
</script>
