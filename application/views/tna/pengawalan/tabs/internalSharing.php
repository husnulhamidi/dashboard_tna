 <div class="tab-content">
    <div class="tab-pane active">
        <div class="col-md-12" style="padding-top: 10px">
            <div class="row">
                <div class="col-md-6" style="margin-left: -30px">
                    <div class="col-md-6">
                        <label class="col-md-10" style="margin-bottom: 10px"><h3> Internal Sharing </h3></label>
                    </div>
                    <div class="col-md-6" style="vertical-align: super;" id="edit-is">
                        <br>
                        <button class="btn btn-xs btn-primary btn-edit" title="Edit">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button class="btn btn-xs btn-success btn-complete" title="Selesai">
                            <i class="fa fa-check"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <hr style="margin-top: -10px">
                </div>
            </div>
            <div class="box-body" style="margin-top: -30px">
                <div class="row" style="padding-top:20px">
                    <div class="col-md-12">
                        <label class="col-md-3"> Materi </label>
                        <div class="col-md-9"><b>: <span id="is_materi"></span> </b> </div>
                    </div>

                </div>
                <div class="row" style="padding-top:10px">
                    <div class="col-md-12">
                        <label class="col-md-3"> Pemateri </label>
                        <div class="col-md-9"><b>: <span id="is_nik"></span> | <span id="is_nama"></span> </b> </div>
                    </div>

                </div>
                <div class="row" style="padding-top:10px">
                    <div class="col-md-12">
                        <label class="col-md-3"> Tanggal </label>
                        <div class="col-md-2"><b>: <span id="is_tgl"></span> </b> </div>
                    </div>
                </div>
                <div class="row" style="padding-top:10px">
                    <div class="col-md-12">
                        <label class="col-md-3"> Waktu </label>
                        <div class="col-md-2"><b>: <span id="is_waktu"></span> </b> </div>
                    </div>
                </div>
                <div class="row" style="padding-top:10px">
                    <div class="col-md-12">
                        <label class="col-md-3"> Tempat </label>
                        <div class="col-md-9"><b>: <span id="is_tempat"></span> </b> </div>
                    </div>

                </div>
                <div class="row" style="padding-top:10px">
                    <div class="col-md-12">
                        <label class="col-md-3"> Biaya </label>
                        <div class="col-md-9"><b>: <span id="is_biaya"></span> </b> </div>
                    </div>

                </div>
                <div class="row" style="padding-top: 10px">
                    <hr>
                </div>
                <div class="row" style="padding-top: 10px">
                    <div class="row">
                        <label class="col-md-10" style="margin-bottom: 10px"><h3> Data Peserta </h3></label>
                        <div class="pull-right" style="padding-right: 50px" id="add-peserta">
                            <button class="btn-primary btn-sm" style="padding:5px 15px"> Tambah </button>
                        </div>
                    </div>
                    
                    <table class="table" id="tbl-peserta">
                        <thead>
                            <tr>
                                <th class="text-center"> No </th>
                                <th class="text-center"> NIk </th>
                                <th class="text-center"> Nama Peserta </th>
                                <th class="text-center"> Subunit/unit </th>
                                <th class="text-center"> Status Karyawan </th>
                                <th class="text-center"> Aksi </th>

                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="id_internal_sharing">
