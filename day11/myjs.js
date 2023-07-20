var code = document.getElementById("code");
var captcha = document.getElementById("captcha");
var btn = document.getElementById("btn");

btn.addEventListener("click", function () {
  if (code.innerHTML !== captcha.value) {
    window.location.href = "http://localhost/ITI_PHP/day11/index.php"; // redirect to index.page if captcha is not correct
  } else {
    window.location.href = "http://localhost/ITI_PHP/day11/home.php";
  }
});
