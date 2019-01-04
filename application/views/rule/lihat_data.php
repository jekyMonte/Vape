        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                <i class="fa fa-wrench"></i>
                  <h3 class="box-title">MENU RULE</h3>
                <div class="box-body">
                <div class="box box-primary">
                <div class="form-group"></div>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                    <th>KERUSAKAN</th>
                    
		         <?php
		
				  	foreach($record->result_array() as $data)
					   { ?>
                    
					   <th> <?php echo $data['id_gejala'];?></th> <?php }
			   ?> <th width="15">aksi</th>
                                            
                        </tr>
                  </thead>
                    <tbody>
                            <?php
		
				  	foreach($rule->result_array() as $data)
					   { ?>
                            
                        <tr>
                            <td><?php echo $data['kerusakan'];?> </td>
                            
                            
                               <?php 
                                foreach(getprob($data['id_kerusakan']) as $data1){
                                    echo "<td>".$data1['probabilitas']."</td>";
                                }
                            ?></td>

                            <td><a href='<?= base_url("rule/edit/$data[id_kerusakan]") ?>' class="btn btn-danger btn-sm"><i class="fa fa-pencil-square-o"></i>Edit</a></td>
                     </tr>

                        <?php }
         ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body --></div>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->