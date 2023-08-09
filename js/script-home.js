let logout = document.getElementById("logout");
let str = localStorage.getItem("username");
console.log("username=" + str);


logout.addEventListener("click", (e) => {
  e.preventDefault();

  window.location.replace(hostname + "index.php");
  localStorage.setItem("username", "");
});

document.getElementById("homepage").onclick = function () {
  window.location.replace(hostname + 'home_page.php');
};

document.getElementById("editProfileUser").onclick = function () {
  window.location.replace(hostname + 'profile_user_page.php');
};

document.getElementById("managePlace").onclick = function () {
  window.location.replace(hostname + 'manage_place_page.php');
};

document.getElementById("managePayment").onclick = function () {
  window.location.replace(hostname + 'manage_payment_page.php');
};

document.getElementById("report").onclick = function () {
  window.location.replace(hostname + 'report_page.php');
};

