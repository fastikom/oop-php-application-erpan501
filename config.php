<?php

mysql_connect( 'localhost', 'root', '' );
mysql_select_db( 'pegawai' );
 

function hajar_coy( $query ) { return mysql_query( $query ); }
function itung_jumlahnya( $query ) { return mysql_num_rows( $query ); }
function uraikan( $query ) { return mysql_fetch_array( $query ); }
function bersihkan( $query ) { return mysql_real_escape_string( $query ); }
 
define( 'URL', 'http://localhost/pegawai' );
define( 'NAME', 'Aplikasi Data Pegawai Sederhana' );
$option = isset( $_GET['option'] ) ? $_GET['option'] : '';
$action = isset( $_POST['action'] ) ? $_POST['action'] : '';
 
?>