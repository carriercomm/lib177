<?phpfunction deleteDir($ftp, $src, $stock, $cible){	$ftp->cd($src);    $ftp->rmDir($cible);    header('Location: ftp-see-'.$stock.'-0');    die;}?>