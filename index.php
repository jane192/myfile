<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Hurts</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic" rel="stylesheet">

</head>

<body>
    <?require('templades/top.php');?>
        <main>
            <div class="center col-lg-9 ">
                <h2>Альбомы</h2>
                <div id="carousel-example-generic" class="carousel slide alboms " data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <a href="#"><img src="images/photo1.JPG" alt="albom1"></a>
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/photo2.jpg" alt="albom2"></a>
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/photo3.png" alt="albom3"></a>
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/photo4.jpg" alt="albom4"></a>
                            <div class="carousel-caption">

                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
                </div>
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
