<?php /* Smarty version Smarty-3.1.19, created on 2015-11-25 16:13:28
         compiled from "C:\xampp\htdocs\SupraShop\modules\confirmpayment\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1522456557bb8cf2346-47027176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9de8fb0ef10ccdc845f6aae28cc4828cb971e57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\modules\\confirmpayment\\my-account.tpl',
      1 => 1448441258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1522456557bb8cf2346-47027176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56557bb8d3ab00_97818058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56557bb8d3ab00_97818058')) {function content_56557bb8d3ab00_97818058($_smarty_tpl) {?><!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('confirmpayment','confirmpayment',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Confirm Payment','mod'=>'confirmpayment'),$_smarty_tpl);?>
">
	<i class="icon-file-o"></i>
	<span>Konfirmasi Pembayaran</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
