        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
              <div class="box-header">
                <i class="fa fa-safari"></i>
                  <h3 class="box-title">DATA RIWAYAT</h3>
                </div><!-- /.box-header -->
              <div class="box-body">
              <div class="box box-primary">
                
                 
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="10">NO</th>
                        <th >Username</th>
                        <th >Diagnosa</th>
                        <th >Ip Address</th>
                        <th width="50">Tanggal</th>
                        <th  width="130">AKSI</th>
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
                            <td>$r->kerusakan</td>
                            <td>$r->ip_addr</td>
                            <td>$r->tanggal</td>
                            <td>
                            ".anchor('riwayat/detail/'.$r->id_riwayat,'<i class="fa fa-trash-o"></i> Detail',array('class'=>'btn btn-danger btn-sm"'))."
                            ".anchor('riwayat/hapus/'.$r->id_riwayat,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm"'))."
                            </td>
                      </tr>";
                        }
                    }
                    ?>
                    </tbody>
                  </table></div></div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->