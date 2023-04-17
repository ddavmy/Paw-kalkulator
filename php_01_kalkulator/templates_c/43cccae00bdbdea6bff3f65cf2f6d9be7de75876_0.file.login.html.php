<?php
/* Smarty version 4.3.1, created on 2023-04-17 20:54:29
  from 'E:\dev\xampp\htdocs\paw\php_01_kalkulator\app\security\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643d95e5a1e570_96400184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43cccae00bdbdea6bff3f65cf2f6d9be7de75876' => 
    array (
      0 => 'E:\\dev\\xampp\\htdocs\\paw\\php_01_kalkulator\\app\\security\\login.html',
      1 => 1681752202,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d95e5a1e570_96400184 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_899904190643d95e5a0ad65_14880508', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_805274931643d95e5a0b9f3_62250243', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1535361197643d95e5a0c096_94453668', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.html");
}
/* {block 'header'} */
class Block_899904190643d95e5a0ad65_14880508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_899904190643d95e5a0ad65_14880508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_805274931643d95e5a0b9f3_62250243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_805274931643d95e5a0b9f3_62250243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1535361197643d95e5a0c096_94453668 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1535361197643d95e5a0c096_94453668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div id="wrapper">

	<!-- Nav -->
	<!-- <nav id="nav">
		<a href="#" class="icon solid fa-home"><span>Home</span></a>
		<a href="#calculate" class="icon solid fa-envelope"><span>Calculator</span></a>
		<?php $_prefixVariable1 = "admin";
$_smarty_tpl->_assignInScope('role', $_prefixVariable1);
if ($_prefixVariable1) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/chroniona.html" class="icon solid fa-user-secret"><span>Chroniona</span></a>
		<?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/logout.php" class="icon solid fa-fingerprint"><span>Wyloguj</span></a>
	</nav> -->

	<!-- Main -->
	<div id="main">

		<article id="calculate" class="panel">
			<header>
				<h2>Logowanie</h2>
			</header>
			<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
				<div>
					<div class="col">
						<div class="col-6 col-12-medium">
                            <input type="text" name="login" autocomplete="off" placeholder="Username" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['login'];?>
"/>
                        </div>
                        <div class="col-6 col-12-medium">
                            <input type="password" name="pass" autocomplete="off" placeholder="Password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['pass'];?>
"/>
                        </div>
                        <div class="col-6">
                            <input type="submit" value="Zaloguj" />
                        </div>
						<div class="col-6">
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
