$(document).ready(function(){
    // $('.table-urgent').DataTable()
    if($('#type').val()){
        let type = $('#type').val()
        let quartal = $('#quartal').val()
        let thn = $('#thn').val()
        detail(type, quartal, thn)
    }else{
        let thn = $('#filter_year').val();
        loadData(thn)
        $( ".btn-flat" ).on( "click", function() {
            let thn = $('#filter_year').val();
            loadData(thn)
        })
        Highcharts.setOptions({
            colors: ['#76d86b', '#4bb7e4', '#f6c811', '#ff6232'],
            navigation: {
                buttonOptions: {
                    symbolSize: 12,
                    symbolStrokeWidth: 1,
                    enabled: true //change to false to hide
                }
            },
            xAxis: {
                labels: {
                    style: {
                        color: '#000',
                        letterSpacing: '2px',
                        textTransform: 'uppercase',
                        fontSize: '10px',
                    }
                },
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        allowOverlap: true,
                        padding: 0,
                    }
                }
            },
            yAxis: {
                labels: {
                    style: {
                        color: '#000',
                        fontWeight: '1000',
                        fontSize: '8px'
                    },
                },
                title: {
                    style: {
                        color: '#000',
                        fontSize: '12px'
                    }
                },
                gridLineColor: '#dadce2'
            }
        });
    }
 
})

function redirectDetail(paramsType, paramsQuartal) {
    let thn = $('#filter_year').val();
    var dynamic_url = base_url + 'tna/home/detail/'+paramsType+'/'+paramsQuartal +'/'+ thn;
    window.location.href = dynamic_url;
}


function loadData(thn){
    $('#tahun_filter').html(thn)
    $('#tahun_filter_sertifikasi').html(thn)
    $('#thn_anggaran_tna').html(thn)
    $('#thn_summary').html(thn)
    $('#thn_summary_non_tna').html(thn)

    getDataUrget()
    getDataDashboad()
    getChartPelatihanQ1();
    getChartPelatihanQ2();
    getChartPelatihanQ3();
    getChartPelatihanQ4();
    getChartSertifikasiQ1();
    getChartSertifikasiQ2();
    getChartSertifikasiQ3();
    getChartSertifikasiQ4();
    realisasiInternalSharing()
    realisasiPesertaInternalSharing()
    getDataDashboardPengawalan()
    anggaranTNA()
    summary()

}

