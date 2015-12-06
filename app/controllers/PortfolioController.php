<?php

use Phalcon\Mvc\View;
use Phalcon\Paginator\Adapter\Model as Paginator;


class PortfolioController extends ControllerBase
{

    public function initialize()
    {
        parent::initialize();


        $this->assets->addCss("../../css/main.css");
        $this->assets->addCss("../../font-face/entypo.css");
        $this->assets->addJs("../../js/main.js");
        $this->assets->addJs("../../js/jquery.scrolly.min.js");
        $this->assets->addJs("../../js/jquery.scrollex.min.js");
        $this->assets->addJs("../../js/jquery-ui.js");

    }

    public function indexAction()
    {

    }


}