<?php /* Smarty version Smarty-3.1.19, created on 2015-11-25 15:21:10
         compiled from "C:\xampp\htdocs\SupraShop\admin304yd26rz\themes\default\template\helpers\list\list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2160256556f76196700-59671956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c02fbbaa2c65e09f199c12115dd4c08c36abbe0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\admin304yd26rz\\themes\\default\\template\\helpers\\list\\list_action_delete.tpl',
      1 => 1446110212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2160256556f76196700-59671956',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56556f761afd12_82495824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56556f761afd12_82495824')) {function content_56556f761afd12_82495824($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>