function getDataUrget(){
    var thn = $('#filter_year').val();
    var quartal = $('#filter_quartal').val()
    if ($.fn.DataTable.isDataTable('.table-urgent')) {
        $('.table-urgent').DataTable().destroy();
    }
    $('.table-urgent').DataTable({
        processing: true, 
        serverSide: true, 
        scrollX: true,
        order: [], 
        ajax: {
            url     : base_url+"tna/home/getListTNAUrgent",
            type    : "get",
            datatype: "json",
            data    : function(d){
                d.thn = thn
                d.quartal = quartal

                console.log(d)
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
            {"data": "id_tna"},
            {"data": "nama_karyawan"},
            {"data": "nama_organisasi"},
            { "data": "pelatihan"},
            { "data": "jenis_development"},
            { "data": "kompetensi" },
            { 
                "data": "waktu_pelaksanaan",
                render:function(data, type, row, meta){
                    let date = '-'
                    if(data !== '0000-00-00'){
                        date = formatDate(data)
                    }
                    return date
                }
            },       
        ],
    })
}

function getDataDashboad() {
    var thn = $('#filter_year').val();
    var quartal = $('#filter_quartal').val()
	$.ajax({
        type : "POST",
        url  : base_url+"tna/home/getCountDashboard",
        data:{
                thn:thn,
                quartal:quartal
            },
        dataType: "JSON",
        success:function(resp){
            $('#pelatihan').text(resp.Pelatihan ? formatRupiah(resp.Pelatihan.pelatihan) : resp.Pelatihan.pelatihan)
            $('#peserta_pelatihan').text(resp.Pelatihan.peserta ? formatRupiah(resp.Pelatihan.peserta) : resp.Pelatihan.peserta)
            $('#peserta_pelatihan_fte').text(resp.Pelatihan.status_fte ? formatRupiah(resp.Pelatihan.status_fte) : resp.Pelatihan.status_fte)
            $('#peserta_pelatihan_non_fte').text(resp.Pelatihan.status_non_fte ? formatRupiah(resp.Pelatihan.status_non_fte) : resp.Pelatihan.status_non_fte)
            $('#peserta_pelatihan_tba').text(0)
            
            $('#sertifikasi').text(resp.Sertifikasi ? formatRupiah(resp.Sertifikasi.sertifikasi) : resp.Sertifikasi.sertifikasi)
            $('#peserta_sertifikasi').text(resp.Sertifikasi.peserta ? formatRupiah(resp.Sertifikasi.peserta) : resp.Sertifikasi.peserta)
            $('#peserta_sertifikasi_fte').text(resp.Sertifikasi.status_fte ? formatRupiah(resp.Sertifikasi.status_fte) : resp.Sertifikasi.status_fte)
            $('#peserta_sertifikasi_non_fte').text(resp.Sertifikasi.status_non_fte ? formatRupiah(resp.Sertifikasi.status_non_fte) : resp.Sertifikasi.status_non_fte)
            $('#peserta_sertifikasi_tba').text(0)

            $('#internal_sharing').text(resp.internal_sharing.rencana ? formatRupiah(resp.internal_sharing.rencana) : resp.internal_sharing.rencana)
            $('#internal_sharing_rencana').text(resp.internal_sharing.rencana ? formatRupiah(resp.internal_sharing.rencana) : resp.internal_sharing.rencana)
            $('#internal_sharing_realisasi').text(resp.internal_sharing.realisasi ? formatRupiah(resp.internal_sharing.realisasi) : resp.internal_sharing.realisasi)
            $('#internal_sharing_todo').text(resp.internal_sharing.todo ? formatRupiah(resp.internal_sharing.todo) : resp.internal_sharing.todo)
 
        },
        complete: function (data) {
            $('.count_dashboard').each(function () {
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

function getDataDashboardPengawalan(){
	$.ajax({
        type : "POST",
        url  : base_url+"tna/pengawalan/getDataDashboard",
        dataType: "JSON",
        success:function(resp){
            // 
            $('#draft').text(resp.draft)
            $('#verifMgrLini').text(resp.mgrLini)
            $('#verifMgrHCPD').text(resp.mgrHCPD)
            $('#verifAVPHCPD').text(resp.appHCM)
            $('#pernyataanFormPeserta').text(resp.pernyataan_peserta)
            $('#rekonfirmasiKuota').text(resp.rekomfirmasi_kuota)
            $('#kelengkapanDok').text(resp.kelengkapan_dokumen)
            $('#notaDinas').text(resp.nota_dinas_penugasan)
            $('#pembayaran').text(resp.pembayaran)
            $('#sertifikat').text(resp.sertifikat)
            $('#materi').text(resp.materi)
            $('#jadwal').text(resp.internal_sharing)
            $('#evalusi').text(resp.evalusi)
            $('#selesai').text(resp.selesai)
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

function getChartPelatihanQ1(){
    var thn = $('#filter_year').val();
	$.ajax({
        type : "POST",
        url  : base_url+"tna/home/chartPelatihan",
        data:{
                thn:thn,
                quartal : 1
            },
        dataType: "JSON",
        success:function(resp){
           
            Highcharts.chart('pelatihan_q1', {
                chart: {
                    type: 'column'
                },
                title: {
                    useHTML: true,
                    text: '<h3 class="title">Quartal 1</h3>',
                    align: 'center',
                    x: 0
                },
                xAxis: {
                    categories: ['Pelatihan', 'Peserta'],
                },
                plotOptions: {
                    series: {
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.2f} ',
                        }
                    }
                },
        
                yAxis: { // Primary yAxis
                    labels: {
                        format: '{value} ',
                        style: {
                            color: '#000'
                        }
                    },
                    title: {
                        text: ' ',
                        style: {
                            color: '#000'
                        }
                    },
                    gridLineColor: '#d8dade'
                },
        
                tooltip: {
                    headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                credits: {
                    enabled: false, // Enable/Disable the credits
                    text: 'This is a credit'
                },
                
                series: [{
                        name: 'Rencana',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#169aed'],
                                [0.9, '#8cd0fb'],
                            ]
                        },
                        data: [parseFloat(resp.rencana_pelatihan), parseFloat(resp.rencana_peserta)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    },
                    {
                        name: 'Realisasi',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#2fcea3'],
                                [0.325, '#9bdd4e']
                            ]
                        },
                        data: [parseFloat(resp.realisasi_pelatihan), parseFloat(resp.realisasi_peserta)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    }
                
                ]
            });
           
        }
    }); 
}

function getChartPelatihanQ2(){
    var thn = $('#filter_year').val();
	$.ajax({
        type : "POST",
        url  : base_url+"tna/home/chartPelatihan",
        data:{
                thn:thn,
                quartal : 2
            },
        dataType: "JSON",
        success:function(resp){
           
            Highcharts.chart('pelatihan_q2', {
                chart: {
                    type: 'column'
                },
                title: {
                    useHTML: true,
                    text: '<h3 class="title">Quartal 2</h3>',
                    align: 'center',
                    x: 0
                },
                xAxis: {
                    categories: ['Pelatihan', 'Peserta'],
                },
                plotOptions: {
                    series: {
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.2f} ',
                        }
                    }
                },
        
                yAxis: { // Primary yAxis
                    labels: {
                        format: '{value} ',
                        style: {
                            color: '#000'
                        }
                    },
                    title: {
                        text: ' ',
                        style: {
                            color: '#000'
                        }
                    },
                    gridLineColor: '#d8dade'
                },
        
                tooltip: {
                    headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                credits: {
                    enabled: false, // Enable/Disable the credits
                    text: 'This is a credit'
                },
                
                series: [{
                        name: 'Rencana',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#169aed'],
                                [0.9, '#8cd0fb'],
                            ]
                        },
                        data: [parseFloat(resp.rencana_pelatihan), parseFloat(resp.rencana_peserta)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    },
                    {
                        name: 'Realisasi',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#2fcea3'],
                                [0.325, '#9bdd4e']
                            ]
                        },
                        data: [parseFloat(resp.realisasi_pelatihan), parseFloat(resp.realisasi_peserta)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    }
                
                ]
            });
           
        }
    }); 
}

function getChartPelatihanQ3(){
    var thn = $('#filter_year').val();
	$.ajax({
        type : "POST",
        url  : base_url+"tna/home/chartPelatihan",
        data:{
                thn:thn,
                quartal : 2
            },
        dataType: "JSON",
        success:function(resp){
           
            Highcharts.chart('pelatihan_q3', {
                chart: {
                    type: 'column'
                },
                title: {
                    useHTML: true,
                    text: '<h3 class="title">Quartal 3</h3>',
                    align: 'center',
                    x: 0
                },
                xAxis: {
                    categories: ['Pelatihan', 'Peserta'],
                },
                plotOptions: {
                    series: {
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.2f} ',
                        }
                    }
                },
        
                yAxis: { // Primary yAxis
                    labels: {
                        format: '{value} ',
                        style: {
                            color: '#000'
                        }
                    },
                    title: {
                        text: ' ',
                        style: {
                            color: '#000'
                        }
                    },
                    gridLineColor: '#d8dade'
                },
        
                tooltip: {
                    headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                credits: {
                    enabled: false, // Enable/Disable the credits
                    text: 'This is a credit'
                },
                
                series: [{
                        name: 'Rencana',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#169aed'],
                                [0.9, '#8cd0fb'],
                            ]
                        },
                        data: [parseFloat(resp.rencana_pelatihan), parseFloat(resp.rencana_peserta)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    },
                    {
                        name: 'Realisasi',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#2fcea3'],
                                [0.325, '#9bdd4e']
                            ]
                        },
                        data: [parseFloat(resp.realisasi_pelatihan), parseFloat(resp.realisasi_peserta)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    }
                
                ]
            });
           
        }
    }); 
}

function getChartPelatihanQ4(){
    var thn = $('#filter_year').val();
	$.ajax({
        type : "POST",
        url  : base_url+"tna/home/chartPelatihan",
        data:{
                thn:thn,
                quartal : 2
            },
        dataType: "JSON",
        success:function(resp){
           
            Highcharts.chart('pelatihan_q4', {
                chart: {
                    type: 'column'
                },
                title: {
                    useHTML: true,
                    text: '<h3 class="title">Quartal 4</h3>',
                    align: 'center',
                    x: 0
                },
                xAxis: {
                    categories: ['Pelatihan', 'Peserta'],
                },
                plotOptions: {
                    series: {
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.2f} ',
                        }
                    }
                },
        
                yAxis: { // Primary yAxis
                    labels: {
                        format: '{value} ',
                        style: {
                            color: '#000'
                        }
                    },
                    title: {
                        text: ' ',
                        style: {
                            color: '#000'
                        }
                    },
                    gridLineColor: '#d8dade'
                },
        
                tooltip: {
                    headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                credits: {
                    enabled: false, // Enable/Disable the credits
                    text: 'This is a credit'
                },
                
                series: [{
                        name: 'Rencana',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#169aed'],
                                [0.9, '#8cd0fb'],
                            ]
                        },
                        data: [parseFloat(resp.rencana_sertifikasi), parseFloat(resp.rencana_peserta)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    },
                    {
                        name: 'Realisasi',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#2fcea3'],
                                [0.325, '#9bdd4e']
                            ]
                        },
                        data: [parseFloat(resp.realisasi_sertifikasi), parseFloat(resp.realisasi_peserta)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    }
                
                ]
            });
           
        }
    }); 
}

