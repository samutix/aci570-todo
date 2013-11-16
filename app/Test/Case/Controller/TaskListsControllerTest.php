<?php
App::uses('TaskListsController', 'Controller');

/**
 * TaskListsController Test Case
 *
 */
class TaskListsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.task_list',
		'app.project',
		'app.category',
		'app.user',
		'app.contribution',
		'app.reward',
		'app.notification',
		'app.message',
		'app.task',
		'app.person'
	);

}
