<?php /* Smarty version Smarty-3.1.19, created on 2015-11-25 09:09:58
         compiled from "C:\xampp\htdocs\SupraShop\themes\default-bootstrap\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:224656556cd6e75062-20661573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '463a4556f8f1889c0d919fa50cee427813d4b8b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\themes\\default-bootstrap\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1446110214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224656556cd6e75062-20661573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56556cd6e92490_37652522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56556cd6e92490_37652522')) {function content_56556cd6e92490_37652522($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
