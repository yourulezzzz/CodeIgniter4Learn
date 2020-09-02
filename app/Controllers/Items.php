<?php

namespace App\Controllers;

use App\Models\ItemsModel;

class Items extends BaseController
{

    protected $ItemsModel;
    public function __construct()
    {
        $this->itemsModel = new ItemsModel();
    }

    public function index()
    {

        //session();

        //$item = $this->itemsModel->findAll();

        //$db = \Config\Database::connect();
        //$item = $db->query("SELECT id_items, name_items, unit_items as total, color_items, price_item FROM t_items INNER JOIN m_item ON t_items.id_items = m_item.id_item GROUP BY id_items ORDER BY id");
        //$item = $db->query("SELECT id_items , name_items, SUM(t_items.unit_items) as total, color_items, price_item  FROM t_items INNER JOIN m_item ON t_items.id_items = m_item.id_item GROUP BY id_items, name_items ");
        //$item = $db->query("SELECT id_items , name_items, unit_items, color_items, price_item  FROM t_items INNER JOIN m_item ON t_items.id_items = m_item.id_item");
        //foreach ($item->getResultArray() as $row)

        //$row = [
        //    'row' => $this->itemsModel->getItems()
        //];

        $currentPage = $this->request->getVar('page_item') ? $this->request->getVar('page_item') : 1;

        //d($this->request->getVar('keyword'));
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $item = $this->itemsModel->searchItems($keyword);
        } else {
            $item = $this->itemsModel;
        }

        $data = [
            'title' => ' Insert | Dev',
            'validation' => \Config\Services::validation(),
            //'item' => $this->itemsModel->getItems(),
            'item' => $item->paginate(7, 'item'),
            'pager' => $this->itemsModel->pager,
            'currentPage' => $currentPage
        ];

        echo view('templates/header', $data);
        echo view('templates/sidebar');
        echo view('templates/topbar');
        echo view('insert/index');
        echo view('templates/footer');

        //$itemModel = new \App\Models\ItemsModel();
        //$itemModel = new ItemsModel();
        //$item = $itemModel->findAll();
        //dd($item);

        //Connect DB Manual
        //$db = \Config\Database::connect();
        //$item = $db->query("SELECT id_items, name_items, SUM(t_items)  as total, color_items, price_item FROM t_items INNER JOIN m_item ON t_items.id_items = m_item.id_item GROUP BY id_items ORDER BY id");
        //foreach ($item->getResultArray() as $row) {
        //    d($row);
        //}
    }

    public function detail($id)
    {
        $item = $this->itemsModel->getItems($id);
        //d($item);

        $itemsModel = new ItemsModel();
        $data = array(
            'item' =>  $itemsModel->find($id),
            'title' => 'Form Edit Items | Dev',
        );

        echo view('templates/header', $data);
        echo view('templates/sidebar');
        echo view('templates/topbar');
        echo view('insert/edit');
        echo view('templates/footer');
    }


    public function save()
    {
        //Validasi Input
        if (!$this->validate([
            'id_items' => [
                'rules' => 'required|max_length[30]',
                'errors' => [
                    'required' => 'Kode Barang Harus diisi.',
                    'max_length' => 'Kode Barang diinput Maksimal 30 Karakter.'
                ]
            ],
            'name_items' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => 'Nama Barang Harus diisi.',
                    'max_length' => 'Nama Barang diinput Maksimal 50 Karakter.'
                ]
            ],
            'color_items' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Warna Barang Harus diisi.'
                ]
            ],
            'unit_items' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Jumlah Barang Harus diisi.',
                    'numeric' => 'Jumlah Barang Harus diinput Karakter Angka.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/items')->withInput()->with('validation', $validation);
        }
        $model = new ItemsModel();
        $data = array(
            'id_items' => $this->request->getVar('id_items'),
            'name_items' => $this->request->getVar('name_items'),
            'unit_items' => $this->request->getVar('unit_items'),
            'color_items' => $this->request->getVar('color_items')
        );

        session()->setFlashdata('pesan', 'Items Berhasil ditambah.');

        $model->saveItem($data);
        return redirect()->to('/items');
    }

    public function delete($id)
    {
        $this->itemsModel->deleteItem($id);

        session()->setFlashdata('pesan', 'Items Berhasil diHapus.');
        return redirect()->to('/items');
    }


    public function update()
    {
        //Validasi Input
        if (!$this->validate([
            'id_items' => [
                'rules' => 'required|max_length[30]',
                'errors' => [
                    'required' => 'Kode Barang Harus diisi.',
                    'max_length' => 'Kode Barang diinput Maksimal 30 Karakter.'
                ]
            ],
            'name_items' => [
                'rules' => 'required|max_length[50]',
                'errors' => [
                    'required' => 'Nama Barang Harus diisi.',
                    'max_length' => 'Nama Barang diinput Maksimal 50 Karakter.'
                ]
            ],
            'color_items' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Warna Barang Harus diisi.'
                ]
            ],
            'unit_items' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'Jumlah Barang Harus diisi.',
                    'numeric' => 'Jumlah Barang Harus diinput Karakter Angka.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/items')->withInput()->with('validation', $validation);
        }
        $model = new ItemsModel();
        $data = array(
            'id_items' => $this->request->getVar('id_items'),
            'name_items' => $this->request->getVar('name_items'),
            'unit_items' => $this->request->getVar('unit_items'),
            'color_items' => $this->request->getVar('color_items')
        );

        session()->setFlashdata('pesan', 'Items Berhasil ditambah.');

        $model->updateItem($data);
        return redirect()->to('/items');
    }


    //--------------------------------------------------------------------

}
