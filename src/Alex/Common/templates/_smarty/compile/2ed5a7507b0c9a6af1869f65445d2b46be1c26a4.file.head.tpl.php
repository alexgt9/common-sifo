<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-09 21:23:27
         compiled from "/home/alexgt9/code/common-sifo/src/Common/templates/shared/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44773035052cf053f5fd449-23319102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ed5a7507b0c9a6af1869f65445d2b46be1c26a4' => 
    array (
      0 => '/home/alexgt9/code/common-sifo/src/Common/templates/shared/head.tpl',
      1 => 1389283444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44773035052cf053f5fd449-23319102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'metadata' => 0,
    'url' => 0,
    'media_module' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52cf053f62e172_86493360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52cf053f62e172_86493360')) {function content_52cf053f62e172_86493360($_smarty_tpl) {?><head>
    <meta charset="utf-8">
    <title><?php echo $_smarty_tpl->tpl_vars['metadata']->value['title'];?>
</title>
	<meta http-equiv="Content-Language" content="<?php echo $_smarty_tpl->tpl_vars['url']->value['lang'];?>
" />
    <meta name="title" content="<?php echo $_smarty_tpl->tpl_vars['metadata']->value['title'];?>
" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metadata']->value['description'];?>
" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['metadata']->value['keywords'];?>
" />

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    
	<style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>
	
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	
	<?php echo $_smarty_tpl->tpl_vars['media_module']->value;?>

  </head>
<?php }} ?>
