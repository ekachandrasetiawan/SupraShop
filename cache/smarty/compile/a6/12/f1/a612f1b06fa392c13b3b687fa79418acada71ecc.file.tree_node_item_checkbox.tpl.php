<?php /* Smarty version Smarty-3.1.19, created on 2015-11-25 09:10:05
         compiled from "C:\xampp\htdocs\SupraShop\admin\themes\default\template\helpers\tree\tree_node_item_checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:832056556cdd3a1ad6-39288987%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a612f1b06fa392c13b3b687fa79418acada71ecc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\admin\\themes\\default\\template\\helpers\\tree\\tree_node_item_checkbox.tpl',
      1 => 1446110212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '832056556cdd3a1ad6-39288987',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'input_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56556cdd3d5ad4_63285510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56556cdd3d5ad4_63285510')) {function content_56556cdd3d5ad4_63285510($_smarty_tpl) {?>
<li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> tree-item-name-disable<?php }?>">
		<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled'])&&$_smarty_tpl->tpl_vars['node']->value['disabled']==true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li><?php }} ?>
