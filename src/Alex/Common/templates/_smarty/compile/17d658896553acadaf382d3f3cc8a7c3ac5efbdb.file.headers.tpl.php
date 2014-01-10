<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-10 19:11:47
         compiled from "/home/alexgt9/code/common-sifo/src/Common/templates/debug/headers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19083627952d037e3d096a6-58477770%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17d658896553acadaf382d3f3cc8a7c3ac5efbdb' => 
    array (
      0 => '/home/alexgt9/code/common-sifo/src/Common/templates/debug/headers.tpl',
      1 => 1389283444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19083627952d037e3d096a6-58477770',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'debug' => 0,
    'headers_block' => 0,
    'execution_key' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d037e3dca1e6_39414273',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d037e3dca1e6_39414273')) {function content_52d037e3dca1e6_39414273($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/alexgt9/code/common-sifo/src/../vendor/alexgt9/Smarty-sifo-plugins/block.t.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['debug']->value['headers'])) {?>
<h2 id="debug_headers"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Headers<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
    <?php  $_smarty_tpl->tpl_vars['headers_block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['headers_block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['headers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['headers_block']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['headers_block']->key => $_smarty_tpl->tpl_vars['headers_block']->value) {
$_smarty_tpl->tpl_vars['headers_block']->_loop = true;
 $_smarty_tpl->tpl_vars['headers_block']->iteration++;
?>
    <?php if (!empty($_smarty_tpl->tpl_vars['headers_block']->value)) {?>
    <h3 id="headers_<?php echo $_smarty_tpl->tpl_vars['headers_block']->iteration;?>
">
        <a class="debug_toggle_view" rel="headers_content_<?php echo $_smarty_tpl->tpl_vars['headers_block']->iteration;?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" href="#">
            Headers::send()
        </a>
    </h3>
    <div id="headers_content_<?php echo $_smarty_tpl->tpl_vars['headers_block']->iteration;?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" class="debug_contents">
    <table>
        <thead>
            <tr>
                <th>Header content</th>
                <th>Replace*</th>
            </tr>
        </thead>
        <tbody>
        <?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['headers_block']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['block']->value['content'];?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['block']->value['replace']) {?>Yes<?php } else { ?><span class="slow">No</span> <?php }?></td>
                </tr>
        <?php } ?>
        </tbody>
    </table>
        * When replace is set, the header overwrites any previous header of the same type.
    </div>
    <?php }?>
    <?php } ?>


<?php }?><?php }} ?>
