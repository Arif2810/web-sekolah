<?php
$cek=umenu_akses("?module=berita",$_SESSION[sessid]);
if($cek==1 OR $_SESSION[leveluser]=='admin'){
echo "<li><a href='?module=berita'><b>Berita</b></a></li>";
}

$cek=umenu_akses("?module=kategori",$_SESSION[sessid]);
if($cek==1 OR $_SESSION[leveluser]=='admin'){
echo "<li><a href='?module=kategori'><b>Kategori Berita </b></a></li>";
}

$cek=umenu_akses("?module=tag",$_SESSION[sessid]);
if($cek==1 OR $_SESSION[leveluser]=='admin'){
echo "<li><a href='?module=tag'><b>Tag Berita</b></a></li>";
}

$cek=umenu_akses("?module=album",$_SESSION[sessid]);
if($cek==1 OR $_SESSION[leveluser]=='admin'){
echo "<li><a href='?module=album'><b>Kegiatan Sekolah</b></a></li>";
}
$cek=umenu_akses("?module=galerifoto",$_SESSION[sessid]);
if($cek==1 OR $_SESSION[leveluser]=='admin'){
echo "<li><a href='?module=galerifoto'><b>Foto Kegiatan</b></a></li>";
}


?>
