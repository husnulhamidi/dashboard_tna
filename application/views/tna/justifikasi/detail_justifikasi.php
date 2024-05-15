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
                if(jobFamily)getJobFunc(jobFunc,jobRole,kompetensi);
                // getJobFunc(jobFunc,jobRole,kompetensi);
            }
        });
        
    }

    function getJobFunc(jobFunc = false ,jobRole = false ,kompetensi= false){
        $('#jobFunc').empty()
        $('#jobFunc').append('<option></option>');
        // console.log('jobFamily', $('#jobFamily').val())
        let jobFamily = $('#jobFamily').val()
        $.ajax({
            url:base_url+'tna/justifikasi/getDataDropdown/jobFunc/'+jobFamily,
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
                if(jobFunc)getJobRole(jobRole,kompetensi);
                
            }
        }); 
    }

    function getJobRole(jobRole = false ,kompetensi = false){
        $('#jobRole').empty()
        $('#jobRole').append('<option></option>');
        let jobFunc = $('#jobFunc').val()
        $.ajax({
            url:base_url+'tna/justifikasi/getDataDropdown/jobRole/'+jobFunc,
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
                if(jobRole)getJobKompetensi(kompetensi);
                
            }
        });
    }

    function getJobKompetensi(kompetensi = false){
        $('#kompetensi').empty()
        $('#kompetensi').append('<option></option')
        let jobRole = $('#jobRole').val()
        $.ajax({
            url:base_url+'tna/justifikasi/getDataDropdown/kompetensi/'+jobRole,
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