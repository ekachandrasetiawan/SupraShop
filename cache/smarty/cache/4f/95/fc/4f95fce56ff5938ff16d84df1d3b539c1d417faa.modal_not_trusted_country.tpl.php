<?php /*%%SmartyHeaderCode:206825655889706a954-22538945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f95fce56ff5938ff16d84df1d3b539c1d417faa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\admin304yd26rz\\themes\\default\\template\\controllers\\modules\\modal_not_trusted_country.tpl',
      1 => 1446110212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206825655889706a954-22538945',
  'variables' => 
  array (
    'module_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5655889708fa28_24413703',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655889708fa28_24413703')) {function content_5655889708fa28_24413703($_smarty_tpl) {?>

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
<?php }} ?>
