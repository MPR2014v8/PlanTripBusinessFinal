let logout = document.getElementById("logout");

let str = localStorage.getItem("username");

let customer_id = "0";
var url =
  "https://plantrip-final-f854bbde88de.herokuapp.com/chk_group_id/" + str + "/";
fetch(url)
  .then((res) => {
    return res.json();
  })
  .then((data) => {
    data.forEach((user) => {
      customer_id = user.id;
      localStorage.setItem("customer_id", customer_id);
      console.log("customer_id=" + customer_id);
    });
  });

console.log("customer_id=" + customer_id);

console.log("username=" + str);

logout.addEventListener("click", (e) => {
  e.preventDefault();

  window.location.replace(hostname + "index.php");
  localStorage.setItem("username", "");
});

// document.getElementById("district").addEventListener("change", function () {
//   var selectedOption = this.value;
//   document.getElementById("selectedOption").textContent = selectedOption;
// });

document.getElementById("homepage").onclick = function () {
  window.location.replace(hostname + "home_page.php");
};

document.getElementById("editProfileUser").onclick = function () {
  window.location.replace(hostname + "profile_user_page.php");
};

document.getElementById("managePlace").onclick = function () {
  window.location.replace(hostname + "manage_place_page.php");
};

document.getElementById("managePayment").onclick = function () {
  window.location.replace(hostname + "manage_payment_page.php");
};

document.getElementById("report").onclick = function () {
  window.location.replace(hostname + "report_page.php");
};

