<?php
require_once ('config/config.php');
$id = (int)$_POST['id'];
$query = "SELECT * FROM products WHERE id = $id";
$result = mysqli_query($dbconnect, $query);
if (!$result){
    exit('Error query');

   }
$arr = mysqli_fetch_array($result);
echo $arr['body'];?>
    <div>
                    <a href="#" class="link" data_id="<?=$arr['id'];?>"><img src="uploads/<?=$arr['pictury'];?>" alt=" " width=200px></a>
                    <ficaption class=""> <?=$arr['body'];?></ficaption>
</div>
<?
?>
<form class= forma method="get" class = "form2" action="addCart.php">
    <input type="number" name="count" value="1" steep="1" min="0">
    <input type ="hidden" value = "<?=$id;?>" name = "id"/>
        <button type="submit" class="btn btn-default button">Добавить</button>
        </form>

