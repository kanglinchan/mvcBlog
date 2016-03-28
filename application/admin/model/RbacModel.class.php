<?php
/**
 * Created by PhpStorm.
 * User: CHAN
 * Date: 2016/1/29
 * Time: 18:47
 */


class RbacModel extends model{

    //addNode
    public function addNode($data){
        $rst = $this->insert('mvc_node',$data);
        if($rst == true){
            return $rst;
        }else{
            $rst = "数据库操作失败";
        }
    }


    public function showNode($id){
       $rst =  $this->getData('mvc_node',array('id'=> $id));
        return $rst[0];
    }


    //nodeHandler

    public function getNode(){

        /*$sql = "SELECT * FROM  mvc_node ORDER BY sort ASC LIMIT :start, :pagesize";

        $data = array();
        $data[':start'] = $start;
        $data[':pagesize'] = $pagesize;*/


        $rst =  $this->getData('mvc_node');


        return treeTool::getTreeLayer($rst);
    }


    public function deleteNode($id){

        $rst = $this->getData("mvc_node");
        $rst = treeTool::getTree($rst,$id);

        $data[] = $id;
        foreach($rst as $k => $v){
            $data[] = $v['id'];
        }

        $rst = $this->deleteById('mvc_node',$data);
        return $rst;

        /*var_dump($data);
        echo "<br>";

        var_dump($rst);*/

    }


    public function updateNode($data, $id){
        $rst = $this->update('mvc_node',$data, $id);
        if($rst == true){
            return $rst;
        }else{
            $rst = "数据库操作失败";
        }
    }


    public function addRole($data){
        $rst = $this->insert('mvc_role',$data);
        return $rst;
    }

    public function roleList($arg){


        return $res = $this->getData('mvc_role');

    }



    public function deleteRole($rid){
        return $this->deleteById('mvc_role',$rid);
    }

    public function roleHandler($arg){

        if(is_array($arg)){

            try{

                $node_id = array();
                $this->db->beginTransaction();
                 $role_id = $arg['0']['role_id'];
                $sql = "DELETE FROM mvc_access WHERE role_id = :role_id";
                $result =  $this->db->execute($sql, array('role_id'=>$role_id));

                if(!$result){
                    throw new PDOexception('delete sql语句执行失败！',0);
                }

                foreach($arg as $k => $v){
                    $result = $this->insert('mvc_access',$v);

                    if(!$result){
                        //如果失败则抛出异常
                        throw new PDOexception('第$k句sql语句执行失败！', $k);

                    }
                }

                $this->db->commit();

            }catch(PDOexception $e){
                //如果有异常被抛出 则事务失败 执行事务回滚
                $this->db->rollback();
                //输出异常信息
                echo $e->getCode().'-----'.$e->getMessage();
            }

        }
    }



    public function getUserList($start,$pageSize){
         return $this->getData('mvc_user','',$start,$pageSize);

    }

    public function getRole(){
        return $this->getData('mvc_role');
    }


    public function userHandler($arg){
        if(is_array($arg)){
            try{
                $node_id = array();
                $this->db->beginTransaction();
                $user_id = $arg['0']['user_id'];
                $sql = "DELETE FROM mvc_role_user WHERE user_id = :user_id";
                $result =  $this->db->execute($sql, array('user_id'=>$user_id));
                if(!$result){
                    throw new PDOexception('delete sql语句执行失败！',0);
                }
                foreach($arg as $k => $v){
                    $result = $this->insert('mvc_role_user',$v);
                    if(!$result){
                        //如果失败则抛出异常
                        throw new PDOexception('第$k句sql语句执行失败！', $k);
                    }
                }
                $result = $this->db->commit();
                return( $result);
            }catch(PDOexception $e){
                //如果有异常被抛出 则事务失败 执行事务回滚
                $this->db->rollback();
                //输出异常信息
                echo $e->getCode().'-----'.$e->getMessage();
            }
        }else{
            return false;
        }

    }


    public function getRoleByUser($data){
        //return $this->getData('mvc_mvc_role_user',$data);

        //$parameter[1] = $data[0];
        foreach($data as $key=>$value){
            $parameter[1] = $value;
            $sql = "SELECT remark FROM mvc_role WHERE id IN (SELECT role_id FROM mvc_role_user WHERE user_id = ? )";
            $result = $this->db->fetchAll($sql,$parameter);
            //$length = count($result);
            foreach($result as $k => $v){
                $result[$k] = $v['remark'];
                unset($v['remark']);
            }

            $smt[$key] = $result;
        }

        //var_dump($smt);

        return $smt;
    }

}