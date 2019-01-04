

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
              <!-- Chat box -->
              <div class="box box-success">
                <div class="box-header">
                  <i class="fa fa-laptop"></i>
                  <h3 class="box-title">DATA PENGGUNA</h3>
                </div>
                <div class="form-group">
                  <table class="table table-condensed" border='0'>
                      <tr>
                          <td rowspan="7" width='250'><center><img style="width:210px;height:210px" src="<?php echo base_url()?>assets/images/user/<?php echo $user['foto'];?>"  alt="User Image"></center></td>
                          <td width='250'>ID USER</td>
                          <td>:</td>
                          <td><?php echo $user['id_user'];?></td>
                      </tr>
                      <tr>
                          <td>NAMA LENGKAP</td>
                          <td>:</td>
                          <td><?php echo $user['nama'];?></td>
                      </tr>
                      <tr>
                          <td>USERNAME</td>
                          <td>:</td>
                          <td><?php echo $user['username'];?></td>
                      </tr>
                      <tr>
                          <td>JENIS KELAMIN</td>
                          <td>:</td>
                          <td><?php if ($user['jenis_kelamin'] =='l') {
                                        echo 'Laki - Laki';
                                    } else 
                                    {
                                        echo 'perempuan';
                                    } 
                          /*echo $record['jenis_kelamin'];*/?></td>
                      </tr>
                      <tr>
                          <td>NO TELP</td>
                          <td>:</td>
                          <td><?php echo $user['no_telp'];?></td>
                      </tr>
                      <tr>
                          <td>STATUS</td>
                          <td>:</td>
                          <td><?php if ($user['status'] =='l') {
                                        echo 'Aktive';
                                    } else 
                                    {
                                        echo 'Aktive';
                                    } 
                          /*echo $record['jenis_kelamin'];*/?></td>
                      </tr>
                      <tr>
                          <td>ALAMAT</td>
                          <td>:</td>
                          <td><?php echo $user['alamat'];?></td>
                      </tr>
                      
                  </table>

                    <?php //<td><a href='<?= base_url("dashboard_user/edit/$record[id_user]") ' class="btn btn-primary btn-block btn-flat"><i class="fa fa-pencil-square-o"></i>Edit</a></td>
                ?>
                <td><a href='<?= base_url("dashboard_user/edit/$user[id_user]") ?>' class="btn btn-primary btn-block btn-flat"><i class="fa fa-pencil-square-o"></i>Edit</a></td>
                </div><!-- /.chat -->
              </div><!-- /.box (chat box) -->
            </section><!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

            </section><!-- right col -->
          </div><!-- /.row (main row) -->
