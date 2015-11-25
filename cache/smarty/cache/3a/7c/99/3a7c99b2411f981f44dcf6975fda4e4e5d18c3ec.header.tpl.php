<?php /*%%SmartyHeaderCode:6685655889e8916d8-55546577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a7c99b2411f981f44dcf6975fda4e4e5d18c3ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\admin304yd26rz\\themes\\default\\template\\header.tpl',
      1 => 1446110212,
      2 => 'file',
    ),
    '8c641e4ef3681e27679b809e386ab63bf59251a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\themes\\javascript.tpl',
      1 => 1446110214,
      2 => 'file',
    ),
    'a36bca3a39569518c7fd215aad8601ebeece5304' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\admin304yd26rz\\themes\\default\\template\\nav.tpl',
      1 => 1446110212,
      2 => 'file',
    ),
    'ad590881452099e0a8b7e47c0d590fe25403a359' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\admin304yd26rz\\themes\\default\\template\\search_form.tpl',
      1 => 1446110212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6685655889e8916d8-55546577',
  'variables' => 
  array (
    'iso' => 0,
    'img_dir' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
    'display_header_javascript' => 0,
    'controller_name' => 0,
    'iso_user' => 0,
    'full_language_code' => 0,
    'country_iso_code' => 0,
    'round_mode' => 0,
    'shop_context' => 0,
    'autorefresh_notifications' => 0,
    'token' => 0,
    'currentIndex' => 0,
    'default_language' => 0,
    'link' => 0,
    'tab_modules_list' => 0,
    'css_files' => 0,
    'css_uri' => 0,
    'js_def' => 0,
    'js_files' => 0,
    'displayBackOfficeHeader' => 0,
    'brightness' => 0,
    'display_header' => 0,
    'employee' => 0,
    'collapse_menu' => 0,
    'default_tab_link' => 0,
    'version' => 0,
    'is_multishop' => 0,
    'shop_list' => 0,
    'multishop_context' => 0,
    'show_new_orders' => 0,
    'show_new_customers' => 0,
    'show_new_messages' => 0,
    'quick_access' => 0,
    'quick' => 0,
    'matchQuickLink' => 0,
    'quick_access_current_link_name' => 0,
    'quick_access_current_link_icon' => 0,
    'logged_on_addons' => 0,
    'display_addons_connection' => 0,
    'base_url' => 0,
    'base_url_tc' => 0,
    'maintenance_mode' => 0,
    'host_mode' => 0,
    'login_link' => 0,
    'displayBackOfficeTop' => 0,
    'bootstrap' => 0,
    'page_header_toolbar' => 0,
    'modal_module_list' => 0,
    'install_dir_exists' => 0,
    'lite_display' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5655889eb7e751_40113432',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655889eb7e751_40113432')) {function content_5655889eb7e751_40113432($_smarty_tpl) {?><!DOCTYPE html>
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


			




<?php }} ?>
