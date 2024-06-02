$(document).ready(function(){
	$('#tahun').datepicker({
        format: "yyyy",
        viewMode: "years", 
        minViewMode: "years",
        autoclose:true
    })
	
	LoadFunct();
    $( ".filter-thn" ).on( "change", function() {
        LoadFunct();
        
    })

	$('.export-excel').click(function(){
		$('.loader-wrapper').css('display','block')
		exportExcel();
	})
})

function LoadFunct(){
	let thn = parseInt($('#tahun').val());
	getDataDashboad(thn)
	getDataKaryawanDashboard(thn)
	getListDataKaryawan(thn)
}

function getDataDashboad(thn) {
	$.ajax({
        type : "POST",
        url  : base_url+"tna/dashboard-training/getDataDashboard",
        data:{thn:thn},
        dataType: "JSON",
        success:function(resp){
            // console.log(resp)
            $('#pelatihan').text(resp.Pelatihan ? formatRupiah(resp.Pelatihan) : resp.Pelatihan)
            $('#sertifikasi').text(resp.Pelatihan ? formatRupiah(resp.Sertifikasi) : resp.Sertifikasi)
            $('#e_learning').text(0)
            $('#internal_sharing').text(resp.Pelatihan ? formatRupiah(resp.internal_sharing) : resp.internal_sharing)
           
        },
        complete: function (data) {
            $('.count').each(function () {
			    $(this).prop('Counter', 0).animate({
			        Counter: $(this).text()
			    }, {
			        duration: 1000,
			        easing: 'swing',
			        step: function (now) {
			            $(this).text(nominalAngka(Math.ceil(now)));
			        }
			    });
			});
        }
    });
} 

function getDataKaryawanDashboard(thn) {
	var html = '';
	$.ajax({
        type : "POST",
        url  : base_url+"tna/dashboard-training/getDataKaryawanDashboard",
        data:{thn:thn},
        dataType: "JSON",
        success:function(resp){
        	console.log(resp.length)
        	$('.users-list').empty();
        	if(resp.length > 0 ){
				resp.forEach(function(item, index) {
	           		var imgDefault = 'files/gambar_default/karyawan/avatar5.png';
				    if (item.jenis_kelamin == 3) {
				        imgDefault = 'files/gambar_default/karyawan/avatar3.png';
				    }
				    var img = item.url ? item.url : imgDefault; 
	           		var html =
				            `<li style="width:20%">
				            	<a class="users-list-name" href="${base_url}tna/profil-training-personal/${item.id}">
					                <img src="${base_url}${img}" alt="User Image" style="width:128px;height:128px">
					                </img>
				                    <span class="users-list-date" style="padding-top:10px">
					                    ${item.nama}
					                </span>
					                <span class="users-list-date">
					                    ${item.nama_organisasi}
					                </span>
					            </a>
				            </li>`;
				    $('.users-list').append(html);
				});
        	}
           
        }
    });
}

function getListDataKaryawan(thn){
	if ($.fn.DataTable.isDataTable('#table-list-karyawan')) {
        $('#table-list-karyawan').DataTable().destroy();
    }
    $('#table-list-karyawan').DataTable({
        processing: true, 
        serverSide: true, 
        scrollX: true,
        order: [], 
        ajax: {
            url     : base_url+"tna/dashboard-training/getListDataKaryawan",
            type    : "get",
            datatype: "json",
            data    : function(d){
                console.log(d)
                d.thn = thn
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
        	{
        		"data": "nama",
        		render:function(data, type, row, meta){
        			return `<a href="${base_url}tna/profil-training-personal/${row.id}">${data}</a>`
        		}
        	},
        	{"data": "nik_tg"},
        	{"data": "nama_organisasi"},
        	{
        		"data": "jumlah_training",
        		"class":"text-center",
        		render:function(data, type, row, meta){
        			return `<span class="label label-success">${data}</span>`
        		}
        	},
        ]
    });
}

function exportExcel(){
	let thn = parseInt($('#tahun').val());
    var dynamic_url = base_url + 'tna/dashboard-training/export/'+thn;
    window.location.href = dynamic_url;
	
	setTimeout(function() { 
		$('.loader-wrapper').css('display','none')
    }, 1000);
}
