<?php
App::uses('ProjectsController', 'Controller');

/**
 * ProjectsController Test Case
 *
 */
class ProjectsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project',
		'app.category',
		'app.user',
		'app.contribution',
		'app.reward',
		'app.notification',
		'app.message'
	);

}
