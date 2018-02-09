<? require('templades/top.php');
if ($_POST) {
    /*echo "<pre>";
    print_r($_POST);
    echo "</pre>";*/
}
if ($_POST) {
    $errors = [];
    if (!$_POST['name']) {
        $errors[] = 'Имя не заполнено';
    }
    if (!$_POST['password']) {
        $errors[] = 'Пароль не заполнен';
    }
    if ($_POST['password'] != $_POST['password_repeat']) {

        $errors[] = 'Пароли не совпадают';
    }
    if (!$_POST['email']) {
        $errors[] = 'email не заполнен';
    }
    if (empty($errors)) {
        $query = "INSERT INTO users VALUES(null,
'" .$_POST['name']. "',
        '" .$_POST['email']. "',
        '" .$_POST['password']. "',
         NOW(),
        NOW(),
        'unblock')";

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
                <input required type="email" class="form-control" id="email" name="email" placeholder="email">
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