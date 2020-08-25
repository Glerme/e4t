<?php
if (!isset($_SESSION["user"])) return include("{$_SERVER["DOCUMENT_ROOT"]}/assets/views/404.php");
?>
<script>
    $("#App").attr("class", "allowed-scroll m-0 p-0");
</script>
<link rel="stylesheet" href="./assets/css/posts.css">
<div id="post" class="container">
    <div class="header mt-3 w-100">
        <div class="mr-3 author z-fix">
            <div class="post-profile-container">
                <img :src="author.icon" alt="profile">
            </div>
            <span class="post-author text-center">{{author.name}}</span>
        </div>
        <div class="m-auto text-center w-100">
            <h1 data-edit="title" @click="edit">{{author.title}}</h1>
            <input class="w-100" v-on:blur="hide" style="display: none;" id="title" type="text" v-model="author.title" />
        </div>
    </div>
</div>

<script>
    var vueApp = new Vue({
        el: "#post",
        data: {
            author: {
                name: "Crowrvo",
                icon: "./assets/images/e4t/logo.png",
                title: "Beta 11.1 lançada para Padrinhos!"
            },
            content: {

            }
        },
        methods: {
            edit(item) {
                var editor = $("#" + $(item.target).data("edit"));
                editor.show();
                editor.focus();
            },
            hide(item) {
                if (this.author.title == "") this.author.title = "TITULO"
                $(item.target).hide();
                
            }
        }
    });
</script>