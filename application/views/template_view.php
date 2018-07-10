<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Администрирование</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="/assets/css/manager_dashboard.css" rel="stylesheet">
    <script src="/assets/js/default.js"></script>
</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">Invest82.ru</a>
    <ul class="nav px-3">
        <span class="navbar-text">
            <?=$_SESSION['name']?>
        </span>
        <li class="nav-item text-nowrap">
            <a class="nav-link text-white" href="/log/out/">Выйти</a>
        </li>
    </ul>
</nav>
<div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        Главная панель
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" role="button" href="#database_static" aria-expanded="false" aria-controls="database_static">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                        Статичные данные
                    </a>
                </li>
                <li class="collapse" id="database_static">
                    <ul class="flex-column" style="padding: 0px 0 0 40px">
                        <li class="nav-item">
                            <a class="nav-link d-flex justify-content-between" href="/show/region">
                                Регионы
                                <span>
                                    <span class="badge badge-success"><?php echo $stat['regions_active_count'] ?? 0;?></span>
                                    <span class="badge badge-secondary"><?php echo $stat['regions_count'] ?? 0;?></span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex justify-content-between" href="/show/city">
                                Нас. пункты
                                <span>
                                    <span class="badge badge-success"><?php echo $stat['city_active_count'] ?? 0;?></span>
                                    <span class="badge badge-secondary"><?php echo $stat['city_count'] ?? 0;?></span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex justify-content-between" href="/show/cat">
                                Категории
                                <span>
                                    <span class="badge badge-success"><?php echo $stat['cat_active_count'] ?? 0;?></span>
                                    <span class="badge badge-secondary"><?php echo $stat['cat_count'] ?? 0;?></span>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex justify-content-between" href="/show/subcat">
                                Подкатегории
                                <span>
                                    <span class="badge badge-success"><?php echo $stat['subcat_active_count'] ?? 0;?></span>
                                    <span class="badge badge-secondary"><?php echo $stat['subcat_count'] ?? 0;?></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/show/products">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                        Продукты  <span class="badge badge-secondary"><?php echo $stat['products_count'] ?? 0;?></span>
                    </a>
                </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Новое</span>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="/show/submit_buyers">
                        Заявки на покупку <span class="badge badge-secondary"><?php echo $stat['submit_buyers_count'] ?? 0;?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show/submit_products">
                        Бизнесы на продажу <span class="badge badge-secondary"><?php echo $stat['submit_products_count'] ?? 0;?></span>
                    </a>
                </li>
            </ul>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Люди</span>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link" href="/show/brokers">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        Брокеры <span class="badge badge-secondary"><?php echo $stat['brokers_count'] ?? 0;?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show/buyers">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        Покупатели <span class="badge badge-secondary"><?php echo $stat['buyers_count'] ?? 0;?></span>
                        <span class="badge badge-info"><?php echo $stat['customers_brokers_count'] ?? 0;?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/show/customers">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                        Продавцы бизнесов <span class="badge badge-secondary"><?php echo $stat['customers_count'] ?? 0;?></span>
                    </a>
                </li>
            </ul>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                Семантика
            </h6>
            <ul class="nav flex-column mb-2 ">
                <li class="nav-item">
                    <a class="nav-link" href="/?action=update_filters">
                        Обновить фильтры
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/?action=update_translit">
                        Обновить транслитерацию <span class="badge badge-warning"  data-toggle="tooltip" data-placement="right" title="Действия могут ухудшить работу сайта у пользователей">Ресурсоемкое</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/submit/text/">
                        Задать тексты для параметров
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <?php include $content_view ?>
    </main>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>