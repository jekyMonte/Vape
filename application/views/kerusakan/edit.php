        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">EDIT DATA KERUSAKAN</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('kerusakan/edit');?>
                  <div class="box-body">
                    <div class="form-group">
                        
                      <label for="exampleInputPassword1">kerusakan</label>
                      <input type="text" name="kerusakan" required="" class="form-control"  placeholder="Masukan Nama kerusakan" value="<?php echo $record['kerusakan']?>">
                    </div>
                      <div class="form-group">
                      <label for="">Keterangan kerusakan</label>
                        <textarea style="height:100px" required="" class="form-control" name="pengertian" placeholder="Keterangan kerusakan" ><?php echo $record['pengertian']?></textarea>                
                    </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Nilai Probabilitas</label>
                      <input type="text" name="Probabilitas" required="" class="form-control" placeholder="Masukan Nilai Probabilitas"><?php echo $record['probabilitas']?>
                    
                  </div>
                      
                      <div class="form-group">
                      <input type="hidden" name="id" value="<?php echo $record['id_kerusakan']?>">                
                    </div>
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