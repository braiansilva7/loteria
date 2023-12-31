<?php



namespace src\controllers;

use \core\Controller;
use src\controllers\JogosSorteados;
use src\models\Jogo;

class LotericaController extends Controller {

    public function add() {
       $this->render('add');
    }

    public function sort()
    {

         if(!isset($_GET['sortear'])){
            
               $megaSena = JogosSorteados::megaSena();
         
               $loto = JogosSorteados::lotofacil();
         
               $quina = JogosSorteados::quina();
         
               $lotomania = JogosSorteados::lotomania();
               //$strMania = implode(',',$lotomania);

               $this->render('add', [
                  'megaSena' => $megaSena,
                  'loto' => $loto,
                  'quina' => $quina,
                  'lotomania' => $lotomania,
            ]);
         }else{
               $megaSena = JogosSorteados::megaSena();
         
               $loto = JogosSorteados::lotofacil();
         
               $quina = JogosSorteados::quina();
         
               $lotomania = JogosSorteados::lotomania();

               $this->render('add', [
                  'megaSena' => $megaSena,
                  'loto' => $loto,
                  'quina' => $quina,
                  'lotomania' => $lotomania,
            ]);
         }
      
    }

    public function addAction() {
        $megaSena = filter_input(INPUT_POST, 'salvarMega');
        $salvarLoto = filter_input(INPUT_POST, 'salvarLoto');
        $salvarQuina = filter_input(INPUT_POST, 'salvarQuina');
        $salvarMania = filter_input(INPUT_POST, 'salvarMania');

        if($megaSena){

               Jogo::insert([
                  'sorteio' => $megaSena,
                  'tipo' => "Mega Sena"
               ])->execute();   

               $this->redirect('/');
        }else if($salvarLoto){

               Jogo::insert([
                  'sorteio' => $salvarLoto,
                  'tipo' => "Lotofácil"
               ])->execute();   

               $this->redirect('/');

        }else if($salvarQuina){

               Jogo::insert([
                  'sorteio' => $salvarQuina,
                  'tipo' => "Quina"
               ])->execute();   

               $this->redirect('/');

         }else if($salvarMania){

               Jogo::insert([
                  'sorteio' => $salvarMania,
                  'tipo' => "Lotomania"
               ])->execute();   

               $this->redirect('/');

         }
        $this->redirect('/novo');
         
     }

     public function edit($args){
        
     }
     public function del($args){
     
         Jogo::delete()
         ->where('id', $args['id'])
         ->execute();

         $this->redirect('/');
    }
}