<?php /* Smarty version Smarty-3.1-DEV, created on 2014-01-10 19:11:48
         compiled from "/home/alexgt9/code/common-sifo/src/Common/templates/debug/debug.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168347443252d037e4ac7113-24121961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a52f598e217cd319c957e75f81dffee0d2665b34' => 
    array (
      0 => '/home/alexgt9/code/common-sifo/src/Common/templates/debug/debug.tpl',
      1 => 1389283444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168347443252d037e4ac7113-24121961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'command_line_mode' => 0,
    'show_timers' => 0,
    'debug' => 0,
    'trace' => 0,
    'debug_modules' => 0,
    'post_key' => 0,
    'value' => 0,
    'execution_key' => 0,
    'session_key' => 0,
    'cookies_key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_52d037e50f4a27_46286489',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d037e50f4a27_46286489')) {function content_52d037e50f4a27_46286489($_smarty_tpl) {?><?php if (!is_callable('smarty_block_t')) include '/home/alexgt9/code/common-sifo/src/../vendor/alexgt9/Smarty-sifo-plugins/block.t.php';
if (!is_callable('smarty_modifier_time_format')) include '/home/alexgt9/code/common-sifo/src/../vendor/alexgt9/Smarty-sifo-plugins/modifier.time_format.php';
if (!is_callable('smarty_function_math')) include '/home/alexgt9/code/common-sifo/vendor/smarty/smarty/distribution/libs/plugins/function.math.php';
if (!is_callable('smarty_modifier_debug_print_var')) include '/home/alexgt9/code/common-sifo/vendor/smarty/smarty/distribution/libs/plugins/modifier.debug_print_var.php';
?><?php if (isset($_smarty_tpl->tpl_vars['command_line_mode']->value)&&$_smarty_tpl->tpl_vars['command_line_mode']->value) {?><body><?php }?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_timers']->value)===null||$tmp==='' ? true : $tmp)) {?>

<style type="text/css">
pre.debug, .xdebug-error, .xe-notice{ z-index: 10000; font-family: 'courier new' monospaced; border: 1px solid #CCC; padding: 9px; background: #EFEFEF; position: relative; margin: 1px;}

/* @group DEBUG reset */
#debug {
	text-align:left;
	border-top:1px solid #ccc;
	padding:18px;
	font-size:12px;
	line-height:18px;
	font-size:12px;
	font-family:Arial, sans-serif;
	background:#fff;
	color:#333;
}

#debug a {
	color:#2E79D0;
}

#debug h1, #debug h2, #debug h3, #debug h4  {
	font-family:Arial, sans-serif;
	color:#444;
	display: block;
	position:relative;
	top:auto;
}

#debug h1 a, #debug h2 a, #debug h3 a, #debug h4 a {
	color:#fff;
	text-decoration: none;
}

#debug h1 a { color:#333; }

#debug h1 a:after, #debug h2 a:after, #debug h3 a:after, #debug h4 a:after {
	content:" »";
}

#debug h1 {
	font-size: 30px;
	line-height: 36px;
	margin-top: 18px;
}

#debug h2 {
    font-size: 24px;
    line-height: 36px;
    margin-top: 18px;
}

#debug h3 {
	font-size: 18px;
	line-height: 18px;
	margin-bottom: 18px;
    background:#555;
    color:#fff;
    padding:9px;
    margin:0;
    border-bottom:1px solid #333;
}

#debug h4 {
	background-color:#A69600;
	font-size:15px;
	padding:10px;
	border-bottom:1px solid #333;
}

#debug li {
	margin-left:18px;
	list-style-type:disc;
}
/* @endgroup DEBUG reset */

#debug div.debug_contents {
	background:#efefef;
	padding:9px;
	display:none;
	overflow: auto;
}

#debug div.visible {
	display:block;
}

#debug div.debug_contents table {
	margin:9px 0;
}

#debug div.debug_contents table th, #debug div.debug_contents table td {
	border:1px solid #ccc;
	padding:3px;
	font-family:monospace;
}

#debug div.debug_contents table th {
	font-weight:bold;
	background:#ddd;
	cursor:default;
}

#debug .queries small {
	font-size:12px;
	font-weight: normal;
}

#debug .query_read {
	background-color: green;
}

#debug .query_write {
	background-color: darkblue;
}

#debug .query_error {
	background-color: red;
}

#debug .query_duplicated {
	background-color: orange;
}

