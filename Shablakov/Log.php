<?php
namespace Shablakov;
use core\LogAbstract;
use core\LogInterface;
Class Log extends LogAbstract implements LogInterface {
	public static function write(){
		return Log::Instance()->_write();
	}
	public static function log($str){
		Log::Instance()->log[] = $str;
	}
	
	public function _write() {
	
		$d = new \DateTime("NOW");
		$version = file_get_contents(__DIR__. "/../version");
		if (!file_exists(__DIR__. "/../log")) { 
			mkdir(__DIR__. "/../log", 0777, true);
		}
		file_put_contents(BASEURI . '/log/' . $d->format('d-m-Y__H__i_s_u') . '.log', "File Version: " . $version . "\r\n" . implode("\r\n", Log::Instance()->log));
		echo implode("\r\n", Log::Instance()->log);
	}
}