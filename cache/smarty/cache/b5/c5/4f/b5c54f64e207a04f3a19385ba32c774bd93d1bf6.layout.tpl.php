<?php /*%%SmartyHeaderCode:56655655889f79f4e5-37454777%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5c54f64e207a04f3a19385ba32c774bd93d1bf6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\admin304yd26rz\\themes\\default\\template\\layout.tpl',
      1 => 1446110212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56655655889f79f4e5-37454777',
  'variables' => 
  array (
    'header' => 0,
    'conf' => 0,
    'errors' => 0,
    'disableDefaultErrorOutPut' => 0,
    'error' => 0,
    'informations' => 0,
    'info' => 0,
    'confirmations' => 0,
    'warnings' => 0,
    'warning' => 0,
    'page' => 0,
    'footer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5655889f93cef1_98743490',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655889f93cef1_98743490')) {function content_5655889f93cef1_98743490($_smarty_tpl) {?><!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7 lt-ie6 " lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8 ie7" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9 ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]> <html lang="fr" class="no-js ie9" lang="en"> <![endif]-->
<html lang="id">
<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="icon" type="image/x-icon" href="/SupraShop/img/favicon.ico" />
	<link rel="apple-touch-icon" href="/SupraShop/img/app_icon.png" />

	<meta name="robots" content="NOFOLLOW, NOINDEX">
	<title>Modules • Beltcare.COM</title>
		<script type="text/javascript">
		var help_class_name = 'AdminModules';
		var iso_user = 'id';
		var full_language_code = 'id-id';
		var country_iso_code = 'ID';
		var _PS_VERSION_ = '1.6.1.2';
		var roundMode = 2;
		var youEditFieldFor = '';
		var autorefresh_notifications = '1';
		var new_order_msg = 'Pembelian baru di toko Anda.';
		var order_number_msg = 'Nomor Order ';
		var total_msg = 'Jumlah ';
		var from_msg = 'Dari ';
		var see_order_msg = 'Lihat pembelian ini';
		var new_customer_msg = 'Pelanggan baru yang terdaftar.';
		var customer_name_msg = 'Nama pelanggan ';
		var new_msg = 'Ada pesan baru di toko Anda.';
		var see_msg = 'Baca pesan';
		var token = '2c0f987c2e2156f0d4ba472383cae3fe';
		var token_admin_orders = '4a73853d21ae49ef70c4ad4301ce5b06';
		var token_admin_customers = '91b7b73c5eb60c909980f9bb5452f756';
		var token_admin_customer_threads = '82852695169f7df713686e2b691f22ad';
		var currentIndex = 'index.php?controller=AdminModules';
		var employee_token = '324f85aa7b62c74d64c904c31c4a3da8';
		var choose_language_translate = 'Pilih bahasa';
		var default_language = '1';
		var admin_modules_link = 'index.php?controller=AdminModules&token=2c0f987c2e2156f0d4ba472383cae3fe';
		var tab_modules_list = '';
		var update_success_msg = 'update berhasil';
		var errorLogin = 'PrestaShop tidak dapat login ke Addons. Harap cek login dan koneksi internet Anda.';
		var search_product_msg = 'Cari produk';
	</script>
	<link href="/SupraShop/admin304yd26rz/themes/default/css/admin-theme.css" rel="stylesheet" type="text/css"/>
	<link href="/SupraShop/modules/gamification/views/css/gamification.css" rel="stylesheet" type="text/css"/>
	<link href="/SupraShop/js/jquery/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
	<link href="/SupraShop/js/jquery/plugins/alerts/jquery.alerts.css" rel="stylesheet" type="text/css"/>
	<link href="/SupraShop/js/jquery/plugins/chosen/jquery.chosen.css" rel="stylesheet" type="text/css"/>
	<link href="/SupraShop/js/jquery/ui/themes/base/jquery.ui.core.css" rel="stylesheet" type="text/css"/>
	<link href="/SupraShop/js/jquery/ui/themes/base/jquery.ui.slider.css" rel="stylesheet" type="text/css"/>
	<link href="/SupraShop/js/jquery/ui/themes/base/jquery.ui.theme.css" rel="stylesheet" type="text/css"/>
	<link href="/SupraShop/js/jquery/ui/themes/base/jquery.ui.datepicker.css" rel="stylesheet" type="text/css"/>
	<link href="/SupraShop/admin304yd26rz/themes/default/css/vendor/nv.d3.css" rel="stylesheet" type="text/css"/>
	<link href="/SupraShop/admin304yd26rz/themes/default/css/overrides.css" rel="stylesheet" type="text/css"/>
	<link href="/SupraShop/js/jquery/plugins/autocomplete/jquery.autocomplete.css" rel="stylesheet" type="text/css"/>
			<script type="text/javascript">
var host_mode = false;
</script>
<script type="text/javascript" src="/SupraShop/js/jquery/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="/SupraShop/js/jquery/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="/SupraShop/modules/gamification/views/js/gamification_bt.js"></script>
<script type="text/javascript" src="/SupraShop/js/jquery/plugins/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript" src="/SupraShop/js/jquery/plugins/jquery.scrollTo.js"></script>
<script type="text/javascript" src="/SupraShop/js/jquery/plugins/alerts/jquery.alerts.js"></script>
<script type="text/javascript" src="/SupraShop/js/jquery/plugins/jquery.chosen.js"></script>
<script type="text/javascript" src="/SupraShop/js/jquery/plugins/jquery.autosize.js"></script>
<script type="text/javascript" src="/SupraShop/js/jquery/plugins/growl/jquery.growl.js"></script>
<script type="text/javascript" src="/SupraShop/js/jquery/ui/jquery.ui.core.min.js"></script>
<script type="text/javascript" src="/SupraShop/js/jquery/ui/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="/SupraShop/js/jquery/ui/jquery.ui.mouse.min.js"></script>
<script type="text/javascript" src="/SupraShop/js/jquery/ui/jquery.ui.slider.min.js"></script>
<script type="text/javascript" src="/SupraShop/js/jquery/ui/jquery.ui.datepicker.min.js"></script>
<script type="text/javascript" src="/SupraShop/js/jquery/ui/i18n/jquery.ui.datepicker-id.js"></script>
<script type="text/javascript" src="/SupraShop/js/admin.js?v=1.6.1.2"></script>
<script type="text/javascript" src="/SupraShop/js/tools.js?v=1.6.1.2"></script>
<script type="text/javascript" src="/SupraShop/js/jquery/plugins/timepicker/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="/SupraShop/admin304yd26rz/themes/default/js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="/SupraShop/admin304yd26rz/themes/default/js/vendor/modernizr.min.js"></script>
<script type="text/javascript" src="/SupraShop/admin304yd26rz/themes/default/js/modernizr-loads.js"></script>
<script type="text/javascript" src="/SupraShop/admin304yd26rz/themes/default/js/vendor/moment-with-langs.min.js"></script>
<script type="text/javascript" src="/SupraShop/admin304yd26rz/themes/default/js/help.js"></script>
<script type="text/javascript" src="/SupraShop/js/admin/notifications.js"></script>
<script type="text/javascript" src="/SupraShop/js/vendor/d3.v3.min.js"></script>
<script type="text/javascript" src="/SupraShop/admin304yd26rz/themes/default/js/vendor/nv.d3.min.js"></script>
<script type="text/javascript" src="/SupraShop/js/jquery/plugins/autocomplete/jquery.autocomplete.js"></script>
<script type="text/javascript" src="/SupraShop/js/jquery/plugins/jquery.tablefilter.js"></script>

	
			<script>
				var ids_ps_advice = new Array();
				var admin_gamification_ajax_url = 'index.php?controller=AdminGamification&token=de5bb9c91be2c7ff1818394c2ce6541c';
				var current_id_tab = 60;
			</script>
			<!--
		// @todo: multishop color
		<style type="text/css">
			div#header_infos, div#header_infos a#header_shopname, div#header_infos a#header_logout, div#header_infos a#header_foaccess {color:#383838}
		</style>
	-->
	</head>

	<body class="ps_back-office page-sidebar adminmodules">
	
	<header id="header" class="bootstrap">
		<nav id="header_infos" role="navigation">
			<div class="navbar-header">
				<button id="header_nav_toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-primary">
					<i class="icon-reorder"></i>
				</button>
				<a id="header_shopversion" href="index.php?controller=AdminDashboard&amp;token=a3fbd4cfda068f46455a76e0391a101f">
					<span id="shop_version">1.6.1.2</span>
				</a>
				
									<a id="header_shopname" href="index.php?controller=AdminDashboard&amp;token=a3fbd4cfda068f46455a76e0391a101f">Beltcare.COM</a>
								<ul id="header_notifs_icon_wrapper">
					<li id="orders_notif" class="dropdown" data-type="order">
						<a href="javascript:void(0);" class="dropdown-toggle notifs" data-toggle="dropdown">
							<i class="icon-shopping-cart"></i>
							<span id="orders_notif_number_wrapper" class="notifs_badge hide">
								<span id="orders_notif_value">0</span>
							</span>
						</a>
						<div class="dropdown-menu notifs_dropdown">
							<section id="orders_notif_wrapper" class="notifs_panel">
								<div class="notifs_panel_header">
									<h3>Pembelian terbaru</h3>
								</div>
								<div id="list_orders_notif" class="list_notif">
									<span class="no_notifs">
										Tidak ada pembelian baru di toko Anda.
									</span>
								</div>
								<div class="notifs_panel_footer">
									<a href="index.php?controller=AdminOrders&amp;token=4a73853d21ae49ef70c4ad4301ce5b06">Lihat semua pembelian</a>
								</div>
							</section>
						</div>
					</li>
					<li id="customers_notif" class="dropdown" data-type="customer">
						<a href="javascript:void(0);" class="dropdown-toggle notifs" data-toggle="dropdown">
							<i class="icon-user"></i>
							<span id="customers_notif_number_wrapper" class="notifs_badge hide">
								<span id="customers_notif_value">0</span>
							</span>
						</a>
						<div class="dropdown-menu notifs_dropdown">
							<section id="customers_notif_wrapper" class="notifs_panel">
								<div class="notifs_panel_header">
									<h3>Pendaftaran terbaru</h3>
								</div>
								<div id="list_customers_notif" class="list_notif">
									<span class="no_notifs">
										Tidak ada pelanggan baru yang mendaftar di toko Anda.
									</span>
								</div>
								<div class="notifs_panel_footer">
									<a href="index.php?controller=AdminCustomers&amp;token=91b7b73c5eb60c909980f9bb5452f756">Lihat semua pelanggan</a>
								</div>
							</section>
						</div>
					</li>
					<li id="customer_messages_notif" class="dropdown" data-type="customer_message">
						<a href="javascript:void(0);" class="dropdown-toggle notifs" data-toggle="dropdown">
							<i class="icon-envelope"></i>
							<span id="customer_messages_notif_number_wrapper" class="notifs_badge hide">
								<span id="customer_messages_notif_value" >0</span>
							</span>
						</a>
						<div class="dropdown-menu notifs_dropdown">
							<section id="customer_messages_notif_wrapper" class="notifs_panel">
								<div class="notifs_panel_header">
									<h3>Pesan terbaru</h3>
								</div>
								<div id="list_customer_messages_notif" class="list_notif">
									<span class="no_notifs">
										Tidak ada pesan baru di toko Anda.
									</span>
								</div>
								<div class="notifs_panel_footer">
									<a href="index.php?controller=AdminCustomerThreads&amp;token=82852695169f7df713686e2b691f22ad">Lihat semua pesan</a>
								</div>
							</section>
						</div>
					</li>
				</ul>
				<ul id="header_quick">
					<li class="dropdown">
						<a href="javascript:void(0)" id="quick_select" class="dropdown-toggle" data-toggle="dropdown">Akses cepat <i class="icon-caret-down"></i></a>
						<ul class="dropdown-menu">
															<li >
									<a href="index.php?controller=AdminCategories&amp;addcategory&amp;token=b2108549971b226e9f01c47734d33aad">
																					<i class="icon-chevron-right icon-fw"></i>
																				Kategori baru
									</a>
								</li>
															<li >
									<a href="index.php?controller=AdminProducts&amp;addproduct&amp;token=d2fcf5a9f3e8729b1c153ce742432e92">
																					<i class="icon-chevron-right icon-fw"></i>
																				Produk baru
									</a>
								</li>
															<li >
									<a href="index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=55682b7ff9cdc644dbeef309d408acde">
																					<i class="icon-chevron-right icon-fw"></i>
																				Voucher baru
									</a>
								</li>
														<li class="divider"></li>
														<li >
								<a href="javascript:void(0);" class="ajax-quick-link" data-method="add">
									<i class="icon-plus-circle"></i>
									Tambahkan halaman ini ke QuickAccess
								</a>
							</li>
						</ul>
					</li>
				</ul>
								<script>
					$(function() {
						$('.ajax-quick-link').on('click', function(e){
							e.preventDefault();

							var method = $(this).data('method');

							if(method == 'add')
								var name = prompt('Harap namai shortcut ini', 'Modul dan layanan');

							if(method == 'add' && name || method == 'remove')
							{
								$.ajax({
									type: 'POST',
									headers: { "cache-control": "no-cache" },
									async: false,
									url: "index.php?controller=AdminQuickAccesses&token=8c1ff85ffed22f52c0800db67b0c5fc9" + "&action=GetUrl" + "&rand=133" + "&ajax=1" + "&method=" + method + ( $(this).data('quicklink-id') ? "&id_quick_access=" + $(this).data('quicklink-id') : ""),
									data: {
										"url": "controller=AdminModules",
										"name": name,
										"icon": "icon-AdminParentModules"
									},
									dataType: "json",
									success: function(data) {
										var quicklink_list ='';
										$.each(data, function(index,value){
											if (typeof data[index]['name'] !== 'undefined')
												quicklink_list += '<li><a href="' + data[index]['link'] + '&token=' + data[index]['token'] + '"><i class="icon-chevron-right"></i> ' + data[index]['name'] + '</a></li>';
										});

										if (typeof data['has_errors'] !== 'undefined' && data['has_errors'])
											$.each(data, function(index, value)
											{
												if (typeof data[index] == 'string')
													$.growl.error({ title: "", message: data[index]});
											});
										else if (quicklink_list)
										{
											$("#header_quick ul.dropdown-menu").html(quicklink_list);
											showSuccessMessage(update_success_msg);
										}
									}
								});
							}
						});
					});
				</script>
				<ul id="header_employee_box">
											<li class="hidden-sm hidden-xs">
							<a href="#" class="addons_connect toolbar_btn" data-toggle="modal" data-target="#modal_addons_connect" title="Terhubung ke akun Prestashop Marketplace">
								<i class="icon-chain-broken"></i>
								<span class="string-long">Terhubung ke akun Prestashop Marketplace</span>
								<span class="string-short">Prestashop Marketplace</span>
							</a>
						</li>
										<li>
						<a href="http://localhost/SupraShop/?live_configurator_token=c0df1c9e9897ecea507902cc48529446&amp;id_employee=1&amp;id_shop=1" id="header_foaccess" class="_blank" title="Lihat toko">
							<span class="string-long">Toko saya</span>
							<span class="string-short">Toko</span>
						</a>
											</li>
					<li id="employee_infos" class="dropdown">
						<a href="index.php?controller=AdminEmployees&amp;token=324f85aa7b62c74d64c904c31c4a3da8&amp;id_employee=1&amp;updateemployee" class="employee_name dropdown-toggle" data-toggle="dropdown">
							<span class="employee_avatar_small">
																<img class="imgm img-thumbnail" alt="" src="http://profile.prestashop.com/chandra%40beltcare.com.jpg" width="32" height="32" />
															</span>
							<span class="string-long">Eka Chandra&nbsp;Setiawan</span>
							<span class="string-short">Saya</span>
							<i class="caret"></i>
						</a>
						<ul id="employee_links" class="dropdown-menu">
							<li>
								<span class="employee_avatar">
									<img class="imgm img-thumbnail" alt="" src="http://profile.prestashop.com/chandra%40beltcare.com.jpg" width="96" height="96" />
								</span>
							</li>
							<li class="text-center text-nowrap">Eka Chandra Setiawan</li>
							<li class="divider"></li>
							<li><a href="index.php?controller=AdminEmployees&amp;token=324f85aa7b62c74d64c904c31c4a3da8&amp;id_employee=1&amp;updateemployee"><i class="icon-wrench"></i> Preferensi Saya</a></li>
														<li class="divider"></li>
							<li><a id="header_logout" href="index.php?controller=AdminLogin&amp;token=c687d6bfe3b64bbb7dab2f49aa8d175c&amp;logout"><i class="icon-signout"></i> Keluar</a></li>
						</ul>
					</li>
				</ul>

				<span id="ajax_running">
					<i class="icon-refresh icon-spin icon-fw"></i>
				</span>

				</div>
		</nav>
	</header>

	<div id="main">
		<div class="bootstrap">
	<nav id="nav-sidebar" role="navigation">
				<ul class="menu">
			<li class="searchtab">
				
<form id="header_search" class="bo_search_form" method="post" action="index.php?controller=AdminSearch&amp;token=bf70f9b1351e57bc875be5962bf58a7a" role="search">
	<div class="form-group">
		<input type="hidden" name="bo_search_type" id="bo_search_type" />
		<div class="input-group">
			<div class="input-group-btn">
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					<i id="search_type_icon" class="icon-search"></i>
					<i class="icon-caret-down"></i>
				</button>
				<ul id="header_search_options" class="dropdown-menu">
					<li class="search-all search-option active">
						<a href="#" data-value="0" data-placeholder="Apa yang Anca cari?" data-icon="icon-search">
							<i class="icon-search"></i> Dimana-mana</a>
					</li>
					<li class="divider"></li>
					<li class="search-book search-option">
						<a href="#" data-value="1" data-placeholder="Nama produk, SKU, referensi..." data-icon="icon-book">
							<i class="icon-book"></i> Katalog
						</a>
					</li>
					<li class="search-customers-name search-option">
						<a href="#" data-value="2" data-placeholder="Email, nama..." data-icon="icon-group">
							<i class="icon-group"></i> Pelanggan Dengan nama
						</a>
					</li>
					<li class="search-customers-addresses search-option">
						<a href="#" data-value="6" data-placeholder="123.45.67.89" data-icon="icon-desktop">
							<i class="icon-desktop"></i> Pelanggan oleh alamat IP</a>
					</li>
					<li class="search-orders search-option">
						<a href="#" data-value="3" data-placeholder="Nomor Pesanan" data-icon="icon-credit-card">
							<i class="icon-credit-card"></i> Penjualan
						</a>
					</li>
					<li class="search-invoices search-option">
						<a href="#" data-value="4" data-placeholder="Nomor faktur" data-icon="icon-book">
							<i class="icon-book"></i> Invoice
						</a>
					</li>
					<li class="search-carts search-option">
						<a href="#" data-value="5" data-placeholder="ID Cart" data-icon="icon-shopping-cart">
							<i class="icon-shopping-cart"></i> Troli
						</a>
					</li>
					<li class="search-modules search-option">
						<a href="#" data-value="7" data-placeholder="Nama modul" data-icon="icon-puzzle-piece">
							<i class="icon-puzzle-piece"></i> Modul
						</a>
					</li>
				</ul>
			</div>
						<a href="#" class="clear_search hide"><i class="icon-remove"></i></a>
						<input id="bo_query" name="bo_query" type="text" class="form-control" value="" placeholder="Cari" />
<!--  							<span class="input-group-btn">
				<button type="submit" id="bo_search_submit" class="btn btn-primary">
					<i class="icon-search"></i>
				</button>
			</span> -->
		</div>
	</div>

	<script>
			</script>
</form>
			</li>
											<li class="maintab  " id="maintab-AdminDashboard" data-submenu="1">
					<a href="index.php?controller=AdminDashboard&amp;token=a3fbd4cfda068f46455a76e0391a101f" class="title" >
						<i class="icon-AdminDashboard"></i>
						<span>Dashboard</span>
					</a>
									</li>
															<li class="maintab  has_submenu" id="maintab-AdminCatalog" data-submenu="9">
					<a href="index.php?controller=AdminProducts&amp;token=d2fcf5a9f3e8729b1c153ce742432e92" class="title" >
						<i class="icon-AdminCatalog"></i>
						<span>Katalog</span>
					</a>
											<ul class="submenu">
																				<li id="subtab-AdminProducts" >
								<a href="index.php?controller=AdminProducts&amp;token=d2fcf5a9f3e8729b1c153ce742432e92">
									Produk								</a>
							</li>
																											<li id="subtab-AdminCategories" >
								<a href="index.php?controller=AdminCategories&amp;token=b2108549971b226e9f01c47734d33aad">
									Kategori								</a>
							</li>
																											<li id="subtab-AdminTracking" >
								<a href="index.php?controller=AdminTracking&amp;token=15430564e59096f040773f94180e270d">
									Monitoring								</a>
							</li>
																											<li id="subtab-AdminAttributesGroups" >
								<a href="index.php?controller=AdminAttributesGroups&amp;token=677ddfea98b369a787ad2b95f8298484">
									Atribut produk								</a>
							</li>
																											<li id="subtab-AdminFeatures" >
								<a href="index.php?controller=AdminFeatures&amp;token=698bb43c7c4c97e7a0d3e750d97cf85a">
									Fitur produk								</a>
							</li>
																											<li id="subtab-AdminManufacturers" >
								<a href="index.php?controller=AdminManufacturers&amp;token=b0db7d992e8b8d2558de8c4add527860">
									Brand								</a>
							</li>
																											<li id="subtab-AdminSuppliers" >
								<a href="index.php?controller=AdminSuppliers&amp;token=1e16e441a1289102c2f825bc616b4a36">
									Supplier								</a>
							</li>
																											<li id="subtab-AdminTags" >
								<a href="index.php?controller=AdminTags&amp;token=42452fa2f7ce8403ae30ea080199620c">
									Tag								</a>
							</li>
																											<li id="subtab-AdminAttachments" >
								<a href="index.php?controller=AdminAttachments&amp;token=0eee2f5663fc30a05dc6aec009768c39">
									Lampiran								</a>
							</li>
																			</ul>
									</li>
															<li class="maintab  has_submenu" id="maintab-AdminParentOrders" data-submenu="10">
					<a href="index.php?controller=AdminOrders&amp;token=4a73853d21ae49ef70c4ad4301ce5b06" class="title" >
						<i class="icon-AdminParentOrders"></i>
						<span>Penjualan</span>
					</a>
											<ul class="submenu">
																				<li id="subtab-AdminOrders" >
								<a href="index.php?controller=AdminOrders&amp;token=4a73853d21ae49ef70c4ad4301ce5b06">
									Penjualan								</a>
							</li>
																											<li id="subtab-AdminInvoices" >
								<a href="index.php?controller=AdminInvoices&amp;token=d27a88f3f42df05681d03bd32611e05a">
									Invoice								</a>
							</li>
																											<li id="subtab-AdminReturn" >
								<a href="index.php?controller=AdminReturn&amp;token=124507d9cfd04c491e7904fa42a80adf">
									Retur barang								</a>
							</li>
																											<li id="subtab-AdminDeliverySlip" >
								<a href="index.php?controller=AdminDeliverySlip&amp;token=6017785b21aeb4923a35c2541df64c1d">
									Nota pengiriman								</a>
							</li>
																											<li id="subtab-AdminSlip" >
								<a href="index.php?controller=AdminSlip&amp;token=9d221f00ee57302773eca8d163ade678">
									Nota kredit								</a>
							</li>
																											<li id="subtab-AdminStatuses" >
								<a href="index.php?controller=AdminStatuses&amp;token=9c2e5bf7d0c4da53f5ddeb7c03afe2ea">
									Status								</a>
							</li>
																											<li id="subtab-AdminOrderMessage" >
								<a href="index.php?controller=AdminOrderMessage&amp;token=010f5e364de7f9f7d2be391a2f1590f1">
									Pesan								</a>
							</li>
																											<li id="subtab-AdminConfirmPayment" >
								<a href="index.php?controller=AdminConfirmPayment&amp;token=1db093cd340ace4f97a258cf8d915929">
									Confirm Payment								</a>
							</li>
																			</ul>
									</li>
															<li class="maintab  has_submenu" id="maintab-AdminParentCustomer" data-submenu="11">
					<a href="index.php?controller=AdminCustomers&amp;token=91b7b73c5eb60c909980f9bb5452f756" class="title" >
						<i class="icon-AdminParentCustomer"></i>
						<span>Pelanggan</span>
					</a>
											<ul class="submenu">
																				<li id="subtab-AdminCustomers" >
								<a href="index.php?controller=AdminCustomers&amp;token=91b7b73c5eb60c909980f9bb5452f756">
									Pelanggan								</a>
							</li>
																											<li id="subtab-AdminAddresses" >
								<a href="index.php?controller=AdminAddresses&amp;token=0d7e9a7624affd8e88029e74f30738c5">
									Alamat								</a>
							</li>
																											<li id="subtab-AdminGroups" >
								<a href="index.php?controller=AdminGroups&amp;token=96f92e12ac1ade7e6f1f355242bca9a4">
									Grup								</a>
							</li>
																											<li id="subtab-AdminCarts" >
								<a href="index.php?controller=AdminCarts&amp;token=0168c35d456a9d12efa3fe875b45ed5b">
									Daftar belanja								</a>
							</li>
																											<li id="subtab-AdminCustomerThreads" >
								<a href="index.php?controller=AdminCustomerThreads&amp;token=82852695169f7df713686e2b691f22ad">
									Layanan Pelanggan								</a>
							</li>
																											<li id="subtab-AdminContacts" >
								<a href="index.php?controller=AdminContacts&amp;token=d62dcd383ed8442113a847bde8c89364">
									Kontak								</a>
							</li>
																											<li id="subtab-AdminGenders" >
								<a href="index.php?controller=AdminGenders&amp;token=e6f39d3d0fc3b520678474188e9e8c88">
									Panggilan								</a>
							</li>
																			</ul>
									</li>
															<li class="maintab  has_submenu" id="maintab-AdminPriceRule" data-submenu="12">
					<a href="index.php?controller=AdminCartRules&amp;token=55682b7ff9cdc644dbeef309d408acde" class="title" >
						<i class="icon-AdminPriceRule"></i>
						<span>Voucher</span>
					</a>
											<ul class="submenu">
																				<li id="subtab-AdminCartRules" >
								<a href="index.php?controller=AdminCartRules&amp;token=55682b7ff9cdc644dbeef309d408acde">
									Aturan harga								</a>
							</li>
																											<li id="subtab-AdminSpecificPriceRule" >
								<a href="index.php?controller=AdminSpecificPriceRule&amp;token=0d56c7485f5077e8607c807d96d0e4eb">
									Aturan harga produk								</a>
							</li>
																											<li id="subtab-AdminMarketing" >
								<a href="index.php?controller=AdminMarketing&amp;token=82264d421fb6ef0aa9ce13ea43a52910">
									Marketing								</a>
							</li>
																			</ul>
									</li>
															<li class="maintab active has_submenu" id="maintab-AdminParentModules" data-submenu="13">
					<a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe" class="title" >
						<i class="icon-AdminParentModules"></i>
						<span>Modul dan layanan</span>
					</a>
											<ul class="submenu">
																				<li id="subtab-AdminModules"  class="active">
								<a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe">
									Modul dan layanan								</a>
							</li>
																											<li id="subtab-AdminAddonsCatalog" >
								<a href="index.php?controller=AdminAddonsCatalog&amp;token=b7eacbb75bfb0a995aa2eda8ebb9caff">
									Katalog modul dan theme								</a>
							</li>
																											<li id="subtab-AdminModulesPositions" >
								<a href="index.php?controller=AdminModulesPositions&amp;token=1d61e83c222a7d760c6ed20dfa589eff">
									Posisi								</a>
							</li>
																											<li id="subtab-AdminPayment" >
								<a href="index.php?controller=AdminPayment&amp;token=2e355a3fb624e5dc0c6ed52873c5e187">
									Pembayaran								</a>
							</li>
																			</ul>
									</li>
															<li class="maintab  has_submenu" id="maintab-AdminParentShipping" data-submenu="14">
					<a href="index.php?controller=AdminCarriers&amp;token=b5a906277246a619317c60f9f5420125" class="title" >
						<i class="icon-AdminParentShipping"></i>
						<span>Pengiriman</span>
					</a>
											<ul class="submenu">
																				<li id="subtab-AdminCarriers" >
								<a href="index.php?controller=AdminCarriers&amp;token=b5a906277246a619317c60f9f5420125">
									Kurir								</a>
							</li>
																											<li id="subtab-AdminShipping" >
								<a href="index.php?controller=AdminShipping&amp;token=0817391c9f149e9e95ec0cb61beabad0">
									Seting								</a>
							</li>
																			</ul>
									</li>
															<li class="maintab  has_submenu" id="maintab-AdminParentLocalization" data-submenu="15">
					<a href="index.php?controller=AdminLocalization&amp;token=8a4244b40dae7804d62fb4384cf36939" class="title" >
						<i class="icon-AdminParentLocalization"></i>
						<span>Lokalisasi</span>
					</a>
											<ul class="submenu">
																				<li id="subtab-AdminLocalization" >
								<a href="index.php?controller=AdminLocalization&amp;token=8a4244b40dae7804d62fb4384cf36939">
									Lokalisasi								</a>
							</li>
																											<li id="subtab-AdminLanguages" >
								<a href="index.php?controller=AdminLanguages&amp;token=6703b107f362aeb3531ee919ca2dff2b">
									Bahasa								</a>
							</li>
																											<li id="subtab-AdminZones" >
								<a href="index.php?controller=AdminZones&amp;token=192b23ea09a20103851f91c7a35c0344">
									Zona								</a>
							</li>
																											<li id="subtab-AdminCountries" >
								<a href="index.php?controller=AdminCountries&amp;token=00aa68d7cd745c8ac5088b3aa56b30ca">
									Negara								</a>
							</li>
																											<li id="subtab-AdminStates" >
								<a href="index.php?controller=AdminStates&amp;token=af5a686890e3ccd7d571cb37abb98c24">
									Propinsi								</a>
							</li>
																											<li id="subtab-AdminCurrencies" >
								<a href="index.php?controller=AdminCurrencies&amp;token=0d50e18b6f7701307b12ccfe17ac8981">
									Mata Uang								</a>
							</li>
																											<li id="subtab-AdminTaxes" >
								<a href="index.php?controller=AdminTaxes&amp;token=a510e7b14e5522796b391c6c44bb3e2b">
									Pajak								</a>
							</li>
																											<li id="subtab-AdminTaxRulesGroup" >
								<a href="index.php?controller=AdminTaxRulesGroup&amp;token=8e79a72eed5b7d069c5ea3a1330139ae">
									Aturan pajak								</a>
							</li>
																											<li id="subtab-AdminTranslations" >
								<a href="index.php?controller=AdminTranslations&amp;token=d36f6230aa4355f5509f8d161b49a387">
									Terjemahan								</a>
							</li>
																			</ul>
									</li>
															<li class="maintab  has_submenu" id="maintab-AdminParentPreferences" data-submenu="16">
					<a href="index.php?controller=AdminPreferences&amp;token=0f1e1a6cc699ab8bfa670fd514a173f3" class="title" >
						<i class="icon-AdminParentPreferences"></i>
						<span>Seting</span>
					</a>
											<ul class="submenu">
																				<li id="subtab-AdminPreferences" >
								<a href="index.php?controller=AdminPreferences&amp;token=0f1e1a6cc699ab8bfa670fd514a173f3">
									Umum								</a>
							</li>
																											<li id="subtab-AdminOrderPreferences" >
								<a href="index.php?controller=AdminOrderPreferences&amp;token=6caab2fc3a83e8987c247aabe099a8b7">
									Penjualan								</a>
							</li>
																											<li id="subtab-AdminPPreferences" >
								<a href="index.php?controller=AdminPPreferences&amp;token=5ffe4fd92a2020b31c016372c6d4b8da">
									Produk								</a>
							</li>
																											<li id="subtab-AdminCustomerPreferences" >
								<a href="index.php?controller=AdminCustomerPreferences&amp;token=c57bc08fdbe7f7e342a93dc2e5b3ca76">
									Pelanggan								</a>
							</li>
																											<li id="subtab-AdminThemes" >
								<a href="index.php?controller=AdminThemes&amp;token=6417c691d6b5e8408c3809ced00cdf3c">
									Theme								</a>
							</li>
																											<li id="subtab-AdminMeta" >
								<a href="index.php?controller=AdminMeta&amp;token=b4ea658c1175156b49a9b77a5968c533">
									SEO &amp; URL								</a>
							</li>
																											<li id="subtab-AdminCmsContent" >
								<a href="index.php?controller=AdminCmsContent&amp;token=b926e794f0b6618f639e2d81eb47c6d2">
									CMS								</a>
							</li>
																											<li id="subtab-AdminImages" >
								<a href="index.php?controller=AdminImages&amp;token=d84259199c427e8dea6bbf7fe8a50ec6">
									Gambar								</a>
							</li>
																											<li id="subtab-AdminStores" >
								<a href="index.php?controller=AdminStores&amp;token=377cfa32d3dc3de8de8bd6067a793ce2">
									Kontak toko								</a>
							</li>
																											<li id="subtab-AdminSearchConf" >
								<a href="index.php?controller=AdminSearchConf&amp;token=f25a23f833a5b20310b1b05f7f9fc5c6">
									Cari								</a>
							</li>
																											<li id="subtab-AdminMaintenance" >
								<a href="index.php?controller=AdminMaintenance&amp;token=c9be62492bcc41ff90d3ab0df77e763b">
									Pemeliharaan								</a>
							</li>
																											<li id="subtab-AdminGeolocation" >
								<a href="index.php?controller=AdminGeolocation&amp;token=991530f06ffe69ac7ebb0d0c38a3fe0e">
									Geolocation								</a>
							</li>
																			</ul>
									</li>
															<li class="maintab  has_submenu" id="maintab-AdminTools" data-submenu="17">
					<a href="index.php?controller=AdminInformation&amp;token=45996754aafced7ce1603bb418963f8c" class="title" >
						<i class="icon-AdminTools"></i>
						<span>Parameter lanjutan</span>
					</a>
											<ul class="submenu">
																				<li id="subtab-AdminInformation" >
								<a href="index.php?controller=AdminInformation&amp;token=45996754aafced7ce1603bb418963f8c">
									Informasi konfigurasi								</a>
							</li>
																											<li id="subtab-AdminPerformance" >
								<a href="index.php?controller=AdminPerformance&amp;token=17fa370e57102b4e73ebf8b09a32e93f">
									Kinerja								</a>
							</li>
																											<li id="subtab-AdminEmails" >
								<a href="index.php?controller=AdminEmails&amp;token=31248a5e9372209750fe9b2497048502">
									Email								</a>
							</li>
																											<li id="subtab-AdminImport" >
								<a href="index.php?controller=AdminImport&amp;token=bc5495186f958d86f555cb2d39d8e047">
									Impor CSV								</a>
							</li>
																											<li id="subtab-AdminBackup" >
								<a href="index.php?controller=AdminBackup&amp;token=a48e3152818d429047901c9340a29ecc">
									Backup database								</a>
							</li>
																											<li id="subtab-AdminRequestSql" >
								<a href="index.php?controller=AdminRequestSql&amp;token=ce2c526e557a3342cfe652caffd21110">
									SQL Manager								</a>
							</li>
																											<li id="subtab-AdminLogs" >
								<a href="index.php?controller=AdminLogs&amp;token=ba6307c52b6993f09ee2b36966e34fdc">
									Log								</a>
							</li>
																											<li id="subtab-AdminWebservice" >
								<a href="index.php?controller=AdminWebservice&amp;token=2e1c8716ecd1f1801e868e3c50de9334">
									Webservice								</a>
							</li>
																			</ul>
									</li>
															<li class="maintab  has_submenu" id="maintab-AdminAdmin" data-submenu="18">
					<a href="index.php?controller=AdminAdminPreferences&amp;token=f336a1965edbe2088b885db0c51255b5" class="title" >
						<i class="icon-AdminAdmin"></i>
						<span>Administrasi</span>
					</a>
											<ul class="submenu">
																				<li id="subtab-AdminAdminPreferences" >
								<a href="index.php?controller=AdminAdminPreferences&amp;token=f336a1965edbe2088b885db0c51255b5">
									Seting								</a>
							</li>
																											<li id="subtab-AdminQuickAccesses" >
								<a href="index.php?controller=AdminQuickAccesses&amp;token=8c1ff85ffed22f52c0800db67b0c5fc9">
									Akses cepat								</a>
							</li>
																											<li id="subtab-AdminEmployees" >
								<a href="index.php?controller=AdminEmployees&amp;token=324f85aa7b62c74d64c904c31c4a3da8">
									Karyawan								</a>
							</li>
																											<li id="subtab-AdminProfiles" >
								<a href="index.php?controller=AdminProfiles&amp;token=3bd8971bd2f61d3a304857ea7c5838a9">
									Profil								</a>
							</li>
																											<li id="subtab-AdminAccess" >
								<a href="index.php?controller=AdminAccess&amp;token=96a96b0fb9632c07fa2083355a115eb2">
									Hak akses								</a>
							</li>
																											<li id="subtab-AdminTabs" >
								<a href="index.php?controller=AdminTabs&amp;token=3c36cf44e613b33209f80646b2b1b73d">
									Menu								</a>
							</li>
																											<li id="subtab-AdminGamification" >
								<a href="index.php?controller=AdminGamification&amp;token=de5bb9c91be2c7ff1818394c2ce6541c">
									Merchant Expertise								</a>
							</li>
																			</ul>
									</li>
															<li class="maintab  has_submenu" id="maintab-AdminParentStats" data-submenu="19">
					<a href="index.php?controller=AdminStats&amp;token=592370f5490c8153ef81ff7ad1279416" class="title" >
						<i class="icon-AdminParentStats"></i>
						<span>Statistik</span>
					</a>
											<ul class="submenu">
																				<li id="subtab-AdminStats" >
								<a href="index.php?controller=AdminStats&amp;token=592370f5490c8153ef81ff7ad1279416">
									Statistik								</a>
							</li>
																											<li id="subtab-AdminSearchEngines" >
								<a href="index.php?controller=AdminSearchEngines&amp;token=a843acee1fe128b63f5a9990f974bfd2">
									Mesin pencari								</a>
							</li>
																											<li id="subtab-AdminReferrers" >
								<a href="index.php?controller=AdminReferrers&amp;token=859ff3424fc169182fc14b3dc2a8551b">
									Referer								</a>
							</li>
																			</ul>
									</li>
									</ul>
		<span class="menu-collapse">
			<i class="icon-align-justify icon-rotate-90"></i>
		</span>
		
	</nav>
</div>


		<div id="content" class="bootstrap">
			
		
<div class="bootstrap">
	<div class="page-head">
		
<h2 class="page-title">
	Daftar modul
</h2>


		
		<ul class="breadcrumb page-breadcrumb">
			
							<li class="breadcrumb-container">
					<a href="/SupraShop/admin304yd26rz/index.php?controller=AdminParentModules&amp;token=c1e2caba21de53d3a5ee6fe81ade0b69">					Modul dan layanan
					</a>				</li>
			
			
			
			
			
			</ul>
		
		
<div class="page-bar toolbarBox">
	<div class="btn-toolbar">
		<ul class="nav nav-pills pull-right">
																						<li>
				<a id="desc-module-update-all" class="toolbar_btn" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;updateAll=1" title="Update semua">
					<i class="process-icon-refresh"></i>
					<div>Update semua</div>
				</a>
			</li>
									<li>
				<a id="desc-module-new" class="toolbar_btn anchor" href="#" onclick="$('#module_install').slideToggle();" title="Tambah modul baru">
					<i class="process-icon-new"></i>
					<div>Tambah modul baru</div>
				</a>
			</li>
									<li>
				<a class="toolbar_btn  btn-help" href="http://help.prestashop.com/id/doc/AdminModules?version=1.6.1.2&amp;country=id" title="Bantuan">
					<i class="process-icon-help"></i>
					<div>Bantuan</div>
				</a>
			</li>
					</ul>
	</div>
</div>

	</div>
</div>
			<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title">Modul dan layanan yang direkomendasikan</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>


			





	<div class="bootstrap">
		<div class="alert alert-warning">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
							<h4>Terdapat 2 peringatan</h4>
						<ul class="list-unstyled">
									<li><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=cheque&amp;tab_module=payments_gateways&amp;configure=cheque">Pembayaran menggunakan cek: Field &quot;Dibayarkan ke&quot; dan &quot;Alamat&quot; harus diisi agar dapat menggunakan modul ini.</a></li>
									<li><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=bankwire&amp;tab_module=payments_gateways&amp;configure=bankwire">Transfer Bank: Rekening pemilik dan rincian harus dikonfigurasi untuk menggunakan modul ini dengan benar.</a></li>
							</ul>
		</div>
	</div>

			
<script type="text/javascript">var moduleList = [{"displayName":"1-Click Upgrade - AutoUpgrade","desc":"Provides an automated method to upgrade your shop to the latest PrestaShop version","name":"autoupgrade","author":"PrestaShop","image":"..\/img\/tmp\/c18ec1a3061f68c46b87d4a7252d8046.jpg","option":""}, {"displayName":"Abandoned Cart Reminder Pro","desc":"Improve your conversion rate by 15% (and more) with abandoned carts reminder emails!","name":"cartabandonmentpro","author":"PrestaShop","image":"..\/img\/tmp\/f244061497b351eb19acd4e12fd9eecc.jpg","option":""}, {"displayName":"Advanced EU Compliance","desc":"","name":"advancedeucompliance","author":"PrestaShop","image":"..\/img\/tmp\/e2812b6ae166a86f09ca2553d5164b8f.jpg","option":""}, {"displayName":"Advanced Pack 5 - Create \u200b\u200bbundles of products","desc":"Allows the sale batch using any stocks actually available products composing your packs, and offers the opportunity to apply business operations","name":"pm_advancedpack","author":"Presta-Module","image":"..\/img\/tmp\/28c3a375e1aca2b0390c33e8efdf0d8c.jpg","option":""}, {"displayName":"Advanced sales, tax, profit and profit margin reports","desc":"Create professional sales, tax, profit and profit margin reports in HTML format or export as a CSV \/ Excel file","name":"ordertaxprofitreport","author":"Business Tech","image":"..\/img\/tmp\/dbfd68aa9e54577a95224715a5a5c573.jpg","option":""}, {"displayName":"Advanced Search 4","desc":"Best Module Award Winner -&nbsp;Add the fastest layered navigation system for PrestaShop !","name":"pm_advancedsearch4","author":"Presta-Module","image":"..\/img\/tmp\/1a9a1079a40a7d6c6fb97f76b9bec404.jpg","option":""}, {"displayName":"Akun pelanggan","desc":"Menambahkan tab progress pendaftaran ke statistik dashboard.","name":"statsregistrations","author":"PrestaShop","image":"","option":""}, {"displayName":"All-in-one Rewards: loyalty sponsorship affiliation FB","desc":"Allows your customers to earn rewards, all grouped into a single account, while developing SEO and reputation of your shop: loyalty program, sponsorship (multilevel, self-promotional), affiliation, fa","name":"allinone_rewards","author":"Community","image":"..\/img\/tmp\/1c0a8c918434d0c329a4711168af4f1a.jpg","option":""}, {"displayName":"Amazon Market Place","desc":"Exclusive PrestaShop Addons, the Amazon Market Place module is the #1 solution to export products on Amazon, import and manage orders from the marketplace","name":"amazon","author":"Common-Services","image":"..\/img\/tmp\/c24bed4c4fde8107a2e07c0876e2d44c.jpg","option":""}, {"displayName":"Asal Pengunjung","desc":"Tambahkan grafik yang menampilkan website asal pengunjung ke statistik dashboard.","name":"statsorigin","author":"PrestaShop","image":"","option":""}, {"displayName":"Auctions","desc":"Auctions module was created to give merchants ability to sell products on auctions in easiest possible way","name":"auctions","author":"Community","image":"..\/img\/tmp\/451c95f53f350487a801a2585af1a8a8.jpg","option":""}, {"displayName":"Authorize.net (AIM)","desc":"Authorize.Net is a leading payment solution that makes accepting payments safe, easy and affordable. Over 400,000 merchants trust Authorize","name":"authorizeaim","author":"PrestaShop Partners","image":"..\/img\/tmp\/be11ecdd9b84b5bb8e0f125f91b0d424.jpg","option":""}, {"displayName":"Ban IP addresses","desc":"Ban unwelcome visitors from your shop","name":"banipmod","author":"PrestaShop","image":"..\/img\/tmp\/09f6cbc2e5f25e1cad700d426a1fef67.jpg","option":""}, {"displayName":"Bank Wire BCA","desc":"Accept payments by BCA (bank wire)","name":"bankwireBCA","author":"","image":"","option":""}, {"displayName":"Blok Akun saya","desc":"Menampilkan blok dengan link ke akun pelanggan","name":"blockmyaccount","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok Akun saya di footer website","desc":"Menampilkan blok dengan link akun pelanggan.","name":"blockmyaccountfooter","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok banner","desc":"Tampilkan banner dibagian header website Anda.","name":"blockbanner","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok brand","desc":"Menampilkan blok berisi produsen\/brand","name":"blockmanufacturer","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok CMS","desc":"Menambahkan blok dengan tautan ke halaman CMS.","name":"blockcms","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok data privasi pelanggan","desc":"Blok untun menampilkan informasi mengenai privasi pelanggan.","name":"blockcustomerprivacy","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok diskon","desc":"Blok untuk menampilkan produk yang didiskon.","name":"blockspecials","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok Facebook like box","desc":"Blok untuk berlangganan ke halaman Facebook Anda.","name":"blockfacebook","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok Iklan","desc":"Menambahkan blok iklan ke bagian tertentu di website Anda.","name":"blockadvertising","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok informasi CMS kustom","desc":"Menambahkan blok berisi informasi kustom di toko Anda.","name":"blockcmsinfo","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok informasi kontak","desc":"Menambahkan blok untuk menyediakan informasi tentang bagaimana menghubungi toko Anda.","name":"blockcontactinfos","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok info user","desc":"Menambahkan blok yang menampilkan informasi tentang pelanggan.","name":"blockuserinfo","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok kategori","desc":"Blok untuk menampilkan kategori produk.","name":"blockcategories","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok kontak","desc":"Memperbolehkan Anda menambahkan informasi tambahan tentang layanan pelanggan di toko Anda.","name":"blockcontact","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok Layered navigation","desc":"Tampilkan blok filter produk.","name":"blocklayered","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok logo pembayaran","desc":"Tambahkan blok untuk menampilkan logo pembayaran di toko Anda.","name":"blockpaymentlogo","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok logo pembayaran produk","desc":"Tampilkan logo pembayaran di halaman produk.","name":"productpaymentlogos","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok mata uang","desc":"Menambahkan blok untuk pelanggan memilih mata uang belanja mereka.","name":"blockcurrencies","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok Newsletter","desc":"Menambahkan blok untuk berlangganan newsletter.","name":"blocknewsletter","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok pencarian","desc":"Menambahkan blok untuk pencarian.","name":"blocksearch","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok pencarian toko","desc":"Menampilkan gambar berisi tautan ke fitur pencarian toko.","name":"blockstore","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok produk baru","desc":"Tampilkan blok berisi daftar produk terbaru.","name":"blocknewproducts","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok produk terlaris","desc":"Blok untuk menampilkan produk terlaris.","name":"blockbestsellers","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok Produk yang pernah dilihat","desc":"Menambahkan blok menampilkan terakhir dilihat produk.","name":"blockviewed","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok reassurance","desc":"Menambahkan blok untuk menampilkan informasi untuk meyakinkan pengunjung.","name":"blockreinsurance","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok RSS feed","desc":"Blok untuk menampilkan RSS feed.","name":"blockrss","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok social networking","desc":"Menambahkan akun social networking bagi brand Anda .","name":"blocksocial","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok supplier","desc":"Blok untuk menampilkan supplier produk.","name":"blocksupplier","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok Tag","desc":"Blok yang berisi tag produk.","name":"blocktags","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok Tautan","desc":"Menambahkan blok dengan link tambahan.","name":"blocklink","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok tautan permanen","desc":"Tambahkan blok untuk menampilkan tautan permanen seperti sitemap, kontak dll.","name":"blockpermanentlinks","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok Troli","desc":"Menambahkan blok berisi daftar belanja pelanggan.","name":"blockcart","author":"PrestaShop","image":"","option":""}, {"displayName":"Blok untuk memilih bahasa","desc":"Menambahkan blok yang memungkinkan pelanggan untuk memilih bahasa di toko Anda.","name":"blocklanguages","author":"PrestaShop","image":"","option":""}, {"displayName":"BlueSnap All-in-one Global Payment","desc":"BlueSnap is a global payment gateway and so much more","name":"bluesnap","author":"PrestaShop Partners","image":"..\/img\/tmp\/77615c66d71958c1376286b8b9353ccd.jpg","option":""}, {"displayName":"Brink's Checkout","desc":"Brink&rsquo;s Checkout, a service provided by The Brink&rsquo;s Company, allows merchants from 200 countries to accept online payments from customers worldwide in multiple currencies and languages in ","name":"brinkscheckout","author":"PrestaShop Partners","image":"..\/img\/tmp\/3d7e8df71bbf6d4781003531daf7f6be.jpg","option":""}, {"displayName":"Browser dan sistem operasi","desc":"Tambahkan tab berisi grafik mengenai penggunaan web browser dan sistem operasi ke statistik dashboard.","name":"statsequipment","author":"PrestaShop","image":"","option":""}, {"displayName":"Cache Manager","desc":"Decrease your loading page time generation","name":"pm_cachemanager","author":"Presta-Module","image":"..\/img\/tmp\/04447f2b1da3fab79adaa6200b4d7a20.jpg","option":""}, {"displayName":"Call Back","desc":"Add the Call Back module to your online store to increase sales!  Nothing is more frustrating than getting through to a company, just to be put on hold","name":"webcallback","author":"PrestaShop","image":"..\/img\/tmp\/fa193a01a40e150ecf962aad04726a08.jpg","option":""}, {"displayName":"Carrier Compare","desc":"","name":"carriercompare","author":"PrestaShop","image":"..\/img\/tmp\/86252eb32494306bfcc0cd8d35e5e062.jpg","option":""}, {"displayName":"Cash on Delivery","desc":"Accept cash on delivery payments","name":"cashondelivery","author":"PrestaShop","image":"..\/img\/tmp\/53d994bfe3d98450777275d6de32aa72.jpg","option":""}, {"displayName":"Cdiscount Marketplace","desc":"Sell your products on the Cdiscount marketplace: catalogue export, automatic updating of prices and stocks, retrieval and management of orders","name":"cdiscount","author":"Common-Services","image":"..\/img\/tmp\/74d244964f03cb78ac1d2e78fa62625d.jpg","option":""}, {"displayName":"Confirm Payment PT.Suprabakti Mandiri","desc":"Confirm Payment PT.Suprabakti Mandiri","name":"confirmpayment","author":"PT.SUPRABAKTI MANDIRI","image":"","option":""}, {"displayName":"Credit Notes \/ Memos of the Complete Invoice in PDF","desc":"Generate credit notes of the full invoice you need to cancel (not possible to generate partial credit notes). Unlimited number of credit notes","name":"lgabonos","author":"L\u00ednea Gr\u00e1fica","image":"..\/img\/tmp\/5d604a5955f769c7804aea13e3b369a4.jpg","option":""}, {"displayName":"Cron tasks manager","desc":"Mengelola semua otomatisasi web task dari satu tampilan.","name":"cronjobs","author":"PrestaShop","image":"","option":""}, {"displayName":"Cross-selling","desc":"Tambahkan blok &quot;Pelanggan yang membeli produk ini, membeli juga...&quot; di halaman produk.","name":"crossselling","author":"PrestaShop","image":"","option":""}, {"displayName":"CSV Export for Newsletters","desc":"","name":"newsletter","author":"PrestaShop","image":"..\/img\/tmp\/efdd51a2ff4c7de8bd97ca02e187d512.jpg","option":""}, {"displayName":"Customer Follow-up","desc":"","name":"followup","author":"PrestaShop","image":"..\/img\/tmp\/26cbcca1070949b9530694a41026e8d7.jpg","option":""}, {"displayName":"Custom Fields","desc":"Create unlimited number of custom fields for registration form. You can add all kinds of fields: text, text area, radio buttons, check boxes and select lists with unlimited number of options and more","name":"customfields","author":"Community","image":"..\/img\/tmp\/4907e4a0b85978459aee6629affb0085.jpg","option":""}, {"displayName":"Dasbor Aktifitas","desc":"","name":"dashactivity","author":"PrestaShop","image":"","option":""}, {"displayName":"Dasbor produk","desc":"Menambahkan blok berisi data penjualan terakhir dan ranking produk","name":"dashproducts","author":"PrestaShop","image":"","option":""}, {"displayName":"Dasbor Trend","desc":"Menambahkan blok berisi grafis yang mewakili perkembangan toko Anda berdasarkan data tertentu.","name":"dashtrends","author":"PrestaShop","image":"","option":""}, {"displayName":"Database Cleaner","desc":"","name":"pscleaner","author":"PrestaShop","image":"..\/img\/tmp\/345f1c45a73b1ad4ade68f8ae6c2d111.jpg","option":""}, {"displayName":"Data mining untuk statistik","desc":"Modul ini harus diaktifkan jika Anda ingin menggunakan Statistik.","name":"statsdata","author":"PrestaShop","image":"","option":""}, {"displayName":"Date of Delivery","desc":"","name":"dateofdelivery","author":"PrestaShop","image":"..\/img\/tmp\/e9f394aeaa5d5d88524de3323f47fd49.jpg","option":""}, {"displayName":"Detail produk","desc":"Menambahkan statistik detail untuk produk di statistik dashboard.","name":"statsproduct","author":"PrestaShop","image":"","option":""}, {"displayName":"Distribusi Kurir","desc":"Tambahkan grafik yang untuk menampilkan distribusi kurir ke statistik dashboard.","name":"statscarrier","author":"PrestaShop","image":"","option":""}, {"displayName":"DMU Association flash Products \/ Categories","desc":"An essential module for your products! You have over than 100 products? You want to control the association of your products to your categories? This module is for you!","name":"dmuassocprodcat","author":"Dream Me Up","image":"..\/img\/tmp\/848e53becffacbb34fdc3dadc78d8627.jpg","option":""}, {"displayName":"DMU Improved Order List","desc":"Save time on the processing of your orders! Avoid having to enter each command one after the other for all the details. This module lets you know everything from your order list","name":"dmulistecommandes","author":"Dream Me Up","image":"..\/img\/tmp\/0703b89cfc94232d4196e824b1257e2c.jpg","option":""}, {"displayName":"DMU Real Time Statistics","desc":"Visualize in Real Time every visitor on your shop ! With this module you are no longer blind! you are able to know everything about the activity of your shop","name":"dmurealtimestats","author":"Dream Me Up","image":"..\/img\/tmp\/de9c4bea8f71de89d6afeafe5839f24e.jpg","option":""}, {"displayName":"Easy order preparation","desc":"Save precious minutes every day by optimizing your logistics","name":"orderpreparation","author":"PrestaShop","image":"..\/img\/tmp\/93a2283684e6affc6cf4e0981fbd48dc.jpg","option":""}, {"displayName":"Email Alerts","desc":"","name":"mailalerts","author":"PrestaShop","image":"..\/img\/tmp\/7bede8c2dab83176afad029ede09c883.jpg","option":""}, {"displayName":"EU Cookie Law (Notification Banner + Cookie Blocker)","desc":"The only module that allows you to fully comply with the EU cookie law. Display a responsive and custom warning banner and disable cookies when users enter your website until you obtain their consent","name":"lgcookieslaw","author":"L\u00ednea Gr\u00e1fica","image":"..\/img\/tmp\/ad00444082a2d960ac4c07f7cf731ac2.jpg","option":""}, {"displayName":"eurovatgenerator","desc":"","name":"eurovatgenerator","author":"PrestaShop","image":"..\/img\/tmp\/66c36a1aa370b0e36448597676fe2a70.jpg","option":""}, {"displayName":"Favorite Products","desc":"","name":"favoriteproducts","author":"PrestaShop","image":"..\/img\/tmp\/7c6a24dcbd2e4ad03dc569216cda4506.jpg","option":""}, {"displayName":"Gift Card","desc":"Increase your sales and get more customers by offering them the chance to give the perfect gift with no risks with the Gift Card module developed by PrestaShop!&nbsp;Practical and simple, gift cards a","name":"giftcards","author":"PrestaShop","image":"..\/img\/tmp\/5967053bfb60f00fa7d268d895c93914.jpg","option":""}, {"displayName":"Gol Dasbor","desc":"Menambahkan blok berisi prakiraan toko Anda.","name":"dashgoals","author":"PrestaShop","image":"","option":""}, {"displayName":"Google Analytics","desc":"Your customers go everywhere; shouldn&#39;t your analytics?  Google Analytics shows you the full customer picture across ads and videos, websites and social tools, tablets and smartphones","name":"ganalytics","author":"PrestaShop Partners","image":"..\/img\/tmp\/c28aafe0f41ecf6bc4a6969ec725af7f.jpg","option":""}, {"displayName":"Google Analytics API","desc":"","name":"gapi","author":"PrestaShop","image":"..\/img\/tmp\/2c3cb567d57fe3641959aef6e5dee8b7.jpg","option":""}, {"displayName":"Google Shopping (Merchant Center)","desc":"Increase your sales by at least 30% by including your products in Google Shopping and introduce yourself to the millions of online shoppers who use Google!&nbsp;  &nbsp;","name":"gshopping","author":"PrestaShop","image":"..\/img\/tmp\/772160ebb19fee434834be8374fbeac1.jpg","option":""}, {"displayName":"Google Sitemap","desc":"","name":"gsitemap","author":"PrestaShop","image":"..\/img\/tmp\/0487446afdd8ae14aea21e878037ce75.jpg","option":""}, {"displayName":"Halaman tidak ditemukan","desc":"Tambahkan tab di statistik dashboard, yang menampilkan halaman yang diakses pengunjung tapi tidak ditemukan.","name":"pagesnotfound","author":"PrestaShop","image":"","option":""}, {"displayName":"HiPay","desc":"Manage your online transactions without a distance-selling (VAD) contract and with an integrated anti-fraud system","name":"hipay","author":"PrestaShop Partners","image":"..\/img\/tmp\/c3d974534b637542c51aefdb608f43a2.jpg","option":""}, {"displayName":"Home Editorial","desc":"","name":"editorial","author":"PrestaShop","image":"..\/img\/tmp\/5a1d93cf0abd8c4ff8ec8c338c602a21.jpg","option":""}, {"displayName":"Image Watermark","desc":"","name":"watermark","author":"PrestaShop","image":"..\/img\/tmp\/6cc0853421d8b0fbf878836ec689a00a.jpg","option":""}, {"displayName":"Informasi pelanggan yang terdaftar","desc":"Tambahkan informasi mengenai pelanggan (seperti jenis kelamin dan umur) ke statistik dashboard.","name":"statspersonalinfos","author":"PrestaShop","image":"","option":""}, {"displayName":"Inmotion","desc":"InMotion Hosting now offers FREE solid-state drives with all of our shared hosting plans, and Prestashop comes pre-installed","name":"inmotion","author":"PrestaShop Partners","image":"..\/img\/tmp\/6a63ea440ce0260a74e4a58c947baa31.jpg","option":""}, {"displayName":"Jumlah tersedia:","desc":"Tambahkan tab yang menampilkan stok produk tersedia untuk dijual di statistik dashboard.","name":"statsstock","author":"PrestaShop","image":"","option":""}, {"displayName":"Katalog evaluasi","desc":"Tambahkan review terhadap kualitas katalog Anda ke statistik dashboard.","name":"statscheckup","author":"PrestaShop","image":"","option":""}, {"displayName":"Kategori Terbaik","desc":"Tambahkan daftar kategori terbaik ke statistik dashboard.","name":"statsbestcategories","author":"PrestaShop","image":"","option":""}, {"displayName":"Keahlian penjual","desc":"Jadi ahli dalam bidang e-commerce secara instan!","name":"gamification","author":"PrestaShop","image":"","option":""}, {"displayName":"Kode PPN negara Eropa","desc":"Memungkinkan Anda untuk memasukan nomor NPWP pada saat membuat alamat. Anda harus mengisi field perusahaan untuk memunculkan field NPWP.","name":"vatnumber","author":"PrestaShop","image":"","option":""}, {"displayName":"Konfigurasi theme","desc":"Konfigurasi theme Anda.","name":"themeconfigurator","author":"PrestaShop","image":"","option":""}, {"displayName":"LeGuide.com","desc":"LeGuide.com allows you to make your site and your products known to millions of shoppers wanting to buy products and thus gaining the loyalty of new customers","name":"leguide","author":"PrestaShop","image":"..\/img\/tmp\/29f74d0e3edcb61a743d408ed7bcbf11.jpg","option":""}, {"displayName":"Live Chat Pro (Responsive)","desc":"This module allows you to chat with your visitors, track their behavior on your site in real time and view their geolocation using google maps. Many operators can chat with several users at once","name":"livechatpro","author":"ProQuality","image":"..\/img\/tmp\/b7a68c65017e8c6589fb18c619aa219e.jpg","option":""}, {"displayName":"LivePerson LiveChat + Messaging","desc":"LiveEngage is the modern way to connect with your online shoppers. &nbsp;Increase sales conversions and overall satisfaction","name":"liveperson","author":"PrestaShop Partners","image":"..\/img\/tmp\/3ca604f9e2b08e3433515c5b8aeb4b33.jpg","option":""}, {"displayName":"Loyalty Program","desc":"","name":"loyalty","author":"PrestaShop","image":"..\/img\/tmp\/fc08f4385bbc5b546571375aadc73384.jpg","option":""}, {"displayName":"Mailjet Email (Official)","desc":"Create and send transactional and marketing newsletters. Increase your merchant revenue with abandon cart and other triggered emails","name":"mailjet","author":"PrestaShop Partners","image":"..\/img\/tmp\/91f830b2edcab1a6b041ed57f14f9f0b.jpg","option":""}, {"displayName":"Menampilkan tabel HTML","desc":"Memungkinkan laporan statistik ditampilkan dalam grid.","name":"gridhtml","author":"PrestaShop","image":"","option":""}, {"displayName":"Menu horizontal","desc":"Menambahkan horizontal menu di website Anda.","name":"blocktopmenu","author":"PrestaShop","image":"","option":""}, {"displayName":"Mesin pencari kata kunci","desc":"Menampilkan kata kunci yang menarik kunjungan ke website Anda.","name":"sekeywords","author":"PrestaShop","image":"","option":""}, {"displayName":"Modul kirim ke teman","desc":"Memungkinkan pelanggan untuk mengirim tautan produk ke temannya.","name":"sendtoafriend","author":"PrestaShop","image":"","option":""}, {"displayName":"Multiple Features - Assign your features as you want","desc":"Multiple Features allows you to assign multiple values \u200b\u200bof features to your products","name":"pm_multiplefeatures","author":"Presta-Module","image":"..\/img\/tmp\/019689cd6599d6803825fea6d0b00cc2.jpg","option":""}, {"displayName":"Newsletter","desc":"Tambahkan tab dengan grafik untuk menampilkan pendaftaran newsleter di statistik dashboard.","name":"statsnewsletter","author":"PrestaShop","image":"","option":""}, {"displayName":"Newsletter & Statistics","desc":"The best way to convert, build loyalty and keep in touch with customers is with our Newsletter with Statistics Module! This brilliant module helps you send gorgeous newsletters to customer groups -- a","name":"mynewsletter","author":"PrestaShop","image":"..\/img\/tmp\/4eb72c79a67740381b04358a2c6cc2da.jpg","option":""}, {"displayName":"Nosto - Personalization for PrestaShop","desc":"Nosto is the easiest way to deliver your customers personalized shopping experiences - wherever they are","name":"nostotagging","author":"PrestaShop Partners","image":"..\/img\/tmp\/b8fe88aed8c07f05fbd9a5f3d2e13833.jpg","option":""}, {"displayName":"NVD3 Chart","desc":"","name":"graphnvd3","author":"PrestaShop","image":"","option":""}, {"displayName":"OnBoarding","desc":"Modul OnBoarding akan menyapa user pertama kali mereka login ke back-office Prestashop: melalui tampilan yang menarik, modul ini akan menunjukan user pengoperasian tokonya dalam beberapa langkah yang mudah.","name":"onboarding","author":"PrestaShop","image":"","option":""}, {"displayName":"One-Click ERP Illico Presta","desc":"Save time on e-shop management with the 1st free and adaptable ERP: Client orders, Shipping, Suppliers, Stock management and export, Inventory, and more","name":"erpillicopresta","author":"PrestaShop Partners","image":"..\/img\/tmp\/43c31d916527284b4f82dfbed16b1d9b.jpg","option":""}, {"displayName":"Online Quotation","desc":"Allow customers to ask for a quote in your online shop! With the Online quotation module, create a made-to-measure form so your customers can ask for an estimate for the products they are interested i","name":"quotation","author":"PrestaShop","image":"..\/img\/tmp\/5ec85310cf5db5a1f9f30f12348668ae.jpg","option":""}, {"displayName":"Pelacakan - Depan kantor","desc":"Mengijinkan afiliasi Anda untuk melihat statistik mereka. Lihat  Stats\/Referrer.","name":"trackingfront","author":"PrestaShop","image":"","option":""}, {"displayName":"Pelanggan terbaik","desc":"Tambahkan daftar pelanggan terbaik ke statistik dashboard.","name":"statsbestcustomers","author":"PrestaShop","image":"","option":""}, {"displayName":"Pembayaran menggunakan cek","desc":"Modul ini memungkinkan Anda untuk menerima pembayaran menggunakan cek.","name":"cheque","author":"PrestaShop","image":"","option":""}, {"displayName":"Pencarian di Toko","desc":"Tambahkan tab ke statistik dashboard, yang menampilkan keyword yang digunakan pengunjung untuk mencari produk.","name":"statssearch","author":"PrestaShop","image":"","option":""}, {"displayName":"Pengunjung dan kunjungan","desc":"Menambahkan statistik pengunjung kedalam dashboard statistik.","name":"statsvisits","author":"PrestaShop","image":"","option":""}, {"displayName":"Pengunjung online yang","desc":"Tambahkan daftar pelanggan dan pengunjung yang sedang online ke statistik dashboard.","name":"statslive","author":"PrestaShop","image":"","option":""}, {"displayName":"Penjualan dan pesanan","desc":"Tambahkan grafik berisi evolusi penjualan ke statistik dashboard.","name":"statssales","author":"PrestaShop","image":"","option":""}, {"displayName":"Price increment\/discount by customer groups","desc":"This module lets you\u00a0apply an increment or a discount to product price depending on the customer's group","name":"groupinc","author":"Idnovate","image":"..\/img\/tmp\/f97a897ac068b56796bf14bdeaf9789c.jpg","option":""}, {"displayName":"PriceMinister","desc":"Take advantage of the PriceMinister audience with its 2 million visitors a year and its 20 million subscribed members and boost your sales with your super PriceMinister store","name":"priceminister","author":"Common-Services","image":"..\/img\/tmp\/e18341615275b41f8a1f836b006c5241.jpg","option":""}, {"displayName":"Print Labels Pro","desc":"Save valuable time by automating the preparation of your delivery labels! Prepare and print your delivery labels, and stick them right on the packages for the orders you&#39;re shipping","name":"printlabels","author":"PrestaShop","image":"..\/img\/tmp\/e26900d344525e1ceca72b3884b05277.jpg","option":""}, {"displayName":"Product Comments","desc":"Allows users to post reviews and rate products on specific criteria.","name":"productcomments","author":"PrestaShop","image":"","option":""}, {"displayName":"Produk di kategori yang sama","desc":"Tambahkan blok halaman produk yang berisi produk-produk yang ada dalam kategori yang sama.","name":"productscategory","author":"PrestaShop","image":"","option":""}, {"displayName":"Produk terbaik","desc":"Tambahkan daftar produk terlaris di statitik dashboard.","name":"statsbestproducts","author":"PrestaShop","image":"","option":""}, {"displayName":"Produk tooltip","desc":"Tampilkan informasi di halaman produk: berapa pengunjung yang melihat, terakhir terjual dan terakhir kali ditambahkan kedalam cart.","name":"producttooltip","author":"PrestaShop","image":"","option":""}, {"displayName":"Produk unggulan di halaman depan website","desc":"Tampilkan produk unggulan di kolom tengah website Anda.","name":"homefeatured","author":"PrestaShop","image":"","option":""}, {"displayName":"Produsen Terbaik","desc":"Tambahkan daftar brand terbaik di statistik dashboard.","name":"statsbestmanufacturers","author":"PrestaShop","image":"","option":""}, {"displayName":"Push on Cart (Upselling)","desc":"Easily increase your average cart value by offering customized discounts to your client in the shopping cart summary !","name":"pushoncart","author":"PrestaShop","image":"..\/img\/tmp\/9a18603c8db71752ebc5569bda670588.jpg","option":""}, {"displayName":"Push Products on CMS Pages","desc":"This module allows you to display a block with the products you want on your CMS pages","name":"wic_pushproductcms","author":"Web In Color","image":"..\/img\/tmp\/fb11b376fe2e06b322725706207bbe59.jpg","option":""}, {"displayName":"Referral Program","desc":"","name":"referralprogram","author":"PrestaShop","image":"..\/img\/tmp\/c127cc95d6f637bcba42d453fe9f48c2.jpg","option":""}, {"displayName":"RockPOS Point of Sale (POS) Pro","desc":"Thanks to RockPOS (formerly Point of Sale Pro), now you can sell your products online and offline as well, at your stores \/ warehouses, exhibitions, trade conferences or via phone \/ chat","name":"hspointofsalepro","author":"PrestaMonster","image":"..\/img\/tmp\/0c3cb4cc8af4a186721a9e22863a8c23.jpg","option":""}, {"displayName":"RSS Feed","desc":"","name":"feeder","author":"PrestaShop","image":"..\/img\/tmp\/de7445353648e690bef00ab47a400588.jpg","option":""}, {"displayName":"Security Patch","desc":"This module solves a security issue for PrestaShop 1.4, 1.5, and 1.6. Install this module, and it will apply the security patch that was released in late July 2015","name":"securitypatch","author":"PrestaShop","image":"..\/img\/tmp\/1f075a8357500e1659650d36f46ebb4c.jpg","option":""}, {"displayName":"SendinBlue","desc":"SendinBlue : THE all-in-one module for your (marketing and transactional) emails &amp; SMS","name":"sendinblue","author":"SendinBlue","image":"..\/img\/tmp\/9228ac780e5de4e890fb4db4571d827e.jpg","option":""}, {"displayName":"SEO - disabled and deleted 301 redirect Products","desc":"End with 404 pages and referencing loss for disabled or deleted product","name":"ec_seo404","author":"Ether Cr\u00e9ation","image":"..\/img\/tmp\/bbb5f59ebd4a4571a3a6426799e2eac3.jpg","option":""}, {"displayName":"SEO Expert","desc":"Increase site traffic by landing on first page search engine results!  This SEO Expert module automatically fills in both meta tags and social media meta tags to optimize your online store for better ","name":"seoexpert","author":"PrestaShop","image":"..\/img\/tmp\/926e3bd0fb0d056e210d431075c42add.jpg","option":""}, {"displayName":"SEO Internal Linking","desc":"Improve your SEO through internal linking strategy","name":"pm_seointernallinking","author":"Presta-Module","image":"..\/img\/tmp\/a09073e523b71099bc33596df7ba9e57.jpg","option":""}, {"displayName":"Shopgate M-Commerce","desc":"Shopgate allows you to get a mobile site for your store as well as iOS and Android Apps! Our solution is recommended by PrestaShop as it is perfectly integrated with your system through a simple plugi","name":"shopgate","author":"PrestaShop Partners","image":"..\/img\/tmp\/bcb2a303b906216e4009282456778244.jpg","option":""}, {"displayName":"SIRET and customer group","desc":"Differentiate your business customers of individuals with this SIRET module which transfers the professionals in a given customer group","name":"siretcustomergroup","author":"Community","image":"..\/img\/tmp\/0a50193bc9b764065bc7210755d425cb.jpg","option":""}, {"displayName":"Slider - Products of same category","desc":"Submit items of the same class on your product pages with this slider at the bottom of the page, and improve the navigation of your customers, along with your average basket!","name":"productsbycategoryslider","author":"PrestaShop","image":"..\/img\/tmp\/f16918af61b569487d01d9a98b75d868.jpg","option":""}, {"displayName":"Slider image untuk halaman web Anda","desc":"Menambahkan slide image kedalam halaman web Anda.","name":"homeslider","author":"PrestaShop","image":"","option":""}, {"displayName":"Social sharing","desc":"Tampilkan tombol berbagi di sociel media (Twitter, Facebook, Google+ dan Pinterest) di halaman produk.","name":"socialsharing","author":"PrestaShop","image":"","option":""}, {"displayName":"Statistik Dashboard","desc":"Modul utama yang digunakan pada dashboard statistik. Berguna untuk menampilkan semua data statistik.","name":"statsforecast","author":"PrestaShop","image":"","option":""}, {"displayName":"Statistik katalog","desc":"Tambahkan tab berisi statistik umum tentang katalog Anda ke Stats dashboard.","name":"statscatalog","author":"PrestaShop","image":"","option":""}, {"displayName":"Store Manager for PrestaShop","desc":"30-DAY FREE TRIAL!&nbsp;&nbsp;The back office solution you need to run your PrestaShop online store efficiently ! Store Manager for PrestaShop&nbsp;will save you over 2 hours a day by automating daily","name":"storemanagerforprestashop","author":"eMagicOne","image":"..\/img\/tmp\/fab03c1b9ce2eececdf357ba2c018191.jpg","option":""}, {"displayName":"Supplier terbaik","desc":"Tambahkan daftar supplier terbaik ke statistik dashboard.","name":"statsbestsuppliers","author":"PrestaShop","image":"","option":""}, {"displayName":"Supra Multi Currency Product","desc":"Supra Multi Currency Product","name":"supramulticurrency","author":"PT.SUPRABAKTI MANDIRI","image":"","option":""}, {"displayName":"Tombol share facebook","desc":"Memungkinkan pelanggan untuk membagi produk atau konten ke Facebook.","name":"blocksharefb","author":"PrestaShop","image":"","option":""}, {"displayName":"Transfer Bank","desc":"Terima pembayaran melalui transfer bank.","name":"bankwire","author":"PrestaShop","image":"","option":""}, {"displayName":"UPS Delivery Status","desc":"Do you deliver with UPS, a company known for its speed and reliability?  Make customers&rsquo; life easier and improve customer&rsquo;s satisfaction with the UPS Tracking module, which makes tracking ","name":"upstrackingv2","author":"PrestaShop","image":"..\/img\/tmp\/4c9dd4e0f775bd2919d4e520f674b910.jpg","option":""}, {"displayName":"Voucher Terbaik","desc":"Tambahkan voucher terbaik ke statistik dashboard.","name":"statsbestvouchers","author":"PrestaShop","image":"","option":""}, {"displayName":"WebHostingHub","desc":"WebHostingHub offers you the easiest way to get your website and ecommerce presence online at a fraction of the cost of other providers","name":"webhostinghub","author":"PrestaShop Partners","image":"..\/img\/tmp\/f4735ecab000bb4c089ed2f59fd06fce.jpg","option":""}, {"displayName":"Wishlist block","desc":"Adds a block containing the customer's wishlists.","name":"blockwishlist","author":"PrestaShop","image":"","option":""}];</script>
<script type="text/javascript">
    var header_confirm_reset = 'Konfirmasi proses reset';
    var body_confirm_reset = 'Apakah Anda akan menghapus konten terkait modul ini?';
    var left_button_confirm_reset = 'Tidak - hanya reset parameter';
    var right_button_confirm_reset = 'Ya - reset semua';
	var currentIndex = 'index.php?controller=AdminModules';
	var currentIndexWithToken = 'index.php?controller=AdminModules&token=2c0f987c2e2156f0d4ba472383cae3fe';
	var dirNameCurrentIndex = '.';
	var ajaxCurrentIndex = 'ajax-tab.php?controller=AdminModules';
	var installed_modules = false;
	var by = 'oleh';
	var confirmPreferencesSaved = 'Seting berhasil disimpan';
	var anchor = '';
	var module_name = '';
	

	function getPrestaStore(){if(getE("prestastore").style.display!='block')return;$.post(dirNameCurrentIndex+"/ajax.php",{page:"prestastore"},function(a){getE("prestastore-content").innerHTML=a;})}
	function truncate_author(author){return ((author.length > 20) ? author.substring(0, 20)+"..." : author);}
	function modules_management(action)
	{
		var modules = document.getElementsByName('modules');
		var module_list = '';
		for (var i = 0; i < modules.length; i++)
		{
			if (modules[i].checked == true)
			{
				rel = modules[i].getAttribute('data-rel');
				if (rel != "false" && action == "uninstall")
				{
					if (!confirm(rel))
						return false;
				}
				module_list += '|'+modules[i].value;
			}
		}
		document.location.href=currentIndex+'&token='+token+'&'+action+'='+module_list.substring(1, module_list.length);
	}

	$('document').ready( function() {
		// ScrollTo
		if (anchor != '')
			$.uiTableFilter($('#moduleContainer').find('table'), anchor);

		if (module_name != '')
			$.uiTableFilter($('#moduleContainer').find('table'), module_name);
		
		$('#moduleQuicksearch').on('keyup', function(){
			val = this.value;
			if ($('#filter_all').hasClass('active'))
				$.uiTableFilter($('#moduleContainer').find('table'), val);
			else
				$('#filter_all').trigger('click');
				var interval = setInterval(function () {
				if (!$('#loader_module_list').length)
				{
					$.uiTableFilter($('#moduleContainer').find('table'), val);
					clearInterval(interval);
					interval = null;
				}
			
		}, 100);
	
			
		}).on('keydown', function(e){
			if (e.keyCode == 13)
				return false;
		});
		
		$('input[name="filtername"]').result(function(event, data, formatted) {
			$('#filternameForm').submit();
		});

		// Method to check / uncheck all modules checkbox
		$('#moduleContainer').on("click", "#checkme", function()
		{
			if ($(this).attr("rel") == 'false')
			{
				$(this).attr("checked", true);
				$(this).attr("rel", "true");
				$("input[name=modules]").attr("checked", true);
			}
			else
			{
				$(this).removeAttr("checked");
				$(this).attr("rel", "false");
				$("input[name=modules]").removeAttr("checked");
			}
		});		

		// Method to reload filter in ajax
		$('.categoryModuleFilterLink').click(function()
		{
			if ($(this).hasClass('active'))
				return false;
			$('.categoryModuleFilterLink').removeClass('active');
			$(this).addClass('active');
			try
			{
				resAjax = $.ajax({
					type:"POST",
					url : $(this).attr('href')+'&rand=' + new Date().getTime(),
					headers: {"cache-control": "no-cache"},
					async: true,
					cache: false,
					data : {
						ajax : "1",
						token : token,
						controller : "AdminModules",
						action : "reloadModulesList"
					},
					beforeSend: function(xhr){
						$('#moduleContainer').html('<img id="loader_module_list" src="../img/loader.gif" alt="" border="0" />');
					},
					success: function(data, status, request){
						if (request.getResponseHeader('Login') === 'true')
							return window.location.reload();

						$('#moduleContainer').html(data);
						$('.dropdown-toggle').dropdown();
						$('.help-tooltip').tooltip();
					}
				});
			}
			catch(e){}
			return false;
		});

		// Method to get modules_list.xml from prestashop.com and default_country_modules_list.xml from addons.prestashop.com
		try
		{
			resAjax = $.ajax({
				type:"POST",
				url: ajaxCurrentIndex,
				headers: {"cache-control": "no-cache"},
				async: true,
				cache: false,
				data: {
					ajaxMode : "1",
					ajax : "1",
					token : token,
					controller : "AdminModules",
					action : "refreshModuleList"
				},
				success: function(data){
					if (data == '{"status":"refresh"}')
						window.location.href = window.location.href;
				}
			});
		}
		catch(e) { }

		// Method to set filter on modules
		function setFilter()
		{
			var module_type = $("#module_type_filter").val();
			var module_install = $("#module_install_filter").val();
			var module_status = $("#module_status_filter").val();
			var country_module_value = $("#country_module_value_filter").val();
			try
			{
				resAjax = $.ajax({
					type:"POST",
					url : ajaxCurrentIndex,
					async: true,
					data : {
						ajax : "1",
						token : token,
						controller : "AdminModules",
						action : "setFilter",
						module_type : module_type,
						module_install : module_install,
						module_status : module_status,
						country_module_value : country_module_value,
						filterModules : 'Filter'
					},
					success : function(data){
						if (data == 'OK')
							window.location.href = currentIndexWithToken;
					}
				});
			}
			catch(e){}
			return false;
		}

		$(document).on('change', '#module_type_filter, #module_install_filter, #module_status_filter, #country_module_value_filter', function() { 
			setFilter(); 
		});

		$('.moduleTabPreferencesChoise').change(function()
		{			
			var value_pref = $(this).val();
			var module_pref = $(this).attr('name');
			module_pref = module_pref.substring(2, module_pref.length);

			$.ajax({
				type:"POST",
				url : ajaxCurrentIndex,
				async: true,
				data : {
					ajax : "1",
					token : token,
					controller : "AdminModules",
					action : "saveTabModulePreferences",
					module_pref : module_pref,
					value_pref : value_pref
				},
				success : function(data){
					if (data == 'OK')
						showSuccessMessage(confirmPreferencesSaved);
				}
			});
		});
		
		// Method to save favorites preferences
		$('.moduleFavorite').change(function()
		{
			var value_pref = $(this).val();
			var module_pref = $(this).attr('name');
			var action_pref = module_pref.substring(0, 1);
			module_pref = module_pref.substring(2, module_pref.length);
			try
			{
				resAjax = $.ajax({
					type:"POST",
					url : ajaxCurrentIndex,
					async: true,
					data : {
						ajax : "1",
						token : token,
						controller : "AdminModules",
						action : "saveFavoritePreferences",
						action_pref : action_pref,
						module_pref : module_pref,
						value_pref : value_pref
					},
					success : function(data){
						if (data == 'OK')
							showSuccessMessage(confirmPreferencesSaved);
					}
				});
			}
			catch(e){}
			return false;
		});

		$('#moduleContainer').on("click", ".toggle_favorite", function()
	    {
	      var el = $(this);
	      var value_pref = el.data('value');
	      var module_pref = el.data('module');
	      var action_pref = 'f';
	      var total_favorites = parseInt($('#favorite-count').html());

	      try
	      {
	        resAjax = $.ajax({
	            type:"POST",
	            url : ajaxCurrentIndex,
	            async: true,
	            data : {
	              ajax : "1",
	              token : token,
	              controller : "AdminModules",
	              action : "saveFavoritePreferences",
	              action_pref : action_pref,
	              module_pref : module_pref,
	              value_pref : value_pref
	            },
	            success : function(data)
	            {
	              // res.status  = cache or refresh
	              if (data == 'OK')
	              {
	                el.toggle();
	                el.parent('li').siblings().find('a.toggle_favorite').toggle();

					if (value_pref)
						$('#favorite-count').html(total_favorites+1);
					else
						$('#favorite-count').html(total_favorites-1);
	              }
	                
	            },
	            error: function(res,textStatus,jqXHR)
	            {
	              //jAlert("TECHNICAL ERROR"+res);
	            }
	        });
	      }
	      catch(e){}
	      return false;
	    });
	});

	
</script>

		<div class="alert bg-info">
	<div class="row modules-addons-info">
		<h4>Keanggotaan Addons menyediakan akses ke semua modul PrestaShop.</h4>
		<p>Setelah terhubung, modul baru Anda akan otomatis terinstall.</p>
	</div>
	<div class="row modules-addons-buttons">
		<a class="btn btn-default btn-primary _blank" href="https://addons.prestashop.com/id/login?email=chandra%40beltcare.com&amp;firstname=Eka+Chandra&amp;lastname=Setiawan&amp;website=http%3A%2F%2Flocalhost%2FSupraShop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow"><i class="icon-pencil"></i> Daftar</a><a href="#" class="addons_connect btn btn-default" data-toggle="modal" data-target="#modal_addons_connect" title="Terhubung ke akun Prestashop Marketplace"><i class="icon-user"></i> Login</a>
	</div>
</div>
<div class="panel kpi-container">
	<div class="kpi-refresh"><button class="close refresh" type="button" onclick="refresh_kpis();"><i class="process-icon-refresh" style="font-size:1em"></i></button></div>
	<div class="row">
										<div class="col-sm-6 col-lg-4"><div id="box-installed-modules" data-toggle="tooltip" class="box-stats label-tooltip color1" data-original-title="">
	<div class="kpi-content">
			<i class="icon-puzzle-piece"></i>
				<span class="title">Modul terpasang</span>
		<span cLass="subtitle"></span>
		<span class="value">71</span>
	</div>
	
</div>

<script>
	function refresh_box_installed_modules()
	{
		$.ajax({
			url: 'index.php?controller=AdminStats&token=592370f5490c8153ef81ff7ad1279416&ajax=1&action=getKpi&kpi=installed_modules' + '&rand=' + new Date().getTime(),
			dataType: 'json',
			type: 'GET',
			cache: false,
			headers: { 'cache-control': 'no-cache' },
			success: function(jsonData){
				if (!jsonData.has_errors)
				{
					if (jsonData.value != undefined)
						$('#box-installed-modules .value').html(jsonData.value);
					if (jsonData.data != undefined)
					{
						$("#box-installed-modules .boxchart svg").remove();
						set_d3_box_installed_modules(jsonData.data);
					}
				}
			}
		});
	}
</script>

</div>
								<div class="col-sm-6 col-lg-4"><div id="box-disabled-modules" data-toggle="tooltip" class="box-stats label-tooltip color2" data-original-title="">
	<div class="kpi-content">
			<i class="icon-off"></i>
				<span class="title">Modul Nonaktif</span>
		<span cLass="subtitle"></span>
		<span class="value">0</span>
	</div>
	
</div>

<script>
	function refresh_box_disabled_modules()
	{
		$.ajax({
			url: 'index.php?controller=AdminStats&token=592370f5490c8153ef81ff7ad1279416&ajax=1&action=getKpi&kpi=disabled_modules' + '&rand=' + new Date().getTime(),
			dataType: 'json',
			type: 'GET',
			cache: false,
			headers: { 'cache-control': 'no-cache' },
			success: function(jsonData){
				if (!jsonData.has_errors)
				{
					if (jsonData.value != undefined)
						$('#box-disabled-modules .value').html(jsonData.value);
					if (jsonData.data != undefined)
					{
						$("#box-disabled-modules .boxchart svg").remove();
						set_d3_box_disabled_modules(jsonData.data);
					}
				}
			}
		});
	}
</script>

</div>
								<div class="col-sm-6 col-lg-4"><div id="box-update-modules" data-toggle="tooltip" class="box-stats label-tooltip color3" data-original-title="">
	<div class="kpi-content">
			<i class="icon-refresh"></i>
				<span class="title">Modul yang akan diupdate</span>
		<span cLass="subtitle"></span>
		<span class="value">1</span>
	</div>
	
</div>

<script>
	function refresh_box_update_modules()
	{
		$.ajax({
			url: 'index.php?controller=AdminStats&token=592370f5490c8153ef81ff7ad1279416&ajax=1&action=getKpi&kpi=update_modules' + '&rand=' + new Date().getTime(),
			dataType: 'json',
			type: 'GET',
			cache: false,
			headers: { 'cache-control': 'no-cache' },
			success: function(jsonData){
				if (!jsonData.has_errors)
				{
					if (jsonData.value != undefined)
						$('#box-update-modules .value').html(jsonData.value);
					if (jsonData.data != undefined)
					{
						$("#box-update-modules .boxchart svg").remove();
						set_d3_box_update_modules(jsonData.data);
					}
				}
			}
		});
	}
</script>

</div>
			</div>
</div>

<div id="module_install" class="row" style="display: none;">

	<div class="panel col-lg-12">
		<form action="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe" method="post" enctype="multipart/form-data" class="form-horizontal">
			<h3>Tambah modul baru</h3>
			<p class="alert alert-info">Modul harus dalam bentuk file Zip (.zip) atau tarball (.tar, .tar.gz, .tgz).</p>
			<div class="form-group">
				<label for="file" class="control-label col-lg-3">
					<span class="label-tooltip" data-toggle="tooltip" title="Upload modul dari komputer Anda.">
						File Modul
					</span>
				</label>
				<div class="col-sm-9">
					<div class="row">
						<div class="col-lg-7">
							<input id="file" type="file" name="file" class="hide" />
							<div class="dummyfile input-group">
								<span class="input-group-addon"><i class="icon-file"></i></span>
								<input id="file-name" type="text" class="disabled" name="filename" readonly />
								<span class="input-group-btn">
									<button id="file-selectbutton" type="button" name="submitAddAttachments" class="btn btn-default">
										<i class="icon-folder-open"></i> Pilih file
									</button>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-lg-9 col-lg-push-3">
					<button class="btn btn-default" type="submit" name="download">
						<i class="icon-upload-alt" ></i>
						Upload modul
					</button>
				</div>
			</div>
		</form>
	</div>
</div>
<div class="alert alert-info">
	Upgrade tersedia untuk beberapa modul Anda!
	<ul>
			<li><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;anchor=Cheque"><b>Pembayaran menggunakan cek</b></a></li>
		</ul>
</div>
<div class="panel">
	<div class="panel-heading">
		<i class="icon-list-ul"></i>
		Daftar modul
	</div>
	<!--start sidebar module-->
	<div class="row">
		<div class="categoriesTitle col-md-3">
			<div class="list-group">
				<form id="filternameForm" method="post" class="list-group-item form-horizontal">
					<div class="input-group">
						<span class="input-group-addon">
							<i class="icon-search"></i>
						</span>
						<input class="form-control" placeholder="Cari" type="text" value="" name="moduleQuicksearch" id="moduleQuicksearch" autocomplete="off" />
					</div>
				</form>
				<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=favorites" id="filter_favorite">
					Favorit <span id="favorite-count" class="badge pull-right">0</span>
				</a>
				<a class="categoryModuleFilterLink list-group-item active" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;unfilterCategory=yes" id="filter_all">
					Semua <span class="badge pull-right">155</span>
				</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=administration" id="filter_administration">
						Administrasi <span class="badge pull-right">13</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=analytics_stats" id="filter_analytics_stats">
						Analisa dan statistik <span class="badge pull-right">27</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=merchandizing" id="filter_merchandizing">
						Barang dagangan <span class="badge pull-right">3</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=quick_bulk_update" id="filter_quick_bulk_update">
						Cepat / Massal pembaruan <span class="badge pull-right">1</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=dashboard" id="filter_dashboard">
						Dashboard <span class="badge pull-right">4</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=front_office_features" id="filter_front_office_features">
						Fitur Front Office <span class="badge pull-right">52</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=pricing_promotion" id="filter_pricing_promotion">
						Harga &amp; Promosi <span class="badge pull-right">4</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=content_management" id="filter_content_management">
						Manajemen Konten <span class="badge pull-right">1</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=market_place" id="filter_market_place">
						Market Place <span class="badge pull-right">3</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=billing_invoicing" id="filter_billing_invoicing">
						Pajak &amp; Invoice <span class="badge pull-right">2</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=payments_gateways" id="filter_payments_gateways">
						Pembayaran &amp; Gateway <span class="badge pull-right">6</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=checkout" id="filter_checkout">
						Pemeriksaan <span class="badge pull-right">1</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=shipping_logistics" id="filter_shipping_logistics">
						Pengiriman &amp; Logistik <span class="badge pull-right">2</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=smart_shopping" id="filter_smart_shopping">
						Perbandingan website dan manajemen Feed <span class="badge pull-right">2</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=advertising_marketing" id="filter_advertising_marketing">
						Periklanan &amp; Pemasaran <span class="badge pull-right">6</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=seo" id="filter_seo">
						SEO <span class="badge pull-right">4</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=others" id="filter_others">
						Modul lainnya <span class="badge pull-right">23</span>
					</a>
									<a class="categoryModuleFilterLink list-group-item " href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;filterCategory=slideshows" id="filter_slideshows">
						Slideshow <span class="badge pull-right">1</span>
					</a>
							</div>
		</div>
		<div id="moduleContainer" class="col-md-9">
			
<table id="module-list" class="table">
	<thead>
		<tr>
			<th colspan="4">
				
<!--start filter module-->
<form method="post" class="form-inline">
<div class="row">
	<div class="col-lg-8">
		<div class="form-group">
			<label>Filter berdasarkan</label>
			<select name="module_install" id="module_install_filter" class="form-control ">
				<option value="installedUninstalled" >Terpasang &amp; tidak di-install</option>
				<option value="installed" >Modul terpasang</option>
				<option value="uninstalled" >Modul Dihapus</option>
			</select>
		</div>

		<div class="form-group">
			<select name="module_status" id="module_status_filter" class="form-control ">
				<option value="enabledDisabled" >Diaktifkan &amp; Dinonaktifkan</option>
				<option value="enabled" >Modul Diaktifkan</option>
				<option value="disabled" >Modul Nonaktif</option>
			</select>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="form-group">
			<label>Pembuat</label>
			<select class="filter " name="module_type" id="module_type_filter">
				<!-- <option value="allModules" >Semua Modul</option>
				<option value="nativeModules" >Modul gratis</option>
				<option value="partnerModules" >Modul partner (gratis)</option>
				<option value="mustHaveModules" >Wajib dimiliki</option>
				<option value="addonsModules" >Modul yang dibeli dari Addons</option> -->
				<option value="allModules" >Semua developer</option>
									<option value="authorModules[prestashop]" >prestashop</option>
									<option value="authorModules[presta-module]" >presta-module</option>
									<option value="authorModules[business tech]" >business tech</option>
									<option value="authorModules[community]" >community</option>
									<option value="authorModules[common-services]" >common-services</option>
									<option value="authorModules[prestashop partners]" >prestashop partners</option>
									<option value="authorModules[pt.suprabakti mandiri]" >pt.suprabakti...</option>
									<option value="authorModules[línea gráfica]" >línea gráfica</option>
									<option value="authorModules[dream me up]" >dream me up</option>
									<option value="authorModules[proquality]" >proquality</option>
									<option value="authorModules[idnovate]" >idnovate</option>
									<option value="authorModules[web in color]" >web in color</option>
									<option value="authorModules[prestamonster]" >prestamonster</option>
									<option value="authorModules[sendinblue]" >sendinblue</option>
									<option value="authorModules[ether création]" >ether création</option>
									<option value="authorModules[emagicone]" >emagicone</option>
								<!-- <option value="otherModules" >Modul lainnya</option> -->
			</select>
		</div>
	</div>
</div>
	<!-- <span>
		<select class="filter fixed-width-lg" name="country_module_value" id="country_module_value_filter">
			<option value="0" >Semua negara</option>
			<option value="1" >Saat ini negara Indonesia</option>
		</select>
	</span> -->
	<!-- <span class="pull-right">
		<button class="btn btn-default " type="submit" name="resetFilterModules">
			<i class="icon-eraser"></i>
			Reset 
		</button>
		<button class="btn btn-default " name="filterModules" id="filterModulesButton" type="submit">
			<i class="icon-filter"></i> 
			Filter
		</button>
	</span> -->
</form>
<!--end filter module-->

			</th>
		</tr>
	</thead>
			<tbody>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="autoupgrade" class="noborder" title="Module autoupgrade " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="1-Click Upgrade - AutoUpgrade" title="1-Click Upgrade - AutoUpgrade" src="../img/tmp/c18ec1a3061f68c46b87d4a7252d8046.jpg" />
					</td>
					<td>
						<div id="anchorAutoupgrade" title="1-Click Upgrade - AutoUpgrade">
							<div class="text-muted">
								Administrasi
							</div>
							<div class="module_name">
								<span style="display:none">autoupgrade</span>
								1-Click Upgrade - AutoUpgrade
								<small class="text-muted">v1.6.7 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	Provides an automated method to upgrade your shop to the latest PrestaShop version
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=autoupgrade" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=autoupgrade&amp;tab_module=administration&amp;module_name=autoupgrade&amp;anchor=Autoupgrade">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="autoupgrade" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="autoupgrade" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Abandoned Cart Reminder Pro" title="Abandoned Cart Reminder Pro" src="../img/tmp/f244061497b351eb19acd4e12fd9eecc.jpg" />
					</td>
					<td>
						<div id="anchorCartabandonmentpro" title="Abandoned Cart Reminder Pro">
							<div class="text-muted">
								Pemeriksaan
							</div>
							<div class="module_name">
								<span style="display:none">cartabandonmentpro</span>
								Abandoned Cart Reminder Pro
								<small class="text-muted">v1.6.10 - oleh PrestaShop</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Improve your conversion rate by 15% (and more) with abandoned carts reminder emails!
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=cartabandonmentpro" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/checkout-modules/16535-abandoned-cart-pro.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="advancedeucompliance" class="noborder" title="Module advancedeucompliance " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Advanced EU Compliance" title="Advanced EU Compliance" src="../img/tmp/e2812b6ae166a86f09ca2553d5164b8f.jpg" />
					</td>
					<td>
						<div id="anchorAdvancedeucompliance" title="Advanced EU Compliance">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">advancedeucompliance</span>
								Advanced EU Compliance
								<small class="text-muted">v1.5.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=advancedeucompliance&amp;tab_module=others&amp;module_name=advancedeucompliance&amp;anchor=Advancedeucompliance">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="advancedeucompliance" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="advancedeucompliance" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Advanced Pack 5 - Create ​​bundles of products" title="Advanced Pack 5 - Create ​​bundles of products" src="../img/tmp/28c3a375e1aca2b0390c33e8efdf0d8c.jpg" />
					</td>
					<td>
						<div id="anchorPm_advancedpack" title="Advanced Pack 5 - Create ​​bundles of products">
							<div class="text-muted">
								Barang dagangan
							</div>
							<div class="module_name">
								<span style="display:none">pm_advancedpack</span>
								Advanced Pack 5 - Create ​​bundles of products
								<small class="text-muted">v5.0.7 - oleh Presta-Module</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Allows the sale batch using any stocks actually available products composing your packs, and offers the opportunity to apply business operations
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=pm_advancedpack" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/merchandising-prestashop-modules/1015-advanced-pack-5-create-bundles-of-products.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Advanced sales, tax, profit and profit margin reports" title="Advanced sales, tax, profit and profit margin reports" src="../img/tmp/dbfd68aa9e54577a95224715a5a5c573.jpg" />
					</td>
					<td>
						<div id="anchorOrdertaxprofitreport" title="Advanced sales, tax, profit and profit margin reports">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">ordertaxprofitreport</span>
								Advanced sales, tax, profit and profit margin reports
								<small class="text-muted">v2.8.4 - oleh Business Tech</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Create professional sales, tax, profit and profit margin reports in HTML format or export as a CSV / Excel file
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=ordertaxprofitreport" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/analytics-stats-prestashop-modules/5255-advanced-sales-tax-profit-and-profit-margin-reports.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Advanced Search 4" title="Advanced Search 4" src="../img/tmp/1a9a1079a40a7d6c6fb97f76b9bec404.jpg" />
					</td>
					<td>
						<div id="anchorPm_advancedsearch4" title="Advanced Search 4">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">pm_advancedsearch4</span>
								Advanced Search 4
								<small class="text-muted">v4.10.16 - oleh Presta-Module</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Best Module Award Winner -&nbsp;Add the fastest layered navigation system for PrestaShop !
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=pm_advancedsearch4" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/search-filters-prestashop-modules/2778-advanced-search-4.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statsregistrations" class="noborder" title="Module statsregistrations " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Akun pelanggan" title="Akun pelanggan" src="/SupraShop/modules/statsregistrations/logo.png" />
					</td>
					<td>
						<div id="anchorStatsregistrations" title="Akun pelanggan">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statsregistrations</span>
								Akun pelanggan
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan tab progress pendaftaran ke statistik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsregistrations&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsregistrations&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsregistrations&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsregistrations&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsregistrations&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statsregistrations&amp;tab_module=analytics_stats&amp;module_name=statsregistrations&amp;anchor=Statsregistrations" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statsregistrations" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statsregistrations" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statsregistrations&amp;tab_module=analytics_stats&amp;module_name=statsregistrations" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="All-in-one Rewards: loyalty sponsorship affiliation FB" title="All-in-one Rewards: loyalty sponsorship affiliation FB" src="../img/tmp/1c0a8c918434d0c329a4711168af4f1a.jpg" />
					</td>
					<td>
						<div id="anchorAllinone_rewards" title="All-in-one Rewards: loyalty sponsorship affiliation FB">
							<div class="text-muted">
								Periklanan &amp; Pemasaran
							</div>
							<div class="module_name">
								<span style="display:none">allinone_rewards</span>
								All-in-one Rewards: loyalty sponsorship affiliation FB
								<small class="text-muted">v2.0.3 - oleh Community</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Allows your customers to earn rewards, all grouped into a single account, while developing SEO and reputation of your shop: loyalty program, sponsorship (multilevel, self-promotional), affiliation, fa
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=allinone_rewards" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/advertising-marketing-newsletter-modules/4414-all-in-one-rewards-loyalty-sponsorship-affiliation-fb.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Amazon Market Place" title="Amazon Market Place" src="../img/tmp/c24bed4c4fde8107a2e07c0876e2d44c.jpg" />
					</td>
					<td>
						<div id="anchorAmazon" title="Amazon Market Place">
							<div class="text-muted">
								Market Place
							</div>
							<div class="module_name">
								<span style="display:none">amazon</span>
								Amazon Market Place
								<small class="text-muted">v4.1.138 - oleh Common-Services</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Exclusive PrestaShop Addons, the Amazon Market Place module is the #1 solution to export products on Amazon, import and manage orders from the marketplace
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=amazon" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/marketplace-prestashop-modules/2501-amazon-market-place.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statsorigin" class="noborder" title="Module statsorigin " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Asal Pengunjung" title="Asal Pengunjung" src="/SupraShop/modules/statsorigin/logo.png" />
					</td>
					<td>
						<div id="anchorStatsorigin" title="Asal Pengunjung">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statsorigin</span>
								Asal Pengunjung
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan grafik yang menampilkan website asal pengunjung ke statistik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsorigin&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsorigin&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsorigin&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsorigin&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsorigin&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statsorigin&amp;tab_module=analytics_stats&amp;module_name=statsorigin&amp;anchor=Statsorigin" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statsorigin" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statsorigin" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statsorigin&amp;tab_module=analytics_stats&amp;module_name=statsorigin" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Auctions" title="Auctions" src="../img/tmp/451c95f53f350487a801a2585af1a8a8.jpg" />
					</td>
					<td>
						<div id="anchorAuctions" title="Auctions">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">auctions</span>
								Auctions
								<small class="text-muted">v3.0.1 - oleh Community</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Auctions module was created to give merchants ability to sell products on auctions in easiest possible way
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=auctions" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/front-office-features-prestashop-modules/3438-auctions.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="authorizeaim" class="noborder" title="Module authorizeaim " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Authorize.net (AIM)" title="Authorize.net (AIM)" src="../img/tmp/be11ecdd9b84b5bb8e0f125f91b0d424.jpg" />
					</td>
					<td>
						<div id="anchorAuthorizeaim" title="Authorize.net (AIM)">
							<div class="text-muted">
								Pembayaran &amp; Gateway
							</div>
							<div class="module_name">
								<span style="display:none">authorizeaim</span>
								Authorize.net (AIM)
								<small class="text-muted">v1.5.6 - oleh PrestaShop Partners</small>
																	- <span class="module-badge-partner help-tooltip text-warning" data-title="Modul prestashop resmi dan tersertifikasi. Gratis, aman dan termasuk update!"><i class="icon-pushpin"></i> <small>Resmi</small></span>
															</div>
							<p class="module_description">
																	Authorize.Net is a leading payment solution that makes accepting payments safe, easy and affordable. Over 400,000 merchants trust Authorize
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=authorizeaim" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=authorizeaim&amp;tab_module=payments_gateways&amp;module_name=authorizeaim&amp;anchor=Authorizeaim">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="authorizeaim" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="authorizeaim" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Ban IP addresses" title="Ban IP addresses" src="../img/tmp/09f6cbc2e5f25e1cad700d426a1fef67.jpg" />
					</td>
					<td>
						<div id="anchorBanipmod" title="Ban IP addresses">
							<div class="text-muted">
								Administrasi
							</div>
							<div class="module_name">
								<span style="display:none">banipmod</span>
								Ban IP addresses
								<small class="text-muted">v1.0.7 - oleh PrestaShop</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Ban unwelcome visitors from your shop
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=banipmod" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/administration-tools-prestashop-modules/367-ban-ip-addresses.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="bankwireBCA" class="noborder" title="Module bankwireBCA " data-rel="Are you sure you want to delete your details?"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Bank Wire BCA" title="Bank Wire BCA" src="/SupraShop/modules/bankwireBCA/logo.gif" />
					</td>
					<td>
						<div id="anchorBankwireBCA" title="Bank Wire BCA">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">bankwireBCA</span>
								Bank Wire BCA
								<small class="text-muted">v0.4 - oleh </small>
																																</div>
							<p class="module_description">
																	Accept payments by BCA (bank wire)
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=bankwireBCA&amp;tab_module=others&amp;module_name=bankwireBCA" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=bankwireBCA&amp;enable=0&amp;tab_module=others" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=bankwireBCA&amp;disable_device=4&amp;tab_module=others" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=bankwireBCA&amp;disable_device=2&amp;tab_module=others" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=bankwireBCA&amp;disable_device=1&amp;tab_module=others" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=bankwireBCA&amp;reset&amp;tab_module=others" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=bankwireBCA&amp;tab_module=others&amp;module_name=bankwireBCA&amp;anchor=BankwireBCA" onclick="return confirm('Are you sure you want to delete your details?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="bankwireBCA" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="bankwireBCA" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=bankwireBCA&amp;tab_module=others&amp;module_name=bankwireBCA" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockmyaccount" class="noborder" title="Module blockmyaccount " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok Akun saya" title="Blok Akun saya" src="/SupraShop/modules/blockmyaccount/logo.png" />
					</td>
					<td>
						<div id="anchorBlockmyaccount" title="Blok Akun saya">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockmyaccount</span>
								Blok Akun saya
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menampilkan blok dengan link ke akun pelanggan
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockmyaccount&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockmyaccount&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockmyaccount&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockmyaccount&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockmyaccount&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockmyaccount&amp;tab_module=front_office_features&amp;module_name=blockmyaccount&amp;anchor=Blockmyaccount" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockmyaccount" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockmyaccount" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockmyaccount&amp;tab_module=front_office_features&amp;module_name=blockmyaccount" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockmyaccountfooter" class="noborder" title="Module blockmyaccountfooter " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok Akun saya di footer website" title="Blok Akun saya di footer website" src="/SupraShop/modules/blockmyaccountfooter/logo.png" />
					</td>
					<td>
						<div id="anchorBlockmyaccountfooter" title="Blok Akun saya di footer website">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockmyaccountfooter</span>
								Blok Akun saya di footer website
								<small class="text-muted">v1.6.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menampilkan blok dengan link akun pelanggan.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockmyaccountfooter&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockmyaccountfooter&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockmyaccountfooter&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockmyaccountfooter&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockmyaccountfooter&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockmyaccountfooter&amp;tab_module=front_office_features&amp;module_name=blockmyaccountfooter&amp;anchor=Blockmyaccountfooter" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockmyaccountfooter" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockmyaccountfooter" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockmyaccountfooter&amp;tab_module=front_office_features&amp;module_name=blockmyaccountfooter" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockbanner" class="noborder" title="Module blockbanner " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok banner" title="Blok banner" src="/SupraShop/modules/blockbanner/logo.png" />
					</td>
					<td>
						<div id="anchorBlockbanner" title="Blok banner">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockbanner</span>
								Blok banner
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tampilkan banner dibagian header website Anda.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blockbanner&amp;tab_module=front_office_features&amp;module_name=blockbanner" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockbanner&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockbanner&amp;enable_device=4&amp;tab_module=front_office_features" onclick=""  title="Tampilkan pada perangkat mobile"><i class="icon-mobile"></i> Tampilkan pada perangkat mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockbanner&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockbanner&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockbanner&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockbanner&amp;tab_module=front_office_features&amp;module_name=blockbanner&amp;anchor=Blockbanner" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockbanner" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockbanner" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockbanner&amp;tab_module=front_office_features&amp;module_name=blockbanner" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockmanufacturer" class="noborder" title="Module blockmanufacturer " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok brand" title="Blok brand" src="/SupraShop/modules/blockmanufacturer/logo.png" />
					</td>
					<td>
						<div id="anchorBlockmanufacturer" title="Blok brand">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockmanufacturer</span>
								Blok brand
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menampilkan blok berisi produsen/brand
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blockmanufacturer&amp;tab_module=front_office_features&amp;module_name=blockmanufacturer" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockmanufacturer&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockmanufacturer&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockmanufacturer&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockmanufacturer&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockmanufacturer&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockmanufacturer&amp;tab_module=front_office_features&amp;module_name=blockmanufacturer&amp;anchor=Blockmanufacturer" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockmanufacturer" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockmanufacturer" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockmanufacturer&amp;tab_module=front_office_features&amp;module_name=blockmanufacturer" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockcms" class="noborder" title="Module blockcms " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok CMS" title="Blok CMS" src="/SupraShop/modules/blockcms/logo.png" />
					</td>
					<td>
						<div id="anchorBlockcms" title="Blok CMS">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockcms</span>
								Blok CMS
								<small class="text-muted">v2.1.1 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan blok dengan tautan ke halaman CMS.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blockcms&amp;tab_module=front_office_features&amp;module_name=blockcms" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcms&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcms&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcms&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcms&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcms&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockcms&amp;tab_module=front_office_features&amp;module_name=blockcms&amp;anchor=Blockcms" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockcms" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockcms" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockcms&amp;tab_module=front_office_features&amp;module_name=blockcms" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockcustomerprivacy" class="noborder" title="Module blockcustomerprivacy " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok data privasi pelanggan" title="Blok data privasi pelanggan" src="/SupraShop/modules/blockcustomerprivacy/logo.png" />
					</td>
					<td>
						<div id="anchorBlockcustomerprivacy" title="Blok data privasi pelanggan">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockcustomerprivacy</span>
								Blok data privasi pelanggan
								<small class="text-muted">v2.0.1 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	Blok untun menampilkan informasi mengenai privasi pelanggan.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=blockcustomerprivacy&amp;tab_module=front_office_features&amp;module_name=blockcustomerprivacy&amp;anchor=Blockcustomerprivacy">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockcustomerprivacy&amp;tab_module=front_office_features&amp;module_name=blockcustomerprivacy" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockspecials" class="noborder" title="Module blockspecials " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok diskon" title="Blok diskon" src="/SupraShop/modules/blockspecials/logo.png" />
					</td>
					<td>
						<div id="anchorBlockspecials" title="Blok diskon">
							<div class="text-muted">
								Harga &amp; Promosi
							</div>
							<div class="module_name">
								<span style="display:none">blockspecials</span>
								Blok diskon
								<small class="text-muted">v1.3.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Blok untuk menampilkan produk yang didiskon.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blockspecials&amp;tab_module=pricing_promotion&amp;module_name=blockspecials" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockspecials&amp;enable=0&amp;tab_module=pricing_promotion" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockspecials&amp;disable_device=4&amp;tab_module=pricing_promotion" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockspecials&amp;disable_device=2&amp;tab_module=pricing_promotion" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockspecials&amp;disable_device=1&amp;tab_module=pricing_promotion" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockspecials&amp;reset&amp;tab_module=pricing_promotion" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockspecials&amp;tab_module=pricing_promotion&amp;module_name=blockspecials&amp;anchor=Blockspecials" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockspecials" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockspecials" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockspecials&amp;tab_module=pricing_promotion&amp;module_name=blockspecials" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockfacebook" class="noborder" title="Module blockfacebook " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok Facebook like box" title="Blok Facebook like box" src="/SupraShop/modules/blockfacebook/logo.png" />
					</td>
					<td>
						<div id="anchorBlockfacebook" title="Blok Facebook like box">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockfacebook</span>
								Blok Facebook like box
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Blok untuk berlangganan ke halaman Facebook Anda.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blockfacebook&amp;tab_module=front_office_features&amp;module_name=blockfacebook" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockfacebook&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockfacebook&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockfacebook&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockfacebook&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockfacebook&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockfacebook&amp;tab_module=front_office_features&amp;module_name=blockfacebook&amp;anchor=Blockfacebook" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockfacebook" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockfacebook" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockfacebook&amp;tab_module=front_office_features&amp;module_name=blockfacebook" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockadvertising" class="noborder" title="Module blockadvertising " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok Iklan" title="Blok Iklan" src="/SupraShop/modules/blockadvertising/logo.png" />
					</td>
					<td>
						<div id="anchorBlockadvertising" title="Blok Iklan">
							<div class="text-muted">
								Periklanan &amp; Pemasaran
							</div>
							<div class="module_name">
								<span style="display:none">blockadvertising</span>
								Blok Iklan
								<small class="text-muted">v0.10.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	Menambahkan blok iklan ke bagian tertentu di website Anda.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=blockadvertising&amp;tab_module=advertising_marketing&amp;module_name=blockadvertising&amp;anchor=Blockadvertising">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockadvertising&amp;tab_module=advertising_marketing&amp;module_name=blockadvertising" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockcmsinfo" class="noborder" title="Module blockcmsinfo " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok informasi CMS kustom" title="Blok informasi CMS kustom" src="/SupraShop/modules/blockcmsinfo/logo.png" />
					</td>
					<td>
						<div id="anchorBlockcmsinfo" title="Blok informasi CMS kustom">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockcmsinfo</span>
								Blok informasi CMS kustom
								<small class="text-muted">v1.6.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan blok berisi informasi kustom di toko Anda.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blockcmsinfo&amp;tab_module=front_office_features&amp;module_name=blockcmsinfo" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcmsinfo&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcmsinfo&amp;enable_device=4&amp;tab_module=front_office_features" onclick=""  title="Tampilkan pada perangkat mobile"><i class="icon-mobile"></i> Tampilkan pada perangkat mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcmsinfo&amp;enable_device=2&amp;tab_module=front_office_features" onclick=""  title="Tampilkan pada perangkat tablet"><i class="icon-tablet"></i> Tampilkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcmsinfo&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcmsinfo&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockcmsinfo&amp;tab_module=front_office_features&amp;module_name=blockcmsinfo&amp;anchor=Blockcmsinfo" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockcmsinfo" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockcmsinfo" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockcmsinfo&amp;tab_module=front_office_features&amp;module_name=blockcmsinfo" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockcontactinfos" class="noborder" title="Module blockcontactinfos " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok informasi kontak" title="Blok informasi kontak" src="/SupraShop/modules/blockcontactinfos/logo.png" />
					</td>
					<td>
						<div id="anchorBlockcontactinfos" title="Blok informasi kontak">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockcontactinfos</span>
								Blok informasi kontak
								<small class="text-muted">v1.2.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan blok untuk menyediakan informasi tentang bagaimana menghubungi toko Anda.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blockcontactinfos&amp;tab_module=front_office_features&amp;module_name=blockcontactinfos" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcontactinfos&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcontactinfos&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcontactinfos&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcontactinfos&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcontactinfos&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockcontactinfos&amp;tab_module=front_office_features&amp;module_name=blockcontactinfos&amp;anchor=Blockcontactinfos" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockcontactinfos" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockcontactinfos" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockcontactinfos&amp;tab_module=front_office_features&amp;module_name=blockcontactinfos" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockuserinfo" class="noborder" title="Module blockuserinfo " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok info user" title="Blok info user" src="/SupraShop/modules/blockuserinfo/logo.png" />
					</td>
					<td>
						<div id="anchorBlockuserinfo" title="Blok info user">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockuserinfo</span>
								Blok info user
								<small class="text-muted">v0.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan blok yang menampilkan informasi tentang pelanggan.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockuserinfo&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockuserinfo&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockuserinfo&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockuserinfo&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockuserinfo&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockuserinfo&amp;tab_module=front_office_features&amp;module_name=blockuserinfo&amp;anchor=Blockuserinfo" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockuserinfo" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockuserinfo" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockuserinfo&amp;tab_module=front_office_features&amp;module_name=blockuserinfo" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockcategories" class="noborder" title="Module blockcategories " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok kategori" title="Blok kategori" src="/SupraShop/modules/blockcategories/logo.png" />
					</td>
					<td>
						<div id="anchorBlockcategories" title="Blok kategori">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockcategories</span>
								Blok kategori
								<small class="text-muted">v2.9.2 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Blok untuk menampilkan kategori produk.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blockcategories&amp;tab_module=front_office_features&amp;module_name=blockcategories" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcategories&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcategories&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcategories&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcategories&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcategories&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockcategories&amp;tab_module=front_office_features&amp;module_name=blockcategories&amp;anchor=Blockcategories" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockcategories" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockcategories" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockcategories&amp;tab_module=front_office_features&amp;module_name=blockcategories" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockcontact" class="noborder" title="Module blockcontact " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok kontak" title="Blok kontak" src="/SupraShop/modules/blockcontact/logo.png" />
					</td>
					<td>
						<div id="anchorBlockcontact" title="Blok kontak">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockcontact</span>
								Blok kontak
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Memperbolehkan Anda menambahkan informasi tambahan tentang layanan pelanggan di toko Anda.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blockcontact&amp;tab_module=front_office_features&amp;module_name=blockcontact" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcontact&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcontact&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcontact&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcontact&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcontact&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockcontact&amp;tab_module=front_office_features&amp;module_name=blockcontact&amp;anchor=Blockcontact" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockcontact" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockcontact" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockcontact&amp;tab_module=front_office_features&amp;module_name=blockcontact" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blocklayered" class="noborder" title="Module blocklayered " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok Layered navigation" title="Blok Layered navigation" src="/SupraShop/modules/blocklayered/logo.png" />
					</td>
					<td>
						<div id="anchorBlocklayered" title="Blok Layered navigation">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blocklayered</span>
								Blok Layered navigation
								<small class="text-muted">v2.1.3 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tampilkan blok filter produk.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blocklayered&amp;tab_module=front_office_features&amp;module_name=blocklayered" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocklayered&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocklayered&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocklayered&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocklayered&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocklayered&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blocklayered&amp;tab_module=front_office_features&amp;module_name=blocklayered&amp;anchor=Blocklayered" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blocklayered" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blocklayered" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blocklayered&amp;tab_module=front_office_features&amp;module_name=blocklayered" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockpaymentlogo" class="noborder" title="Module blockpaymentlogo " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok logo pembayaran" title="Blok logo pembayaran" src="/SupraShop/modules/blockpaymentlogo/logo.png" />
					</td>
					<td>
						<div id="anchorBlockpaymentlogo" title="Blok logo pembayaran">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockpaymentlogo</span>
								Blok logo pembayaran
								<small class="text-muted">v0.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan blok untuk menampilkan logo pembayaran di toko Anda.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blockpaymentlogo&amp;tab_module=front_office_features&amp;module_name=blockpaymentlogo" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockpaymentlogo&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockpaymentlogo&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockpaymentlogo&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockpaymentlogo&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockpaymentlogo&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockpaymentlogo&amp;tab_module=front_office_features&amp;module_name=blockpaymentlogo&amp;anchor=Blockpaymentlogo" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockpaymentlogo" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockpaymentlogo" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockpaymentlogo&amp;tab_module=front_office_features&amp;module_name=blockpaymentlogo" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="productpaymentlogos" class="noborder" title="Module productpaymentlogos " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok logo pembayaran produk" title="Blok logo pembayaran produk" src="/SupraShop/modules/productpaymentlogos/logo.png" />
					</td>
					<td>
						<div id="anchorProductpaymentlogos" title="Blok logo pembayaran produk">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">productpaymentlogos</span>
								Blok logo pembayaran produk
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tampilkan logo pembayaran di halaman produk.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=productpaymentlogos&amp;tab_module=front_office_features&amp;module_name=productpaymentlogos" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=productpaymentlogos&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=productpaymentlogos&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=productpaymentlogos&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=productpaymentlogos&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=productpaymentlogos&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=productpaymentlogos&amp;tab_module=front_office_features&amp;module_name=productpaymentlogos&amp;anchor=Productpaymentlogos" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="productpaymentlogos" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="productpaymentlogos" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=productpaymentlogos&amp;tab_module=front_office_features&amp;module_name=productpaymentlogos" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockcurrencies" class="noborder" title="Module blockcurrencies " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok mata uang" title="Blok mata uang" src="/SupraShop/modules/blockcurrencies/logo.png" />
					</td>
					<td>
						<div id="anchorBlockcurrencies" title="Blok mata uang">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockcurrencies</span>
								Blok mata uang
								<small class="text-muted">v0.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan blok untuk pelanggan memilih mata uang belanja mereka.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcurrencies&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcurrencies&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcurrencies&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcurrencies&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcurrencies&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockcurrencies&amp;tab_module=front_office_features&amp;module_name=blockcurrencies&amp;anchor=Blockcurrencies" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockcurrencies" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockcurrencies" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockcurrencies&amp;tab_module=front_office_features&amp;module_name=blockcurrencies" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blocknewsletter" class="noborder" title="Module blocknewsletter " data-rel="Apakah Anda yakin ingin menghapus semua kontak Anda?"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok Newsletter" title="Blok Newsletter" src="/SupraShop/modules/blocknewsletter/logo.png" />
					</td>
					<td>
						<div id="anchorBlocknewsletter" title="Blok Newsletter">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blocknewsletter</span>
								Blok Newsletter
								<small class="text-muted">v2.3.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan blok untuk berlangganan newsletter.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blocknewsletter&amp;tab_module=front_office_features&amp;module_name=blocknewsletter" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocknewsletter&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocknewsletter&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocknewsletter&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocknewsletter&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocknewsletter&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blocknewsletter&amp;tab_module=front_office_features&amp;module_name=blocknewsletter&amp;anchor=Blocknewsletter" onclick="return confirm('Apakah Anda yakin ingin menghapus semua kontak Anda?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blocknewsletter" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blocknewsletter" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blocknewsletter&amp;tab_module=front_office_features&amp;module_name=blocknewsletter" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blocksearch" class="noborder" title="Module blocksearch " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok pencarian" title="Blok pencarian" src="/SupraShop/modules/blocksearch/logo.png" />
					</td>
					<td>
						<div id="anchorBlocksearch" title="Blok pencarian">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">blocksearch</span>
								Blok pencarian
								<small class="text-muted">v1.7.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan blok untuk pencarian.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocksearch&amp;enable=0&amp;tab_module=others" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocksearch&amp;disable_device=4&amp;tab_module=others" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocksearch&amp;disable_device=2&amp;tab_module=others" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocksearch&amp;disable_device=1&amp;tab_module=others" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocksearch&amp;reset&amp;tab_module=others" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blocksearch&amp;tab_module=others&amp;module_name=blocksearch&amp;anchor=Blocksearch" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blocksearch" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blocksearch" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blocksearch&amp;tab_module=others&amp;module_name=blocksearch" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockstore" class="noborder" title="Module blockstore " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok pencarian toko" title="Blok pencarian toko" src="/SupraShop/modules/blockstore/logo.png" />
					</td>
					<td>
						<div id="anchorBlockstore" title="Blok pencarian toko">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockstore</span>
								Blok pencarian toko
								<small class="text-muted">v1.3.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menampilkan gambar berisi tautan ke fitur pencarian toko.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blockstore&amp;tab_module=front_office_features&amp;module_name=blockstore" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockstore&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockstore&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockstore&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockstore&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockstore&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockstore&amp;tab_module=front_office_features&amp;module_name=blockstore&amp;anchor=Blockstore" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockstore" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockstore" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockstore&amp;tab_module=front_office_features&amp;module_name=blockstore" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blocknewproducts" class="noborder" title="Module blocknewproducts " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok produk baru" title="Blok produk baru" src="/SupraShop/modules/blocknewproducts/logo.png" />
					</td>
					<td>
						<div id="anchorBlocknewproducts" title="Blok produk baru">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blocknewproducts</span>
								Blok produk baru
								<small class="text-muted">v1.10.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tampilkan blok berisi daftar produk terbaru.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blocknewproducts&amp;tab_module=front_office_features&amp;module_name=blocknewproducts" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocknewproducts&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocknewproducts&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocknewproducts&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocknewproducts&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocknewproducts&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blocknewproducts&amp;tab_module=front_office_features&amp;module_name=blocknewproducts&amp;anchor=Blocknewproducts" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blocknewproducts" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blocknewproducts" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blocknewproducts&amp;tab_module=front_office_features&amp;module_name=blocknewproducts" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockbestsellers" class="noborder" title="Module blockbestsellers " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok produk terlaris" title="Blok produk terlaris" src="/SupraShop/modules/blockbestsellers/logo.png" />
					</td>
					<td>
						<div id="anchorBlockbestsellers" title="Blok produk terlaris">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockbestsellers</span>
								Blok produk terlaris
								<small class="text-muted">v1.8.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Blok untuk menampilkan produk terlaris.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blockbestsellers&amp;tab_module=front_office_features&amp;module_name=blockbestsellers" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockbestsellers&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockbestsellers&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockbestsellers&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockbestsellers&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockbestsellers&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockbestsellers&amp;tab_module=front_office_features&amp;module_name=blockbestsellers&amp;anchor=Blockbestsellers" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockbestsellers" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockbestsellers" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockbestsellers&amp;tab_module=front_office_features&amp;module_name=blockbestsellers" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockviewed" class="noborder" title="Module blockviewed " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok Produk yang pernah dilihat" title="Blok Produk yang pernah dilihat" src="/SupraShop/modules/blockviewed/logo.png" />
					</td>
					<td>
						<div id="anchorBlockviewed" title="Blok Produk yang pernah dilihat">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockviewed</span>
								Blok Produk yang pernah dilihat
								<small class="text-muted">v1.3.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan blok menampilkan terakhir dilihat produk.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blockviewed&amp;tab_module=front_office_features&amp;module_name=blockviewed" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockviewed&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockviewed&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockviewed&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockviewed&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockviewed&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockviewed&amp;tab_module=front_office_features&amp;module_name=blockviewed&amp;anchor=Blockviewed" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockviewed" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockviewed" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockviewed&amp;tab_module=front_office_features&amp;module_name=blockviewed" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockreinsurance" class="noborder" title="Module blockreinsurance " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok reassurance" title="Blok reassurance" src="/SupraShop/modules/blockreinsurance/logo.png" />
					</td>
					<td>
						<div id="anchorBlockreinsurance" title="Blok reassurance">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockreinsurance</span>
								Blok reassurance
								<small class="text-muted">v2.2.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	Menambahkan blok untuk menampilkan informasi untuk meyakinkan pengunjung.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																					<a class="btn btn-success untrustedaddon" href="#" data-target="#moduleNotTrusted" data-toggle="modal" data-link="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=blockreinsurance&amp;tab_module=front_office_features&amp;module_name=blockreinsurance&amp;anchor=Blockreinsurance" data-module-display-name="Blok reassurance" data-module-name="blockreinsurance" data-module-image="/SupraShop/modules/blockreinsurance/logo.png" data-author-name="PrestaShop" data-author-uri="">
											<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
										</a>
																			
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																																																																									<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockreinsurance&amp;tab_module=front_office_features&amp;module_name=blockreinsurance" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockrss" class="noborder" title="Module blockrss " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok RSS feed" title="Blok RSS feed" src="/SupraShop/modules/blockrss/logo.png" />
					</td>
					<td>
						<div id="anchorBlockrss" title="Blok RSS feed">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockrss</span>
								Blok RSS feed
								<small class="text-muted">v1.3.1 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	Blok untuk menampilkan RSS feed.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=blockrss&amp;tab_module=front_office_features&amp;module_name=blockrss&amp;anchor=Blockrss">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockrss&amp;tab_module=front_office_features&amp;module_name=blockrss" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blocksocial" class="noborder" title="Module blocksocial " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok social networking" title="Blok social networking" src="/SupraShop/modules/blocksocial/logo.png" />
					</td>
					<td>
						<div id="anchorBlocksocial" title="Blok social networking">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blocksocial</span>
								Blok social networking
								<small class="text-muted">v1.2.1 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan akun social networking bagi brand Anda .
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blocksocial&amp;tab_module=front_office_features&amp;module_name=blocksocial" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocksocial&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocksocial&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocksocial&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocksocial&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocksocial&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blocksocial&amp;tab_module=front_office_features&amp;module_name=blocksocial&amp;anchor=Blocksocial" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blocksocial" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blocksocial" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blocksocial&amp;tab_module=front_office_features&amp;module_name=blocksocial" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blocksupplier" class="noborder" title="Module blocksupplier " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok supplier" title="Blok supplier" src="/SupraShop/modules/blocksupplier/logo.png" />
					</td>
					<td>
						<div id="anchorBlocksupplier" title="Blok supplier">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blocksupplier</span>
								Blok supplier
								<small class="text-muted">v1.2.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Blok untuk menampilkan supplier produk.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blocksupplier&amp;tab_module=front_office_features&amp;module_name=blocksupplier" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocksupplier&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocksupplier&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocksupplier&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocksupplier&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocksupplier&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blocksupplier&amp;tab_module=front_office_features&amp;module_name=blocksupplier&amp;anchor=Blocksupplier" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blocksupplier" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blocksupplier" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blocksupplier&amp;tab_module=front_office_features&amp;module_name=blocksupplier" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blocktags" class="noborder" title="Module blocktags " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok Tag" title="Blok Tag" src="/SupraShop/modules/blocktags/logo.png" />
					</td>
					<td>
						<div id="anchorBlocktags" title="Blok Tag">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blocktags</span>
								Blok Tag
								<small class="text-muted">v1.3.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Blok yang berisi tag produk.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blocktags&amp;tab_module=front_office_features&amp;module_name=blocktags" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocktags&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocktags&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocktags&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocktags&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocktags&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blocktags&amp;tab_module=front_office_features&amp;module_name=blocktags&amp;anchor=Blocktags" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blocktags" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blocktags" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blocktags&amp;tab_module=front_office_features&amp;module_name=blocktags" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blocklink" class="noborder" title="Module blocklink " data-rel="Apakah Anda yakin ingin menghapus semua tautan Anda?"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok Tautan" title="Blok Tautan" src="/SupraShop/modules/blocklink/logo.png" />
					</td>
					<td>
						<div id="anchorBlocklink" title="Blok Tautan">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blocklink</span>
								Blok Tautan
								<small class="text-muted">v1.6.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	Menambahkan blok dengan link tambahan.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=blocklink&amp;tab_module=front_office_features&amp;module_name=blocklink&amp;anchor=Blocklink">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blocklink&amp;tab_module=front_office_features&amp;module_name=blocklink" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockpermanentlinks" class="noborder" title="Module blockpermanentlinks " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok tautan permanen" title="Blok tautan permanen" src="/SupraShop/modules/blockpermanentlinks/logo.png" />
					</td>
					<td>
						<div id="anchorBlockpermanentlinks" title="Blok tautan permanen">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockpermanentlinks</span>
								Blok tautan permanen
								<small class="text-muted">v0.3.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	Tambahkan blok untuk menampilkan tautan permanen seperti sitemap, kontak dll.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=blockpermanentlinks&amp;tab_module=front_office_features&amp;module_name=blockpermanentlinks&amp;anchor=Blockpermanentlinks">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockpermanentlinks&amp;tab_module=front_office_features&amp;module_name=blockpermanentlinks" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockcart" class="noborder" title="Module blockcart " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok Troli" title="Blok Troli" src="/SupraShop/modules/blockcart/logo.png" />
					</td>
					<td>
						<div id="anchorBlockcart" title="Blok Troli">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockcart</span>
								Blok Troli
								<small class="text-muted">v1.6.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan blok berisi daftar belanja pelanggan.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blockcart&amp;tab_module=front_office_features&amp;module_name=blockcart" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcart&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcart&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcart&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcart&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockcart&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockcart&amp;tab_module=front_office_features&amp;module_name=blockcart&amp;anchor=Blockcart" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockcart" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockcart" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockcart&amp;tab_module=front_office_features&amp;module_name=blockcart" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blocklanguages" class="noborder" title="Module blocklanguages " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Blok untuk memilih bahasa" title="Blok untuk memilih bahasa" src="/SupraShop/modules/blocklanguages/logo.png" />
					</td>
					<td>
						<div id="anchorBlocklanguages" title="Blok untuk memilih bahasa">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blocklanguages</span>
								Blok untuk memilih bahasa
								<small class="text-muted">v1.5.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan blok yang memungkinkan pelanggan untuk memilih bahasa di toko Anda.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocklanguages&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocklanguages&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocklanguages&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocklanguages&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocklanguages&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blocklanguages&amp;tab_module=front_office_features&amp;module_name=blocklanguages&amp;anchor=Blocklanguages" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blocklanguages" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blocklanguages" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blocklanguages&amp;tab_module=front_office_features&amp;module_name=blocklanguages" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="bluesnap" class="noborder" title="Module bluesnap " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="BlueSnap All-in-one Global Payment" title="BlueSnap All-in-one Global Payment" src="../img/tmp/77615c66d71958c1376286b8b9353ccd.jpg" />
					</td>
					<td>
						<div id="anchorBluesnap" title="BlueSnap All-in-one Global Payment">
							<div class="text-muted">
								Pembayaran &amp; Gateway
							</div>
							<div class="module_name">
								<span style="display:none">bluesnap</span>
								BlueSnap All-in-one Global Payment
								<small class="text-muted">v1.7.1 - oleh PrestaShop Partners</small>
																	- <span class="module-badge-partner help-tooltip text-warning" data-title="Modul prestashop resmi dan tersertifikasi. Gratis, aman dan termasuk update!"><i class="icon-pushpin"></i> <small>Resmi</small></span>
															</div>
							<p class="module_description">
																	BlueSnap is a global payment gateway and so much more
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=bluesnap" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=bluesnap&amp;tab_module=payments_gateways&amp;module_name=bluesnap&amp;anchor=Bluesnap">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="bluesnap" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="bluesnap" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="brinkscheckout" class="noborder" title="Module brinkscheckout " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Brink&#039;s Checkout" title="Brink&#039;s Checkout" src="../img/tmp/3d7e8df71bbf6d4781003531daf7f6be.jpg" />
					</td>
					<td>
						<div id="anchorBrinkscheckout" title="Brink&#039;s Checkout">
							<div class="text-muted">
								Pembayaran &amp; Gateway
							</div>
							<div class="module_name">
								<span style="display:none">brinkscheckout</span>
								Brink&#039;s Checkout
								<small class="text-muted">v1.6.8 - oleh PrestaShop Partners</small>
																	- <span class="module-badge-partner help-tooltip text-warning" data-title="Modul prestashop resmi dan tersertifikasi. Gratis, aman dan termasuk update!"><i class="icon-pushpin"></i> <small>Resmi</small></span>
															</div>
							<p class="module_description">
																	Brink&rsquo;s Checkout, a service provided by The Brink&rsquo;s Company, allows merchants from 200 countries to accept online payments from customers worldwide in multiple currencies and languages in 
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=brinkscheckout" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=brinkscheckout&amp;tab_module=payments_gateways&amp;module_name=brinkscheckout&amp;anchor=Brinkscheckout">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="brinkscheckout" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="brinkscheckout" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statsequipment" class="noborder" title="Module statsequipment " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Browser dan sistem operasi" title="Browser dan sistem operasi" src="/SupraShop/modules/statsequipment/logo.png" />
					</td>
					<td>
						<div id="anchorStatsequipment" title="Browser dan sistem operasi">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statsequipment</span>
								Browser dan sistem operasi
								<small class="text-muted">v1.3.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan tab berisi grafik mengenai penggunaan web browser dan sistem operasi ke statistik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsequipment&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsequipment&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsequipment&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsequipment&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsequipment&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statsequipment&amp;tab_module=analytics_stats&amp;module_name=statsequipment&amp;anchor=Statsequipment" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statsequipment" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statsequipment" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statsequipment&amp;tab_module=analytics_stats&amp;module_name=statsequipment" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Cache Manager" title="Cache Manager" src="../img/tmp/04447f2b1da3fab79adaa6200b4d7a20.jpg" />
					</td>
					<td>
						<div id="anchorPm_cachemanager" title="Cache Manager">
							<div class="text-muted">
								SEO
							</div>
							<div class="module_name">
								<span style="display:none">pm_cachemanager</span>
								Cache Manager
								<small class="text-muted">v1.2.12 - oleh Presta-Module</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Decrease your loading page time generation
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=pm_cachemanager" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/seo-prestashop-modules/6413-cache-manager.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Call Back" title="Call Back" src="../img/tmp/fa193a01a40e150ecf962aad04726a08.jpg" />
					</td>
					<td>
						<div id="anchorWebcallback" title="Call Back">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">webcallback</span>
								Call Back
								<small class="text-muted">v1.0.3 - oleh PrestaShop</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Add the Call Back module to your online store to increase sales!  Nothing is more frustrating than getting through to a company, just to be put on hold
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=webcallback" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/front-office-features-prestashop-modules/3162-web-call-back.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="carriercompare" class="noborder" title="Module carriercompare " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Carrier Compare" title="Carrier Compare" src="../img/tmp/86252eb32494306bfcc0cd8d35e5e062.jpg" />
					</td>
					<td>
						<div id="anchorCarriercompare" title="Carrier Compare">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">carriercompare</span>
								Carrier Compare
								<small class="text-muted">v2.3.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=carriercompare&amp;tab_module=others&amp;module_name=carriercompare&amp;anchor=Carriercompare">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="carriercompare" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="carriercompare" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="cashondelivery" class="noborder" title="Module cashondelivery " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Cash on Delivery" title="Cash on Delivery" src="../img/tmp/53d994bfe3d98450777275d6de32aa72.jpg" />
					</td>
					<td>
						<div id="anchorCashondelivery" title="Cash on Delivery">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">cashondelivery</span>
								Cash on Delivery
								<small class="text-muted">v0.7.5 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	Accept cash on delivery payments
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=cashondelivery" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=cashondelivery&amp;tab_module=others&amp;module_name=cashondelivery&amp;anchor=Cashondelivery">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="cashondelivery" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="cashondelivery" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Cdiscount Marketplace" title="Cdiscount Marketplace" src="../img/tmp/74d244964f03cb78ac1d2e78fa62625d.jpg" />
					</td>
					<td>
						<div id="anchorCdiscount" title="Cdiscount Marketplace">
							<div class="text-muted">
								Market Place
							</div>
							<div class="module_name">
								<span style="display:none">cdiscount</span>
								Cdiscount Marketplace
								<small class="text-muted">v3.9.145 - oleh Common-Services</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Sell your products on the Cdiscount marketplace: catalogue export, automatic updating of prices and stocks, retrieval and management of orders
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=cdiscount" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/marketplace-prestashop-modules/6059-cdiscount-marketplace.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="confirmpayment" class="noborder" title="Module confirmpayment " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Confirm Payment PT.Suprabakti Mandiri" title="Confirm Payment PT.Suprabakti Mandiri" src="/SupraShop/modules/confirmpayment/logo.gif" />
					</td>
					<td>
						<div id="anchorConfirmpayment" title="Confirm Payment PT.Suprabakti Mandiri">
							<div class="text-muted">
								Administrasi
							</div>
							<div class="module_name">
								<span style="display:none">confirmpayment</span>
								Confirm Payment PT.Suprabakti Mandiri
								<small class="text-muted">v1.0 - oleh PT.SUPRABAKTI MANDIRI</small>
																																</div>
							<p class="module_description">
																	Confirm Payment PT.Suprabakti Mandiri
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=confirmpayment&amp;tab_module=administration&amp;module_name=confirmpayment" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=confirmpayment&amp;enable=0&amp;tab_module=administration" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=confirmpayment&amp;enable_device=4&amp;tab_module=administration" onclick=""  title="Tampilkan pada perangkat mobile"><i class="icon-mobile"></i> Tampilkan pada perangkat mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=confirmpayment&amp;enable_device=2&amp;tab_module=administration" onclick=""  title="Tampilkan pada perangkat tablet"><i class="icon-tablet"></i> Tampilkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=confirmpayment&amp;disable_device=1&amp;tab_module=administration" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=confirmpayment&amp;reset&amp;tab_module=administration" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=confirmpayment&amp;tab_module=administration&amp;module_name=confirmpayment&amp;anchor=Confirmpayment" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="confirmpayment" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="confirmpayment" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=confirmpayment&amp;tab_module=administration&amp;module_name=confirmpayment" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Credit Notes / Memos of the Complete Invoice in PDF" title="Credit Notes / Memos of the Complete Invoice in PDF" src="../img/tmp/5d604a5955f769c7804aea13e3b369a4.jpg" />
					</td>
					<td>
						<div id="anchorLgabonos" title="Credit Notes / Memos of the Complete Invoice in PDF">
							<div class="text-muted">
								Pajak &amp; Invoice
							</div>
							<div class="module_name">
								<span style="display:none">lgabonos</span>
								Credit Notes / Memos of the Complete Invoice in PDF
								<small class="text-muted">v1.3.1 - oleh Línea Gráfica</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Generate credit notes of the full invoice you need to cancel (not possible to generate partial credit notes). Unlimited number of credit notes
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=lgabonos" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/billing-invoicing-prestashop-modules/6414-credit-notes-memos-of-the-complete-invoice-in-pdf.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="cronjobs" class="noborder" title="Module cronjobs " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Cron tasks manager" title="Cron tasks manager" src="/SupraShop/modules/cronjobs/logo.png" />
					</td>
					<td>
						<div id="anchorCronjobs" title="Cron tasks manager">
							<div class="text-muted">
								Administrasi
							</div>
							<div class="module_name">
								<span style="display:none">cronjobs</span>
								Cron tasks manager
								<small class="text-muted">v1.3.2 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Mengelola semua otomatisasi web task dari satu tampilan.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=cronjobs&amp;tab_module=administration&amp;module_name=cronjobs" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=cronjobs&amp;enable=0&amp;tab_module=administration" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=cronjobs&amp;disable_device=4&amp;tab_module=administration" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=cronjobs&amp;disable_device=2&amp;tab_module=administration" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=cronjobs&amp;disable_device=1&amp;tab_module=administration" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=cronjobs&amp;reset&amp;tab_module=administration" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=cronjobs&amp;tab_module=administration&amp;module_name=cronjobs&amp;anchor=Cronjobs" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="cronjobs" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="cronjobs" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=cronjobs&amp;tab_module=administration&amp;module_name=cronjobs" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="crossselling" class="noborder" title="Module crossselling " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Cross-selling" title="Cross-selling" src="/SupraShop/modules/crossselling/logo.png" />
					</td>
					<td>
						<div id="anchorCrossselling" title="Cross-selling">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">crossselling</span>
								Cross-selling
								<small class="text-muted">v1.1.1 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	Tambahkan blok &quot;Pelanggan yang membeli produk ini, membeli juga...&quot; di halaman produk.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=crossselling&amp;tab_module=front_office_features&amp;module_name=crossselling&amp;anchor=Crossselling">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=crossselling&amp;tab_module=front_office_features&amp;module_name=crossselling" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="newsletter" class="noborder" title="Module newsletter " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="CSV Export for Newsletters" title="CSV Export for Newsletters" src="../img/tmp/efdd51a2ff4c7de8bd97ca02e187d512.jpg" />
					</td>
					<td>
						<div id="anchorNewsletter" title="CSV Export for Newsletters">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">newsletter</span>
								CSV Export for Newsletters
								<small class="text-muted">v2.5.1 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=newsletter&amp;tab_module=others&amp;module_name=newsletter&amp;anchor=Newsletter">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="newsletter" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="newsletter" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="followup" class="noborder" title="Module followup " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Customer Follow-up" title="Customer Follow-up" src="../img/tmp/26cbcca1070949b9530694a41026e8d7.jpg" />
					</td>
					<td>
						<div id="anchorFollowup" title="Customer Follow-up">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">followup</span>
								Customer Follow-up
								<small class="text-muted">v1.7.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=followup&amp;tab_module=others&amp;module_name=followup&amp;anchor=Followup">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="followup" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="followup" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Custom Fields" title="Custom Fields" src="../img/tmp/4907e4a0b85978459aee6629affb0085.jpg" />
					</td>
					<td>
						<div id="anchorCustomfields" title="Custom Fields">
							<div class="text-muted">
								Manajemen Konten
							</div>
							<div class="module_name">
								<span style="display:none">customfields</span>
								Custom Fields
								<small class="text-muted">v1.3.7 - oleh Community</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Create unlimited number of custom fields for registration form. You can add all kinds of fields: text, text area, radio buttons, check boxes and select lists with unlimited number of options and more
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=customfields" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/content-management/7152-custom-fields.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="dashactivity" class="noborder" title="Module dashactivity " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Dasbor Aktifitas" title="Dasbor Aktifitas" src="/SupraShop/modules/dashactivity/logo.png" />
					</td>
					<td>
						<div id="anchorDashactivity" title="Dasbor Aktifitas">
							<div class="text-muted">
								Dashboard
							</div>
							<div class="module_name">
								<span style="display:none">dashactivity</span>
								Dasbor Aktifitas
								<small class="text-muted">v0.5.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashactivity&amp;enable=0&amp;tab_module=dashboard" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashactivity&amp;disable_device=4&amp;tab_module=dashboard" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashactivity&amp;disable_device=2&amp;tab_module=dashboard" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashactivity&amp;disable_device=1&amp;tab_module=dashboard" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashactivity&amp;reset&amp;tab_module=dashboard" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=dashactivity&amp;tab_module=dashboard&amp;module_name=dashactivity&amp;anchor=Dashactivity" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="dashactivity" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="dashactivity" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=dashactivity&amp;tab_module=dashboard&amp;module_name=dashactivity" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="dashproducts" class="noborder" title="Module dashproducts " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Dasbor produk" title="Dasbor produk" src="/SupraShop/modules/dashproducts/logo.png" />
					</td>
					<td>
						<div id="anchorDashproducts" title="Dasbor produk">
							<div class="text-muted">
								Dashboard
							</div>
							<div class="module_name">
								<span style="display:none">dashproducts</span>
								Dasbor produk
								<small class="text-muted">v0.3.5 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan blok berisi data penjualan terakhir dan ranking produk
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashproducts&amp;enable=0&amp;tab_module=dashboard" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashproducts&amp;disable_device=4&amp;tab_module=dashboard" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashproducts&amp;disable_device=2&amp;tab_module=dashboard" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashproducts&amp;disable_device=1&amp;tab_module=dashboard" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashproducts&amp;reset&amp;tab_module=dashboard" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=dashproducts&amp;tab_module=dashboard&amp;module_name=dashproducts&amp;anchor=Dashproducts" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="dashproducts" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="dashproducts" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=dashproducts&amp;tab_module=dashboard&amp;module_name=dashproducts" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="dashtrends" class="noborder" title="Module dashtrends " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Dasbor Trend" title="Dasbor Trend" src="/SupraShop/modules/dashtrends/logo.png" />
					</td>
					<td>
						<div id="anchorDashtrends" title="Dasbor Trend">
							<div class="text-muted">
								Dashboard
							</div>
							<div class="module_name">
								<span style="display:none">dashtrends</span>
								Dasbor Trend
								<small class="text-muted">v0.8.1 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan blok berisi grafis yang mewakili perkembangan toko Anda berdasarkan data tertentu.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashtrends&amp;enable=0&amp;tab_module=dashboard" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashtrends&amp;disable_device=4&amp;tab_module=dashboard" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashtrends&amp;disable_device=2&amp;tab_module=dashboard" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashtrends&amp;disable_device=1&amp;tab_module=dashboard" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashtrends&amp;reset&amp;tab_module=dashboard" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=dashtrends&amp;tab_module=dashboard&amp;module_name=dashtrends&amp;anchor=Dashtrends" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="dashtrends" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="dashtrends" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=dashtrends&amp;tab_module=dashboard&amp;module_name=dashtrends" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="pscleaner" class="noborder" title="Module pscleaner " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Database Cleaner" title="Database Cleaner" src="../img/tmp/345f1c45a73b1ad4ade68f8ae6c2d111.jpg" />
					</td>
					<td>
						<div id="anchorPscleaner" title="Database Cleaner">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">pscleaner</span>
								Database Cleaner
								<small class="text-muted">v1.8.5 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=pscleaner&amp;tab_module=others&amp;module_name=pscleaner&amp;anchor=Pscleaner">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="pscleaner" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="pscleaner" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statsdata" class="noborder" title="Module statsdata " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Data mining untuk statistik" title="Data mining untuk statistik" src="/SupraShop/modules/statsdata/logo.png" />
					</td>
					<td>
						<div id="anchorStatsdata" title="Data mining untuk statistik">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statsdata</span>
								Data mining untuk statistik
								<small class="text-muted">v1.5.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Modul ini harus diaktifkan jika Anda ingin menggunakan Statistik.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=statsdata&amp;tab_module=analytics_stats&amp;module_name=statsdata" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsdata&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsdata&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsdata&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsdata&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsdata&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statsdata&amp;tab_module=analytics_stats&amp;module_name=statsdata&amp;anchor=Statsdata" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statsdata" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statsdata" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statsdata&amp;tab_module=analytics_stats&amp;module_name=statsdata" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="dateofdelivery" class="noborder" title="Module dateofdelivery " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Date of Delivery" title="Date of Delivery" src="../img/tmp/e9f394aeaa5d5d88524de3323f47fd49.jpg" />
					</td>
					<td>
						<div id="anchorDateofdelivery" title="Date of Delivery">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">dateofdelivery</span>
								Date of Delivery
								<small class="text-muted">v1.7.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=dateofdelivery&amp;tab_module=others&amp;module_name=dateofdelivery&amp;anchor=Dateofdelivery">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="dateofdelivery" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="dateofdelivery" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statsproduct" class="noborder" title="Module statsproduct " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Detail produk" title="Detail produk" src="/SupraShop/modules/statsproduct/logo.png" />
					</td>
					<td>
						<div id="anchorStatsproduct" title="Detail produk">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statsproduct</span>
								Detail produk
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan statistik detail untuk produk di statistik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsproduct&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsproduct&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsproduct&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsproduct&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsproduct&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statsproduct&amp;tab_module=analytics_stats&amp;module_name=statsproduct&amp;anchor=Statsproduct" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statsproduct" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statsproduct" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statsproduct&amp;tab_module=analytics_stats&amp;module_name=statsproduct" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statscarrier" class="noborder" title="Module statscarrier " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Distribusi Kurir" title="Distribusi Kurir" src="/SupraShop/modules/statscarrier/logo.png" />
					</td>
					<td>
						<div id="anchorStatscarrier" title="Distribusi Kurir">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statscarrier</span>
								Distribusi Kurir
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan grafik yang untuk menampilkan distribusi kurir ke statistik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statscarrier&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statscarrier&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statscarrier&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statscarrier&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statscarrier&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statscarrier&amp;tab_module=analytics_stats&amp;module_name=statscarrier&amp;anchor=Statscarrier" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statscarrier" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statscarrier" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statscarrier&amp;tab_module=analytics_stats&amp;module_name=statscarrier" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="DMU Association flash Products / Categories" title="DMU Association flash Products / Categories" src="../img/tmp/848e53becffacbb34fdc3dadc78d8627.jpg" />
					</td>
					<td>
						<div id="anchorDmuassocprodcat" title="DMU Association flash Products / Categories">
							<div class="text-muted">
								Cepat / Massal pembaruan
							</div>
							<div class="module_name">
								<span style="display:none">dmuassocprodcat</span>
								DMU Association flash Products / Categories
								<small class="text-muted">v2.0.0 - oleh Dream Me Up</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	An essential module for your products! You have over than 100 products? You want to control the association of your products to your categories? This module is for you!
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=dmuassocprodcat" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/bulk-update-prestashop-modules/2792-dmu-association-flash-products-categories.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="DMU Improved Order List" title="DMU Improved Order List" src="../img/tmp/0703b89cfc94232d4196e824b1257e2c.jpg" />
					</td>
					<td>
						<div id="anchorDmulistecommandes" title="DMU Improved Order List">
							<div class="text-muted">
								Administrasi
							</div>
							<div class="module_name">
								<span style="display:none">dmulistecommandes</span>
								DMU Improved Order List
								<small class="text-muted">v2.0.5 - oleh Dream Me Up</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Save time on the processing of your orders! Avoid having to enter each command one after the other for all the details. This module lets you know everything from your order list
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=dmulistecommandes" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/administration-tools-prestashop-modules/8741-dmu-improved-order-list.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="DMU Real Time Statistics" title="DMU Real Time Statistics" src="../img/tmp/de9c4bea8f71de89d6afeafe5839f24e.jpg" />
					</td>
					<td>
						<div id="anchorDmurealtimestats" title="DMU Real Time Statistics">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">dmurealtimestats</span>
								DMU Real Time Statistics
								<small class="text-muted">v1.5.2 - oleh Dream Me Up</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Visualize in Real Time every visitor on your shop ! With this module you are no longer blind! you are able to know everything about the activity of your shop
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=dmurealtimestats" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/analytics-stats-prestashop-modules/4549-dmu-real-time-statistics.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Easy order preparation" title="Easy order preparation" src="../img/tmp/93a2283684e6affc6cf4e0981fbd48dc.jpg" />
					</td>
					<td>
						<div id="anchorOrderpreparation" title="Easy order preparation">
							<div class="text-muted">
								Administrasi
							</div>
							<div class="module_name">
								<span style="display:none">orderpreparation</span>
								Easy order preparation
								<small class="text-muted">v1.0.6 - oleh PrestaShop</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Save precious minutes every day by optimizing your logistics
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=orderpreparation" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/administration-tools-prestashop-modules/5542-easy-order-preparation.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="mailalerts" class="noborder" title="Module mailalerts " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Email Alerts" title="Email Alerts" src="../img/tmp/7bede8c2dab83176afad029ede09c883.jpg" />
					</td>
					<td>
						<div id="anchorMailalerts" title="Email Alerts">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">mailalerts</span>
								Email Alerts
								<small class="text-muted">v3.6.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=mailalerts&amp;tab_module=others&amp;module_name=mailalerts&amp;anchor=Mailalerts">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="mailalerts" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="mailalerts" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="EU Cookie Law (Notification Banner + Cookie Blocker)" title="EU Cookie Law (Notification Banner + Cookie Blocker)" src="../img/tmp/ad00444082a2d960ac4c07f7cf731ac2.jpg" />
					</td>
					<td>
						<div id="anchorLgcookieslaw" title="EU Cookie Law (Notification Banner + Cookie Blocker)">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">lgcookieslaw</span>
								EU Cookie Law (Notification Banner + Cookie Blocker)
								<small class="text-muted">v1.3.3 - oleh Línea Gráfica</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	The only module that allows you to fully comply with the EU cookie law. Display a responsive and custom warning banner and disable cookies when users enter your website until you obtain their consent
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=lgcookieslaw" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/front-office-features-prestashop-modules/8734-eu-cookie-law-notification-banner-cookie-blocker.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="eurovatgenerator" class="noborder" title="Module eurovatgenerator " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="eurovatgenerator" title="eurovatgenerator" src="../img/tmp/66c36a1aa370b0e36448597676fe2a70.jpg" />
					</td>
					<td>
						<div id="anchorEurovatgenerator" title="eurovatgenerator">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">eurovatgenerator</span>
								eurovatgenerator
								<small class="text-muted">v1.1.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=eurovatgenerator&amp;tab_module=others&amp;module_name=eurovatgenerator&amp;anchor=Eurovatgenerator">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="eurovatgenerator" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="eurovatgenerator" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="favoriteproducts" class="noborder" title="Module favoriteproducts " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Favorite Products" title="Favorite Products" src="../img/tmp/7c6a24dcbd2e4ad03dc569216cda4506.jpg" />
					</td>
					<td>
						<div id="anchorFavoriteproducts" title="Favorite Products">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">favoriteproducts</span>
								Favorite Products
								<small class="text-muted">v1.3.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=favoriteproducts&amp;tab_module=others&amp;module_name=favoriteproducts&amp;anchor=Favoriteproducts">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="favoriteproducts" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="favoriteproducts" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Gift Card" title="Gift Card" src="../img/tmp/5967053bfb60f00fa7d268d895c93914.jpg" />
					</td>
					<td>
						<div id="anchorGiftcards" title="Gift Card">
							<div class="text-muted">
								Harga &amp; Promosi
							</div>
							<div class="module_name">
								<span style="display:none">giftcards</span>
								Gift Card
								<small class="text-muted">v1.1.8 - oleh PrestaShop</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Increase your sales and get more customers by offering them the chance to give the perfect gift with no risks with the Gift Card module developed by PrestaShop!&nbsp;Practical and simple, gift cards a
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=giftcards" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/pricing-promotion-prestashop-modules/17452-gift-card.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="dashgoals" class="noborder" title="Module dashgoals " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Gol Dasbor" title="Gol Dasbor" src="/SupraShop/modules/dashgoals/logo.png" />
					</td>
					<td>
						<div id="anchorDashgoals" title="Gol Dasbor">
							<div class="text-muted">
								Dashboard
							</div>
							<div class="module_name">
								<span style="display:none">dashgoals</span>
								Gol Dasbor
								<small class="text-muted">v0.7.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan blok berisi prakiraan toko Anda.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashgoals&amp;enable=0&amp;tab_module=dashboard" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashgoals&amp;disable_device=4&amp;tab_module=dashboard" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashgoals&amp;disable_device=2&amp;tab_module=dashboard" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashgoals&amp;disable_device=1&amp;tab_module=dashboard" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=dashgoals&amp;reset&amp;tab_module=dashboard" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=dashgoals&amp;tab_module=dashboard&amp;module_name=dashgoals&amp;anchor=Dashgoals" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="dashgoals" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="dashgoals" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=dashgoals&amp;tab_module=dashboard&amp;module_name=dashgoals" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="ganalytics" class="noborder" title="Module ganalytics " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Google Analytics" title="Google Analytics" src="../img/tmp/c28aafe0f41ecf6bc4a6969ec725af7f.jpg" />
					</td>
					<td>
						<div id="anchorGanalytics" title="Google Analytics">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">ganalytics</span>
								Google Analytics
								<small class="text-muted">v2.3.2 - oleh PrestaShop Partners</small>
																	- <span class="module-badge-partner help-tooltip text-warning" data-title="Modul prestashop resmi dan tersertifikasi. Gratis, aman dan termasuk update!"><i class="icon-pushpin"></i> <small>Resmi</small></span>
															</div>
							<p class="module_description">
																	Your customers go everywhere; shouldn&#39;t your analytics?  Google Analytics shows you the full customer picture across ads and videos, websites and social tools, tablets and smartphones
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=ganalytics" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=ganalytics&amp;tab_module=analytics_stats&amp;module_name=ganalytics&amp;anchor=Ganalytics">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="ganalytics" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="ganalytics" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="gapi" class="noborder" title="Module gapi " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Google Analytics API" title="Google Analytics API" src="../img/tmp/2c3cb567d57fe3641959aef6e5dee8b7.jpg" />
					</td>
					<td>
						<div id="anchorGapi" title="Google Analytics API">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">gapi</span>
								Google Analytics API
								<small class="text-muted">v1.2.1 - oleh PrestaShop</small>
																	- <span class="module-badge-partner help-tooltip text-warning" data-title="Modul prestashop resmi dan tersertifikasi. Gratis, aman dan termasuk update!"><i class="icon-pushpin"></i> <small>Resmi</small></span>
															</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=gapi&amp;tab_module=others&amp;module_name=gapi&amp;anchor=Gapi">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="gapi" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="gapi" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Google Shopping (Merchant Center)" title="Google Shopping (Merchant Center)" src="../img/tmp/772160ebb19fee434834be8374fbeac1.jpg" />
					</td>
					<td>
						<div id="anchorGshopping" title="Google Shopping (Merchant Center)">
							<div class="text-muted">
								Perbandingan website dan manajemen Feed
							</div>
							<div class="module_name">
								<span style="display:none">gshopping</span>
								Google Shopping (Merchant Center)
								<small class="text-muted">v3.0.5 - oleh PrestaShop</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Increase your sales by at least 30% by including your products in Google Shopping and introduce yourself to the millions of online shoppers who use Google!&nbsp;  &nbsp;
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=gshopping" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/comparison-shopping-prestashop/1615-google-shopping-merchant-center.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="gsitemap" class="noborder" title="Module gsitemap " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Google Sitemap" title="Google Sitemap" src="../img/tmp/0487446afdd8ae14aea21e878037ce75.jpg" />
					</td>
					<td>
						<div id="anchorGsitemap" title="Google Sitemap">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">gsitemap</span>
								Google Sitemap
								<small class="text-muted">v3.2.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=gsitemap&amp;tab_module=others&amp;module_name=gsitemap&amp;anchor=Gsitemap">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="gsitemap" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="gsitemap" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="pagesnotfound" class="noborder" title="Module pagesnotfound " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Halaman tidak ditemukan" title="Halaman tidak ditemukan" src="/SupraShop/modules/pagesnotfound/logo.png" />
					</td>
					<td>
						<div id="anchorPagesnotfound" title="Halaman tidak ditemukan">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">pagesnotfound</span>
								Halaman tidak ditemukan
								<small class="text-muted">v1.5.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan tab di statistik dashboard, yang menampilkan halaman yang diakses pengunjung tapi tidak ditemukan.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=pagesnotfound&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=pagesnotfound&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=pagesnotfound&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=pagesnotfound&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=pagesnotfound&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=pagesnotfound&amp;tab_module=analytics_stats&amp;module_name=pagesnotfound&amp;anchor=Pagesnotfound" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="pagesnotfound" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="pagesnotfound" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=pagesnotfound&amp;tab_module=analytics_stats&amp;module_name=pagesnotfound" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="hipay" class="noborder" title="Module hipay " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="HiPay" title="HiPay" src="../img/tmp/c3d974534b637542c51aefdb608f43a2.jpg" />
					</td>
					<td>
						<div id="anchorHipay" title="HiPay">
							<div class="text-muted">
								Pembayaran &amp; Gateway
							</div>
							<div class="module_name">
								<span style="display:none">hipay</span>
								HiPay
								<small class="text-muted">v1.6.7 - oleh PrestaShop Partners</small>
																	- <span class="module-badge-partner help-tooltip text-warning" data-title="Modul prestashop resmi dan tersertifikasi. Gratis, aman dan termasuk update!"><i class="icon-pushpin"></i> <small>Resmi</small></span>
															</div>
							<p class="module_description">
																	Manage your online transactions without a distance-selling (VAD) contract and with an integrated anti-fraud system
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=hipay" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=hipay&amp;tab_module=payments_gateways&amp;module_name=hipay&amp;anchor=Hipay">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="hipay" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="hipay" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="editorial" class="noborder" title="Module editorial " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Home Editorial" title="Home Editorial" src="../img/tmp/5a1d93cf0abd8c4ff8ec8c338c602a21.jpg" />
					</td>
					<td>
						<div id="anchorEditorial" title="Home Editorial">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">editorial</span>
								Home Editorial
								<small class="text-muted">v2.6.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=editorial&amp;tab_module=others&amp;module_name=editorial&amp;anchor=Editorial">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="editorial" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="editorial" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="watermark" class="noborder" title="Module watermark " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Image Watermark" title="Image Watermark" src="../img/tmp/6cc0853421d8b0fbf878836ec689a00a.jpg" />
					</td>
					<td>
						<div id="anchorWatermark" title="Image Watermark">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">watermark</span>
								Image Watermark
								<small class="text-muted">v1.0.4 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=watermark&amp;tab_module=others&amp;module_name=watermark&amp;anchor=Watermark">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="watermark" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="watermark" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statspersonalinfos" class="noborder" title="Module statspersonalinfos " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Informasi pelanggan yang terdaftar" title="Informasi pelanggan yang terdaftar" src="/SupraShop/modules/statspersonalinfos/logo.png" />
					</td>
					<td>
						<div id="anchorStatspersonalinfos" title="Informasi pelanggan yang terdaftar">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statspersonalinfos</span>
								Informasi pelanggan yang terdaftar
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan informasi mengenai pelanggan (seperti jenis kelamin dan umur) ke statistik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statspersonalinfos&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statspersonalinfos&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statspersonalinfos&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statspersonalinfos&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statspersonalinfos&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statspersonalinfos&amp;tab_module=analytics_stats&amp;module_name=statspersonalinfos&amp;anchor=Statspersonalinfos" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statspersonalinfos" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statspersonalinfos" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statspersonalinfos&amp;tab_module=analytics_stats&amp;module_name=statspersonalinfos" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Inmotion" title="Inmotion" src="../img/tmp/6a63ea440ce0260a74e4a58c947baa31.jpg" />
					</td>
					<td>
						<div id="anchorInmotion" title="Inmotion">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">inmotion</span>
								Inmotion
								<small class="text-muted">v - oleh PrestaShop Partners</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	InMotion Hosting now offers FREE solid-state drives with all of our shared hosting plans, and Prestashop comes pre-installed
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=inmotion" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/services/20656-inmotion.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statsstock" class="noborder" title="Module statsstock " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Jumlah tersedia:" title="Jumlah tersedia:" src="/SupraShop/modules/statsstock/logo.png" />
					</td>
					<td>
						<div id="anchorStatsstock" title="Jumlah tersedia:">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statsstock</span>
								Jumlah tersedia:
								<small class="text-muted">v1.5.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan tab yang menampilkan stok produk tersedia untuk dijual di statistik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsstock&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsstock&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsstock&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsstock&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsstock&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statsstock&amp;tab_module=analytics_stats&amp;module_name=statsstock&amp;anchor=Statsstock" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statsstock" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statsstock" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statsstock&amp;tab_module=analytics_stats&amp;module_name=statsstock" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statscheckup" class="noborder" title="Module statscheckup " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Katalog evaluasi" title="Katalog evaluasi" src="/SupraShop/modules/statscheckup/logo.png" />
					</td>
					<td>
						<div id="anchorStatscheckup" title="Katalog evaluasi">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statscheckup</span>
								Katalog evaluasi
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan review terhadap kualitas katalog Anda ke statistik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statscheckup&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statscheckup&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statscheckup&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statscheckup&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statscheckup&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statscheckup&amp;tab_module=analytics_stats&amp;module_name=statscheckup&amp;anchor=Statscheckup" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statscheckup" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statscheckup" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statscheckup&amp;tab_module=analytics_stats&amp;module_name=statscheckup" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statsbestcategories" class="noborder" title="Module statsbestcategories " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Kategori Terbaik" title="Kategori Terbaik" src="/SupraShop/modules/statsbestcategories/logo.png" />
					</td>
					<td>
						<div id="anchorStatsbestcategories" title="Kategori Terbaik">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statsbestcategories</span>
								Kategori Terbaik
								<small class="text-muted">v1.5.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan daftar kategori terbaik ke statistik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestcategories&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestcategories&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestcategories&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestcategories&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestcategories&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statsbestcategories&amp;tab_module=analytics_stats&amp;module_name=statsbestcategories&amp;anchor=Statsbestcategories" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statsbestcategories" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statsbestcategories" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statsbestcategories&amp;tab_module=analytics_stats&amp;module_name=statsbestcategories" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="gamification" class="noborder" title="Module gamification " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Keahlian penjual" title="Keahlian penjual" src="/SupraShop/modules/gamification/logo.png" />
					</td>
					<td>
						<div id="anchorGamification" title="Keahlian penjual">
							<div class="text-muted">
								Administrasi
							</div>
							<div class="module_name">
								<span style="display:none">gamification</span>
								Keahlian penjual
								<small class="text-muted">v1.11.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Jadi ahli dalam bidang e-commerce secara instan!
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=gamification&amp;tab_module=administration&amp;module_name=gamification" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=gamification&amp;enable=0&amp;tab_module=administration" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=gamification&amp;disable_device=4&amp;tab_module=administration" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=gamification&amp;disable_device=2&amp;tab_module=administration" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=gamification&amp;disable_device=1&amp;tab_module=administration" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=gamification&amp;reset&amp;tab_module=administration" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=gamification&amp;tab_module=administration&amp;module_name=gamification&amp;anchor=Gamification" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="gamification" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="gamification" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=gamification&amp;tab_module=administration&amp;module_name=gamification" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="vatnumber" class="noborder" title="Module vatnumber " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Kode PPN negara Eropa" title="Kode PPN negara Eropa" src="/SupraShop/modules/vatnumber/logo.png" />
					</td>
					<td>
						<div id="anchorVatnumber" title="Kode PPN negara Eropa">
							<div class="text-muted">
								Pajak &amp; Invoice
							</div>
							<div class="module_name">
								<span style="display:none">vatnumber</span>
								Kode PPN negara Eropa
								<small class="text-muted">v1.8.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	Memungkinkan Anda untuk memasukan nomor NPWP pada saat membuat alamat. Anda harus mengisi field perusahaan untuk memunculkan field NPWP.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=vatnumber&amp;tab_module=billing_invoicing&amp;module_name=vatnumber&amp;anchor=Vatnumber">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=vatnumber&amp;tab_module=billing_invoicing&amp;module_name=vatnumber" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="themeconfigurator" class="noborder" title="Module themeconfigurator " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Konfigurasi theme" title="Konfigurasi theme" src="/SupraShop/modules/themeconfigurator/logo.png" />
					</td>
					<td>
						<div id="anchorThemeconfigurator" title="Konfigurasi theme">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">themeconfigurator</span>
								Konfigurasi theme
								<small class="text-muted">v2.1.1 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Konfigurasi theme Anda.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=themeconfigurator&amp;tab_module=front_office_features&amp;module_name=themeconfigurator" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=themeconfigurator&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=themeconfigurator&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=themeconfigurator&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=themeconfigurator&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=themeconfigurator&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=themeconfigurator&amp;tab_module=front_office_features&amp;module_name=themeconfigurator&amp;anchor=Themeconfigurator" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="themeconfigurator" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="themeconfigurator" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=themeconfigurator&amp;tab_module=front_office_features&amp;module_name=themeconfigurator" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="LeGuide.com" title="LeGuide.com" src="../img/tmp/29f74d0e3edcb61a743d408ed7bcbf11.jpg" />
					</td>
					<td>
						<div id="anchorLeguide" title="LeGuide.com">
							<div class="text-muted">
								Perbandingan website dan manajemen Feed
							</div>
							<div class="module_name">
								<span style="display:none">leguide</span>
								LeGuide.com
								<small class="text-muted">v2.9.0 - oleh PrestaShop</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	LeGuide.com allows you to make your site and your products known to millions of shoppers wanting to buy products and thus gaining the loyalty of new customers
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=leguide" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/comparison-shopping-prestashop/42-leguidecom.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Live Chat Pro (Responsive)" title="Live Chat Pro (Responsive)" src="../img/tmp/b7a68c65017e8c6589fb18c619aa219e.jpg" />
					</td>
					<td>
						<div id="anchorLivechatpro" title="Live Chat Pro (Responsive)">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">livechatpro</span>
								Live Chat Pro (Responsive)
								<small class="text-muted">v5.1.7 - oleh ProQuality</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	This module allows you to chat with your visitors, track their behavior on your site in real time and view their geolocation using google maps. Many operators can chat with several users at once
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=livechatpro" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/front-office-features-prestashop-modules/18967-live-chat-pro-responsive.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="liveperson" class="noborder" title="Module liveperson " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="LivePerson LiveChat + Messaging" title="LivePerson LiveChat + Messaging" src="../img/tmp/3ca604f9e2b08e3433515c5b8aeb4b33.jpg" />
					</td>
					<td>
						<div id="anchorLiveperson" title="LivePerson LiveChat + Messaging">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">liveperson</span>
								LivePerson LiveChat + Messaging
								<small class="text-muted">v1.0.1 - oleh PrestaShop Partners</small>
																	- <span class="module-badge-partner help-tooltip text-warning" data-title="Modul prestashop resmi dan tersertifikasi. Gratis, aman dan termasuk update!"><i class="icon-pushpin"></i> <small>Resmi</small></span>
															</div>
							<p class="module_description">
																	LiveEngage is the modern way to connect with your online shoppers. &nbsp;Increase sales conversions and overall satisfaction
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=liveperson" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=liveperson&amp;tab_module=front_office_features&amp;module_name=liveperson&amp;anchor=Liveperson">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="liveperson" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="liveperson" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="loyalty" class="noborder" title="Module loyalty " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Loyalty Program" title="Loyalty Program" src="../img/tmp/fc08f4385bbc5b546571375aadc73384.jpg" />
					</td>
					<td>
						<div id="anchorLoyalty" title="Loyalty Program">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">loyalty</span>
								Loyalty Program
								<small class="text-muted">v1.2.8 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=loyalty&amp;tab_module=others&amp;module_name=loyalty&amp;anchor=Loyalty">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="loyalty" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="loyalty" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="mailjet" class="noborder" title="Module mailjet " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Mailjet Email (Official)" title="Mailjet Email (Official)" src="../img/tmp/91f830b2edcab1a6b041ed57f14f9f0b.jpg" />
					</td>
					<td>
						<div id="anchorMailjet" title="Mailjet Email (Official)">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">mailjet</span>
								Mailjet Email (Official)
								<small class="text-muted">v3.2.11 - oleh PrestaShop Partners</small>
																	- <span class="module-badge-partner help-tooltip text-warning" data-title="Modul prestashop resmi dan tersertifikasi. Gratis, aman dan termasuk update!"><i class="icon-pushpin"></i> <small>Resmi</small></span>
															</div>
							<p class="module_description">
																	Create and send transactional and marketing newsletters. Increase your merchant revenue with abandon cart and other triggered emails
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=mailjet" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=mailjet&amp;tab_module=others&amp;module_name=mailjet&amp;anchor=Mailjet">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="mailjet" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="mailjet" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="gridhtml" class="noborder" title="Module gridhtml " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Menampilkan tabel HTML" title="Menampilkan tabel HTML" src="/SupraShop/modules/gridhtml/logo.png" />
					</td>
					<td>
						<div id="anchorGridhtml" title="Menampilkan tabel HTML">
							<div class="text-muted">
								Administrasi
							</div>
							<div class="module_name">
								<span style="display:none">gridhtml</span>
								Menampilkan tabel HTML
								<small class="text-muted">v1.3.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Memungkinkan laporan statistik ditampilkan dalam grid.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=gridhtml&amp;enable=0&amp;tab_module=administration" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=gridhtml&amp;disable_device=4&amp;tab_module=administration" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=gridhtml&amp;disable_device=2&amp;tab_module=administration" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=gridhtml&amp;disable_device=1&amp;tab_module=administration" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=gridhtml&amp;reset&amp;tab_module=administration" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=gridhtml&amp;tab_module=administration&amp;module_name=gridhtml&amp;anchor=Gridhtml" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="gridhtml" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="gridhtml" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=gridhtml&amp;tab_module=administration&amp;module_name=gridhtml" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blocktopmenu" class="noborder" title="Module blocktopmenu " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Menu horizontal" title="Menu horizontal" src="/SupraShop/modules/blocktopmenu/logo.png" />
					</td>
					<td>
						<div id="anchorBlocktopmenu" title="Menu horizontal">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blocktopmenu</span>
								Menu horizontal
								<small class="text-muted">v2.2.3 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan horizontal menu di website Anda.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blocktopmenu&amp;tab_module=front_office_features&amp;module_name=blocktopmenu" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocktopmenu&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocktopmenu&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocktopmenu&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocktopmenu&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="reset_ready" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blocktopmenu&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blocktopmenu&amp;tab_module=front_office_features&amp;module_name=blocktopmenu&amp;anchor=Blocktopmenu" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blocktopmenu" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blocktopmenu" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blocktopmenu&amp;tab_module=front_office_features&amp;module_name=blocktopmenu" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="sekeywords" class="noborder" title="Module sekeywords " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Mesin pencari kata kunci" title="Mesin pencari kata kunci" src="/SupraShop/modules/sekeywords/logo.png" />
					</td>
					<td>
						<div id="anchorSekeywords" title="Mesin pencari kata kunci">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">sekeywords</span>
								Mesin pencari kata kunci
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menampilkan kata kunci yang menarik kunjungan ke website Anda.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=sekeywords&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=sekeywords&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=sekeywords&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=sekeywords&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=sekeywords&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=sekeywords&amp;tab_module=analytics_stats&amp;module_name=sekeywords&amp;anchor=Sekeywords" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="sekeywords" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="sekeywords" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=sekeywords&amp;tab_module=analytics_stats&amp;module_name=sekeywords" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="sendtoafriend" class="noborder" title="Module sendtoafriend " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Modul kirim ke teman" title="Modul kirim ke teman" src="/SupraShop/modules/sendtoafriend/logo.png" />
					</td>
					<td>
						<div id="anchorSendtoafriend" title="Modul kirim ke teman">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">sendtoafriend</span>
								Modul kirim ke teman
								<small class="text-muted">v1.8.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Memungkinkan pelanggan untuk mengirim tautan produk ke temannya.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=sendtoafriend&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=sendtoafriend&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=sendtoafriend&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=sendtoafriend&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=sendtoafriend&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=sendtoafriend&amp;tab_module=front_office_features&amp;module_name=sendtoafriend&amp;anchor=Sendtoafriend" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="sendtoafriend" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="sendtoafriend" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=sendtoafriend&amp;tab_module=front_office_features&amp;module_name=sendtoafriend" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Multiple Features - Assign your features as you want" title="Multiple Features - Assign your features as you want" src="../img/tmp/019689cd6599d6803825fea6d0b00cc2.jpg" />
					</td>
					<td>
						<div id="anchorPm_multiplefeatures" title="Multiple Features - Assign your features as you want">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">pm_multiplefeatures</span>
								Multiple Features - Assign your features as you want
								<small class="text-muted">v1.3.4 - oleh Presta-Module</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Multiple Features allows you to assign multiple values ​​of features to your products
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=pm_multiplefeatures" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/search-filters-prestashop-modules/6356-multiple-features-assign-your-features-as-you-want.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statsnewsletter" class="noborder" title="Module statsnewsletter " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Newsletter" title="Newsletter" src="/SupraShop/modules/statsnewsletter/logo.png" />
					</td>
					<td>
						<div id="anchorStatsnewsletter" title="Newsletter">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statsnewsletter</span>
								Newsletter
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan tab dengan grafik untuk menampilkan pendaftaran newsleter di statistik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsnewsletter&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsnewsletter&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsnewsletter&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsnewsletter&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsnewsletter&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statsnewsletter&amp;tab_module=analytics_stats&amp;module_name=statsnewsletter&amp;anchor=Statsnewsletter" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statsnewsletter" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statsnewsletter" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statsnewsletter&amp;tab_module=analytics_stats&amp;module_name=statsnewsletter" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Newsletter &amp; Statistics" title="Newsletter &amp; Statistics" src="../img/tmp/4eb72c79a67740381b04358a2c6cc2da.jpg" />
					</td>
					<td>
						<div id="anchorMynewsletter" title="Newsletter &amp; Statistics">
							<div class="text-muted">
								Periklanan &amp; Pemasaran
							</div>
							<div class="module_name">
								<span style="display:none">mynewsletter</span>
								Newsletter &amp; Statistics
								<small class="text-muted">v4.0.25 - oleh PrestaShop</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	The best way to convert, build loyalty and keep in touch with customers is with our Newsletter with Statistics Module! This brilliant module helps you send gorgeous newsletters to customer groups -- a
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=mynewsletter" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/advertising-marketing-newsletter-modules/4932-newsletter-statistics.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="nostotagging" class="noborder" title="Module nostotagging " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Nosto - Personalization for PrestaShop" title="Nosto - Personalization for PrestaShop" src="../img/tmp/b8fe88aed8c07f05fbd9a5f3d2e13833.jpg" />
					</td>
					<td>
						<div id="anchorNostotagging" title="Nosto - Personalization for PrestaShop">
							<div class="text-muted">
								Periklanan &amp; Pemasaran
							</div>
							<div class="module_name">
								<span style="display:none">nostotagging</span>
								Nosto - Personalization for PrestaShop
								<small class="text-muted">v2.4.3 - oleh PrestaShop Partners</small>
																	- <span class="module-badge-partner help-tooltip text-warning" data-title="Modul prestashop resmi dan tersertifikasi. Gratis, aman dan termasuk update!"><i class="icon-pushpin"></i> <small>Resmi</small></span>
															</div>
							<p class="module_description">
																	Nosto is the easiest way to deliver your customers personalized shopping experiences - wherever they are
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=nostotagging" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=nostotagging&amp;tab_module=advertising_marketing&amp;module_name=nostotagging&amp;anchor=Nostotagging">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="nostotagging" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="nostotagging" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="graphnvd3" class="noborder" title="Module graphnvd3 " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="NVD3 Chart" title="NVD3 Chart" src="/SupraShop/modules/graphnvd3/logo.png" />
					</td>
					<td>
						<div id="anchorGraphnvd3" title="NVD3 Chart">
							<div class="text-muted">
								Administrasi
							</div>
							<div class="module_name">
								<span style="display:none">graphnvd3</span>
								NVD3 Chart
								<small class="text-muted">v1.5.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=graphnvd3&amp;enable=0&amp;tab_module=administration" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=graphnvd3&amp;disable_device=4&amp;tab_module=administration" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=graphnvd3&amp;disable_device=2&amp;tab_module=administration" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=graphnvd3&amp;disable_device=1&amp;tab_module=administration" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=graphnvd3&amp;reset&amp;tab_module=administration" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=graphnvd3&amp;tab_module=administration&amp;module_name=graphnvd3&amp;anchor=Graphnvd3" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="graphnvd3" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="graphnvd3" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=graphnvd3&amp;tab_module=administration&amp;module_name=graphnvd3" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="onboarding" class="noborder" title="Module onboarding " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="OnBoarding" title="OnBoarding" src="/SupraShop/modules/onboarding/logo.png" />
					</td>
					<td>
						<div id="anchorOnboarding" title="OnBoarding">
							<div class="text-muted">
								Administrasi
							</div>
							<div class="module_name">
								<span style="display:none">onboarding</span>
								OnBoarding
								<small class="text-muted">v1.0.1 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	Modul OnBoarding akan menyapa user pertama kali mereka login ke back-office Prestashop: melalui tampilan yang menarik, modul ini akan menunjukan user pengoperasian tokonya dalam beberapa langkah yang mudah.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=onboarding&amp;tab_module=administration&amp;module_name=onboarding&amp;anchor=Onboarding">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																																																																									<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=onboarding&amp;tab_module=administration&amp;module_name=onboarding" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="erpillicopresta" class="noborder" title="Module erpillicopresta " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="One-Click ERP Illico Presta" title="One-Click ERP Illico Presta" src="../img/tmp/43c31d916527284b4f82dfbed16b1d9b.jpg" />
					</td>
					<td>
						<div id="anchorErpillicopresta" title="One-Click ERP Illico Presta">
							<div class="text-muted">
								Administrasi
							</div>
							<div class="module_name">
								<span style="display:none">erpillicopresta</span>
								One-Click ERP Illico Presta
								<small class="text-muted">v3.0.3 - oleh PrestaShop Partners</small>
																	- <span class="module-badge-partner help-tooltip text-warning" data-title="Modul prestashop resmi dan tersertifikasi. Gratis, aman dan termasuk update!"><i class="icon-pushpin"></i> <small>Resmi</small></span>
															</div>
							<p class="module_description">
																	Save time on e-shop management with the 1st free and adaptable ERP: Client orders, Shipping, Suppliers, Stock management and export, Inventory, and more
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=erpillicopresta" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=erpillicopresta&amp;tab_module=administration&amp;module_name=erpillicopresta&amp;anchor=Erpillicopresta">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="erpillicopresta" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="erpillicopresta" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Online Quotation" title="Online Quotation" src="../img/tmp/5ec85310cf5db5a1f9f30f12348668ae.jpg" />
					</td>
					<td>
						<div id="anchorQuotation" title="Online Quotation">
							<div class="text-muted">
								Harga &amp; Promosi
							</div>
							<div class="module_name">
								<span style="display:none">quotation</span>
								Online Quotation
								<small class="text-muted">v1.0.17 - oleh PrestaShop</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Allow customers to ask for a quote in your online shop! With the Online quotation module, create a made-to-measure form so your customers can ask for an estimate for the products they are interested i
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=quotation" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/pricing-promotion-prestashop-modules/19927-online-quotation.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="trackingfront" class="noborder" title="Module trackingfront " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Pelacakan - Depan kantor" title="Pelacakan - Depan kantor" src="/SupraShop/modules/trackingfront/logo.png" />
					</td>
					<td>
						<div id="anchorTrackingfront" title="Pelacakan - Depan kantor">
							<div class="text-muted">
								Pengiriman &amp; Logistik
							</div>
							<div class="module_name">
								<span style="display:none">trackingfront</span>
								Pelacakan - Depan kantor
								<small class="text-muted">v1.8.3 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	Mengijinkan afiliasi Anda untuk melihat statistik mereka. Lihat  Stats/Referrer.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																					<a class="btn btn-success untrustedaddon" href="#" data-target="#moduleNotTrusted" data-toggle="modal" data-link="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=trackingfront&amp;tab_module=shipping_logistics&amp;module_name=trackingfront&amp;anchor=Trackingfront" data-module-display-name="Pelacakan - Depan kantor" data-module-name="trackingfront" data-module-image="/SupraShop/modules/trackingfront/logo.png" data-author-name="PrestaShop" data-author-uri="">
											<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
										</a>
																			
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=trackingfront&amp;tab_module=shipping_logistics&amp;module_name=trackingfront" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statsbestcustomers" class="noborder" title="Module statsbestcustomers " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Pelanggan terbaik" title="Pelanggan terbaik" src="/SupraShop/modules/statsbestcustomers/logo.png" />
					</td>
					<td>
						<div id="anchorStatsbestcustomers" title="Pelanggan terbaik">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statsbestcustomers</span>
								Pelanggan terbaik
								<small class="text-muted">v1.5.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan daftar pelanggan terbaik ke statistik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestcustomers&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestcustomers&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestcustomers&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestcustomers&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestcustomers&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statsbestcustomers&amp;tab_module=analytics_stats&amp;module_name=statsbestcustomers&amp;anchor=Statsbestcustomers" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statsbestcustomers" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statsbestcustomers" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statsbestcustomers&amp;tab_module=analytics_stats&amp;module_name=statsbestcustomers" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="cheque" class="noborder" title="Module cheque " data-rel="Apakah Anda yakin ingin menghapus rincian Anda?"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Pembayaran menggunakan cek" title="Pembayaran menggunakan cek" src="/SupraShop/modules/cheque/logo.png" />
					</td>
					<td>
						<div id="anchorCheque" title="Pembayaran menggunakan cek">
							<div class="text-muted">
								Pembayaran &amp; Gateway
							</div>
							<div class="module_name">
								<span style="display:none">cheque</span>
								Pembayaran menggunakan cek
								<small class="text-muted">v2.7.0 - oleh PrestaShop</small>
																											<span class="label label-warning">Perlu diupdate</span>
																								</div>
							<p class="module_description">
																	Modul ini memungkinkan Anda untuk menerima pembayaran menggunakan cek.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																						<a class="btn btn-warning" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;update=cheque&amp;tab_module=payments_gateways&amp;module_name=cheque&amp;anchor=Cheque">
												<i class="icon-refresh"></i> Update !
											</a>
																			
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=cheque&amp;tab_module=payments_gateways&amp;module_name=cheque" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=cheque&amp;enable=0&amp;tab_module=payments_gateways" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=cheque&amp;disable_device=4&amp;tab_module=payments_gateways" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=cheque&amp;disable_device=2&amp;tab_module=payments_gateways" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=cheque&amp;disable_device=1&amp;tab_module=payments_gateways" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=cheque&amp;reset&amp;tab_module=payments_gateways" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=cheque&amp;tab_module=payments_gateways&amp;module_name=cheque&amp;anchor=Cheque" onclick="return confirm('Apakah Anda yakin ingin menghapus rincian Anda?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="cheque" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="cheque" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=cheque&amp;tab_module=payments_gateways&amp;module_name=cheque" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statssearch" class="noborder" title="Module statssearch " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Pencarian di Toko" title="Pencarian di Toko" src="/SupraShop/modules/statssearch/logo.png" />
					</td>
					<td>
						<div id="anchorStatssearch" title="Pencarian di Toko">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statssearch</span>
								Pencarian di Toko
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan tab ke statistik dashboard, yang menampilkan keyword yang digunakan pengunjung untuk mencari produk.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statssearch&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statssearch&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statssearch&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statssearch&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statssearch&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statssearch&amp;tab_module=analytics_stats&amp;module_name=statssearch&amp;anchor=Statssearch" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statssearch" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statssearch" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statssearch&amp;tab_module=analytics_stats&amp;module_name=statssearch" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statsvisits" class="noborder" title="Module statsvisits " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Pengunjung dan kunjungan" title="Pengunjung dan kunjungan" src="/SupraShop/modules/statsvisits/logo.png" />
					</td>
					<td>
						<div id="anchorStatsvisits" title="Pengunjung dan kunjungan">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statsvisits</span>
								Pengunjung dan kunjungan
								<small class="text-muted">v1.6.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan statistik pengunjung kedalam dashboard statistik.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsvisits&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsvisits&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsvisits&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsvisits&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsvisits&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statsvisits&amp;tab_module=analytics_stats&amp;module_name=statsvisits&amp;anchor=Statsvisits" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statsvisits" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statsvisits" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statsvisits&amp;tab_module=analytics_stats&amp;module_name=statsvisits" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statslive" class="noborder" title="Module statslive " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Pengunjung online yang" title="Pengunjung online yang" src="/SupraShop/modules/statslive/logo.png" />
					</td>
					<td>
						<div id="anchorStatslive" title="Pengunjung online yang">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statslive</span>
								Pengunjung online yang
								<small class="text-muted">v1.3.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan daftar pelanggan dan pengunjung yang sedang online ke statistik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statslive&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statslive&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statslive&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statslive&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statslive&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statslive&amp;tab_module=analytics_stats&amp;module_name=statslive&amp;anchor=Statslive" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statslive" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statslive" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statslive&amp;tab_module=analytics_stats&amp;module_name=statslive" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statssales" class="noborder" title="Module statssales " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Penjualan dan pesanan" title="Penjualan dan pesanan" src="/SupraShop/modules/statssales/logo.png" />
					</td>
					<td>
						<div id="anchorStatssales" title="Penjualan dan pesanan">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statssales</span>
								Penjualan dan pesanan
								<small class="text-muted">v1.3.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan grafik berisi evolusi penjualan ke statistik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statssales&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statssales&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statssales&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statssales&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statssales&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statssales&amp;tab_module=analytics_stats&amp;module_name=statssales&amp;anchor=Statssales" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statssales" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statssales" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statssales&amp;tab_module=analytics_stats&amp;module_name=statssales" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Price increment/discount by customer groups" title="Price increment/discount by customer groups" src="../img/tmp/f97a897ac068b56796bf14bdeaf9789c.jpg" />
					</td>
					<td>
						<div id="anchorGroupinc" title="Price increment/discount by customer groups">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">groupinc</span>
								Price increment/discount by customer groups
								<small class="text-muted">v1.2 - oleh Idnovate</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	This module lets you apply an increment or a discount to product price depending on the customer's group
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=groupinc" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/front-office-features-prestashop-modules/7422-price-increment-discount-by-customer-groups.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="PriceMinister" title="PriceMinister" src="../img/tmp/e18341615275b41f8a1f836b006c5241.jpg" />
					</td>
					<td>
						<div id="anchorPriceminister" title="PriceMinister">
							<div class="text-muted">
								Market Place
							</div>
							<div class="module_name">
								<span style="display:none">priceminister</span>
								PriceMinister
								<small class="text-muted">v4.0.15 - oleh Common-Services</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Take advantage of the PriceMinister audience with its 2 million visitors a year and its 20 million subscribed members and boost your sales with your super PriceMinister store
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=priceminister" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/marketplace-prestashop-modules/3511-priceminister.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Print Labels Pro" title="Print Labels Pro" src="../img/tmp/e26900d344525e1ceca72b3884b05277.jpg" />
					</td>
					<td>
						<div id="anchorPrintlabels" title="Print Labels Pro">
							<div class="text-muted">
								Administrasi
							</div>
							<div class="module_name">
								<span style="display:none">printlabels</span>
								Print Labels Pro
								<small class="text-muted">v2.2.8 - oleh PrestaShop</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Save valuable time by automating the preparation of your delivery labels! Prepare and print your delivery labels, and stick them right on the packages for the orders you&#39;re shipping
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=printlabels" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/administration-tools-prestashop-modules/3252-print-labels.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="productcomments" class="noborder" title="Module productcomments " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Product Comments" title="Product Comments" src="/SupraShop/modules/productcomments/logo.png" />
					</td>
					<td>
						<div id="anchorProductcomments" title="Product Comments">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">productcomments</span>
								Product Comments
								<small class="text-muted">v3.5.1 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Allows users to post reviews and rate products on specific criteria.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=productcomments&amp;tab_module=front_office_features&amp;module_name=productcomments" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=productcomments&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=productcomments&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=productcomments&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=productcomments&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="reset_ready" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=productcomments&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=productcomments&amp;tab_module=front_office_features&amp;module_name=productcomments&amp;anchor=Productcomments" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="productcomments" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="productcomments" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=productcomments&amp;tab_module=front_office_features&amp;module_name=productcomments" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="productscategory" class="noborder" title="Module productscategory " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Produk di kategori yang sama" title="Produk di kategori yang sama" src="/SupraShop/modules/productscategory/logo.png" />
					</td>
					<td>
						<div id="anchorProductscategory" title="Produk di kategori yang sama">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">productscategory</span>
								Produk di kategori yang sama
								<small class="text-muted">v1.8.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	Tambahkan blok halaman produk yang berisi produk-produk yang ada dalam kategori yang sama.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=productscategory&amp;tab_module=front_office_features&amp;module_name=productscategory&amp;anchor=Productscategory">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=productscategory&amp;tab_module=front_office_features&amp;module_name=productscategory" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statsbestproducts" class="noborder" title="Module statsbestproducts " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Produk terbaik" title="Produk terbaik" src="/SupraShop/modules/statsbestproducts/logo.png" />
					</td>
					<td>
						<div id="anchorStatsbestproducts" title="Produk terbaik">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statsbestproducts</span>
								Produk terbaik
								<small class="text-muted">v1.5.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan daftar produk terlaris di statitik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestproducts&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestproducts&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestproducts&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestproducts&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestproducts&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statsbestproducts&amp;tab_module=analytics_stats&amp;module_name=statsbestproducts&amp;anchor=Statsbestproducts" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statsbestproducts" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statsbestproducts" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statsbestproducts&amp;tab_module=analytics_stats&amp;module_name=statsbestproducts" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="producttooltip" class="noborder" title="Module producttooltip " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Produk tooltip" title="Produk tooltip" src="/SupraShop/modules/producttooltip/logo.png" />
					</td>
					<td>
						<div id="anchorProducttooltip" title="Produk tooltip">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">producttooltip</span>
								Produk tooltip
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	Tampilkan informasi di halaman produk: berapa pengunjung yang melihat, terakhir terjual dan terakhir kali ditambahkan kedalam cart.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=producttooltip&amp;tab_module=front_office_features&amp;module_name=producttooltip&amp;anchor=Producttooltip">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=producttooltip&amp;tab_module=front_office_features&amp;module_name=producttooltip" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="homefeatured" class="noborder" title="Module homefeatured " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Produk unggulan di halaman depan website" title="Produk unggulan di halaman depan website" src="/SupraShop/modules/homefeatured/logo.png" />
					</td>
					<td>
						<div id="anchorHomefeatured" title="Produk unggulan di halaman depan website">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">homefeatured</span>
								Produk unggulan di halaman depan website
								<small class="text-muted">v1.8.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tampilkan produk unggulan di kolom tengah website Anda.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=homefeatured&amp;tab_module=front_office_features&amp;module_name=homefeatured" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=homefeatured&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=homefeatured&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=homefeatured&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=homefeatured&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=homefeatured&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=homefeatured&amp;tab_module=front_office_features&amp;module_name=homefeatured&amp;anchor=Homefeatured" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="homefeatured" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="homefeatured" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=homefeatured&amp;tab_module=front_office_features&amp;module_name=homefeatured" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statsbestmanufacturers" class="noborder" title="Module statsbestmanufacturers " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Produsen Terbaik" title="Produsen Terbaik" src="/SupraShop/modules/statsbestmanufacturers/logo.png" />
					</td>
					<td>
						<div id="anchorStatsbestmanufacturers" title="Produsen Terbaik">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statsbestmanufacturers</span>
								Produsen Terbaik
								<small class="text-muted">v1.5.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	Tambahkan daftar brand terbaik di statistik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=statsbestmanufacturers&amp;tab_module=analytics_stats&amp;module_name=statsbestmanufacturers&amp;anchor=Statsbestmanufacturers">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statsbestmanufacturers&amp;tab_module=analytics_stats&amp;module_name=statsbestmanufacturers" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Push on Cart (Upselling)" title="Push on Cart (Upselling)" src="../img/tmp/9a18603c8db71752ebc5569bda670588.jpg" />
					</td>
					<td>
						<div id="anchorPushoncart" title="Push on Cart (Upselling)">
							<div class="text-muted">
								Harga &amp; Promosi
							</div>
							<div class="module_name">
								<span style="display:none">pushoncart</span>
								Push on Cart (Upselling)
								<small class="text-muted">v2.1.13 - oleh PrestaShop</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Easily increase your average cart value by offering customized discounts to your client in the shopping cart summary !
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=pushoncart" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/pricing-promotion-prestashop-modules/11345-push-on-cart-upselling.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Push Products on CMS Pages" title="Push Products on CMS Pages" src="../img/tmp/fb11b376fe2e06b322725706207bbe59.jpg" />
					</td>
					<td>
						<div id="anchorWic_pushproductcms" title="Push Products on CMS Pages">
							<div class="text-muted">
								Barang dagangan
							</div>
							<div class="module_name">
								<span style="display:none">wic_pushproductcms</span>
								Push Products on CMS Pages
								<small class="text-muted">v1.3 - oleh Web In Color</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	This module allows you to display a block with the products you want on your CMS pages
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=wic_pushproductcms" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/merchandising-prestashop-modules/8458-push-products-on-cms-pages.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="referralprogram" class="noborder" title="Module referralprogram " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Referral Program" title="Referral Program" src="../img/tmp/c127cc95d6f637bcba42d453fe9f48c2.jpg" />
					</td>
					<td>
						<div id="anchorReferralprogram" title="Referral Program">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">referralprogram</span>
								Referral Program
								<small class="text-muted">v1.7.1 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=referralprogram&amp;tab_module=others&amp;module_name=referralprogram&amp;anchor=Referralprogram">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="referralprogram" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="referralprogram" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="RockPOS Point of Sale (POS) Pro" title="RockPOS Point of Sale (POS) Pro" src="../img/tmp/0c3cb4cc8af4a186721a9e22863a8c23.jpg" />
					</td>
					<td>
						<div id="anchorHspointofsalepro" title="RockPOS Point of Sale (POS) Pro">
							<div class="text-muted">
								Barang dagangan
							</div>
							<div class="module_name">
								<span style="display:none">hspointofsalepro</span>
								RockPOS Point of Sale (POS) Pro
								<small class="text-muted">v2.3.1 - oleh PrestaMonster</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Thanks to RockPOS (formerly Point of Sale Pro), now you can sell your products online and offline as well, at your stores / warehouses, exhibitions, trade conferences or via phone / chat
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=hspointofsalepro" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/merchandising-prestashop-modules/13654-rockpos-point-of-sale-pos-pro.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="feeder" class="noborder" title="Module feeder " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="RSS Feed" title="RSS Feed" src="../img/tmp/de7445353648e690bef00ab47a400588.jpg" />
					</td>
					<td>
						<div id="anchorFeeder" title="RSS Feed">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">feeder</span>
								RSS Feed
								<small class="text-muted">v0.7.2 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=feeder&amp;tab_module=others&amp;module_name=feeder&amp;anchor=Feeder">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="feeder" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="feeder" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="securitypatch" class="noborder" title="Module securitypatch " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Security Patch" title="Security Patch" src="../img/tmp/1f075a8357500e1659650d36f46ebb4c.jpg" />
					</td>
					<td>
						<div id="anchorSecuritypatch" title="Security Patch">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">securitypatch</span>
								Security Patch
								<small class="text-muted">v1.0.2 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	This module solves a security issue for PrestaShop 1.4, 1.5, and 1.6. Install this module, and it will apply the security patch that was released in late July 2015
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=securitypatch" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=securitypatch&amp;tab_module=others&amp;module_name=securitypatch&amp;anchor=Securitypatch">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="securitypatch" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="securitypatch" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="sendinblue" class="noborder" title="Module sendinblue " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="SendinBlue" title="SendinBlue" src="../img/tmp/9228ac780e5de4e890fb4db4571d827e.jpg" />
					</td>
					<td>
						<div id="anchorSendinblue" title="SendinBlue">
							<div class="text-muted">
								Periklanan &amp; Pemasaran
							</div>
							<div class="module_name">
								<span style="display:none">sendinblue</span>
								SendinBlue
								<small class="text-muted">v2.5.2 - oleh SendinBlue</small>
																	- <span class="module-badge-partner help-tooltip text-warning" data-title="Modul prestashop resmi dan tersertifikasi. Gratis, aman dan termasuk update!"><i class="icon-pushpin"></i> <small>Resmi</small></span>
															</div>
							<p class="module_description">
																	SendinBlue : THE all-in-one module for your (marketing and transactional) emails &amp; SMS
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=sendinblue" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=sendinblue&amp;tab_module=advertising_marketing&amp;module_name=sendinblue&amp;anchor=Sendinblue">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="sendinblue" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="sendinblue" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="SEO - disabled and deleted 301 redirect Products" title="SEO - disabled and deleted 301 redirect Products" src="../img/tmp/bbb5f59ebd4a4571a3a6426799e2eac3.jpg" />
					</td>
					<td>
						<div id="anchorEc_seo404" title="SEO - disabled and deleted 301 redirect Products">
							<div class="text-muted">
								SEO
							</div>
							<div class="module_name">
								<span style="display:none">ec_seo404</span>
								SEO - disabled and deleted 301 redirect Products
								<small class="text-muted">v2.0.3 - oleh Ether Création</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	End with 404 pages and referencing loss for disabled or deleted product
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=ec_seo404" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/seo-prestashop-modules/8244-seo-disabled-and-deleted-301-redirect-products.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="SEO Expert" title="SEO Expert" src="../img/tmp/926e3bd0fb0d056e210d431075c42add.jpg" />
					</td>
					<td>
						<div id="anchorSeoexpert" title="SEO Expert">
							<div class="text-muted">
								SEO
							</div>
							<div class="module_name">
								<span style="display:none">seoexpert</span>
								SEO Expert
								<small class="text-muted">v3.1.13 - oleh PrestaShop</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Increase site traffic by landing on first page search engine results!  This SEO Expert module automatically fills in both meta tags and social media meta tags to optimize your online store for better 
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=seoexpert" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/seo-prestashop-modules/16939-seo-expert.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="SEO Internal Linking" title="SEO Internal Linking" src="../img/tmp/a09073e523b71099bc33596df7ba9e57.jpg" />
					</td>
					<td>
						<div id="anchorPm_seointernallinking" title="SEO Internal Linking">
							<div class="text-muted">
								SEO
							</div>
							<div class="module_name">
								<span style="display:none">pm_seointernallinking</span>
								SEO Internal Linking
								<small class="text-muted">v1.1.10 - oleh Presta-Module</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Improve your SEO through internal linking strategy
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=pm_seointernallinking" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/seo-prestashop-modules/4982-seo-internal-linking.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="shopgate" class="noborder" title="Module shopgate " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Shopgate M-Commerce" title="Shopgate M-Commerce" src="../img/tmp/bcb2a303b906216e4009282456778244.jpg" />
					</td>
					<td>
						<div id="anchorShopgate" title="Shopgate M-Commerce">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">shopgate</span>
								Shopgate M-Commerce
								<small class="text-muted">v2.9.54 - oleh PrestaShop Partners</small>
																	- <span class="module-badge-partner help-tooltip text-warning" data-title="Modul prestashop resmi dan tersertifikasi. Gratis, aman dan termasuk update!"><i class="icon-pushpin"></i> <small>Resmi</small></span>
															</div>
							<p class="module_description">
																	Shopgate allows you to get a mobile site for your store as well as iOS and Android Apps! Our solution is recommended by PrestaShop as it is perfectly integrated with your system through a simple plugi
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=shopgate" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=shopgate&amp;tab_module=front_office_features&amp;module_name=shopgate&amp;anchor=Shopgate">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																							<li>
													<a class="action_module action_unfavorite toggle_favorite" data-module="shopgate" data-value="0" href="#" style="display: none;">
														<i class="icon-star"></i> Hapus dari daftar favorit
													</a>
													<a class="action_module action_favorite toggle_favorite" data-module="shopgate" data-value="1" href="#">
														<i class="icon-star"></i> Tandai sebagai favorit
													</a>
												</li>
																					</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="SIRET and customer group" title="SIRET and customer group" src="../img/tmp/0a50193bc9b764065bc7210755d425cb.jpg" />
					</td>
					<td>
						<div id="anchorSiretcustomergroup" title="SIRET and customer group">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">siretcustomergroup</span>
								SIRET and customer group
								<small class="text-muted">v1.6 - oleh Community</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Differentiate your business customers of individuals with this SIRET module which transfers the professionals in a given customer group
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=siretcustomergroup" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/front-office-features-prestashop-modules/6291-siret-and-customer-group.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Slider - Products of same category" title="Slider - Products of same category" src="../img/tmp/f16918af61b569487d01d9a98b75d868.jpg" />
					</td>
					<td>
						<div id="anchorProductsbycategoryslider" title="Slider - Products of same category">
							<div class="text-muted">
								Slideshow
							</div>
							<div class="module_name">
								<span style="display:none">productsbycategoryslider</span>
								Slider - Products of same category
								<small class="text-muted">v1.1.3 - oleh PrestaShop</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Submit items of the same class on your product pages with this slider at the bottom of the page, and improve the navigation of your customers, along with your average basket!
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=productsbycategoryslider" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/slideshows-prestashop-modules/5275-slider-products-of-same-category.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="homeslider" class="noborder" title="Module homeslider " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Slider image untuk halaman web Anda" title="Slider image untuk halaman web Anda" src="/SupraShop/modules/homeslider/logo.png" />
					</td>
					<td>
						<div id="anchorHomeslider" title="Slider image untuk halaman web Anda">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">homeslider</span>
								Slider image untuk halaman web Anda
								<small class="text-muted">v1.6.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Menambahkan slide image kedalam halaman web Anda.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=homeslider&amp;tab_module=front_office_features&amp;module_name=homeslider" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=homeslider&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=homeslider&amp;enable_device=4&amp;tab_module=front_office_features" onclick=""  title="Tampilkan pada perangkat mobile"><i class="icon-mobile"></i> Tampilkan pada perangkat mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=homeslider&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=homeslider&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=homeslider&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=homeslider&amp;tab_module=front_office_features&amp;module_name=homeslider&amp;anchor=Homeslider" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="homeslider" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="homeslider" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=homeslider&amp;tab_module=front_office_features&amp;module_name=homeslider" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="socialsharing" class="noborder" title="Module socialsharing " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Social sharing" title="Social sharing" src="/SupraShop/modules/socialsharing/logo.png" />
					</td>
					<td>
						<div id="anchorSocialsharing" title="Social sharing">
							<div class="text-muted">
								Periklanan &amp; Pemasaran
							</div>
							<div class="module_name">
								<span style="display:none">socialsharing</span>
								Social sharing
								<small class="text-muted">v1.4.1 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tampilkan tombol berbagi di sociel media (Twitter, Facebook, Google+ dan Pinterest) di halaman produk.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=socialsharing&amp;tab_module=advertising_marketing&amp;module_name=socialsharing" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=socialsharing&amp;enable=0&amp;tab_module=advertising_marketing" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=socialsharing&amp;disable_device=4&amp;tab_module=advertising_marketing" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=socialsharing&amp;disable_device=2&amp;tab_module=advertising_marketing" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=socialsharing&amp;disable_device=1&amp;tab_module=advertising_marketing" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=socialsharing&amp;reset&amp;tab_module=advertising_marketing" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=socialsharing&amp;tab_module=advertising_marketing&amp;module_name=socialsharing&amp;anchor=Socialsharing" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="socialsharing" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="socialsharing" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=socialsharing&amp;tab_module=advertising_marketing&amp;module_name=socialsharing" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statsforecast" class="noborder" title="Module statsforecast " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Statistik Dashboard" title="Statistik Dashboard" src="/SupraShop/modules/statsforecast/logo.png" />
					</td>
					<td>
						<div id="anchorStatsforecast" title="Statistik Dashboard">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statsforecast</span>
								Statistik Dashboard
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Modul utama yang digunakan pada dashboard statistik. Berguna untuk menampilkan semua data statistik.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=statsforecast&amp;tab_module=analytics_stats&amp;module_name=statsforecast" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsforecast&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsforecast&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsforecast&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsforecast&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsforecast&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statsforecast&amp;tab_module=analytics_stats&amp;module_name=statsforecast&amp;anchor=Statsforecast" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statsforecast" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statsforecast" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statsforecast&amp;tab_module=analytics_stats&amp;module_name=statsforecast" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statscatalog" class="noborder" title="Module statscatalog " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Statistik katalog" title="Statistik katalog" src="/SupraShop/modules/statscatalog/logo.png" />
					</td>
					<td>
						<div id="anchorStatscatalog" title="Statistik katalog">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statscatalog</span>
								Statistik katalog
								<small class="text-muted">v1.3.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan tab berisi statistik umum tentang katalog Anda ke Stats dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statscatalog&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statscatalog&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statscatalog&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statscatalog&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statscatalog&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statscatalog&amp;tab_module=analytics_stats&amp;module_name=statscatalog&amp;anchor=Statscatalog" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statscatalog" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statscatalog" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statscatalog&amp;tab_module=analytics_stats&amp;module_name=statscatalog" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Store Manager for PrestaShop" title="Store Manager for PrestaShop" src="../img/tmp/fab03c1b9ce2eececdf357ba2c018191.jpg" />
					</td>
					<td>
						<div id="anchorStoremanagerforprestashop" title="Store Manager for PrestaShop">
							<div class="text-muted">
								Administrasi
							</div>
							<div class="module_name">
								<span style="display:none">storemanagerforprestashop</span>
								Store Manager for PrestaShop
								<small class="text-muted">v - oleh eMagicOne</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	30-DAY FREE TRIAL!&nbsp;&nbsp;The back office solution you need to run your PrestaShop online store efficiently ! Store Manager for PrestaShop&nbsp;will save you over 2 hours a day by automating daily
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=storemanagerforprestashop" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/administration-tools-prestashop-modules/2937-store-manager-for-prestashop.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statsbestsuppliers" class="noborder" title="Module statsbestsuppliers " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Supplier terbaik" title="Supplier terbaik" src="/SupraShop/modules/statsbestsuppliers/logo.png" />
					</td>
					<td>
						<div id="anchorStatsbestsuppliers" title="Supplier terbaik">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statsbestsuppliers</span>
								Supplier terbaik
								<small class="text-muted">v1.4.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan daftar supplier terbaik ke statistik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestsuppliers&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestsuppliers&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestsuppliers&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestsuppliers&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestsuppliers&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statsbestsuppliers&amp;tab_module=analytics_stats&amp;module_name=statsbestsuppliers&amp;anchor=Statsbestsuppliers" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statsbestsuppliers" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statsbestsuppliers" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statsbestsuppliers&amp;tab_module=analytics_stats&amp;module_name=statsbestsuppliers" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="supramulticurrency" class="noborder" title="Module supramulticurrency " data-rel="Apakah Anda Akan Mendelete Module ini ?"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Supra Multi Currency Product" title="Supra Multi Currency Product" src="/SupraShop/modules/supramulticurrency/logo.gif" />
					</td>
					<td>
						<div id="anchorSupramulticurrency" title="Supra Multi Currency Product">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">supramulticurrency</span>
								Supra Multi Currency Product
								<small class="text-muted">v1 - oleh PT.SUPRABAKTI MANDIRI</small>
																																</div>
							<p class="module_description">
																	Supra Multi Currency Product
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=supramulticurrency&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=supramulticurrency&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=supramulticurrency&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=supramulticurrency&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=supramulticurrency&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=supramulticurrency&amp;tab_module=front_office_features&amp;module_name=supramulticurrency&amp;anchor=Supramulticurrency" onclick="return confirm('Apakah Anda Akan Mendelete Module ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="supramulticurrency" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="supramulticurrency" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=supramulticurrency&amp;tab_module=front_office_features&amp;module_name=supramulticurrency" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blocksharefb" class="noborder" title="Module blocksharefb " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Tombol share facebook" title="Tombol share facebook" src="/SupraShop/modules/blocksharefb/logo.png" />
					</td>
					<td>
						<div id="anchorBlocksharefb" title="Tombol share facebook">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blocksharefb</span>
								Tombol share facebook
								<small class="text-muted">v1.3.0 - oleh PrestaShop</small>
															</div>
							<p class="module_description">
																	Memungkinkan pelanggan untuk membagi produk atau konten ke Facebook.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																		<a class="btn btn-success" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;install=blocksharefb&amp;tab_module=front_office_features&amp;module_name=blocksharefb&amp;anchor=Blocksharefb">
													<i class="icon-plus-sign-alt"></i>&nbsp;Pasangkan
												</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>
										<ul class="dropdown-menu">
																																																																									<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blocksharefb&amp;tab_module=front_office_features&amp;module_name=blocksharefb" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="bankwire" class="noborder" title="Module bankwire " data-rel="Informasi bank akan dihapus. Lanjutkan?"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Transfer Bank" title="Transfer Bank" src="/SupraShop/modules/bankwire/logo.png" />
					</td>
					<td>
						<div id="anchorBankwire" title="Transfer Bank">
							<div class="text-muted">
								Pembayaran &amp; Gateway
							</div>
							<div class="module_name">
								<span style="display:none">bankwire</span>
								Transfer Bank
								<small class="text-muted">v1.1.1 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Terima pembayaran melalui transfer bank.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=bankwire&amp;tab_module=payments_gateways&amp;module_name=bankwire" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=bankwire&amp;enable=0&amp;tab_module=payments_gateways" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=bankwire&amp;disable_device=4&amp;tab_module=payments_gateways" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=bankwire&amp;disable_device=2&amp;tab_module=payments_gateways" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=bankwire&amp;disable_device=1&amp;tab_module=payments_gateways" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=bankwire&amp;reset&amp;tab_module=payments_gateways" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=bankwire&amp;tab_module=payments_gateways&amp;module_name=bankwire&amp;anchor=Bankwire" onclick="return confirm('Informasi bank akan dihapus. Lanjutkan?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="bankwire" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="bankwire" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=bankwire&amp;tab_module=payments_gateways&amp;module_name=bankwire" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="UPS Delivery Status" title="UPS Delivery Status" src="../img/tmp/4c9dd4e0f775bd2919d4e520f674b910.jpg" />
					</td>
					<td>
						<div id="anchorUpstrackingv2" title="UPS Delivery Status">
							<div class="text-muted">
								Pengiriman &amp; Logistik
							</div>
							<div class="module_name">
								<span style="display:none">upstrackingv2</span>
								UPS Delivery Status
								<small class="text-muted">v2.0.1 - oleh PrestaShop</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	Do you deliver with UPS, a company known for its speed and reliability?  Make customers&rsquo; life easier and improve customer&rsquo;s satisfaction with the UPS Tracking module, which makes tracking 
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=upstrackingv2" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/shipping-logistics-delivery-prestashop-modules/1504-ups-delivery-status.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="statsbestvouchers" class="noborder" title="Module statsbestvouchers " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Voucher Terbaik" title="Voucher Terbaik" src="/SupraShop/modules/statsbestvouchers/logo.png" />
					</td>
					<td>
						<div id="anchorStatsbestvouchers" title="Voucher Terbaik">
							<div class="text-muted">
								Analisa dan statistik
							</div>
							<div class="module_name">
								<span style="display:none">statsbestvouchers</span>
								Voucher Terbaik
								<small class="text-muted">v1.5.0 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Tambahkan voucher terbaik ke statistik dashboard.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestvouchers&amp;enable=0&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestvouchers&amp;disable_device=4&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestvouchers&amp;disable_device=2&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestvouchers&amp;disable_device=1&amp;tab_module=analytics_stats" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=statsbestvouchers&amp;reset&amp;tab_module=analytics_stats" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=statsbestvouchers&amp;tab_module=analytics_stats&amp;module_name=statsbestvouchers&amp;anchor=Statsbestvouchers" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="statsbestvouchers" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="statsbestvouchers" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=statsbestvouchers&amp;tab_module=analytics_stats&amp;module_name=statsbestvouchers" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_inactive text-center" style="width: 1%;">
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="WebHostingHub" title="WebHostingHub" src="../img/tmp/f4735ecab000bb4c089ed2f59fd06fce.jpg" />
					</td>
					<td>
						<div id="anchorWebhostinghub" title="WebHostingHub">
							<div class="text-muted">
								Modul lainnya
							</div>
							<div class="module_name">
								<span style="display:none">webhostinghub</span>
								WebHostingHub
								<small class="text-muted">v - oleh PrestaShop Partners</small>
																	- <span class="module-badge-popular help-tooltip text-primary" data-title="Modul ini tersedia di PrestaShop Addons"><i class="icon-group"></i> <small>Populer</small></span>
															</div>
							<p class="module_description">
																	WebHostingHub offers you the easiest way to get your website and ecommerce presence online at a fraction of the cost of other providers
																									<br><a href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;ajax=1&amp;action=GetModuleQuickView&amp;module=webhostinghub" class="fancybox-quick-view"><i class="icon-search"></i> Lebih lanjut</a>
															</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																	<a class="btn btn-default _blank" href="http://addons.prestashop.com/en/services/20659-webhostinghub.html?utm_source=back-office&amp;utm_medium=push-addons&amp;utm_campaign=back-office-EN&amp;utm_content=download">
										<i class="icon-shopping-cart"></i> &nbsp;									</a>
															</div>
						</div>
					</td>
				</tr>
											<tr>
					<td class="module_active text-center" style="width: 1%;">
												<input type="checkbox" name="modules" value="blockwishlist" class="noborder" title="Module blockwishlist " data-rel="false"/>
											</td>
					<td class="fixed-width-xs">
						<img width="57" alt="Wishlist block" title="Wishlist block" src="/SupraShop/modules/blockwishlist/logo.png" />
					</td>
					<td>
						<div id="anchorBlockwishlist" title="Wishlist block">
							<div class="text-muted">
								Fitur Front Office
							</div>
							<div class="module_name">
								<span style="display:none">blockwishlist</span>
								Wishlist block
								<small class="text-muted">v1.3.1 - oleh PrestaShop</small>
																																</div>
							<p class="module_description">
																	Adds a block containing the customer's wishlists.
																							</p>
													</div>
					</td>
					<td class="actions">
						<div class="btn-group-action">
							<div class="btn-group pull-right">
																																																														<a class=" btn btn-default" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;configure=blockwishlist&amp;tab_module=front_office_features&amp;module_name=blockwishlist" onclick=""  title=""><i class="icon-wrench"></i> Konfigurasi</a>
																														
																			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" >
											<span class="caret">&nbsp;</span>
										</button>

										<ul class="dropdown-menu">
																																																																									<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockwishlist&amp;enable=0&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-off"></i> Nonaktifkan</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockwishlist&amp;disable_device=4&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkan mobile"><i class="icon-mobile"></i> Nonaktifkan pada perangkan mobile</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockwishlist&amp;disable_device=2&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada perangkat tablet"><i class="icon-tablet"></i> Nonaktifkan pada perangkat tablet</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockwishlist&amp;disable_device=1&amp;tab_module=front_office_features" onclick=""  title="Nonaktifkan pada komputer"><i class="icon-desktop"></i> Nonaktifkan pada komputer</a></li>
																																																																											<li><a class="reset_ready" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;module_name=blockwishlist&amp;reset&amp;tab_module=front_office_features" onclick=""  title=""><i class="icon-undo"></i> Reset</a></li>
																																																																											<li><a class="" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;uninstall=blockwishlist&amp;tab_module=front_office_features&amp;module_name=blockwishlist&amp;anchor=Blockwishlist" onclick="return confirm('Yakin akan meng-uninstall modul ini ?');"  title="Lepaskan"><i class="icon-minus-sign-alt"></i> Lepaskan</a></li>
																																																																											<li><a class="action_unfavorite toggle_favorite" data-value="0" data-module="blockwishlist" style="display:none;" href="#" onclick=""  title="Hapus dari daftar favorit"><i class="icon-star"></i> Hapus dari daftar favorit</a></li>
																																																																											<li><a class="action_favorite toggle_favorite" data-value="1" data-module="blockwishlist" style="" href="#" onclick=""  title="Tandai sebagai favorit"><i class="icon-star"></i> Tandai sebagai favorit</a></li>
																																																																											<li class="divider"></li>
																																																																											<li><a class="text-danger" href="index.php?controller=AdminModules&amp;token=2c0f987c2e2156f0d4ba472383cae3fe&amp;delete=blockwishlist&amp;tab_module=front_office_features&amp;module_name=blockwishlist" onclick="return confirm('Tindakan ini akan menghapus secara permanen modul dari server. Apakah Anda yakin ingin melakukan ini?');"  title=""><i class="icon-trash"></i> Hapus</a></li>
																																														</ul>
																								</div>
						</div>
					</td>
				</tr>
					</tbody>
	</table>
	<div class="btn-group pull-left">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			tindakan masal
			 <span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<li>
			 	<a href="#" onclick="modules_management('install')">
					<i class="icon-plus-sign-alt"></i>&nbsp;
					Install modul yang dipilih
				</a>
			</li>
			<li>
				<a href="#" onclick="modules_management('uninstall')">
					<i class="icon-minus-sign-alt"></i>&nbsp;
					Uninstall modul yang dipilih
				</a>
			</li>
		</ul>
	</div>
	<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>

		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#file-selectbutton').click(function(e){
			$('#file').trigger('click');
		});
		$('#file-name').click(function(e){
			$('#file').trigger('click');
		});
		$('#file').change(function(e){
			var val = $(this).val();
			var file = val.split(/[\\/]/);
			$('#file-name').val(file[file.length-1]);
		});
	});
</script>

	
	</div>
</div>
<div id="footer" class="bootstrap hide">

	<div class="col-sm-2 hidden-xs">
		<a href="http://www.prestashop.com/" class="_blank">PrestaShop&trade;</a>
		-
		<span id="footer-load-time"><i class="icon-time" title="Waktu loading"></i> 10.997s</span>
	</div>

	<div class="col-sm-2 hidden-xs">
		<div class="social-networks">
			<a class="link-social link-twitter _blank" href="https://twitter.com/PrestaShop" title="Twitter">
				<i class="icon-twitter"></i>
			</a>
			<a class="link-social link-facebook _blank" href="https://www.facebook.com/prestashop" title="Facebook">
				<i class="icon-facebook"></i>
			</a>
			<a class="link-social link-github _blank" href="https://www.prestashop.com/github" title="Github">
				<i class="icon-github"></i>
			</a>
			<a class="link-social link-google _blank" href="https://plus.google.com/+prestashop/" title="Google">
				<i class="icon-google-plus"></i>
			</a>
		</div>
	</div>
	<div class="col-sm-5">
		<div class="footer-contact">
			<a href="http://www.prestashop.com/en/contact_us?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ID&amp;utm_content=download" class="footer_link _blank">
				<i class="icon-envelope"></i>
				Kontak
			</a>
			/&nbsp;
			<a href="http://forge.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ID&amp;utm_content=download" class="footer_link _blank">
				<i class="icon-bug"></i>
				Bug Tracker
			</a>
			/&nbsp;
			<a href="http://www.prestashop.com/forums/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ID&amp;utm_content=download" class="footer_link _blank">
				<i class="icon-comments"></i>
				Forum
			</a>
			/&nbsp;
			<a href="http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ID&amp;utm_content=download" class="footer_link _blank">
				<i class="icon-puzzle-piece"></i>
				Addons
			</a>
			/&nbsp;
			<a href="http://www.prestashop.com/en/training-prestashop?utm_source=back-office&amp;utm_medium=footer&amp;utm_campaign=back-office-ID&amp;utm_content=download" class="footer_link _blank">
				<i class="icon-book"></i>
				Pelatihan
			</a>
								</div>
	</div>

	<div class="col-sm-3">
		
	</div>

	<div id="go-top" class="hide"><i class="icon-arrow-up"></i></div>
</div>

<div class="bootstrap">
	<div class="modal fade" id="modal_addons_connect" tabindex="-1">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
						<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><i class="icon-puzzle-piece"></i> <a target="_blank" href="http://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-ID&utm_content=download">PrestaShop Addons</a></h4>
			</div>
			
			<div class="modal-body">
						<!--start addons login-->
			<form id="addons_login_form" method="post" >
				<div>
					<a href="https://addons.prestashop.com/id/login?email=chandra%40beltcare.com&amp;firstname=Eka+Chandra&amp;lastname=Setiawan&amp;website=http%3A%2F%2Flocalhost%2FSupraShop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow"><img class="img-responsive center-block" src="themes/default/img/prestashop-addons-logo.png" alt="Logo PrestaShop Addons"/></a>
					<h3 class="text-center">Hubungkan toko Anda dengan marketplace PrestaShop untuk mengimpor semua Addons yang telah Anda beli.</h3>
					<hr />
				</div>
				<div class="row">
					<div class="col-md-6">
						<h4>Tidak memiliki akun ?</h4>
						<p class='text-justify'>Temukan kelebihan PrestaShop Addons! Kunjungi marketplace resmi PrestaShop dan temukan lebih dari 3 500 modul dan theme inovatif yang dapat meningkatkan rate konversi, menaikan jumlah pengunjung, membangun kesetiaan pelanggan dan memaksimalkan produktivitas Anda</p>
					</div>
					<div class="col-md-6">
						<h4>Terhubung ke PrestaShop Addons</h4>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="icon-user"></i></span>
								<input id="username_addons" name="username_addons" type="text" value="" autocomplete="off" class="form-control ac_input">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="icon-key"></i></span>
								<input id="password_addons" name="password_addons" type="password" value="" autocomplete="off" class="form-control ac_input">
							</div>
							<a class="btn btn-link pull-right _blank" href="//addons.prestashop.com/id/forgot-your-password">Lupa password</a>
							<br>
						</div>
					</div>
				</div>

				<div class="row row-padding-top">
					<div class="col-md-6">
						<div class="form-group">
							<a class="btn btn-default btn-block btn-lg _blank" href="https://addons.prestashop.com/id/login?email=chandra%40beltcare.com&amp;firstname=Eka+Chandra&amp;lastname=Setiawan&amp;website=http%3A%2F%2Flocalhost%2FSupraShop%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-ID&amp;utm_content=download#createnow">
								Buat akun
								<i class="icon-external-link"></i>
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<button id="addons_login_button" class="btn btn-primary btn-block btn-lg" type="submit">
								<i class="icon-unlock"></i> Login
							</button>
						</div>
					</div>
				</div>

				<div id="addons_loading" class="help-block"></div>

			</form>
			<!--end addons login-->
			</div>


					</div>
	</div>
</div><div class="modal fade" id="moduleTradLangSelect" tabindex="-1">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
						<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Terjemahkan modul ini</h4>
			</div>
			
			<div class="modal-body">
	<div class="input-group">
		<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
			<i class="icon-flag"></i>
			Kelola terjemahan
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
						<li><a href="index.php?tab=AdminTranslations&amp;token=d36f6230aa4355f5509f8d161b49a387&amp;type=modules&amp;lang=id#">Indonesia (Indonesia)</a></li>
					</ul>
	</div>
</div>

					</div>
	</div>
</div><div class="modal fade" id="moduleNotTrusted" tabindex="-1">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
						<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Pemberitahuan Penting</h4>
			</div>
			
			<div class="untrusted-content-action">

	<div class="modal-body">
		<div class="alert alert-warning">
			<h3>Modul ini tidak dapat diverifikasi oleh Prestashop. Lanjutkan instalasi?</h3>

			<p>Biasanya terjadi jika modul tidak didistribusikan lewat marketplace resmi, Prestashop Addons - atau server Anda gagal ketika melakukan koneksi ke Prestashop Addons.</p>
		</div>

		<div class="row">
			<div class="col-sm-2" style="text-align: center;">
				<img id="untrusted-module-logo" class="" src="" alt="" style="max-width:96px;">
			</div>
			<div class="col-sm-10">
				<table class="table">
					<tr>
						<td>Modul</td>
						<td><strong><span class="module-display-name-placeholder"></span></strong></td>
					</tr>
					<tr>
						<td>Penulis</td>
						<td><strong><span class="author-name-placeholder"></span></strong></td>
					</tr>
				</table>
			</div>

			<div class="col-sm-12" style="text-align: center; padding-top: 12px;">
				<a id="proceed-install-anyway" href="#" class="btn btn-warning">Lanjutkan ke proses instalasi</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Kembali ke daftar modul</button>
			</div>
		</div>
	</div>

	<div class="modal-footer">
		<div class="alert alert-info">
			<p>
				Dikarenakan mungkin anda tidak download modul ini dari PrestaShop Addons, kami tidak bisa menjamin modul ini aman. Kami menyarankan Anda untuk menginstal jika Anda mempercayai sumber module ini.
				<a id="untrusted-show-risk" href="#"><strong>Apa resikonya?</strong></a>
			</p>
		</div>
	</div>

</div>

<div class="untrusted-content-more-info" style="display:none;">

	<div class="modal-body">
		<h4>Apakah saya dalam bahaya?</h4>

		<p>Modul yang belum diverifikasi dapat berbahaya dan bisa menambah fungsi tersembunyi seperti backdoors, iklan, link tersembunyi, spam, dll. Jangan khawatir, ini hanya peringatan.</p>

		<p>PrestaShop, adalah perangkat lunak open-source, memiliki komunitas yang mengagumkan dengan sejarah panjang mengembangkan dan berbagi modul yang berkualitas. Sebelum menginstall modul ini, pastikan pembuat modul ini adalah anggota komunitas kami (misalnya dengan memeriksa <a href="https://www.prestashop.com/forums/">forum kami</a>).</p>

		<h4>Apa yang harus dilakukan?</h4>
		
		<p>Jika Anda mempercayai pembuat modul ini, Anda dapat melanjutkan proses instalasi.

		<p>Jika tidak, Anda dapat mencari modul serupa di marketplace resmi. <a class="catalog-link" href="#">Klik disini untuk mengunjungi PrestaShop Addons</a>.

	</div>

	<div class="modal-footer">
		<a id="untrusted-show-action" class="btn btn-default" href="#">Kembali</a>
	</div>

</div>


					</div>
	</div>
</div><div class="modal fade" id="moduleNotTrustedCountry" tabindex="-1">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
						<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Modul ini tidak dapat dipercaya untuk negara Anda</h4>
			</div>
			
			
<div class="modal-body">
	<div class="alert alert-warning">
		<h4>Anda akan menginstall modul &quot;<strong><span class="module-display-name-placeholder"></span></strong>&quot;, yang tidak kompatibel dengan negara Anda.</h4>
		<p>
			Modul ini belum diverifikasi oleh Prestashop dan oleh karenanya kami tidak dapat memastikan modul ini berfungsi baik di negara Anda dan sesuai dengan standar kualitas kami.
			<strong>Resiko tanggung sendiri.</strong>
		</p>
	</div>
	<h3>Apa yang harus dilakukan?</h3>
	<p>
		Jika Anda tidak yakin, Anda dapa menghubungi layanan pelanggan <strong><span class="module-display-name-placeholder"></span></strong> dan meminta untuk dibuatkan modul yang kompatibel dengan negara Anda.<br />
		Kami merekomendasikan agar Anda menggunakan modul serupa: modul yang kompatibel dengan negara ada di menu &quot;Modul&quot; di back office.
	</p>
	<p>
		Jika Anda tidak yakin dengan modul ini, Anda dapat mencari modul serupa di marketplace resmi.
		<a class="_blank" href="http://addons.prestashop.com/">Klik disini untuk membuka PrestaShop Addons.</a>
	</p>
</div>

<div class="modal-footer">
	<div class="row">
		<div class="col-sm-12 text-center">
			<a id="proceed-install-anyway" href="#" class="btn btn-warning">Lanjutkan ke proses instalasi</a>
			<button type="button" class="btn btn-default" data-dismiss="modal">Kembali ke daftar modul</button>
		</div>
	</div>
</div>


					</div>
	</div>
</div>
</div>

</body>
</html>

<?php }} ?>
