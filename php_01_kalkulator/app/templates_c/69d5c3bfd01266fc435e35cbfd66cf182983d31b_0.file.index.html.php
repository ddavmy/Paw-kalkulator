<?php
/* Smarty version 4.3.1, created on 2023-04-17 20:55:04
  from 'E:\dev\xampp\htdocs\paw\php_01_kalkulator\app\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643d960838d8d5_08679585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69d5c3bfd01266fc435e35cbfd66cf182983d31b' => 
    array (
      0 => 'E:\\dev\\xampp\\htdocs\\paw\\php_01_kalkulator\\app\\index.html',
      1 => 1681756593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d960838d8d5_08679585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_873329172643d9608376227_95067651', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1609558939643d9608376e97_80328961', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1466107960643d96083776e8_87849316', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'header'} */
class Block_873329172643d9608376227_95067651 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_873329172643d9608376227_95067651',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_1609558939643d9608376e97_80328961 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1609558939643d9608376e97_80328961',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1466107960643d96083776e8_87849316 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1466107960643d96083776e8_87849316',
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
			<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/secure.php" class="icon solid fa-user-secret"><span>Chroniona</span></a>
		<?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
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
			<a href="https://github.com/ddavmy" class="jumplink pic">
				<img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/images/def.jpg" alt="" />
			</a>
		</article>

		<!-- Contact -->
		<article id="calculate" class="panel">
			<header>
				<h2>Twoja Delta~</h2>
			</header>
			<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php#calculate" method="post">
				<div>
					<div class="col">
						<div class="col-6 col-12-medium">
							<input type="text" name="a" autocomplete="off" placeholder="Podaj a" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['a'];?>
"/>
						</div>
						<div class="col-6 col-12-medium">
							<input type="text" name="b" autocomplete="off" placeholder="Podaj b" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['b'];?>
"/>
						</div>
						<div class="col-12">
							<input type="text" name="c" autocomplete="off" placeholder="Podaj c" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['c'];?>
"/>
						</div>
						<div class="col-6">
							<input type="submit" value="Oblicz mnie! :3" />
							<?php if (($_smarty_tpl->tpl_vars['role']->value == 'admin')) {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
#calculate"><input class="button" type="button" value="Reset"/></a>
							<?php }?>
						</div>
					</div>
				</div>
			</form>
			<div>
								<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
					<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
						<h2>Wystąpiły błędy: </h2>
						<div id="msgFound">
						<ol>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ol>
						</div>
					<?php }?>
				<?php }?>

				<?php if (((isset($_smarty_tpl->tpl_vars['result']->value)))) {?>
					<h2>Wynik:</h2>
					<div id="msg">
						Δ = <?php echo $_smarty_tpl->tpl_vars['math']->value;
echo $_smarty_tpl->tpl_vars['result']->value;?>

					</div>
				<?php }?>

			</div>
		</article>
	</div>
</div>

<!-- Scripts -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'content'} */
}
