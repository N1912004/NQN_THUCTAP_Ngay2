<?php
require_once __DIR__ . '/vendor/autoload.php';

use Smarty\Smarty; 
// Trong phiên bản mới smarty nằm trong Smarty nên cần sử dụng use để chỉ rõ 
/*namespace Smarty;
class Smarty {
    // ...
}*/
// Cấu hình
$smarty = new Smarty();   
$smarty->setTemplateDir(__DIR__ . "/templates/");
$smarty->setCompileDir(__DIR__ . "/templates_c/");
$smarty->setConfigDir(__DIR__ . "/configs/");
$smarty->setCacheDir(__DIR__ . "/cache/");

// Cache
$smarty->caching = true;
$smarty->cache_lifetime = 120;

// Code
$ten="Nguyễn Quốc ";
$diem =9.0;
$smarty->assign('ten', $ten);  
$smarty->assign('diem', $diem); 


// Template
$smarty->display("welcome.tpl"); 
?>
