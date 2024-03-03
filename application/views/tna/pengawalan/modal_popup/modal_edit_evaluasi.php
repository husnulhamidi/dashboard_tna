<!-- Modal -->
<style>
    .scrollable-table-container {
        width: 100%;
        overflow-x: auto;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
</style>
<div class="modal fade" id="modalEditEvaluasi" role="dialog" aria-hidden="true" enctype="multipart/form-data" tabindex="-1">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Form Edit Evaluasi Hasil Pelatihan  </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-edit-evaluasi" id="form-edit-evaluasi">
                    <input type="hidden" name="id" id="evaluasi_edit_id">
                    <input type="hidden" name="pengawalan_id" id="evaluasi_edit_pengawalan_id">
                    <input type="hidden" name="jumlah_pertanyaan" id="jumlah_pertanyaan">
                    <div class="box-body">
                        <div class="row" >
                            <div class="col-md-12">
                                <table class="table table-bordered" id="tbl-edit-evaluasi">
                                    <thead>
                                        <tr>
                                            <th class="text-center text-nowrap"> No </th>
                                            <th class="text-center text-nowrap"> Uraian </th>
                                            <th class="text-center text-nowrap"> Baik Sekali</th>
                                            <th class="text-center text-nowrap"> Baik</th>
                                            <th class="text-center text-nowrap"> Cukup</th>
                                            <th class="text-center text-nowrap"> Kurang</th>
                                            <th class="text-center text-nowrap"> Kurang Sekali</th>
                                        </tr>
                                    </thead>
                                    <tbody id="body-tbl-edit-evaluasi"></tbody>
                                    <tfooter>
                                        <tr>
                                            <td colspan="7">
                                                <h4> Skor yang didapat adalah = <span id="hasil_skor"></span></h4>
                                            </td>
                                        </tr>
                                    </tfooter>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <hr width="100%">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-md-4"> Hasil Evaluasi  </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <textarea class="form-control" rows="5" placeholder="Komentar tambahan dari pemimpin" name="komentar" id="komentar"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-footer">
                        
                        <div class="">
                            <div class="pull-right"> 
                                <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                <button 
                                    type="submit" 
                                    class="btn btn-info submit-edit-evaluasi" id="submit-edit-evaluasi">
                                    Submit
                                </button>
                                
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->
<script>

$(document).ready(function(){
    $('#submit-edit-evaluasi').click(function(){
        submitEditEvaluasi();
    })
})

function getDataEditEvaluasi(){
    console.log('test',$('#evaluasi_edit_pengawalan_id').val())
    console.log('asd',$('#id').val())
    $('#body-tbl-edit-evaluasi').empty()
    $.ajax({
        type : "POST",
        url  : base_url+"tna/pengawalan/getDataDetailEvaluasi",
        data:{
            'pengawalan_id' : $('#id').val()
        },
        dataType: "JSON",
        success:function(resp){
            if(resp.length > 0){
                $('#jumlah_pertanyaan').val(resp.length)
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
                                <td rowspan="2" class="text-center" style="vertical-align: middle"><input type="radio" ${element.nilai_skor == element.nilai_skor1 ? 'checked' : ''} name="radio_${element.id}" value="${element.nilai_skor1}"></td>
                                <td rowspan="2" class="text-center" style="vertical-align: middle"><input type="radio" ${element.nilai_skor == element.nilai_skor2 ? 'checked' : ''} name="radio_${element.id}" value="${element.nilai_skor2}"></td>
                                <td rowspan="2" class="text-center" style="vertical-align: middle"><input type="radio" ${element.nilai_skor == element.nilai_skor3 ? 'checked' : ''} name="radio_${element.id}" value="${element.nilai_skor3}"></td>
                                <td rowspan="2" class="text-center" style="vertical-align: middle"><input type="radio" ${element.nilai_skor == element.nilai_skor4 ? 'checked' : ''} name="radio_${element.id}" value="${element.nilai_skor4}"></td>
                                <td rowspan="2" class="text-center" style="vertical-align: middle"><input type="radio" ${element.nilai_skor == element.nilai_skor5 ? 'checked' : ''} name="radio_${element.id}" value="${element.nilai_skor5}"></td>
                            </tr>
                            <tr>
                                <td>
                                    - ${element.pertanyaan}
                                    <input type="hidden" value="${element.pertanyaan}" name="pertanyaan[]">
                                </td>
                            </tr>
                        `;
                        tmpGroup = group;
                        $('#body-tbl-edit-evaluasi').append(htmlGroup);
                    } else {
                        var htmlSubGroup = `
                            <tr>
                                <td></td>
                                <td>
                                    - ${element.pertanyaan}
                                    <input type="hidden" value="${element.pertanyaan}" name="pertanyaan[]">
                                </td>
                                <td class="text-center" style="vertical-align: middle"><input type="radio" ${element.nilai_skor == element.nilai_skor1 ? 'checked' : ''} name="radio_${element.id}" value="${element.nilai_skor1}"></td>
                                <td class="text-center" style="vertical-align: middle"><input type="radio" ${element.nilai_skor == element.nilai_skor2 ? 'checked' : ''} name="radio_${element.id}" value="${element.nilai_skor2}"></td>
                                <td class="text-center" style="vertical-align: middle"><input type="radio" ${element.nilai_skor == element.nilai_skor3 ? 'checked' : ''} name="radio_${element.id}" value="${element.nilai_skor3}"></td>
                                <td class="text-center" style="vertical-align: middle"><input type="radio" ${element.nilai_skor == element.nilai_skor4 ? 'checked' : ''} name="radio_${element.id}" value="${element.nilai_skor4}"></td>
                                <td class="text-center" style="vertical-align: middle"><input type="radio" ${element.nilai_skor == element.nilai_skor5 ? 'checked' : ''} name="radio_${element.id}" value="${element.nilai_skor5}"></td>
                                
                            </tr>
                        `;
                        $('#body-tbl-edit-evaluasi').append(htmlSubGroup);
                    }
                });
                $('#komentar').val(resp[0].komentar)
                getTotalSkor(totalSkor)
            }
        },
    });
}

function getTotalSkor(skor){
    var keterangan = '';
    if(skor < 10){
        keterangan = 'Kurang (Perlu tindak lanjut, training ulang, breefing, dll)'
    }else if(skor < 16){
        keterangan = 'Cukup'
    }else{
        keterangan = 'Baik'
    }
    $('#hasil_skor').html('<b> ' + skor + ' : '+keterangan+' ' + '</b>')
}

function submitEditEvaluasi(){
    $.ajax({
        url: base_url+"tna/pengawalan/edit_evaluasi",
        type: 'POST',
        dataType: "JSON",
        data: $('#form-edit-evaluasi').serialize(),
        success: function(response) {
            console.log(response);
            if(response.success){
                setTimeout(function() {
                    swal({
                        title: "Notifikasi!",
                        text: "Data berhasil diubah",
                        imageUrl: img_icon_success
                    }, function(d) {
                        location.reload();
                    });
                }, 1000);
            }else{
                setTimeout(function() {
                    swal({
                        title: "Notifikasi!",
                        text: "Data gagal diubah",
                        imageUrl: img_icon_error
                    }, function() {
                        location.reload();
                    });
                }, 1000);
            }
            
        }            
    });
}
</script>
