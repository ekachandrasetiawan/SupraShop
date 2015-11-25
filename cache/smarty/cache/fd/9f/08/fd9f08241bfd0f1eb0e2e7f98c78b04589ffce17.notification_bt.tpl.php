<?php /*%%SmartyHeaderCode:24837565588a44b4ae8-32117061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd9f08241bfd0f1eb0e2e7f98c78b04589ffce17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SupraShop\\modules\\gamification\\views\\templates\\hook\\notification_bt.tpl',
      1 => 1448439272,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24837565588a44b4ae8-32117061',
  'variables' => 
  array (
    'current_id_tab' => 0,
    'current_level_percent' => 0,
    'current_level' => 0,
    'advice_hide_url' => 0,
    'link' => 0,
    'notification' => 0,
    'badges_to_display' => 0,
    'unlock_badges' => 0,
    'badge' => 0,
    'i' => 0,
    'next_badges' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_565588a46264c1_56108910',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565588a46264c1_56108910')) {function content_565588a46264c1_56108910($_smarty_tpl) {?><script>
	var current_id_tab = 104;
	var current_level_percent = 0;
	var current_level = 1;
	var gamification_level = 'Level';
	var advice_hide_url = 'http://gamification.prestashop.com/api/AdviceHide/';
	var hide_advice = 'Apakah anda Ingin tidak melihat lagi pemberitahuan ini?';

	$('#dropdown_gamification .notifs_panel_header, #dropdown_gamification .tab-content').click(function () {
		return false;
	});

	$('#dropdown_gamification .panel-footer').click(function (elt) {
		window.location.href = 'index.php?controller=AdminGamification&token=de5bb9c91be2c7ff1818394c2ce6541c';
	});

	$('#gamification_tab li').click(function () {
		gamificationDisplayTab($(this).children('a'));
		return false;
	});

	function gamificationDisplayTab(elt)
	{
		$('#gamification_tab li, .gamification-tab-pane').removeClass('active');
		$(elt).parent('li').addClass('active');
		$('#'+$(elt).data('target')).addClass('active');
	}

</script>
<li id="gamification_notif" style="background:none" class="dropdown">
	<a href="javascript:void(0);" class="dropdown-toggle gamification_notif" data-toggle="dropdown">
		<i class="icon-trophy"></i>
		<span id="gamification_notif_number_wrapper" class="notifs_badge">
			<span id="gamification_notif_value">0</span>
		</span>
	</a>
	<div class="dropdown-menu notifs_dropdown" id="dropdown_gamification">
		<section id="gamification_notif_wrapper" class="notifs_panel" style="width:325px">
			<header class="notifs_panel_header">
				<h3>Keahlian menjual Anda
					<span class="label label-default" style="float:right">Level 1 : 0 %</span>
				</h3>
			</header>
			<div class="progress" style="margin: 10px">
				<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
				<span style="color:#FFF">Level 1 : 0 %</span>
				</div>
			</div>
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" id="gamification_tab" style="margin-left:10px">
				<li class="active">
					<a href="#home" data-toggle="tab" data-target="gamification_1" onclick="gamificationDisplayTab(this); return false;">peningkatan sebelumnya:</a>
				</li>
				<li>
					<a href="#profile" data-toggle="tab" data-target="gamification_2" onclick="gamificationDisplayTab(this); return false;">Peningkatan selanjutnya:</a>
				</li>
			</ul>

			<!-- Tab panes -->
			<div class="tab-content">
				<div class="tab-pane gamification-tab-pane active" id="gamification_1">
					<ul id="gamification_badges_list" style=" height:170px; padding-left:0">
																					</ul>
				</div>
				<div class="tab-pane gamification-tab-pane" id="gamification_2">
					<ul id="gamification_badges_list" style=" height:170px; padding-left:0">
																					</ul>
				</div>
			</div>

			<footer class="panel-footer">
				<a href="index.php?controller=AdminGamification&token=de5bb9c91be2c7ff1818394c2ce6541c">Lihat peningkatan akun saya</a>
			</footer>
		</section>
	</div>
</li>
<?php }} ?>
