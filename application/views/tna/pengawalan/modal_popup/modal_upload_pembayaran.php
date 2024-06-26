<!-- Modal -->
<div class="modal fade" id="modalUploadPembayaran" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Upload Pembayaran </h4>
            </div>
            <div class="modal-body">
                <div>
                <form method="post" action="javascript:;" class="form-horizontal form-pembayaran" id="form-pembayaran" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="pembayaranId">
                    <input type="hidden" name="urutanId" id="pembayaranUrutanId">
                    <input type="hidden" name="tahapanId" id="pembayaranTahapanId">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12">
                                <h5> <b> Telah didaftarkan peserta training pada kegiatan : </b></h5>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama Peserta </label>
                                <div class="col-md-6"><span id="pembayaran_nama"></span></div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama Pelatihan  </label>
                                <div class="col-md-6"> <span id="pembayaran_pelatihan"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Nama Penyelenggara </label>
                                <div class="col-md-6"> <span id="pembayaran_penyelenggara"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4"> Biaya </label>
                                <div class="col-md-6"> <span id="pembayaran_biaya"></span> </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <hr>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Nilai Pembayaran <span style="color:red">*</span> </label>
                                <div class="col-md-8">
                                    <input type="text" name="nilai" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Tanggal Pembayaran <span style="color:red">*</span> </label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control pull-right" id="tgl" name="tgl"  >
                                        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Mata Anggaran <span style="color:red">*</span> </label>
                                <div class="col-md-8">
                                    <select class="form-control" name="mata_anggaran" id="mata_anggaran">
                                        <option value=""> Pilih Mata Anggaran</option>
                                        <option> HCM </option>
                                        <option> Non HCM </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Nomor Mata Anggaran  </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control pull-right" name="nomor_mata_anggaran"  >
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Nomor HT  </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control pull-right" name="no_ht"  id="edit_no_ht">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Nomor SPB  </label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control pull-right" name="no_spb"  id="edit_no_spb">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Unit <span style="color:red">*</span> </label>
                                <div class="col-md-8" id="divDropdown">
                                    <input type="hidden" name="unit_tmp" id="unit_tmp">
                                    <select class="form-control" class="select2" name="unit" id="unit">
                                        <option value=""> Pilih Unit</option>
                                        <?php 
                                            foreach ($subdit as $sb) {
                                                echo "<option value='".$sb->m_organisasi_id."'>".$sb->nama.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Bukti Pembayaran  </label>
                                <div class="col-md-8">
                                    <input type="file" name="uplaod_bukti_pembayaran" id="uplaod_bukti_pembayaran" class="form-control">
                                    <input type="hidden" name="file-bukti-pembayaran" value="uplaod_bukti_pembayaran">
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10px">
                            <div class="col-md-12">
                                <label class="col-md-4">Ada Biaya SPDP <span style="color:red">*</span> </label>
                                <div class="col-md-8">
                                    <div class="grid grid-cols-2">
                                        <input type="radio" name="biayasppdp" value="ya" id="biayasppdp" onclick="showFormSPDP('ya')"><span style="margin-right: 50px"> Ya </span>
                                        <input type="radio" name="biayasppdp" value="tidak" id="biayasppdp" onclick="showFormSPDP('tidak')"> Tidak
                                    </div>
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
                                    class="btn btn-info submit-pembayaran" id="submit-pembayaran">
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
<script type="text/javascript">
    $(document).ready(function(){
        $('#unit').select2()

        $('#mata_anggaran').change(function(){
            let mata_anggaran = $('#mata_anggaran').val();
            if(mata_anggaran == 'HCM'){
                get_id_organisasi(mata_anggaran);
            }else{
                $('#unit_tmp').val('')
                $('#unit').prop('disabled', false);
                $('#unit').val('').trigger('change');
               
            }
        })
    })

    function get_id_organisasi(name){
        $.ajax({
            type : "POST",
            url  : base_url+"tna/pengawalan/get_id_organisasi",
            data:{ name: name },
            dataType: "JSON",
            success:function(resp){
                console.log(resp.id)
                $('#unit_tmp').val(resp.id)
                $('#unit').append('<option value="' + resp.id + '"> ' + resp.name + ' </option>'); 
                $('#unit').val(resp.id).trigger('change');
                $('#unit').prop('disabled', true);
            },
        });
    }
</script>
