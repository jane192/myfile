<?require('templades/top.php');?>

    <main>
        <div class="center col-lg-9 ">

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
                    <?=$arr['code'];?>
                </div>
                <div>
                    <?=$arr['body'];?>
                </div>
                <div>
                    <a href="#" class="link" data_id="<?=$arr['id'];?>"><img src="uploads/<?=$arr['pictury'];?>" alt=" " width=200px height = 150px></a>
                    <div class="left"> <?=$arr['body'];?></div></div>
                <?
  }        
   require('templades/bottom.php');?>
