<?php
App::uses('AppController', 'Controller');
/**
 * Tipos Controller
 *
 * @property Tipo $Tipo
 */
class UsersController extends AppController {
	public $name = 'Users';
	public $helpers = array('Html','Form','Session');
	public $uses = array('User');
	public $components = array('Auth','Email','Session');
	
	public function beforeFilter() {
	    parent::beforeFilter();
	    //$this->Auth->allow('add'); // Letting users register themselves
	}

	public function login() {
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());
	        } else {
	            $this->Session->setFlash(__('Invalid username or password, try again'),'default',array(),'auth');
	        }
	    }
	}

	public function edit($id){
		$this->User->read(null, $id);
		$this->User->set('estado_id', '2');
		if ($this->User->save($this->data))
		{ 
			$this->Session->setFlash(__('Cuenta activada', true));
		}		
		else
		{
			$this->Session->setFlash(__('Error', true));
		}		
		$this->redirect(array('controller'=>'pages', 'action' => 'home'));		
	}

	public function loginfb(){
		/*$app_id   = "377583548967953";
		$app_secret = "aa995450f1f9fb14f0405ca9b71d1922";
		$site_url = "http://localhost/ttt_finance";
		 
		try{
		  include_once "fb/facebook.php";
		}catch(Exception $e){
		  error_log($e);
		}
		$facebook = new Facebook(array(
		  'appId'   => $app_id,
		  'secret'  => $app_secret,
		  ));
		 
		$user = $facebook->getUser();
		debug($user);
		if($user){
		  try{
		    $user_profile = $facebook->api('/me');
		  }catch(FacebookApiException $e){
		    error_log($e);
		    $user = NULL;
		  }
		}
		if($user){
		  //session_destroy();
		  $logoutUrl = $facebook->getLogoutUrl(/*array(
		  	'redirect_uri'  => 'http://ttt.borealdev.com.ar/',
		  ));
		  echo "<script>top.location.href = '$logoutUrl'; </script>";
		  $this->set('logoutUrl',$logoutUrl);
		}else{
		  $loginUrl = $facebook->getLoginUrl(array(
		    //'scope'   => 'read_stream, publish_stream, user_birthday, user_location, user_work_history, user_hometown, user_photos',
		    //'redirect_uri'  => $site_url
		    ));
		  echo "<script>top.location.href = '$loginUrl'; </script>";  
		  $this->set('loginUrl',$loginUrl);
		}
		*/



	}

	public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        }
    }

	public function login2()
	{
		if(!empty($this->data))
		{
			if ($this->User->check_username_exists($this->data['User']['username']))
			{ 
			$this->Session->setFlash('Usuario inexistente','default',array('class'=>'flash_bad'));	
			}
			else
			{
				$num = $this->User->check_user($this->data['User']);
				if ($num == 0)
				{ 					
					$this->User->id = $this->User->_user['User']['id'];
					$this->User->saveField('last_login',date("Y-m-d H:i:s"));
					// save User to Session and redirect
					$this->Session->write('User', $this->User->_user['User']);
					$this->Session->write('User.username', $this->data['User']['username']);					
				}
				else if ($num == 1)
				{
					$this->Session->setFlash('Error en el envio','default',array('class'=>'flash_bad'));
				}	
				else if ($num == 2)
				{
					$this->Session->setFlash('Usuario inexistente','default',array('class'=>'flash_bad'));
				}		
				else if ($num == 3)
				{
					$this->Session->setFlash('Password incorrecto','default',array('class'=>'flash_bad'));
				}		
				else if ($num == 4)
				{
					$this->Session->setFlash('Usuario Inactivo','default',array('class'=>'flash_bad'));
				}	
			}			
		}
		$this->redirect("/");			
	}
	/** Logout */
	public function logout() {
    	$this->redirect($this->Auth->logout());
	}
}