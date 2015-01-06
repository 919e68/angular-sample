<?php
App::uses('Controller', 'Controller');
class AppController extends Controller {
	public $uses = array('User');
    public $components = array(
        'Session',
        'Auth' => array(
	        'loginAction' => array(
	            'controller' => 'front',
	            'action' => 'login'
	        ),
            'logoutRedirect' => array(
                'controller' => 'front',
                'action' => 'login'
            ),
	        'authenticate' => array(
	            'Form' => array(
	                'scope' => array('User.visible'=>true, 'User.activated'=>true)
	            ),
	        )
        )
    );
	
	public function beforeRender() {
	    if($this->name == 'CakeError') {
	        $this->layout = 'error';
	    }
	}
	
	public function beforeFilter(){
		$permissions = $this->User->UserPermission->query("
			SELECT Permission.code FROM
				user_permissions AS UserPermission LEFT JOIN
				permissions as Permission ON Permission.id = UserPermission.permission_id
			WHERE UserPermission.user_id = ?	
		", array($this->Session->read('Auth.User.id')));
		if(count($permissions) > 0) $permissions = Set::extract($permissions, '{n}.Permission.code');
		else $permissions = array();
		
		$this->Session->write('Auth.Permission', $permissions);
	}


}
