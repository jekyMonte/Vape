        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
              <div class="box-header">
                <i class="fa fa-envelope"></i>
                  <h3 class="box-title">MENU KIRIM PESAN</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                
                <?php echo form_open('pesan/kirim');?>
                  <div class="box-body">
                    <div class="form-group">
                        <label for="">Kirim Pesan</label>
                        <textarea style="height:100px"  class="form-control" name="pesan" placeholder="Tulis Pesan Di Sini"></textarea>                
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Kirim</button>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->