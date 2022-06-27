<?php
$url  = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url  = parse_url($url, PHP_URL_PATH);
$lang = explode("/", $url);
$lang = $lang[1];

if ($lang == 'uk') { ?>
    <div class="sidebar">
        <ul>
            <li class="sidebar-header">Plugin basics</li>
            <li class="sidebar-parent"><a class="sidebar-parent-a" href="https://mef.dev/uk/plugin_basics/introduction.php">Вступ</a>
                <ul>
                    <li><a href="#unibill_cloud_platform">Serverless Platform</a></li>
                    <li><a href="#entities">Сутності як унікальні шляхи</a></li>
                    <li><a href="#openapi_format">Формат OpenAPI</a></li>
                    <li><a href="#appointment_mef">Призначення MEF</a></li>
                </ul>
            </li>
            <li class="sidebar-parent"><a href="https://mef.dev/uk/plugin_basics/platform_architecture.php">Архітектрура платформи</a></li>

            <!-- <li class="sidebar-header">Backend & UIs plugin</li>
            <li class="sidebar-parent"><a class="sidebar-parent-a" href="https://mef.dev/uk/dev_guides/first_backend_plugin.md">Перший Backend плагін</a>
                <ul>
                    <li><a href="#creation">Створення плагіну на підставі шаблону</a></li>
                    <li><a href="#registration">Реєстрація плагіну на платформі</a></li>
                    <li><a href="#versioning">Версійність змін плагіну</a></li>
                </ul>
            </li>
            <li class="sidebar-parent"><a class="sidebar-parent-a" href="https://mef.dev/uk/dev_guides/first_ui_plugin.md">Перший UI плагін</b>
                    <ul>
                        <li><a href="#creation">Створення плагіну на підставі шаблону</a></li>
                        <li><a href="#overview">Огляд проекту</a></li>
                        <li><a href="#publication">Публікація UI плагіну на платформу</a></li>
                    </ul>
            </li>-->

            <li class="sidebar-header">Plugin guides</li>
            <li class="sidebar-parent"><a class="sidebar-parent-a" href="https://mef.dev/uk/dev_guides/first_ui_plugin.md">Перший UI плагін</b>
                    <ul>
                        <li><a href="#1-creation-angular-project">Створення Angular проекту</a></li>
                        <li><a href="#2-adding-dependencies">Додавання залежностей</a></li>
                        <li><a href="#3-changing-the-base-selector">Зміна базового селектору плагіна</a></li>
                        <li><a href="#4-routing-changes">Зміна роутінгу</a></li>
                        <li><a href="#5-creating-of-first-component">Створення першої компоненти</a></li>
                        <li><a href="#6-specification-file-version-json">Файл специфікації version.json</a></li>
                        <li><a href="#7-build-and-deploy">Збірка та публікація</a></li>
                    </ul>
            </li>
            <li class="sidebar-parent"><a class="sidebar-parent-a" href="https://mef.dev/uk/dev_guides/upload_ui_plugin.md">Регістрація плагіну</a>
                <ul>
                    <li><a href="#package-registration-into-platform">Реєстрація на платформі</a></li>
                    <li><a href="#configuration-of-package">Налаштування плагіну</a></li>
                    <li><a href="#general-settings">Блок General</a></li>
                    <li><a href="#dependencies-settings">Блок Dependencies</a></li>
                    <li><a href="#router-links-settings">Блок Router Links</a></li>
                    <li><a href="#uploading-version-of-package">Завантаження плагіну</a></li>
                    
                </ul>
            </li>
            <li class="sidebar-parent"><a class="sidebar-parent-a" href="https://mef.dev/uk/dev_guides/first_backend_plugin.md">Перший Backend плагін</a>
                <ul>
                    <li><a href="#repository-cloning">Клонування репозиторію</a></li>
                    <li><a href="#content-overview">Огляд проекту</a></li>
                    <li><a href="#build">Збірка плагіна</a></li>
                    <li><a href="#registration-package">Реєстрація плагіну</a></li>
                    <li><a href="#uploading-version-of-package">Завантаження плагіну</a></li>
                    <li><a href="#package-dry-run">Перевірка працездатності</a></li>
                </ul>
            </li>
            <li class="sidebar-parent"><a class="sidebar-parent-a" href="https://mef.dev/uk/dev_guides/portal_plugin.md">Cтворення Portal плагіну</a>
                <ul>
                    <li><a href="#portal-type-of-package">Тип плагіну Portal</a></li>
                    <li><a href="#class-platformconnectorservice">class PlatformConnectorService</a></li>
                    <li><a href="#interface-ihttpservice">interface IHttpService</a></li>
                    <li><a href="#translation-implementation">Реалізація перекладу</a></li>
                    <li><a href="#npm-скрипти">npm скрипти</a></li>
                    <li><a href="#generate-version-file">Версійність плагіну</a></li>   
                </ul>
            </li>
            

            <li class="sidebar-header">REST API</li>
            <li class="sidebar-parent"><a class="sidebar-parent-a" href="https://mef.dev/uk/rest_api/using_rest_api.php">Використання REST API</a>
                <ul>
                    <li><a href="#general_ap">Загальний підхід</a></li>
                    <li><a href="#interactions">Background API взаимодействия</a></li>
                    <li><a href="#idempotency">Ідемпотентність: логіка обробки параметра global_unique_id</a></li>
                    <li><a href="#api_authorization">Авторизація API</a></li>
                    <li><a href="#date_format">Формат дати та часу для параметрів API</a></li>
                    <li><a href="#api_methods">Методи API</a></li>
                </ul>
            </li>
            <li class="sidebar-parent"><a class="sidebar-parent-a" href="https://mef.dev/uk/rest_api/api_caching.php">Кешування API</a>
                <ul>
                    <!--            <li><a href="#modified_since_one">Example GET request-response without If-Modified-Since</a></li>-->
                    <!--            <li><a href="#modified_since_two">GET request-response example with an If-Modified-Since indication</a></li>-->
                </ul>
            </li>
            <li class="sidebar-parent">
                <a class="sidebar-parent-a" href="https://mef.dev/uk/rest_api/http_method_request_formats.php">Формати запитів для HTTP-методів</a>
                <ul>
                    <li><a href="#paragraph_1">HTTP GET: Getting a list of elements of type Entity</a></li>
                    <li><a href="#paragraph_2">HTTP GET: Getting a specific Element of the Entity Type</a></li>
                    <li><a href="#paragraph_3">HTTP PUT: Editing an Entity Type Element</a></li>
                    <li><a href="#paragraph_4">HTTP POST: Creating a new Element of Entity Types</a></li>
                    <li><a href="#paragraph_5">HTTP POST: Doing an Action for Element of Entity Types</a></li>
                    <li><a href="#paragraph_6">HTTP POST: Creating an new element Sub-Entity of Types</a></li>
                    <li><a href="#paragraph_7">HTTP DELETE: Deleting the element of Entity Types</a></li>
                    <li><a href="#paragraph_8">HTTP PATCH: Partially editing the element of Entity Types</a></li>
                    <li><a href="#paragraph_9">Handling Errors When Calling HTTP Methods</a></li>
                </ul>
            </li>
        </ul>
    </div>
<?php }
 else { ?>
<div class="sidebar">
    <ul>
       <li class="sidebar-header">Plugin basics</li>
       <li class="sidebar-parent"><a class="sidebar-parent-a" href="https://mef.dev/plugin_basics/introduction.php">Introduction</a>
           <ul>
               <li><a href="#unibill_cloud_platform">Serverless Platform</a></li>
               <li><a href="#entities">Entities as unique resources</a></li>
               <li><a href="#openapi_format">OpenAPI format</a></li>
               <li><a href="#appointment_mef">MEF purpose</a></li>
           </ul>
       </li>
       <li class="sidebar-parent"><a href="https://mef.dev/plugin_basics/platform_architecture.php">Platform architecture</a></li>

            <li class="sidebar-header">Plugin guides</li>
            <li class="sidebar-parent"><a class="sidebar-parent-a" href="https://mef.dev/dev_guides/first_ui_plugin.md">First UI package</b>
                    <ul>
                        <li><a href="#1-creation-angular-project">Creation Angular project</a></li>
                        <li><a href="#2-adding-dependencies">Adding dependencies</a></li>
                        <li><a href="#3-changing-the-base-selector">Changing the base selector</a></li>
                        <li><a href="#4-routing-changes">Routing changes</a></li>
                        <li><a href="#5-creating-of-first-component">Creating of first component</a></li>
                        <li><a href="#6-specification-file-version-json">Specification file version.json</a></li>
                        <li><a href="#7-build-and-deploy">Build and Deploy</a></li>
                    </ul>
            </li>
            <li class="sidebar-parent"><a class="sidebar-parent-a" href="https://mef.dev/dev_guides/upload_ui_plugin.md">Package registration</a>
                <ul>
                    <li><a href="#package-registration-into-platform">Registration into platform</a></li>
                    <li><a href="#configuration-of-package">Package configuration</a></li>
                    <li><a href="#general-settings">General setting</a></li>
                    <li><a href="#dependencies-settings">Dependencies setting</a></li>
                    <li><a href="#router-links-settings">Router Links setting</a></li>
                    <li><a href="#uploading-version-of-package">Package uploading</a></li>
                    
                </ul>
            </li>
            <li class="sidebar-parent"><a class="sidebar-parent-a" href="https://mef.dev/dev_guides/first_backend_plugin.md">Fisrt Backend package</a>
                <ul>
                    <li><a href="#repository-cloning">Clon repo</a></li>
                    <li><a href="#content-overview">Content overview</a></li>
                    <li><a href="#build">Build</a></li>
                    <li><a href="#registration-package">Package registration</a></li>
                    <li><a href="#uploading-version-of-package">Package uploading</a></li>
                    <li><a href="#package-dry-run">Dry run</a></li>
                </ul>
            </li>
            <li class="sidebar-parent"><a class="sidebar-parent-a" href="https://mef.dev/dev_guides/portal_plugin.md">Portal package creation</a>
                <ul>
                    <li><a href="#portal-type-of-package">Portal type</a></li>
                    <li><a href="#class-platformconnectorservice">class PlatformConnectorService</a></li>
                    <li><a href="#interface-ihttpservice">interface IHttpService</a></li>
                    <li><a href="#translation-implementation">Translation</li>
                    <li><a href="#npm-скрипти">npm scripts</a></li>
                    <li><a href="#generate-version-file">Versioning</a></li>   
                </ul>
            </li>

        <li class="sidebar-header">REST API</li>
        <li class="sidebar-parent"><a class="sidebar-parent-a" href="https://mef.dev/rest_api/using_rest_api.php">Using of REST API</a>
        <ul>
            <li><a href="#general_ap">General approach</a></li>
            <li><a href="#interactions">Background interaction API</a></li>
            <li><a href="#idempotency">Idempotency: logic for processing the global_unique_id parameter</a></li>
            <li><a href="#api_authorization">API Authorization</a></li>
            <li><a href="#date_format">Date and time format for API parameters</a></li>
            <li><a href="#api_methods">API methods</a></li>
        </ul>
        </li>
        <li class="sidebar-parent"><a class="sidebar-parent-a" href="https://mef.dev/rest_api/api_caching.php">API caching</a>
        <ul>
<!--            <li><a href="#modified_since_one">Example GET request-response without If-Modified-Since</a></li>-->
<!--            <li><a href="#modified_since_two">GET request-response example with an If-Modified-Since indication</a></li>-->
        </ul>
        </li>
        <li class="sidebar-parent">
            <a class="sidebar-parent-a" href="https://mef.dev/rest_api/http_method_request_formats.php">Request Formats for HTTP Methods</a>
            <ul>
                <li><a href="#paragraph_1">HTTP GET: Getting a list of elements of type Entity</a></li>
                <li><a href="#paragraph_2">HTTP GET: Getting a specific Element of the Entity Type</a></li>
                <li><a href="#paragraph_3">HTTP PUT: Editing an Entity Type Element</a></li>
                <li><a href="#paragraph_4">HTTP POST: Creating a new Element of Entity Types</a></li>
                <li><a href="#paragraph_5">HTTP POST: Doing an Action for Element of Entity Types</a></li>
                <li><a href="#paragraph_6">HTTP POST: Creating an new element Sub-Entity of Types</a></li>
                <li><a href="#paragraph_7">HTTP DELETE: Deleting the element of Entity Types</a></li>
                <li><a href="#paragraph_8">HTTP PATCH: Partially editing the element of Entity Types</a></li>
                <li><a href="#paragraph_9">Handling Errors When Calling HTTP Methods</a></li>
            </ul>
        </li>
    </ul>
</div>
<?php } ?>

<script>
    let locations = document.location.href
    let elem = document.querySelectorAll('.sidebar-parent .sidebar-parent-a')

    elem.forEach(function(userItem) {
        let h = userItem.href
        if(locations !== h) {
            let s = userItem.nextElementSibling
            s.style.display = "none"
        }
    })

    let linkNav = document.querySelectorAll('[href^="#"]')
    let V = 0.2

    for (var i = 0; i < linkNav.length; i++) {
        linkNav[i].addEventListener('click', function(e) {
            e.preventDefault();
            let w = window.pageYOffset
            let hash = this.href.replace(/[^#]*(.*)/, '$1')
            let t = document.querySelector(hash).getBoundingClientRect().top - 100
            let start = null

            console.log(t);

            requestAnimationFrame(step);

            function step(time) {
                if (start === null) start = time;
                let progress = time - start
                let r = (t < 0 ? Math.max(w - progress/V, w + t) : Math.min(w + progress/V, w + t))
                window.scrollTo(0,r)

                if (r != w + t) {
                    requestAnimationFrame(step)
                } else {
                    location.hash = hash
                }
            }
        }, false)
    }
</script>