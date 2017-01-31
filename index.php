<?php
require_once ('application/config.php');
require_once ('application/session.php');
require_once('assets/templates/header.php');
require_once('application/content_reader.php');

//var_dump($entry = false); die();

$content = getContent($config['content']);
?>

<?php if(!empty($content)):?>
<div class="container">
    <div class="row">
        <?php foreach ($content as $item):?>
        <div class="col-md-4">
            <h2><?=basename($item['title'], ".txt")?></h2>
            <p><?= mb_substr($item['content'],0,75)."..."?></p>
            <p><a class="btn btn-default" href="../src/application/contentViewer.php?name=<?=strtolower(basename($item['title'], ".txt"))?>" role="button">View details &raquo;</a></p>
        </div>
        <?php endforeach;?>
    </div>
</div>
<?php endif?>
    <hr>

<?php
require_once('assets/templates/footer.php');

