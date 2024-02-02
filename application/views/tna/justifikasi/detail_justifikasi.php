<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>
            <input type="hidden" id="id" value="<?php echo $id ?>">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo $title;?></h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-striped">
                                <tr>
                                    <td >Justifikasi</td>
                                    <td width="5px">:</td>
                                    <td>
                                        <?php echo $detail->justifikasi;?>
                                    </td>
                                </tr>
                                <tr>
                                    <td >Deskripsi</td>
                                    <td width="5px">:</td>
                                    <td>
                                       <?php echo $detail->deskripsi;?>
                                    </td>
                                </tr>
                               
                                <tr><td colspan="3"></td></tr>
                            </table>
                        </div>

                       
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>
                                <b>Daftar Kompetensi</b>&nbsp;&nbsp; 
                                <a 
                                    onclick="showModalAdd()" 
                                    class="btn btn-sm btn-info">
                                    <i class="fa fa-plus"></i> Kompetensi
                                </a>
                            </h4>
                           
                            <table class="table table-striped" id="table-kompetensi">
                                <thead>
                                     <tr>
                                        <th width="20px">No</th>
                                        <th>Job Family</th>
                                        <th>Job Function</th>
                                        <th>Job Role</th>
                                        <th>Kompetensi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>                               
                            </table>
                        </div>
                    </div>

                   <!--  <div class="row" style="padding-top: 30px">
                        <div class="col-md-12">
                            <table class="table table-striped" id="table-bank">
                                <tr>
                                    <th width="20px">No.</th>
                                    <th>Job Family</th>
                                    <th>Job Function</th>
                                    <th>Job Role</th>
                                    <th>Kompetensi</th>
                                    <th>Action</th>
                                </tr>
                                <tr >
                                    <td width="20px">1</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Mengelola Rantai Pasok Sabut Kelapa</td>
                                    <td> 
                                        <button data-toggle="collapse" data-target="#demo1" class="accordion-toggle" class="btn btn-default btn-xs viewtraining" id="Kom01" value="Kom01"><i class="fa fa-eye"></i></button>
                                        <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                        <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
                                    </td>
                                </tr>
                                <tr >
                                    <td></td>
                                    <td colspan="5" class="hiddenRow">
                                        <div class="accordian-body collapse" id="demo1" stale="padding-left:10px;"> 
                                        <div class="pull-right">
                                            <a data-toggle="modal" data-target="#ModalAddTraining" class="btn btn-sm btn-info"><i class="fa fa-plus"></i> Training</a>
                                        </div>
                                        <br>
                                        <br>
                                        <table class="table table-striped">
                                            <tr class="info">
                                                <th>No</th>
                                                <th>Training</th>
                                                <th><i class="fa fa-cog"></i>
                                            </tr>
                                            <tr><td width="20px">1</td><td>Pelatihan rantai pasok sabut kelapa</td>
                                            <td>
                                            <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                        <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
                                            </td></tr>
                                            <tr><td>2</td><td>Sertifikasi rantai pasok sabut kelapa</td>
                                            <td>
                                            <button data-toggle="tooltip" data-placement="bottom" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></button>&nbsp;
                                        <button data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger btn-xs hapus-bank" value='.$id_bank.'><i class="fa fa-trash"></i></button>&nbsp;
                                            </td></tr>
                                            
                                        </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Memahami Proses Pengeringan Sabut Kelapa</td>
                                    <td> 
                                    </td>
                                </tr>
                               
                               
                            </table>

                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </div>

