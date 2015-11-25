<?php /* Smarty version Smarty-3.1.19, created on 2015-11-25 16:53:15
         compiled from "C:\xampp\htdocs\SupraShop\modules\bankwireBCA\payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:241185655850be7e876-74868197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dba557c6fee0f45cc10c878e90e6f2d3096e5a1e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\modules\\bankwireBCA\\payment.tpl',
      1 => 1448442935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241185655850be7e876-74868197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this_path_ssl' => 0,
    'this_path' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5655850beb65e3_10975782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655850beb65e3_10975782')) {function content_5655850beb65e3_10975782($_smarty_tpl) {?><p class="payment_module">
	<a href="<?php echo $_smarty_tpl->tpl_vars['this_path_ssl']->value;?>
payment.php" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwireBCA'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->tpl_vars['this_path']->value;?>
bankwire.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwireBCA'),$_smarty_tpl);?>
" />
		<?php echo smartyTranslate(array('s'=>'Pay by BCA (bank wire) (order process will be longer)','mod'=>'bankwireBCA'),$_smarty_tpl);?>

	</a>
</p><?php }} ?>
