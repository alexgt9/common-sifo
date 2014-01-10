<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-10 19:11:48
         compiled from "/home/alexgt9/code/common-sifo/src/Common/templates/debug/redis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:213620824252d037e4873825-40890080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac67e2d179e7ec5d3f89a2092ca6481b5586d871' => 
    array (
      0 => '/home/alexgt9/code/common-sifo/src/Common/templates/debug/redis.tpl',
      1 => 1389283444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213620824252d037e4873825-40890080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'debug' => 0,
    'execution_key' => 0,
    'value' => 0,
    'k' => 0,
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d037e49aa5d8_75097077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d037e49aa5d8_75097077')) {function content_52d037e49aa5d8_75097077($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/alexgt9/code/common-sifo/src/../vendor/alexgt9/Smarty-sifo-plugins/block.t.php';
if (!is_callable('smarty_modifier_debug_print_var')) include '/home/alexgt9/code/common-sifo/vendor/smarty/smarty/distribution/libs/plugins/modifier.debug_print_var.php';
?><?php if (is_array($_smarty_tpl->tpl_vars['debug']->value['redis'])) {?>
<h1 id="redis_callstack"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Redis callstack<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h1>
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['redis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['call']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['call']['index']++;
?>
	<h3 class="queries query_read" id="redis_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['call']['index'];?>
"><a class="debug_toggle_view" rel="redis_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['call']['index'];?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" href="#"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['call']['index']+1;?>
. <?php echo $_smarty_tpl->tpl_vars['value']->value['method'];?>
</a> <small>(<?php echo $_smarty_tpl->tpl_vars['value']->value['connection']['database'];?>
@<?php echo $_smarty_tpl->tpl_vars['value']->value['connection']['host'];?>
:<?php echo $_smarty_tpl->tpl_vars['value']->value['connection']['port'];?>
 - return: <?php echo count($_smarty_tpl->tpl_vars['value']->value['results']);?>
 elements )</small></h3>
	<div id="redis_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['call']['index'];?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" class="debug_contents">
		<table>
			<tr>
				<th>Host</th>
				<th>Port</th>
				<th>Database</th>
				<th>Arguments</th>
				<th>Results</th>
				<th>Trace</th>
			</tr>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['connection']['host'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['connection']['port'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['connection']['database'];?>
</td>
				<td>
					<?php if (!empty($_smarty_tpl->tpl_vars['value']->value['args'])) {?>
					<strong>Array</strong>
					<?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['args']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['arr']->key;
?>
					<ul>
						<li><strong><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</strong>: <?php if (is_array($_smarty_tpl->tpl_vars['arr']->value)) {?><pre><?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['arr']->value);?>
</pre><?php } else { ?><code><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['arr']->value, ENT_QUOTES, 'UTF-8', true);?>
</code><?php }?></li>
					</ul>
					<?php } ?>
					<?php } else { ?>
					None
					<?php }?>
				</td>
				<td>
					<?php if (is_array($_smarty_tpl->tpl_vars['value']->value['results'])) {?>
					<strong>Array</strong>
					<?php  $_smarty_tpl->tpl_vars['arr'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['arr']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['results']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['arr']->key => $_smarty_tpl->tpl_vars['arr']->value) {
$_smarty_tpl->tpl_vars['arr']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['arr']->key;
?>
						<ul>
							<li><strong><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</strong>: <?php if (is_array($_smarty_tpl->tpl_vars['arr']->value)) {?><pre><?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['arr']->value);?>
</pre><?php } else { ?><code><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['arr']->value, ENT_QUOTES, 'UTF-8', true);?>
</code><?php }?></li>
						</ul>
					<?php } ?>
					<?php } else { ?>
					<?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['value']->value['results']);?>

					<?php }?>
				</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value['controller'];?>
</td>
			</tr>
		</table>
	</div>
	<?php } ?>
<?php }?><?php }} ?>
