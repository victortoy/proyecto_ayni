<?php
class Router{
	public function __construct(){
		if(isset($_GET['url']) and $_GET['url'] == 'frontController'){
			require 'controllers/'.$_POST['class'].'.php';
			$obj = new $_POST['class']();
			$obj->{$_POST['metode']}($_POST['params']);
		}else{
			$folder = 'main';
			$view = 'index';
			$parametros = [];
			if(isset($_REQUEST['url'])){
				$url = explode('/',$_REQUEST['url']);
				$folder = array_shift($url);
				if(!empty($url)){
					$view = array_shift($url);
					if(!empty($url)){
						$parametros = $url;		
					}
				}				
			}			
			$file = 'views/'.$folder.'/'.$view.'.php';
			if(file_exists($file)){
				require $file;	
			}else{
				require 'views/main/error.php';
			}			
		}
	}
}