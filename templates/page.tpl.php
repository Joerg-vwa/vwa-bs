  	<header>
		<div class="container_12 logo">
			<div class="grid_9 main">
				<?php if (!empty($site_name)): ?>
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
      <?php endif; ?>
			</div>
			<div class="grid_3 side">
				<!-- Reserved for future use --> &nbsp;
			</div>
			<div class="clear"></div>
			<nav id="primary">
				<ul class="menu">				
					<li><a href="#">&Uuml;ber uns</a></li>
					<li><a href="#">Training</a></li>
					<li><a href="#">Jugendarbeit</a></li>
					<li><a href="#">Mannschaften</a></li>
					<li><a href="#">Spielplan</a></li>
				</ul>
			</nav>
		</div>
	</header>

    <!-- navbar goe here --->

<!-- /#header -->

	<div class="container_12">		
		<div class="clear space20"></div>

		<div class="grid_9 article featured">
      <?php print render($page['highlighted']); ?>
 		</div>
 		
    <?php if (!empty($page['sidebar_first'])): ?>
    	<div class="grid_3 loginform">
        <?php print render($page['sidebar_first']); ?>
      </div>  <!-- /#sidebar-first -->
    <?php endif; ?>  
    
		<div class="clear space20"></div>
		
    <section class="<?php print _bootstrap_content_span($columns); ?>">  
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted hero-unit"></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if (!empty($title)): ?>
        <h1 class="page-header"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
    </section>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>

  </div>
</div>

	<footer>
		<div class="container_12">
			<div class="grid_2">
				<b>Navigation</b><br />
				<a href="#">&Uuml;ber uns</a><br />
				<a href="#">Training</a><br />
				<a href="#">Jugendarbeit</a><br />
				<a href="#">Mannschaften</a><br />
				<a href="#">Spielplan</a><br />
			</div>
			<div class="grid_2">
				<b>Folgen Sie uns</b><br />
				<a href="#">Twitter</a><br />
				<a href="#">Facebook</a><br />
				<a href="#">Google+</a><br />
				<a href="#">Flickr</a><br />
			</div>
			<div class="grid_2">
				&nbsp;
			</div>
			<div class="grid_2">
				&nbsp;
			</div>
			<div class="grid_2">
				&nbsp;
			</div>			
			<div class="grid_2">
				<b>Kontakt</b><br />
				<a href="#">Impressum</a><br />
				<a href="#">Kontakt</a><br />
				<a href="#">Presse</a><br />
			</div>
			
		</div>
	</footer>

  <?php // print render($page['footer']); ?>

