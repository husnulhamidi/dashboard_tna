<script>var temp = [];</script>
<!-- Main content -->
<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>

            <div class="nav-tabs-custom-aqua">
                <?php echo$this->load->view('header_menu');?>
                
                <div class="tab-content"  style="overflow-y:auto">
                    <!-- /.tab-pane -->
                    
                    <div class="tab-pane active">
                        <table  class="table table-striped" id="myTable" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th width="10">No</th>
                                    <th width="30">ID DOC</th>
                                    <th width="60">Periode</th>
                                    <th width="60">Bulan Inv</th>
                                    <th width="60">Tahun Inv</th>
                                    <th width="170">Project</th>
                                    <th width="100">No WO/PO</th>
                                    <th width="100">Nilai</th>
                                    <th width="70">Kendala Global</th>
                                    <th width="100">Kendala</th>
                                    <th width="70">Detail Kendala</th>
                                    <th width="50">Riwayat</th>
                                    <th width="85">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
        </div>
    </div>
</section>
>

<script type="text/javascript">
var arr = [];

$(document).ready(function () {

    $('body').on('hidden.bs.modal', '.modal', function () {
      $(this).removeData('bs.modal');
    });

    $('.select2').select2();

    $.fn.dataTable.ext.errMode = 'none';
    
    table = $('#myTable').DataTable({ 

        "processing": true, 
        "serverSide": true, 
        "order": [], 

        "ajax": {
            "url": '<?php echo$URL;?>',
            "type": "POST",
            
        },

        "columnDefs": [
            { 
                "targets": [ 0 ], 
                "orderable": false, 
            },
        ],

    });

    function reload_table()
    {
        table.ajax.reload(null,false); //reload datatable ajax 
    }


});
</script>