function getChartSertifikasiQ1(){
    var thn = $('#filter_year').val();
	$.ajax({
        type : "POST",
        url  : base_url+"tna/home/chartSertifikasi",
        data:{
                thn:thn,
                quartal : 2
            },
        dataType: "JSON",
        success:function(resp){
            Highcharts.chart('sertifikasi_q1', {
                chart: {
                    type: 'bar'
                },
                title: {
                    useHTML: true,
                    text: '<h3 class="title">Quartal 1</h3>',
                    align: 'center',
                    x: 0
                },
                // subtitle: {
                //     text: 'REGIONAL'
                // },
                xAxis: {
                    categories: ['Sertifikasi', 'Peserta'],
                    //crosshair: false
                },
                plotOptions: {
                    series: {
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.2f} ',
                        }
                    }
                },
        
                yAxis: { // Primary yAxis
                    labels: {
                        format: '{value} ',
                        style: {
                            color: '#000'
                        }
                    },
                    title: {
                        text: ' ',
                        style: {
                            color: '#000'
                        }
                    },
                    gridLineColor: '#d8dade'
                },
        
                tooltip: {
                    headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                credits: {
                    enabled: false, // Enable/Disable the credits
                    text: 'This is a credit'
                },
        
        
                series: [{
                        name: 'Rencana',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#ff5d5d'],
                                [0.325, '#ff9d33']
                            ]
                        },
                        data: [parseFloat(resp.rencana_sertifikasi), parseFloat(resp.rencana_peserta)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    },
                    {
                        name: 'Realisasi',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#2fcea3'],
                                [0.325, '#9bdd4e']
                            ]
                        },
                        data: [parseFloat(resp.realisasi_sertifikasi), parseFloat(resp.realisasi_peserta)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    }
                
                ]
            });
        }
    }); 
}

