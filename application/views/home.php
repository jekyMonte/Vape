<html>
	<head>
		<title>VAPOR EXPERT SYSTEM</title>
                <link rel="stylesheet" href="<?php echo base_url()?>assets/css/squen.css">
                
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url()?>assets/images/squen_logo.png"/>
		<link href="css/squen.css" rel="stylesheet" type="text/css"/>
	</head>
	
	<body>
		<div class="panelatas">
                    <div class="pa2"><a href="<?php echo base_url(); ?>"><img src="<?php echo base_url()?>assets/images/logobanerku.png" height="50px"></a></div>
        </div>
        
        <div class="b" >
        <div class="b1"></div>
        <div class="b2">
        	<div class="b21">
                <?php echo anchor('auth_admin/login','LOGIN ADMIN',  array('class'=>'b211')); ?>
                <?php echo anchor('diagnosa','MULAI DIAGNOSA',  array('class'=>'b211')); ?>
                
                
                
            </div>
            
            <div class="b22"><img src="<?php echo base_url()?>assets/images/banner_homevape.jpg"</div>
			
<div class="b23">
	<div style="margin:20px 20px 50px 20px;">
		<div class="judul">Apakah Perkebunan Durian Tidak Optimal ?</div>
        <div style="margin:10px 0 0 0;text-align:justify;">
        Banyak sekali perkebunan buah durian yang berjalan dengan tidak optimal.
        hal ini sering terjadi justru karena faktor internal, antara lain para petani
        yang tidak tepat dalam menangani penyakit-penyakit pada tanaman buah durian.
        para petani khususnya petani pemula melakukan salah dalam pencegahan ataupun
        penanganan terhadap penyakit. Karena kurangnya pengetahuan tentang penyakit
        tersebut maka banyak para petani pemula yang salah dalam memprediksi penyakit
        yang terjadi pada tanaman durian mereka.
        </div>
        
        <div class="judul" style="margin-top:20px;">Ingin Menjadikan Perkebunan Anda Menjadi Optimal ?</div>
        <div style="margin:10px 0 0 0;text-align:justify;">
        Setiap petani sudah pasti akan mendambakan perkebunan mereka berjalan dengan
        optimal. perawatan yang baik, pencegahan penyakit dan hama yang
        tepat, serta solusi penanganan dalam mengatasi penyakit dan hama yang menyerang
        secara tepat akan memberikan hasil yang optimal untuk perkebunan mereka, 
        untuk mewujudkan hal tersebut maka petani khsusnya para petani pemula membutuhkan sebuah media yang dapat membantunya.
        </div>
        
        <div class="judul" style="margin-top:20px;">Inilah Solusi untuk Perkebunan Anda</div>
        <div style="margin:10px 0 0 0;text-align:justify;">
        Sikaren Expert System adalah solusi yang tepat untuk anda. sistem ini akan membantu
        anda dalam pengelolaan perkebunan buah durian yang anda jalankan. Tidak perlku harus
        petani yang hebat untuk dapat menggunakannya, andapun bisa. Berbagai pengetahuan tanaman
        buah durian yang lengkap dan dapat diakses secara mudah. Seluruh sistem yang saling terhubung
        akan memberikan informasi yang dapat diakses dimana saja. sangat mudah dan tidak memerlukan
        banyak tenaga serta biaya.
        </div>
	</div>

</div>

			<div class="b24">
            	<div class="b241">INFORMASI KERUSAKAN</div>
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
			
			        </div>
        <div class="b3">
        	Copyright &copy 2019 - VAPOR Expert Sistem - All Right Reserved
        </div>
        
        </div>
	</body>
</html>