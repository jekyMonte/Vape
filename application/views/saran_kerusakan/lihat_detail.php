        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-medkit"></i>
                  <h3 class="box-title">DETAIL SARAN KERUSAKAN</h3>
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                  <div class="box-body">
                      <table>
                          <tr><div class="form-group">
                      <label for="exampleInputPassword1">kerusakan :</label>
                    </div></tr>
                    <tr><div class="form-group">
                          <?php echo $kerusakan['kerusakan'];?>
                    </div></tr>
                          <tr><div class="form-group">
                      <label for="exampleInputPassword1">Pengertian :</label>
                    </div></tr>
                    <tr><div class="form-group">
                          <?php echo $kerusakan['pengertian'];?>
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
                    <?php echo anchor('saran_kerusakan','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->