<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-10 19:01:52
         compiled from "/home/alexgt9/code/common-sifo/src/Common/templates/ads/google.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10138755152d0359087f4d5-98875587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3106d1762ee2ed482e3530de87d21c193383649f' => 
    array (
      0 => '/home/alexgt9/code/common-sifo/src/Common/templates/ads/google.tpl',
      1 => 1389283444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10138755152d0359087f4d5-98875587',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ad' => 0,
    'test_mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d03590914da8_87153424',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d03590914da8_87153424')) {function content_52d03590914da8_87153424($_smarty_tpl) {?><div class="<?php echo $_smarty_tpl->tpl_vars['ad']->value['containter_class'];?>
" style="text-align:center">
	<script type="text/javascript"><!--
<?php if ($_smarty_tpl->tpl_vars['ad']->value['google_analytics_domain_name']) {?>
	google_analytics_domain_name = "<?php echo $_smarty_tpl->tpl_vars['ad']->value['google_analytics_domain_name'];?>
";
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ad']->value['slot']) {?>
	google_ad_slot= "<?php echo $_smarty_tpl->tpl_vars['ad']->value['slot'];?>
";
<?php }?>
	google_ad_client = "<?php echo $_smarty_tpl->tpl_vars['ad']->value['client'];?>
";
	google_ad_width = <?php echo $_smarty_tpl->tpl_vars['ad']->value['width'];?>
;
	google_ad_height = <?php echo $_smarty_tpl->tpl_vars['ad']->value['height'];?>
;
	google_ad_format = "<?php echo $_smarty_tpl->tpl_vars['ad']->value['width'];?>
x<?php echo $_smarty_tpl->tpl_vars['ad']->value['height'];?>
_as";
	google_ad_type = "<?php echo $_smarty_tpl->tpl_vars['ad']->value['type'];?>
";
	google_color_border = "<?php echo $_smarty_tpl->tpl_vars['ad']->value['colors']['border'];?>
";
	google_color_bg = "<?php echo $_smarty_tpl->tpl_vars['ad']->value['colors']['bg'];?>
";
	google_color_link = "<?php echo $_smarty_tpl->tpl_vars['ad']->value['colors']['link'];?>
";
	google_color_url = "<?php echo $_smarty_tpl->tpl_vars['ad']->value['colors']['url'];?>
";
	google_color_text = "<?php echo $_smarty_tpl->tpl_vars['ad']->value['colors']['text'];?>
";
<?php if (isset($_smarty_tpl->tpl_vars['test_mode']->value)) {?>
	google_adtest = 'on';
<?php }?>
	//-->
	</script>
	<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_ads.js"></script>
</div><?php }} ?>
