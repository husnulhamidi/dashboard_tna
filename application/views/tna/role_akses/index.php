<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-md-12">
            <?php $this->load->view('layouts/alert'); ?>
            <?php // echo '<pre>'; print_r($this->session->userdata()); ?>

            <div class="nav-tabs-custom-aqua">
                <div class="box box-info">
                    
                    <div class="box-header with-border">
                        <div class="col-lg-6">
                            <h3 class="box-title" style="padding-top:5px"><?php echo $title;?></h3>
                        </div>
                        
                    </div>
                </div>

                <div class="tab-content">
                    <div class="tab-pane active">
                        <div class="row">
                            <div class="col-md-12">
                            <table class="table table-striped table-bordered table-hover" id="table-role-akses" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Group</th>
                                        <th class="text-center">Deskripsi Group</th>
                                        <th class="text-center">User Aktif</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if($groups){
                                            $no = 1;
                                            foreach($groups as $group){
                                                echo '
                                                    <tr>
                                                        <td class="text-center">'.$no.'</td>
                                                        <td>'.$group->group_name.'</td>
                                                        <td>'.$group->group_description.'</td>
                                                        <td class="text-center">'.number_format($group->total_users).'</td>
                                                        <td class="text-center">
                                                            <a href="'.$action_edit.'/'.$group->id.'/setting_menu" class="btn btn-success btn-xs">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                ';
                                                $no++;
                                            }
                                        }
                                    ?>
                                </tbody>
                            </table>

                            </div>
                        </div>
                       
                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
     $(document).ready(function () {
        $('#table-role-akses').dataTable()
    });

</script>