<?php /*%%SmartyHeaderCode:72717367256dcd0f1212f17-19038342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cd9f9deee6c3be120052a425ee4fb7a1f3669b3' => 
    array (
      0 => '/Users/danieljames/Documents/prestashop_d/prestashop/themes/buycart-theme/modules/blockspecials/blockspecials.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72717367256dcd0f1212f17-19038342',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56df8dcd7b12d2_61188182',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56df8dcd7b12d2_61188182')) {function content_56df8dcd7b12d2_61188182($_smarty_tpl) {?>
<!-- MODULE Block specials -->
<div id="special_block_right" class="block">
	<p class="title_block">
        <a href="http://localhost:8080/index.php?controller=prices-drop" title="Specials">
            Specials
        </a>
    </p>
	<div class="block_content products-block">
    		<ul>
        	<li class="clearfix">
            	<a class="products-block-image" href="http://localhost:8080/index.php?id_product=7&amp;controller=product">
                    <img 
                    class="replace-2x img-responsive" 
                    src="http://localhost:8080/img/p/2/0/20-small_default.jpg" 
                    alt="" 
                    title="Printed Chiffon Dress" />
                </a>
                <div class="product-content">
                	<h5>
                        <a class="product-name" href="http://localhost:8080/index.php?id_product=7&amp;controller=product" title="Printed Chiffon Dress">
                            Printed Chiffon Dress
                        </a>
                    </h5>
                                        	<p class="product-description">
                            Printed chiffon knee length dress...
                        </p>
                                        <div class="price-box">
                    	                        	<span class="price special-price">
                                                                    ₦ 17                            </span>
                                                                                                                                 <span class="price-percent-reduction">-20%</span>
                                                                                         <span class="old-price">
                                                                    ₦ 22                            </span>
                            
                                            </div>
                </div>
            </li>
		</ul>
		<div>
			<a 
            class="btn btn-default button button-small" 
            href="http://localhost:8080/index.php?controller=prices-drop" 
            title="All specials">
                <span>All specials<i class="icon-chevron-right right"></i></span>
            </a>
		</div>
    	</div>
</div>
<!-- /MODULE Block specials -->
<?php }} ?>
