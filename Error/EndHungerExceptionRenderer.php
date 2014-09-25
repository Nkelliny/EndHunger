<?php

namespace EndHunger\Error;

use Cake\Controller\Controller;
use Cake\Core\Configure;
use Cake\Error\ExceptionRenderer;
use Cake\Network\Request;
use Cake\Network\Response;
use Cake\Routing\Router;
use EndHunger\Controller\EndHungersErrorController;

class EndHungersExceptionRenderer extends ExceptionRenderer {

/**
 * {@inheritDoc}
 */
	protected function _getController() {
		if (!$request = Router::getRequest(true)) {
			$request = new Request();
		}
		$response = new Response();
		try {
			$controller = new EndHungersErrorController($request, $response);
			$controller->layout = 'banana';
		} catch (\Exception $e) {
			$controller = new Controller($request, $response);
			$controller->viewPath = 'Error';
		}
		return $controller;
	}

}
