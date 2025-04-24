<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Typkomponent;

class Item extends BaseController
{
    var $typy;
    var $item;

    public function index()
    {
        //
    }

    public function __construct()
    {
        $this->typy = new Typkomponent();
    }

    public function seznam() {
        $typy = $this->typy->findAll();
        $data['typy'] = $typy;
        echo view('Item/index', $data);
    }

    public function add() {
        echo view('item/add');
    }

    public function create() {
        $name = $this->request->getPost('nazev');
        $url = $this->request->getPost('url');
        $data = array(
            'typKomponent' => $name,
            'url' => $url,
        );
 
        $this->typy->save($data);
        return redirect()->route('seznam-polozek');
    }
}
