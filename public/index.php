<?php
define('ROOT_PATH',str_replace('public','', $_SERVER["DOCUMENT_ROOT"])); //定数の定義,

$parse = parse_url($_SERVER["REQUEST_URI"]);

if(mb_substr($parse['path'],-1) === '/'){
  $parse['path'] .= $_SERVER["SCRIPT_NAME"];
}
require_once(ROOT_PATH.'Views'.$parse['path']);
?>
