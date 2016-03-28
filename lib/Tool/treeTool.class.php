<?php
/**
 * Created by PhpStorm.
 * User: CHAN
 * Date: 2016/2/12
 * Time: 14:50
 */

    class treeTool {

        static public $treeList = array();
        public static function getTree($data = array(), $pid = 0){

            foreach($data as $key => $value){

                if($value['pid'] == $pid){


                    self::$treeList[] = $value;
                    unset($data[$key]);
                    self::getTree($data,$value['id']);
                }
            }

            return self::$treeList;
        }



        public static function getTreeLayer($data, $pid =0){
            $arr = array();
            foreach($data as $key => $value){
                if($value['pid'] == $pid){
                    $value['child'] = self::getTreeLayer($data,$value['id']);
                    $arr[] = $value;
                }
            }
            return $arr;
        }





    }