<?php
/* Smarty version 4.3.1, created on 2023-04-17 03:40:01
  from 'E:\dev\xampp\htdocs\paw\szablon\app\security\login_view.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643ca3718f2006_77777874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0614a562f471a546962ef8ca3d9789886e7b7070' => 
    array (
      0 => 'E:\\dev\\xampp\\htdocs\\paw\\szablon\\app\\security\\login_view.php',
      1 => 1681695575,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643ca3718f2006_77777874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1189041198643ca3718ed752_19900369', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_609534928643ca3718ee0b9_10756085', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.html");
}
/* {block 'footer'} */
class Block_1189041198643ca3718ed752_19900369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1189041198643ca3718ed752_19900369',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_609534928643ca3718ee0b9_10756085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_609534928643ca3718ee0b9_10756085',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div style="width:90%; margin: 2em auto;">

<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/login.php" method="post" class="pure-form pure-form-aligned">
    <fieldset>
        <div class="pure-control-group">
            <input type="text" name="login" value="<?php echo '<?php'; ?>
 out($form['login']); <?php echo '?>'; ?>
" id="aligned-name" placeholder="Username" />
        </div>
        <div class="pure-control-group">
            <input type="password" name="pass" id="aligned-password" placeholder="Password" />
        </div>
    </fieldset>
	<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
</form>

<?php echo '<?php'; ?>

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


</div>
<?php
}
}
/* {/block 'content'} */
}
