<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Include the Bootstrap CSS stylesheet -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="css/styles-login.css">

  </head>
  <body>
    <div class="container pt-5">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header text-center">
              <h4>ลงชื่อเข้าใช้สำหรับผู้ประกอบการ</h4>
            </div>
            <div class="card-body">
              <form method="post" id="login-form" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="username">ชื่อผู้ใช้</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="password">รหัสผ่าน</label>
                  <input
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                    required
                  />
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-info btn-lg btn-block">เข้าสู่ระบบ</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Include the Bootstrap JS scripts -->
    <script src="js/variables.js"></script>
    <script src="js/script.js"></script>


  </body>
</html>
