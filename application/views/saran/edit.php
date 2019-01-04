        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-medkit"></i>
                  <h3 class="box-title">EDIT DATA SARAN kerusakan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('saran/edit');?>
                  <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="id" value="<?php echo $record['id_saran']?>">
                      <label for="exampleInputPassword1">kerusakan</label>
                      <select name="kerusakan" class="form-control" required>
                            <?php
                            foreach ($kerusakan as $p)
                            {
                                echo "<option value='$p->id_kerusakan'";
                                echo $record['id_kerusakan']==$p->id_kerusakan?'selected':'';
                                echo">$p->kerusakan</option>";
                            }
                            ?>
                        </select>
                    </div>
                      <div class="form-group">
                       <label for="exampleInputPassword1">Saran</label>
                       <textarea style="height:100px"  class="form-control" name="saran" placeholder="Masukan Saran"><?php echo $record['saran']?></textarea> 
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