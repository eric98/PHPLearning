<?php require('partials/menu.php') ?>

<h1>Digue'm quina tasca vols afegir</h1>

<form action="/task" method="POST">
    Name: <input type="text" name="name">
    <button type="submit">Add</button>
</form>

<?php require('app/views/partials/footer.php') ?>
