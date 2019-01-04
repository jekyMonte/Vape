        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-wrench"></i>
                  <h3 class="box-title">EDIT DATA RULE KERUSAKAN</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php
                $id = $this->uri->segment(3); 
                echo form_open("rule/edit/$id");?>
                  <div class="box-body">
                      <div class="form-group">
                      <label for="exampleInputPassword1">kerusakan : <?php //echo $gejala['kerusakan'];?></label>
                      </div>
                      <div class="form-group">
                      <label for="exampleInputPassword1">Gejala yang Diterita</label>
                      </div>
                      
                      <div class="checkbox">
                          <label><table class="table table-condensed">
                        <thead>
                        <tr>
                            <th width="80">NO</th>
                            <th>Gejala</th>
                            <th>Luas Penyakit</th>
                            <th>Luas Gejala</th>
                        </tr>
                        </thead>
                          <?php 
                          $no=1;
                            foreach ($gejala as $g) {
                                echo "<tr>";
                                echo " <td width='100'>".$no++."</td>";
                                //echo " <td width='900'>$g[id_rule]</td>";
                                echo " <td width='900'>$g[gejala]</td>";
                                echo "<td width='5'><input type='text' name='luas_penyakit[$g[id_rule]] default='0' align='middle' require='' value='$g[luas_penyakit]'>";
                                echo "<td width='5'><input type='text' name='luas_gejala[$g[id_rule]] default='0' align='middle' require='' value='$g[luas_gejala]'>";
                            }   echo "<tr>";
                        ?>
                        </table></label>
                      
                      <?php
                      /*<div class="checkbox">
                        <label>
                          <?php 
                            foreach ($gejala as $g) {
                                echo " <br><input type='checkbox' name='gejala[]' value='$g->id_gejala'>$g->gejala";
                            }
                        ?>
                        </label>*/?>
                      
                      
                      
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Simpan</button>
                    <?php echo anchor('rule','<i class="fa fa-sign-out"></i> Kembali</a>',array('class'=>'btn btn-primary btn-sm')); ?>
                  </div>
                </form>
              </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->