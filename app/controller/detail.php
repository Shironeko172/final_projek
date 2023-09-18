<?php

class Detail extends SENE_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load("data_model", "hh");
        $this->setTheme('front');
    }
    public function index()
    {
        $data = array();
        $this->setTitle('Final Projek');
        $this->setDescription("Congratulation, you have done well.");
        $this->setKeyword('Seme Framework');
        $this->setAuthor('Seme Framework');
        $this->putThemeContent("detail/home", $data);
        $this->putJsReady("detail/home_bottom", $data);

        $this->loadLayout("col-1-detail", $data);
        $this->render();
    }

    public function isidata($id)
    {
        $ddata = array();
        $this->setTitle('Final Projek');
        $this->setDescription("Congratulation, you have done well.");
        $this->setKeyword('Seme Framework');
        $this->setAuthor('Seme Framework');

        $ddata['hh'] = $this->hh->getdata($id);
        $ddata['gg'] = $this->hh->getps();
        $ddata['ss'] = $this->hh->getxbox();
        $ddata['dd'] = $this->hh->getnintendo();

        $this->putThemeContent("detail/home", $ddata);
        $this->putJsReady("detail/home_bottom", $ddata);

        $this->loadLayout("col-1-detail", $ddata);
        $this->render();
    }
}
