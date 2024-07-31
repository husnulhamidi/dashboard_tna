<style>
    .checkbox-list-container {
        max-height: 500px; /* Sesuaikan dengan kebutuhan Anda */
        overflow-y: auto; /* Menambahkan scrollbar vertikal */
        padding: 10px;
        border: 1px solid #ddd; /* Border untuk visualisasi */
        /* background-color: #f9f9f9;  */
        width: 99%;
        margin-left:5px;
    }
    .search-box {
        width: 99%;
        margin-left:5px;
        margin-bottom: 10px;
    }
    ul {
        list-style-type: none;
        padding-left: 0;
    }
    li {
        margin-left: 30px; 
        padding-left: 2px; 
    }
</style>
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
                               <label class="col-md-2"> Nama Group </label>
                               <div class="col-md-10">: <?php echo $detail_group->name ;?></div>
                            </div>
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                               <label class="col-md-2"> Deskripsi Group </label>
                               <div class="col-md-10">: <?php echo $detail_group->description ;?></div>
                            </div>
                        </div>

                        <div class="row" style="padding-top: 10px">
                            <hr>
                        </div>
                        <div class="row" style="padding-top:10px">
                            <div class="col-md-12">
                                <ul class="nav nav-tabs">
                                    <li class="<?php echo $active_tab=='setting_menu'? 'active':'';?>">
                                        <a href="<?php echo site_url('tna/role_akses/'.$detail_group->id.'/setting_menu'); ?>">
                                            <i class="fa fa-list"></i>&nbsp;&nbsp; Setting Menu
                                        </a>
                                    </li>
                                    <li class="<?php echo $active_tab=='setting_user'? 'active':'';?>">
                                        <a href="<?php echo site_url('tna/role_akses/'.$detail_group->id.'/setting_user'); ?>">
                                            <i class="fa fa-list"></i>&nbsp;&nbsp; Setting User
                                        </a>
                                    </li>
                                </ul>  
                            </div>
                            <div class="col-md-12" style="padding-bottom: 10px"></div>
                            <?php
                                if($active_tab == 'setting_user'){
                                    $this->load->view('tna/role_akses/tab_select_user');
                                }
                                if($active_tab == 'setting_menu'){
                                    $this->load->view('tna/role_akses/tab_select_menu');
                                }
                                
                            ?> 
                        </div>
                        
                    </div>
                </div>
                <!-- /.tab-content -->
            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle "Select All" checkbox
        const selectAllCheckbox = document.getElementById('selectAll');
        const checkboxes = document.querySelectorAll('input[id="selectSingle"]');

        selectAllCheckbox.addEventListener('change', function() {
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });

        // Handle individual checkboxes to update "Select All"
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                if (!this.checked) {
                    selectAllCheckbox.checked = false;
                } else {
                    const allChecked = Array.from(checkboxes).every(cb => cb.checked);
                    selectAllCheckbox.checked = allChecked;
                }
            });
        });
    });

    $(document).ready(function(){
        $('#btn-save-menu').click(function(){
            submit('menu');
        })

        $('#btn-save-user').click(function(){
            submit('user');
        })
    })

    function submit(category){
        let data = $('#form-select-user').serialize();;
        if(category == 'menu'){
            data = $('#form-select-menu').serialize();
        }
        $.ajax({
            url: base_url+"tna/role_akses/simpan/data/"+category,
            type: 'POST',
            data: data,
            success: function(response) {
                // console.log('response', response)
                var newResponse = JSON.parse(response);
                if(newResponse.success){
                    setTimeout(function() {
                        swal({
                            title: "Notifikasi!",
                            text: "Data berhasil disimpan",
                            imageUrl: img_icon_success
                        }, function(d) {
                            location.reload();
                            // location.href = base_url+'/tna'
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
</script>
