<?php
/* Smarty version 5.5.1, created on 2025-07-08 09:14:49
  from 'file:welcome.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_686ce1898d8c87_15072370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c63f9297ca31e951f6201d23f17f45e74d5a29ce' => 
    array (
      0 => 'welcome.tpl',
      1 => 1751965843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_686ce1898d8c87_15072370 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Applications/XAMPP/xamppfiles/htdocs/first_project/project_smarty/templates';
$_smarty_tpl->getCompiled()->nocache_hash = '1366791438686ce1898d5768_41366529';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Chào mừng</title>
</head>
<body>
  <h1>Xin chào <?php echo $_smarty_tpl->getValue('ten');?>
!</h1>
  <p>Điểm của bạn là: <strong><?php echo $_smarty_tpl->getValue('diem');?>
</strong></p>
</body>
</html>
<?php }
}
