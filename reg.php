<? require('templades/top.php');
if ($_POST) {
    /*echo "<pre>";
    print_r($_POST);
    echo "</pre>";*/
}


$pname = $_POST['name'];
$pemail = $_POST['email'];
$ppassword = $_POST['password'];
$ppassword2 = $_POST['password_repeat'];
if ($_POST) {
    $errors = [];
    if (!$pname) {
        $errors[] = 'Имя не заполнено';
    }
    if (!$ppassword) {
        $errors[] = 'Пароль не заполнен';
    }
    if ($ppassword != $ppassword2) {

        $errors[] = 'Пароли не совпадают';
    }
    if (!$pemail) {
        $errors[] = 'Email не заполнен';
    }

    if (empty($errors)) {

        $query = "INSERT INTO users VALUES (null,'$pname',' $pemail ','$ppassword ',NOW(),NOW(),'unblock')";

        
        //проверяем является ли в базе данных пользователь с данным именем
        $query2 = "SELECT name FROM users WHERE name = '$pname' ";

        $result1 = mysqli_query($dbconnect, $query2);
        $row1 = (mysqli_num_rows($result1));
        if($row1){
            echo "Имя повторяется";
            exit('Error query');
        }
        

        
        //проверяем является ли в базе данных пользователь с данным password
        $query4 = "SELECT password FROM users WHERE password = '$ppassword' ";
          $result3 = mysqli_query($dbconnect, $query4);
        $row3 = (mysqli_num_rows($result3));
        if($row3){
            echo "Пароль повторяется";
            exit('Error query');}
         //проверяем является ли в базе данных пользователь с данным email
        $query3 = "SELECT email FROM users WHERE email = '$pemail' ";
        $result2 = mysqli_query($dbconnect, $query3);
        $row2 = (mysqli_num_rows($result2));
        if($row2){
            echo "Email повторяется";
            exit('Error query');}

        $cat = mysqli_query($dbconnect, $query);
        if (!$cat) {
            exit('Error query');
        } ?>
        <script>
            document.location.href = 'index.php'

        </script>
        <?php
    } else {
        print_r($errors);
        foreach ($errors as $err) {
            echo "<div class= 'error'>";
            echo $err;
            echo "</div>";
        }
    }
}

?>
    <main class='center'>
        <h2>Регистрация</h2>
        <form method="post" class = "form1" action="reg.php">

            <div class="form-group">
                <label for="name">Name</label>
                <input required type="text" class="form-control" id="name" name="name" placeholder="Имя">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input required  type="email" class="form-control" id="email" name="email" placeholder="Почта">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input required type="password" class="form-control" id="password" name="password" placeholder="Пароль">
            </div>
            <div class="form-group">
                <label for="password_repeat">Password repeat</label>
                <input required type="password" class="form-control" id="password_repeat" name="password_repeat"
                       placeholder="Повторить пароль">
            </div>


            <button type="submit" class="btn btn-default">Регистрация</button>
        </form>
    </main>
    <br style="clear: both"/>
<? require('templades/bottom.php'); ?>