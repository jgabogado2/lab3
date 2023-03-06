<style>
body{
    background: url(images/b7.jpg) no-repeat center center fixed; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-color: white;
    }
</style>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h2><?= esc($title) ?></h2>
<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <p><a href="/http://apcwebprog.csf.ph/lab3/ci4/public/news/<?= esc($news_item['slug'], 'url') ?>">View article</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
<br>
<br>
<br>
<h1><p><a href="/lab3/ci4/public/news/create">CREATE NEWS</a></p>
