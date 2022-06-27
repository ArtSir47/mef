<?php
include '../functions.php';
header_natec(
    'Platform architecture',
    '/plugin_basics/platform_architecture.php',  // $url_ru,
    '/uk/plugin_basics/platform_architecture.php', // $url_uk,
    '/en/plugin_basics/platform_architecture.php'  // $url_en
);
?>

    <div class="container container-sidebar">
        <?php sidebar_natec(); ?>
        <div class="content">

            <h1>Platform architecture</h1>

            <p>The platform architecture separates the services and business logic of standardized approaches from the custom business logic of the developer of a specific plugin, and thereby providing the ability to reuse plugins by other developers in their plugins (through the principles of MEF exposure)</p>
            <img src="http://mef.dev/images/image100510.jpg">
            <p></p>
            <p>An important advantage is the principles of exposure based on MEF, which, together with the conversion of custom data models to generally accepted (canonical) ones, give <b> the possibility of agile development by various developers without diving into the details of the final implementation, including the data layer.</b>:</p>
            <img src="http://mef.dev/images/image100511.jpg">
            <p></p>
            <p></p>
            <img src="http://mef.dev/images/image7.jpg">
            <p></p>
            <p>In addition to the advantages of reusing plugins, the platform allows external use of plugins through an automatically generated REST interface for plugins - this approach makes it possible to quickly integrate "old" systems without the need for revision on their side:</p>
            <img src="http://mef.dev/images/image100513.jpg">
        </div>
    </div>

<?php

footer_natec();
?>