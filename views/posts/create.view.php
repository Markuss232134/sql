
<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

    <h1>Izveidot bloga ierakstu!</h1>

<form method="POST">

    <label><input name="content" value="<?=$_POST['content'] ?? '' ?>"/></label>
    
<select name="category_id" class="options">
    <option value="0">Bez kategorijas</option>
    <?php foreach ($categories as $category) { ?> 

        <option value = "<?= $category["id"] ?>">
        <?= $category["category_name"] ?>
        </option>
    
    <?php } ?>
</select>
    
    <button class="search">Saglābt</button>

<?php if(isset($errors["content"])) { ?>
       <p><?= $errors["content"] ?></p>
<?php } ?>


</form>





<?php require "views/components/footer.php"; ?>

