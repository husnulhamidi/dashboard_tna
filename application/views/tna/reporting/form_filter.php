<!-- Modal -->
<div class="modal fade" id="ModalFilter" role="dialog" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" >
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> Form Filter</h4>
            </div>
            <div class="modal-body">
                <div>
                    <form method="post" action="javascript:;" class="form-horizontal" enctype="multipart/form-data" id="form-filter">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Nama / NIK Karyawan</label>
                                        <div class="col-sm-8">
                                            <!-- <select class="select2 form-control divFilterInput" name="filter_karyawan" id="filter_karyawan">
                                                <option value="all">Semua</option>

                                            </select> -->
                                            <input type="text" name="filter_karyawan" id="filter_karyawan" class="form-control" placeholder="Masukan Nama/NIK Karyawan">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"> Quartal </label>
                                        <div class="col-sm-8">
                                            <select class="select2 form-control" name="filter_kuartal" id="filter_kuartal">
                                                <option value="all">Semua</option>
                                                <option value="1"> Quartal 1 </option>
                                                <option value="2"> Quartal 3 </option>
                                                <option value="3"> Quartal 2 </option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="col-sm-4 control-label"> Bulan </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="filter_bulan" id="filter_bulan" class="form-control" value="<?php echo date('m') ?>">
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"> Tahun </label>
                                        <div class="col-sm-8">
                                            <input type="text" name="filter_tahun" id="filter_tahun" class="form-control" value="<?php echo date('Y') ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"> Kategori Pelatihan</label>
                                        <div class="col-sm-8">
                                            <!-- <select class="select2 form-control" name="filter_kategori_pelatihan" id="filter_kategori_pelatihan">
                                                <option value="all">Semua</option>
                                                
                                            </select> -->
                                            <input type="text" name="filter_kategori_pelatihan" id="filter_kategori_pelatihan" class="form-control" placeholder="Masukan Kategori Pelatihan">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-4 control-label"> Jenis Sertifikat </label>
                                        <div class="col-sm-8">
                                            <!-- <select class="select2 form-control" name="filter_jenis_sertifikat" id="filter_jenis_sertifikat">
                                                <option value="all">Semua</option>
                                                
                                            </select> -->
                                            <input type="text" name="filter_jenis_sertifikat" id="filter_jenis_sertifikat" class="form-control" placeholder="Masukan Jenis Sertifikat">
                                        </div>
                                    </div>
                                    
                                </div> <!-- end col-12 -->

                            </div><!-- end row -->

                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">

                            <div class="">
                                <div class="pull-right"> 
                                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="false">Close</button>
                                    <button type="submit" class="btn btn-info btn-filter">Cari</button>

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
        $(".divFilterInput").select2({
            dropdownParent: $("#ModalFilter")
        });

        $('.select2').select2({
            placeholder: "Please Select"
        });

        $('.tgl').datepicker({
            fomat:'yyyy-mm-dd'
        })

        // $('#filter_karyawan').select2({
        //     minimumInputLength: 2,
        //     ajax: {
        //         url: base_url+'tna/get_karyawan',
        //         dataType: 'json',
        //         delay: 250, 
        //         data:function(params){
        //             return{
        //                 searchTerm:params.term
        //             }
        //         },
        //         processResults:function(response){
        //             return {
        //                 results:response
        //             }
        //         },
        //         cache:true
                
        //         // processResults: function(data) {
        //         //     console.log(data)
        //         //     // return {
        //         //     //     results: data // Data harus dalam format yang diharapkan oleh Select2
        //         //     // };
        //         // },
        //         // cache: true
        //     }
        // })
    })
   
</script>

<style type="text/css">
    .select2 {
        width:100%!important;
    }
</style>