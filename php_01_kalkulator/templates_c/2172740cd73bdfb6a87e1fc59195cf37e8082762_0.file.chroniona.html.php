<?php
/* Smarty version 4.3.1, created on 2023-05-03 19:50:10
  from 'E:\dev\xampp\htdocs\paw\php_01_kalkulator\app\views\chroniona.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64529ed28a00a1_57148127',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2172740cd73bdfb6a87e1fc59195cf37e8082762' => 
    array (
      0 => 'E:\\dev\\xampp\\htdocs\\paw\\php_01_kalkulator\\app\\views\\chroniona.html',
      1 => 1683136124,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scripts.html' => 1,
  ),
),false)) {
function content_64529ed28a00a1_57148127 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43606077964529ed2896570_47244309', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86604350464529ed2896e40_27199597', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95284698564529ed2897455_68095469', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'header'} */
class Block_43606077964529ed2896570_47244309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_43606077964529ed2896570_47244309',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_86604350464529ed2896e40_27199597 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_86604350464529ed2896e40_27199597',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_95284698564529ed2897455_68095469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_95284698564529ed2897455_68095469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Wrapper-->
<div id="wrapper">

	<!-- Nav -->
	<nav id="nav" class="navMenu">
		<a href="#" class="icon solid fa-home"><span>Home</span></a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/" class="icon solid fa-arrow-left"><span>Zwykła</span></a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="icon solid fa-fingerprint"><span>Wyloguj</span></a>
	</nav>

	<!-- Main -->
	<div id="main">


		<!-- Me -->
		<article id="home" class="panel intro">
			<header>
				<h1>Kalkulator delty</h1>
				<h1>Strona chroniona</h1>
				<p>Jakub Linnert</p>
				<p>użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
</p>
				<p>rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</p>
			</header>
			<a href="https://github.com/ddavmy" target="_blank" class="jumplink pic">
				<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/images/def.jpg" alt="" />
			</a>
		</article>

		<?php $_smarty_tpl->_subTemplateRender('file:scripts.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
