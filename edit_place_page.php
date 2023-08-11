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
                    <h4>แก้ไขข้อมูลกิจการ</h4>
                  </div>
                  <div class="card-body">
                    <form
                      method="post"
                      id="add_place-form"
                      enctype="multipart/form-data"
                    >
                    <div class="form-group">
                      <label for="idPlace">เลือกกิจการ</label>
                      <select class="form-control" id="idPlace">
                        <option value="">ที่ต้องการแก้ไข..</option>
                      </select>
                    </div>
                    </div>
                      <div class="form-group">
                        <label for="name">ชื่อกิจการ</label>
                        <input
                          type="text"
                          class="form-control"
                          id="name"
                          name="name"
                          placeholder="ชื่อเรียกสถานที่..."
                          required
                        />
                      </div>
                      <div class="form-group">
                        <label for="detail">รายละเอียดกิจการ</label>
                        <textarea
                          class="form-control"
                          id="detail"
                          rows="4"
                          placeholder="บรรยายสถานที่..."
                        ></textarea>
                      </div>
                      <div class="form-group">
                        <label for="district">อำเภอ</label>
                        <select class="form-control" id="district">
                          <option value="เมืองอุดรธานี">เมืองอุดรธานี</option>
                          <option value="กุดจับ">กุดจับ</option>
                          <option value="หนองวัวซอ">หนองวัวซอ</option>
                          <option value="กุมภวาปี">กุมภวาปี</option>
                          <option value="โนนสะอาด">โนนสะอาด</option>
                          <option value="หนองหาน">หนองหาน</option>
                          <option value="ทุ่งฝน">ทุ่งฝน</option>
                          <option value="ไชยวาน">ไชยวาน</option>
                          <option value="ศรีธาตุ">ศรีธาตุ</option>
                          <option value="วังสามหมอ">วังสามหมอ</option>
                          <option value="บ้านดุง">บ้านดุง</option>
                          <option value="บ้านผือ">บ้านผือ</option>
                          <option value="น้ำโสม">น้ำโสม</option>
                          <option value="เพ็ญ">เพ็ญ</option>
                          <option value="สร้างคอม">สร้างคอม</option>
                          <option value="หนองแสง">หนองแสง</option>
                          <option value="นายูง">นายูง</option>
                          <option value="พิบูลย์รักษ์">พิบูลย์รักษ์</option>
                          <option value="กู่แก้ว">กู่แก้ว</option>
                          <option value="ประจักษ์ศิลปาคม">ประจักษ์ศิลปาคม</option>
                        </select>
                      </div>
                      <!-- Latitude Input -->
                      <div class="form-group">
                        <label for="latitudeInput">ละติจูด</label>
                        <input
                          type="number"
                          class="form-control"
                          id="latitudeInput"
                          step="any"
                          placeholder="123.1234"
                          required
                        />
                      </div>
  
                      <!-- Longitude Input -->
                      <div class="form-group">
                        <label for="longitudeInput">ลองจิจูด</label>
                        <input
                          type="number"
                          class="form-control"
                          id="longitudeInput"
                          step="any"
                          placeholder="123.1234"
                          required
                        />
                      </div>
                      <!-- Address Textarea -->
                      <div class="form-group">
                        <label for="addressTextarea">ที่อยู่</label>
                        <textarea
                          class="form-control"
                          id="addressTextarea"
                          rows="4"
                          placeholder="ที่อยู่กิจการ..."
                        ></textarea>
                      </div>
                      <!-- Time Picker Input -->
                      <div class="form-group">
                        <label for="timeOpen" id="timeOpenLabel">เวลาเปิด</label>
                        <select class="form-control" id="timeOpen">
                          <option value="00:00:00">00:00</option>
                          <option value="01:00:00">01:00</option>
                          <option value="02:00:00">02:00</option>
                          <option value="03:00:00">03:00</option>
                          <option value="04:00:00">04:00</option>
                          <option value="05:00:00">05:00</option>
                          <option value="06:00:00">06:00</option>
                          <option value="07:00:00">07:00</option>
                          <option value="08:00:00">08:00</option>
                          <option value="09:00:00">09:00</option>
                          <option value="10:00:00">10:00</option>
                          <option value="11:00:00">11:00</option>
                          <option value="12:00:00">12:00</option>
                          <option value="13:00:00">13:00</option>
                          <option value="14:00:00">14:00</option>
                          <option value="15:00:00">15:00</option>
                          <option value="16:00:00">16:00</option>
                          <option value="17:00:00">17:00</option>
                          <option value="18:00:00">18:00</option>
                          <option value="19:00:00">19:00</option>
                          <option value="20:00:00">20:00</option>
                          <option value="21:00:00">21:00</option>
                          <option value="22:00:00">22:00</option>
                          <option value="23:00:00">23:00</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="timeClose" id="timeCloseLabel">เวลาปิด</label>
                        <select class="form-control" id="timeClose">
                          <option value="00:00:00">00:00</option>
                          <option value="01:00:00">01:00</option>
                          <option value="02:00:00">02:00</option>
                          <option value="03:00:00">03:00</option>
                          <option value="04:00:00">04:00</option>
                          <option value="05:00:00">05:00</option>
                          <option value="06:00:00">06:00</option>
                          <option value="07:00:00">07:00</option>
                          <option value="08:00:00">08:00</option>
                          <option value="09:00:00">09:00</option>
                          <option value="10:00:00">10:00</option>
                          <option value="11:00:00">11:00</option>
                          <option value="12:00:00">12:00</option>
                          <option value="13:00:00">13:00</option>
                          <option value="14:00:00">14:00</option>
                          <option value="15:00:00">15:00</option>
                          <option value="16:00:00">16:00</option>
                          <option value="17:00:00">17:00</option>
                          <option value="18:00:00">18:00</option>
                          <option value="19:00:00">19:00</option>
                          <option value="20:00:00">20:00</option>
                          <option value="21:00:00">21:00</option>
                          <option value="22:00:00">22:00</option>
                          <option value="23:00:00">23:00</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="website">เว็บไชต์</label>
                        <input
                          type="url"
                          class="form-control"
                          id="website"
                          name="website"
                          placeholder="www.example.com"
                          required
                        />
                      </div>
                      <div class="form-group">
                        <label for="pic1">ลิงค์รูปภาพหลัก</label>
                        <input
                          type="url"
                          class="form-control"
                          id="pic1"
                          name="pic1"
                          placeholder="www.example.com"
                          required
                        />
                      </div>
                      <div class="form-group">
                        <label for="pic2">ลิงค์รูปภาพรอง1</label>
                        <input
                          type="url"
                          class="form-control"
                          id="pic2"
                          name="pic2"
                          placeholder="www.example.com"
                          required
                        />
                      </div>
                      <div class="form-group">
                        <label for="pic3">ลิงค์รูปภาพรอง2</label>
                        <input
                          type="url"
                          class="form-control"
                          id="pic3"
                          name="pic3"
                          placeholder="www.example.com"
                          required
                        />
                      </div>
                      <div class="form-group">
                        <label for="vr">ลิงค์ Virtual Tour</label>
                        <input
                          type="url"
                          class="form-control"
                          id="vr"
                          name="vr"
                          placeholder="www.example.com"
                          required
                        />
                      </div>
                      <div class="form-group">
                        <label for="type">ประเภทสถานที่</label>
                        <select class="form-control" id="type">
                          <option value="2">สถานที่ท่องเที่ยว</option>
                          <option value="3">ที่พัก</option>
                          <option value="4">ร้านอาหารและคาเฟ่</option>
                        </select>
                      </div>
  
                      <div class="text-center p-52">
                        <button
                          type="submit"
                          class="btn btn-warning btn-lg btn-block"
                        >
                          แก้ไขกิจการ
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>

       
      </main>
    </div>

    <script src="js/variables.js"></script>
    <script src="js/script-home.js"></script>
    <script src="js/sc-editPlace.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