function getChartSertifikasiQ2(){
    var thn = $('#filter_year').val();
	$.ajax({
        type : "POST",
        url  : base_url+"tna/home/chartSertifikasi",
        data:{
                thn:thn,
                quartal : 2
            },
        dataType: "JSON",
        success:function(resp){
            Highcharts.chart('sertifikasi_q2', {
                chart: {
                    type: 'bar'
                },
                title: {
                    useHTML: true,
                    text: '<h3 class="title">Quartal 2</h3>',
                    align: 'center',
                    x: 0
                },
                // subtitle: {
                //     text: 'REGIONAL'
                // },
                xAxis: {
                    categories: ['Sertifikasi', 'Peserta'],
                    //crosshair: false
                },
                plotOptions: {
                    series: {
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.2f} ',
                        }
                    }
                },
        
                yAxis: { // Primary yAxis
                    labels: {
                        format: '{value} ',
                        style: {
                            color: '#000'
                        }
                    },
                    title: {
                        text: ' ',
                        style: {
                            color: '#000'
                        }
                    },
                    gridLineColor: '#d8dade'
                },
        
                tooltip: {
                    headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                credits: {
                    enabled: false, // Enable/Disable the credits
                    text: 'This is a credit'
                },
        
        
                series: [{
                        name: 'Rencana',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#ff5d5d'],
                                [0.325, '#ff9d33']
                            ]
                        },
                        data: [parseFloat(resp.rencana_sertifikasi), parseFloat(resp.rencana_peserta)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    },
                    {
                        name: 'Realisasi',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#2fcea3'],
                                [0.325, '#9bdd4e']
                            ]
                        },
                        data: [parseFloat(resp.realisasi_sertifikasi), parseFloat(resp.realisasi_peserta)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    }
                
                ]
            });
        }
    }); 
}

