<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Komponent;
use App\Models\NazevParametr;
use App\Models\Parametr;
use App\Models\Typkomponent;
use App\Models\Vyrobce;
use Config\MyConfig;
use App\Libraries\Filtr;

class Main extends BaseController
{
    var $data;
    var $typy;
    var $komponent;
    var $vyrobce;
    var $vypis;
    var $kusy;
    var $parametr;
    var $nazevParametr;
    var $strankovani;
    var $config;
    var $idTypKomponent;
    var $filtr;

    public function index()
    {
        //
    }

    public function __construct() {
        $this->typy = new Typkomponent();
        $this->komponent = new Komponent();
        $this->vyrobce = new Vyrobce();
        $this->parametr = new Parametr();
        $this->nazevParametr = new NazevParametr();
        $this->filtr = new Filtr();
        $config = new MyConfig();
        $this->strankovani = $config->strankovani;
    }

    public function typy()
    {
        $typy = $this->typy->findAll();
        $data['typy'] = $typy;
        echo view('typy', $data);
    }

    public function vypis($urlTypKomponent)
    {
        $url = $this->typy->where('url', $urlTypKomponent)->findAll();
        $url = $url[0]->idKomponent;
        $data['typy'] = $this->typy->find($url);

        $data['komponent'] = $this->komponent->where("typKomponent_id", $url)->paginate($this->strankovani);
        $data['pager'] = $this->komponent->pager;
        echo view('vypis', $data);
    }

    public function komponenta($id)
    {
        $data['parametr'] = $this->parametr->join('nazevParametr', 'parametr.nazevParametr_id = nazevParametr.id', 'inner')->where('komponent_id', $id)->findAll();
        $data['vyrobci'] = $this->komponent->join('vyrobce','komponent.vyrobce_id = vyrobce.idVyrobce','inner')->join('typKomponent', 'komponent.typKomponent_id = typKomponent.idKomponent', 'inner')->find($id);
        echo view('komponenta', $data);
    }

    public function taby()
    {
        $typy = $this->typy->findAll();
        $komponenta = $this->komponent->findAll();
        $data['mensiTypy'] = $typy;
        $data['typy'] = $this->filtr->tabFormater($typy, $komponenta);

        //var_dump($data['typy']);
        //$url = $this->typy->where('url', $urlTypKomponent)->findAll();
        //$url = $url[0]->idKomponent;
        //$data['typy'] = $this->typy->find($url);
       // $data['komponent'] = $this->komponent->where("typKomponent_id", $url)->paginate($this->strankovani);
       // $data['pager'] = $this->komponent->pager;

       echo view('taby', $data);

    }
}
