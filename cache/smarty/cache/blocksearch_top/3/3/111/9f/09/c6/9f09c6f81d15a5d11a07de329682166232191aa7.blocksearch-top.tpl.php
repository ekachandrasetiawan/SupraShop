<?php /*%%SmartyHeaderCode:473956556e27102242-93693418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f09c6f81d15a5d11a07de329682166232191aa7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1446110214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '473956556e27102242-93693418',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565587ae573cb0_81871416',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565587ae573cb0_81871416')) {function content_565587ae573cb0_81871416($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/SupraShop/cari" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Cari" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Cari</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>