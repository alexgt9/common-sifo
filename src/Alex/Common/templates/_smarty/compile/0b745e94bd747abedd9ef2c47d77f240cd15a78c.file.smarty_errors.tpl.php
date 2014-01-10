<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-10 19:11:48
         compiled from "/home/alexgt9/code/common-sifo/src/Common/templates/debug/smarty_errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175592326752d037e4131d30-04000902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b745e94bd747abedd9ef2c47d77f240cd15a78c' => 
    array (
      0 => '/home/alexgt9/code/common-sifo/src/Common/templates/debug/smarty_errors.tpl',
      1 => 1389283444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175592326752d037e4131d30-04000902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'debug' => 0,
    'affected_file' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d037e4187841_92791381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d037e4187841_92791381')) {function content_52d037e4187841_92791381($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/alexgt9/code/common-sifo/src/../vendor/alexgt9/Smarty-sifo-plugins/block.t.php';
?><?php if (is_array($_smarty_tpl->tpl_vars['debug']->value['smarty_errors'])) {?>
	<h2 id="smarty_erorrs_title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Smarty Errors<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_smarty_tpl->tpl_vars['affected_file'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['smarty_errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['smerrors']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
 $_smarty_tpl->tpl_vars['affected_file']->value = $_smarty_tpl->tpl_vars['error']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['smerrors']['index']++;
?>
	<h3 class="sm_errors query_error" id="smarty_errors_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['smerrors']['index'];?>
">
		<a class="debug_toggle_view" href="#" rel="smarty_errors_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['smerrors']['index'];?>
">
		<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['smerrors']['index']+1;?>
. <?php echo $_smarty_tpl->tpl_vars['affected_file']->value;?>
</a> </h3>
	<div id="smarty_errors_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['smerrors']['index'];?>
" class="debug_contents">
			<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	</div>
<?php } ?>
<?php }?><?php }} ?>
