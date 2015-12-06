<?php

use Phalcon\Mvc\View;
use Phalcon\Paginator\Adapter\Model as Paginator;


class ProjectController extends ControllerBase
{

    public function initialize()
    {
        parent::initialize();
        $this->assets->addCss("../../css/project.css");
        $this->assets->addJs("../../js/project.js");
        $this->assets->addJs("../../js/skel.min.js");
        $this->assets->addJs("../../js/jquery.scrolly.min.js");
        $this->assets->addJs("../../js/jquery.scrollex.min.js");
        $this->assets->addJs("../../js/jquery-ui.js");

    }

    public function indexAction()
    {
        $this->assets->addCss("../../css/main.css");
        $this->assets->addCss("../../css/projects.css");
    }

    public function TowlAction()
    {

    }

    public function EnbloomAction()
    {
        $this->assets->addCss("../../css/enbloom.css");
    }


    public function LaughingbeansAction()
    {
        $this->assets->addCss("../../css/laughingbeans.css");
    }

    public function IpoptvAction()
    {
        $this->assets->addCss("../../css/ipoptv.css");
    }

    public function GramoAction()
    {
        $this->assets->addCss("../../css/gramo.css");
    }

    public function PeopleAction()
    {
        $this->assets->addCss("../../css/people.css");
    }

}