<?php $this->load->view('tna/pengawalan/modal_popup/modal_add_peserta'); ?>
<?php $this->load->view('tna/pengawalan/modal_popup/modal_edit_internal_sharing'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        var id = $('#id').val();
        var dataDetail;
        $.ajax({
            type: "GET",
            dataType: "JSON",
            url: base_url + "tna/pengawalan/get_detail_intenal_sharing",
            data: "id="+id,
            success: function(resp) {
                // console.log('resp',resp)
                if(resp){
                    $('#is_materi').text(resp.judul_materi)
                    $('#is_nik').text(resp.nik_tg)
                    $('#is_nama').text(resp.nama)
                    $('#is_tgl').text( formatDate(resp.tanggal))
                    $('#is_waktu').text(resp.jam)
                    $('#is_tempat').text(resp.tempat)
                    $('#is_biaya').text(formatRupiah(resp.biaya,'Rp. '))
                    $('#id_internal_sharing').val(resp.id_internal_sharing)
                }else{
                    $('#edit-is').css('display','none')
                    $('#add-peserta').css('display','none')
                }
            },
            complete: function (data) {
              if(data.responseJSON){
                dataDetail = data.responseJSON
                get_detail_data_peserta(data.responseJSON.id_internal_sharing)
              }
              
            }
        });

        $('#add-peserta').click(function(){
            let is = $('#id_internal_sharing').val()
            $('#isId').val(is)
            $('#modalTambahPeserta').modal('show')
        })

        $('.btn-edit').click(function(){
            console.log('dataDetail', dataDetail)
            $('#tgl').val(formatDate2(dataDetail.tanggal))
            $('#waktu').val(dataDetail.jam)
            $('#tempat').val(dataDetail.tempat)
            $('#biaya').val(dataDetail.biaya)
            $('#kuota').val(dataDetail.kuota)
            $('#linkZoom').val(dataDetail.link_zoom)
            $('#internal_sharing_id').val(dataDetail.id_internal_sharing)
            $('#modalEditInternalSharing').modal('show')
        })

        $('.btn-complete').click(function(){
            let pengawalanId = $('#id').val()
            let internalSharingId = dataDetail.id_internal_sharing
            var data = {
                pengawalanId : pengawalanId,
                internalSharingId : internalSharingId
            }
            swal({
                title: "Apakah anda yakin akan menyelesaikan internal sharing ini?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Ya!",
                closeOnConfirm: false
            }, function () {
                console.log("masuk")
                $.ajax({
                    type : "POST",
                    url  : base_url+"tna/pengawalan/complete_internal_sharing",
                    dataType: "JSON",
                    data : data,
                    success:function(resp){
                        console.log(resp)
                        if(resp.success){
                            setTimeout(function() {
                                swal({
                                    title: "Notifikasi!",
                                    text: "Data berhasil diubah",
                                    imageUrl: img_icon_success
                                }, function() {
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
            });
            
        })
    })
    
    function get_detail_data_peserta(id){
        oTable = $('#tbl-peserta').DataTable({
            processing: true, 
            serverSide: true, 
            scrollX: true,
            order: [], 
            ajax: {
                url     : base_url+"tna/pengawalan/get_detail_peserta_intenal_sharing",
                type    : "get",
                datatype: "json",
                data    : function(d){
                    d.id = id
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
                {"data": "nik_tg"},
                {"data": "nama"},
                {"data": "subunit"},
                {"data": "status_fte"},  
                { 
                    "data": "id",
                    render:function(data, type, row, meta){
                        let html = `
                                    <button onclick="deleteData(`+row.idPeserta+`,'peserta')" class="btn-danger btn-xs">
                                        <i class="fa fa-trash"></i>
                                    </button>`
                        return html
                    }
                },
            ],
        });
    }

    function deleteData(id,ket){
        swal({
            title: "Yakin Hapus Data ini ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Ya, Hapus!",
            closeOnConfirm: false
        }, function () {
            console.log("masuk")
            $.ajax({
                type : "POST",
                url  : base_url+"tna/internalSharing/deleteData/"+ket,
                dataType: "JSON",
                data : "id="+id,
                success:function(resp){
                    console.log(resp)
                    if(resp.success){
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data berhasil dihapus",
                                imageUrl: img_icon_success
                            }, function() {
                                location.reload();
                            });
                        }, 1000);
                    }else{
                        setTimeout(function() {
                            swal({
                                title: "Notifikasi!",
                                text: "Data gagal dihapus",
                                imageUrl: img_icon_error
                            }, function() {
                                location.reload();
                            });
                        }, 1000);
                    }
                }
            });
        });
    }
</script>