<?php require "components/header.php"; ?>
<h1>Blogs</h1>


<form>
<input name='search_query' value='<?= $_GET["search_query"] ?? "" ?>' />
<button>Meklet</button>
</form>

<?php if (count($posts) == 0){ ?>
    <p>Nav atrast neviens ieraksts. Atrodiet citu vardu.</p>
<?php } ?>

<ul>
<?php foreach($posts as $post){ ?>
    <li> <?= $post["content"] ?> </li>
<?php } ?>
</ul>
<?php require "components/footer.php"; ?>
