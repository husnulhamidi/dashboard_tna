<style type="text/css">
    .col-md-3 label {
        display: inline-block;
        vertical-align: super;
    }
</style>
<div class="tab-content">
    <div class="tab-pane active">
        <div class="col-md-12" style="padding-top: 10px">
            <label class="col-md-1"><h3> Evaluasi </h3></label>
            <div class="pull-left" style="margin-top:18px">
                <button class="btn btn-success btn-xs" title="Edit"> <i class="fa fa-edit"></i></button>
            </div>
        </div>
        <div class="col-md-12" style="padding-top: 10px">
            <hr style="margin-top: -10px">
            <table class="table table-bordered" id="tbl-evaluasi">
                <thead>
                    <tr>
                        <th class="text-center"> No </th>
                        <th class="text-center"> Uraian </th>
                        <th class="text-center"> Baik Sekali</th>
                        <th class="text-center"> Baik</th>
                        <th class="text-center"> Cukup</th>
                        <th class="text-center"> Kurang</th>
                        <th class="text-center"> Kurang Sekali</th>
                    </tr>
                </thead>
                <tbody id="body-tbl-evaluasi"></tbody>
                <tfooter>
                    <tr>
                        <th colspan="7"> 
                            Score :
                            <p style="margin-left:15px"> a. 16 - 25 : Baik </p>
                            <p style="margin-left:15px"> b. 10 - 15 : Cukup </p>
                            <p style="margin-left:15px"> c. 5 - 9 : Kurang (Perlu tindak lanjut, training ulang, breefing, dll) </p>
                        </th>
                    </tr>
                </tfooter>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        getDataDetailEvaluasi();
    });

    function getDataDetailEvaluasi(){
        $('#body-tbl-evaluasi').empty()
        $.ajax({
            type : "POST",
            url  : base_url+"tna/pengawalan/getDataDetailEvaluasi",
            data:{
                'pengawalan_id' : $('#id').val()
            },
            dataType: "JSON",
            success:function(resp){
                console.log(resp)
                if(resp.length > 0){
                    $('#jumlah_pertanyaan').val(resp.length)
                    var tmpGroup = '';
                    var number = 0;
                    resp.forEach((element, index) => {
                        var group = element.group;
                        if(tmpGroup != group){
                            number++;
                            var htmlGroup = `
                                <tr>
                                    <td rowspan="2" class="text-center" style="vertical-align: middle">${number}</td>
                                    <td><b>${group}</b></td>
                                    <td rowspan="2" class="text-center" style="vertical-align: middle"> ${element.nilai_skor == element.nilai_skor1 ? '<i class="fa fa-check"></i> ' : ''} </td>
                                    <td rowspan="2" class="text-center" style="vertical-align: middle"> ${element.nilai_skor == element.nilai_skor2 ? '<i class="fa fa-check"></i> ' : ''} </td>
                                    <td rowspan="2" class="text-center" style="vertical-align: middle"> ${element.nilai_skor == element.nilai_skor3 ? '<i class="fa fa-check"></i> ' : ''} </td>
                                    <td rowspan="2" class="text-center" style="vertical-align: middle"> ${element.nilai_skor == element.nilai_skor4 ? '<i class="fa fa-check"></i> ' : ''} </td>
                                    <td rowspan="2" class="text-center" style="vertical-align: middle"> ${element.nilai_skor == element.nilai_skor5 ? '<i class="fa fa-check"></i> ' : ''}  </td>
                                </tr>
                                <tr>
                                    <td>
                                        - ${element.pertanyaan}
                                        <input type="hidden" value="${element.pertanyaan}" name="pertanyaan[]">
                                    </td>
                                </tr>
                            `;
                            tmpGroup = group;
                            $('#body-tbl-evaluasi').append(htmlGroup);
                        } else {
                            var htmlSubGroup = `
                                <tr>
                                    <td></td>
                                    <td>
                                        - ${element.pertanyaan}
                                        <input type="hidden" value="${element.pertanyaan}" name="pertanyaan[]">
                                    </td>
                                    <td class="text-center" style="vertical-align: middle">${element.nilai_skor == element.nilai_skor1 ? '<i class="fa fa-check"></i> ' : ''}</td>
                                    <td class="text-center" style="vertical-align: middle">${element.nilai_skor == element.nilai_skor2 ? '<i class="fa fa-check"></i> ' : ''}</td>
                                    <td class="text-center" style="vertical-align: middle">${element.nilai_skor == element.nilai_skor3 ? '<i class="fa fa-check"></i> ' : ''}</td>
                                    <td class="text-center" style="vertical-align: middle">${element.nilai_skor == element.nilai_skor4 ? '<i class="fa fa-check"></i> ' : ''}</td>
                                    <td class="text-center" style="vertical-align: middle">${element.nilai_skor == element.nilai_skor5 ? '<i class="fa fa-check"></i> ' : ''}</td>
                                    
                                </tr>
                            `;
                            $('#body-tbl-evaluasi').append(htmlSubGroup);
                        }
                    });
                }
            },
        });
    }
</script>