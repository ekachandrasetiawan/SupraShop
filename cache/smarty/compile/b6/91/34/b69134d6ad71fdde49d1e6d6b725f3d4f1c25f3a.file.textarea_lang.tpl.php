<?php /* Smarty version Smarty-3.1.19, created on 2015-11-25 15:21:31
         compiled from "C:\xampp\htdocs\SupraShop\admin304yd26rz\themes\default\template\controllers\products\textarea_lang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2782956556f8bd392e5-98817573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b69134d6ad71fdde49d1e6d6b725f3d4f1c25f3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\admin304yd26rz\\themes\\default\\template\\controllers\\products\\textarea_lang.tpl',
      1 => 1446110212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2782956556f8bd392e5-98817573',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'maxchar' => 0,
    'input_id' => 0,
    'input_name' => 0,
    'class' => 0,
    'maxlength' => 0,
    'input_value' => 0,
    'max' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56556f8bdc7414_15352542',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56556f8bdc7414_15352542')) {function content_56556f8bdc7414_15352542($_smarty_tpl) {?>

<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
		<div class="translatable-field row lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
">
			<div class="col-lg-9">
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['maxchar']->value)&&$_smarty_tpl->tpl_vars['maxchar']->value) {?>
				<div class="input-group">
					<span id="<?php if (isset($_smarty_tpl->tpl_vars['input_id']->value)) {?><?php echo $_smarty_tpl->tpl_vars['input_id']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
<?php }?>_counter" class="input-group-addon">
						<span class="text-count-down"><?php echo intval($_smarty_tpl->tpl_vars['maxchar']->value);?>
</span>
					</span>
	<?php }?>
					<textarea id="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" class="<?php if (isset($_smarty_tpl->tpl_vars['class']->value)) {?><?php echo $_smarty_tpl->tpl_vars['class']->value;?>
<?php } else { ?>textarea-autosize<?php }?>"<?php if (isset($_smarty_tpl->tpl_vars['maxlength']->value)&&$_smarty_tpl->tpl_vars['maxlength']->value) {?> maxlength="<?php echo intval($_smarty_tpl->tpl_vars['maxlength']->value);?>
"<?php }?><?php if (isset($_smarty_tpl->tpl_vars['maxchar']->value)&&$_smarty_tpl->tpl_vars['maxchar']->value) {?> data-maxchar="<?php echo intval($_smarty_tpl->tpl_vars['maxchar']->value);?>
"<?php }?>><?php if (isset($_smarty_tpl->tpl_vars['input_value']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {?><?php echo smarty_modifier_htmlentitiesUTF8($_smarty_tpl->tpl_vars['input_value']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]);?>
<?php }?></textarea>
					<span class="counter" data-max="<?php if (isset($_smarty_tpl->tpl_vars['max']->value)) {?><?php echo intval($_smarty_tpl->tpl_vars['max']->value);?>
<?php }?><?php if (isset($_smarty_tpl->tpl_vars['maxlength']->value)) {?><?php echo intval($_smarty_tpl->tpl_vars['maxlength']->value);?>
<?php }?><?php if (!isset($_smarty_tpl->tpl_vars['max']->value)&&!isset($_smarty_tpl->tpl_vars['maxlength']->value)) {?>none<?php }?>"></span>
			<?php if (isset($_smarty_tpl->tpl_vars['maxchar']->value)&&$_smarty_tpl->tpl_vars['maxchar']->value) {?>
				</div>
			<?php }?>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value)>1) {?>
			</div>
			<div class="col-lg-2">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
					<li><a href="javascript:tabs_manager.allow_hide_other_languages = false;hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	<?php }?>
<?php } ?>
<script type="text/javascript">
	<?php if (isset($_smarty_tpl->tpl_vars['maxchar']->value)&&$_smarty_tpl->tpl_vars['maxchar']->value) {?>
		$(document).ready(function(){
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
			countDown($("#<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
"), $("#<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
_counter"));
		<?php } ?>
		});
	<?php }?>
	$(".textarea-autosize").autosize();
</script>

<?php }} ?>
