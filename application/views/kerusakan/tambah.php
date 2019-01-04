        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">TAMBAH DATA KERUSAKAN</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('kerusakan/tambah');?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Kerusakan</label>
                      <input type="text" name="kerusakan" required="" class="form-control" placeholder="Masukan Nama Kerusakan">
                    </div>
                      <div class="form-group">
                      <label for="">Keterangan Kerusakan</label>
                        <textarea style="height:100px"  class="form-control" name="pengertian" placeholder="Keterangan kerusakan"></textarea>                
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Nilai Probabilitas</label>
                      <input type="text" name="probabilitas" required="" class="form-control" placeholder="Masukan Nilai Probabilitas">
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('kerusakan','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->