<?php /* Smarty version Smarty-3.1.19, created on 2015-11-25 17:04:48
         compiled from "C:\xampp\htdocs\SupraShop\modules\confirmpayment\views\templates\front\confirmpayment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26176565587c0f087e7-51519116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f724ff52a7ea1c8d1bf0992cb0b8a09c9d6a863' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\modules\\confirmpayment\\views\\templates\\front\\confirmpayment.tpl',
      1 => 1448441258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26176565587c0f087e7-51519116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'navigationPipe' => 0,
    'confirmation' => 0,
    'alreadySent' => 0,
    'request_uri' => 0,
    'orders' => 0,
    'order' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565587c100c179_57710300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565587c100c179_57710300')) {function content_565587c100c179_57710300($_smarty_tpl) {?><div id="confirmpayment">
    <?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?>
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'confirmpayment'),$_smarty_tpl);?>
</a>
        <span class="navigation-pipe"><?php echo $_smarty_tpl->tpl_vars['navigationPipe']->value;?>
</span>
        Konfirmasi Pembayaran
		
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<div id="mywishlist">
		
	<h1 class="page-heading">Konfirmasi Pembayaran</h1>
	
		<?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)) {?>
			<p class="alert alert-success"><?php echo smartyTranslate(array('s'=>'Konfirmasi Pemesanan Berhasil Dikirim.'),$_smarty_tpl);?>
</p>
		<?php } elseif (isset($_smarty_tpl->tpl_vars['alreadySent']->value)) {?>
			<!-- <p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'lakukan Konfimrasi Pemesanan'),$_smarty_tpl);?>
</p> -->
			<p class="alert alert-success"><?php echo smartyTranslate(array('s'=>'Konfirmasi Pemesanan Berhasil Dikirim.'),$_smarty_tpl);?>
</p>
		<?php } else { ?>
		<?php }?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

			<form id="form_wishlist" class="std box" method="post"  action="<?php echo $_smarty_tpl->tpl_vars['request_uri']->value;?>
">
			<fieldset>
				<h3 class="page-subheading">Konfirmasi Pembayaran</h3>
				<div class="form-group">
					<input type="hidden" value="" name="token">
					<label for="name" class="align_right">
						<div class="required">*</div> Order No
					</label>
					<select id="id_order" class="form-control inputTxt" name="id_order">
							<option value="">Select Order No</option>
							<?php  $_smarty_tpl->tpl_vars['order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['order']->key => $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->_loop = true;
?>
								<option value="<?php echo intval($_smarty_tpl->tpl_vars['order']->value['id_order']);?>
"<?php if (isset($_REQUEST['id_order'])&&$_REQUEST['id_order']==$_smarty_tpl->tpl_vars['order']->value['id_order']) {?> selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
							<?php } ?>
					</select>

					<label for="name" class="align_right">
						<div class="required">*</div>Nama Bank
					</label>
					<input type="text" value="" class="inputTxt form-control" name="nama_bank" id="nama_bank">

					<label for="name" class="align_right">
						<div class="required">*</div> Atas Nama
					</label>
					<input type="text" value="" class="inputTxt form-control" name="reg_account_bank" id="reg_account_bank">

					<label for="name" class="align_right">
						<div class="required">*</div> Rekening Tujuan
					</label>
					<select name="data_rek" class="inputTxt form-control">
						<option value="">Select Rekening Tujuan</option>
						<option value="BANK PERMATA">BANK PERMATA</option>
						<option value="BANK BCA">BANK BCA</option>
					</select>

					<label for="name" class="align_right">
						<div class="required">*</div>  Jumlah Pembayaran
					</label>
					<input type="text" value="" class="inputTxt form-control" name="payment" id="payment">

					<label for="name" class="align_right">
						<div class="required">*</div>  Tanggal Pembayaran
					</label>
					<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" class="inputTxt form-control" name="payment_date" id="datepicker">
				</div>
				<p class="submit">
                    <button name="submitconfirmpayment" type="submit" class="btn btn-default button button-medium" id="submitconfirmpayment">
                    	<span>Confirm Payment<i class="icon-chevron-right right"></i></span>
                    </button>
				</p>
			</fieldset>
		</form>
		
</div>

</div><?php }} ?>
