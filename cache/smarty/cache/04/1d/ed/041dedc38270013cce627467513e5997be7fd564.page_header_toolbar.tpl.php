<?php /*%%SmartyHeaderCode:244325655889d7936a1-72566276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '041dedc38270013cce627467513e5997be7fd564' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\admin304yd26rz\\themes\\default\\template\\controllers\\modules\\page_header_toolbar.tpl',
      1 => 1446110212,
      2 => 'file',
    ),
    '00ee2ba6bc50ab499c41fe3b3b7d626c5ee4b80f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\admin304yd26rz\\themes\\default\\template\\page_header_toolbar.tpl',
      1 => 1446110212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244325655889d7936a1-72566276',
  'variables' => 
  array (
    'title' => 0,
    'page_header_toolbar_title' => 0,
    'page_header_toolbar_btn' => 0,
    'breadcrumbs2' => 0,
    'toolbar_btn' => 0,
    'k' => 0,
    'table' => 0,
    'btn' => 0,
    'help_link' => 0,
    'tab_modules_open' => 0,
    'tab_modules_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5655889da11671_43435211',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655889da11671_43435211')) {function content_5655889da11671_43435211($_smarty_tpl) {?>

		
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
<?php }} ?>
