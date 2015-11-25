<?php /*%%SmartyHeaderCode:1273756558837338a28-45867039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06ee9eb022c0dbc178a18cc56356aa43f3649ef0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\themes\\default-bootstrap\\my-account.tpl',
      1 => 1446110214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1273756558837338a28-45867039',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5655888581e9e4_24236855',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655888581e9e4_24236855')) {function content_5655888581e9e4_24236855($_smarty_tpl) {?>

<h1 class="page-heading">Akun saya</h1>
<p class="info-account">Selamat datang di halaman akun. Disini anda dapat mengatur informasi dan pembelian Anda.</p>
<div class="row addresses-lists">
	<div class="col-xs-12 col-sm-6 col-lg-4">
		<ul class="myaccount-link-list">
                        <li><a href="http://localhost/SupraShop/riwayat-pembelian" title="Penjualan"><i class="icon-list-ol"></i><span>Riwayat pembelian</span></a></li>
                        <li><a href="http://localhost/SupraShop/slip-order" title="Nota Kredit"><i class="icon-file-o"></i><span>Slip kredit</span></a></li>
            <li><a href="http://localhost/SupraShop/daftar-alamat" title="Alamat"><i class="icon-building"></i><span>Alamat saya</span></a></li>
            <li><a href="http://localhost/SupraShop/identitas" title="Informasi"><i class="icon-user"></i><span>Informasi saya</span></a></li>
        </ul>
	</div>
	<div class="col-xs-12 col-sm-6 col-lg-4">
        <ul class="myaccount-link-list">
                        <!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="http://localhost/SupraShop/module/blockwishlist/mywishlist" title="Wishlist saya">
		<i class="icon-heart"></i>
		<span>Wishlist saya</span>
	</a>
</li>
<!-- END : MODULE WishList --><!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a href="http://localhost/SupraShop/module/confirmpayment/confirmpayment" title="Confirm Payment">
	<i class="icon-file-o"></i>
	<span>Konfirmasi Pembayaran</span>
	</a>
</li>
<!-- END : MODULE WishList -->
        </ul>
    </div>
</div>
<ul class="footer_links clearfix">
<li><a class="btn btn-default button button-small" href="http://localhost/SupraShop/" title="Beranda"><span><i class="icon-chevron-left"></i> Beranda</span></a></li>
</ul>
<?php }} ?>
