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
        </div>
        <div class="widgets col-lg-3">
            <div class="search">
                <h2>Поиск</h2>
                <form action=""><input type="text" placeholder="Поиск по сайту">
                    <a href="#"><i class=" glyphicon glyphicon-search "></i></a>
                </form>
            </div>
            <div class="mini_news">
                <h2>Новости</h2>
                <ul>
                    <li>
                        <figure class="mini_new">

                            <img src="images/photo11.jpg" alt="hurts">
                            <ficaption>
                                <p class="text">Группа Hurts представила клип на песню Chaperone</p>
                                <a href="#"><i class=" glyphicon glyphicon-circle-arrow-right"></i></a>

                            </ficaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="mini_new"><img src="images/photo12.jpg" alt="hurts">
                            <ficaption>
                                <p class="text">Hurts выпустили концертное видео “Nothing Will Be Bigger Than Us”</p>

                                <a href="#"><i class=" glyphicon glyphicon-circle-arrow-right"></i></a></ficaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="mini_new"><img src="images/photo13.jpg" alt="hurts">
                            <ficaption>
                                <p class="text">Hurts - Ready to Go</p>
                                <a href="#"><i class=" glyphicon glyphicon-circle-arrow-right"></i></a></ficaption>
                        </figure>
                    </li>
                    <li>
                        <figure class="mini_new"><img src="images/photo14.jpg" alt="hurts">
                            <ficaption>
                                <p class="text">Hurts выпустили клип на песню Beautiful Ones</p>
                                <a href="#"><i class=" glyphicon glyphicon-circle-arrow-right"></i></a></ficaption>
                        </figure>
                    </li>
                </ul>
            </div>
            <!--pogoda.by-->
            <!--Информер распространяется свободно и на безвозмездной основе. Однако, в случае изменения кода информера (в частности, удаления ссылок), POGODA.BY снимает с себя ответственность за конечный результат.-->

            <table width="100%" height="180" style="background-color:#f2f2f2; border: #cccccc 1px solid; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="2" cellspacing="0">
                <tr>
                    <td><a href="http://6.pogoda.by/26850" style="font-family:Tahoma; font-size:12px; color:#003399;" title="Погода Минск на 6 дней - Гидрометцентр РБ" target="_blank">Погода Минск</a>
                    </td>
                </tr>
                <tr>
                    <td>

                        <table width=100% height=100% style="background-color:#f2f2f2; font-family:Tahoma; font-size:12px; color:#000000;" cellpadding="0" cellspacing="0">
                            <tr>
                                <td>
                                    <script type="text/javascript" charset="windows-1251" src="http://pogoda.by/meteoinformer/js/26850_3.js"></script>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>

                <tr>
                    <td align="right">Информация сайта <a href="http://www.pogoda.by" target="_blank" style="font-family:Tahoma; font-size:12px; color:#003399;">pogoda.by</a>
                    </td>
                </tr>
            </table>
        </div>
    </main>
   <?require('templades/bottom.php');?>
