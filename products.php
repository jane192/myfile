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
        <h3><?=$arr['name'];?></h3>
        <?
        ?>
        <img src="uploads/<?=$arr['picture'];?>" alt="">
        <?
  } 
            


    
     
       
   require('templades/bottom.php');?>