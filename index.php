<?php
include 'functions.php';
header_natec(
    'Створення плагіну на підставі шаблону',
    '/',  // Ccылка на перевод RU,
    '/uk/', // Ccылка на перевод UA,
    '/en/'  // Ccылка на перевод EN
);
?>
    <div role="main">
        <article class="content wrap" id="_content" data-uid="">
            <div class="first-screen">
                <div class="container">
                    <div class="first-screen-text-d">
                        Digital Transformation <span>Serverless platform</span>
                        <div class="first-screen-owasp">
                            <img src="https://mef.dev/images/owasp_logo_1c_w_notext.png" width="150">
                            <p>Top-10 Audit Passed</p>
                        </div>
                    </div>
                </div>
                <div class="first-screen_content">
                    <div class="container">
                        <div class="first-screen-flex">
                            <div class="first-screen-text">MEF.DEV Serverless Platform intro</div>
                            <div class="first-screen-buttons"><a class="first-screen-button" href="/en/member-login.php">Member Login</a> <a class="first-screen-button" href="https://github.com/mef-dev">GitHub Repo</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-container">
                <div class="container">
                    <p>The Serverless MEF.DEV platform provides accelerated development, hosting, and application management capabilities for independent developers and teams based on the IoC Container Composition through an agile development process based on continuous integration principles. It has a user-friendly interface that simplifies the process of developing integration applications with a good level of service agreement and based on enterprise-approved standards for authorization, authentication, managed deployment with standardized approaches to monitoring and SOX controls.</p>
                </div>
                <div class="container home-team-block">
                    <div class="col-lg-4">
                        <img src="https://mef.dev/images/program_cycle_fin.jpg" style="width: 100%;">
                    </div>
                    <div class="col-lg-8">
                        <div class="table-noresponsive">
                            <table class="table">
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">You team</th>
                                    <th scope="col">You team</th>
                                </tr>
                                </thead>
                                <tbody class="thead-dark">
                                <tr>
                                    <td>define <b>goals</b> and <b>scope</b></td>
                                    <td><b>examines current business processes</b>, existing legacy landscape <b>to identify a potential transformation</b> plan that meets your business goals.</td>
                                </tr>
                                <tr>
                                    <td>define <b>features</b></td>
                                    <td><b>map</b> these <b>to</b> security <b>requirements</b>, regulations, <b>and</b> proposed technology <b>platforms for custom software development</b></td>
                                </tr>
                                <tr>
                                    <td>craft <b>requirements</b></td>
                                    <td>help to <b>complete with a</b> project schedule, estimated <b>timelines, and</b> clearly explained <b>costs</b>.</td>
                                </tr>
                                <tr>
                                    <td colspan="2">We do <b>evelopment together</b> - you orchestrate, create business logic and <b>omnichannel with low-code</b>, we complete backend and servicing, secure your backend IT operation. Business analytics, programmers, and architects solidify the result due business-centric approach.</td>
                                </tr>
                                <tr>
                                    <td colspan="2">The digitalized platform <b>helps to generate code, do testing, and guided delivery</b> - you monitor the progress, measure bottlenecks, and requested changes. A smooth rollout includes versioning, auto-documentation, user accounts, and configuration management.</td>
                                </tr>
                                <tr>
                                    <td><b>independently orchestrate changes</b> and <b>leverage the future</b> development</td>
                                    <td>can <b>provide training and technical support</b> in several forms to keep your new solution functioning, respond to reported issues and tackle your next big requirement.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="anket-button-box">
                            <a href="https://forms.gle/Scg3xaXzpv7V3igq8" target="_blank" id="anket_button" class="anket-button"  onclick="ga('send', 'event', 'button', 'click');">Find Out More</a>
                        </div>
                    </div>
                </div>
                <div class="separator-l"></div>

                <div class="blockout-box">
                    <blockquote>
                        <div class="blockout-colum-text">
                            <p class="blockquote-text"><span>Since the beginning of the migration project, the NATEC R&D development team has established itself as a team of professionals who know and understand both telecommunications business processes and technologies that can be used to achieve the projects task, in the most effective manner possible, showing genuine interest in creating long-term business value for the Veon Group in Ukraine. I highly recommend working with this team of digital transformation experts. They were able to significantly change the existing approaches to service management and in a really short time created a complex BSS solution based on MEF.DEV with all the flexibility and scalability inherent in this platform.</span></p>
                            <a href="https://blog.mef.dev/kyivstar-stakes-on-partnership-in-the-development-of-it-systems/" target="_blank" class="blockquote-text-bottom">Read more</a>
                        </div>
                        <div class="blockout-colum-image">
                            <img src="/images/profile_circle.png">
                            <p class="blockquote-person">CIO at Kyivstar</p>
                        </div>
                    </blockquote>
                </div>

                <div class="separator-l"></div>
                <div class="container mb-3">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                        <img class="img-responsive img-center" src="../images/re_1.png" alt="plentymarkets logo consisting of puzzle pieces" style="max-height: 200px;">
                        <h2 data-link="ignore">Open API</h2>
                        <p class="text-jst">The REST API, as the important element of the MEF.DEV platform, expands the plugins' functionality available on it, by exposing its resources (for example, accounts, subscribers, and services from BSS plugin), using unique URI values for external interaction (system-to-plugin) or the names of entities within the same domain for internal (plugin-to-plugin) interaction. To use REST API, you just need to send an HTTP request and parse the response. The REST API uses JSON or XML as the data format in combination with standard HTTP methods. Unique URI values are automatically exposed by MEF.DEV platform when a specific version of data models (entities) is published. </p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                        <img class="img-responsive img-center" src="../images/re_2.png" alt="customized online-shop on different devices" style="max-height: 200px;">
                        <h2 data-link="ignore">Container Composition</h2>
                        <p class="text-jst">MEF.DEV entities provide access to business logic or/and specific (native) data interaction using the Managed Extensibility Framework (MEF) and canonical data models. The MEF is much more than Dependency Injection or Inversion of Control - it gives enterprise developers easier configuration and consistent management in larger projects without worrying about when, where, or how a particular application/plugin/module is configured, and no matter how they use the embedded or related application/plugin/module - getting exactly the implementation they want. In other words, after one developer publishes the plugin into the MEF.DEV platform, other developers, creating other plugins, based on that, can use this plugin or its new version in real-time - i.e. "on the fly".</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center">
                        <img class="img-responsive img-center" src="../images/re_4.png" alt="online-plugin-store" style="max-height: 200px;">
                        <h2 data-link="ignore">Smooth DevOps</h2>
                        <p class="text-jst">We want to improve your development workflow with MEF.DEV or API integration - for this reason, we created a flexible and continuous integration tool for the enterprise SDLC process based on guided versioning, configuration management and auto-rollback features. We offer the general plugin (this is just one file) that can be used in the process of self-development of applications - you can also get "out of the box" automatically generated documentation for the self-designed entities, created based on decorator attributes.</p>
                    </div>
                </div>
                <div class="separator-l"></div>
                <div class="container mb-3">
                    <div class="text-center">
                        <h2 class="text-center" data-link="ignore">Technology stack</h2>
                    </div>
                    <div class="row technolodgy-row">
                        <div class="col-lg-3 col-md-6 col-6 text-center">
                            <img class="img-technolodgy img-center" src="../images/net_im.png" style="width: 100px;" alt="laravel logo">
                            <a class="technology-link" target="_blank"></a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 text-center">
                            <img class="img-technolodgy img-center" src="../images/angular_image.png" style="width: 100px;" alt="php logo">
                            <a class="technology-link" target="_blank"></a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 text-center">
                            <img class="img-technolodgy img-center" src="../images/node_image.svg" alt="angular logo">
                            <a class="technology-link" target="_blank"></a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 text-center">
                            <img class="img-technolodgy img-center" src="../images/wide.jpeg" alt="angular logo">
                            <a class="technology-link" target="_blank"></a>
                        </div>
                    </div>
                </div>
                <div class="separator-l"></div>
                <div class="container companies-container mb-3">
                    <div class="text-center">
                        <h2 class="text-center" data-link="ignore">Companies using</h2>
                    </div>
                    <div class="row companies-row">
                        <div class="col-lg-3 col-md-6 col-6 text-center companies-image-one">
                            <img class="img-technolodgy img-center"  src="../images/veon_logo.png" alt="veon">
                            <a class="technology-link"  href="https://www.veon.com/" target="_blank"></a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 text-center">
                            <img class="img-technolodgy img-center"  src="../images/kyivstar_logo.png" alt="veon">
                            <a class="technology-link"  href="https://kyivstar.ua/" target="_blank"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Container -->
        </article>
    </div>
<?php
footer_natec();
?>