function getChartSertifikasiQ3(){
    var thn = $('#filter_year').val();
	$.ajax({
        type : "POST",
        url  : base_url+"tna/home/chartSertifikasi",
        data:{
                thn:thn,
                quartal : 2
            },
        dataType: "JSON",
        success:function(resp){
            Highcharts.chart('sertifikasi_q3', {
                chart: {
                    type: 'bar'
                },
                title: {
                    useHTML: true,
                    text: '<h3 class="title">Quartal 3</h3>',
                    align: 'center',
                    x: 0
                },
                // subtitle: {
                //     text: 'REGIONAL'
                // },
                xAxis: {
                    categories: ['Sertifikasi', 'Peserta'],
                    //crosshair: false
                },
                plotOptions: {
                    series: {
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.2f} ',
                        }
                    }
                },
        
                yAxis: { // Primary yAxis
                    labels: {
                        format: '{value} ',
                        style: {
                            color: '#000'
                        }
                    },
                    title: {
                        text: ' ',
                        style: {
                            color: '#000'
                        }
                    },
                    gridLineColor: '#d8dade'
                },
        
                tooltip: {
                    headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                credits: {
                    enabled: false, // Enable/Disable the credits
                    text: 'This is a credit'
                },
        
        
                series: [{
                        name: 'Rencana',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#ff5d5d'],
                                [0.325, '#ff9d33']
                            ]
                        },
                        data: [parseFloat(resp.rencana_sertifikasi), parseFloat(resp.rencana_peserta)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    },
                    {
                        name: 'Realisasi',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#2fcea3'],
                                [0.325, '#9bdd4e']
                            ]
                        },
                        data: [parseFloat(resp.realisasi_sertifikasi), parseFloat(resp.realisasi_peserta)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    }
                
                ]
            });
        }
    }); 
}

