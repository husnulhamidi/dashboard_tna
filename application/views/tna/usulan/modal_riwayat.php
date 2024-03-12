<!-- Modal -->

            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="false">&times;</button>
                <h4 class="modal-title" id="myModalLabel"> <?php echo $title;?></h4>
            </div>
            <div class="modal-body">
                    
                <table  class="table table-striped datatable2" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th width="10px">No</th>
                            <th width="100px">Tanggal</th>
                            <th>Tahapan</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Karyawan</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $no=0;
                        foreach ($riwayat as $key) {
                            if($key->status_verifikasi==1){
                                $status ="Setuju";
                            }else{
                                $status ="Ditolak";
                            }
                        ?>
                            <tr>
                                <td><?php echo ++$no;?></td>
                                <td><?php echo TanggalIndoShort($key->tanggal);?></td>
                                <td><?php echo $key->aksi;?></td>
                                <td><?php echo $status;?></td>
                                <td><?php echo $key->keterangan;?></td>
                                <td><?php echo $key->nama_karyawan ;?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                   
                 
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-flat btn-default" data-dismiss="modal">Close</button>
            </div>


<script type="text/javascript">
  
</script>
