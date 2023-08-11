document.getElementById("addPlace").onclick = function () {
  window.location.replace(hostname + "add_place_page.php");
};

document.getElementById("editPlace").onclick = function () {
  window.location.replace(hostname + "edit_place_page.php");
};

var apiUrl =
  "https://plantrip-final-f854bbde88de.herokuapp.com/business/place-user/" +
  str +
  "/";

var lsPlace = [];

fetch(apiUrl)
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

    const tableBody = document.getElementById("table-body");

    lsPlace.forEach((p) => {
      const row = document.createElement("tr");

      if (p.type == "2") {
        row.innerHTML = `
          <th scope="row">${p.id}</th>
          <td>${p.name}</td>
          <td>${p.district}</td>
          <td>สถานที่ท่องเที่ยว</td>
          `;
      } else if (p.type == "3") {
        row.innerHTML = `
          <th scope="row">${p.id}</th>
          <td>${p.name}</td>
          <td>${p.district}</td>
          <td>ที่พัก</td>
          `;
      } else if (p.type == "4") {
        row.innerHTML = `
          <th scope="row">${p.id}</th>
          <td>${p.name}</td>
          <td>${p.district}</td>
          <td>ร้านอาหารและคาเฟ่</td>
          `;
      } else {
        row.innerHTML = `
          <th scope="row">${p.id}</th>
          <td>${p.name}</td>
          <td>${p.district}</td>
          <td>UNKNOW</td>`;
      }

      tableBody.appendChild(row);
    });
  })
  .catch((error) => console.log(error));
