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
                <button class="btn btn-success btn-xs" title="Edit" id="edit-evaluasi"> <i class="fa fa-edit"></i></button>
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
                            <h4> Skor yang didapat adalah = <span id="skor"></span></h4>
                        </th>
                    </tr>
                </tfooter>
            </table>
        </div>
        <div class="col-md-12" style="margin-top:-40px">
            <hr width="100%">
        </div>
        <div class="col-md-12">
            <label class="col-md-2"><h4><b> Hasil Evaluasi </b></h4></label>
            <div class="col-md-12">
                <textarea class="form-control" readonly="" rows="5" id="hasil_evaluasi"></textarea>
            </div>
        </div>
        
    </div>
</div>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_edit_evaluasi'); ?>
<script>
    $(document).ready(function(){
        $('#edit-evaluasi').click(function(){
            getDataEditEvaluasi()
            console.log($('#id').val())
            $('#evaluasi_edit_pengawalan_id').val($('#id').val())
            $('#modalEditEvaluasi').modal('show')
        });

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
                if(resp.length > 0){
                    // $('#jumlah_pertanyaan').val(resp.length)
                    var tmpGroup = '';
                    var number = 0;
                    var totalSkor = 0;
                    resp.forEach((element, index) => {
                        if(element.nilai_skor){
                            totalSkor = parseInt(totalSkor) +  parseInt(element.nilai_skor)
                        }
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
                    console.log(resp[0].komentar)
                    $('#hasil_evaluasi').val(resp[0].komentar)
                    getKeterangan(totalSkor)
                }
            },
        });
    }

    function getKeterangan(total){
        var keterangan = '';
        if(total < 10){
            keterangan = 'Kurang (Perlu tindak lanjut, training ulang, breefing, dll)'
        }else if(total < 16){
            keterangan = 'Cukup'
        }else{
            keterangan = 'Baik'
        }
        $('#skor').html('<b> ' + total + ' : '+keterangan+' ' + '</b>')
    }
</script>