<?php
/* Smarty version 4.3.1, created on 2023-04-30 18:16:59
  from 'C:\xampp\htdocs\paw\php_01_kalkulator\app\calc\chroniona.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_644e947b27f0c7_55813663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a4d15193b0c506b5660f41034a96f4a91598ac7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\php_01_kalkulator\\app\\calc\\chroniona.html',
      1 => 1682871418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644e947b27f0c7_55813663 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1260653120644e947b278473_47699323', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2035504663644e947b2791d8_91720630', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2112846042644e947b2799e9_38419782', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'header'} */
class Block_1260653120644e947b278473_47699323 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1260653120644e947b278473_47699323',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_2035504663644e947b2791d8_91720630 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_2035504663644e947b2791d8_91720630',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_2112846042644e947b2799e9_38419782 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2112846042644e947b2799e9_38419782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<!-- Wrapper-->
<div id="wrapper">

	<!-- Nav -->
	<nav id="nav">
		<a href="#" class="icon solid fa-home"><span>Home</span></a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" class="icon solid fa-arrow-left"><span>Cofnij</span></a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/login/logout.php" class="icon solid fa-fingerprint"><span>Wyloguj</span></a>
	</nav>

	<!-- Main -->
	<div id="main">


		<!-- Me -->
		<article id="home" class="panel intro">
			<header>
				<h1>Kalkualtor delty</h1>
				<p>Jakub Linnert</p>
				<p>Strona chroniona</p>
				<p>Zalogowano jako: <?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</p>
				
			</header>
			<a href="https://github.com/ddavmy" class="jumplink pic">
				<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/def.jpg" alt="" />
			</a>
		</article>
	</div>
</div>

<!-- Scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>


<?php
}
}
/* {/block 'content'} */
}
