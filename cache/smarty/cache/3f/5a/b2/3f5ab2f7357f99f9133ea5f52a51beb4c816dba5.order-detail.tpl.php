<?php /*%%SmartyHeaderCode:29352565587fb9759b8-46887854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f5ab2f7357f99f9133ea5f52a51beb4c816dba5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\themes\\default-bootstrap\\order-detail.tpl',
      1 => 1446110214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29352565587fb9759b8-46887854',
  'variables' => 
  array (
    'order' => 0,
    'reorderingAllowed' => 0,
    'opc' => 0,
    'link' => 0,
    'carrier' => 0,
    'shop_name' => 0,
    'invoice' => 0,
    'invoiceAllowed' => 0,
    'is_guest' => 0,
    'order_history' => 0,
    'state' => 0,
    'followup' => 0,
    'address_delivery' => 0,
    'dlv_adr_fields' => 0,
    'field_item' => 0,
    'address_words' => 0,
    'word_item' => 0,
    'deliveryAddressFormatedValues' => 0,
    'address_invoice' => 0,
    'inv_adr_fields' => 0,
    'invoiceAddressFormatedValues' => 0,
    'HOOK_ORDERDETAILDISPLAYED' => 0,
    'return_allowed' => 0,
    'priceDisplay' => 0,
    'use_tax' => 0,
    'currency' => 0,
    'products' => 0,
    'product' => 0,
    'group_use_tax' => 0,
    'productId' => 0,
    'productAttributeId' => 0,
    'customizedDatas' => 0,
    'customizationPerAddress' => 0,
    'customizationId' => 0,
    'customization' => 0,
    'type' => 0,
    'CUSTOMIZE_FILE' => 0,
    'datas' => 0,
    'pic_dir' => 0,
    'data' => 0,
    'CUSTOMIZE_TEXTFIELD' => 0,
    'customizationFieldName' => 0,
    'logable' => 0,
    'img_dir' => 0,
    'productQuantity' => 0,
    'discounts' => 0,
    'discount' => 0,
    'carriers' => 0,
    'line' => 0,
    'messages' => 0,
    'message' => 0,
    'errors' => 0,
    'error' => 0,
    'message_confirmation' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565587fc00def3_36378539',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565587fc00def3_36378539')) {function content_565587fc00def3_36378539($_smarty_tpl) {?><div class="box box-small clearfix">
		<form id="submitReorder" action="http://localhost/SupraShop/order" method="post" class="submit">
		<input type="hidden" value="6" name="id_order"/>
		<input type="hidden" value="" name="submitReorder"/>

		<a href="#" onclick="$(this).closest('form').submit(); return false;" class="button btn btn-default button-medium pull-right"><span>Order kembali<i class="icon-chevron-right right"></i></span></a>
	</form>
		<p class="dark">
		<strong>Referensi Pembelian YETGJHQSF - tanggal 2015-11-25</strong>
	</p>
</div>
<div class="info-order box">
	<p><strong class="dark">Kurir</strong> Suprabakti Mandiri</p>	<p><strong class="dark">Metode pembayaran</strong> <span class="color-myaccount">Transfer Bank</span></p>
			</div>

<h1 class="page-heading">Ikuti proses pembelian langkah demi langkah</h1>
<div class="table_block">
	<table class="detail_step_by_step table table-bordered">
		<thead>
			<tr>
				<th class="first_item">Tanggal</th>
				<th class="last_item">Status:</th>
			</tr>
		</thead>
		<tbody>
					<tr class="first_item item">
				<td class="step-by-step-date">2015-11-25</td>
				<td><span style="background-color:#4169E1; border-color:#4169E1;" class="label">Menunggu pembayaran via transfer bank</span></td>
			</tr>
				</tbody>
	</table>
</div>


<div class="adresses_bloc">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<ul class="address alternate_item box">
				<li><h3 class="page-subheading">Alamat pengiriman (Alamat Saya)</h3></li>
																							<li><span class="address_firstname">Eka Chandra</span> <span class="address_lastname">Setiawan</span></li>
														<li class="address_company"></li>
																												<li><span class="address_vat_number"></span></li>
																												<li><span class="address_address1">Jakarta Utara</span></li>
																												<li><span class="address_address2"></span></li>
																												<li><span class="address_postcode">14350</span> <span class="address_city">Jakarta Utara</span></li>
																												<li><span class="address_State:name">Jakarta</span></li>
																												<li><span class="address_Country:name">Indonesia</span></li>
																												<li><span class="address_phone"></span></li>
														<li class="address_phone_mobile">081288768191</li>
												</ul>
		</div>
		<div class="col-xs-12 col-sm-6">
			<ul class="address item  box">
				<li><h3 class="page-subheading">Alamat penagihan (Alamat Saya)</h3></li>
																							<li><span class="address_firstname">Eka Chandra</span> <span class="address_lastname">Setiawan</span></li>
														<li class="address_company"></li>
																												<li><span class="address_vat_number"></span></li>
																												<li><span class="address_address1">Jakarta Utara</span></li>
																												<li><span class="address_address2"></span></li>
																												<li><span class="address_postcode">14350</span> <span class="address_city">Jakarta Utara</span></li>
																												<li><span class="address_State:name">Jakarta</span></li>
																												<li><span class="address_Country:name">Indonesia</span></li>
																												<li><span class="address_phone"></span></li>
														<li class="address_phone_mobile">081288768191</li>
												</ul>
		</div>
	</div>
</div>

<form action="http://localhost/SupraShop/pantau-order" method="post"><div id="order-detail-content" class="table_block table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
								<th class="first_item">Referensi</th>
				<th class="item">Produk</th>
				<th class="item">Jumlah</th>
								<th class="item">Harga Satuan</th>
				<th class="last_item">Total Harga</th>
			</tr>
		</thead>
		<tfoot>
						<tr class="item">
				<td colspan="1">
					<strong>item (Termasuk pajak) </strong>
				</td>
				<td colspan="4">
					<span class="price">110 000,00 Rp‎</span>
				</td>
			</tr>
									<tr class="item">
				<td colspan="1">
					<strong>Pengiriman dan penanganan (Termasuk pajak) </strong>
				</td>
				<td colspan="4">
					<span class="price-shipping">10 002,00 Rp‎</span>
				</td>
			</tr>
			<tr class="totalprice item">
				<td colspan="1">
					<strong>Jumlah</strong>
				</td>
				<td colspan="4">
					<span class="price">120 002,00 Rp‎</span>
				</td>
			</tr>
		</tfoot>
		<tbody>
																														<!-- Customized products -->
								<!-- Classic products -->
									<tr class="item">
												<td><label for="cb_16">demo_1</label></td>
						<td class="bold">
							<label for="cb_16">
																	Faded Short Sleeve T-shirts - Size : S, Color : Orange
															</label>
						</td>
						<td class="return_quantity">
							<input class="order_qte_input form-control grey" name="order_qte_input[16]" type="text" size="2" value="1" />
							<div class="clearfix return_quantity_buttons">
								<a href="#" class="return_quantity_down btn btn-default button-minus"><span><i class="icon-minus"></i></span></a>
								<a href="#" class="return_quantity_up btn btn-default button-plus"><span><i class="icon-plus"></i></span></a>
							</div>
							<label for="cb_16"><span class="order_qte_span editable">1</span></label></td>
												<td class="price">
							<label for="cb_16">
															110 000,00 Rp‎
														</label>
						</td>
						<td class="price">
							<label for="cb_16">
															110 000,00 Rp‎
														</label>
						</td>
					</tr>
													</tbody>
	</table>
</div>
</form>	<table class="table table-bordered footab">
		<thead>
			<tr>
				<th class="first_item">Tanggal</th>
				<th class="item" data-sort-ignore="true">Kurir</th>
				<th data-hide="phone" class="item">Berat</th>
				<th data-hide="phone" class="item">Ongkos kirim</th>
				<th data-hide="phone" class="last_item" data-sort-ignore="true">Nomer Pelacak</th>
			</tr>
		</thead>
		<tbody>
						<tr class="item">
				<td data-value="20151125165359">2015-11-25</td>
				<td>Suprabakti Mandiri</td>
				<td data-value="2.000">2.000 kg</td>
				<td data-value="10002.000000">10 002,00 Rp‎</td>
				<td>
					<span class="shipping_number_show">-</span>
				</td>
			</tr>
					</tbody>
	</table>
				<form action="http://localhost/SupraShop/index.php?controller=order-detail" method="post" class="std" id="sendOrderMessage">
		<h3 class="page-heading bottom-indent">Tambahkan pesan</h3>
		<p>Jika Anda ingin menambahkan komentar tentang pesanan Anda, silakan tulis di bawah ini.</p>
		<p class="form-group">
		<label for="id_product">Produk</label>
			<select name="id_product" class="form-control">
				<option value="0">-- Pilih --</option>
									<option value="1">Faded Short Sleeve T-shirts - Size : S, Color : Orange</option>
							</select>
		</p>
		<p class="form-group">
			<textarea class="form-control" cols="67" rows="3" name="msgText"></textarea>
		</p>
		<div class="submit">
			<input type="hidden" name="id_order" value="6" />
			<input type="submit" class="unvisible" name="submitMessage" value="Kirim"/>
			<button type="submit" name="submitMessage" class="button btn btn-default button-medium"><span>Kirim<i class="icon-chevron-right right"></i></span></button>
		</div>
	</form>
<?php }} ?>
