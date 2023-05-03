{extends file="main.tpl"}

{block name=header}{/block}

{block name=footer}{/block}

{block name=content}


<!-- Wrapper-->
<div id="wrapper">

	<!-- Nav -->
	<nav id="nav">
		<a href="#" class="icon solid fa-home"><span>Home</span></a>
		<a href="{$conf->action_root}calcCompute" class="icon solid fa-arrow-left"><span>Cofnij</span></a>
		<a href="{$conf->app_url}/app/controllers/logoutCtrl.php" class="icon solid fa-fingerprint"><span>Wyloguj</span></a>
	</nav>

	<!-- Main -->
	<div id="main">


		<!-- Me -->
		<article id="home" class="panel intro">
			<header>
				<h1>Kalkualtor delty</h1>
				<p>Jakub Linnert</p>
				<p>Strona chroniona</p>
				<p>Zalogowano jako: {$role}</p>
				
			</header>
			<a href="https://github.com/ddavmy" class="jumplink pic">
				<img src="{$conf->app_url}/assets/images/def.jpg" alt="" />
			</a>
		</article>
	</div>
</div>

<!-- Scripts -->
<script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
<script src="{$conf->app_url}/assets/js/browser.min.js"></script>
<script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
<script src="{$conf->app_url}/assets/js/util.js"></script>
<script src="{$conf->app_url}/assets/js/main.js"></script>


{/block}