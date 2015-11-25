<?php /*%%SmartyHeaderCode:78575655889ac0afb2-23565431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13ef899999b64aba0ea2c44abdb4919848674bb2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\admin304yd26rz\\themes\\default\\template\\helpers\\kpi\\row.tpl',
      1 => 1446110212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78575655889ac0afb2-23565431',
  'variables' => 
  array (
    'kpis' => 0,
    'col' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5655889ac37561_99736906',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655889ac37561_99736906')) {function content_5655889ac37561_99736906($_smarty_tpl) {?><div class="panel kpi-container">
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
<?php }} ?>
