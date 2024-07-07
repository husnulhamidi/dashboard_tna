jQuery(document).ready(function() {
    $('#submit-feedback').click(function(){
        submitFeedback()
    })

    const id = $('#id').val()
    getDataFeedbackMateri();
    getDataFeedbackNarasumber();
})


function getDataFeedbackMateri(){
    $('#body-table-materi').empty()
    var totalNilaiMateri = 0;
    $.ajax({
        type : "POST",
        url  : base_url+"tna/internalSharing-employee/getDataFeedback",
        data:{group:'Materi'},
        dataType: "JSON",
        success:function(resp){
            if(resp.length > 0){
                resp.forEach((element, index) => {
                    let number_materi = index + 1;
                    var htmlGroup = createFeedbackRow(element, 'materi', number_materi);
                    $('#body-table-materi').append(htmlGroup);
                })
            }
            $('input[type=radio], input[type=checkbox]').on('change', function () {
                totalNilaiMateri = calculateTotalValue('materi');
                $('#total_materi').val(totalNilaiMateri);
            });
        },
    });
}

function getDataFeedbackNarasumber(){
    $('#body-table-narasumber').empty()
    var totalNilaiNarasumber = 0
    $.ajax({
        type : "POST",
        url  : base_url+"tna/internalSharing-employee/getDataFeedback",
        data:{group:'Narasumber'},
        dataType: "JSON",
        success:function(resp){
            // console.log(resp)
            if(resp.length > 0){
                resp.forEach((element, index) => {
                    let number_narasumber = index+1
                    var htmlGroup = createFeedbackRow(element, 'narasumber', number_narasumber);
                    $('#body-table-narasumber').append(htmlGroup);
                })
            }
            $('input[type=radio], input[type=checkbox]').on('change', function () {
                totalNilaiNarasumber = calculateTotalValue('narasumber');
                $('#total_narasumber').val(totalNilaiNarasumber);
            })
        },
    });
}

function calculateTotalValue(group) {
    var totalValue = 0;
    $(`input[name^="radio_${group}"]:checked, input[name^="checkbox_${group}"]:checked`).each(function () {
        var value = parseInt($(this).val());
        if (!isNaN(value)) {
            totalValue += value;
        }
    });
    return totalValue;
}

function createFeedbackRow(element, group, number) {
    return `
        <tr>
            <td>
                ${element.pertanyaan}
                <input type="hidden" value="${element.pertanyaan}" name="pertanyaan_${group}[]">
            </td>
            <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${group}_${number}" value="${element.nilai_skor1}" ${element.nilai_skor1 === element.nilai_skor ? 'checked' : ''}></td>
            <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${group}_${number}" value="${element.nilai_skor2}" ${element.nilai_skor2 === element.nilai_skor ? 'checked' : ''}></td>
            <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${group}_${number}" value="${element.nilai_skor3}" ${element.nilai_skor3 === element.nilai_skor ? 'checked' : ''}></td>
            <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${group}_${number}" value="${element.nilai_skor4}" ${element.nilai_skor4 === element.nilai_skor ? 'checked' : ''}></td>
            <td class="text-center" style="vertical-align: middle"><input type="radio" name="radio_${group}_${number}" value="${element.nilai_skor5}" ${element.nilai_skor5 === element.nilai_skor ? 'checked' : ''}></td>
        </tr>
    `;
}

function submitFeedback(){
    $.ajax({
        url: base_url+"internalsharing/feedback/simpan/data",
        type: 'POST',
        dataType: "JSON",
        data: $('#form-feedback').serialize(),
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