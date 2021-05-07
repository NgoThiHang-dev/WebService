<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab04</title>

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <!-- //Fonts -->
</head>

<body>
    <?php
    $sv = array(
        '1710166@dlu.edu.vn',
        '123',
        'Ngô Thị Hằng',
        'CTK41',
        '9.0'
    );
    // print_r($sv);
    // echo "</pre>";
    $email = $sv[0];
    $mk = $sv[1];


    // $sv = array(
    //     "SV001" => array(
    //         "email"=>"1710166@dlu.edu.vn",
    //         "password" => "123",
    //         "name" => "Ngô Thị Hằng",
    //         "gioitinh" => 1,
    //         "diem" => 9
    //     ),
    //     "SV002" => array(
    //         "email"=>"hangnt036@gmail.com",
    //         "password" => "321",
    //         "name" => "Hằng Ngô",
    //         "gioitinh" => 1,
    //         "diem" => 9
    //     )
    // );

    ?>
    <h1></h1>
    <div class="wp-content">
        <h2>Đăng nhập</h2>
        <form action="#" method="post">
            <input type="email" name="email" placeholder="Email" require="">
            <input type="password" name="password" placeholder="Password" require="">
            <ul class="note_password">
                <li>
                    <input type="checkbox" id="brand1" value="">
                    <label for="brand1"><span></span>Remember me</label>
                    <a href="#">Forgot password?</a>
                </li>
            </ul>
            <div class="submit_ac">
                <input type="submit" value="LOGIN" name="Login">
            </div>
        </form>
        <br>
        <?php
        $infor = "";
        if (isset($_POST['Login'])) {
            # code...
            if ($_POST['email'] == $email && $_POST['password'] == $mk) {
                # code...
                $infor = "Thông tin cá nhân" ."<br>" ."Họ tên: " . $sv[2]  ."<br>". "Lớp: " . $sv[3]."<br>" . "Điểm: " . $sv[4];
            } else
                $infor = "Thông tin đăng nhập sai";
        }
        echo '<div class="thongbao">
                    <p> ' . $infor . '</p>
            </div>';
        ?>
    </div>
</body>

</html>