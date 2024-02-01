function submitForm(){
    $(".form-justifikasi").validate({
        rules: {
            justifikasi: "required",
            deskripsi: "required"
        },
        messages: {
            justifikasi:{
                required:"<i class='fa fa-times'></i> Kode harus diisi"
            },
            deskripsi:{
                required:"<i class='fa fa-times'></i> Job Family harus diisi"
            }
            
        },
        highlight: function (element) {
            $(element).parent().parent().addClass("has-error")
            $(element).parent().addClass("has-error")
        },
        unhighlight: function (element) {
            $(element).parent().removeClass("has-error")
            $(element).parent().parent().removeClass("has-error")
        },
        submitHandler: function(form) {
            $.ajax({
                url: base_url+"tna/justifikasi/submit",
                type: 'POST',
                dataType: "JSON",
                data: $(form).serialize(),
                success: function(response) {
                    if(response.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data berhasil disimpan",
                                imageUrl: img_icon_success
                            }, function(d) {
                                location.href = url_detail_justifikasi+"/"+response.data
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data gagal disimpan",
                                imageUrl: img_icon_error
                            }, function() {
                                location.reload();
                            });
                        }, 1000);
                    }
                    
                }            
            });
        }
    });
}


jQuery(document).ready(function() {
    oTable = $('#table-justifikasi').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/justifikasi/getData",
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
            { "data": "justifikasi" },
            { "data": "deskripsi" },
            { 
                "data": "jumlah_kopetensi",
                "className": "text-center",
                render:function(data, type, row, meta){
                    var count = 0;
                    if(data > 0){
                        count = `<span class="label label-info">`+data+`</span>`
                    }
                    return count
                } 
            },
            { 
                "data": "jumlah_tarining",
                "className": "text-center",
                render:function(data, type, row, meta){
                    var count = 0;
                    if(data > 0){
                        count = `<span class="label label-success">`+data+`</span>`
                    }
                    return count
                }  
            },
            
            {
                "data": "id",
                "className": "text-center",
                "width": "80px",
                "orderable" : false,
                render: function (data, type, row, meta) {
                    var aksi = '';
                    aksi += `
                        <a href="`+url_detail_justifikasi+'/'+data+`" data-toggle='tooltip' data-placement='bottom' title='Detail'><button class='btn btn-info btn-xs'><i class='fa fa-eye' ></i> </button></a>
                        <a href="`+url+'/'+data+`" title="edit" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a>
                    `;

                    aksi +=  '<button  class="btn btn-danger btn-xs btn_delete_justifikasi" value="'+data+'" uid="'+data+'" data-toggle="tooltip" title="Hapus" data-placement="bottom">'+
                                '<i class="fa fa-trash"></i>'+
                            '</button>';
                   
                    return aksi;
                }
            },
        ],
        columnDefs: [
            {
                targets: [0],
                orderable: false,
                className: 'text-center',

            }

        ],
    });

    $('.submit-justifikasi').click(function(){
       submitForm()
    });

    $(document).on("click",".btn_delete_justifikasi",function(){
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
                url  : base_url+"tna/justifikasi/delete_justifikasi",
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
                                $('#table-justifikasi').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data gagal dihapus",
                                imageUrl: img_icon_error
                            }, function() {
                                $('#table-justifikasi').DataTable().ajax.reload( null, false );
                            });
                        }, 1000);
                    }
                }
            });
        });    
    });

    
})