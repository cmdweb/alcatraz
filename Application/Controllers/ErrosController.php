<?php
/**
 * Created by PhpStorm.
 * User: gabriel.malaquias
 * Date: 30/01/2015
 * Time: 14:11
 */

namespace Controllers;

use Alcatraz\Kernel\Controller;

class ErrosController extends Controller{
    /**
     * @AllowAccess
     */
    public function Erro404(){
        $this->View();
    }
} 