<?php /*%%SmartyHeaderCode:2947156558895be9d31-67851679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aaa42036fd64c13d070b67d49bcc919d697ee8e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\admin304yd26rz\\themes\\default\\template\\controllers\\modules\\login_addons.tpl',
      1 => 1446110212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2947156558895be9d31-67851679',
  'variables' => 
  array (
    'add_permission' => 0,
    'logged_on_addons' => 0,
    'check_url_fopen' => 0,
    'check_openssl' => 0,
    'addons_register_link' => 0,
    'addons_forgot_password_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56558895c64ff5_50212124',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56558895c64ff5_50212124')) {function content_56558895c64ff5_50212124($_smarty_tpl) {?>
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
<?php }} ?>
