<script>
    $("#App").attr("class", "pt-3");
</script>
<header>
    <h3 class="p-0 m-0 mt-4">Noticias <?php if (isset($_SESSION["user"])) { ?> <a href="#/post/new"><i class="fas fa-plus"></i></a> <?php } ?></h3>
    <span>Saíba tudo o que acontece no universo Pokemon</span>
</header>
<div class="news-container" id="news">

    <a class="post-container" href="#/post/1/2/3/4/5/6/7/8/9">
        <?php if (isset($_SESSION["user"])) { ?>
            <div class="post-tool-box">
                <i class="fas fa-trash"></i>
                <i class="fas fa-edit"></i>
            </div>
        <?php } ?>
        <div class="post-content">
            <img src="./assets/images/pokes/1.png">
            <h5>Teste</h5>
        </div>
    </a>
</div>