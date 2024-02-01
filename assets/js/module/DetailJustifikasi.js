
function submitFormTraining(){
	 $("#formTraining").validate({
        rules: {
            name: "required",
            type: "required"
        },
        messages: {
            name:{
                required:"<i class='fa fa-times'></i> Kode harus diisi"
            },  
            type:{
                required:"<i class='fa fa-times'></i> Kode harus diisi"
            },            
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
                url: base_url+"tna/justifikasi/simpan_training",
                type: 'POST',
                dataType: "JSON",
                data: $(form).serialize(),
                success: function(response) {
                    console.log(response)
                    if(response.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data berhasil disimpan",
                                imageUrl: img_icon_success
                            }, function(d) {
                                location.reload();
                                // location.href = url_detail_justifikasi+"/"+response.data
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



function submitFormKompetensi(){
    $("#formkompetensi").validate({
        rules: {
            kompetensi: "required"
        },
        messages: {
            kompetensi:{
                required:"<i class='fa fa-times'></i> Kode harus diisi"
            },            
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
           saveForm(form)
        }
    });
}

function submitFormNewKompetensi(){
    $("#formkompetensi").validate({
        rules: {
            name: "required",
            kode: "required"
        },
        messages: {
            name:{
                required:"<i class='fa fa-times'></i> Kode harus diisi"
            }, 
             kode:{
                required:"<i class='fa fa-times'></i> Kode harus diisi"
            },            
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
           saveForm(form)
        }
    });
}

function saveForm(form){
    $.ajax({
        url: base_url+"tna/justifikasi/simpan_kompetensi",
        type: 'POST',
        dataType: "JSON",
        data: $(form).serialize(),
        success: function(response) {
            console.log(response)
            if(response.success){
                setTimeout(function() {
                    swal({
                        title: "Notifikasi!",
                        text: "Data berhasil disimpan",
                        imageUrl: img_icon_success
                    }, function(d) {
                        location.reload();
                        // location.href = url_detail_justifikasi+"/"+response.data
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

jQuery(document).ready(function() {
	$('.btn-form-training').click(function(){
		console.log('as')
		// const idKom = $('#idKompetensi').val()
		// const idTraining = $('#idTraining').val()
		submitFormTraining()
	})

	$('.btn-form-kompetensi').click(function(){
		
		// console.log($('#formkompetensi').serialize())
		// console.log($('input[name="addNew"]').val())
		if($('input[name="addNew"]').val()){
            submitFormNewKompetensi()
		}else{
            submitFormKompetensi()
		}
	})
});