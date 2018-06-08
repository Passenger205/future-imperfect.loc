<?php

namespace app;

use app\core\Router;

/**
 * Class Application
 * 
 * Singletone class.
 * The main task of the application is to gather information about the request and 
 * transmit it to the corresponding controller for further processing
 */
final class Application
{
	/**
	 * Instance of the class
	 */
	protected static $app = null;


	protected static $config = [];



	public static function getInstance()
	{
		if (self::$app != null) {
			return self::$app;
		} else {
			return self::$app = new Application;
		}
	}


	private function __construct() {
		self::initConfig();
	}


	public function run()
	{
		$controllerInfo = Router::getRoute();

		$controllerName = $controllerInfo[0];
		$action = $controllerInfo[1];

		$controller = new $controllerName;
		$controller->$action();
	}


	public function getConfigProp($configName, $propName) 
	{
		return self::$config[$configName][$propName];
	}


	private function initConfig()
	{
		self::$config['config']		= require_once __DIR__ . '/config/config.php';
		self::$config['db'] 		= require_once __DIR__ . '/config/db.php';
		self::$config['siteconfig'] = require_once __DIR__ . '/config/siteconfig.php';
	}
	

	private function __clone() {}
}