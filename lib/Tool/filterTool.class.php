<?php
/**
 * Created by PhpStorm.
 * User: CHAN
 * Date: 2016/2/3
 * Time: 0:06
 */
    class filterTool{


        public static  function filter_var( $type="INPUT_POST",$value, $argument="" ){
            if ($type != "INPUT_POST") {
                $var = $_GET[$value];
            }
            $var = $_POST[$value];

            $result = $var;

            switch ($argument) {

                case "FILTER_PHONE":
                    if (!preg_match("/^(?<national>\+?(?:86)?)(?<separator>\s?-?)(?<phone>(?<vender>(13|15|18)[0-9])(?<area>\d{4})(?<id>\d{4}))$/", $var) && !empty($var)) {
                        $result = false;
                    }
                    break;

                case "FILTER_NAME":
                    if (!preg_match("/^[\x{4e00}-\x{9fa5}A-Za-z0-9_]{3,20}$/u", $var)) {
                        $result = false;
                    }
                    break;

                case "FILTER_PASSWORD":
                    if (!preg_match("/^[a-zA-Z\d_]{6,}$/", $var)) {
                        $result = false;
                    }
                    break;

                default:
                    $_POST[$value] = strip_tags($_POST[$value]);
            }

            return $result;

        }

}