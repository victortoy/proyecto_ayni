<?php
class Router{
	public function __construct(){
		if(isset($_GET['url']) and $_GET['url'] == 'frontController'){
			require 'controllers/'.$_POST['clase'].'.php';
			$obj = new $_POST['clase']();
			$obj->{$_POST['metodo']}();
		}else{
			$folder = 'main';
			$view = 'index';

			if(isset($_REQUEST['url'])){
				$url = explode('/',$_REQUEST['url']);
				$folder = array_shift($url);
				if(!empty($url)){
					$view = array_shift($url);
				}
			}
			require 'views/'.$folder.'/'.$view.'.php';
		}
	}
}