<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class TestController extends AppController
{

    public function index()
    {
        $this->autoRender = false;
        echo "TEST";
    }
}
