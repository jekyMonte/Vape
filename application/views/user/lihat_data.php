        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-users"></i>
                  <h3 class="box-title">MENU DATA USER</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <div class="box box-primary">
                <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="30">NO</th>
                        <th >NAMA</th>
                        <td>USERNAME</td>
                        <td width="25">L/P</td>
                        <td>ALAMAT</td>
                        <td width="50">TELP</td>
                        <td width="10">STATUS</td>
                        <th  width="180">AKSI</th>
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
                        if($r->status==0){

                        
                        echo "
                            <tr>
                            <td width='10'>".$no++."</td>
                            <td>$r->nama</td>
                            <td>$r->username</td>
                            <td>$r->jenis_kelamin</td>
                            <td>$r->alamat</td>
                            <td>$r->no_telp</td>
                            <td>$r->status</td>
                            <td>
                            ".anchor('user/konfirmasi/'.$r->id_user,'<i class="fa fa-pencil-square-o"></i> Konfirm',array('class'=>'btn btn-danger btn-sm"'))."
                            ".anchor('user/hapus/'.$r->id_user,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm"'))."
                            </td>
                      </tr>";
                        }else{
                            echo "
                            <tr>
                            <td width='10'>".$no++."</td>
                            <td>$r->nama</td>
                            <td>$r->username</td>
                            <td>$r->jenis_kelamin</td>
                            <td>$r->alamat</td>
                            <td>$r->no_telp</td>
                            <td>$r->status</td>
                            <td>
                            ".anchor('user/blokir/'.$r->id_user,'<i class="fa fa-pencil-square-o"></i>  Blokir ',array('class'=>'btn btn-danger btn-sm"'))."
                            ".anchor('user/hapus/'.$r->id_user,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm"'))."
                            </td>
                      </tr>";
                        }
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