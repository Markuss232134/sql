
<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

    <h1>Izveidot bloga ierakstu!</h1>

    <form method="POST">
        <input name='post' value = "<?= $_GET['content'] ?? '';?>" />
        <button>Saglabat</button>
    </form>




<?php require "views/components/footer.php"; ?>

