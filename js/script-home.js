let logout = document.getElementById("logout");
let str = localStorage.getItem("username");
console.log("username=" + str);


logout.addEventListener("click", (e) => {
  e.preventDefault();

  // window.location.replace(hostname + "plantrip_business_web/index.php");
  window.location.replace(hostname + "index.php");
  localStorage.setItem("username", "");
});
