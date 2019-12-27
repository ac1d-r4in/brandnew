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
	echo implode("\n", Log::Instance()->log);
  }
}

?>
