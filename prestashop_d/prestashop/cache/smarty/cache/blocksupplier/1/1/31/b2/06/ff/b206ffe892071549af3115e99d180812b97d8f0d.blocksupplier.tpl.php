<?php /*%%SmartyHeaderCode:166910627356dcd0f13655a6-41056672%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b206ffe892071549af3115e99d180812b97d8f0d' => 
    array (
      0 => '/Users/danieljames/Documents/prestashop_d/prestashop/themes/buycart-theme/modules/blocksupplier/blocksupplier.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166910627356dcd0f13655a6-41056672',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56df8da5eee281_06106864',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56df8da5eee281_06106864')) {function content_56df8da5eee281_06106864($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://localhost:8080/index.php?controller=supplier" title="Suppliers">
					Suppliers
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="last_item">
                					<a 
					href="http://localhost:8080/index.php?id_supplier=1&amp;controller=supplier" 
					title="More about Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">All suppliers</option>
													<option value="http://localhost:8080/index.php?id_supplier=1&amp;controller=supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
