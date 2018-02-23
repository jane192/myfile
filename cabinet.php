<?
require('templades/top.php');
$name = $_POST['name'];
$code = $_POST['code'];
$body = $_POST['body'];
$price = $_POST['price'];
$cat_id = (int)$_POST['cat_id'];
if ($_SESSION['user_id'])    
{   
    if ($_POST){
        
 
        $picture = '';

   if($_FILES){
       $tmp_name = $_FILES['picture']['tmp_name'];
       $file_name = $_FILES['picture']['name'];
       $dir ='/uploads/';
       $file_new_name = $_SERVER['DOCUMENT_ROOT'].$dir;
       $full_path = $file_new_name.$file_name;
       if (move_uploaded_file($tmp_name,$full_path)){
           $picture = $file_name;
       }
   }
        $query = "INSERT INTO products VALUES (null,'$name', '$code' ,'$body',$cat_id, '$picture',NOW(),'','show','$price')";
        $result = mysqli_query($dbconnect, $query);
        if(!$result){
            exit($query);
        }
                    ?>
        <script>
            document.location.href = 'cabinet.php'

        </script>
        <?php
    }
?>
<form class="col-lg-9" enctype = "multipart/form-data" method="post" class = "form2" action="cabinet.php">

         
            <div class="form-group">
                <label for="name">Название</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="введите название">
            </div>
           
            <div class="form-group">
                <label for="password">Код продукции</label>
                <input  type="text" class="form-control" id="code" name="code" placeholder="введите код продукции">
            </div> 
            <div class="form-group">
                <label for="name">Цена</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="введите цену">
            </div>
            <textarea id="editor" class="form-control ckeditor" name="body"  rows="3"></textarea>
             <div class="form-group">
                <label for="name">Фото</label>
            <input type = "file" name="picture">
    </div>
            <select class="form-control" name="cat_id">
  <?php
    $query = "SELECT * FROM categories WHERE showhide = 'show'";
    $cat = mysqli_query($dbconnect,$query);
    if(!$cat){
        exit($query);
    }
    while($arr = mysqli_fetch_array($cat)){
        ?>
        <option value = "<?=$arr['id'];?>">
        <?=$arr['name'];?>
    </option>
    <?php
    }?>
</select>               

            <button type="submit" class="btn btn-default">Добавить</button><br>
    <a href="#" id="google_parse" class="btn btn-default">Поиск изображений</a>
    <div id="pusto"></div>
        </form>

        <?php
        }else {
    echo "Ошибка входа";
            exit('Error query');
}
?>
<script src="pursing.js"></script>
<?require_once('templades/bottom.php');?>
<script src="ckeditor/ckeditor.js"></script>
