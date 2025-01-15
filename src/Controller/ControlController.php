<?php
namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Controller\Component\FlashComponent;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Datasource\ConnectionManager;


class ControlController extends AppController{

    	public function index(){
      }

      public function tabuada(){

          $texto = $this->request->data['message-input'];

          $texto_maiusculo = strtoupper($texto);

          if ($texto_maiusculo == 'TABUADA'){
                  $texto_exibir = "A tabuada é uma tabela que ajuda a realizar multiplicações de forma mais rápida e fácil.";
                  $texto_exibir1 = "Digite abaixo o número que deseja saber a tabuada, para que eu calcule para você:";
          }else{
            $this->Flash->error(__('Infelizmente não posso começar porque você não seguiu a instrução'));
            return $this->redirect(['action' => 'index']);
          }        

          
          $this->set(compact('texto','texto_maiusculo','texto_exibir','texto_exibir1'));
          $this->set('_serialize',['texto','texto_maiusculo','texto_exibir','texto_exibir1']);
      }

      public function calculo(){

          $texto = $this->request->data['texto_usuario'];
          $texto_exibir = $this->request->data['texto_exibir'];
          $texto_exibir1 = $this->request->data['texto_exibir1'];
          $numero = $this->request->data['numero'];

          $texto_calculo = "O resultado da tabuada do número ".$numero. " é o seguinte :";
          $texto_fim_calculo = "Após está exibição clique em 'Finalizar' para recomeçar este batepapo";

          $this->set(compact('texto','texto_exibir','texto_exibir1','numero','texto_calculo','texto_fim_calculo'));
          $this->set('_serialize',['texto','texto_exibir','texto_exibir1','numero','texto_calculo','texto_fim_calculo']);
      }
}
?>