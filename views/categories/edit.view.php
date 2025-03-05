<?php $pageTitle = "Rediģē kategoriju";?>

<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?> 

<h2>Labo kategoriju!</h2>
<form method="POST">
    <input name="category_name" value="<?=$post['category_name'] ?? '' ?>"/>
    <input name="id" type="hidden" value="<?=$post['id']?>"/>
    <button class="search">Saglābt</button>

<?php if(isset($errors["category_name"])) { ?>
       <p><?= $errors["category_name"] ?></p>
<?php } ?>


</form>

<?php require "views/components/footer.php"?>