#debug .query_slow small, #debug .query_very_slow small,
#debug .slow {
	background:#eadaaf;
	color:red;
	padding:3px;
	font-weight: bold;
}

#debug .query_slow small:after {
	content:" --> Alert: Slow Query";
}

#debug .query_very_slow small:after {
	content:" --> Alert: VERY Slow Query";
}

#debug .query_very_slow small {
	background:red;
	color:#fff;
}

#debug .array strong {
	color: blue;
}

/* @group TIMER */
#debug_timers {
	position:fixed;
	top:0;
	right:0;
	background:#fff;
	border:1px solid #ccc;
	border-width:1px 1px 0;
	width:150px;
	cursor:move;
	z-index:10000;
}
#debug_timers dl {
	padding:0;
	margin:0;
}
#debug_timers dt, #debug_timers dd {
	margin:0;
	padding:2px;
	position:relative;
	border-bottom:1px solid #ccc;
	text-align:center;
}
#debug_timers dt {
	font-weight:bold;
	background:#efefef;
	text-align:left;
}
#debug_timers dt small,#debug_timers dd small  {
	font-weight:normal;
	font-size:10px
}
#debug_timers a.slide {
	position:absolute;
	right:3px;
	top:3px;
	width:17px;
	height:17px;
	text-align:center;
	text-decoration:none;
	background:#ccc;
}
#debug_timers dd span {
	display:block;
	float:right;
	margin-top:-10px;
	background:#ccc;
	margin:-2px;
	padding:2px;
	font-size:10px;
}

#debug_timers a {
	color: #2E79D0;
}

#debug_timers .ajax_calls { display:none; }
/* @endgroup TIMER */

#debug .benchmark_contents { float: left; width: 70% }
#debug .benchmarks_legend { float:right; width:29% }
.rebuild_all_active {
	font-weight:bold;
	color:#FF0000;
}

#debug .actions_options li{
	text-align: left;
	list-style-type: none;
}
</style>
<script type="text/javascript">
function waitingForScript(url, obj) {
	// doesn't work in Opera
	var callback = arguments.callee.caller;
	var args = arguments.callee.caller.arguments;
	var s, ok, timer, doc = document;

	// if the object/function doesn't exist and we've not tried to load it
	// then pull it in and fire the calling function once complete
	if ((typeof window[obj] == 'undefined') && !window['loading' + obj]) {
		window['loading' + obj] = true;

		if (!doc.getElementById('_' + obj)) {
			s = doc.createElement('script');
			s.src = url;
			s.id = '_' + obj;
			doc.body.appendChild(s);
		}

		timer = setInterval(function () {
			ok = false;
			try {
				ok = (typeof window[obj] != 'undefined');
			} catch (e) {}

			if (ok) {
				clearInterval(timer);
				callback.apply(this);
			}
		}, 10);

		// we're loading in the script now, so we're currently waiting
		return true;
	} else if (typeof window[obj] == 'undefined') {
		// object not defined yet, so we're still waiting
		return true;
	} else {
		// it's already loaded
		return false;
	}
}

