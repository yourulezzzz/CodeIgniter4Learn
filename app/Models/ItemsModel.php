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

        //$builder = $this->db->TABLE('t_items');
        //$builder = $this->SELECT('id_items', 'name_items', 'unit_items', 'color_items');
        //$builder = $this->FROM('t_items');
        //$builder = $this->JOIN('m_item', 'id_item = id_items', 'left');
        //if ($id != null) {
        //    $builder = $this->WHERE('id_items', $id)->andWHERE('name_items', $id);
        //}
        //$builder = $this->group_by('id_items as id_item');
        //$builder = $this->order_by('id_items', 'asc');
        //return  $builder->get();
    }

    public function saveItem($data)
    {
        $query = $this->db->table('t_items')->insert($data);
        return $query;
    }

    public function updateItem($data, $id)
    {
        $query = $this->db->table('t_items')->update($data, array('id_items' => $id));
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
