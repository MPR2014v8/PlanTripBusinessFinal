const apiUrl = "https://plantrip-final-f854bbde88de.herokuapp.com/login/?"; // Replace with your API URL

let loginForm = document.getElementById("login-form");
let str = localStorage.getItem("username");
console.log("username=" + str);

loginForm.addEventListener("submit", (e) => {
    e.preventDefault();
  
    let username = document.getElementById("username");
    let password = document.getElementById("password");
  
    if (username.value == "" || password.value == "") {
      alert("Ensure you input a value in both fields!");
    } else {
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
            console.log("LOGIN SUCCESS.")
            // window.location.replace(hostname + 'plantrip_business_web/home_page.php');
            window.location.replace(hostname + 'home_page.php');
            localStorage.setItem("username",username.value.toLowerCase());
          } else {
            console.log("LOGIN FAI.");
            alert("เข้าสู่ระบบไม่สำเร็จ.");
          }
        })
        .then((json) => console.log(json))
        .catch((error) => console.log("error login."));

    }
  });