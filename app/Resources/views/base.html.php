<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php $view['slots']->output('title', 'Test Application') ?> </title>
		
		<?php $view['slots']->start('stylesheets') ?>
			<link href="<?php echo $view['assets']->getUrl('css/main.css') ?>" type="text/css" rel="stylesheet" />
		<?php $view['slots']->stop() ?>
		<?php $view['slots']->output('stylesheets') ?>
    </head>
    <body>
		<div class="body">
			<div class="header"><?php echo $view->render('::header.html.php') ?></div>
			<div class="main">
				<div id="sidebar">
					<?php if ($view['slots']->has('sidebar')) : ?>
					<?php $view['slots']->output('sidebar') ?>
					<?php else : ?>
						<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/blog">Blog</a></li>
						</ul>
					<?php endif; ?>
				</div>			
			    <div id="content">
					<?php $view['slots']->output('body') ?>
				</div>
			</div>
			<div class="footer">Это футер</div>
		</div>
    </body>
</html>