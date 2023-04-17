<?php
/* Smarty version 4.3.1, created on 2023-04-17 01:14:22
  from 'E:\dev\xampp\htdocs\paw\szablon\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_643c814e298443_63033826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a950f79e75f1c79d7b5afcad1924229551d9ec55' => 
    array (
      0 => 'E:\\dev\\xampp\\htdocs\\paw\\szablon\\index.html',
      1 => 1681686859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_643c814e298443_63033826 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!DOCTYPE HTML>
<!--
	Astral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->


<html>
	<head>
		<title>Astral by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">


		

		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1866034305643c814e280e74_96892156', 'footer');
?>

		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2032186121643c814e282994_47142157', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "E:\dev\xampp\htdocs\paw\szablon/templates/main.html");
}
/* {block 'footer'} */
class Block_1866034305643c814e280e74_96892156 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1866034305643c814e280e74_96892156',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_2032186121643c814e282994_47142157 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2032186121643c814e282994_47142157',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->
					<nav id="nav">
						<a href="#" class="icon solid fa-home"><span>Home</span></a>
						<a href="#contact" class="icon solid fa-envelope"><span>Contact</span></a>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Me -->
							<article id="home" class="panel intro">
								<header>
									<h1>Jane Doe</h1>
									<p>Senior Astral Projectionist</p>
								</header>
								<a href="#work" class="jumplink pic">
									<img src="images/me.jpg" alt="" />
								</a>
							</article>

						<!-- Contact -->
							<article id="contact" class="panel">
								<header>
									<h2>Calculate Me :3</h2>
								</header>
								<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
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
												<input type="submit" value="Send Message" />
											</div>
										</div>
									</div>
								</form>
								<div>

																		<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
										<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
											<h4>Wystąpiły błędy: </h4>
											<ol class="err">
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
										<?php }?>
									<?php }?>
		
																		<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
										<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
											<h4>Informacje: </h4>
											<ol class="inf">
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
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
										<?php }?>
									<?php }?>
		
									<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
										<h4>Wynik</h4>
										<p class="res">
										<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

										</p>
									<?php }?>
		
									</div>
							</article>

					</div>

				<!-- Footer -->
					<!-- <div id="footer">
						<ul class="copyright">
							<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</div> -->

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>

	<!-- </body>
</html> -->

<?php
}
}
/* {/block 'content'} */
}
