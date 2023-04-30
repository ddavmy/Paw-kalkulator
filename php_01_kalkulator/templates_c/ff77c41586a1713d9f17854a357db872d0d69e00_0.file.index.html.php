<?php
/* Smarty version 4.3.1, created on 2023-04-30 17:16:00
  from 'C:\xampp\htdocs\paw\php_01_kalkulator\app\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_644e86305b4dd5_03349054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff77c41586a1713d9f17854a357db872d0d69e00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\php_01_kalkulator\\app\\index.html',
      1 => 1682867647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644e86305b4dd5_03349054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_381841987644e863059c366_69138062', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1734808678644e863059cf42_82134969', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_962456972644e863059d7c5_91443224', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'header'} */
class Block_381841987644e863059c366_69138062 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_381841987644e863059c366_69138062',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_1734808678644e863059cf42_82134969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1734808678644e863059cf42_82134969',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_962456972644e863059d7c5_91443224 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_962456972644e863059d7c5_91443224',
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
/app/secure.php" class="icon solid fa-user-secret"><span>Chroniona</span></a>
		<?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php" class="icon solid fa-fingerprint"><span>Wyloguj</span></a>
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
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php#calculate" method="post">
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
								<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
#calculate"><input class="button" type="button" value="Reset x_x"/></a>
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
