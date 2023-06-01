<?php
/* Smarty version 4.3.1, created on 2023-05-29 13:27:05
  from 'E:\dev\xampp\htdocs\paw\php_01_kalkulato\app\views\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64748c09cd2bf2_44093715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98f340fe7343c0e76042f8cf47fb7969e9c9e852' => 
    array (
      0 => 'E:\\dev\\xampp\\htdocs\\paw\\php_01_kalkulato\\app\\views\\templates\\main.html',
      1 => 1685290141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64748c09cd2bf2_44093715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>

<!-- 
	Astral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
     -->

<html lang="pl">
	<head>
		<title>Kalkualtor delty</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=0.5, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

            <!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184924421164748c09ccb761_12512651', 'header');
?>
 -->
            <nav id="nav">
                <div class="splash-container">
                    <div class="splash">
                        <h3 class="splash-head"><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</h3>
                        <p class="splash-subhead"></p>
                    </div>
                </div>
            </nav>

            <div class="content-wrapper">
                <div id="app_content" class="content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187969218464748c09cd1e99_24991748', 'content');
?>

                
                </div>
                
                <!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_160299221164748c09cd2684_23893394', 'footer');
?>
 -->
                <div id="footer">
                    <ul class="copyright" class="sticky">
                        <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                        <li>Wykonał: Jakub Linnert</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</body>
</html><?php }
/* {block 'header'} */
class Block_184924421164748c09ccb761_12512651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_184924421164748c09ccb761_12512651',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_187969218464748c09cd1e99_24991748 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_187969218464748c09cd1e99_24991748',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_160299221164748c09cd2684_23893394 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_160299221164748c09cd2684_23893394',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
