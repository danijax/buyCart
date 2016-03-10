<?php /* Smarty version Smarty-3.1.19, created on 2016-03-07 01:42:13
         compiled from "/Users/danieljames/Documents/prestashop_d/prestashop/admin161mzmrww/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:178390580256dcce6537d0c0-99801504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bae23cf20acfd3eab2561b0597ef800f7ea8af63' => 
    array (
      0 => '/Users/danieljames/Documents/prestashop_d/prestashop/admin161mzmrww/themes/default/template/content.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '178390580256dcce6537d0c0-99801504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dcce653865e7_00593131',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dcce653865e7_00593131')) {function content_56dcce653865e7_00593131($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
