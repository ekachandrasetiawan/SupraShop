<?php /*%%SmartyHeaderCode:10178565587ae989879-97635817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22992ca58fa728bf2c635286f66d0a25726d905d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\themes\\default-bootstrap\\modules\\blockcart\\blockcart.tpl',
      1 => 1446110214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10178565587ae989879-97635817',
  'variables' => 
  array (
    'blockcart_top' => 0,
    'PS_CATALOG_MODE' => 0,
    'order_process' => 0,
    'link' => 0,
    'cart_qties' => 0,
    'priceDisplay' => 0,
    'blockcart_cart_flag' => 0,
    'cart' => 0,
    'ajax_allowed' => 0,
    'colapseExpandStatus' => 0,
    'products' => 0,
    'product' => 0,
    'productId' => 0,
    'productAttributeId' => 0,
    'customizedDatas' => 0,
    'static_token' => 0,
    'id_customization' => 0,
    'CUSTOMIZE_TEXTFIELD' => 0,
    'customization' => 0,
    'discounts' => 0,
    'discount' => 0,
    'errors' => 0,
    'page_name' => 0,
    'shipping_cost_float' => 0,
    'free_ship' => 0,
    'shipping_cost' => 0,
    'show_wrapping' => 0,
    'cart_flag' => 0,
    'show_tax' => 0,
    'tax_cost' => 0,
    'total' => 0,
    'use_taxes' => 0,
    'display_tax_label' => 0,
    'active_overlay' => 0,
    'img_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565587aed5c414_27327594',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565587aed5c414_27327594')) {function content_565587aed5c414_27327594($_smarty_tpl) {?><!-- MODULE Block cart -->
<div class="col-sm-4 clearfix">
	<div class="shopping_cart">
		<a href="http://localhost/SupraShop/order" title="Lihat keranjang belanja" rel="nofollow">
			<b>Troli</b>
			<span class="ajax_cart_quantity unvisible">0</span>
			<span class="ajax_cart_product_txt unvisible">Produk</span>
			<span class="ajax_cart_product_txt_s unvisible">Produk</span>
			<span class="ajax_cart_total unvisible">
							</span>
			<span class="ajax_cart_no_product">(kosong)</span>
					</a>
					<div class="cart_block block exclusive">
				<div class="block_content">
					<!-- block list of products -->
					<div class="cart_block_list">
												<p class="cart_block_no_products">
							Tidak ada produk
						</p>
																		<div class="cart-prices">
							<div class="cart-prices-line first-line">
								<span class="price cart_block_shipping_cost ajax_cart_shipping_cost unvisible">
																			 Gratis ongkos kirim!																	</span>
								<span class="unvisible">
									Pengiriman
								</span>
							</div>
																					<div class="cart-prices-line last-line">
								<span class="price cart_block_total ajax_block_cart_total">0,00 Rp‎</span>
								<span>Jumlah</span>
							</div>
													</div>
						<p class="cart-buttons">
							<a id="button_order_cart" class="btn btn-default button button-small" href="http://localhost/SupraShop/order" title="Selesai" rel="nofollow">
								<span>
									Selesai<i class="icon-chevron-right right"></i>
								</span>
							</a>
						</p>
					</div>
				</div>
			</div><!-- .cart_block -->
			</div>
</div>

	<div id="layer_cart">
		<div class="clearfix">
			<div class="layer_cart_product col-xs-12 col-md-6">
				<span class="cross" title="Tutup window"></span>
				<span class="title">
					<i class="icon-check"></i>Produk berhasil ditambahkan ke cart.
				</span>
				<div class="product-image-container layer_cart_img">
				</div>
				<div class="layer_cart_product_info">
					<span id="layer_cart_product_title" class="product-name"></span>
					<span id="layer_cart_product_attributes"></span>
					<div>
						<strong class="dark">Jumlah</strong>
						<span id="layer_cart_product_quantity"></span>
					</div>
					<div>
						<strong class="dark">Jumlah</strong>
						<span id="layer_cart_product_price"></span>
					</div>
				</div>
			</div>
			<div class="layer_cart_cart col-xs-12 col-md-6">
				<span class="title">
					<!-- Plural Case [both cases are needed because page may be updated in Javascript] -->
					<span class="ajax_cart_product_txt_s  unvisible">
						Terdapat <span class="ajax_cart_quantity">0</span> item pada cart Anda.
					</span>
					<!-- Singular Case [both cases are needed because page may be updated in Javascript] -->
					<span class="ajax_cart_product_txt ">
						1 item di cart.
					</span>
				</span>
				<div class="layer_cart_row">
					<strong class="dark">
						Total produk
											</strong>
					<span class="ajax_block_products_total">
											</span>
				</div>

								<div class="layer_cart_row">
					<strong class="dark unvisible">
						Total ongkos kirim&nbsp;					</strong>
					<span class="ajax_cart_shipping_cost unvisible">
													 Gratis ongkos kirim!											</span>
				</div>
								<div class="layer_cart_row">
					<strong class="dark">
						Jumlah
											</strong>
					<span class="ajax_block_cart_total">
											</span>
				</div>
				<div class="button-container">
					<span class="continue btn btn-default button exclusive-medium" title="Belanja Lagi">
						<span>
							<i class="icon-chevron-left left"></i>Belanja Lagi
						</span>
					</span>
					<a class="btn btn-default button button-medium"	href="http://localhost/SupraShop/order" title="Proses pembayaran" rel="nofollow">
						<span>
							Proses pembayaran<i class="icon-chevron-right right"></i>
						</span>
					</a>
				</div>
			</div>
		</div>
		<div class="crossseling"></div>
	</div> <!-- #layer_cart -->
	<div class="layer_cart_overlay"></div>

<!-- /MODULE Block cart -->
<?php }} ?>
