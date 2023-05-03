<?php
/* Smarty version 4.3.1, created on 2023-05-03 20:36:33
  from 'E:\dev\xampp\htdocs\paw\php_01_kalkulator\app\views\Login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6452a9b18c5f35_88624888',
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
function content_6452a9b18c5f35_88624888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12824885846452a9b18bc4b6_20642830', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17551296776452a9b18bcdc9_52647892', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11176825046452a9b18bd3d5_85031862', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.html");
}
/* {block 'header'} */
class Block_12824885846452a9b18bc4b6_20642830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_12824885846452a9b18bc4b6_20642830',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'footer'} */
class Block_17551296776452a9b18bcdc9_52647892 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_17551296776452a9b18bcdc9_52647892',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_11176825046452a9b18bd3d5_85031862 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11176825046452a9b18bd3d5_85031862',
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
