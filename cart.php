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
    </div>
<?
require_once('templades/bottom.php'); ?>