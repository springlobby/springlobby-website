<?php
abstract class Release {
	public $version;
	protected $basedir = '/data/www/springlobby.info/';
	protected $baseurl = 'http://springlobby.info/';
	abstract public function link();
	function __construct() {
		$content = file($this->basedir.'/version/current.txt');
		$this->version = trim($content[0]);
	}
}

class WinRelease extends Release {
	public function link() {
		return $this->baseurl.'windows/springlobby-'.$this->version.'-win32.zip';
	}
}

class SrcRelease extends Release {
	private function linkBase($ext) {
		return $this->baseurl.'tarballs/springlobby-'.$this->version.'.tar.'.$ext;
	}
	public function link() {
		return $this->linkBase('bz2');
	}
	public function linkGZ() {
		return $this->linkBase('gz');
	}
}
