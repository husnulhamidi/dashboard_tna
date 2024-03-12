<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>

            <?php $this->load->view('tna/usulan/view_dashlet');?>
            
            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    
                    <div class="box-header with-border">
                    
                        <div class="col-lg-12">
                        <ul class="nav nav-tabs">
                            <?php $this->load->view('tna/usulan/header_tab');?>
                            <div class="pull-right">
                             
                            </div>
                        </ul>
                            
                        </div>
                    </div>
                   

                </div>

                <div class="tab-content"  >
                     
                    <div class="tab-pane active">

                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                <table  class="table table-striped table-bordered table-hover" id="table-dokumen-verifikasi-vphcm" cellspacing="0" width="100%">
                                    <thead>
                                        
                                        <tr>
                                            <th>No.</th>
                                            <th>Kode Download</th>
                                            <th>file</th>
                                        </tr>
                                    </thead>
                                    <tbody>       
                                    
                                    </tbody>
                                </table>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                   
                   
                </div>
                <!-- /.tab-content -->
            </div>
        </div>

    </div>
     <!-- Modal -->
     <div class="modal fade" id="riwayat-modal" tabindex="-1" role="dialog" aria-hidden="true" enctype="multipart/form-data">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            </div> <!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
    </div> <!-- /.modal -->
</section>

<script type="text/javascript">
    
    $(document).ready(function(){

        $('#table-dokumen-verifikasi-vphcm').DataTable({
        processing: true, 
        serverSide: true, 
        order: [], 
        ajax: {
            url     : base_url+"tna/usulan/dokumen-verifikasi",
            type    : "get",
            datatype: "json",
            data    : function(d){
                
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
            {
                "data": "download_code",
            },
            { 
                "data": "file" ,
                render: function (data, type, row, meta) {
                    return "<a href='"+base_url+data+"' target='_blank'><span class='btn btn-info btn-xs'>Download </span></a>" ;
                } 
            },
           
            
        ],
        columnDefs: [
            {
                targets: [0],
                orderable: false,
                className: 'text-center',

            }

        ],
    });
});
</script>