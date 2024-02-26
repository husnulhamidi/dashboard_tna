function nominalAngka(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}


function formatRupiah(angka, prefix){
	var number_string = angka.replace(/[^,\d]/g, '').toString(),
	split   		= number_string.split(','),
	sisa     		= split[0].length % 3,
	rupiah     		= split[0].substr(0, sisa),
	ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

	// tambahkan titik jika yang di input sudah menjadi angka ribuan
	if(ribuan){
		separator = sisa ? '.' : '';
		rupiah += separator + ribuan.join('.');
	}

	rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
	return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}

function formatDate(dateFormat){
	let formattedDate = new Date(dateFormat);
	let d = formattedDate.getDate();
	let m = getMonthName(formattedDate.getMonth());
	let y = formattedDate.getFullYear();
	return d + " " + m +" "+ y
}

function formatDate2(dateFormat){
	let formattedDate = new Date(dateFormat);
	var d = formattedDate.getDate();
	if(d < 10){
		d = '0'+formattedDate.getDate();
	}

	var dm = formattedDate.getMonth()+1;
	var m = '0'+dm
	// if(m < 10){
 // 		m = '0'+formattedDate.getMonth()+1;
	// }
	let y = formattedDate.getFullYear();
	return m+"/"+d+"/"+y
}

function getMonthName($idx){
	var m_names = ['January', 'February', 'March',
    'April', 'May', 'June', 'July',
    'August', 'September', 'October', 'November', 'December'];

	return m_names[$idx];
}

$(document).ready(function(){
    $(document.body).bind('hidden.bs.modal', function () {
      $('#myModal').removeData('bs.modal')
    });
});

function getCurrentDateTime() {
    var now = new Date();
    var year = now.getFullYear();
    var month = ('0' + (now.getMonth() + 1)).slice(-2); // Menambahkan nol di depan jika bulan < 10
    var day = ('0' + now.getDate()).slice(-2); // Menambahkan nol di depan jika tanggal < 10
    var hours = ('0' + now.getHours()).slice(-2); // Menambahkan nol di depan jika jam < 10
    var minutes = ('0' + now.getMinutes()).slice(-2); // Menambahkan nol di depan jika menit < 10
    var seconds = ('0' + now.getSeconds()).slice(-2); // Menambahkan nol di depan jika detik < 10

    return day+'/'+month+'/'+ year + ' jam  ' + hours+':'+minutes;
}




$("#alert").alert();
window.setTimeout(function() { $(".alert1").alert('close'); }, 2000);