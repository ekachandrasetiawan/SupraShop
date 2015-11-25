<?php /*%%SmartyHeaderCode:157045655889996ae90-54009482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa662bc25aa9e54fb8f649218d8cc36dfa47be9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\admin304yd26rz\\themes\\default\\template\\helpers\\kpi\\kpi.tpl',
      1 => 1446110212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157045655889996ae90-54009482',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5655889a63b847_69104889',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655889a63b847_69104889')) {function content_5655889a63b847_69104889($_smarty_tpl) {?>
<div id="box-update-modules" data-toggle="tooltip" class="box-stats label-tooltip color3" data-original-title="">
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

<?php }} ?>
