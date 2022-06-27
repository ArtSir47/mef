<?php
include '../functions.php';
header_natec(
    'REST API using',
    '/rest_api/using_rest_api.php',  // $url_ru,
    '/uk/rest_api/using_rest_api.php', // $url_uk,
    '/en/rest_api/using_rest_api.php'  // $url_en
);
?>

    <div class="container container-sidebar">
        <?php sidebar_natec(); ?>
        <div class="content">

            <h1>REST API using</h1>

            <h2 id="general_ap">General approach</h2>

            <p>For external interaction with the platform, the RESTful API is used, however, given the support of Legacy systems (the inability to edit records through the PUT method), the proposed API is idempotent for all methods, including POST:</p>
            <img src="http://mef.dev/images/image100600.png">
            <p></p>
            <p>The general list of REST entities and relations between them is determined by the plugin developers and combined into domains (for example, to separate the Customers of the telecom operator and the Customers of the fintech sector) - an example of a domain name is bss in the following url:<br>
            <b><i><a style="word-wrap: break-word;" href="http://servername:port/api/v1/Bss/addresses/actions/sync.json?lang=uk">http://servername:port/api/v1/Bss/addresses/actions/sync.json?lang=uk</a></i></b></p>
            <p>you should pay attention to the formation of url for specifying entity relationships - which actually implements the principle of passing the ParentID parameter when creating a specific REST entity - in the example below, we see the creation of the Subscribers entity in the previously created Customers entity with the identifier 10000001:<br>
            <b><i><a style="word-wrap: break-word;" href="POST http://servername:port/api/v1/Bss/customers/1000001/subscribers.json?lang=uk">POST http://servername:port/api/v1/Bss/customers/1000001/subscribers.json?lang=uk</a></i></b></p>
            <p>It is important to understand that the transparency of the architecture for all platform developers is achieved by standardizing the naming of entities - therefore, a mandatory recommendation is to nominate entities with plural nouns, and perform operations for them with verbs. In the example below, the activation of a previously created subscriber with the identifier 2000101 will be performed:<br>
            <b><i><a style="word-wrap: break-word;" href="POST http://servername:port/api/v1/Bss/subscribers/2000101/activate.json?lang=uk">POST http://servername:port/api/v1/Bss/subscribers/2000101/activate.json?lang=uk</a></i></b></p>
            <p>Operations (actions) can be applied to different entities - this is also determined by the developers of a specific plugin that implements specific entities. The example below shows the action for changing the status for different entities:<br>
            <b><i><a style="word-wrap: break-word;" href="POST http://servername:port/api/v1/Bss/subscribers/2000101/changeStatus.json?lang=uk">POST http://servername:port/api/v1/Bss/subscribers/2000101/changeStatus.json?lang=uk</a></i></b><br>
            <b><i><a style="word-wrap: break-word;" href="POST http://servername:port/api/v1/Bss/customers/1000001/changeStatus.json?lang=uk">POST http://servername:port/api/v1/Bss/customers/1000001/changeStatus.json?lang=uk</a></i></b></p>
            </p>If you need to change a previously created REST entity, you should use the PUT method and the unique identifier of the REST entity - below is an example of editing Customers data:<br>
            <b><i><a style="word-wrap: break-word;" href="PUT http://servername:port/api/v1/Bss/customers/1000001.json?lang=uk">PUT http://servername:port/api/v1/Bss/customers/1000001.json?lang=uk</a></i></b><p>
            <p>In fact, to indicate the relationship of entities with each other, the concept of explicitly pointing to a parent entity (Entity) through the ParentID parameter in the Path value of the Entity/{ParentID}/SubEntity format is used, below is an example of relationships between Associations, Customers and Subscribers entities, including their subordinate entities (Sub-Entity) Contracts, Profiles, Addresses and Properties:</p>
            <img src="http://mef.dev/images/image100601.png">
            <p></p>
            <h2 id="interactions">Background interaction API</h2>
            <img src="http://mef.dev/images/image100605.png">

            <p style="text-align: center;"><i>Service Flow</i></p>

            <p><b>API Layer: </b> implements REST http interface, authorization, caching and call idempotency. <br>
             <b> Backend Plugin: </b> implements business logic such as CRUD operations for an entity (such as Customers).</p>

            <h2 id="idempotency">Idempotency: logic for processing the global_unique_id parameter</h2>
            <p>The <b>global_unique_id</b> parameter is used to avoid duplicate data insertion into the database - each successful CRUD operation, including for the POST method, is saved to the distributed cache of the Web publishing server (implemented at the level of a separate MS SQL Server database - SQL Server distributed cache Microsoft.Extensions.Caching.SqlServer package) and if a second request is received, the API returns the previously saved response from the cache. The request is identified as repeated by the value <b>global_unique_id</b>.</p>

            <img src="http://mef.dev/images/image100610.png">
            <p></p>
            <p>The response body always contains an indication of the check status ("<b>IsCompleted</b>" informs that the idempotency check was triggered and the response body was used from the Web server cache, the value "<b> Added </b>" says about the fact that the check is negative and the result of the execution has been added to the cache, the examples are below - it is important to understand that the <b>data</b> tag will contain the <b>Response-model</b> of the data of a specific Entity:</p>
            <p><code>
            {<br>
            "headerId": "1892ae73-f1db-47e0-9084-35e8aef993f3",<br>
            "<b>idempotent</b>": {<br>
            "<b>status</b>": "<b>IsCompleted</b>",<br>
            "dateModify": "2019-06-09T15:53:18.5599139Z",<br>
            "data": {<br>
            <mark>"id": 100000257,<br>
            "lang": "uk ",<br>
            "idType": 1</mark><br>
            }  } }
                </code></p>
            <p><code>
            {<br>
            "headerId": "1892ae73-f1db-47e0-9084-35e8aef993f3",<br>
            "<b>idempotent</b>": {<br>
            "<b>status</b>": "<b>Added</b>",<br>
            "dateModify": "2019-06-09T15:53:18.5580444Z",<br>
            "data": {<br>
            <mark>"id": 100000257,<br>
            "lang": "uk ",<br>
            "idType": 1</mark><br>
            }  } }
                </code></p>

            <h2 id="api_authorization">API Authorization</h2>

            <p>For authorization on API methods, support for various types of authorization at the level of each controller is implemented in 2 modes of platform deployment - Internet and Intranet, the supported authorization types for each type of deployment are listed below:</p>

            <p>Internet:</p>
            <ul>
                <li>Basic Authorization</li>
                <li>oAuth 2.0</li>
            </ul>
            <p>Intranet:</p>
            <ul>
                <li>URL (token)</li>
                <li>Basic Authorization</li>
                <li>Kerberos</li>
                <li>NTLM</li>
            </ul>


            <p>Thus, for authorization on API methods, it is enough to use Basic Authorization at the level of transferring http request headers. The current values of the login-password pair should be requested from the administrator of your organization.</p>

            <p>To use authorization through a token, the URL should contain the value <b> Authorization </b> = <credentials>, where <credentials> is the standard form for the Basic Authorization authorization scheme. It is important to understand that since the transfer goes through url, then in the form of Url Encoded, for example:</p>

            <p style="word-wrap: break-word;">http://servername:port/api/v1/Bss/versioninfo.json?<mark>Authorization</mark>=<b>eWl6aGFja0BnbWFpb1234206VGVzdDEyMzQ1Ng</b>%3D%3D</p>

            <h2 id="date_format">Date and time format for API parameters</h2>

            <p>To send parameters of date and time, the format <a href="https://en.wikipedia.org/wiki/ISO_8601">ISO 8601</a> is used, an example of date and time in this format for Kiev (Europe): 06/18/2019 0:00:00 will be <b>2019-06-18T00:00:00+03:00</b></p>

            <h2 id="api_methods">API methods</h2>

            <h2>Purpose of HTTP methods</h2>

            <p>Mapping the operations you need to HTTP methods becomes easier when you know the characteristics of all HTTP methods — since the REST API implementation uses HTTP methods for operations instead of writing different service names for each operation, this section covers the behavior of each HTTP method. Below is a list of methods that are used in REST applications and their properties are shown in relation to each entity:</p>
            <ul>
                <li> GET: This method is safe and idempotent. Usually used to extract information and has no side effects </li>
                <li> POST: This method is not secure, but it is idempotent in the implementation of the REST API - this is done to support changeability in Legacy systems, which does not support the PUT method. This method is most commonly used to create Entities </li>
                <li> PUT: This method is idempotent natively - so it is better to use this method instead of POST to update resources. Avoid using POST to update resources, except for those Entities where changes require historical changes, such as Addresses or Profiles </li>
                <li> DELETE: as the name suggests, this method is used to delete Entities, but in the REST API implementation it is also idempotent (reserved) </li>
            </ul>

        </div>
    </div>

<?php

footer_natec();
?>