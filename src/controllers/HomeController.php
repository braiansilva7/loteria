<?php
namespace src\controllers;

use \core\Controller;
use \src\models\Jogo;

class HomeController extends Controller {

    public function index() {
        $jogos = Jogo::select()->execute();

        $this->render('home', [
            'jogos' => $jogos
        ]);
    }

}