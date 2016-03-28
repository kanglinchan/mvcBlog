<?php

/**
 * Created by PhpStorm.
 * User: CHAN
 * Date: 2016/1/25
 * Time: 17:31
 */
class studentModel extends model
{
    public function getAll(){
        $data = $this->db->fetchAll("select * from student");
        return $data;
    }

    public function getByID($id){
        $data = $this->db->fetchRow("SELECT  * FROM student WHERE id = {$id}");
        return $data;
    }
}