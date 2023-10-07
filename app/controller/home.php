<?php

class Home extends SENE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->setTheme('front');
        $this->load("data_model", "thedata");
    }
    public function index()
    {
        $data = array();
        $this->setTitle('Infinite');
        $this->setDescription("Congratulation, you have done well.");
        $this->setKeyword('Seme Framework');
        $this->setAuthor('Seme Framework');

        $data['thedata'] = $this->thedata->get();

        $this->putThemeContent("home/home", $data); //pass data to view
        $this->putJsReady("home/home_bottom", $data);

        $this->loadLayout("col-1-home", $data);
        $this->render();
    }
}
