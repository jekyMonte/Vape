        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-medkit"></i>
                  <h3 class="box-title">TAMBAH DATA KERUSAKAN</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('saran/tambah');?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="">Kerusakan</label>
                        <select name="id_kerusakan" class="form-control" required>
                          <option>--Pilih Kerusakan--</option>
                            <?php  
                              foreach ($kerusakan as $d) {
                                  echo "<option value='$d->id_kerusakan'>$d->kerusakan</option>";
                              }
                              ?>
                        </select> 
                    </div>
                      <div class="form-group">
                      <label for="">saran</label>
                        <textarea style="height:100px"  class="form-control" name="saran" placeholder="Masukan Saran"></textarea>                
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('saran','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->