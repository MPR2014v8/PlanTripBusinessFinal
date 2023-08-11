let addPlaceForm = document.getElementById("add_place-form");
let user_id = "0";

const url =
  "https://plantrip-final-f854bbde88de.herokuapp.com/chk_group_id/" + str + "/";
fetch(url)
  .then((res) => {
    return res.json();
  })
  .then((data) => {
    data.forEach((user) => {
      user_id = user.id;
      console.log("user_id=" + user_id);
      localStorage.setItem("user_id", user_id);
    });
  });

console.log("user_id=" + user_id);

addPlaceForm.addEventListener("submit", (e) => {
  e.preventDefault();

  let namePlace = document.getElementById("name");
  let detail = document.getElementById("detail");
  let district = document.getElementById("district");
  let latitudeInput = document.getElementById("latitudeInput");
  let longitudeInput = document.getElementById("longitudeInput");
  let addressTextarea = document.getElementById("addressTextarea");
  let timeOpen = document.getElementById("timeOpen");
  let timeClose = document.getElementById("timeClose");
  let website = document.getElementById("website");
  let pic1 = document.getElementById("pic1");
  let pic2 = document.getElementById("pic2");
  let pic3 = document.getElementById("pic3");
  let vr = document.getElementById("vr");
  let type = document.getElementById("type");
  let place_user = user_id;

  if (namePlace.value == "") {
    alert("กรุณากรอก name");
    return;
  }
  if (detail.value == "") {
    alert("กรุณากรอก detail");
    return;
  }
  if (latitudeInput.value == "") {
    alert("กรุณากรอก lat");
    return;
  }
  if (longitudeInput.value == "") {
    alert("กรุณากรอก lng");
    return;
  }
  if (addressTextarea.value == "") {
    alert("กรุณากรอก address");
    return;
  }
  if (website.value == "") {
    alert("กรุณากรอก website");
    return;
  }
  if (pic1.value == "") {
    alert("กรุณากรอก pic1");
    return;
  }
  if (pic2.value == "") {
    alert("กรุณากรอก pic2");
    return;
  }
  if (pic3.value == "") {
    alert("กรุณากรอก pic3");
    return;
  }
  if (vr.value == "") {
    alert("กรุณากรอก vr");
    return;
  }


  const apiUrl =
    "https://plantrip-final-f854bbde88de.herokuapp.com/business-create/"; // Replace with your API URL

  fetch(apiUrl, {
    method: "POST",
    body: JSON.stringify({
      name: namePlace.value.toLowerCase(),
      detaill: detail.value.toLowerCase(),
      district: district.value.toLowerCase(),
      lat: latitudeInput.value.toLowerCase(),
      lng: longitudeInput.value.toLowerCase(),
      address: addressTextarea.value.toLowerCase(),
      timeOpen: timeOpen.value.toLowerCase(),
      timeClose: timeClose.value.toLowerCase(),
      website: website.value.toLowerCase(),
      pic_link1: pic1.value.toLowerCase(),
      pic_link2: pic2.value.toLowerCase(),
      pic_link3: pic3.value.toLowerCase(),
      vr: vr.value.toLowerCase(),
      type: type.value.toLowerCase(),
      place_user: place_user,
    }),
    headers: {
      "Content-type": "application/json; charset=UTF-8",
    },
  })
    .then((response) => response.json())
    .then((json) => console.log(json));
  window.location.replace(hostname + "manage_place_page.php");
});
