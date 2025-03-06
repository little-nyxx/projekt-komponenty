<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Komponent;
use App\Models\Typkomponent;
use App\Models\Vyrobce;

class Main extends BaseController
{
    var $data;
    var $typy;
    var $komponent;
    var $vyrobce;
    var $vypis;

    public function index()
    {
        //
    }

    public function __construct() {
        $this->typy = new Typkomponent();
        $this->komponent = new Komponent();
        $this->vyrobce = new Vyrobce();
    }

    public function typy()
    {
        $typy = $this->typy->findAll();
        $data['typy'] = $typy;
        echo view('typy', $data);
    }

    public function vypis($idKomponent)
    {
        $data['vypis'] = $this->vypis->find($idKomponent);
        $data['kusy'] = $this->kusy->where("typKomponent_id", $idKomponent)->findAll();
        echo view('vypis', $data);
    }
}
