        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
              <div class="box-header">
                <i class="fa fa-stethoscope"></i>
                  <h3 class="box-title">MENU DIAGNOSA</h3>
                </div>
                <div class="box-body">
                <div class="box box-primary">
                <!-- form start -->
                <?php echo form_open('diagnosa/hitung_dinamis_1');?>
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputPassword1">Gejala yang Ada</label>
                    
                            <table>
                           <label for="">    
                          <?php 
                            foreach ($gejala->result_array() as $g ) {
                                echo '<tr><td>';
                                echo " <br><input type='checkbox' name='gejala[]'  value=".$g['id_gejala'].">".'&nbsp&nbsp'.$g['gejala'];
                                echo '</td></tr>';
                                
                            }
                        ?>
                               </label> 
                                </table>
                      </div>
                   
                      
                      
                      
                  </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                      <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-floppy-o"></i> Diagnosa</button>
                  </div>
                </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->