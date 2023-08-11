let paymentForm = document.getElementById("payment-form");
var cus_id = localStorage.getItem("customer_id");
var url =
  "https://plantrip-final-f854bbde88de.herokuapp.com/payment/" + cus_id + "/";

var lsPay = [];

fetch(url)
  .then((res) => {
    return res.json();
  })
  .then((data) => {
    data.forEach((p) => {
      const price = p.price;
      const payment_date = p.payment_date;
      const upload_img_link = p.upload_img_link;

      lsPay.push({
        price: price,
        payment_date: payment_date,
        upload_img_link: upload_img_link,
      });
    });

    console.log(lsPay);

    lsPay.forEach((p) => {
      document.getElementById("payment_date").value = p.payment_date;
      document.getElementById("price").value = p.price;
      document.getElementById("upload_img_link").value = p.upload_img_link;
    });
  })
  .catch((error) => console.log(error));

paymentForm.addEventListener("submit", (e) => {
  e.preventDefault();

  let price = document.getElementById("price");
  let upload_img_link = document.getElementById("upload_img_link");
  let customer = cus_id;

  if (upload_img_link.value == "") {
    alert("กรุณาอัพโหลดหลักฐานการชำระ");
    return;
  }

  var url =
    "https://plantrip-final-f854bbde88de.herokuapp.com/payment/" +
    customer +
    "/"; // Replace with your API URL

  fetch(url, {
    method: "PUT",
    body: JSON.stringify({
      price: price.value.toLowerCase(),
      upload_img_link: upload_img_link.value.toLowerCase(),
      customer: customer,
    }),
    headers: {
      "Content-type": "application/json; charset=UTF-8",
    },
  })
    .then((response) => response.json())
    .then((json) => console.log(json));
//   window.location.replace(hostname + "home_page.php");
});
