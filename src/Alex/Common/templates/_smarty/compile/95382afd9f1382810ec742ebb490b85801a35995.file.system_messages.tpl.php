<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-09 21:24:24
         compiled from "/home/alexgt9/code/common-sifo/src/Common/templates/shared/system_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13355795052cf0578c65bd0-03670111%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95382afd9f1382810ec742ebb490b85801a35995' => 
    array (
      0 => '/home/alexgt9/code/common-sifo/src/Common/templates/shared/system_messages.tpl',
      1 => 1389299061,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13355795052cf0578c65bd0-03670111',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ko_messages' => 0,
    'msg' => 0,
    'ok_messages' => 0,
    'info_messages' => 0,
    'warning_messages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52cf0578cf16b8_95886327',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cf0578cf16b8_95886327')) {function content_52cf0578cf16b8_95886327($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['ko_messages']->value) {?>
<div class="msg_ko">
	<ul>
<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ko_messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
<?php } ?>
	</ul>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['ok_messages']->value) {?>
<div class="msg_ok">
	<ul>
<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ok_messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
<?php } ?>
	</ul>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['info_messages']->value) {?>
<div class="msg_info">
	<ul>
<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
<?php } ?>
	</ul>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['warning_messages']->value) {?>
<div class="msg_info">
	<ul>
<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['warning_messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
<?php } ?>
	</ul>
</div>
<?php }?><?php }} ?>
