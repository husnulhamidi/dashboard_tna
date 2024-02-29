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
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>
            <div class="nav-tabs-custom-aqua">
            
                    
                    <!-- Horizontal Form -->
                        <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title"><?php echo $title;?></h3>
                            </div>
                        <!-- /.box-header -->
                            <!-- form start -->
                            <form method="post" action="javascript:;" class="form-horizontal form-usulan-tna" enctype="multipart/form-data">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="hidden"  name="usulan_id" id="usulan_id"  class="form-control input-sm" >
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Jenis Pelatihan/Sertifikasi</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="jenis_pelatihan" id="jenis_pelatihan">
                                                    <option value="">--- Pilih ---</option>
                                                    <?php 
                                                        foreach ($jenis_pelatihan as $jp) {
                                                            echo "<option value='".$jp->name."'>".$jp->name.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Kompetensi</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="kompetensi" id="kompetensi">
                                                    <option value="">--- Pilih Kompetensi ---</option>
                                                    <?php 
                                                        foreach ($kompetensi as $kom) {
                                                            echo "<option value='".$kom->id."'>".$kom->code.' | '.$kom->name.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Jenis Development Karyawan</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="jenis_development" id="jenis_development">
                                                    <option value="">--- Pilih Jenis development Karyawan ---</option>
                                                    <?php 
                                                        foreach ($jenis_development as $jd) {
                                                            echo "<option value='".$jd->label."'>".$jd->label.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Pelatihan / Sertifikasi (TNA)</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="tna" id="tna" onchange="getDataLembaga()">
                                                    <option value="">--- Pilih Pelatihan/Sertifikasi ---</option>
                                                    <?php 
                                                        foreach ($tna as $tna) {
                                                            echo "<option value='".$tna->id."'>".$tna->code.' | '.$tna->name.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Kegiatan</label>
                                            <div class="col-sm-8">
                                                <input type="text"  name="nama_kegiatan" id="nama_kegiatan"  class="form-control input-sm" >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Justifikasi Pengajuan</label>
                                            <div class="col-sm-8">
                                                <textarea type="text"  name="justifikasi" id="justifikasi"  class="form-control input-sm" ></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Metode Pembelajaran</label>
                                            <div class="col-sm-8">
                                                <select class="select2 form-control" name="metoda" id="metoda">
                                                    <option value="1">--- Pilih ---</option>
                                                    <?php 
                                                        foreach ($metoda as $mt) {
                                                            echo "<option value='".$mt->label."'>".$mt->label.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Estimasi Biaya</label>
                                            <div class="col-sm-8">
                                                <input  class="form-control input_mask" name="estimasi_biaya" id="estimasi_biaya"> 
                                            </div>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Penyelenggara</label>
                                            <div class="col-sm-8">
                                                <input  class="form-control" name="penyelenggara" id="penyelenggara"> 
                                            </div>
                                        </div> -->
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Penyelenggara <span style="color: red">*</span></label>
                                            <div class="col-sm-6">
                                                <select class="select2 form-control" name="penyelenggara" id="penyelenggara">
                                                    <option value=""> Pilih Lembaga</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2" id="divBtnAddPenyelenggara">
                                                <button class="btn btn-info btn-sm pull-left" id="btnText" onclick="addPenyelenggara()"><b> <li class="fa fa-plus"></li> Tambah Penyelenggara</b> </button>
                                            </div>
                                        </div>
                                        <div class="form-group" id="divNewPeneyelenggara" style="display:none">
                                            <label class="col-sm-3 control-label"> &nbsp; </label>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control" readonly="" id="tmpPenyelenggara">
                                            </div>
                                            <div class="col-md-2">
                                                <button class="btn btn-danger btn-sm pull-left " onclick="deletePenyelenggara()"><b> <li class="fa fa-close"></li></b> </button>
                                            </div>
                                        </div>
                                        <div class="form-group">                    
                                            <label class="col-sm-3 control-label">Rencana Waktu Pelaksanaan</label>
                                            <div class="col-sm-8" id="date">
                                                <div class="input-group date">
                                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input autocomplete="off" type="text" class="form-control input-sm" name="waktu_pelaksanaan" id="waktu_pelaksanaan" >
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="multi-field-wrapper">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label"></label>
                                                <div class="col-sm-8">
                                                    <span class="btn btn-info btn-sm add-field pull-right"><b> <li class="fa fa-plus"></li> Tambah Peserta</b> </span>
                                                </div>
                                            </div>
                                            <div class="multi-fields">
                                                <div class="multi-field">
                                                    
                                                    <span class="remove-field pull-right" data-toggle="tooltip" title="Hapus Peserta" > <button type="button" class="btn btn-danger btn-sm  "><li class="fa fa-trash"></li></button></span>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Sub Direktorat / Unit</label>
                                                        <div class="col-sm-8">
                                                            <select class="select2 form-control" name="subdit" id="subdit">
                                                                <option value="1">--- Pilih Subdit ---</option>
                                                                <?php 
                                                                foreach ($subdit as $sb) {
                                                                    echo "<option value='".$sb->m_organisasi_id."'>".$sb->nama.'</option>';
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Nama Karyawan</label>
                                                        <div class="col-sm-8">
                                                            <select class="select2 form-control" name="karyawan" id="karyawan">
                                                                <option value="">---Pilih Karyawan ---</option>
                                                            
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Jabatan / Posisi</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control" name="jabatan" id="jabatan"> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label">Status Karyawan</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" readonly class="form-control" name="status_karyawan" id="status_karyawan"> 
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        
                                                        <div class="col-sm-8">
                                                            <input type="hidden" class="form-control" name="status_fte" id="status_fte"> 
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                        </div>
                                        

                                    </div> <!-- end col-12 -->
                                   
                                </div><!-- end row -->
                              
                               
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                
                                <div class="col-sm-11">
                                    <div class="pull-right"> 
                                        <a href="<?php echo base_url('tna/usulan');?>" class="btn btn-default">Kembali</a>
                                        <button type="submit" class="btn btn-info submit-draft">Simpan sebagai Draft</button>
                                        <button type="submit" class="btn btn-success submit-usulkan">Simpan dan Usulkan</button>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-6"> 
                                </div>
                            </div>
                            <!-- /.box-footer -->
                            </form>
                        </div>
          <!-- /.box -->
                    
               
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('tna/tna/modal_add_penyelenggara'); ?>
<script>

$(document).ready(function () {

    $('.select2').select2();

    $('#date .input-group.date').datepicker({
        format: "dd-mm-yyyy",
        viewMode: "date", 
        minViewMode: "date",
        autoclose: true
    });

    $('.input_mask').mask('000.000.000.000', {reverse: true});

    $('.multi-field-wrapper').each(function() {
        var $wrapper = $('.multi-fields', this);
    
        $(".add-field", $(this)).click(function(e) {
            $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();           
        });
        $('.multi-field .remove-field', $wrapper).click(function() {
            if ($('.multi-field', $wrapper).length > 1)
                $(this).parent('.multi-field').remove();
                //alert(x-1);
        });
    });


    $('#subdit').on('change',function(){
        var subdit_id = $(this).val();

        $.ajax({
            url: '<?php echo site_url('karyawan/ajax_get_karyawan_by_organisasi'); ?>',
            type: 'POST',
            async: false, 
            data: { id: subdit_id },
            dataType: 'json',
            success: function (result) {
                $("#karyawan").empty(); 
                $('#karyawan').append('<option value="">-- Pilih Karyawan --</option>');
                if(result !== null){
                    $.each(result, function(i, value) {
                        $('#karyawan').append('<option value=' + value['id'] + '>' + value['nama'] + ' | '+ value['nik_tg']+' | '+value['jabatan_nama']+'</option>');
                    });
                }
            }
        });

    })

    $('#karyawan').on('change',function(){
        var subdit_id = $('#subdit').val();
        var karyawan_id = $(this).val();
         var sk ="";
        $.ajax({
            url: '<?php echo site_url('karyawan/ajax_get_karyawan_by_karyawanid'); ?>',
            type: 'POST',
            async: false, 
            data: { karyawan_id:karyawan_id,subdit_id: subdit_id},
            dataType: 'json',
            success: function (result) {
                $("#jabatan").empty(); 
                if(result !== null){
                    $.each(result, function(i, value) {
                            sk = value['status_karyawan']+" ( "+value['status_fte']+" )";
                            $('#jabatan').val(value['jabatan_nama']);
                            $('#status_karyawan').val(sk);
                            $('#status_fte').val(value['status_fte']);
                    });
                }
            }
        });

        // get_verifikator();
    })
});

function getDataLembaga(){
    let pelatihanId = $('#tna').val();
    $('#penyelenggara').empty()
    $('#penyelenggara').append('<option value="">Pilih Penyelenggara</option')
    $.ajax({
        url:base_url+'tna/tna/getPenyelenggara',
        method: 'post',
        dataType: 'json',
        data: { pelatihanId:pelatihanId},
        success: function(response){
            console.log(response)
            for (var i = 0; i < response.length; i++) {
                $('#penyelenggara').append('<option>'+response[i]['nama_lembaga']+'</option>')
            }
        }
    });
}

function addPenyelenggara(){
// alert('tamabah')
    $('#modalTambahPenyelenggara').modal({backdrop: 'static', keyboard: false}) 
    $('#modalTambahPenyelenggara').modal('show')

}

function btnClose(){
    let new_penyelenggara = $('#new_penyelenggara').val()
    if(new_penyelenggara){
        $('#penyelenggara').prop('disabled', true)
        $('#tmpPenyelenggara').val(new_penyelenggara)
        $('#divNewPeneyelenggara').css('display', 'block')

    
        let edit = `<li class="fa fa-edit"></li> Edit Penyelenggara</b>`;
        $("#btnText").html(edit);
    }
}

function deletePenyelenggara(){
    $('#penyelenggara').prop('disabled', false)
    $('#divNewPeneyelenggara').css('display', 'none')
    $('#form-add-penyelenggara')[0].reset();
    
    let tambah = `<li class="fa fa-plus"></li> Tambah Penyelenggara</b>`;
    $("#btnText").html(tambah);
}

</script>
