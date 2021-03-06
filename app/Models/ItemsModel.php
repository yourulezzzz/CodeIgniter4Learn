<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemsModel extends Model
{

    protected $table = 't_items';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['id_items', 'name_items', 'unit_items', 'color_items'];

    public function getItems($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }

    public function saveItem($data)
    {
        $query = $this->db->table('t_items')->insert($data);
        return $query;
    }

    public function updateItem($data)
    {
        $query = $this->db->table('t_items')->update($data, array('id_items' => $data));
        return $query;
    }

    public function deleteItem($id)
    {
        $query = $this->db->table('t_items')->delete(array('id' => $id));
        return $query;
    }

    public function searchItems($keyword)
    {
        //$builder = $this->table('t_items');
        //$builder->like('id_items', $keyword);
        //$builder->like('name_items', $keyword);
        //return $builder;

        return $this->table('t_items')->like('name_items', $keyword)->orLike('id_items', $keyword);
    }
}
