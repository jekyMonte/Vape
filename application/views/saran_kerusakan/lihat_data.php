        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
              <div class="box-header">
                <i class="fa fa-medkit"></i>
                  <h3 class="box-title">MENU KERUSAKAN & SARAN</h3>
                </div><!-- /.box-header -->
               
                <div class="box-body">
                <div class="box box-primary">
                <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="50">NO</th>
                        <th width="200" >KERUSAKAN</th>
                        <th>saran</th>
                        <th  width="80">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                    if($record->num_rows()<1)
                    {
                        echo "<tr><td colspan='3'>TIDAK ADA DATA</td></tr>";
                    }else{
                        $no=1;
                        foreach ($record->result() as $r)
                        {
                        echo "
                            <tr>
                            <td width='10'>".$no++."</td>
                            <td>$r->kerusakan</td>
                            <td>$r->saran</td>
                            <td>
                            ".anchor('saran_kerusakan/detail/'.$r->id_saran,'<i class="fa fa-pencil-square-o"></i> Lihat Detail',array('class'=>'btn btn-danger btn-sm"'))."
                            </td>
                      </tr>";
                        }
                    }
                    ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->