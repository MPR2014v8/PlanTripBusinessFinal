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
        <header class="page-header">
          <h2>จัดการกิจการ</h2>
        </header>

        <div class="container mt-5">
          <!-- Add Button -->
          <button id="addPlace" class="btn btn-success">เพิ่มข้อมูล</button>

          <!-- Edit Button -->
          <button id="editPlace" class="btn btn-warning ml-2">
            แก้ไขข้อมูล
          </button>
          
          <table class="table">
            <thead>
              <tr>
                <th scope="col">รหัสสถานที่</th>
                <th scope="col">ชื่อสถานที่</th>
                <th scope="col">อำเภอ</th>
                <th scope="col">ประเภทสถานที่</th>
              </tr>
            </thead>
            <tbody id="table-body">
              <!-- Table rows will be added here dynamically -->
            </tbody>
          </table>
        </div>
      </main>
    </div>

    <script src="js/variables.js"></script>
    <script src="js/script-home.js"></script>
    <script src="js/sc-tablePLace.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
