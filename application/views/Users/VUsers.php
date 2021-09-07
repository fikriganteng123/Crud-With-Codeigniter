<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
        <a  href="<?php echo site_url('UAS/VFormAddUsers'); ?>" role="button" class="btn btn-primary">Tambah Users</a>
        <a  href="<?php echo site_url('UAS/DeletedUsers'); ?>" role="button" class="btn btn-success"><i class="fa fa-trash"></i></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>kode users</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>insert Date</th>
                        <th>Update Date</th>
                      
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>kode users</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>insert Date</th>
                        <th>Update Date</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                <?php
                    if(!empty($Datausers))
                    {
                        foreach($Datausers as $ReadDS)
                        {
                    ?>
                    <tr>
                        <td><?php echo $ReadDS->kd_users; ?></td>
                        <td><?php echo $ReadDS->name; ?></td>
                        <td><?php echo $ReadDS->email; ?></td>
                        <td><?php echo $ReadDS->username; ?></td>
                        <td><?php echo $ReadDS->password; ?></td>
                        <td><?php echo $ReadDS->level; ?></td>
                        <td><?php echo $ReadDS->insert_date; ?></td>
                        <td><?php echo $ReadDS->update_date; ?></td>
                        



                        <td>
                            <a href="<?php echo site_url('UAS/DataUsers/'.$ReadDS->kd_users.'/view') ?>" role="button" class="btn btn-warning" class="btn btn-primary">Update</a>
                            <a href="<?php echo site_url('UAS/DeleteDataUsers/'.$ReadDS->kd_users) ?>" role="button" class="btn btn-danger" class="btn btn-warning">Delete</a>
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
