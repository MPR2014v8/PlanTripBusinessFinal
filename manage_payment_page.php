<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Business Dashboard</title>
    <!-- Include the CSS stylesheet -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
  </head>
  <body>
    <div class="dashboard-container">
      <aside class="sidebar">
        <h1 class="logo">ผู้ประกอบการ PlanTrip</h1>
        <hr />
        <ul class="menu">
          <li class="menu-item" id="homepage">หน้าหลัก</li>
          <li class="menu-item" id="editProfileUser">จัดโปรไฟล์</li>
          <li class="menu-item" id="managePlace">จัดการกิจการ</li>
          <li class="menu-item" id="managePayment">จัดการค่าชำระบริการ</li>
          <li class="menu-item" id="report">รายงาน</li>
          <li class="menu-item" id="logout">ออกจากระบบ</li>
        </ul>
      </aside>

      <main class="main-content">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header text-center">
                  <h4>ข้อมูลค้างชำระบริการ</h4>
                </div>
                <div class="card-body">
                  <form
                    method="post"
                    id="payment-form"
                    enctype="multipart/form-data"
                  >
                    <div class="form-group">
                      <label for="payment_date">วันที่ออกใบแจ้งหนี้</label>
                      <input
                        type="text"
                        class="form-control"
                        id="payment_date"
                        name="payment_date"
                        readonly
                      />
                    </div>
                    <div class="form-group">
                      <label for="price">ยอดที่ต้องชำระ</label>
                      <input
                        type="text"
                        class="form-control"
                        id="price"
                        name="price"
                        readonly
                      />
                    </div>

                    <div class="form-group">
                      <label for="numberPayment"
                        >ชำระผ่านการโอน : ธนาคารกสิกรไทย</label
                      >
                      <label for="numberPayment">วชิระ ทองเลิศ :</label>
                      <input
                        type="url"
                        class="form-control"
                        id="numberPayment"
                        name="numberPayment"
                        value="0018182521"
                        readonly
                      />
                    </div>

                    <hr />
                    <div class="form-group">
                      <label for="upload_img_link"
                        >อัพโหลดหลักฐาน | แนบลิงค์รูปภาพการโอน</label
                      >
                      <input
                        type="url"
                        class="form-control"
                        id="upload_img_link"
                        name="upload_img_link"
                        placeholder="www.example.com"
                        required
                      />
                    </div>

                    <div class="text-center p-2">
                      <button
                        type="submit"
                        class="btn btn-info btn-lg btn-block"
                        id="paymentUpload"
                      >
                        อัพโหลดหลักฐาน
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>

    <script src="js/variables.js"></script>
    <script src="js/script-home.js"></script>
    <script src="js/sc-payment.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
