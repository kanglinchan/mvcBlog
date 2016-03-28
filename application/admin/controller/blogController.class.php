<?php
/**
 * Created by PhpStorm.
 * User: CHAN
 * Date: 2016/2/22
 * Time: 0:03
 */
    class blogController extends adminController{



        function addArticleAction(){


            echo var_dump($_POST);

            $this->smt->display('addArticle.tpl');
        }
    }