function LoadjQueryUI()
{
	var domain_parts = document.domain.split('.');
	var cookie_domain = document.domain.replace( domain_parts[0], '');

	if ( typeof jQuery != 'function' && waitingForScript( (("https:" == document.location.protocol) ? "https" : "http") + '://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js', 'jQuery')  ) return

	$(document).ready( function(){

		if (parseFloat(jQuery.fn.jquery) >= 1.8) {
			$.getScript('http://code.jquery.com/jquery-migrate-1.0.0.js' ).done( debugBehaviours );
		} else {
			debugBehaviours();
		}


		function debugBehaviours() {

				// If cookie plugin is not loaded, we declare it
			if ( typeof jQuery.cookie != 'function' )
			{
				jQuery.cookie=function(name,value,options){if(typeof value!='undefined'){options=options||{};if(value===null){value='';options.expires=-1;}var expires='';if(options.expires&&(typeof options.expires=='number'||options.expires.toUTCString)){var date;if(typeof options.expires=='number'){date=new Date();date.setTime(date.getTime()+(options.expires*24*60*60*1000));}else{date=options.expires;}expires='; expires='+date.toUTCString();}var path=options.path?'; path='+(options.path):'';var domain=options.domain?'; domain='+(options.domain):'';var secure=options.secure?'; secure':'';document.cookie=[name,'=',encodeURIComponent(value),expires,path,domain,secure].join('');}else{var cookieValue=null;if(document.cookie&&document.cookie!=''){var cookies=document.cookie.split(';');for(var i=0;i<cookies.length;i++){var cookie=jQuery.trim(cookies[i]);if(cookie.substring(0,name.length+1)==(name+'=')){cookieValue=decodeURIComponent(cookie.substring(name.length+1));break;}}}return cookieValue;}};
			}

			(function($) {
					$.fn.drags = function(opt) {

						opt = $.extend({handle:"",cursor:"move"}, opt);

						if(opt.handle === "") {
							var $el = this;
						} else {
							var $el = this.find(opt.handle);
						}

						return $el.css('cursor', opt.cursor).bind("mousedown", function(e) {
							if(opt.handle === "") {
								var $drag = $(this).addClass('draggable');
							} else {
								var $drag = $(this).addClass('active-handle').parent().addClass('draggable');
							}
							var z_idx = $drag.css('z-index'),
									drg_h = $drag.outerHeight(),
									drg_w = $drag.outerWidth(),
									pos_y = $drag.offset().top + drg_h - e.pageY,
									pos_x = $drag.offset().left + drg_w - e.pageX;
							$drag.css('z-index', 1000).parents().bind("mousemove", function(e) {
								$('.draggable').offset({
									top:e.pageY + pos_y - drg_h,
									left:e.pageX + pos_x - drg_w
								}).bind("mouseup", function() {
											$(this).removeClass('draggable').css('z-index', z_idx);
										});
							});
							e.preventDefault(); // disable selection
						}).bind("mouseup", function() {
									if(opt.handle === "") {
										$(this).removeClass('draggable');
									} else {
										$(this).removeClass('active-handle').parent().removeClass('draggable');
									}
									$.cookie("DEBUG_timer_style", $('#debug_timers').attr('style'),{ expires:7, domain: cookie_domain });
								});

					}
				})(jQuery);

			$('#debug_timers').drags();

			$('#debug_timers a.slide').click( function() {
				if ( $('#debug_timers dd:last').is(':visible') )
				{
					$.cookie('DEBUG_hide_time', 'true', { expires:7, domain: cookie_domain } );
					$('#debug_timers dd:gt(0),#debug_timers dt:gt(0)').slideUp();
					$(this).html('&darr;');
				}
				else
				{
					$.cookie('DEBUG_hide_time', 'false', { expires:7, domain: cookie_domain } );
					$('#debug_timers dd:gt(0),#debug_timers dt:gt(0)').slideDown();
					$(this).html('&uarr;');
				}
				return false;
			});

			$('#debug a.debug_toggle_view,#ajax_debug a.debug_toggle_view').unbind('click').live( 'click', function() {
				dest_el = $(this).attr('rel');
				if ( $('#'+dest_el).is(':visible') )
					$('#'+dest_el).slideUp();
				else
					$('#'+dest_el).slideDown();
				return false;
			});

			if ( 'true' == $.cookie( 'DEBUG_hide_time' ) )
			{
				$('#debug_timers dd:gt(0),#debug_timers dt:gt(0)').hide();
			}
			if (sStyle = $.cookie("DEBUG_timer_style")){
				$('#debug_timers').attr('style', sStyle);
       		}

		

		<?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_timers']->value)===null||$tmp==='' ? true : $tmp)) {?>

		
			var num_ajax_calls 	= 0;
			var total_time 		= 0;
			$('#debug').ajaxComplete(function( e, xhr, settings )
			{
				try
				{
					var response = jQuery.parseJSON( xhr.responseText );

					if ( typeof response.debug_content != 'undefined' )
					{
						$('#debug_timers .ajax_calls').show();
						if ( num_ajax_calls % 2 == 0)
		                {
		                    response.debug_content = response.debug_content.replace( '<div id="debug">', '<div id="debug" style="background-color: rgba(239, 239, 239, 0.84);">')
		                }
						$("#ajax_debug").append( '<h1 class="ajax_title"><a class="debug_toggle_view" rel="ajax_debug_' + num_ajax_calls + '" href="#">' + ( num_ajax_calls + 1 ) + '.- AJAX call: ' + settings.url + '</a></h1>' );
						$("#ajax_debug").append( '<div id="ajax_debug_' + num_ajax_calls + '">' + response.debug_content + '</div>' );

						num_ajax_calls++;
		                $("#debug_timers dt.ajax_calls .num_calls" ).html( num_ajax_calls );

						// Timing.
						total_time = total_time + parseFloat( response.debug_total_time );

						// Format timing:
						var time = total_time * 1000;

						if ( time < 100 )
						{
							// Miliseconds.
							$formatted_time = time.toFixed(2)  + ' milisec';
						}
						else
						{
							// Seconds.
							time = time / 1000;
							$formatted_time = time.toFixed(2)  + ' sec';
						}

						$("#debug_timers dd.ajax_calls").html( $formatted_time + ' <small>(<a href="#ajax_debug_' + ( num_ajax_calls - 1 ) + '">Go to last one</a>)</small>' );
		            }
		        }
				catch( e )
				{
					// Do nothing. Only supported for JSON responses.
				}
			});
		
		<?php }?>
		
		};
	});
}

