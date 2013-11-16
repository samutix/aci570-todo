<?php
App::uses('PeopleController', 'Controller');

/**
 * PeopleController Test Case
 *
 */
class PeopleControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.person',
		'app.project',
		'app.category',
		'app.user',
		'app.contribution',
		'app.reward',
		'app.notification',
		'app.message',
		'app.task',
		'app.task_list'
	);

}
