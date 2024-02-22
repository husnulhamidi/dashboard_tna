<input type="hidden" id="active_tab" value="<?php echo $active_tab;?>">
<li class="<?php echo $active_tab=='riwayat_verifikasi'? 'active':'';?>">
    <a href="<?php echo site_url('tna/pengawalan/detail/'.$detail->id.'/riwayat_verifikasi'); ?>">
        <i class="fa fa-list"></i>&nbsp;&nbsp; Riwayat Verifikasi
    </a>
</li>
<li class="<?php echo $active_tab=='dokumen'? 'active':'';?>">
    <a href="<?php echo site_url('tna/pengawalan/detail/'.$detail->id.'/dokumen'); ?>">
        <i class="fa fa-list"></i>&nbsp;&nbsp;Dokumen
    </a>
</li>
<li class="<?php echo $active_tab=='pembayaran'? 'active':'';?>">
    <a href="<?php echo site_url('tna/pengawalan/detail/'.$detail->id.'/pembayaran'); ?>">
        <i class="fa fa-list"></i>&nbsp;&nbsp; Pembayaran
    </a>
</li>
<li class="<?php echo $active_tab=='materi'? 'active':'';?>">
    <a href="<?php echo site_url('tna/pengawalan/detail/'.$detail->id.'/materi'); ?>">
        <i class="fa fa-list"></i>&nbsp;&nbsp; Materi
    </a>
</li>
<li class="<?php echo $active_tab=='internalSharing'? 'active':'';?>">
    <a href="<?php echo site_url('tna/pengawalan/detail/'.$detail->id.'/internalSharing'); ?>">
        <i class="fa fa-list"></i>&nbsp;&nbsp; Internal Sharing
    </a>
</li>
<li class="<?php echo $active_tab=='evaluasi'? 'active':'';?>">
    <a href="<?php echo site_url('tna/pengawalan/detail/'.$detail->id.'/evaluasi'); ?>">
        <i class="fa fa-list"></i>&nbsp;&nbsp; Evaluasi
    </a>
</li>