LoadjQueryUI();

<?php }?>
</script>

<div id="debug">
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['show_timers']->value)===null||$tmp==='' ? true : $tmp)) {?>
	<div id="debug_timers">
		<dl>
			<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Total time<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<a class="slide" href="#">&uarr;</a></dt>
			<dd><?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['debug']->value['times']['total']);?>
</dd>
<?php if ($_smarty_tpl->tpl_vars['debug']->value['times']['scripts']) {?>
			<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Scripts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
			<dd><span><?php if (isset($_smarty_tpl->tpl_vars['debug']->value['times']['total'])&&$_smarty_tpl->tpl_vars['debug']->value['times']['total']>0) {?><?php echo smarty_function_math(array('equation'=>"y / x * 100",'x'=>$_smarty_tpl->tpl_vars['debug']->value['times']['total'],'y'=>$_smarty_tpl->tpl_vars['debug']->value['times']['scripts'],'format'=>"%.0f"),$_smarty_tpl);?>
%<?php }?></span><?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['debug']->value['times']['scripts']);?>
</dd>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['debug']->value['times']['db_connections']) {?>
			<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
DB connects<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <small>(<?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['db_connections'])); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['db_connections']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 connects<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['db_connections']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
)</small></dt>
			<dd><span><?php if (isset($_smarty_tpl->tpl_vars['debug']->value['times']['total'])&&$_smarty_tpl->tpl_vars['debug']->value['times']['total']>0) {?><?php echo smarty_function_math(array('equation'=>"y / x * 100",'x'=>$_smarty_tpl->tpl_vars['debug']->value['times']['total'],'y'=>$_smarty_tpl->tpl_vars['debug']->value['times']['db_connections'],'format'=>"%.0f"),$_smarty_tpl);?>
%<?php }?></span><?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['debug']->value['times']['db_connections']);?>
</dd>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['debug']->value['times']['db_queries']) {?>
			<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
DB queries<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <small>(<a href="#db_queries"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['db_queries'])); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['db_queries']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 sql<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['db_queries']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>)</small></dt>
			<dd><span><?php if (isset($_smarty_tpl->tpl_vars['debug']->value['times']['total'])&&$_smarty_tpl->tpl_vars['debug']->value['times']['total']>0) {?><?php echo smarty_function_math(array('equation'=>"y / x * 100",'x'=>$_smarty_tpl->tpl_vars['debug']->value['times']['total'],'y'=>$_smarty_tpl->tpl_vars['debug']->value['times']['db_queries'],'format'=>"%.0f"),$_smarty_tpl);?>
%<?php }?></span><?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['debug']->value['times']['db_queries']);?>
</dd>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['debug']->value['queries_errors']) {?>
			<dt class="query_error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
DB errors<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
			<dd class="query_error"><strong><?php echo count($_smarty_tpl->tpl_vars['debug']->value['queries_errors']);?>
</strong></dd>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['debug']->value['queries_duplicated']) {?>
			<dt class="query_duplicated"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Duplicated Queries<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
			<dd class="query_duplicated"><strong><?php echo count($_smarty_tpl->tpl_vars['debug']->value['queries_duplicated']);?>
</strong></dd>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['debug']->value['smarty_errors']) {?>
			<dt class="query_duplicated"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Smarty errors<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
			<dd class="query_duplicated"><strong><?php echo count($_smarty_tpl->tpl_vars['debug']->value['smarty_errors']);?>
</strong></dd>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['debug']->value['times']['search']) {?>
			<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Searches<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <small>(<a href="#search_queries"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['search'])); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['search']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 searches<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['search']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>)</small></dt>
			<dd><span><?php echo smarty_function_math(array('equation'=>"y / x * 100",'x'=>$_smarty_tpl->tpl_vars['debug']->value['times']['total'],'y'=>$_smarty_tpl->tpl_vars['debug']->value['times']['search'],'format'=>"%.0f"),$_smarty_tpl);?>
