<?require('templades/top.php');?>

    

            <div class="news">
                <h2>Продукты</h2>


            </div>
            <?
$query = "SELECT * FROM products WHERE showhide = 'show'";
$cat = mysqli_query($dbconnect,$query);
if(!$cat){
    exit($query);}
    while($arr = mysqli_fetch_array($cat)){
        ?>
                <h3>
                    <?=$arr['name'];?>
                </h3>                
               
                <div>
                    <a href="#" class="link" data_id="<?=$arr['id'];?>"><img src="uploads/<?=$arr['pictury'];?>" alt=" " width=200px></a>
                    <ficaption class=""> <?=$arr['body'];?></ficaption>
                </div>
                <?
  }        
   require('templades/bottom.php');?>
