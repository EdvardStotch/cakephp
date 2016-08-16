<?php 

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController {
    
    public function index(){
        
    }
    
    public function register() {
        
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user,$this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['controller' => 'Articles',
                'action' => 'index']);;
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set('user', $user);
    }
    
}

?>
