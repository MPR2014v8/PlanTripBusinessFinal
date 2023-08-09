<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Dashboard</title>
    <!-- Include the CSS stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<div class="dashboard-container">
    <aside class="sidebar">
        <h1 class="logo">ผู้ประกอบการ PlanTrip</h1>
        <hr>
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
            <h2>โปรไฟล์</h2>
        </header>
        <div class="container mt-5">
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header text-center">
                    <h3>จัดการโปรไฟล์</h3>
                  </div>
                  <div class="card-body">
                    <form id="editUserProfile-form" enctype="multipart/form-data">
                      <div class="mb-3">
                        <label for="username" class="form-label">อีเมล</label>
                        <input type="email" class="form-control" id="email" name="email" value="" required>
                      </div>
                      <div class="mb-3">
                        <label for="text" class="form-label">ชื่อจริง</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" value="" required>
                      </div>
                      <div class="mb-3">
                        <label for="text" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" value="" required>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-danger btn-lg btn-block" style="width:100%">แก้ไขข้อมูล</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
    </main>
</div>

<script src="js/variables.js"></script>
<script src="js/script-home.js"></script>
<script src="js/sc-editProfile.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
