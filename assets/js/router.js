$(window).ready(pageLoad());
$(window).on("hashchange", pageLoad);

function pageLoad() {
  route = location.hash.replace("#/", "");
  $.post("router/router.php", { route: route }, async function (response) {
    $("#App").fadeOut(300);
    await sleep(500);
    $("#App").html(response);
    $("#App").fadeIn(300);
  });
}

function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}
