
            
<div class="b23">

    <div class="home_judul">PENDAFTARAN ANGGOTA</div>
        <?php
                echo form_open('auth/daftar');
        ?>
    	<div class="judul_kolom">Nama Lengkap</div>
    	<input type="text" class="kolom_input" name="nama" required/>
        <div class="judul_kolom">Jenis Kelamin</div>
    	<select class="kolom_input"  name="jenis_kelamin" required>
            	<option value="l">Laki-laki</option>
                <option value="p">Perempuan</option>
            </select></br>
        <div class="judul_kolom">Alamat</div>
    	<input type="text" class="kolom_input" name="alamat" required/>
        <div class="judul_kolom">Nomor Telp</div>
    	<input type="text" class="kolom_input" name="no_telp" required/>
        <div class="judul_kolom" >Username</div>
    	<input type="text" class="kolom_input" name="username" required onblur="valUsername()"/>
        <div class="judul_kolom">Password</div>
    	<input type="password" class="kolom_input" name="password" required/>
        
        <input type="submit" class="kolom_submit" value="DAFTAR" name="submit"/>
    </form>


    <div style="height:70px;"></div>   
</div>
     
            
