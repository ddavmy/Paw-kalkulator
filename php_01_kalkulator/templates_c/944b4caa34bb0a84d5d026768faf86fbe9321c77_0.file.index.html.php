<?php
/* Smarty version 4.3.1, created on 2023-05-03 21:28:53
  from 'E:\dev\xampp\htdocs\paw\php_01_kalkulator\app\views\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6452b5f5b7de00_04992762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '944b4caa34bb0a84d5d026768faf86fbe9321c77' => 
    array (
      0 => 'E:\\dev\\xampp\\htdocs\\paw\\php_01_kalkulator\\app\\views\\index.html',
      1 => 1683142128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.html' => 1,
    'file:scripts.html' => 1,
  ),
),false)) {
function content_6452b5f5b7de00_04992762 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9988456446452b5f5b666d2_77303416', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3021225336452b5f5b66fd5_69529827', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13400651466452b5f5b676a5_11698854', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'header'} */
class Block_9988456446452b5f5b666d2_77303416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_9988456446452b5f5b666d2_77303416',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_3021225336452b5f5b66fd5_69529827 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3021225336452b5f5b66fd5_69529827',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_13400651466452b5f5b676a5_11698854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13400651466452b5f5b676a5_11698854',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<!-- Wrapper-->
<div id="wrapper">

	<!-- Nav -->
	<nav id="nav" class="navMenu">
		<a href="#" class="icon solid fa-home"><span>Home</span></a>
		<a href="#calculate" class="icon solid fa-envelope"><span>Calculator</span></a>
		<?php if ($_smarty_tpl->tpl_vars['user']->value->role == 'admin') {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
chronionaView" class="icon solid fa-user-secret"><span>Chroniona</span></a>
		<?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="icon solid fa-fingerprint"><span>Wyloguj</span></a>
	</nav>

	<!-- Main -->
	<div id="main">


		<!-- Me -->
		<article id="home" class="panel intro">
			<header>
				<h1>Kalkulator delty</h1>
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

		<!-- Contact -->
		<article id="calculate" class="panel">
			<header>
				<h2>Twoja Delta~</h2>
			</header>
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute#calculate" method="post">
				<div>
					<div class="col">
						<div class="col-6 col-12-medium">
							<input type="text" name="a" autocomplete="off" placeholder="Podaj a" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->a;?>
"/>
						</div>
						<div class="col-6 col-12-medium">
							<input type="text" name="b" autocomplete="off" placeholder="Podaj b" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->b;?>
"/>
						</div>
						<div class="col-12">
							<input type="text" name="c" autocomplete="off" placeholder="Podaj c" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->c;?>
"/>
						</div>
						<div class="col-6">
							<input type="submit" value="Oblicz mnie! :3" />
							<?php if ($_smarty_tpl->tpl_vars['user']->value->role == 'admin') {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
#calculate"><input class="button" type="button" value="Reset x_x"/></a>
							<?php }?>
						</div>
					</div>
				</div>
			</form>
			<div>
				<?php $_smarty_tpl->_subTemplateRender('file:messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isWynik()) {?>
				<h3>Wynik:</h3>
				<div>
					<ol class="wyn">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getWyniki(), 'wyn');
$_smarty_tpl->tpl_vars['wyn']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wyn']->value) {
$_smarty_tpl->tpl_vars['wyn']->do_else = false;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['wyn']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ol>
				</div>
				<?php }?>

			</div>
		</article>
		
		<?php $_smarty_tpl->_subTemplateRender('file:scripts.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
