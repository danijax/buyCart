<?php /* Smarty version Smarty-3.1.19, created on 2016-03-07 01:32:26
         compiled from "/Users/danieljames/Documents/prestashop_d/prestashop/admin/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:87739325556dccc1a97c148-64360183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97513cb967d3bf6366f2dfc2cced81f2e93cba48' => 
    array (
      0 => '/Users/danieljames/Documents/prestashop_d/prestashop/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87739325556dccc1a97c148-64360183',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dccc1a981e49_14105585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dccc1a981e49_14105585')) {function content_56dccc1a981e49_14105585($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