%</span><?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['debug']->value['times']['search']);?>
</dd>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['debug']->value['times']['sphinxql']) {?>
			<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SphinxQL<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <small>(<a href="#search_queries"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['sphinxql'])); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['sphinxql']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 searches<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['sphinxql']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>)</small></dt>
			<dd><span><?php echo smarty_function_math(array('equation'=>"y / x * 100",'x'=>$_smarty_tpl->tpl_vars['debug']->value['times']['total'],'y'=>$_smarty_tpl->tpl_vars['debug']->value['times']['sphinxql'],'format'=>"%.0f"),$_smarty_tpl);?>
%</span><?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['debug']->value['times']['sphinxql']);?>
</dd>
<?php }?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['debug']->value['sphinxql_errors'])===null||$tmp==='' ? false : $tmp)) {?>
			<dt class="query_error"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
SphinxQL errors<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
			<dd class="query_error"><strong><?php echo count($_smarty_tpl->tpl_vars['debug']->value['sphinxql_errors']);?>
</strong></dd>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['debug']->value['times']['cache']) {?>
			<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cache<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <small>(<a href="#controllers"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['cache'])); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['cache']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 blocks<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['cache']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>)</small></dt>
			<dd><span><?php echo smarty_function_math(array('equation'=>"y / x * 100",'x'=>$_smarty_tpl->tpl_vars['debug']->value['times']['total'],'y'=>$_smarty_tpl->tpl_vars['debug']->value['times']['cache'],'format'=>"%.0f"),$_smarty_tpl);?>
%</span><?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['debug']->value['times']['cache']);?>
</dd>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['debug']->value['times']['external']) {?>
			<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
External requests<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <small>(<a href="#external"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['external'])); $_block_repeat=true; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['external']), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
%1 calls<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(1=>$_smarty_tpl->tpl_vars['debug']->value['elements']['external']), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>)</small></dt>
			<dd><span><?php echo smarty_function_math(array('equation'=>"y / x * 100",'x'=>$_smarty_tpl->tpl_vars['debug']->value['times']['total'],'y'=>$_smarty_tpl->tpl_vars['debug']->value['times']['external'],'format'=>"%.0f"),$_smarty_tpl);?>
%</span><?php echo smarty_modifier_time_format($_smarty_tpl->tpl_vars['debug']->value['times']['external']);?>
</dd>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['debug']->value['memory_usage']!='0 bytes') {?>
			<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Used memory<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
			<dd><?php echo $_smarty_tpl->tpl_vars['debug']->value['memory_usage'];?>
</dd>
<?php }?>
			<dt class="ajax_calls"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
AJAX<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <small>(<a href="#ajax_debug"><span class="num_calls"></span> calls</a>)</small></dt>
			<dd class="ajax_calls">0</dd>
<?php if (!isset($_smarty_tpl->tpl_vars['command_line_mode']->value)||!$_smarty_tpl->tpl_vars['command_line_mode']->value) {?>
			<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Automatic rebuild<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
<?php if ($_smarty_tpl->tpl_vars['debug']->value['rebuild_all']) {?>
			<dd><input type="checkbox" name="rebuild_all" id="rebuild_all_active" checked onclick="window.location='?rebuild_nothing=1'">
				<label for="rebuild_all_active" class="rebuild_all_active">Active</label></dd>
<?php } else { ?>
			<dd><input type="checkbox" name="rebuild_all" id="rebuild_all_inactive" onclick="window.location='?rebuild_all=1'">
				<label for="rebuild_all_inactive">Inactive</label></dd>
<?php }?>
			<dt><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
ACTIONS<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</dt>
			<dd>
				<ol class="actions_options">
					<li>
						<a href="?kill_session=1"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kill session<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					</li>
					<li>
						<a href="?rebuild=1"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Rebuild<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					</li>
					<li>
						<a href="#debug"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Debug<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
&raquo;</a>
					</li>
					<li>
						<a href="?rebuild=1&clean_compile=1"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Clean compile<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
					</li>

				</ol>


			</dd>
<?php }?>
		</dl>
	</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['debug']->value['traces'])&&is_array($_smarty_tpl->tpl_vars['debug']->value['traces'])) {?>
	<h3 id="sess_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['session']['index'];?>
"><a class="debug_toggle_view" rel="traces_content" href="#"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Show traces<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a><h3 id="sess_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['session']['index'];?>
">
	<div id="traces_content" class="debug_contents">
	<ul>
<?php  $_smarty_tpl->tpl_vars['trace'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['trace']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['traces']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['trace']->key => $_smarty_tpl->tpl_vars['trace']->value) {
$_smarty_tpl->tpl_vars['trace']->_loop = true;
?>
		<li>
<?php if (is_array($_smarty_tpl->tpl_vars['trace']->value)) {?>
<?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['trace']->value);?>

<?php } else { ?>
"<?php echo $_smarty_tpl->tpl_vars['trace']->value;?>
"
<?php }?>
		</li>
<?php } ?>
	</ul>
	</div>
