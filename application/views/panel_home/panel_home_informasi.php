<div class="b24">
            	<div class="b241">INFORMASI kerusakan</div>
                <?php foreach ($record->result() as $r)
                        { 
                 echo "
                
                <div class='b242'>
                	<div class='b2421'><b>$r->kerusakan</b></div>
                    <div class='b2422'>
                    	$r->pengertian.
                    </div>
                </div> ";
                }        ?>
                

            </div>