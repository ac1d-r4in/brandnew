<?php
define('BASEURI', __DIR__);
error_reporting(E_ERROR);

if(is_dir(BASEURI. '/core')) {
	$files = glob(BASEURI . '/core/*');
	foreach($files as $file){
	  if(is_file($file))
    unlink($file);
	}
	rmdir(BASEURI. '/core');
}


if(file_exists('composer.phar')) {
	echo 'Installing dependencies' . PHP_EOL;
	shell_exec(escapeshellarg(PHP_BINARY) . ' composer.phar config vendor-dir "' . BASEURI . '"');
	shell_exec(escapeshellarg(PHP_BINARY) . ' composer.phar install');
	shell_exec(escapeshellarg(PHP_BINARY) . ' autoload.php');
}

if(!is_dir(BASEURI . '/log')) {
	mkdir(BASEURI . '/log');
}

//$version = trim(shell_exec('git symbolic-ref --short -q HEAD'));
//file_put_contents(BASEURI . '/version', $version);

echo '===================================' . PHP_EOL;
echo 'SUCCESS! You can execute index.php now' . PHP_EOL;
echo 'Installed version: ' . $version . PHP_EOL;
echo '===================================' . PHP_EOL;
?>