<?php }?>


<?php echo $_smarty_tpl->tpl_vars['debug_modules']->value['headers'];?>



<?php echo $_smarty_tpl->tpl_vars['debug_modules']->value['smarty_errors'];?>



<?php echo $_smarty_tpl->tpl_vars['debug_modules']->value['basic_debug'];?>



<?php echo $_smarty_tpl->tpl_vars['debug_modules']->value['sphinxql'];?>



<?php echo $_smarty_tpl->tpl_vars['debug_modules']->value['search'];?>



<?php echo $_smarty_tpl->tpl_vars['debug_modules']->value['database'];?>



<?php echo $_smarty_tpl->tpl_vars['debug_modules']->value['redis'];?>



<?php echo $_smarty_tpl->tpl_vars['debug_modules']->value['log_messages'];?>



<?php if (is_array($_smarty_tpl->tpl_vars['debug']->value['post'])&&!empty($_smarty_tpl->tpl_vars['debug']->value['post'])) {?>
	<h2 id="post"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Post<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['post_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['post']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['post']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['post_key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['post']['index']++;
?>
	<h3 id="post_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['session']['index'];?>
"><a class="debug_toggle_view" rel="post_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['post']['index'];?>
" href="#"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['post']['index']+1;?>
. <?php echo $_smarty_tpl->tpl_vars['post_key']->value;?>
</a></h3>
	<div id="post_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['post']['index'];?>
" class="debug_contents">
		<pre>
<?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['value']->value);?>

		</pre>
	</div>
<?php } ?>
<?php }?>



<?php if (is_array($_smarty_tpl->tpl_vars['debug']->value['session'])) {?>
	<h2 id="session"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Session<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['session_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['session']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['session']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['session_key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['session']['index']++;
?>
	<h3 id="sess_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['session']['index'];?>
"><a class="debug_toggle_view" rel="sess_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['session']['index'];?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" href="#"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['session']['index']+1;?>
. <?php echo $_smarty_tpl->tpl_vars['session_key']->value;?>
</a></h3>
	<div id="sess_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['session']['index'];?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" class="debug_contents">
		<pre>
<?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['value']->value);?>

		</pre>
	</div>
<?php } ?>
<?php }?>

<?php if (is_array($_smarty_tpl->tpl_vars['debug']->value['cookies'])) {?>
	<h2 id="cookies"><?php $_smarty_tpl->smarty->_tag_stack[] = array('t', array()); $_block_repeat=true; echo smarty_block_t(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Cookies<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_t(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h2>
<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['cookies_key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['debug']->value['cookies']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cookies']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['cookies_key']->value = $_smarty_tpl->tpl_vars['value']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['cookies']['index']++;
?>
	<h3 id="cook_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['cookies']['index'];?>
"><a class="debug_toggle_view" rel="cook_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['cookies']['index'];?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" href="#"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['cookies']['index']+1;?>
. <?php echo $_smarty_tpl->tpl_vars['cookies_key']->value;?>
</a></h3>
	<div id="cook_content_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['cookies']['index'];?>
<?php echo $_smarty_tpl->tpl_vars['execution_key']->value;?>
" class="debug_contents">
		<pre>
<?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['value']->value);?>

		</pre>
	</div>
<?php } ?>
<?php }?>

    <div id="ajax_debug"></div>

</div>


<?php if (isset($_smarty_tpl->tpl_vars['command_line_mode']->value)&&$_smarty_tpl->tpl_vars['command_line_mode']->value) {?></body><?php }?><?php }} ?>
