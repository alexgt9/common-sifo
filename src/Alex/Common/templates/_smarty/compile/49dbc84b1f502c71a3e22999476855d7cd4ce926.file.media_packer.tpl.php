<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-09 21:23:27
         compiled from "/home/alexgt9/code/common-sifo/src/Common/templates/shared/media_packer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:52130066252cf053f577901-37301909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49dbc84b1f502c71a3e22999476855d7cd4ce926' => 
    array (
      0 => '/home/alexgt9/code/common-sifo/src/Common/templates/shared/media_packer.tpl',
      1 => 1389283444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52130066252cf053f577901-37301909',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'css_groups' => 0,
    'css_group' => 0,
    'media' => 0,
    'url' => 0,
    'static_rev' => 0,
    'js_groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52cf053f5f79b8_54050214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cf053f5f79b8_54050214')) {function content_52cf053f5f79b8_54050214($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['css_groups']->value)) {?>
<?php  $_smarty_tpl->tpl_vars['css_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['css_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css_group']->key => $_smarty_tpl->tpl_vars['css_group']->value) {
$_smarty_tpl->tpl_vars['css_group']->_loop = true;
?>
		<link rel="stylesheet" type="text/css" media="<?php echo $_smarty_tpl->tpl_vars['media']->value[$_smarty_tpl->tpl_vars['css_group']->value]['media'];?>
" class="cssfx" href="<?php echo $_smarty_tpl->tpl_vars['url']->value['static'];?>
/css/generated/<?php echo $_smarty_tpl->tpl_vars['css_group']->value;?>
.css?rev=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['static_rev']->value)===null||$tmp==='' ? 'unset' : $tmp);?>
" />
<?php } ?>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['js_groups']->value)) {?>
<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['js_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
		<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url']->value['static'];?>
/js/generated/<?php echo $_smarty_tpl->tpl_vars['group']->value;?>
.js?rev=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['static_rev']->value)===null||$tmp==='' ? 'unset' : $tmp);?>
"></script>
<?php } ?>
<?php }?><?php }} ?>
