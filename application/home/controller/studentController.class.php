<?php
/**
 * Created by PhpStorm.
 * User: CHAN
 * Date: 2016/1/26
 * Time: 10:19
 */

class studentController {
    public function listAction(){
        $stu = new studentModel();
        $data = $stu->getAll();
        //$v = $data;

        // load view file*/

        require './application/home/view/student_list.html';
    }

    //bind student data
    public function infoAction($parameters){
        $id = $parameters['id'];
        $stu = new studentModel();
        $data = $stu->getByID($id);

        require './application/home/view/student_info.html';

    }


}