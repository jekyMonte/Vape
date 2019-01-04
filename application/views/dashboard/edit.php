        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-laptop"></i>
                  <h3 class="box-title">EDIT DATA USER</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <div class="form-group"></div>
                <!-- form start -->
                <?php echo form_open_multipart('dashboard_user/edit');?>
                    <input type="hidden" name="id" value="<?php echo $user['id_user']?>">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" value="<?php echo $user['nama']?>" id="" name="nama" placeholder="Isikan Judul Produk" required>
                    </div>

                    <div class="form-group">
                      <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                          <option value="l">Laki-laki</option>
                          <option value="p">Perempuan</option>
                        </select> 
                    </div>
                    
                      <div class="form-group">
                      <label for="">Alamat</label>
                        <textarea style="height:100px"  class="form-control" name="alamat"  placeholder="alamat"><?php echo $user['alamat']?></textarea>                
                    </div>
                    
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                      <label for="">No Telp</label>
                        <input type="text" class="form-control" value="<?php echo $user['no_telp']?>" id="" name="no_telp" placeholder="Jumlah Produk" required>                        
                    </div>
                    <div class="form-group">
                      <label for="">Username</label>
                        <input type="text" class="form-control" value="<?php echo $user['username']?>" id="" name="username" placeholder="Jumlah Produk" required>                        
                    </div>
                    <div class="form-group">
                      <label for="">Foto</label>
                        <input type="file" class="form-control" value="" id="" name="userfile" placeholder="">
                                             
                    </div>
                    
                  </div>
                  
                  
                </div><!-- /.item -->
                <div class="form-group">
                    <button type="submit" value="<?php echo $user['foto']?>" name="submit" class="btn btn-primary btn-block btn-flat"><i class="fa fa-floppy-o"></i> Simpan</button>
                  <a href="<?php echo base_url(); ?>dashboard_user" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-out"></i> Kembali</a>
                </div><!-- /.col -->
               </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->





