const apiUrl = "https://plantrip-final-f854bbde88de.herokuapp.com/login/?"; // Replace with your API URL

let str = localStorage.getItem("username");
console.log("username=" + str);

let loginForm = document.getElementById("login-form");

loginForm.addEventListener("submit", (e) => {
  e.preventDefault();

  let username = document.getElementById("username");
  let password = document.getElementById("password");

  if (username.value == "" || password.value == "") {
    alert("Ensure you input a value in both fields!");
  } else {
    let group_id = "0";
    const url =
      "https://plantrip-final-f854bbde88de.herokuapp.com/chk_group_id/" +
      username.value +
      "/";
    fetch(url)
      .then((res) => {
        return res.json();
      })
      .then((data) => {
        data.forEach((user) => {
          group_id = Object.values(user);
          console.log(group_id);
        });

        console.log("group_id=" + group_id);
        if (group_id == 2 || group_id == 3) {
          // perform operation with form input
          let options = {
            method: "POST",
            headers: {
              "Content-type": "application/json",
            },
            body: JSON.stringify({
              username: username.value.toLowerCase(),
              password: password.value.toLowerCase(),
            }),
          };

          fetch(apiUrl, options)
            .then((response) => {
              if (response.ok) {
                console.log("LOGIN SUCCESS.");
                window.location.replace(hostname + "home_page.php");
                localStorage.setItem("username", username.value.toLowerCase());
              } else {
                console.log("LOGIN FAI.");
                alert("เข้าสู่ระบบไม่สำเร็จ.");
              }
            })
            .then((json) => console.log(json))
            .catch((error) => console.log("error login."));
        } else {
          alert("เฉพาะผู้ใช้ ผู้ประกอบการเท่านั้น.");
        }
      })
      .catch((error) => console.log(error));
  }
});
