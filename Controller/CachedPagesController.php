<?php
namespace App\Controller;

use Cake\Controller\Controller;

/**
 * CachedPagesController class
 *
 */
class CachedPagesController extends Controller {

/**
 * uses property
 *
 * @var array
 */
	public $uses = array();

/**
 * helpers property
 *
 * @var array
 */
	public $helpers = array('Cache', 'Html');

/**
 * cacheAction property
 *
 * @var array
 */
	public $cacheAction = array(
		'index' => '+2 sec',
		'_nocache_tags' => '+2 sec',
		'view' => '+2 sec'
	);

/**
 * Mock out the response object so it doesn't send headers.
 *
 * @var string
 */
	protected $_responseClass = 'Cake\\Case\Routing\DispatcherMockResponse';

/**
 * viewPath property
 *
 * @var string
 */
	public $viewPath = 'Posts';

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->render();
	}

/**
 * _nocache_tags method
 *
 * @return void
 */
	public function _nocache_tags() {
		$this->render();
	}

/**
 * view method
 *
 * @param $id
 * @return void
 */
	public function view($id = null) {
		$this->render('index');
	}

/**
 *  cached forms / s view object being registered
 *
 * @return void
 */
	public function cache_form() {
		$this->cacheAction = 10;
		$this->helpers[] = 'Form';
	}

/**
 *  cached views with themes.
 */
	public function themed() {
		$this->cacheAction = 10;
		$this->theme = 'Theme';
	}

}

