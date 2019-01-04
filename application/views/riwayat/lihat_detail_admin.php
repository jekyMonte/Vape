        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-safari"></i>
                  <h3 class="box-title">DETAIL RIWAYAT</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                  <div class="box-body">
                      <table>
                      <tr><div class="form-group">
                      <label for="exampleInputPassword1">Username :</label>
                    </div></tr>
                    <tr><div class="form-group">
                          <?php echo $record['username'];?>
                    </div></tr>
                    <tr><div class="form-group">
                      <label for="exampleInputPassword1">Tanggal :</label>
                    </div></tr>
                    <tr><div class="form-group">
                          <?php echo $record['tanggal'];?>
                    </div></tr>
                    <tr><div class="form-group">
                      <label for="exampleInputPassword1">IP Address :</label>
                    </div></tr>
                    <tr><div class="form-group">
                          <?php echo $record['ip_addr'];?>
                    </div></tr>
                          <tr><div class="form-group">
                      <label for="exampleInputPassword1">kerusakan :</label>
                    </div></tr>
                    <tr><div class="form-group">
                          <?php echo $record['kerusakan'];?>
                    </div></tr>
                          <tr><div class="form-group">
                      <label for="exampleInputPassword1">Saran :</label>
                    </div></tr>
                    <tr><div class="form-group">
                          <?php echo $record['saran'];?>
                    </div></tr>
                    
                      </table>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <?php echo anchor('riwayat_admin','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->