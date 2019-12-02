<?php
class Release {
	public $version;
	protected $basedir = '/home/springlobby/www/dl/stable';
	protected $baseurl = 'https://springlobby.springrts.com/dl/stable/';
	function __construct() {
		$content = file($this->basedir.'/current.txt');
		$this->version = trim($content[0]);
	}
	public function win32() {
		return $this->baseurl.'springlobby-'.$this->version.'-win32.zip';
	}
	public function win32installer() {
		return $this->baseurl.'springlobby-'.$this->version.'-win32.exe';
	}
	public function link() {
		return $this->baseurl.'springlobby-'.$this->version.'.tar.bz2';
	}
	public function linkGZ() {
		return $this->baseurl.'springlobby-'.$this->version.'.tar.gz2';
	}
}

