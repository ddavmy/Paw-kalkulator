<?php
/* Smarty version 4.3.1, created on 2023-04-17 14:01:48
  from 'E:\dev\xampp\htdocs\paw\szablon\app\security\login_view.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643d352c3f12c3_33077867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf3289f61bc6914e33471a7e67f3f8b7cd11b2eb' => 
    array (
      0 => 'E:\\dev\\xampp\\htdocs\\paw\\szablon\\app\\security\\login_view.html',
      1 => 1681732903,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643d352c3f12c3_33077867 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1947613491643d352c3e9f77_44848005', 'footer');
?>

		
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1469142251643d352c3ea828_76916146', 'content');
?>


<!-- <?php echo '<?php'; ?>

if (isset($messages)) {
	if (count($messages) > 0) {
		echo '<div id="msgFound">';
		foreach ($messages as $key => $msg) {
			echo $msg.'<br />';
		}
		echo '</div>';
		
	}
}
<?php echo '?>'; ?>
 -->




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.html");
}
/* {block 'footer'} */
class Block_1947613491643d352c3e9f77_44848005 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1947613491643d352c3e9f77_44848005',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1469142251643d352c3ea828_76916146 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1469142251643d352c3ea828_76916146',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/login.php" method="post">
            <div>
                <div class="col">
                    <div class="col-6 col-12-medium">
                        <input type="text" name="login" autocomplete="off" placeholder="Username" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['login'];?>
"/>
                    </div>
                    <div class="col-6 col-12-medium">
                        <input type="pass" name="pass" autocomplete="off" placeholder="Password" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['pass'];?>
"/>
                    </div>
                    <div class="col-6">
                        <input type="submit" value="Send Message" />
                    </div>
                    <div class="col-6">
                        <!-- <?php if (($_smarty_tpl->tpl_vars['role']->value == 'admin')) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php>"><input class="button" type="button" value="Reset"/></a>
                        <?php }?> -->
                    </div>
                </div>
            </div>
        </form>
    <!-- </body>
</html> -->

<?php
}
}
/* {/block 'content'} */
}
