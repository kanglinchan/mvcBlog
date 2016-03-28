<?php
/**
 * Created by PhpStorm.
 * User: CHAN
 * Date: 2016/1/29
 * Time: 1:13
 */

class RbacController extends adminController{

    //添加用户
    public function addUserAction(){

        if($_POST){
            $RbacModel = new RbacModel();

           // $RbacModel->filter_vaaa
            $ret =  $RbacModel->addUser();
            var_dump($ret);
            if( $ret === true ){

                $this->jump("/index.php/admin/Rbac/addUser",'添加新用户成功！', 3);
            }else{
                var_dump("fdddddd");
                $this->jump("/index.php/admin/Rbac/addUser");
            }
        }
        $this->smt->display('addUser.tpl');
    }



    //userList
    public function userListAction(){
        $Rbac = new RbacModel();
        $result = $Rbac->getUserList(0,10);

        //var_dump($result);
        $userArr =array();
        foreach($result as $value){
            $userArr[] = $value['id'];
        }
        //var_dump($userArr);

        $roleUserArr = $Rbac->getRoleByUser($userArr);

        foreach($result as $key=> $value ){
            $result[$key]['roleName'] = $roleUserArr[$key];
        }

        //$this->smt->assign('roleUserArr',$roleUserArr);
        $this->smt->assign('data',$result);
        $this->smt->display('userList.tpl');



    }

    public function userHandlerAction($arg){

        /*var_dump($vag);
        die();*/


        if($_POST){
            $role_id = array_filter($_POST['roleArr'],'intval');
            //var_dump($_POST);
            $user_id = filter_input(INPUT_POST,'user_id',FILTER_SANITIZE_NUMBER_INT);
            $user_role = array();
            foreach($role_id as $value){
                $user_role[] = array('role_id'=>$value, 'user_id'=>$user_id);
            }
            $Rbac = new RbacModel();
            $result =  $Rbac->userHandler($user_role);
            //var_dump($user_role);
            if($result == true){
                $this->jump('/index.php/admin/Rbac/userList','操作成功',3);
            }else{
                $this->jump('/index.php/admin/Rbac/userList','操作失败',3);
            }
            die();
        }


        if(empty($arg['idName'])){
            $this->jump('/index.php/admin/Rbac/userList','参数错误',5);
        }

        $explodeArr = explode('_',$arg['idName']);
        $data['id'] = $explodeArr['0'];
        $data['username'] = $explodeArr['1'];
        $Rbac = new RbacModel();
        $roleArr = $Rbac->getRole();
        $this->smt->assign('roleArr',$roleArr);
        $this->smt->assign('data',$data);
        $this->smt->display('userHandler.tpl');

    }





