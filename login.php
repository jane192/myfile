<? require('templades/top.php');

$pname = $_POST['name'];
$ppassword = $_POST['password'];
if ($_POST) {
    $errors = [];
    if (!$pname) {
        $errors[] = 'Имя не заполнено';
    }   
  
   
    if (!$ppassword) {
        $errors[] = 'Пароль не заполнен';
    }
   
    

    if (empty($errors)) {

        
        $query = "SELECT * FROM users WHERE name = '$pname' AND password ='$ppassword'";
        $result = mysqli_query($dbconnect, $query);
        $row = (mysqli_num_rows($result));
        if(!$row){
            echo "Неправильное имя или пароль";
            exit('Error query');}
      
        $cat = mysqli_query($dbconnect, $query);
        if (!$cat) {
            exit('Error query');
        }
        $user = mysqli_fetch_array($cat);
        if($user['id']){
            $_SESSION['user_id'] = $user['id']; 
            $query ="UPDATE users SET lastvisit = NOW() WHERE id =".$user['id'];
            ?>
        <script>
            document.location.href = 'index.php'

        </script>
        <?php
        }
        

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
        <h2>Вход</h2>
        <form method="post" class = "form1" action="login.php">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Имя">
            </div>
           
            <div class="form-group">
                <label for="password">Password</label>
                <input  type="password" class="form-control" id="password" name="password" placeholder="Пароль">
            </div>            

            <button type="submit" class="btn btn-default">Войти</button>
        </form>
    </main>
    <br style="clear: both"/>
<? require('templades/bottom.php'); ?>