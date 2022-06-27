<?php
    include 'functions.php';
    header_natec(
        '',
        '',  // Ccылка на перевод RU,
        '', // Ccылка на перевод UA,
        ''  // Ccылка на перевод EN
    );

?>
 <div role="main">
    <article class="content wrap" id="_content" data-uid="">

    <?php
    $url_check = $_SERVER['REQUEST_URI'];
    $url_check_element = explode("/", $url_pars);

    if(($url_check_element[2] == 'dev_guides') OR ($url_check_element[1] == 'dev_guides')) { ?>

    
    <div class="container container-sidebar">
        <?php sidebar_natec(); ?>
        <div class="content">
            <?php

            $url = $_SERVER['REQUEST_URI'];
            $url = ltrim( $url, '/' );

            require_once 'parsedown-master/Parsedown.php';

            $parsdown = new Parsedown();

            $text = file_get_contents($url);

            echo $parsdown->text($text);

            ?>
        </div>
    </div>

    <?
    } else {
    ?>
        <div class="container container-nosidebar">
            <?php

            $url = $_SERVER['REQUEST_URI'];
            $url = ltrim( $url, '/' );

            require_once 'parsedown-master/Parsedown.php';

            $parsdown = new Parsedown();

            $text = file_get_contents($url);

            echo $parsdown->text($text);

            ?>
        </div>
    

    <?php
    }
    ?>

</article>
</div>

<?php

footer_natec();