    //添加权限
    public function addNodeAction($arg){

        if(empty($arg)){
            $argc['pid'] = 0;
            $argc['level'] = 1;
        }else{
            $Arr = explode('_',$arg['pl']);
            $argc['pid'] = $Arr['0'];
            $argc['level'] = $Arr['1'];
        }

        if($_POST) {

            $data =array();
            $data['id'] = null;
            $data['pid'] = filter_var($argc['pid'], FILTER_SANITIZE_STRING);
            $data['level'] = filter_var($argc['level'],FILTER_SANITIZE_STRING);
            $data['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $data['title'] = filterTool::filter_var("INPUT_POST", 'title', 'FILTER_NAME');
            $data['status'] = filter_input(INPUT_POST, 'status', FILTER_VALIDATE_INT);
            $data['sort'] = (empty($_POST['sort'])) ? 1 : filter_input(INPUT_POST, 'sort', FILTER_VALIDATE_INT);

           // var_dump($data);
           // die();
            if ( isset($data['pid']) && isset($data['level']) && !empty($data['name']) && !empty($data['title']) && !empty($data['status'])) {

                if (is_int($data['sort'])) {
                    $Rbac = new RbacModel();

                    var_dump($data);
                    $rst = $Rbac->addNode($data, 'mvc_node');
                    if ($rst) {
                        $this->jump('/index.php/admin/Rbac/nodeHandler', '添加成功，请继续添加！', 3);
                    } else {
                        $this->jump('/index.php/admin/Rbac/addNode', '本次操作失败，请重新输入！', 3);
                    }
                } else {
                    $this->jump('/index.php/admin/Rbac/addNode', '排序表单格式不正确，请重新输入！', 5);
                }
            } else {
                $this->jump("/index.php/admin/Rbac/addNode/pid/0", '表单格式不正确，请重新输入！', 10);
            }
        }

        if($argc['level'] == 1){
            $name = "应用";
        }elseif($argc['level'] == 2){
            $name = '控制器';
        }else{
            $name = '方法';
        }

        $this->smt->assign('data',$argc);
        $this->smt->assign('name',$name);
        $this->smt->display('addNode.tpl');
    }



    //更新节点
    function updateNodeAction($arg){
        $Rbac = new RbacModel();
        $data = $Rbac->showNode($arg['id']);

        if($_POST){
            $data =array();
            $id = filter_var($arg['id'], FILTER_SANITIZE_STRING);
            $data['name'] = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
            $data['title'] = filterTool::filter_var("INPUT_POST", 'title', 'FILTER_NAME');
            $data['status'] = filter_input(INPUT_POST, 'status', FILTER_VALIDATE_INT);
            $data['sort'] = (empty($_POST['sort'])) ? 1 : filter_input(INPUT_POST, 'sort', FILTER_VALIDATE_INT);

            if(isset($id) && isset($data['name']) && isset($data['title']) && isset($data['status']) ){
                $Rbac = new RbacModel;
                $rst =  $Rbac->updateNode($data,$id);
                //判断是否添加成功
                if($rst == true){
                    $this->jump('/index.php/admin/Rbac/nodeHandler','节点更改成功',3);
                }else{
                    $this->jump("/index.php/admin/Rac/updateNode/id/{$id}",'节点更新失败',5);
                }
            }else{
                //判断参数是否正确
                $this->jump("/index.php/admin/Rbac/updateNode/id/{$id}",'表单填写不正确',6);
            }
        }
        if($data['level'] == 1){
            $name = "应用";
        }elseif($data['level'] == 2){
            $name = '控制器';
        }else{
            $name = '方法';
        }
        $this->smt->assign('data',$data);
        $this->smt->assign('name',$name);
        $this->smt->display('updateNode.tpl');
    }



    //删除节点
    public function deleteNodeAction($arg){
        $id = filter_var($arg['id'], FILTER_SANITIZE_NUMBER_INT);

        if(isset($id)){
            $Rbac = new RbacModel();
            $rst = $Rbac->deleteNode($id);

            if($rst){
                $this->jump('/index.php/admin/Rbac/NodeHandler','节点删除成功',3);
            }else{
                $this->jump('/index.php/admin/Rbac/NodeHandler','节点删除失败',3);
            }

        }else{
            $this->jump('/index.php/admin/Rbac/NodeHandler','参数错误',5);
        }
    }


    //节点管理
    function nodeHandlerAction($arg){
        $Rbac = new RbacModel();
        $node = $Rbac->getNode();


        $this->smt->assign('data',$node);
        $this->smt->display('nodeHandler.tpl');

    }


    //添加角色
    function addRoleAction($arg){
        if($_POST){
            $data =array();
            $data['pid'] = empty($arg)? 0 : filter_var($arg['pid'],FILTER_VALIDATE_INT);
            $data['id'] = null;
            $data['name'] = filterTool::filter_var('INPUT_POST','name',"FILTER_NAME");
            $data['remark'] = filterTool::filter_var('INPUT_POST','title',"FILTER_NAME");
            $data['status'] = filter_input(INPUT_POST,'status',FILTER_SANITIZE_NUMBER_INT);
/*            var_dump($data);
            die();*/
            if(isset($data['name']) and isset($data['remark']) and isset($data['status'])){
                $Rbac = new RbacModel();
                $rst= $Rbac->addRole($data);

                if($rst == true){
                    $this->jump("/index.php/admin/Rbac/addRole/pid/{$data['pid']}",'成功添加',6);
                }else{
                    $this->jump("/index.php/admin/Rbac/addRole/pid/{$data['pid']}",'失败',6);
                }
            }else{
                $this->jump("/index.php/admin/Rbac/addRole/pid/{$data['pid']}",'表单填写不正确',6);
            }

        }


        //var_dump($data);

        $this->smt->display('addRole.tpl');
        //$Rbac =
    }


    public function roleListAction(){


        $Rbac = new RbacModel();
        $result = $Rbac->roleList($_SESSION['username']);
        $this->smt->assign("data",$result);
        $this->smt->display('roleList.tpl');
    }

    public function deleteRoleAction($arg){

        $id = filter_var($arg['id'],FILTER_SANITIZE_NUMBER_INT);
        var_dump($id);
        //die();
        if($id == ""){
            $this->jump("/index.php/admin/Rbac/RoleList",'参数错误',6);
        }else{
            $Rbac = new RbacModel();
            $result = $Rbac->deleteRole($id);
            if($Rbac->deleteRole($id)){
                $this->jump("/index.php/admin/Rbac/RoleList",'角色删除成功',3);
            }else{
                $this->jump("/index.php/admin/Rbac/RoleList",'角色删除失败',5);
            }

        }
       /* $Rbac = new RbacModel();
        $Rbac->delteRole('$id');*/
    }


    public function roleHandlerAction($arg){

        $rid = filter_var($arg['rid'],FILTER_SANITIZE_NUMBER_INT);
        if($rid == ""){
            $this->jump("/index.php/admin/Rbac/RoleList",'参数错误',6);
        }

        //$Rbac->roleHandler($id);
       // $data =  $Rbac->showNode();

        //var_dump($data);

        if($_POST){
           // var_dump($_POST);


            if(isset($_POST['access'])){
                $access = $_POST['access'];
                $Arr = array();
                foreach($access as $k => $v){
                    $explodeArr = explode('_',$v);

                    $Arr[] = array('level'=>$explodeArr['0'], 'node_id'=> $explodeArr['1'], 'role_id'=> $rid );
                }
                if(is_array($Arr)){

                    $Rbac =new RbacModel();
                    $Rbac->roleHandler($Arr);
                }else{
                    $this->jump("/index.php/admin/Rbac/RoleList",'提交失败,没有选取权限',3);
                }
            }else{
                //var_dump($Arr);
                $Rbac =new RbacModel();
                $Rbac->roleHandler($rid);
            }




            //var_dump($Arr);

        }


        $Rbac = new RbacModel();
        $nodeArr= $Rbac->getNode();


        $this->smt->assign('data',$nodeArr);
        $this->smt->assign('rid',$rid);

        //var_dump($data);
        $this->smt->display('roleHandler.tpl');
    }




}