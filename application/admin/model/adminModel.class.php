<?php
/**
 * Created by PhpStorm.
 * User: CHAN
 * Date: 2016/1/26
 * Time: 16:32
 */

class adminModel extends model{
   public  function checkByLogin($username,$password){
       //$this->filter(array('username','password'), trim);

       //if($username )
      // $username = $_POST['username'];
      // $password = $_POST['password'];


       $sql = "SELECT password, salt from mvc_user where username = :username";
       $data = $this->db->fetchRow($sql, array(':username' => $username));

       if(!$data){
            return 'password is empty';
       }

/*        $rst =   md5($password.$data['salt']) == $data['password'];
        var_dump($rst);
       die();*/
       return md5($password.$data['salt']) == $data['password'];
   }

}