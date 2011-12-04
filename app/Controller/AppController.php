<?php
// app/Controller/AppController.php
class AppController extends Controller {
    //...

    public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'pages', 'action' => 'display', 'loggedin'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'loggedout')
        )
    );

    function beforeFilter() {
        $this->Auth->allow('index', 'view');
    }
    //...
}