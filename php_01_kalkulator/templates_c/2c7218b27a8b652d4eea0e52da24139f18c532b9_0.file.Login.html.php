<?php
/* Smarty version 4.3.1, created on 2023-05-03 19:50:00
  from 'E:\dev\xampp\htdocs\paw\php_01_kalkulator\app\views\Login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64529ec84aea95_57735994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c7218b27a8b652d4eea0e52da24139f18c532b9' => 
    array (
      0 => 'E:\\dev\\xampp\\htdocs\\paw\\php_01_kalkulator\\app\\views\\Login.html',
      1 => 1683135226,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.html' => 1,
    'file:scripts.html' => 1,
  ),
),false)) {
function content_64529ec84aea95_57735994 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75426011964529ec84a5399_45448444', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39549724864529ec84a5c79_18718759', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128882232964529ec84a6288_80128655', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'header'} */
class Block_75426011964529ec84a5399_45448444 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_75426011964529ec84a5399_45448444',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_39549724864529ec84a5c79_18718759 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_39549724864529ec84a5c79_18718759',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_128882232964529ec84a6288_80128655 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_128882232964529ec84a6288_80128655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



<div id="wrapper">

	<!-- Main -->
	<div id="main">

		<article id="login" class="panel">
			<header>
				<h2>Logowanie</h2>
			</header>
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
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
				<?php $_smarty_tpl->_subTemplateRender('file:messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>
		</article>
	</div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:scripts.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
