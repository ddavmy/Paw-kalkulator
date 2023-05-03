<?php
/* Smarty version 4.3.1, created on 2023-05-03 20:36:33
  from 'E:\dev\xampp\htdocs\paw\php_01_kalkulator\app\views\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6452a9b195f2b2_39932799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c478002d813c030602dddbab5becb86531cf3de' => 
    array (
      0 => 'E:\\dev\\xampp\\htdocs\\paw\\php_01_kalkulator\\app\\views\\templates\\main.html',
      1 => 1683136921,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6452a9b195f2b2_39932799 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15442836906452a9b1957ab5_45875588', 'header');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8366641016452a9b195e683_25376106', 'content');
?>


    </div>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3198233086452a9b195ed92_97969956', 'footer');
?>

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
class Block_15442836906452a9b1957ab5_45875588 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_15442836906452a9b1957ab5_45875588',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_8366641016452a9b195e683_25376106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8366641016452a9b195e683_25376106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_3198233086452a9b195ed92_97969956 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3198233086452a9b195ed92_97969956',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
