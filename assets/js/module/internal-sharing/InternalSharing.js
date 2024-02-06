jQuery(document).ready(function() {
   $('#tbl-internal-sharing-emp').DataTable()
   $('#tbl-internal-sharing-hcpd').DataTable()

});

function deleteData(id){
    swal({
        title: "Yakin Hapus Data ini ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Ya, Hapus!",
        closeOnConfirm: false
    }, function () {
        console.log("masuk")
        // $.ajax({
        //     type : "POST",
        //     url  : base_url+"tna/training-mandiri/delete_training_mandiri",
        //     dataType: "JSON",
        //     data : "id="+encrypt,
        //     success:function(resp){
        //         console.log(resp)
        //         if(resp.success){
        //             setTimeout(function() {
        //                 swal({
        //                     title: "Notifikasi!",
        //                     text: "Data berhasil dihapus",
        //                     imageUrl: img_icon_success
        //                 }, function() {
        //                     $('#table-training-mandiri').DataTable().ajax.reload( null, false );
        //                 });
        //             }, 1000);
        //         }else{
        //             setTimeout(function() {
        //                 swal({
        //                     title: "Notifikasi!",
        //                     text: "Data gagal dihapus",
        //                     imageUrl: img_icon_error
        //                 }, function() {
        //                     $('#table-training-mandiri').DataTable().ajax.reload( null, false );
        //                 });
        //             }, 1000);
        //         }
        //     }
        // });
    }); 
}


