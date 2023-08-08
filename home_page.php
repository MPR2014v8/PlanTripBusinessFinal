<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Dashboard</title>
    <!-- Include the CSS stylesheet -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="dashboard-container">
    <aside class="sidebar">
        <h1 class="logo">ผู้ประกอบการ PlanTrip</h1>
        <hr>
        <ul class="menu">
            <li class="menu-item">หน้าหลัก</li>
            <li class="menu-item">จัดโปรไฟล์</li>
            <li class="menu-item">จัดการกิจการ</li>
            <li class="menu-item">จัดการค่าชำระบริการ</li>
            <li class="menu-item">รายงาน</li>
            <li class="menu-item" id="logout">ออกจากระบบ</li>
        </ul>
    </aside>


    <main class="main-content">
        <header class="page-header">
            <h2>Welcome, Blacksnow</h2>
        </header>
        <div class="dashboard-cards">
            <div class="card">
                <h3>Total Sales</h3>
                <p>$250,000</p>
            </div>
            <div class="card">
                <h3>Orders</h3>
                <p>1,200</p>
            </div>
            <div class="card">
                <h3>Customers</h3>
                <p>5,000</p>
            </div>
            <div class="card">
                <h3>Products</h3>
                <p>350</p>
            </div>
        </div>
        <div class="charts">
            <!-- Add your charts here -->
        </div>
    </main>
</div>

<script src="js/variables.js"></script>
<script src="js/script-home.js"></script>

</body>
</html>
