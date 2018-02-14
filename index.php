<?require('templades/top.php');
  if(isset($_GET['url'])){
      $url = $_GET['url'];
  } else{
    $url = 'index';
}

     $query = "SELECT * FROM maintexts WHERE url = '$url'";

     $adr = mysqli_query($dbconnect, $query);
     if (!$adr){
         exit('Error query');
     }
     $arr = mysqli_fetch_array($adr);
     ?>
    <main>
        <div class="center col-lg-9 ">

            <h2><?=$arr['name'];?></h2>
           <div><?=$arr['body'];?></div>

            <div class="news">
                <h2>Новости</h2>
                <ul>
                    <li>
                        <figure>

                            <img src="images/photo11.jpg" alt="hurts">
                            <ficaption>
                                Группа Hurts представила клип на песню Chaperone
                                <a href="#"><button type="button" class="btn btn-warning">Читать</button></a>

                            </ficaption>
                        </figure>
                    </li>
                    <li>
                        <figure><img src="images/photo12.jpg" class="photo2" alt="hurts">
                            <ficaption>
                                Hurts выпустили концертное видео “Nothing Will Be Bigger Than Us”</ficaption>
                            <a href="#"><button type="button" class="btn btn-warning">Читать</button></a></figure>
                    </li>
                    <li>
                        <figure><img src="images/photo13.jpg" class="photo3" alt="hurts">
                            <ficaption>
                                Hurts выпустили клип Ready to Go</ficaption>
                            <a href="#"><button type="button" class="btn btn-warning">Читать</button></a></figure>
                    </li>
                    <li>
                        <figure><img src="images/photo14.jpg" class="photo4" alt="hurts">
                            <ficaption>
                                Hurts выпустили клип на песню Beautiful Ones</ficaption>
                            <a href="#"><button type="button" class="btn btn-warning">Читать</button></a></figure>
                    </li>
                </ul>
            </div>
       
   <?require('templades/bottom.php');?>