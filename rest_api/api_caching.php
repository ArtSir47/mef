<?php
include '../functions.php';
header_natec(
    'API caching',
    '/rest_api/api_caching.php',  // $url_ru,
    '/uk/rest_api/api_caching.php', // $url_uk,
    '/en/rest_api/api_caching.php'  // $url_en
);
?>

    <div class="container container-sidebar">
        <?php sidebar_natec(); ?>
        <div class="content">

            <h1>API caching</h1>

            <p>For server-side caching, the API uses a validity model. In the validity model, the server sends the “Last-Modified” date to the client along with the data, and the client caches the “Last-Modified” date along with the response. When you make a second request to the same resource, you must send the saved date in the “IF-Modified-Since“ header. The server uses this date to check if the resource you are requesting has changed since the last time it was accessed (remember, the server is the only reliable source). If the resource did change, then it will send the last copy of the data along with the http code 200. Otherwise, it will send the http code 304 Not Modified. The cache validity model requires additional effort from the developer when developing the client side - if you received “Last-Modified” with a resource, send it in the “IF-Modified-Since“ header field in subsequent requests.</p>
            <img src="http://mef.dev/images/image100620.png">
            <p></p>

            <h2 id="modified_since_one">Example GET request-response without If-Modified-Since</h2>

            <p>GET <a style="word-wrap: break-word;" href="http://servername:port/api/v1/Bss/customers.json?lang=uk&pageIndex=0&pageSize=1000&filter=%7Babn_LastName%3A%27%25NATEC%25%27%7D">http://servername:port/api/v1/Bss/customers.json?lang=uk&pageIndex=0&pageSize=1000&filter=%7Babn_LastName%3A%27%25NATEC%25%27%7D</a></p>

            <p>
                accept: application/json<br>
                system: 300<br>
                global_unique_id: 6d07332c-2e63-4d49-91d2-ee01e600f7ff<br>
                Authorization: Basic YXBjdhst6XI6V2lkZWf6NvdXAx<br>
                Content-Type: application/json<br>
                Host: servername:port<br>
                Content-Length: 0
            </p>


            <p><b>HTTP 200 response example</b>
            HTTP/1.1 200 OK<br>
            Content-Length: 78597<br>
            Content-Type: aplication/json<br>
            Last-Modified: Tue, 22 Sep 2020 09:21:24 GMT<br>
            Server: Microsoft-IIS/10.0<br>
            cache-scenario: scenario.1<br>
            X-Powered-By: ASP.NET<br>
            Date: Sun, 27 Sep 2020 11:18:51 GMT<br>
            <code>
                {
            "data":[
            {
            "abn_Balance":0.000000,<br>
            "abn_CreateDate":"2019-10-31T17:58:35.697",<br>
            "abn_Date":"2019-11-01T00:00:00",<br>
            "abn_Employe_Export_ID":"",<br>
            "abn_Employee_ID":"",<br>
            "abn_ExternalID":8836891,<br>
            "abn_FirstName":"",<br>
            "abn_Guid":"b75d56c7-1b84-4571-8e6c-09a3aeffc0a1",<br>
            "abn_HasNotEmptyPrepaid":0,<br>
            "abn_ID":165,<br>
            "abn_ID_Boss":164,<br>
            "abn_IsExistAD":0,<br>
            "abn_IsGuest":0,<br>
            "abn_LastName":"NATEC LLC.",<br>
            "abn_Login":"",<br>
            "abn_MiddleName":"",<br>
            "abn_ModifiedBy":"ModifiedBy",<br>
            "abn_ModifiedDate":"2019-10-31T17:58:35.75",<br>
            "abn_ModifiedFrom":"host",<br>
            "abn_NestedSets_Left":398155,<br>
            "abn_NestedSets_Right":398156,<br>
            "abn_Password":"09B0B566-2570-4447-BDF5-5304813834B8",<br>
            "abn_PositionCode":"",<br>
            "abn_ShowPhoneDirectory":0,<br>
            "abn_WorkPlace":"1234567890",<br>
            "abonentFullName":"NATEC LLC.",<br>
            "acnt_ID":86,<br>
            "acnt_ID_count":1,<br>
            "acnt_IsPersonal":0,<br>
            "acnt_Number":"0123456789",<br>
            "acnt_Number_Personal":"",<br>
            "actp_ID":21,<br>
            "actpd_Name":"ГКО",<br>
            "actpd_Name_Personal":"",<br>
            "aut_ID_count":0,<br>
            "aut_NameAuthCode":"",<br>
            "aut_NumberAts":0,<br>
            "bossFullName":"NATEC LLC.{1234567890}",<br>
            "cntr_ID_count":0,<br>
            "cntr_Name":"",<br>
            "com_Id":1,<br>
            "dep_ID":202,<br>
            "ext_ExtNum":"",<br>
            "ext_ID_count":0,<br>
            "grp_ID":100,<br>
            "grp_Name":"ByDefault",<br>
            "isEditAllow":1,<br>
            "isEditWorkPlace":0,<br>
            "lng_ID":1,<br>
            "loc_Name":"Brach 0001",<br>
            "location_ID":7,<br>
            "ntw_ID":1000,<br>
            "pbx_networkName":"United",<br>
            "profileType":2,<br>
            "rptURL":"",<br>
            "subsCount":0,<br>
            "tnst_ExternalID":2,<br>
            "tnst_ID":10,<br>
            "tnt_AccountMandatory":1,<br>
            "tnt_ID":130,<br>
            "total":52,<br>
            "treeNodeType":"Customer",<br>
            "trf_ID":2
            }
            ]
            }</code></p>

            <h2 id="modified_since_two">GET request-response example with an If-Modified-Since indication</h2>

            <p>GET <a style="word-wrap: break-word;" href="http://servername:port/api/v1/Bss/customers.json?lang=uk&pageIndex=0&pageSize=1000&filter=%7Babn_LastName%3A%27%25NATEC%25%27%7D">http://servername:port/api/v1/Bss/customers.json?lang=uk&pageIndex=0&pageSize=1000&filter=%7Babn_LastName%3A%27%25NATEC%25%27%7D</a></p>

            <p>accept: application/json<br>
            system: 300<br>
            global_unique_id: 6d07332c-2e63-4d49-91d2-ee01e600f7ff<br>
            Authorization: Basic YXBjdhst6XI6V2lkZWf6NvdXAx<br>
            Content-Type: application/json<br>
            Host: servername:port<br>
            Content-Length: 0<br>
            if-modified-since: Tue, 22 Sep 2020 09:21:24 GMT</p>

            <p>HTTP 304 response example<br>
            HTTP/1.1 304 Not Modified<br>
            Last-Modified: Tue, 22 Sep 2020 09:21:24 GMT<br>
            Server: Microsoft-IIS/10.0<br>
            cache-scenario: scenario.3<br>
            X-Powered-By: ASP.NET<br>
            Date: Sun, 27 Sep 2020 13:42:36 GMT</p>

        </div>
    </div>

<?php

footer_natec();
?>