<?php
require_once('templades/top.php'); ?>
    <main>


    <div class="center col-lg-9 ">
        <h2>Выбранные товары</h2>
        <table class="table table-bordered table-striped" width="100%">
            <tr>
                <td width="200px">Фото</td>
                <td>Название</td>
                <td>Количество</td>
                <td>Цена</td>
                <td>Сумма</td>
                <td>Действие</td>
            </tr>


            <?
            $itog = 0;

            if ($_COOKIE) {
                foreach ($_COOKIE as $key => $value) {
                    $id = (int)$key;
                    if ($id > 0) {

                        $query = "SELECT * FROM products WHERE id=$id";
                        $result = mysqli_query($dbconnect, $query);
                        if (!$result) {
                            exit('error query');
                        }
                        $arr = mysqli_fetch_array($result);
$summa = $arr['price'] * $value;
                        $itogo +=$summa;
                        ?>
                        <tr>
                            <td width="200">
                                <a href="#" class="link" data_id="<?= $arr['id']; ?>"><img
                                        src="uploads/<?=$arr['pictury']; ?>" alt=" " width=200px></a>

                            </td>
                            <td><?=$arr['name'] ?></td>
                            <td><?=$value ?></td>
                            <td><?=$arr['price'] ?></td>
                            <td><?=$summa?></td>
                            <td><form action ="addCart.php" type="get">
                                    <input type="hidden" name="id" value="<?=$id;?>">
                                    <button type="submit" class="btn btn-default button">Удалить</button>
                                </form></td>
                        </tr>

                        <?
                    }
                }
            }
            ?>
            <tr>
                <td> </td>
                <td> </td>
                <td> </td>
                <td>Итого</td>
                <td><?=$itogo?></td>
                <td> </td>
            </tr>
        </table>
        <form method="post" class = "form3" enctype = "multipart/form-data" action="order.php">
            <div class="form-group">
                <label for="email">Email address</label>
                <input  type="text" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input  type="text" class="form-control" id="phone" name="phone" placeholder="Телефон">
            </div>
            <div class="form-group">
            <label for="others">Others</label>
            <textarea name="others" id="editor" class=" ckeditor" placeholder="Комментарии"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Подтвердить</button>

        </form>
        <div class ="thank">
            <?
             if($_GET['url']){
                 echo $_GET['url'];
             }
            ?>
        </div>

</div>




<?
require_once('templades/bottom.php'); ?>
        <script src="ckeditor/ckeditor.js"></script>
