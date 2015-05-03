<?php
namespace Controllers;

use Alcatraz\Kernel\Controller;
use Alcatraz\Owl\Generator\ClassGenerator;
use Alcatraz\Security\Security;

class IndexController extends Controller
{
    /**
     * @AllowAccess
     */
    public function Index()
    {
        $this->View();
    }


    public function Index2()
    {
        $this->View();
    }
}