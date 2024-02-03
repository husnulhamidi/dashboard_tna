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



$("#alert").alert();
window.setTimeout(function() { $(".alert1").alert('close'); }, 2000);