<?php
/* Smarty version 4.3.1, created on 2023-04-30 18:13:09
  from 'C:\xampp\htdocs\paw\php_01_kalkulator\app\calc\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_644e9395367171_87380008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29987cf603f56f2056c864ecb316321c4f9eec49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\php_01_kalkulator\\app\\calc\\index.html',
      1 => 1682871186,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644e9395367171_87380008 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_263362554644e939534a197_88412005', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88304885644e939534bd02_64451445', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_443833956644e939534df17_36040662', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'header'} */
class Block_263362554644e939534a197_88412005 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_263362554644e939534a197_88412005',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_88304885644e939534bd02_64451445 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_88304885644e939534bd02_64451445',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_443833956644e939534df17_36040662 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_443833956644e939534df17_36040662',
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
		<?php if ($_smarty_tpl->tpl_vars['role']->value == 'admin') {?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc/secure.php" class="icon solid fa-user-secret"><span>Chroniona</span></a>
		<?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/login/logout.php" class="icon solid fa-fingerprint"><span>Wyloguj</span></a>
	</nav>

	<!-- Main -->
	<div id="main">


		<!-- Me -->
		<article id="home" class="panel intro">
			<header>
				<h1>Kalkulator delty</h1>
				<p>Jakub Linnert</p>
			</header>
			<a href="https://github.com/ddavmy" target="_blank" class="jumplink pic">
				<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/def.jpg" alt="" />
			</a>
		</article>

		<!-- Contact -->
		<article id="calculate" class="panel">
			<header>
				<h2>Twoja Delta~</h2>
			</header>
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
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
							<?php if (($_smarty_tpl->tpl_vars['role']->value == 'admin')) {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcReset#calculate"><input class="button" type="button" value="Reset x_x"/></a>
							<?php }?>
						</div>
					</div>
				</div>
			</form>
			<div>
				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
					<h2>Wystąpiły błędy: </h2>
					<div id="msgFound">
					<ol>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ol>
					</div>
				<?php }?>

				<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
					<h4>Informacje: </h4>
					<ol class="inf">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
					<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ol>
				<?php }?>

				<?php if (((isset($_smarty_tpl->tpl_vars['res']->value->result)))) {?>
					<h2>Wynik:</h2>
					<div id="msg">
						Δ = <?php echo $_smarty_tpl->tpl_vars['math']->value->math;
echo $_smarty_tpl->tpl_vars['res']->value->result;?>

					</div>
				<?php }?>

			</div>
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
