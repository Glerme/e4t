<script>
    $("#App").attr("class", "");
</script>
<div class="w-75 center bg-dark p-4 rounded">
    <form id="form-login" action="javascript:void(0)">
        <div id="error" class="alert alert-danger" style="display: none;" role="alert">
            Usuário ou senha incorreto! 
        </div>
        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" name="login" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" class="form-control" required>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="lembrar">
            <label for="lembrar" class="form-check-label">Lembre de mim</label>
        </div>
        <button id="btn-login" type="submit" class="btn btn-info btn-submit mt-5">Entrar</button>
    </form>
</div>

<script>
    $("#form-login").on("submit", function(e) {
        $("#error").hide();
        $("#btn-login").attr("disabled", true);
        $.post("api/auth/login.php", $("#form-login").serialize(), (response) => {
            if (response === "200") {
                location.hash = "#/home";
            } else {
                $("#error").show();
            }
            $("#btn-login").attr("disabled", false);
        });
    });
</script>