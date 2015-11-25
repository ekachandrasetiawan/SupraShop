<?php /*%%SmartyHeaderCode:1394565587c0696b27-86434299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9b565f5a056691a4e17e9933a8f59369b55ba30' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\themes\\default-bootstrap\\modules\\blockmyaccount\\blockmyaccount.tpl',
      1 => 1446110214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1394565587c0696b27-86434299',
  'variables' => 
  array (
    'link' => 0,
    'returnAllowed' => 0,
    'voucherAllowed' => 0,
    'HOOK_BLOCK_MY_ACCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565587c07052c3_02793414',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565587c07052c3_02793414')) {function content_565587c07052c3_02793414($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount-column">
	<p class="title_block">
		<a href="http://localhost/SupraShop/akun-saya" title="Akun saya">
			Akun saya
		</a>
	</p>
	<div class="block_content list-block">
		<ul>
			<li>
				<a href="http://localhost/SupraShop/riwayat-pembelian" title="Daftar pembelian">
					Daftar pembelian
				</a>
			</li>
						<li>
				<a href="http://localhost/SupraShop/slip-order" title="Slip kredit">	Slip kredit
				</a>
			</li>
			<li>
				<a href="http://localhost/SupraShop/daftar-alamat" title="Alamat saya">
					Alamat saya
				</a>
			</li>
			<li>
				<a href="http://localhost/SupraShop/identitas" title="Informasi akun">
					Informasi akun
				</a>
			</li>
						<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="http://localhost/SupraShop/module/blockwishlist/mywishlist" title="Wishlist saya">
		<i class="icon-heart"></i>
		<span>Wishlist saya</span>
	</a>
</li>
<!-- END : MODULE WishList -->
		</ul>
		<div class="logout">
			<a 
			class="btn btn-default button button-small" 
			href="http://localhost/SupraShop/?mylogout=" 
			title="Keluar">
				<span>Keluar<i class="icon-chevron-right right"></i></span>
			</a>
		</div>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>
