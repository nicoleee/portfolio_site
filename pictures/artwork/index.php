<?php 

$photos = scandir('.');
$filelist = array();

foreach($photos as $photo) {
	if (is_file($photo)) {
		$filelist[] = $photo;
	}
}
//remove the stuff we don't want returned
$sortedarray = array_diff($filelist,array('.','..','index.php','.DS_Store'));
sort($sortedarray);
echo json_encode($sortedarray);


 ?>