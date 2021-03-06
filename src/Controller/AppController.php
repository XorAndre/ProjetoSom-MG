<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\I18n\Time;
use Cake\ORM\TableRegistry;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function beforeFilter(Event $event){
        $news = TableRegistry::get('News');
        $query = $news->find('all')->order(['data' => 'desc'])->limit('5');
        $result = $query->all();
        $this->set('ultimasnoticias', $result);
    }

    public function initialize()
    {
        parent::initialize();
        Time::setDefaultLocale('pt_BR');
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        $this->loadComponent('Csrf');
        if(!in_array($this->request->params['controller'], ["Albums", "Galleries"]) && 
           !in_array($this->request->params['action'], ["add", "edit"] ))
            $this->loadComponent('Security');
        
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'login',
                        'password' => 'password'
                    ]
                ]
            ],
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login'
            ],
             // If unauthorized, return them to page they were just on
            'unauthorizedRedirect' => $this->referer()
        ]);
        $this->viewBuilder()->setLayout('admin');
        if(!empty($this->Auth->user('id'))){
            $Images = TableRegistry::get('Images');
            $userImage = $Images->preparePath($this->Auth->user('image_id'));
            $this->set('userImage', $userImage);
        }
        $accesses = TableRegistry::get('Accesses');
        $acesso = $accesses->newEntity();
        $data['Accesses'] = $this->request->params;

        if(sizeof($data['Accesses']['pass']) > 0) {
            foreach ($data['Accesses']['pass'] as $key => $value) {
                $data['Accesses']['param'] = $value;
                $acesso = $accesses->patchEntity($acesso, $data);
                $accesses->save($acesso);
            }
        } else {
            $acesso = $accesses->patchEntity($acesso, $data);
            $accesses->save($acesso);
        }
    }
}
