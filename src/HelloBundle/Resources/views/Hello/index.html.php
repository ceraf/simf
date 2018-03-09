<!-- src/HelloBundle/Resources/views/Hello/index.html.php -->

<?php $view->extend('::base.html.php') ?>
		
<?php $view['slots']->set('title', 'My cool blog posts') ?>
<?php $view['slots']->start('body') ?>
    <?php //foreach ($blog_entries as $entry): ?>
    <h2><?php //echo $entry->getTitle() ?> </h2>
    <p><?php //echo $entry->getBody() ?> </p>
    Hello <?php echo $view->escape($name) ?> !

<a href="<?php echo $view['router'] ->generate('hello', array('name' => '555555'), true) ?>">Read this blog post.
</a>
    <?php //endforeach; ?>
<?php $view['slots']->stop() ?>