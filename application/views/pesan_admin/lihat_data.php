        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-envelope"></i>
                  <h3 class="box-title">DATA PESAN USER</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="10">NO</th>
                        <th width="80">Username</th>
                        <th >Pesan</th>
                        <th width="50">Tanggal</th>
                        <th  width="30">AKSI</th>
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
                            <td>$r->username</td>
                            <td>$r->pesan</td>
                            <td>$r->tanggal</td>
                            <td>
                            ".anchor('baca_pesan/hapus/'.$r->id_pesan,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm"'))."
                            </td>
                      </tr>";
                        }
                    }
                    ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body --></div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->