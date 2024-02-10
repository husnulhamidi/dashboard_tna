jQuery(document).ready(function() {
	 $('#fileName').filestyle({
        btnClass : 'btn-success',
        text : 'Select File',
        htmlIcon : '<span class="fa fa-folder"></span> ',
    });
	 
 	var table = $('#table-tna').DataTable({
        "scrollX": true
    });
})

function showModalProses(){
	// $('#modalProses').modal('show')
	 swal({
        title: "Apakah Anda yakin Akan Proses TNA ini ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#00FFFF",
        confirmButtonText: "Ya, Proses",
        cancelButtonText:'Batal',
        closeOnConfirm: false
    }, function () {
        console.log("masuk")
        // $.ajax({
        //     type : "POST",
        //     url  : base_url+"tna/training-mandiri/delete_training_mandiri",
        //     dataType: "JSON",
        //     data : "id="+1,
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

function deleteData(id){
swal({
        title: "Apakah Anda yakin Akan Menghapus ini ?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#FF0000",
        confirmButtonText: "Ya, hapus",
        cancelButtonText:'Batal',
        closeOnConfirm: false
    }, function () {
        console.log("masuk")

    }); 
}