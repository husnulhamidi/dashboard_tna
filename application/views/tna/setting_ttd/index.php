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
                               
                                <a 
                                    onclick="showModalAdd()" 
                                    class="btn btn-info btn-sm"
                                >
                                    <i class="glyphicon glyphicon-plus"></i> Tambah
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="row">
                            <div class="col-md-12">
                                <table  class="table table-striped table-bordered table-hover" id="table-setting-ttd" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Jabatan</th>
                                            <th class="text-center">Scan TTD</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            if($setting){
                                               echo '
                                                    <tr>
                                                        <td class="text-center">'.@$setting->nama_ttd.'</td>
                                                        <td class="text-center">'.@$setting->jabatan_ttd.'</td>
                                                        <td class="text-center">
                                                            <img src="' . base_url("files/sertificate/" . @$setting->scan_ttd) . '" alt="image" width="10%">
                                                        </td>
                                                        <td>
                                                           <a 
                                                                onclick="showModalAdd('.@$setting->id.',`'.@$setting->nama_ttd.'`,`'.@$setting->jabatan_ttd.'`)"
                                                                title="edit" 
                                                                class="btn btn-success btn-xs">
                                                                <i class="fa fa-edit"></i></a>&nbsp;

                                                            <button 
                                                                class="btn btn-danger btn-xs btn_delete">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                    ';
                                            }
                                        ?>
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
<?php 
    $this->load->view('tna/setting_ttd/modal_form_setting_ttd');
?>
<script type="text/javascript">
     $(document).ready(function () {
        $('#scan_ttd').filestyle({
            btnClass : 'btn-success',
            text : 'Select File',
            htmlIcon : '<span class="fa fa-folder"></span> ',
        });
        $('.select2').select2({
            placeholder: "Silahkan pilih"
        });

        $('.submit-setting-ttd').click(function(){
            let ket = $('#ket').val()
            submitData(ket);
        })

        $('.btn_delete').click(function(){
            submitDelete();
        })
    });

    function showJabatan(){
        let nama = $('#nama').val()
        let split = nama.split('#')
        $('#tmpName').val(split[0])
        $('#divJabatan').css('display','block')
        $('#jabatan').val(split[1])
    }

    function submitData(ket){
        let nama = $('#nama').val()
        if(ket == 'Tambah'){
            swal({
                title: "Yakin Menambah Data ini ?",
                text:"Menambahkan data baru akan menghapus data sebelumnya",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya, Tambah!",
                closeOnConfirm: false
            }, function () {
                $.ajax({
                    type : "POST",
                    url  : base_url+"tna/setting-ttd/submit",
                    data : new FormData($("#form-setting")[0]),
                    contentType: false,
                    cache: false,
                    processData:false,
                    success:function(resp){
                        var newResponse = JSON.parse(resp);
                        if(newResponse.success){
                            setTimeout(function() {
                                swal({
                                    title: "Notifikasi!",
                                    text: "Data berhasil ditambah",
                                    imageUrl: img_icon_success
                                }, function() {
                                    location.reload()
                                });
                            }, 1000);
                        }else{
                            setTimeout(function() {
                                swal({
                                    title: "Notifikasi!",
                                    text: "Data gagal dihapus",
                                    imageUrl: img_icon_error
                                }, function() {
                                    location.reload()
                                });
                            }, 1000);
                        }
                    }
                });
            }); 
        }else{
            $.ajax({
                type : "POST",
                url  : base_url+"tna/setting-ttd/submit",
               contentType: false,
                cache: false,
                processData:false,
                // data : $('#AddSetting').serialize(),
                data: new FormData($("#form-setting")[0]),
                success:function(resp){
                    // console.log(resp)
                    var newResponse = JSON.parse(resp);
                    if(newResponse.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data berhasil ditambah",
                                imageUrl: img_icon_success
                            }, function() {
                                location.reload()
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data gagal dihapus",
                                imageUrl: img_icon_error
                            }, function() {
                                location.reload()
                            });
                        }, 1000);
                    }
                }
            }); 
       }
    }

    function showModalAdd(id = false,nama_ttd= false, jabatan_ttd= false){
        var title = 'Tambah Setting TTD';
        var ket = 'Tambah';
        if(id){
            title = 'Ubah Setting TTD'
            ket = 'Ubah';
            $('#id').val(id)
            $('#tmpName').val(nama_ttd)
            $('#jabatan').val(jabatan_ttd)
            $('#divJabatan').css('display', 'block')
        }
        $('#title').text(title)
        $('#ket').val(ket)
        $('#AddSetting').modal('show');
        getNama(nama_ttd,jabatan_ttd);
    }

    function getNama(nama, jabatan){
        var dataName = nama+'#'+jabatan
        $('#nama').empty()
        $('#nama').append('<option></option')
        $.ajax({
            url:base_url+'tna/setting-ttd/getDataDropdown',
            method: 'get',
            dataType: 'json',
            success: function(response){
                for (var i = 0; i < response.length; i++) {
                    var selected = ''
                    var valueOption = response[i]['nama']+"#"+response[i]['jabatan']
                    if(dataName === valueOption){
                        selected = 'selected'
                    }
                    $('#nama').append('<option '+selected+' value="'+response[i]['nama']+"#"+response[i]['jabatan']+'">'+response[i]['nama']+'</option>')
                }
            }
        });
    }

    function submitDelete(){
        swal({
            title: "Yakin Menghapus Data ini ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Hapus!",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                type : "POST",
                url  : base_url+"tna/setting-ttd/delete",
                dataType: "JSON",
                success:function(resp){
                    console.log(resp)
                    if(resp.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data berhasil dihapus",
                                imageUrl: img_icon_success
                            }, function() {
                               location.reload()
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data gagal dihapus",
                                imageUrl: img_icon_error
                            }, function() {
                               location.reload()
                            });
                        }, 1000);
                    }
                }
            });
        });
    }
</script>