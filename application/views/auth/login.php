<html>
	<head>
		<title>VAPOR EXPERT SYSTEM</title>
                <link rel="shortcut icon" type="image/png" href="<?php echo base_url()?>assets/images/squen_logo.png"/>
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/squen.css">
	</head>
	
	<body style="background-color:#333;">



	      <div class="login">
          	<div class="login1">
            	<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url()?>assets/images/squen_logo_banner.png" height="30px"></a>
            </div>
                <?php
                echo form_open('auth/login');
                ?>
                <input type="text" class="kolom_login" placeholder="username" required autofocus="autofocus" name="username"/>
                <input type="password" class="kolom_login" placeholder="password" required name="password"/>
                
                <input type="submit" class="kolom_submit_login" value="LOGIN" name="submit"/>
                </form>
            
          </div>
          
          <div align="center" style="margin-top:100px;">
          <a href="<?= base_url("auth_admin/login") ?>" style="text-decoration:none;color:#333;">admin</a></div>
	</body>
</html>