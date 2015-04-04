<html>
    <head>
        <meta charset="utf-8" />
        <title>Đăng nhập tài khoản</title>
        <link rel="stylesheet" type="text/css" href="lib/css/materialize.css" />
        <script type="text/javascript" src="lib/js/materialize.js"></script>
    </head>
    <body>
<?php 
 if (isset($_POST['btnDangNhap']))   {
     $u = $p = "";
     if ($_POST['username'] == NULL) {
         echo "Nhap sai ten dang nhap <br/>";
     } else {
         $u = $_POST['username'];
     }
     if ($_POST['password'] == NULL) {
         echo "Nhap sai mat khau <br/>";
     } else {
         $p = $_POST['password'];
     }
 } 
 $conn = mysql_connect("localhost", "root", "root")
        or die("can't connect this database");
mysql_select_db("tin", $conn);

if ($u && $p) {
    $conn = mysql_connect("localhost", "root", "root") or die("can't this database");
    mysql_select_db("tin", $conn);
    $sql = "SELECT * FROM user WHERE username='".$u."' and password='".$p."'";
    $query = mysql_query($sql);
    if (mysql_num_rows($query) == 0) {
        echo "Username or password is not correct, please try again";
    } else {
        $row = mysql_fetch_array($query);
        session_start();
        $_SESSION['userid'] = $row['id'];
        $_SESSION['level'] = $row['level'];
        echo "<script>alert('Dang nhap thanh cong')</script>";
		header('location:page.html');
    }
}
?>
        <div class="row">
        <form action="dang-nhap.php" method="post" class="col s12">
            <div class="row">
                <div class="input-field col s12">
                   <h2>Đăng nhập</h2>
                </div>
                <div class="row">
                     <div class="input-field col s6">
                        <input id="username" name="username" type="text" class="validate">
                        <label class="active" for="username">Ten dang nhap</label>
                    </div>
                </div>
                <div class="row">
                     <div class="input-field col s6">
                        <input id="password" name="password" type="password" class="validate">
                        <label class="active" for="password">Mat khau</label>
                    </div>
                </div>
                <tr>                    
                    <td colspan="3" align="center"><input type="checkbox" name="remember" />Ghi nhớ đăng nhập</td>
                </tr>
                <tr>                    
                    <td colspan="3" align="center">
                        <input type="submit" name="btnDangNhap" value="Đăng nhập" />
                        &nbsp;&nbsp;&nbsp;
                        <input type="reset" name="btnHuyBo" value="Hủy bỏ" />
                    </td>
                </tr>
            </div>
        </form>
        </div>
    </body>
</html>

