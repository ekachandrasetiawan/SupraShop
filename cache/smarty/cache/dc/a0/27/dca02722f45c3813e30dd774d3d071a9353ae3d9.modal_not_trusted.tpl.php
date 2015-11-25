<?php /*%%SmartyHeaderCode:29749565588968aa373-27323253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dca02722f45c3813e30dd774d3d071a9353ae3d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\admin304yd26rz\\themes\\default\\template\\controllers\\modules\\modal_not_trusted.tpl',
      1 => 1446110212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29749565588968aa373-27323253',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565588968daa20_32809904',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565588968daa20_32809904')) {function content_565588968daa20_32809904($_smarty_tpl) {?>
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
<?php }} ?>
