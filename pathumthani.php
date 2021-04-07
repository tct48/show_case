<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <style>
        body,
        html {
            /* height: 100%; */
            margin: 0px;
        }

        .container {
            width: 800px !important;
            height: 100%;
            margin: 0px auto;
            background-color: white;
            padding: 30px 80px 30px;
        }

        .center {
            text-align: center;
        }

        h1,
        h3 {
            margin-bottom: 0px;
        }

        h3 {
            text-decoration: underline;
        }

        table,
        p {
            text-align: justify;
        }

        .m-0 {
            margin: 0px;
        }

        td {
            padding-right: 30px;
        }

        .content p {
            margin: 0px;
        }

        * {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>

<body style="background: rgb(230,230,230);">
    <div class="container">
        <nav class="breadcrumb">
            <a class="breadcrumb-item" href="./index.php">หน้าแรก</a>
            <span class="breadcrumb-item active">ตรอ.ดีจัง</span>
        </nav>
        <h3>โปรแกรมจัดการใบเสร็จ</h3>
        <p style="text-indent: 50px;">
            โปรแกรมจัดการใบเสร็จของ สถานตรวจสภาพรถเอกชน (ตรอ.) ดีจัง และดีจ้า เป็นระบบที่ใช้จัดการข้อมูลใบเสร็จของบริษัท
            โดยมีรายละเอียดเพิ่มเติมดังนี้
        </p>
        <div class="row">
            <div class="col-md-6">
                <p class="m-0" style="font-weight: bold;text-decoration: underline;">
                    คุณสมบัติของโปรแกรม
                </p>
                <ul>
                    <li>RBAC</li>
                    <li>Multi User</li>
                    <li>รายงานภาษี</li>
                    <li>จัดการชำระเงิน</li>
                    <li>บัญชีรายวัน และสรุปยอด</li>
                </ul>
            </div>
            <div class="col-md-6">
                <p class="m-0" style="font-weight: bold;text-decoration: underline;">
                    หน้าที่สิ่งที่รับผิดชอบ
                </p>
                <ul>
                    <li>ออกแบบ และวิเคราะห์ความต้องการระบบ</li>
                    <li>ออกแบบระบบ และออกแบบฐานข้อมูล</li>
                    <li>พัฒนาด้วย Angular และ MySQL</li>
                    <li>แอปพลิเคชันที่จัดการ CRUD ในฐานข้อมูล</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-2">
                <a class="text-center" href="./assets/image/img01.PNG">
                    <img src="./assets/image/img01.PNG" alt="" class="img-thumbnail">
                </a>
            </div>
            <div class="col-md-6 mb-2">
                <a class="text-center" href="./assets/image/img02.PNG">
                    <img src="./assets/image/img02.PNG" alt="" class="img-thumbnail">
                </a>
            </div>
            <div class="col-md-6 mb-2">
                <a class="text-center" href="./assets/image/img03.PNG">
                    <img src="./assets/image/img03.PNG" alt="" class="img-thumbnail">
                </a>
            </div>
            <div class="col-md-6 mb-2">
                <a class="text-center" href="./assets/image/img04.PNG">
                    <img src="./assets/image/img04.PNG" alt="" class="img-thumbnail">
                </a>
            </div>
        </div>
    </div>
</body>

</html>