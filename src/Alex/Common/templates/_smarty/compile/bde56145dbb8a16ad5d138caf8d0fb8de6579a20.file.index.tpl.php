<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-10 19:08:30
         compiled from "/home/alexgt9/code/common-sifo/src/Common/templates/home/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69460143652d0371eaf21a1-77556226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bde56145dbb8a16ad5d138caf8d0fb8de6579a20' => 
    array (
      0 => '/home/alexgt9/code/common-sifo/src/Common/templates/home/index.tpl',
      1 => 1389283444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69460143652d0371eaf21a1-77556226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modules' => 0,
    'mood' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d0371ec013f4_68500886',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d0371ec013f4_68500886')) {function content_52d0371ec013f4_68500886($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/alexgt9/code/common-sifo/src/../vendor/alexgt9/Smarty-sifo-plugins/block.t.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/alexgt9/code/common-sifo/vendor/smarty/smarty/distribution/libs/plugins/modifier.date_format.php';
?><!DOCTYPE html>
<html lang="en">
<?php echo $_smarty_tpl->tpl_vars['modules']->value['head'];?>

  <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="#">Sifo</a>
          <ul class="nav">
			<li class="active"><a href="">Home</a></li>
			<li><a href="">Section 1</a></li>
			<li><a href="">Section 2</a></li>
			<li><a href="">Section 3</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Hello, world!</h1>
        <p><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['mood']->value)); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['mood']->value), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
This is how i feel... %1<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['mood']->value), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
        <p><a class="btn primary large" href="http://sifo.me">Learn more &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span-one-third">
          <h2>This is a sample home</h2>
          <p>Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
        <div class="span-one-third">
          <h2>Create your instance</h2>
           <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
       </div>
        <div class="span-one-third">
			<h2>See <em>/scripts</em></h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>

      <footer>
        <p>Powered by Sifo, 2009-<?php echo smarty_modifier_date_format(time(),"%Y");?>
</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html><?php }} ?>
