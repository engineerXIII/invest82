<h2>
    Новые бизнесы на продажу
    <span type="button" class="btn btn-info">
        Всего <span class="badge badge-light"><?=$stat['submit_products_count']?></span>
    </span>
</h2>
<ul class="pagination justify-content-center">
    <?php $dp = (isset($from)and$from>0) ? '' : 'disabled';
    $dn = (isset($to) and $to>1) ? '' : 'disabled'?>
    <li class="page-item <?=$dp?>"><a class="page-link" href="<?=Route::$url?>/?page=<?= $from?>"> ← Назад</a></li>
    <li class="page-item <?=$dn?>"><a class="page-link" href="<?=Route::$url?>/?page=<?= $to?>">Вперед →</a></li>
</ul>


<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th>#</th>
            <th></th>
            <th></th>
            <th>Название</th>
            <th>Метка</th>
            <th>Стоимость</th>
            <th>Доход</th>
            <th>Регион</th>
            <th>Добавлен</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($table as $k => $arr)
        {
            list( $id, $name, $cost, $earn, $regionName, $address, $about, $added, $conf, $customer, $customer_tel) = $arr;
            echo '<tr><td>'.$id.'</td><td><a class=" btn-link" href="/manager/submit_product/?entry='.$id.'">Одобрить</a></td><td><a class=" btn-link" href="/manager/?action=delete&table=submit_products&entry='.$id.'">Удалить</a></td><td>'.$name.'<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse_cat_'.$id.'" aria-expanded="false" aria-controls="#collapse_cat_'.$id.'">
            Подробнее
        </button>
        <div id="collapse_cat_'.$id.'" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
        <table class="table-borderless col-xs-6 col-md-6 col-lg-6 col-xl-6">
            <tr>
            <td class=" col-md-6 col-lg-6 col-xl-6 "><b class="d-inline">Клиент</b> : </td><td>'.$customer.'</td>
        </tr>
        <tr>
            <td class=" col-md-6 col-lg-6 col-xl-6 "><b class="d-inline">Номер моб. телефона</b> : </td><td>'.$customer_tel.'</td>
        </tr>
        <tr>
            <td><b class="d-inline">Адресс</b> : </td><td> '.$address.'</td>
        </tr>
    </table>
           '.$about.'
    </div></td><td>'.$conf.'</td><td>'.$cost.'</td><td>'.$earn.'</td><td>'.$regionName.'</td><td>'.$added.'</td></tr>';
        }?>
        </tbody>
    </table>
</div>