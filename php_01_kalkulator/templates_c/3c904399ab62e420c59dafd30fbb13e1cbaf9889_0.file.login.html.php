<?php
/* Smarty version 4.3.1, created on 2023-05-03 10:27:47
  from 'E:\dev\xampp\htdocs\paw\php_01_kalkulatorTEST\app\views\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64521b0355c2a1_88963870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c904399ab62e420c59dafd30fbb13e1cbaf9889' => 
    array (
      0 => 'E:\\dev\\xampp\\htdocs\\paw\\php_01_kalkulatorTEST\\app\\views\\login.html',
      1 => 1683102461,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64521b0355c2a1_88963870 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114716943764521b0354a953_26676670', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_101365935164521b0354b226_87107965', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158216391664521b0354b834_97090568', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'header'} */
class Block_114716943764521b0354a953_26676670 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_114716943764521b0354a953_26676670',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_101365935164521b0354b226_87107965 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_101365935164521b0354b226_87107965',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_158216391664521b0354b834_97090568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_158216391664521b0354b834_97090568',
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
Access" method="post">
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
