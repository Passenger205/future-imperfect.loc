<?php

namespace app\core;

use app\Application;

/**
 * Class Router
 * 
 * Splits the url and returns the desired controller
 * 
 * @package xtn-framework
 * @version 0.1
 */
class Router
{
	/**
	 * @see __CLASS__
	 * 
	 * @return array First el will be controller and the second is action
	 */
	public static function getRoute()
	{
		// Set default controller and action

		$app = Application::getInstance();

		$controllerNameRaw	= $app->getConfigProp('config', 'defaultController');
		$actionNameRaw		= $app->getConfigProp('config', 'defaultAction');

		// Getting the route

		$rawUri = $_SERVER['REQUEST_URI'];

		$route = explode('/', $rawUri);
		array_shift($route);

		// Bring to the normal form names of the controller and action

		if (isset($route[0]) && $route[0] != '') {
			$controllerNameRaw	= $route[0];
		}
		if (isset($route[1]) && $route[1] != '') {
			$actionNameRaw		= $route[1];
		}

		$controllerName = 'app\controllers\\' . ucfirst(strtolower($controllerNameRaw)) . 'Controller';
		$actionName 	= 'action' . ucfirst(strtolower($actionNameRaw));

		return [$controllerName,$actionName];
	}
}