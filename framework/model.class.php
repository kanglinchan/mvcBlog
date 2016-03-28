<?php

/**
 * Created by PhpStorm.
 * User: CHAN
 * Date: 2016/1/25
 * Time: 17:17
 */
class model
{
    protected $db;
    public function __construct()
    {
        $this->initDB();
    }

    private function initDB(){
        //instance mysqlpdo
        $this->db = MYSQLPDO::getInstance($GLOBALS['config']['db']);


    }







    /*
     * 插入节点
     * @access protected
     * @params array $data
     * @params string $tableName
     * @return bool $flag
     *
     * */
    protected function insert($tableName,$data){

        $sql = "INSERT INTO ".$tableName. " SET";

        $_params = array();

        foreach($data as $k=>$v){
            $sql.= " $k = :$k ,";
            $_params[':'.$k] = $v;
        }

        $sql = rtrim($sql,',');
        //var_dump($sql);
        //var_dump( $_params);


        $this->db->execute($sql, $_params ,$flag);

        return $flag;
    }

    /*
     * 更新数据
     * @params  array $data
     * @params  int $id
     * @return bool
     * @access protected
     */
    protected function update($tableName,$data,$id){
        $sql = "UPDATE ".$tableName." SET";

        foreach($data as $k => $v){
            $sql .= " $k = :$k,";
            $parameter[':'.$k] = $v;
        }
        $sql = rtrim($sql,',');
        $sql = $sql." WHERE id = :id";
        $parameter[':id'] = $id;

        $smt =  $this->db->execute($sql,$parameter,$flag);


        return $flag;



    }

    /*
     * 查询节点
     * @params string $tableName
     * @params array $data
     * @access protected
     * @return arr
     */
    protected function getData($tableName,$data=array(),$start = null ,$pageSize = null){

        $parameter =array();
        if(empty($data)){
            $sql = "SELECT * FROM ".$tableName." ORDER BY id ASC";
           // $rst = $this->db->fetchAll($sql,$data);
        }else{

            $sql = "SELECT * FROM ".$tableName." WHERE";
            //$sql = $sql.$data['']
            //$parameter = array();
            foreach($data as $k => $v){
                $sql .= " $k = :$k OR";
                $parameter[':'.$k] = $v;
            }
            $sql = rtrim($sql, 'OR');

        }
        if($pageSize != null ){

            $sql = $sql." LIMIT :start , :pageSize";
            $parameter[':start'] = intval($start);
            $parameter[':pageSize'] = intval($pageSize);


        }
        $rst = $this->db->fetchAll($sql,$parameter);
        return $rst;
    }


    /*
     * 删除数据
     * @access protected
     * @params string $tableName
     * @params array $data or $id
     * @params string $in
     *
     * @retrun bool
     */
    protected function deleteById($tableName,$arg){

        $parameter = array();

        if(is_array($arg)){
            $sql = "DELETE FROM ".$tableName." WHERE id IN(";
            foreach($arg as $k => $v){
                $sql .= " ?,";
                $parameter[$k+1] = $v;
            }
            $sql = substr($sql,0,-1);
            $sql = $sql." )";

        }else{
            $sql = "DELETE FROM ".$tableName." WHERE id = :id";
            $parameter =array(':id' => $arg);
           /* var_dump($arg);*/
        }


          $smt = $this->db->execute($sql,$parameter,$flag);

/*        echo "---------------";
        var_dump($flag);
        echo "---------------";*/

            return $flag;

    }















    //filter
    protected function filter($arr, $func){
        foreach($arr as $v){
            if(!isset($_POST[$v])){
                $_POST[$v]='';
            }
           $_POST[$v] = $func($_POST[$v]);
        }
    }

    protected function filter_value($type="INPUT_POST",$value, $argument=""){

        if($type != "INPUT_POST"){
            $var = $_GET[$value];
        }
         $var = $_POST[$value];

        $result = $var;

        switch ($argument)
        {

            case "FILTER_PHONE":
                if( !preg_match("/^(?<national>\+?(?:86)?)(?<separator>\s?-?)(?<phone>(?<vender>(13|15|18)[0-9])(?<area>\d{4})(?<id>\d{4}))$/", $var) && !empty($var) ){
                    $result = false;
                }
                break;

            case "FILTER_USERNAME":
                if( !preg_match("/^[a-zA-Z]\w{4,17}$/", $var) ){
                    $result = false;
                }
                break;

            case "FILTER_PASSWORD":
                if( !preg_match("/^\w{5,17}$/", $var) ){
                    $result = false;
                }
                break;

            default:
                $_POST[$value] = strip_tags($_POST[$value]);
        }

        return $result;

    }


}