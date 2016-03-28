<?php
/**
 * Created by PhpStorm.
 * User: CHAN
 * Date: 2016/1/25
 * Time: 15:24
 */

class MYSQLPDO{
    private $dbConfig = array(
        'db' => 'mysql',
        'host' => 'localhost',
        'port' => '3306',
        'user' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'dbname' => '',
    );

    //Singleton pattern
    private static $instance;

    //pdo instance
    private $db;

    private function __construct($param){
        //initialization attribute
        $this->dbConfig = array_merge($this->dbConfig, $param);
        //connect service
        $this->connect();
    }

    // get singleton object
    public static function getInstance($params = array() ){
        if( !self::$instance instanceof self ){
            self::$instance = new self($params);
        }
        return self::$instance;
    }

    //private clone
    private function __clone(){}

    private function connect(){
        try{

          $dsn = "{$this->dbConfig['db']}:host = {$this->dbConfig['host']};
            port = {$this->dbConfig['host']};
            dbname={$this->dbConfig['dbname']};
            charset={$this->dbConfig['charset']}";

            //instance pdo
            $this->db = new PDO($dsn, $this->dbConfig['user'], $this->dbConfig['password']);

            //设置错误处理机制
            $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            //ser character
            $this->db->query("set names {$this->dbConfig['charset']}");
        }catch (PDOException $e){
            die("DATABASE CONNECT FAULT:{$e->getMessage()}");
        }
    }


    //执行sql
    public function query($sql){
        $ret = $this->db->query($sql);
        if($ret === false){
            $error = $this->db->errorInfo();
            die("数据库操作失败 error：{error[1]}({$error[0]}):{$error[2]}");
        }
        return $ret;
    }




    public function execute($sql, $data, &$flag = true,$var_type = null ){

        $stmt = $this->db->prepare($sql);

        //绑定参数
        foreach($data as $key=>$value){
            if (is_null($var_type)) {
                switch (true) {
                    case is_bool($value):
                        $var_type = PDO::PARAM_BOOL;
                        break;
                    case is_int($value):
                        $var_type = PDO::PARAM_INT;
                        break;
                    case is_null($value):
                        $var_type = PDO::PARAM_NULL;
                        break;
                    default:
                        $var_type = PDO::PARAM_STR;
                }
            }
            $stmt->bindValue($key, $value, $var_type);
        }
        //执行
        $flag = $stmt->execute();

        //$flag = $stmt->execute($data);
        return $stmt;
    }



    public function fetchRow($sql,$data=array()){
        return $this->execute($sql,$data)->fetch(PDO::FETCH_ASSOC);
    }

    public function fetchAll($sql,$data=array()){
        return $this->execute($sql,$data)->fetchALL(PDO::FETCH_ASSOC);
    }

    public function beginTransaction(){
       $smt =  $this->db->beginTransaction();
        return($smt);
        //var_dump($smt);
    }

    public function rollback(){
        $smt = $this->db->rollback();
        return($smt);
       // var_dump($smt);
    }

    public function commit(){
        $smt = $this->db->rollback();
        return($smt);
       // var_dump($smt);
    }



    /*public function Transaction($data =array()){

    if($data == ''){
        die('参数错误');
    }


        try{

            $this->db->beginTransaction(); // 开启一个事务
            $row = null;
            foreach($data as $k=>$v){
                $row = $this->execute($sql,$data);
            }
        }




        try {






            stmt->execute();

    $rows = $stmt->rowCount();

    if($rows<1){
        //如果失败则抛出异常
        throw new PDOexception('第一句sql语句执行失败！', '01');

    }



            $this->db->beginTransaction(); // 开启一个事务
            $row = null;
            $row = $pdo->exec("xxx"); // 执行第一个 SQL
            if (!$row)
                throw new PDOException('提示信息或执行动作'); // 如出现异常提示信息或执行动作
            $row = $pdo->exec("xxx"); // 执行第二个 SQL
            if (!$row)
                throw new PDOException('提示信息或执行动作');
            $pdo->commit();
        } catch (PDOException $e) {
            $pdo->rollback(); // 执行失败，事务回滚
            exit($e->getMessage());
        }





        }


    */
















}