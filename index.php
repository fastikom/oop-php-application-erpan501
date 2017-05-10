<?php

session_start();
require( dirname(__FILE__).'/function.php' );
 
if( $action == 'Simpan Data Pegawai' ) { simpan_data_pegawai();}
elseif( $action == 'Ubah Data Pegawai' ) { update_data_pegawai(); }
elseif( $option == 'delete-pegawai' ) { hapus_data_pegawai(); }
?>
 <!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>
<?php 
echo NAME;
?>
</title>
<script type="text/javascript">
function hapus(id){
    konfirmasi = confirm('Apakah Anda yakin ingin menghapus data pegawai dengan kode: '+id+' ?' );
    if( konfirmasi == true ) return true;
    else return false;
}
</script>
<link rel="stylesheet" type="text/css" href="<?php echo URL;?>/gaya.css" media="all" />
</head>
 
<body>
<div class="atas">
    <div class="logo">Aplikasi Pegawai</div>
</div>
 
<div class="bungkus">
    <div class="kiri">
        <div class="box">
            <h1>Menu Utama</h1>
            <ul id="urut">
                <?php
                if($option == '') { echo "<li><a href=\"".URL."/\" class=\"active\">Beranda</a></li>\n"; }
                else { echo "<li><a href=\"".URL."/\">Beranda</a></li>\n"; }
                if($option == 'tambah-pegawai') { echo "<li><a href=\"".URL."/?option=tambah-pegawai\" class=\"active\">Tambah Data Pegawai</a></li>\n"; }
                else{ echo "<li><a href=\"".URL."/?option=tambah-pegawai\">Tambah Data Pegawai</a></li>\n"; }
                if($option == 'data-pegawai' || $option == 'detail-pegawai' || $option == 'edit-pegawai') { echo "<li><a href=\"".URL."/?option=data-pegawai\" class=\"active\">Data Pegawai</a></li>\n"; }
                else{ echo "<li><a href=\"".URL."/?option=data-pegawai\">Data Pegawai</a></li>\n"; }               
                 
                ?>
            </ul>
        </div>
    </div>   
     
    <div class="kanan">
        <?php
        $kode = isset($_GET['kode']) ? $_GET['kode'] : '';
        if( $option == 'tambah-pegawai' ) { tambah_data_pegawai(); }
        elseif( $option == 'data-pegawai' ) { tampilkan_pegawai(); }
        elseif( $option == 'edit-pegawai' ) { ubah_data_pegawai(); }
        elseif( $option == 'detail-pegawai') { detail_pegawai($kode); }
        else {
            echo "<div class=\"box\">\n";
            echo "<h1>APLIKASI DATABASE PEGAWAI SEDERHANA</h1>";
           
        }
     
     
        ?>
    </div>
    <div class="clear"></div>
 
</div>
 
</body>
</html>