function getChartSertifikasiQ4(){
    var thn = $('#filter_year').val();
	$.ajax({
        type : "POST",
        url  : base_url+"tna/home/chartSertifikasi",
        data:{
                thn:thn,
                quartal : 2
            },
        dataType: "JSON",
        success:function(resp){
            Highcharts.chart('sertifikasi_q4', {
                chart: {
                    type: 'bar'
                },
                title: {
                    useHTML: true,
                    text: '<h3 class="title">Quartal 4</h3>',
                    align: 'center',
                    x: 0
                },
                // subtitle: {
                //     text: 'REGIONAL'
                // },
                xAxis: {
                    categories: ['Sertifikasi', 'Peserta'],
                    //crosshair: false
                },
                plotOptions: {
                    series: {
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.2f} ',
                        }
                    }
                },
        
                yAxis: { // Primary yAxis
                    labels: {
                        format: '{value} ',
                        style: {
                            color: '#000'
                        }
                    },
                    title: {
                        text: ' ',
                        style: {
                            color: '#000'
                        }
                    },
                    gridLineColor: '#d8dade'
                },
        
                tooltip: {
                    headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                credits: {
                    enabled: false, // Enable/Disable the credits
                    text: 'This is a credit'
                },
        
        
                series: [{
                        name: 'Rencana',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#ff5d5d'],
                                [0.325, '#ff9d33']
                            ]
                        },
                        data: [parseFloat(resp.rencana_sertifikasi), parseFloat(resp.rencana_peserta)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    },
                    {
                        name: 'Realisasi',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#2fcea3'],
                                [0.325, '#9bdd4e']
                            ]
                        },
                        data: [parseFloat(resp.realisasi_sertifikasi), parseFloat(resp.realisasi_peserta)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    }
                
                ]
            });
        }
    }); 
}

