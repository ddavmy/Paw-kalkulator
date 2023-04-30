<?php
/* Smarty version 4.3.1, created on 2023-04-30 18:15:02
  from 'C:\xampp\htdocs\paw\php_01_kalkulator\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_644e94068674e9_58835938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caaa28fa36f1a145a6fd0acc16dcd05c3b16b546' => 
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
function content_644e94068674e9_58835938 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_391644579644e940685a843_76359642', 'header');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_898864891644e9406864676_17112240', 'content');
?>


    </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_586684222644e9406866184_79891123', 'footer');
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
class Block_391644579644e940685a843_76359642 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_391644579644e940685a843_76359642',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_898864891644e9406864676_17112240 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_898864891644e9406864676_17112240',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_586684222644e9406866184_79891123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_586684222644e9406866184_79891123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
