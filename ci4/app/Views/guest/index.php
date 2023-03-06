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
<h2 class="glow4"><?= esc($title) ?></h2>
<div style="height:50px; width:300px;">
<a href="guest/create" class="w3-button w3-block w3-black glow2 w3-hover-purple">CREATE GUEST</a>
</div>
<?php if (! empty($guest) && is_array($guest)): ?>

    <?php foreach ($guest as $guest_item): ?>

       

        <div class="main glow4">
           <h3> <?= esc($guest_item['name']) ?> </h3>
            <p><?= esc($guest_item['email']) ?> 
            <p> <?= esc($guest_item['comment']) ?>
        </div>
        
    <?php endforeach ?>

<?php else: ?>

    <h3>No Guest</h3>

    <p>Unable to find any guest for you.</p>

<?php endif ?>