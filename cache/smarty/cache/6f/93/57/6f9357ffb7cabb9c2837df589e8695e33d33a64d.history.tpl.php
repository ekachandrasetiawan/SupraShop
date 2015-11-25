<?php /*%%SmartyHeaderCode:8239565587b09504f8-55697323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f9357ffb7cabb9c2837df589e8695e33d33a64d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\themes\\default-bootstrap\\history.tpl',
      1 => 1448445391,
      2 => 'file',
    ),
    'a3a77d92b79d4006dbe4d38ea29a14cee9eec249' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\themes\\default-bootstrap\\errors.tpl',
      1 => 1446110214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8239565587b09504f8-55697323',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565588d9bc2547_75229780',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565588d9bc2547_75229780')) {function content_565588d9bc2547_75229780($_smarty_tpl) {?>

<h1 class="page-heading bottom-indent">Riwayat pembelian</h1>
<p class="info-title">Berikut adalah barang-barang yang pernah Anda beli.</p>
<div class="block-center" id="block-history">
			<table id="order-list" class="table table-bordered footab">
			<thead>
				<tr>
					<th class="first_item" data-sort-ignore="true">Referensi pembelian</th>
					<th class="item">Tanggal</th>
					<th data-hide="phone" class="item">Total Harga</th>
					<th data-sort-ignore="true" data-hide="phone,tablet" class="item">Pembayaran</th>
					<th class="item">Status:</th>
					<th data-sort-ignore="true" data-hide="phone,tablet" class="item">Faktur</th>
					<th data-sort-ignore="true" data-hide="phone,tablet" class="last_item">Action</th>
				</tr>
			</thead>
			<tbody>
									<tr class="first_item ">
						<td class="history_link bold">
														<a class="color-myaccount" href="javascript:showOrder(1, 6, 'http://localhost/SupraShop/index.php?controller=order-detail');">
								YETGJHQSF
							</a>
						</td>
						<td data-value="20151125165358" class="history_date bold">
							2015-11-25
						</td>
						<td class="history_price" data-value="120002.000000">
							<span class="price">
								120 002,00 Rp‎
							</span>
						</td>
						
						<td class="history_method">Transfer Bank</td>
						<td data-value="10" class="history_state">
															<span class="label" style="background-color:#4169E1; border-color:#4169E1;">
									Menunggu pembayaran via transfer bank
								</span>
													</td>
						<td class="history_invoice">
															-
													</td>
						<td class="history_detail">
							<a class="btn btn-default button button-small" href="javascript:showOrder(1, 6, 'http://localhost/SupraShop/index.php?controller=order-detail');">
								<span>
									Detail<i class="icon-chevron-right right"></i>
								</span>
							</a>
						<!-- 									<a class="link-button" href="http://localhost/SupraShop/order?submitReorder=&amp;id_order=6" title="Order kembali">
																								<i class="icon-refresh"></i>Order kembali
								
								
							</a> -->
																					<a class="btn btn-default button button-small" href="http://localhost/SupraShop/module/confirmpayment/confirmpayment" title="Confirm Payment">
								<span>
									Confirm<i class="icon-chevron-right right"></i>
								</span>
							</a>
																				</td>
					</tr>
							</tbody>
		</table>
		<div id="block-order-detail" class="unvisible">&nbsp;</div>
	</div>
<ul class="footer_links clearfix">
	<li>
		<a class="btn btn-default button button-small" href="http://localhost/SupraShop/akun-saya">
			<span>
				<i class="icon-chevron-left"></i> Kembali ke akun Anda
			</span>
		</a>
	</li>
	<li>
		<a class="btn btn-default button button-small" href="http://localhost/SupraShop/">
			<span><i class="icon-chevron-left"></i> Beranda</span>
		</a>
	</li>
</ul>
<?php }} ?>
