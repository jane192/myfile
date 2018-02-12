<? require('templades/top.php');
if ($_SESSION['user_id']){   


   
?>
<form encode = "multipart/form-data" method="post" class = "form2" action="cabinet.php">

         
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
            <textarea id="editor" class="form-control ckeditor" rows="3">Описание</textarea>
             <div class="form-group">
                <label for="name">Фото</label>
            <input type = "file" >
    </div>
            <select class="form-control">
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

            <button type="submit" class="btn btn-default">Добавить</button>
        </form>
        <?php
        }else {
    echo "Ошибка входа";
            exit('Error query');
    
}?>
<?require_once('templades/bottom.php');?>
<script src="ckeditor/ckeditor.js"></script>