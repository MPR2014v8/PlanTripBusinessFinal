let place_user = "0";

let addPlaceForm = document.getElementById("add_place-form");
let user_id = "0";
let place_id = "0";

var url =
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

url =
  "https://plantrip-final-f854bbde88de.herokuapp.com/business/place-user/" +
  str +
  "/";

var lsPlace = [];

fetch(url)
  .then((res) => {
    return res.json();
  })
  .then(async (data) => {
    await data.forEach((p) => {
      const id = p.id;
      const namePlace = p.name;
      const district = p.district;
      const type = p.type;

      lsPlace.push({ id: id, name: namePlace, district: district, type: type });
    });

    console.log(lsPlace);

    // <option value="เมืองอุดรธานี">เมืองอุดรธานี</option>
    //                   </select>

    const selectBody = document.getElementById("idPlace");

    lsPlace.forEach((p) => {
      var option = document.createElement("option");
      option.value = p.id;
      option.text = p.name;

      selectBody.appendChild(option);
    });
  })
  .catch((error) => console.log(error));

idPlace.addEventListener("change", (e) => {
  e.preventDefault();

  const url =
    "https://plantrip-final-f854bbde88de.herokuapp.com/business/" +
    idPlace.value +
    "/";

    place_id = idPlace.value;

  fetch(url)
    .then((res) => {
      return res.json();
    })
    .then((data) => {
      data.forEach((p) => {
        document.getElementById("name").value = p.name;
        document.getElementById("detail").value = p.detaill;
        document.getElementById("district").value = p.district;
        document.getElementById("latitudeInput").value = p.lat;
        document.getElementById("longitudeInput").value = p.lng;
        document.getElementById("addressTextarea").value = p.address;
        document.getElementById("timeOpen").value = p.timeOpen;
        document.getElementById("timeClose").value = p.timeClose;
        document.getElementById("website").value = p.website;
        document.getElementById("pic1").value = p.pic_link1;
        document.getElementById("pic2").value = p.pic_link2;
        document.getElementById("pic3").value = p.pic_link3;
        document.getElementById("vr").value = p.vr;
        document.getElementById("type").value = p.type;

        document.getElementById("timeOpenLabel").innerHTML  = "เวลาเปิด [" +p.timeOpen +"]";
        document.getElementById("timeCloseLabel").innerHTML  = "เวลาปิด [" +p.timeClose +"]";
      });
    })
    .catch((error) => console.log(error));
});

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
      "https://plantrip-final-f854bbde88de.herokuapp.com/business-update/" + place_id + "/"; // Replace with your API URL
  
    fetch(apiUrl, {
      method: "PUT",
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
        place_user: place_user
      }),
      headers: {
        "Content-type": "application/json; charset=UTF-8",
      },
    })
      .then((response) => response.json())
      .then((json) => console.log(json));
    window.location.replace(hostname + "manage_place_page.php");
  });