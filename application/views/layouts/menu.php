<?php
$sess = $this->session->userdata();
?>
<section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <div class="profile sidebar-form" style="border-style: none">
        <ul>
            <li>
                
                <img src="<?php echo base_url('assets/img/'); ?>user.jpg" class="img-circle" alt="User Image">
            </li>
            <?php
            if (!empty(!$sess['karyawan'])) {
                echo '<li><b>'.$sess['karyawan']['nama'].'</b></li>';
                echo '<li>TNA</li>';
            } else {
                echo '<li>Karyawan Testing</li>';
                echo "<li style='color:white'>TNA</li>";
            }
            ?>
           
        </ul>
    </div>

    <ul class="sidebar-menu">
        <li class="treeview <?php echo ($active_menu == 'dashboard' || $active_menu == 'dashboard-training') ? 'active' : ''; ?> ">
            <a href="#">
                <i class="fa fa-home"></i> <span>Dashboard</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                
                <li class="<?php echo ($active_menu == 'dashboard' || $active_menu == 'dashboard-training') ? 'active' : ''; ?>">
                    <a href="<?php echo site_url('tna/home'); ?>">
                        <i class="fa fa-circle-o"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li class="<?php echo $active_menu=='dashboard-training'? 'active':'';?>">
                    <a href="<?php echo site_url('tna/dashboard-training'); ?>">
                        <i class="fa fa-circle-o"></i> <span>Training</span>
                    </a>
                </li>
            </ul>
        </li> 
      
        <li class="<?php echo $active_menu=='training-mandiri'? 'active':'';?>">
            <a href="<?php echo site_url('tna/training-mandiri'); ?>">
                <i class="fa fa-file-text"></i> <span>Training Mandiri</span>
            </a>
        </li>
        <li class="<?php echo $active_menu=='training-mandiri-hcpd'? 'active':'';?>">
            <a href="<?php echo site_url('tna/training-mandiri-hcpd'); ?>">
                <i class="fa fa-file-text"></i> <span>Training Mandiri Admin</span>
            </a>
        </li>
        <li class="<?php echo $active_menu=='tna_justifikasi'? 'active':'';?> ">
            <a href="<?php echo site_url('tna/justifikasi'); ?>">
                <i class="fa fa-anchor"></i> <span>Justifikasi RJBP</span>
            </a>
        </li>
        <li class="<?php echo $active_menu=='tna_internal_sharing'? 'active':'';?> ">
            <a href="<?php echo site_url('tna/internalSharing'); ?>">
                <i class="fa fa-clone"></i> <span>Internal Sharing Admin</span>
            </a>
        </li>
       <li class="<?php echo $active_menu=='tna_internal_sharing_employee'? 'active':'';?> ">
            <a href="<?php echo site_url('tna/internalSharing-employee'); ?>">
                <i class="fa fa-clone"></i> <span>Internal Sharing Karyawan</span>
            </a>
        </li>

        <li class="treeview <?php echo ($active_menu == 'usulan_tna' || $active_menu == 'tna_tna' || $active_menu == 'tna_pengawalan') ? 'active' : ''; ?> ">
            <a href="#">
            <i class="fa fa-clone"></i>TNA</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo $active_menu=='usulan_tna'? 'active':'';?>">
                    <a href="<?php echo site_url('tna/usulan'); ?>">
                        <i class="fa fa-circle-o"></i> <span>Usulan TNA</span>
                    </a>
                </li> 
                <li class="<?php echo $active_menu=='tna_tna'? 'active':'';?> ">
                    <a href="<?php echo site_url('tna'); ?>">
                        <i class="fa fa-circle-o"></i> <span>TNA</span>
                    </a>
                </li>
                <li class="<?php echo $active_menu=='tna_pengawalan'? 'active':'';?> ">
                    <a href="<?php echo site_url('tna/pengawalan'); ?>">
                        <i class="fa fa-circle-o"></i> <span>Pengawalan TNA & Non TNA</span>
                    </a>
                </li>
            </ul>
        </li> 

        <li class="treeview <?php echo $active_menu=='reference'? 'active':'';?> ">
            <a href="#">
            <i class="fa fa-cubes"></i> <span>Katalog</span>
            <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="<?php echo site_url('tna/referensi/job-family'); ?>"><i class="fa fa-circle-o"></i>Job Family</a></li>
            <li ><a href="<?php echo site_url('tna/referensi/job-function'); ?>"><i class="fa fa-circle-o"></i>Job Function</a></li>
            <li ><a href="<?php echo site_url('tna/referensi/job-role'); ?>"><i class="fa fa-circle-o"></i>Job Role</a></li>
            <li ><a href="<?php echo site_url('tna/referensi/kompetensi'); ?>"><i class="fa fa-circle-o"></i>Kompetensi</a></li>
            <li ><a href="<?php echo site_url('tna/referensi/kompetensi-jabatan'); ?>"><i class="fa fa-circle-o"></i>Kompetensi Jabatan</a></li>
            <li ><a href="<?php echo site_url('tna/referensi/training'); ?>"><i class="fa fa-circle-o"></i>Training</a></li>
            <li ><a href="<?php echo site_url('tna/referensi/lembaga'); ?>"><i class="fa fa-circle-o"></i>Lembaga Training</a></li>
            </ul>
        </li> 

         <li class="<?php echo $active_menu=='tna_setting_ttd'? 'active':'';?> ">
            <a href="<?php echo site_url('tna/setting-ttd'); ?>">
                <i class="fa fa-gear"></i> <span>Setting TTD</span>
            </a>
        </li>
         <li class="<?php echo $active_menu=='tna_materi'? 'active':'';?> ">
            <a href="<?php echo site_url('tna/library_materi'); ?>">
                <i class="fa fa-cube"></i> <span>Library Materi</span>
            </a>
        </li>

         <!-- <li class="<?php echo $active_menu=='pelanggan'? 'active':'';?> ">
            <a href="<?php echo site_url('pelanggan/data_pelanggan'); ?>">
                <i class="fa fa-user"></i> <span>Pelanggan</span>
            </a>
        </li> 
        <li class="<?php echo $active_menu=='bank'? 'active':'';?> ">
            <a href="<?php echo site_url('bank/data_bank'); ?>">
                <i class="fa fa-bank"></i> <span>Bank</span>
            </a>
        </li> 
        <li class="<?php echo $active_menu=='project'? 'active':'';?> ">
            <a href="<?php echo site_url('project'); ?>">
                <i class="fa fa-cubes"></i> <span>Project</span>
            </a>
        </li>
        <li class="<?php echo $active_menu=='list_invoice'? 'active':'';?> ">
            <a href="<?php echo site_url('invoice/lists'); ?>">
                <i class="fa fa-file"></i> <span>Invoice</span>
            </a>
        </li> -->
       
       
      
    </ul>
</section>