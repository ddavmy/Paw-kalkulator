<?php
/* Smarty version 4.3.1, created on 2023-04-30 23:05:15
  from 'C:\xampp\htdocs\paw\php_01_kalkulator\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_644ed80b36b693_32783517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '947c0d42ef3319b39df83090d8f183d69695119f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\php_01_kalkulator\\templates\\main.html',
      1 => 1682868248,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644ed80b36b693_32783517 (Smarty_Internal_Template $_smarty_tpl) {
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
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59447269644ed80b32e4e0_22663561', 'header');
?>

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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_559187237644ed80b363c73_86393543', 'content');
?>


    </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_635518681644ed80b365041_24848034', 'footer');
?>

    <div id="footer">
        <ul class="copyright" class="sticky">
            <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            <li>Wykonał: Jakub Linnert</li>
        </ul>
    </div>
</div>

</body>
</html><?php }
/* {block 'header'} */
class Block_59447269644ed80b32e4e0_22663561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_59447269644ed80b32e4e0_22663561',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_559187237644ed80b363c73_86393543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_559187237644ed80b363c73_86393543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_635518681644ed80b365041_24848034 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_635518681644ed80b365041_24848034',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
