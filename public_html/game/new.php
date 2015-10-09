<?php require_once("../includes/header.php") ?>
<?php if(isset($_SESSION['user_id'])): ?>

<h2>Add a Game to the Database</h2>

<?php if (isset($errors)): ?>
    <p>The following errors occurred:</p>
    <ul>
        <?php foreach ($errors as $field => $error): ?>
        <li><?= $error ?></li>
            <?php endforeach ?>
    </ul>
<?php endif ?>

<form class="form-horizontal" method="post" action="game/create.php" enctype="multipart/form-data">
    <p>
        <label for="title">Game Title</label><br>
        <input type="text" id="title" name="title">
    </p>
    <p>
        <label for="genre">Genre</label><br>
        <input type="text" id="genre" name="genre">
    </p>
    <p>
        <label for="creator">Creator</label><br>
        <input type="text" id="creator" name="creator">
    </p>
    <p>
        <input class="btn btn-primary" type="submit" name="submit" value="Add Game">
    </p>
</form>

<?php else: ?>

    <div class="alert alert-dismissible alert-warning">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <h4>Warning!</h4>
        <p>You need to login to create a game.</p><br>
        <a class="btn btn-default" href="sessions/new.php">Login</a>
    </div>

<?php endif ?>

<?php require_once("../includes/footer.php") ?>
