<?php /*%%SmartyHeaderCode:15369565587afc71b07-48106010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32b922084c72a5a780fd11a5687eb73e41bada60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\themes\\default-bootstrap\\modules\\blocknewsletter\\blocknewsletter.tpl',
      1 => 1446110214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15369565587afc71b07-48106010',
  'variables' => 
  array (
    'link' => 0,
    'msg' => 0,
    'nw_error' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565587afce6743_45019715',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565587afce6743_45019715')) {function content_565587afce6743_45019715($_smarty_tpl) {?><!-- Block Newsletter module-->
<div id="newsletter_block_left" class="block">
	<h4>Newsletter</h4>
	<div class="block_content">
		<form action="//localhost/SupraShop/" method="post">
			<div class="form-group" >
				<input class="inputNew form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="Masukkan alamat email Anda" />
                <button type="submit" name="submitNewsletter" class="btn btn-default button button-small">
                    <span>Ok</span>
                </button>
				<input type="hidden" name="action" value="0" />
			</div>
		</form>
	</div>
    
</div>
<!-- /Block Newsletter module-->
<?php }} ?>
