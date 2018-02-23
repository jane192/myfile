<?php
require_once ('config/config.php');
require_once ('phpQuery/phpQuery/phpQuery.php');
$query = "SELECT * FROM products WHERE pictury = ''";
$cat = mysqli_query($dbconnect, $query);
if(!$cat){
    exit('Error query');

}
while($arr = mysqli_fetch_array($cat)){
    echo $arr['name'];
    $str = @str_replace(" ", "+",$arr['name']);
    $path = "http://www.google.by/search?q=$str&rlz=1C1CHMO_ruBY785BY785&source=lnms&tbm=isch&sa=X&ved=0ahUKEwjL_862w7zZAhWCchQKHeV6BmUQ_AUICigB&biw=1600&bih=799";
    echo "<br>".$path."<br/>";
    $hap = file_get_contents($path);
    $document = phpQuery::newDocument($hap);
    $hentry = $document -> find('.images_table img:eq(2)')-> attr('src');
    echo $hentry;
    $dir =$_SERVER['DOCUMENT_ROOT'].'/uploads/';
    $name_picture = date('y_m_d_h_i_s').'.jpg';
    if (!copy($hentry,$dir.$name_picture)){
        echo"<div style = 'color:red'>Не получилось</div>";
    }
    $query = "UPDATE products SET pictury ='$name_picture' WHERE id = ".$arr['id'];
    $cat = mysqli_query($dbconnect,$query);
    if (!$cat){
        echo"Error Update <br/>";
    }


    sleep(1);
    echo"<hr/>";
}

echo 'ok';