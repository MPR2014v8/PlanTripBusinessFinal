// let id  = localStorage.getItem("user_id");
var apiUrl =
  "https://plantrip-final-f854bbde88de.herokuapp.com/user/" + str + "/";
let id = "";

fetch(apiUrl)
  .then((res) => {
    return res.json();
  })
  .then((data) => {
    data.forEach((user) => {
      id = user.id;
      localStorage.setItem("user_id", id.value);
    });

    console.log("user_id=" + id);
  })
  .catch((error) => console.log(error));

apiUrl = "https://plantrip-final-f854bbde88de.herokuapp.com/user/";
const username = str + "/";

let email = "";
let first_name = "";
let last_name = "";

fetch(apiUrl + username)
  .then((res) => {
    return res.json();
  })
  .then((data) => {
    data.forEach((user) => {
      email = user.email;
      first_name = user.first_name;
      last_name = user.last_name;
      document.getElementById("email").value = email;
      document.getElementById("first_name").value = first_name;
      document.getElementById("last_name").value = last_name;
    });

    console.log(
      "email=" + email + " first_name=" + first_name + " last_name=" + last_name
    );
  })
  .catch((error) => console.log(error));

let editUserForm = document.getElementById("editUserProfile-form");
editUserForm.addEventListener("submit", (e) => {
  e.preventDefault();

  email = document.getElementById("email");
  first_name = document.getElementById("first_name");
  last_name = document.getElementById("last_name");

  if (email.value == "" || first_name.value == "" || last_name.value == "") {
    alert("กรุณาระบุข้อมูลทุกช่องกรอกให้ครบถ้วน.");
  } else {
    // perform operation with form input
    let options = {
      method: "PUT",
      headers: {
        "Content-type": "application/json",
      },
      body: JSON.stringify({
        email: email.value.toLowerCase(),
        first_name: first_name.value.toLowerCase(),
        last_name: last_name.value.toLowerCase(),
      }),
    };

    id = apiUrl = "https://plantrip-final-f854bbde88de.herokuapp.com/user/" + id + "/";

    fetch(apiUrl, options)
      .then((response) => {
        if (response.ok) {
          console.log("แก้ไขโปรไฟล์สำเร็จ.");
          alert("แก้ไขโปรไฟล์สำเร็จ.");
        } else {
          console.log("แก้ไขโปรไฟล์ไม่สำเร็จ.");
          alert("แก้ไขโปรไฟล์ไม่สำเร็จ.");
        }
      })
      .then((json) => console.log(json))
      .catch((error) => console.log(error));
  }
});