function realisasiInternalSharing(){
    var thn = $('#filter_year').val();
	$.ajax({
        type : "POST",
        url  : base_url+"tna/home/realisasiInternalSharing",
        data:{
                thn:thn
            },
        dataType: "JSON",
        success:function(resp){
            Highcharts.chart('internal_sharing_chart', {
                chart: {
                    type: 'bar'
                },
                title: {
                    useHTML: true,
                    text: '<h4 class="title">REALISASI INTERNAL SHARING (PER QUARTAL) '+thn+'</h4>',
                    align: 'center',
                    x: 0
                },
                xAxis: {
                    categories: ['Quartal 1', 'Quartal 2','Quartal 3','Quartal 4'],
                    //crosshair: false
                },
                plotOptions: {
                    series: {
                        dataLabels: {
                            enabled: true,
                            format: '{point.y:.2f} ',
                        }
                    }
                },
        
                yAxis: { // Primary yAxis
                    labels: {
                        format: '{value} ',
                        style: {
                            color: '#000'
                        }
                    },
                    title: {
                        text: ' ',
                        style: {
                            color: '#000'
                        }
                    },
                    gridLineColor: '#d8dade'
                },
        
                tooltip: {
                    headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                credits: {
                    enabled: false, // Enable/Disable the credits
                    text: 'This is a credit'
                },
        
        
                series: [
                    {
                        name: 'Realisasi',
                        type: 'column',
                        color: {
                            linearGradient: [0, 400, 0, 0],
                            stops: [
                                [0.1, '#2fcea3'],
                                [0.325, '#9bdd4e']
                            ]
                        },
                        // data: [16.69, 7.89, 10, 17 ],
                        data: [parseFloat(resp.quartal1), parseFloat(resp.quartal2),parseFloat(resp.quartal3),parseFloat(resp.quartal4)],
                        tooltip: {
                            valueSuffix: 'T'
                        },
                        marker: {
                            lineWidth: 2,
                            lineColor: Highcharts.getOptions().colors[1],
                            fillColor: 'white'
                        }
                    }
                
                ]
            });
        }
    }); 
}

function realisasiPesertaInternalSharing(){
    var thn = $('#filter_year').val();
	$.ajax({
        type : "POST",
        url  : base_url+"tna/home/realisasiPesertaInternalSharing",
        data:{
                thn:thn
            },
        dataType: "JSON",
        success:function(resp){
           
           Highcharts.chart('peserta_internal_sharing', {
            chart: {
                type: 'column'
            },
            title: {
                useHTML: true,
                text: '<h4 class="title">REALISASI JUMLAH PESERTA INTERNAL SHARING <br> (PER QUARTAL) '+thn+'</h4>',
                align: 'center',
                x: 0
            },
            xAxis: {
                categories: ['Quartal 1', 'Quartal 2', ' Quartal 3',' Quartal 4'],
                //crosshair: false
            },
            plotOptions: {
                series: {
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.2f} ',
                    }
                }
            },
    
            yAxis: { // Primary yAxis
                labels: {
                    format: '{value} ',
                    style: {
                        color: '#000'
                    }
                },
                title: {
                    text: ' ',
                    style: {
                        color: '#000'
                    }
                },
                gridLineColor: '#d8dade'
            },
    
            tooltip: {
                headerFormat: '<table><tr><td colspan="2"><h3>{point.key}</h3></td></tr>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.2f} </b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            credits: {
                enabled: false, // Enable/Disable the credits
                text: 'This is a credit'
            },
    
    
            series: [{
                    name: 'Total Peserta',
                    type: 'column',
                    color: {
                        linearGradient: [0, 400, 0, 0],
                        stops: [
                            [0.1, '#ff5d5d'],
                            [0.325, '#ff9d33']
                        ]
                    },
                    // data: [53, 42, 40, 45],
                    data: [parseFloat(resp.quartal1.total_peserta), parseFloat(resp.quartal2.total_peserta),parseFloat(resp.quartal3.total_peserta),parseFloat(resp.quartal4.total_peserta)],
                    tooltip: {
                        valueSuffix: 'T'
                    },
                    marker: {
                        lineWidth: 2,
                        lineColor: Highcharts.getOptions().colors[1],
                        fillColor: 'white'
                    }
                },
                {
                    name: 'FTE',
                    type: 'column',
                    color: {
                        linearGradient: [0, 400, 0, 0],
                        stops: [
                            [0.1, '#2fcea3'],
                            [0.325, '#9bdd4e']
                        ]
                    },
                    // data: [16, 7, 5,7],
                    data: [parseFloat(resp.quartal1.status_fte), parseFloat(resp.quartal2.status_fte),parseFloat(resp.quartal3.status_fte),parseFloat(resp.quartal4.status_fte)],
                    tooltip: {
                        valueSuffix: 'T'
                    },
                    marker: {
                        lineWidth: 2,
                        lineColor: Highcharts.getOptions().colors[1],
                        fillColor: 'white'
                    }
                },
                {
                    name: 'NON FTE',
                    type: 'column',
                    color: {
                        linearGradient: [0, 400, 0, 0],
                        stops: [
                            [0.1, '#169aed'],
                            [0.9, '#8cd0fb'],
                        ]
                    },
                    // data: [16, 7, 5,7],
                    data: [parseFloat(resp.quartal1.status_non_fte), parseFloat(resp.quartal2.status_non_fte),parseFloat(resp.quartal3.status_non_fte),parseFloat(resp.quartal4.status_non_fte)],
                    tooltip: {
                        valueSuffix: 'T'
                    },
                    marker: {
                        lineWidth: 2,
                        lineColor: Highcharts.getOptions().colors[1],
                        fillColor: 'white'
                    }
                }
            
            ]
        });
          
        }
    }); 
}

