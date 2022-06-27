<?php
include '../functions.php';
header_natec(
    'Request Formats for HTTP Methods',
    '/rest_api/http_method_request_formats.php',  // $url_ru,
    '/uk/rest_api/http_method_request_formats.php', // $url_uk,
    '/en/rest_api/http_method_request_formats.php'  // $url_en
);
?>

    <div class="container container-sidebar">
        <?php sidebar_natec(); ?>
        <div class="content">

            <h1>Request Formats for HTTP Methods</h1>

            <h2 id="paragraph_1">HTTP GET: Getting a list of elements of type Entity</h2>

            <p>1. HTTP request template: <b>/api/v1/{domain}/{entity}.{format}?query</b></p>

            <table>
                <tbody>
                <tr>
                    <th>Element</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>entity</td>
                    <td>Resource name (entity type)</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>The format in which the answer will be presented. The options are:
                        <ul>
                            <li>Json</li>
                            <li>Xml</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>query</td>
                    <td>
                        <table>
                            Subquery to the list of Elements. Everything after the “?” (question mark) counts as a request
                            <tr>
                                <th>Element</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>

                            <tr>
                                <td>filter</td>
                                <td>string</td>
                                <td>Filtering parameters, for example filter = {abn_LastName: '%NATEC%'}</td>
                            </tr>
                            <tr>
                                <td>page</td>
                                <td>int</td>
                                <td>Pagination page number</td>
                            </tr>
                            <tr>
                                <td>pagesize</td>
                                <td>string</td>
                                <td>Pagination page size</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>

            <p>2. Request headers</p>

            <table>
                <tr>
                    <th>Header</th>
                    <th>Valid value</th>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Basic Autorization</td>
                </tr>
                <tr>
                    <td>global_unique_id</td>
                    <td>Unique request ID.</td>
                </tr>
                <tr>
                    <td>system</td>
                    <td>External system code for identification, for example = ‘300’</td>
                </tr>
                <tr>
                    <td>Content-type</td>
                    <td>application/json</td>
                </tr>
                <tr>
                    <td>Accept</td>
                    <td>application/json</td>
                </tr>
                <tr>
                    <td>If-Modified-Since</td>
                    <td>HTTP Date, by example Tue, 22 Sep 2020 09:21:24 GMT</td>
                </tr>
            </table>

            <p>3. response headers</p>
            <table>
                <tr>
                    <th>Header</th>
                    <th>Valid value</th>
                </tr>
                <tr>
                    <td>Last-Modified</td>
                    <td>HTTP Date, by example Tue, 22 Sep 2020 09:21:24 GMT</td>
                </tr>
            </table>

            <h2 id="paragraph_2">HTTP GET: Getting a specific Element of the Entity Type</h2>

            <p>1. HTTP request template: <b>/api/v1/{domain}/{entity}/{Id}.{format}</b></p>
            <table>
                <tr>
                    <th>Element</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>entity</td>
                    <td>Resource name (entity type)</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>
                        The format in which the answer will be presented. The options are:
                        <ul>
                            <li>Json</li>
                            <li>Xml</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>query</td>
                    <td>
                        Subquery to the list of Elements. Everything after the “?” (question mark) counts as a request
                        <table>
                            <tr>
                                <th>Element</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>filter</td>
                                <td>string</td>
                                <td>Filtering parameters, for example filter = {abn_LastName: '%NATEC%'}</td>
                            </tr>
                            <tr>
                                <td>page</td>
                                <td>int</td>
                                <td>Pagination page number</td>
                            </tr>
                            <tr>
                                <td>pagesize</td>
                                <td>string</td>
                                <td>Pagination page size</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>


            <p>2. Request headers</p>
            <table>
                <tr>
                    <th>Header</th>
                    <th>Valid value</th>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Basic Autorization</td>
                </tr>
                <tr>
                    <td>global_unique_id</td>
                    <td>Unique request ID.</td>
                </tr>
                <tr>
                    <td>system</td>
                    <td>External system code for identification, for example = ‘300’</td>
                </tr>
                <tr>
                    <td>Content-type</td>
                    <td>Application/json</td>
                </tr>
                <tr>
                    <td>Accept</td>
                    <td>application/json</td>
                </tr>
                <tr>
                    <td>If-Modified-Since</td>
                    <td>HTTP Date, by example Tue, 22 Sep 2020 09:21:24 GMT</td>
                </tr>
            </table>

            <p>3. response headers</p>
            <table>
                <tr>
                    <th>Header</th>
                    <th>Valid value</th>
                </tr>
                <tr>
                    <td>Last-Modified</td>
                    <td>HTTP Date, by example Tue, 22 Sep 2020 09:21:24 GMT</td>
                </tr>
            </table>

            <h2 id="paragraph_3">HTTP PUT: Editing an Entity Type Element</h2>

            <p>1. HTTP request template: <b>/api/v1/{domain}/{entity}/{Id}.{format}?query</b></p>
            <table>
                <tr>
                    <th>Element</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>entity</td>
                    <td>Resource name (entity type)</td>
                </tr>
                <tr>
                    <td>id</td>
                    <td>Identifier for editing a record</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>Optional parameter. The format in which the response will be presented is json by default. The options are:
                        <ul>
                            <li>Json</li>
                            <li>Xml</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>query</td>
                    <td>Subquery to the list of Elements. Everything after the “?” (question mark) counts as a request
                    <table>
                        <tr>
                            <th>Element</th>
                            <th>Type</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>lang</td>
                            <td>string</td>
                            <td>Specifying the language of the content of the request body in ISO 639-1 format </td>
                        </tr>
                    </table>
                    </td>
                </tr>
            </table>

            <p>2. Request headers</p>
            <table>
                <tr>
                    <th>Header</th>
                    <th>Valid value</th>
                </tr>
                <tr>
                    <td>global_unique_id</td>
                    <td>Unique request ID.</td>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Basic Autorization</td>
                </tr>
                <tr>
                    <td>Content-type </td>
                    <td>Application/json</td>
                </tr>
                <tr>
                    <td>system</td>
                    <td>External system code for identification, for example = ‘300’</td>
                </tr>
                <tr>
                    <td>Accept</td>
                    <td>application/json</td>
                </tr>
            </table>

            <p>3. request body</p>
            <table>
                <tr>
                    <th>Field name</th>
                    <th>Type</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>AttributesNames:<br>AttributesValue</td>
                    <td>Пара<br>Key:Value</td>
                    <td>An array of entity attributes <br>Entities</td>
                </tr>
            </table>

            <h2 id="paragraph_4">HTTP POST: Creating a new Element of Entity Types</h2>

            <p>1. HTTP request template: <b>/api/v1/{domain}/{Entity}.{format}?query</b></p>

            <table>
                <tr>
                    <th>Element</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>entity</td>
                    <td>Resource name (entity type)</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>Optional parameter. The format in which the response will be presented is json by default. The options are:
                        <ul>
                            <li>Json</li>
                            <li>Xml</li>
                        </ul>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td>query</td>
                    <td>
                        Optional parameter. Subquery to the list of Elements. Everything after the “?” (question mark) counts as a request
                        <table>
                            <tr>
                                <th>Element</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>lang</td>
                                <td>string</td>
                                <td>Specifying the language of the content of the request body in ISO 639-1 format </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>



            <p>2. Request headers</p>
            <table>
                <tr>
                    <th>Header</th>
                    <th>Valid value</th>
                </tr>
                <tr>
                    <td>global_unique_id</td>
                    <td>Unique request ID.</td>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Basic Autorization</td>
                </tr>
                <tr>
                    <td>Content-type </td>
                    <td>Application/json</td>
                </tr>
                <tr>
                    <td>system</td>
                    <td>External system code for identification, for example = ‘300’</td>
                </tr>
                <tr>
                    <td>Accept</td>
                    <td>application/json</td>
                </tr>
            </table>


            <p>3. request body</p>
            <table>
                <tr>
                    <th>Field name</th>
                    <th>Type</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>AttributesNames:<br>AttributesValue</td>
                    <td>Пара<br>Key:Value</td>
                    <td>An array of entity attributes <br>Entities</td>
                </tr>
            </table>



            <h2 id="paragraph_5">HTTP POST: Doing an Action for Element of Entity Types </h2>

            <p>1. HTTP request template: <b>/api/v1/{domain}/{Entity}/action/{Action}.{format}?query</b></p>

            <table>
                <tr>
                    <th>Element</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>entity</td>
                    <td>Resource name (entity type)</td>
                </tr>
                <tr>
                    <td>Action</td>
                    <td>Action name (operation for an entity)</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>Optional parameter. The format in which the response will be presented is json by default. The options are:

                        <ul>
                            <li>Json</li>
                            <li>Xml</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>query</td>
                    <td>
                        Optional parameter. Subquery to the list of Elements. Everything after the “?” (question mark) counts as a request
                        <table>
                            <tr>
                                <th>Element</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>lang</td>
                                <td>string</td>
                                <td>Specifying the language of the content of the request body in ISO 639-1 format </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>


            <p>2. Request headers</p>
            <table>
                <tr>
                    <th>Header</th>
                    <th>Valid value</th>
                </tr>
                <tr>
                    <td>global_unique_id</td>
                    <td>Unique request ID.</td>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Basic Autorization</td>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Application/json</td>
                </tr>
                <tr>
                    <td>system</td>
                    <td>External system code for identification, for example = ‘300’</td>
                </tr>
                <tr>
                    <td>Accept</td>
                    <td>application/json</td>
                </tr>
            </table>

            <p>3. request body</p>
            <table>
                <tr>
                    <th>Field name</th>
                    <th>Type</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>AttributesNames:<br>AttributesValue</td>
                    <td>Пара<br>Key:Value</td>
                    <td>An array of entity attributes<br>Entities</td>
                </tr>
            </table>


            <h2 id="paragraph_6">HTTP POST: Creating an new element Sub-Entity of Types </h2>

            <p>1. HTTP request template: <b>/api/v1/{domain}/{entity}/{ParentId}/{sub-entity}.{format}?query</b></p>

            <table>
                <tr>
                    <th>Element</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>entity</td>
                    <td>Resource name (entity type)</td>
                </tr>
                <tr>
                    <td>sub-entity</td>
                    <td>Имя ресурса (Type of Sub-entity)</td>
                </tr>
                <tr>
                    <td>ParentId</td>
                    <td>Parent entity id</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>
                        Optional parameter. The format in which the response will be presented is json by default. The options are:
                        <ul>
                            <li>Json</li>
                            <li>Xml</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>query</td>
                    <td>
                        Optional parameter. Subquery to the list of Elements. Everything after the “?” (question mark) counts as a request
                        <table>
                            <tr>
                                <th>Element</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>lang</td>
                                <td>string</td>
                                <td>Specifying the language of the content of the request body in ISO 639-1 format </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <p>2 Request headers</p>
            <table>
                <tr>
                    <th>Header</th>
                    <th>Valid value</th>
                </tr>
                <tr>
                    <td>global_unique_id</td>
                    <td>Unique request ID.</td>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Basic Autorization</td>
                </tr>
                <tr>
                    <td>system</td>
                    <td>External system code for identification, for example = ‘300’</td>
                </tr>
                <tr>
                    <td>Content-type </td>
                    <td>Application/json</td>
                </tr>
                <tr>
                    <td>Accept</td>
                    <td>application/json</td>
                </tr>
            </table>

            <p>3. request body</p>
            <table>
                <tr>
                    <th>Field name</th>
                    <th>Type</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>AttributesNames:<br>AttributesValue</td>
                    <td>Пара<br>Key:Value</td>
                    <td>An array of entity attributes Entities</td>
                </tr>
            </table>



            <h2 id="paragraph_7">HTTP DELETE: Deleting the element of Entity Types</h2>

            <p>5.2 HTTP request template: <b>/api/v1/{domain}/{entity}/{Id}.{format}?query</b></p>

            <table>
                <tr>
                    <th>Element</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>entity</td>
                    <td>Resource name (entity type)</td>
                </tr>
                <tr>
                    <td>id</td>
                    <td>Resource identifier (entity)</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>Optional parameter. The format in which the response will be presented is json by default. The options are:
                        <ul>
                            <li>Json</li>
                            <li>Xml</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>query</td>
                    <td>
                        Optional parameter. Subquery to the list of Elements. Everything after the “?” (question mark) counts as a request
                        <table>
                            <tr>
                                <th>Element</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>lang</td>
                                <td>string</td>
                                <td>Specifying the language of the content of the request body in ISO 639-1 format </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <p>5.3 Request headers</p>

            <table>
                <tr>
                    <th>Header</th>
                    <th>Valid value</th>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Basic Autorization</td>
                </tr>
                <tr>
                    <td>global_unique_id</td>
                    <td>Unique request ID.</td>
                </tr>
                <tr>
                    <td>Content-type </td>
                    <td>Application/json</td>
                </tr>
                <tr>
                    <td>system</td>
                    <td>External system code for identification, for example value =‘300’</td>
                </tr>
                <tr>
                    <td>Accept</td>
                    <td>application/json</td>
                </tr>
            </table>

            <h2 id="paragraph_8">HTTP PATCH (reserved): Partially editing the element of Entity Types</h2>

            <p>1. HTTP request template: <b>/api/v1/{domain}/{entity}/{Id}.{format}?query</b></p>

            <table>
                <tr>
                    <th>Element</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>entity</td>
                    <td>Resource name (entity type)</td>
                </tr>
                <tr>
                    <td>format</td>
                    <td>The format in which the answer will be presented. The options are:
                        <ul>
                            <li>Json</li>
                            <li>Xml</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>query</td>
                    <td>
                        Subquery to the list of Elements. Everything after the “?” (question mark) counts as a request
                        <table>
                            <tr>
                                <th>Element</th>
                                <th>Type</th>
                                <th>Description</th>
                            </tr>
                            <tr>
                                <td>page</td>
                                <td>int</td>
                                <td>Pagination page number</td>
                            </tr>
                            <tr>
                                <td>pagesize</td>
                                <td>string</td>
                                <td>Pagination page size</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <p>2. Request headers</p>
            <table>
                <tr>
                    <th>Header</th>
                    <th>Valid value</th>
                </tr>
                <tr>
                    <td>global_unique_id</td>
                    <td>Unique request ID.</td>
                </tr>
                <tr>
                    <td>Authorization</td>
                    <td>Basic Autorization</td>
                </tr>
                <tr>
                    <td>Content-type </td>
                    <td>Application/json</td>
                </tr>
                <tr>
                    <td>system</td>
                    <td>External system code for identification, for example = ‘300’</td>
                </tr>
                <tr>
                    <td>Accept</td>
                    <td>application/json</td>
                </tr>
            </table>

            <p>3. request body</p>
            
            <table>
                <tr>
                    <th>Название </th>
                    <th>Type</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>AttributesNames:<br>AttributesValue</td>
                    <td>Пара<br>Key:Value</td>
                    <td>An array of entity attributes Entities</td>
                </tr>
            </table>
            
            <h2 id="paragraph_9">Handling Errors When Calling HTTP Methods</h2>

            <p>At the general level of HTTP interaction, the following logic for handling errors through HTTP status codes is assumed:</p>
            <p>2xx (Success) - success, there is no point to retry the request, the status codes can be detailed:</p>
            <ul>
				<li> 200 OK (Success) - if PUT completed without errors </li>
                <li> 201 Created - if POST is successful, record has been added </li>
            </ul>

            <p>4xx (Client error responses) - an error in the formation of a request, there is no point in repeating, except for individual codes 408 (immediate retry) and 409 (delayed retry), for other error codes it is necessary to change the request format before retrying or resolve the issue with authorization, status codes can be detailed:</p>
            <ul>
                <li> 404 (Not Found) - if request URL is invalid </li>
                <li> 400 (Bad Request) - if an invalid API entity is specified </li>
                <li> 401 (Unauthorized) - if the specified username / password pair is incorrect </li>
                <li> 403 (Forbidden) - if there is no access to entities </li>
                <li> 408 (Request Timeout) - you want to retry the request immediately </li>
                <li> 409 (Conflict) - indicates that the request cannot be processed due to a conflict, for example, a parallel request conflict - usually due to an incorrect (too short) timeout for waiting for a response or command execution. You need to repeat the request after a while! </li>
            </ul>
            <p>5xx (Server error responses) - a logical error on the server side, there is no point in repeating, except for a separate code 503 (Service unavailable) - this error requires a delayed repetition after the time specified in the request response. The status codes are detailed below:</p>
            <ul>
                <li> 500 (Internal Server Error) - business logic error, detailed Description is given in the Message and Data tags </li>
                 <li> 501 (Not implemented) - if you try to call DELETE </li>
                 <li> 503 (Service unavailable) - if there is no API access to the linked databases or the authorization parameters of the server itself are outdated (not related to API authorization - the technical account is locked, etc.) </li>
            </ul>
            <p>IMPORTANT! Incorrect configuration of timeouts for the API during integration between systems can lead to a looping of errors 408 and 409 - in this case, it is necessary to reconcile the timeout values of the request initiator and the request executor, namely, the waiting timeout on the initiator's side must always be strictly greater, than the timeout for executing the request on the executor side.</p>
            <p>Below is the Description of the entity level error message response structure (usually for codes 5xx and 4xx, except for authorization errors and IIS server errors):</p>
            
            <table>
                <tr>
                    <th>Field name</th>
                    <th>Mandatory</th>
                    <th>Description</th>
                </tr>
                <tr>
                    <td>LevelMessage</td>
                    <td>yes</td>
                    <td>Object</td>
                </tr>
                <tr>
                    <td>ErrNumber</td>
                    <td>yes</td>
                    <td>Object</td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td>yes</td>
                    <td>Error Description</td>
                </tr>
                <tr>
                    <td>State</td>
                    <td>yes</td>
                    <td>Error State</td>
                </tr>
                <tr>
                    <td>HelpLink</td>
                    <td>no</td>
                    <td>Link to documentation expanding information regarding the error</td>
                </tr>
                <tr>
                    <td>Xml</td>
                    <td>no</td>
                    <td>ErrNumber of the error-reason contained in Data</td>
                </tr>
                <tr>
                    <td>Data</td>
                    <td>Object</td>
                    <td>The error-reason for the current error (in other words nested error) in the same structure, for the example below in XML format:

                        <Result>
                            <LevelMessage />
                            <ErrNumber />
                            <Message />
                            <State />
                            <HelpLink />
                            <Xml />
                            <Data />
                            <ResolveUrl />
                        </Result>
                    </td>
                </tr>
                <tr>
                    <td>ResolveUrl</td>
                    <td></td>
                    <td>A link to a web application that allows you to correct data that affects the fact of an error</td>
                </tr>
            </table>

            <p>It is important to understand that the Data tag contains errors of a similar structure - thus errors can be nested - i.e. when one error becomes a reason for another, higher-level one, then both errors come in the response, while the first error is contained in the "Data" tag. For ease of handling errors, the very first ErrNumber from the first cause error is listed in the Xml tag. An example of an error response with nested error-causes is given below Error Responses</p>

            <p><b>HTTP Call Examples</b></>

            <p>Request format</p>
            <p>An example GET request to get Customers records with the name NATEC:</p>
            <p>GET <a style="word-wrap: break-word;" href="http://servername:port/api/v1/Bss/customers.json?lang=uk&pageIndex=0&pageSize=1000&filter=%7babn_LastName%7Babn_LastName%3A%27%25NATEC%25%27%7D HTTP/1.1">http://servername:port/api/v1/Bss/customers.json?lang=uk&pageIndex=0&pageSize=1000&filter=%7babn_LastName%7Babn_LastName%3A%27%25NATEC%25%27%7D HTTP/1.1</a></p>
            <p>accept: application/json<br>
            system: 300<br>
            global_unique_id: 6d07332c-2e63-4d49-91d2-ee01e600f7ff<br>
            Authorization: Basic YXBpX3VzZXI6V2lkZWNvdXAx<br>
            Content-Type: application/json<br>
            Host: servername:port<br>
            Content-Length: 0</p>
            <p><b><i>An example of a GET request to get one Customers record by ID with the If-Modified-Since transfer:</i></b><br><a
                        href="GET http://servername:port/api/v1/Bss/customers/1041838.json HTTP/1.1">GET http://servername:port/api/v1/Bss/customers/1041838.json HTTP/1.1</a></p>

            <p>
            accept: application/json<br>
            if-modified-since: Tue, 22 Sep 2020 09:21:24 GMT<br>
            system: 300<br>
            global_unique_id: 6d07332c-2e63-4d49-91d2-ee01e600f7ff<br>
            Authorization: Basic YXBpX3VzZXI6V2lkZWNvdXAx<br>
            Content-Type: application/json<br>
            Host: servername:port<br>
            Content-Length: 0</p>

            <p><b>An example of a POST request to create a Person client type</b></p>
            <p  style="word-wrap: break-word;">POST <a href="http://servername:port/api/v1/Bss/customers HTTP/1.1">http://servername:port/api/v1/Bss/customers HTTP/1.1</a></p>
            <p>
                Authorization: Basic ZGVtbzpkZW1v<br>
                Content-Type: application/json<br>
                global_unique_id: 6b80d0f6-62df-4507-b115-e5245c0b340c<br>
                Connection: Keep-Alive
            </p>
            <p>
                <code>
                    {<br>
                    "IDType":1,<br>
                    "ProfileType":1<br>
                    "ParentID":1,<br>
                    "Name":"Klinton Bill",<br>
                    "Customer_FirstName":"Bill",<br>
                    "Customer_MiddleName":"",<br>
                    "Customer_SearchName":"Klinton",<br>
                    "CustomerLanguageId":1,<br>
                    "StatusId":2,<br>
                    "CustomerDate":"2019-05-08T11:55:39.9285053+03:00",<br>
                    "GroupID":1,<br>
                    "LocationID":1<br>
                    }
                </code>
            </p>

            <p><b>An example of a POST request to create a client for a Legal entity under the Association level</b></p>
            <p>POST <a  style="word-wrap: break-word;" href="http://servername:port/api/v1/Bss/associations/1042338/customers HTTP/1.1">http://servername:port/api/v1/Bss/associations/1042338/customers HTTP/1.1</a></p>
            <p>
                Authorization: Basic ZGVtbzpkZW1v<br>
                Content-Type: application/json<br>
                global_unique_id: 6b80d0f6-62df-4507-b115-e5245c0b350c<br>
                Connection: Keep-Alive
            </p>
            <p>
                <code>
                    {<br>
                    "IDType":1,<br>
                    "ProfileType":2,<br>
                    "Name":"NATEC LLC",<br>
                    "Customer_SearchName":"NATEC LLC"",<br>
                    "CustomerLanguageId":1,<br>
                    "StatusId":2,<br>
                    "CustomerDate":"2019-05-08T11:55:39+03:00",<br>
                    "GroupID":1,<br>
                    "LocationID":1<br>
                    }
                </code>
            </p>

            <p><b>An example of a PUT request to edit a client's full name with ID = 1041838</b></p>
            <p>PUT <a href="http://servername:port/api/v1/Bss/customers?id=1041838 HTTP/1.1">http://servername:port/api/v1/Bss/customers?id=1041838 HTTP/1.1</a></p>
            <p>
                Authorization: Basic ZGVtbzpkZW1v<br>
                Content-Type: application/json<br>
                global_unique_id: ac6495d1-5118-494a-a737-844f6c76ba46<br>
                Host: servername:port
            </p>
            <p>
                <code>
                    {<br>
                    "IDType":1,<br>
                    "ProfileType":1<br>
                    "ParentID":1,<br>
                    "Name":"Trump Donald",<br>
                    "Customer_FirstName":"Donald",<br>
                    "Customer_MiddleName":"",<br>
                    "Customer_SearchName":"Trump",<br>
                    "CustomerLanguageId":1,<br>
                    "StatusId":2,<br>
                    "CustomerDate":"2019-05-08T11:55:39+03:00",<br>
                    "GroupID":1,<br>
                    "LocationID":1<br>
                    }
                </code>
            </p>

            <p>Response format</p>
            <p><b>An example GET response to retrieve Customers records by ID:</b></p>
            <p>
                HTTP/1.1 200 OK<br>
                Content-Length: 78597<br>
                Content-Type: aplication/json<br>
                Last-Modified: Tue, 22 Sep 2020 09:21:24 GMT<br>
                Server: Microsoft-IIS/10.0<br>
                cache-scenario: scenario.1<br>
                X-Powered-By: ASP.NET<br>
                Date: Sun, 27 Sep 2020 11:18:51 GMT
            </p>

            <code>
                {<br>
                "data":[<br>
                {<br>
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
                "abn_ModifiedBy":"username",<br>
                "abn_ModifiedDate":"2019-10-31T17:58:35.75",<br>
                "abn_ModifiedFrom":"hostname",<br>
                "abn_NestedSets_Left":398155,<br>
                "abn_NestedSets_Right":398156,<br>
                "abn_Password":"09B0B566-2570-4447-BDF5-5304813834B8",<br>
                "abn_PositionCode":"",<br>
                "abn_ShowPhoneDirectory":0,<br>
                "abn_WorkPlace":"01234567890",<br>
                "abonentFullName":"NATEC LLC.",<br>
                "acnt_ID":86,<br>
                "acnt_ID_count":1,<br>
                "acnt_IsPersonal":0,<br>
                "acnt_Number":"8132725",<br>
                "acnt_Number_Personal":"",<br>
                "actp_ID":21,<br>
                "actpd_Name":"ГКО",<br>
                "actpd_Name_Personal":"",<br>
                "aut_ID_count":0,<br>
                "aut_NameAuthCode":"",<br>
                "aut_NumberAts":0,<br>
                "bossFullName":"NATEC LLC. {01234567890}",<br>
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
                "trf_ID":2<br>
                }<br>
                ]<br>
                }
            </code>
            <p></p>
            <p>Error Responses</p>
            <p>An example of wrong authorization</p>

            <p>
                HTTP/1.1 401 Unauthorized<br>
                Content-Type: application/problem+json; charset=utf-8<br>
                WWW-Authenticate: Negotiate<br>
                WWW-Authenticate: NTLM<br>
                Proxy-Support: Session-Based-Authentication
            </p>
            <code style="word-wrap: break-word;">
                {
                "type":"https://tools.ietf.org/html/rfc7235#section-3.1",<br>
                "title":"Unauthorized",<br>
                "status":401,<br>
                "traceId":"0HLM1RANTI6TH:00000001"
                }
            </code>
            <p></p>
            <p><b>An example of getting response from cache</b></p>
            <code>
                {<br>
                "headerId": "1892ae73-f1db-47e0-9084-35e8aef993f3",<br>
                "idempotent": {<br>
                "status": "IsCompleted",<br>
                "dateModify": "2019-06-09T15:53:18.5599139Z",<br>
                "data": {<br>
                "id": 100000257,<br>
                "lang": "uk ",<br>
                "idType": 1<br>
                }  }
            </code>
            <p></p>
            <p><b>Database level error example</b></p>
            <code>
                {<br>
                "LevelMessage":"17",<br>
                "ErrNumber":"50240",<br>
                "Message": "Error by activating the tariff plan template (RepresentationTariffPlanBind)", <br>
                 "State": "1", <br>
                 "HelpLink": "", <br>
                 "Xml": "50248", <br>
                 "Data": {<br>
                 "LevelMessage": "17", <br>
                 "ErrNumber": "50271", <br>
                 "Message": "Error creating service subscription:", <br>
                 "State": "1", <br>
                 "HelpLink": "", <br>
                 "Xml": "50248", <br>
                 "Data": {<br>
                 "LevelMessage": "17", <br>
                 "ErrNumber": "50248", <br>
                 "Message": "Error changing service status: invalid srs_id = 12345", <br>
                "State":"1",<br>
                "HelpLink":"",<br>
                "Xml":"50248",<br>
                "Data": null,<br>
                "ResolveUrl":""<br>
                },<br>
                "ResolveUrl":""<br>
                },<br>
                "ResolveUrl":""<br>
                }
            </code>
            <p>The list of errors related to CRUD operations of each REST entity is given in the REST API Specs in the Errors Mapping section</p>

        </div>
    </div>

<?php

footer_natec();
?>