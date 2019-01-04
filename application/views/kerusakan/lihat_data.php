        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-heartbeat"></i>
                  <h3 class="box-title">MENU KERUSAKAN</h3>
                </div><!-- /.box-header -->
                
                <div class="box-body">
                <div class="box box-primary">
                <div class="form-group"></div>
                    <?php echo anchor('kerusakan/tambah','<i class="fa fa-file-word-o"></i> Tambah Data</a>',array('class'=>'btn btn-danger btn-sm')); ?>
                <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="80">NO</th>
                        <th >KERUSAKAN</th>
                        
                        <th width="120">PROBABILITAS</th>
                        <th  width="120">AKSI</th>
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
                            
                            <td>$r->probabilitas</td>
                            <td>
                            ".anchor('kerusakan/edit/'.$r->id_kerusakan,'<i class="fa fa-pencil-square-o"></i> Edit',array('class'=>'btn btn-danger btn-sm"'))."
                            ".anchor('kerusakan/hapus/'.$r->id_kerusakan,'<i class="fa fa-trash-o"></i> Hapus',array('class'=>'btn btn-danger btn-sm"'))."
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