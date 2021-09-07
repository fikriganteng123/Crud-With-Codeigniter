<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
        <a  href="<?php echo site_url('UAS/DataMenu'); ?>" role="button" class="btn btn-primary">Kembali</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode Menu</th>
                        <th>Nama</th>
                        <th>Site url</th>
                        <th>Delete Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                       <th>Kode Menu</th>
                        <th>Nama</th>
                        <th>Site url</th>
                        <th>Delete Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    if(!empty($Datamenu))
                    {
                        foreach($Datamenu as $ReadDS)
                        {
                    ?>
                    <tr>
                        <td><?php echo $ReadDS->kd_menu; ?></td>
                        <td><?php echo $ReadDS->name; ?></td>
                        <td><?php echo $ReadDS->site_url; ?></td>
                        <td><?php echo $ReadDS->delete_date; ?></td>



                        <td>
                            <a href="<?php echo site_url('UAS/RestoreDataMenu/'.$ReadDS->kd_menu) ?>" role="button" class="btn btn-danger" class="btn btn-warning">Restore</a>
                        </td>
                    </tr>
                    <?php       
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
