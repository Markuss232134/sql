<?php $pageTitle = $post["category_name"];?>

<?php require "views/components/header.php"?>
<?php require "views/components/navbar.php"?> 

<h2><?= htmlspecialchars($post["category_name"]) ?></h2>
<a href="/categories/edit?id=<?= $post["id"] ?> " class="button-link">Labot kategoriju</a>

<form method="POST" action="/categories/delete">
    <input name="id" value="<?=$post['id']?>" type="hidden" />
    <input type="submit" value="Dzēst" class="button"/>
</form>


<?php require "views/components/footer.php"?>