function anggaranTNA(){
    var thn = $('#filter_year').val();
	$.ajax({
        type : "POST",
        url  : base_url+"tna/home/anggaranTNA",
        data:{
                thn:thn
            },
        dataType: "JSON",
        success:function(resp){
            // console.log(JSON.stringify(resp))
            $('#count_realisasi_anggaran').html(resp.realisasi_anggaran_tna !== 0 ? formatRupiah(resp.realisasi_anggaran_tna,'Rp.') : 0);
            $('#count_rencana_anggaran').html(resp.rencana_anggaran_tna !== 0 ? formatRupiah(resp.rencana_anggaran_tna,'Rp.') : 0);
            $('#count_realisasi_anggaran_non_tna').html(resp.realisasi_anggaran_non_tna !== 0 ? formatRupiah(resp.realisasi_anggaran_non_tna,'Rp.') : 0);
            $('#count_rencana_anggaran_non_tna').html(resp.rencana_anggaran_non_tna !== 0 ? formatRupiah(resp.rencana_anggaran_non_tna,'Rp.') : 0);
          
        },
        complete: function (data) {
            $('.count_rencana_anggaran').each(function () {
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

function summary(){
    var thn = $('#filter_year').val();
	$.ajax({
        type : "POST",
        url  : base_url+"tna/home/summary",
        data:{
                thn:thn
            },
        dataType: "JSON",
        success:function(resp){
            // console.log(JSON.stringify(resp))
            // console.log(formatRupiah(resp.tna_quartal1))
            // let summary_tna_q1 = resp.tna_quartal1
            // console.log(formatRupiah(summary_tna_q1.toString(),'Rp.'))
            $('#summary_tna_q1').text(resp.tna_quartal1)
            $('#summary_tna_q2').html(resp.tna_quartal2)
            $('#summary_tna_q3').html(resp.tna_quartal3)
            $('#summary_tna_q4').html(resp.tna_quartal4)
            $('#summary_non_tna_q1').html(resp.non_tna_quartal1)
            $('#summary_non_tna_q2').html(resp.non_tna_quartal2)
            $('#summary_non_tna_q3').html(resp.non_tna_quartal3)
            $('#summary_non_tna_q4').html(resp.non_tna_quartal4)
        },
        complete: function (data) {
            $('.summary_tna').each(function () {
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

function detail(type, quartal, thn){
    $('#tbl-detail-dashboard').DataTable({
        processing: true, 
        serverSide: true, 
        scrollX: true,
        order: [], 
        ajax: {
            url     : base_url+"tna/home/dataDetail",
            type    : "get",
            datatype: "json",
            data    : function(d){
                console.log(d)
                d.type = type
                d.quartal = quartal
                d.thn = thn
            },          
        },
        columns: [
            {
                "data": "id",
                "width": "50px",
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {"data":"id_tna"},
            {"data":"pelatihan"},
            {"data":"nama_penyelenggara"},
            {"data":"nama_karyawan"},
            {"data":"nama_organisasi"},
            {
                "data": "status",
                render:function(data, type, row, meta){
                    
                    var statusMapping = {
                        'Verifikasi Mgr.Lini': 'Menunggu Verifikasi Mgr.Lini',
                        'Verifikasi Manager HCPD': 'Menunggu Verifikasi Manager HCPD',
                        'Verifikasi AVP HCM': 'Menunggu Verifikasi AVP HCM',
                        'Form Pernyataan Peserta': 'Menunggu Form Pernyataan Peserta',
                        'Pembayaran' : 'Manunggu Pembayaran',
                        'Jadwal Pelaksanaan (Konfirmasi Kuota)' : 'Konfirmasi Kuota',
                        'Kelengkapan Dokumen' : 'Proses Kelengkapan Dokumen',
                        'Internal Sharing' : 'Menunggu Internal Sharing',
                        'Evaluasi' : 'Menunggu Penilaian Evaluasi Training'
                    };

                    var respon = statusMapping[data] || data;
                    return row.tahapan_proses+'<br>'+respon
                }
            },
        ]
        
    });
}