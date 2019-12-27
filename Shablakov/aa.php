<?php
namespace Shablakov;

use core\LogAbstract;
use core\LogInterface;

class Log extends LogAbstract implements LogInterface {

  protected static $i;
  protected $log = array();

  public static function write() {
	return Log::Instance()->_write();
  }

  public static function log($str) {
    Log::Instance()->log[] = $str;
  }

  public function _write() {
	if(!is_dir(BASEURI . '\log')) {
	mkdir(BASEURI . '\log');
}
		$d = new \DateTime();
		file_put_contents(BASEURI . '/log/' . $d->format('d.m.Y_H-i-s') . '.log', implode("\r\n", Log::Instance()->log));
	echo implode("\n", Log::Instance()->log);
  }
}

?>
