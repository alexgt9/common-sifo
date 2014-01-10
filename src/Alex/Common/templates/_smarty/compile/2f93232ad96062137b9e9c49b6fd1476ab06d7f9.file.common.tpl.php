<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-09 21:23:27
         compiled from "/home/alexgt9/code/common-sifo/src/Common/templates/error/common.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12738610452cf053f652f46-33450234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f93232ad96062137b9e9c49b6fd1476ab06d7f9' => 
    array (
      0 => '/home/alexgt9/code/common-sifo/src/Common/templates/error/common.tpl',
      1 => 1389283444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12738610452cf053f652f46-33450234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_code_msg' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52cf053f67a835_68636703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cf053f67a835_68636703')) {function content_52cf053f67a835_68636703($_smarty_tpl) {?><h1>Error <?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['error_code_msg']->value;?>
</h1>

<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
<hr />
Message:
<pre>
<?php echo $_smarty_tpl->tpl_vars['error']->value['msg'];?>

</pre>
Trace:
Messages:
<pre>
<?php echo $_smarty_tpl->tpl_vars['error']->value['trace'];?>

</pre>
<?php }?><?php }} ?>
