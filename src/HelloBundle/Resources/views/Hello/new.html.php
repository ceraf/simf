<!-- src/Acme/TaskBundle/Resources/views/Default/new.html.php -->
<form action="<?php echo $view['router']->generate('hello_world') ?>" method="post">
    <?php echo $view['form']->widget($form) ?>
    <input type="submit" />
</form>