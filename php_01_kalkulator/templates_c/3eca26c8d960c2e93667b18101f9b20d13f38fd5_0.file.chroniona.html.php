<?php
/* Smarty version 4.3.1, created on 2023-04-17 16:17:11
  from 'E:\dev\xampp\htdocs\paw\szablon\app\chroniona.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643d54e733b315_35795864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eca26c8d960c2e93667b18101f9b20d13f38fd5' => 
    array (
      0 => 'E:\\dev\\xampp\\htdocs\\paw\\szablon\\app\\chroniona.html',
      1 => 1681740460,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d54e733b315_35795864 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1676695841643d54e733a159_64015527', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_532048876643d54e733abe0_33053695', 'contenta');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_1676695841643d54e733a159_64015527 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1676695841643d54e733a159_64015527',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'contenta'} */
class Block_532048876643d54e733abe0_33053695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenta' => 
  array (
    0 => 'Block_532048876643d54e733abe0_33053695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div style="width:90%; margin: 2em auto;">
	<a href="/app/calc.php" class="pure-button">Powrót do kalkulatora</a>
	<a href="/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>

<div style="color: white; width:90%; margin: 2em auto; background-color: black;">
	<p>To jest inna chroniona strona aplikacji internetowej</p>
</div>

<?php
}
}
/* {/block 'contenta'} */
}
