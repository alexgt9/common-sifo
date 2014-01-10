<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-10 19:11:48
         compiled from "/home/alexgt9/code/common-sifo/src/Common/templates/debug/log_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177857119552d037e49b0331-86989315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ddce04921d63537cee011cf035dacf026111117' => 
    array (
      0 => '/home/alexgt9/code/common-sifo/src/Common/templates/debug/log_messages.tpl',
      1 => 1389283444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177857119552d037e49b0331-86989315',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'log_messages' => 0,
    'value' => 0,
    'debug_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d037e4ac16f6_55399915',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d037e4ac16f6_55399915')) {function content_52d037e4ac16f6_55399915($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/alexgt9/code/common-sifo/src/../vendor/alexgt9/Smarty-sifo-plugins/block.t.php';
if (!is_callable('smarty_modifier_debug_print_var')) include '/home/alexgt9/code/common-sifo/vendor/smarty/smarty/distribution/libs/plugins/modifier.debug_print_var.php';
?>
<?php if (isset($_smarty_tpl->tpl_vars['log_messages']->value['html'])) {?>
	<h2 id="benchmarks"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Log Messages<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['log_messages']->value['html']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['html_log']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['html_log']['index']++;
?>
	<h3 id="html_log_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['html_log']['index'];?>
" class="<?php if ($_smarty_tpl->tpl_vars['value']->value['type']=='error') {?>query_error<?php }?><?php if ($_smarty_tpl->tpl_vars['value']->value['type']=='warn') {?>query_duplicated<?php }?>">
		<a class="debug_toggle_view" rel="html_log_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['html_log']['index'];?>
" href="#">
			<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['html_log']['index']+1;?>
. Message <?php echo $_smarty_tpl->tpl_vars['value']->value['type'];?>

		</a>
	</h3>
	<div id="html_log_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['html_log']['index'];?>
" class="debug_contents">
			<pre>
	<?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['value']->value['message']);?>

			</pre>
		</div>

	<?php } ?>
<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['log_messages']->value['browser_console'])) {?>
<script>
	
	// JavaScript debug this is for IE and other browsers w/o console
	if (!window.console) console = {};
	console.log = console.log || function(){};
	console.warn = console.warn || function(){};
	console.error = console.error || function(){};
	console.info = console.info || function(){};
	console.debug = console.debug || function(){};
	

	<?php  $_smarty_tpl->tpl_vars['debug_message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['debug_message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['log_messages']->value['browser_console']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['debug_messages_iteration']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['debug_message']->key => $_smarty_tpl->tpl_vars['debug_message']->value) {
$_smarty_tpl->tpl_vars['debug_message']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['debug_messages_iteration']['iteration']++;
?>
		<?php if ($_smarty_tpl->tpl_vars['debug_message']->value['is_object']) {?>
	var object_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['debug_messages_iteration']['iteration'];?>
 = <?php echo $_smarty_tpl->tpl_vars['debug_message']->value['message'];?>
;
	var val_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['debug_messages_iteration']['iteration'];?>
 = eval("(" + object_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['debug_messages_iteration']['iteration'];?>
 + ")" );
		<?php } else { ?>
	var val_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['debug_messages_iteration']['iteration'];?>
 = <?php echo $_smarty_tpl->tpl_vars['debug_message']->value['message'];?>
;
		<?php }?>
	console.<?php echo $_smarty_tpl->tpl_vars['debug_message']->value['type'];?>
( val_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['debug_messages_iteration']['iteration'];?>
 );
	<?php } ?>
</script>
<?php }?>


<?php if (isset($_smarty_tpl->tpl_vars['log_messages']->value['alert'])) {?>
<script>
	<?php  $_smarty_tpl->tpl_vars['debug_message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['debug_message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['log_messages']->value['alert']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['debug_messages_iteration']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['debug_message']->key => $_smarty_tpl->tpl_vars['debug_message']->value) {
$_smarty_tpl->tpl_vars['debug_message']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['debug_messages_iteration']['iteration']++;
?>
		alert( <?php echo $_smarty_tpl->tpl_vars['debug_message']->value['message'];?>
 );
	<?php } ?>
</script>
<?php }?><?php }} ?>
