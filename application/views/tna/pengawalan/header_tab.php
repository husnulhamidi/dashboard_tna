<input type="hidden" id="active_tab" value="<?php echo $active_tab;?>">
<li class="<?php echo $active_tab=='all'? 'active':'';?>">
    <a href="<?php echo site_url('tna/pengawalan/list/all'); ?>">
        <i class="fa fa-list"></i> Semua Pengajuan
    </a>
</li>
<li class="<?php echo $active_tab=='verifikasi'? 'active':'';?> ">
    <a href="<?php echo site_url('tna/pengawalan/list/verifikasi'); ?>">
        <i class="fa fa-list"></i> Verifikasi
    </a>
</li>
<li class="<?php echo $active_tab=='selesai'? 'active':'';?> ">
    <a href="<?php echo site_url('tna/pengawalan/list/selesai'); ?>">
        <i class="fa fa-close"></i> Selesai
    </a>
</li>