</section>
<?php $this->load->view('tna/justifikasi/modal_form_training');?>
<?php $this->load->view('tna/justifikasi/modal_form_kompetensi');?>
<script type="text/javascript">
    var url = "<?php echo site_url("tna/justifikasi/getDataKompetensi") ?>";
    var id = $('#id').val()
    $('#justifikasiId').val(id)
    $( document ).ready(function() {
        
        oTable = $('#table-kompetensi').DataTable({
            processing: true, 
            serverSide: true, 
            order: [], 
            ajax: {
                url     : url+"/"+id,
                type    : "get",
                datatype: "json",
                data    : function(d){
                }            
            },
            columns: [
                {
                    "data": "id",
                    "width": "50px",
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                { "data": "job_family" },
                { "data": "job_function" },
                { "data": "job_role" },
                { "data": "kompetensi" },
                { 
                    "data": "idKompetensi",
                    "class":"parrent",
                    render: function (data, type, row, meta) {
                        return `<button 
                                    id="btn-detail"
                                    data-toggle="tooltip" 
                                    data-placement="bottom" 
                                    class="btn btn-primary btn-xs detail" >
                                    <i class="fa fa-eye"></i>
                                </button>&nbsp;
                                <a 
                                    onclick="showModalAdd(`+data+`,`+row.id_job_family+`,`+row.id_job_function+`,`+row.id_job_role+`,'`+row.id+`')"
                                    class="btn btn-success btn-xs action">
                                    <i class="fa fa-edit"></i>
                                </a>&nbsp;
                                <button 
                                    value=`+row.id+` 
                                    uid=`+row.id+`
                                    data-toggle="tooltip" 
                                    data-placement="bottom" 
                                    class="btn btn-danger btn-xs btn_delete_kompetensi" >
                                    <i class="fa fa-trash"></i>
                                </button>`;
                    }
                }
            ]
        })
    });

    
    var detailRows = []
    $('#table-kompetensi tbody').on( 'click', '.detail', function () {

        var tr = $(this).closest('tr');
        var row = oTable.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );
        if ( row.child.isShown() ) {
            tr.removeClass( 'parrent' );
            row.child.hide();
            detailRows.splice( idx, 1 );
        }else {
            tr.addClass( 'parrent' );
            row.child( format( row.data() ) ).show();
            if ( idx === -1 ) {
                detailRows.push( tr.attr('id') );
            }
        }
    })

    function format(d){
        var url2 = "<?php echo site_url("tna/justifikasi/getDataTraining") ?>";
        const idKompetensi = d.id
        $.ajax({
            url:url2+'/'+idKompetensi,
            method: 'get',
            dataType: 'json',
            success: function(response){
                for (var i = 0; i < response.length; i++) {
                    const number = i+1;
                    $('#bodyTable-'+idKompetensi).append(`<tr>
                        <td>`+number+`</td>
                        <td>`+response[i]['name']+`</td>
                        <td>
                            <a onclick="showModals(`+idKompetensi+`,'`+response[i]['name']+`',`+response[i]['id']+`,'`+response[i]['type']+`',`+id+`)" class="btn btn-success btn-xs"> <i class="fa fa-edit"></i> 
                            </a>
                            <button 
                                data-toggle="tooltip" 
                                data-placement="bottom" 
                                title="Hapus" 
                                value=`+response[i]['id']+` 
                                uid=`+response[i]['id']+`
                                data-idKompetensi = `+idKompetensi+`
                                class="btn btn-danger btn-xs btn-hapus-training" >
                                <i class="fa fa-trash"></i>
                            </button>&nbsp;
                        </td>
                    </tr>`);
                }
            }
        });
        
        const html =`<div class="pull-right" style="padding-bottom: 5px;margin-bottom: 5px;">
                        <a onclick="showModals(`+idKompetensi+`,'')" class="btn btn-sm btn-info"> <i class="fa fa-plus"></i> 
                            Training </a>
                    </div>

                    <table class="table table-bordered" id="table-training-`+idKompetensi+`">
                        <thead>
                            <tr>
                                <th> No </th>
                                <th> Training </th>
                                <th> <i class="fa fa-cog"> </th>
                            </tr>
                        </thead>
                        <tbody id="bodyTable-`+idKompetensi+`"></tbody>
                    </table>`;        
        return html;
    }

    function showModals(idKompetensi,name,idTraining='',type=''){
        $('#idKompetensi').val(idKompetensi)
        $('#label').html('Form Tambah Pelatihan/Sertifikasi')
        if(name){
            $('#label').html('Form Edit Pelatihan/Sertifikasi')
            $('#name').val(name)
            $('#idTraining').val(idTraining)

            $('#type').val(type)
            $('#type').trigger('change.select2');
        }
        
        $('#ModalAddTraining').modal('show');
    }

    function showModalAdd(id="", jobFamily = '', jobFunc='', jobRole="", kompetensi=""){
        getJobFamily(jobFamily,jobFunc,jobRole,kompetensi);        
        $('#label2').html('Form Tambah Kompetensi')
        
        if(id){
            $('#label2').html('Form Edit Kompetensi')
            $('#jobFamily').val(jobFamily).trigger('change.select2');
            $('#jobRole').val(jobRole).trigger('change.select2');
            console.log(kompetensi)
            $('#kompetensi').val(kompetensi).trigger('change.select2');
            $('#kompetensiId').val(id)
        }
        $('#AddKompetensi').modal('show');
    }

    function getJobFamily(jobFamily,jobFunc,jobRole,kompetensi){
        $('#jobFamily').empty()
        $('#jobFamily').append('<option></option>');
        $.ajax({
            url:base_url+'tna/justifikasi/getDataDropdown/jobFamily',
            method: 'get',
            dataType: 'json',
            success: function(response){
                for (var i = 0; i < response.length; i++) {
                    var selected = "";
                    if(jobFamily == response[i]['id']){
                        selected = "selected";
                    }
                    $('#jobFamily').append('<option '+selected+' value='+response[i]['id']+'>'+response[i]['name']+'</option>')
                }
                getJobFunc(jobFunc,jobRole,kompetensi);
            }
        });
        
    }

    function getJobFunc(jobFunc,jobRole,kompetensi){
        $('#jobFunc').empty()
        $('#jobFunc').append('<option></option>');
        $.ajax({
            url:base_url+'tna/justifikasi/getDataDropdown/jobFunc',
            method: 'get',
            dataType: 'json',
            success: function(response){
                for (var i = 0; i < response.length; i++) {
                    var selected = "";
                    if(jobFunc == response[i]['id']){
                        selected = "selected";
                    }
                    $('#jobFunc').append('<option '+selected+' value='+response[i]['id']+'>'+response[i]['name']+'</option>')
                }
                getJobRole(jobRole,kompetensi);
            }
        }); 
    }

    function getJobRole(jobRole,kompetensi){
        $('#jobRole').empty()
        $('#jobRole').append('<option></option>');
        $.ajax({
            url:base_url+'tna/justifikasi/getDataDropdown/jobRole',
            method: 'get',
            dataType: 'json',
            success: function(response){
                for (var i = 0; i < response.length; i++) {
                    var selected = "";
                    if(jobRole == response[i]['id']){
                        selected = "selected";
                    }
                    $('#jobRole').append('<option '+selected+' value='+response[i]['id']+'>'+response[i]['name']+'</option>')
                }
                getJobKompetensi(kompetensi);
            }
        });
    }

    function getJobKompetensi(kompetensi){
        $('#kompetensi').empty()
        $('#kompetensi').append('<option></option')
        $.ajax({
            url:base_url+'tna/justifikasi/getDataDropdown/kompetensi',
            method: 'get',
            dataType: 'json',
            success: function(response){
                for (var i = 0; i < response.length; i++) {
                    var selected = "";
                    if(kompetensi == response[i]['id']){
                        selected = "selected";
                    }
                    $('#kompetensi').append('<option '+selected+' value='+response[i]['id']+'>'+response[i]['name']+'</option>')
                }
            }
        });
    }

    $(document).on("click",".btn_delete_kompetensi",function(){
        var encrypt = this.value;
        swal({
            title: "Yakin Hapus Data ini ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Hapus!",
            closeOnConfirm: false
        }, function () {
            console.log("masuk")
            $.ajax({
                type : "POST",
                url  : base_url+"tna/justifikasi/delete_kompetensi",
                dataType: "JSON",
                data : "id="+encrypt,
                success:function(resp){
                    console.log(resp)
                    if(resp.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data berhasil dihapus",
                                imageUrl: img_icon_success
                            }, function() {
                                $('#table-kompetensi').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data gagal dihapus",
                                imageUrl: img_icon_error
                            }, function() {
                                $('#table-kompetensi').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }
                }
            });
        });  
    });

     $(document).on("click",".btn-hapus-training",function(){
        var encrypt = this.value;
        var idKompetensi = $(this).attr('data-idKompetensi')
        console.log(idKompetensi)
        swal({
            title: "Yakin Hapus Data ini ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Hapus!",
            closeOnConfirm: false
        }, function () {
            $.ajax({
                type : "POST",
                url  : base_url+"tna/justifikasi/delete_training",
                dataType: "JSON",
                data : "id="+encrypt,
                success:function(resp){
                    console.log(resp)
                    if(resp.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data berhasil dihapus",
                                imageUrl: img_icon_success
                            }, function() {
                                location.reload();
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data gagal dihapus",
                                imageUrl: img_icon_error
                            }, function() {
                                location.reload();
                            });
                        }, 1000);
                    }
                }
            });
        });  
    });
</script>