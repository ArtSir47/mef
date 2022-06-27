<?php

$sitename = $_SERVER['SERVER_NAME'];

$url  = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url_pars  = parse_url($url, PHP_URL_PATH);
$lang = explode("/", $url_pars);
$lang = $lang[1];
global $lang;

$home_pages = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
if(($home_pages == 'https://mef.dev/') || ($home_pages == 'https://mef.dev/en/') || ($home_pages == 'https://mef.dev/uk/')) {
    if(!isset($_COOKIE['locale'])) {
        //$locale = locale_accept_from_http($_SERVER['HTTP_ACCEPT_LANGUAGE']);
        $sitesvariable = array(
            'ru_RU' => 'https://mef.dev/',
            'ru' => 'https://mef.dev/',
            'en_GB' => 'https://mef.dev/en/',
            'en' => 'https://mef.dev/en/',
            'uk' => 'https://mef.dev/uk/',
            'uk_UA' => 'https://mef.dev/uk/'
        );
        header('Location: ' . $sitesvariable[$locale]);
        setcookie('locale', $locale, time()+604800, '/');
    }
}

function header_natec(
    $title,
    $url_ru,
    $url_uk,
    $url_en
) {
    global $lang;

    $cur_url = $_SERVER['REQUEST_URI'];

    if (($cur_url !== '/en/') && ($cur_url !== '/uk/') && ($cur_url !== '/')) :
        if($lang == 'uk') {
            // отсекаем язык из строки запроса
            $urlbuild = substr($cur_url, 4);

            // убираем расширение
            $url_none_ex    = explode('.', $urlbuild);

            //проверяем файлы перевода
            $filesarray = array('md','php','html');

            // задаем пустые значения
            $url_en = '';

            foreach ($filesarray as $a) {
                $translite_file_en = '/' . $url_none_ex[0] .'.'. $a;

                $filesearch = $_SERVER["DOCUMENT_ROOT"] . str_replace('/', '\\', $translite_file_en) ;

                if(file_exists($filesearch)) {
                    $url_en .= $translite_file_en;
                    break;
                    
                }
            }

            //echo 'url_en '. $url_en . '<br>';

        }
        else {
            // убираем расширение
            $url_none_ex = explode('.', $cur_url);
        
            //проверяем файлы перевода
            $filesarray = array('md','php','html');

            // задаем пустые значения
            $url_uk = '';
            
            foreach ($filesarray as $a) {
                $translite_file_uk = '/uk' . $url_none_ex[0] .'.'. $a;

                $filesearch = $_SERVER["DOCUMENT_ROOT"] . str_replace('/', '\\', $translite_file_uk) ;
    
                if(file_exists($filesearch)) {
                    $url_uk .= $translite_file_uk;
                    break;
                }
            }

            //echo 'url_uk '. $url_uk . '<br>';

        }
    
    endif;

    include 'header.php';

    ## crumbs

    $crumbs  = array();

    if (!empty($urls) && $cur_url != '/') {

        $last_key = end($urls); //останній елемент массиву

        if (($cur_url !== '/uk/') && ($cur_url !== '/en/')) {
            foreach ($urls as $key => $value) {

                $prev_urls = array();

                for ($i = 0; $i <= $key; $i++) {
                    $prev_urls[] = $urls[$i];
                }

                if ($prev_urls[$key]) {

                    if ($key == count($urls) - 1) {
                        $crumbs[$key]['url'] = '';
                    }

                    elseif (!empty($prev_urls)) {
                        $crumbs[$key]['url'] = count($prev_urls) > 1 ? implode('/', $prev_urls) : '/';
                    }

                    if ($crumbs[$key]['text'] !== $last_key) {
                        if ($lang == 'uk') {
                            $first_backend_plugin = 'Перший Backend плагін';
                            $tutorials            = 'Підручник';
                            $first_ui_plugin      = 'Перший UI плагін';
                            $home                 = 'Головна';
                        }
                        elseif ($lang == 'en') {
                            $first_backend_plugin = 'Перший Backend плагін';
                            $tutorials            = 'Підручник';
                            $first_ui_plugin      = 'Перший UI плагін';
                            $home                 = 'Home';
                        }
                        else {
                            $first_backend_plugin = 'Первый Backend плагин';
                            $tutorials            = 'Учебник';
                            $first_ui_plugin      = 'Первый UI плагин';
                            $home                 = 'Главная';
                        }
                    }

                    switch ($value) {
                        case 'tutorials' : $crumbs[$key]['text'] = $tutorials;
                            break;
                        case $last_key : $crumbs[$key]['text'] = $title;
                            break;
                        case 'first_backend_plugin' : $crumbs[$key]['text'] = $first_backend_plugin;
                            break;
                        case 'first_ui_plugin' : $crumbs[$key]['text'] = $first_ui_plugin;
                            break;
                        case 'dev_guides' : $crumbs[$key]['text'] = 'Guides for plugins';
                            break;
                        case 'plugin_basics' : $crumbs[$key]['text'] = 'Plugin basics';
                            break;
                        case 'rest_api' : $crumbs[$key]['text'] = 'Rest API';
                            break;
                        case 'bss' : $crumbs[$key]['text'] = 'BSS domain models';
                            break;
                        default : $crumbs[$key]['text'] = $home;
                            break;
                    }
                }
            } //end foreach
        }
    }
    
    
    ?>

    <?php if (!empty($crumbs)) { ?>
    <div class="breadcrumb-box">
        <div class="container">
            <ul class="breadcrumb">
                <?php
                $crumb_last = end($crumbs);
                ?>

                <?php

                if(($lang !== 'en') and ($lang !== 'uk')) {
                    echo '<li><a href="/">'. $home .'</a></li>';
                }
                ?>

                <?php

                foreach ($crumbs as $item) { ?>
                    <?php if (isset($item)) { ?>
                        <?php if($item !== $crumb_last) { ?>
                            <li>
                                <a href="<?php echo $item['url'] ?>"><?php echo $item['text'] ?></a>
                            </li>
                        <?php } else {?>
                            <li>
                                <?php echo $item['text'] ?>
                            </li>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
    </div>
    <?php } ?>

<?php }


function debug($dumps) {
    if($_GET['debug']) {
        echo '<pre>';
        var_dump($dumps);
        echo '</pre>';
    }
}

function footer_natec() {
    include 'footer.php';
}

function sidebar_natec() {
    include 'sidebar.php';
}