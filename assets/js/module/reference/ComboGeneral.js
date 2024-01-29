
function getComboJobFunction(JobFamilyCode,JobFunctionCode=""){
    
    $.ajax({
        url        : base_url+"tna/combo/job-function",
        type       : 'GET',
        contentType: false,
        cache      : false,
        processData: false,
        data       : 'JobFamilyCode='+JobFamilyCode+'&JobFunctionCode'+JobFunctionCode,
        success: function(resp){
            $('#job_function').html(resp);
        },
        error: function(result){
            setTimeout(function() {
                swal({
                    title: "Notifikasi!",
                    text: 'Load data gagal.',
                    imageUrl: img_icon_error
                }, function() {
                    //location.reload();
                });
            }, 1000);
        }
    });
}

function getComboJobRole(JobFunctionCode="",JobRoleCode=""){
    
    $.ajax({
        url        : base_url+"tna/combo/job-role",
        type       : 'GET',
        contentType: false,
        cache      : false,
        processData: false,
        data       : 'JobFunctionCode='+JobFunctionCode+'&JobRoleCode'+JobRoleCode,
        success: function(resp){
            $('#job_role').html(resp);
        },
        error: function(result){
            setTimeout(function() {
                swal({
                    title: "Notifikasi!",
                    text: 'Load data gagal.',
                    imageUrl: img_icon_error
                }, function() {
                    //location.reload();
                });
            }, 1000);
        }
    });

}

function getComboKompetensi(JobRoleCode="",KompetensiCode=""){
    
    $.ajax({
        url        : base_url+"tna/combo/kompetensi",
        type       : 'GET',
        contentType: false,
        cache      : false,
        processData: false,
        data       : 'JobRoleCode='+JobRoleCode+'&KompetensiCode'+KompetensiCode,
        success: function(resp){
            $('#kompetensi').html(resp);
        },
        error: function(result){
            setTimeout(function() {
                swal({
                    title: "Notifikasi!",
                    text: 'Load data gagal.',
                    imageUrl: img_icon_error
                }, function() {
                    //location.reload();
                });
            }, 1000);
        }
    });

}




jQuery(document).ready(function() {

    $("#job_family").change(function(){
        let code = $("#job_family").val();
        getComboJobFunction(code);
    });

    $("#job_function").change(function(){
        let code = $("#job_function").val();
        getComboJobRole(code);
    });



});