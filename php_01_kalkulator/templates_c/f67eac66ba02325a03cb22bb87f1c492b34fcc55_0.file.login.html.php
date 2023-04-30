<?php
/* Smarty version 4.3.1, created on 2023-04-30 23:05:15
  from 'C:\xampp\htdocs\paw\php_01_kalkulator\app\login\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_644ed80b18d1c9_30462050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f67eac66ba02325a03cb22bb87f1c492b34fcc55' => 
    array (
      0 => 'C:\\xampp\\htdocs\\paw\\php_01_kalkulator\\app\\login\\login.html',
      1 => 1682870280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644ed80b18d1c9_30462050 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1769371182644ed80b151691_66831088', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1580257159644ed80b152b30_77881861', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_528117859644ed80b1535f0_42023980', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.html"));
}
/* {block 'header'} */
class Block_1769371182644ed80b151691_66831088 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_1769371182644ed80b151691_66831088',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_1580257159644ed80b152b30_77881861 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1580257159644ed80b152b30_77881861',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_528117859644ed80b1535f0_42023980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_528117859644ed80b1535f0_42023980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div id="wrapper">

	<!-- Main -->
	<div id="main">

		<article id="calculate" class="panel">
			<header>
				<h2>Logowanie</h2>
			</header>
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
LoginCheck" method="post">
				<div>
					<div class="col">
						<div class="col-6 col-12-medium">
                            <input type="text" name="login" autocomplete="off" placeholder="Username" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
"/>
                        </div>
                        <div class="col-6 col-12-medium">
                            <input type="password" name="pass" autocomplete="off" placeholder="Password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->pass;?>
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