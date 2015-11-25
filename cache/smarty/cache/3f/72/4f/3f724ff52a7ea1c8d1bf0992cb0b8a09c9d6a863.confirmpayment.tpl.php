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
    'a3a77d92b79d4006dbe4d38ea29a14cee9eec249' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\themes\\default-bootstrap\\errors.tpl',
      1 => 1446110214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26176565587c0f087e7-51519116',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565588e780cc49_76279949',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565588e780cc49_76279949')) {function content_565588e780cc49_76279949($_smarty_tpl) {?><div id="confirmpayment">
    
<div id="mywishlist">
		
	<h1 class="page-heading">Konfirmasi Pembayaran</h1>
	
							

			<form id="form_wishlist" class="std box" method="post"  action="/SupraShop/module/confirmpayment/confirmpayment">
			<fieldset>
				<h3 class="page-subheading">Konfirmasi Pembayaran</h3>
				<div class="form-group">
					<input type="hidden" value="" name="token">
					<label for="name" class="align_right">
						<div class="required">*</div> Order No
					</label>
					<select id="id_order" class="form-control inputTxt" name="id_order">
							<option value="">Select Order No</option>
															<option value="6">YETGJHQSF</option>
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
					<input type="text" value="2015-11-25" class="inputTxt form-control" name="payment_date" id="datepicker">
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
