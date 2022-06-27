<?php
include '../functions.php';
header_natec(
    'Introduction',
    '/plugin_basics/introduction.php',  // $url_ru,
    '/uk/plugin_basics/introduction.php', // $url_uk,
    '/en/plugin_basics/introduction.php'  // $url_en
);
?>

    <div class="container container-sidebar">
        <?php sidebar_natec(); ?>
        <div class="content">

            <h1 id="unibill_cloud_platform">MEF.DEV platform (preview) intro</h1>
            <p>The MEF.DEV cloud platform provides accelerated development, hosting and application management capabilities for independent developers and teams based on the Managed Extensibility Framework through an agile development process based on continuous integration principles. It has a user-friendly interface that simplifies the process of developing integration applications with a good level of service agreement and based on enterprise-approved standards for authorization, authentication, managed deployment with standardized approaches to monitoring and SOX controls.</p>
            <img src="http://mef.dev/images/image100500.jpg">
            <p></p>
            <p>The basic functions of the platform include processes that require standardization within the software development process of a particular enterprise - thereby setting out of the box standard approaches for a number of important phases of the SDLC process:</p>
            <img src="http://mef.dev/images/image100501.png">
            <p></p>

            <p>The platform REST API as the main element of the solution expands the functionality of plugins available in it, for example, the BSS system, providing access to its resources, such as personal accounts, subscribers or services, using unique URI values ​​for external interaction or the names of entities within the same domain - for re-use (internal interaction). To use the REST API, you just need to send an HTTP request and parse the response. The REST API uses JSON or XML as the exchange format combined with the standard HTTP GET, PUT AND POST methods:</p>
            <ul>
                <li><b>GET</b> returns data. This method does not change the data stored on the server</li>
                <li><b>PUT</b> modifies an existing data record by ID and full data model</li>
                <li><b>POST</b> creates a new data record</li>
                <li><b>DELETE</b> deletes data record by ID</li>
            </ul>
            <h2 id="entities">Entities as unique resources</h2>
            <p>Unique URI values ​​are automatically exposed by the MEF.DEV platform when a specific version of data models (entities) is published. Entities provide access to business logic and specific (native) data storage using the <b> Managed Extensibility Framework </b> (MEF). MEF is much more than Dependency Injection or Inversion of Control - it gives Enterprise developers easier configuration and consistent management in larger projects without worrying about when, where, or how a particular application/plugin/module is configured, and no matter how they use the embedded application/plugin/module - getting exactly the implementation they want. MEF is designed to help developers connect and use what they don't know how to implement internally. It is expandable "by nature" and contains stable exposure features that keep expanding Enterprise projects secure in real time. In other words, after one developer launches the application by uploading it to the MEF.DEV platform, other developers, creating other plugins, can use this plugin or its new version in real-time without reloading - i.e. "on the fly".</p>
            <p>The visualization of the content of a specific plugin (in fact, the implementation of a specific developer) gives transparency to all other platform participants, for example, the visualization of the Natec.Entities plugin for the BSS domain looks like this:</p>
            <img src="http://mef.dev/images/image100502.png">
            <p></p>
            <h2 id="openapi_format">OpenAPI format</h2>
            <p>We want to improve your integration development workflow with our REST API - for this reason we have created a flexible and continuous integration process tool for the enterprise SDLC process. At the moment we offer a general plugin (this is just one file) that can be used in the process of self-development of applications - you can also get "out of the box" automatically generated documentation for the REST entities you create based on decorator attributes.</p>
            <p>You can browse plugin examples in our repo <a href="https://github.com/mef-dev">GitHub</a>. Video tutorials for developers are available by the <a href="https://www.youtube.com/playlist?list=PLWtWlDCLjp8D8htSnSd0lreO5-w3pfli4">lynk</a>
			</p>
            <h2 id="appointment_mef">MEF purpose</h2>
            <p>What tasks is MEF intended to solve? In the .NET environment, there was no uniform tool for solving problems of extending applications, therefore, when such problems arose, each developer solved it in his own way, to the best of his knowledge, skills, task requirements. It is quite obvious that this situation leads to the creation of code that is architecturally (or fundamentally) incompatible with each other.</p>
            <p>MEF aims to overcome this problem and provides a unified way to address the architectural challenges of application extensibility. Achieving the goal of MEF - spreading a uniform approach - will make life easier for us for developers and make maintaining someone else's code or writing extensions to someone else's applications much easier and in a familiar (logical) manner.</p>
            <p>Ideally, a developer who has studied MEF will be able (without much difficulty and lengthy architecture study) to develop components for all sorts of projects on the .NET platform, written by any other company or individual. And thus, MEF is able to solve the problem of mutual understanding between developers by offering a common language of communication.</p>
            <h3>Basics</h3>
            <p>The key to the success of MEF as a tool lies in its simplicity. MEF is built on just three functional parts: import, export, and composition. By using imports, you characterize parts of your application as extensible. A third-party developer uses the export functions to create a separate component (part, plugin) dedicated to your application. And, at runtime, you use composition functions to connect the import parts with the export parts. Let's consider these stages in more detail.</p>
            <h3>Import</h3>
            <p>At figure below is the definition of a certain class that implements the exported part of the extension in MEF.</p>
            <img src="http://mef.dev/images/image100509.png">
            <p></p>
            <p>This defines an automatic property, the type of which is determined by some interface IPlugin. The Import attribute, which is part of the MEF framework, marks the property as imported. The property itself thus becomes part of the import, and the type of the part will be the IPlugin interface. </p>
            <p> Notice the Import: typeof (IPlugin) attribute parameter in this case defines the so-called MEF contract. A contact is a unique identifier that uniquely identifies the import part, the export part, and thus allows MEF to connect both parts during composition. Simply put, when defining a contract, you provide a password that part of the extension must name in order to connect to the import point. Later in this chapter, contracts will be discussed in more detail.</p>
            <h2>Export</h2>
            <h3>Exported part</h3>
            <img src="http://mef.dev/images/image100520.png">
            <p></p>
            <p>Here a certain FirstPlugin class is defined, which implements the IPlugin interface (part of the import in the previous topic was defined using it). Using the Export attribute from the MEF framework, the class is marked as an exportable part (you could say “plugin”). Note that the parameter of the Export attribute is the contract declared as typeof (IPlugin).</p>
            <p>Defining the same contract for import and export allows MEF to find each other's intended parts.</p>
            <h3>Composition</h3>
            <p> After defining the imported and exported parts, you need to compose them </p>
             <p> Composition refers to the process of finding all defined MEF parts, instantiating them, and assigning instances of the exported parts to the import parts. In other words, during the composition process, plugins marked with the export attribute are connected to the parts of your when marked with the import attributes.</p>
            <img src="http://mef.dev/images/image100525.png">
            <p></p>
            <h3>Composition</h3>
            <p>This is where the composition container is instantiated (the container is part of the MEF infrastructure). After that, the ComposeParts method is called on the container, the parameters of which are an enumeration of elements in which MEF should search for parts for composition. In this case, this is an instance of the current class and new FirstPlugin () is an instantiated plugin that we marked with the Export attribute in the previous section.</p>
            <p>After calling ComposeParts, this and FirstPlugin instances will be written in container, and the Plugin part being imported will get the value of the FirstPlugin instance.</p>
            <p>Contracts play an important role in the composition process, which allow us to specify which parts of the export we expect in a particular part of the import.</p>
            <h2>Contracts</h2>
            <p>Contracts in the MEF infrastructure play an important link between the import and export parts. Contracts are necessarily explicitly or implicitly defined when importing or exporting parts. In fig. Above, the typeof (IPlugin) expression is used as a contract, which uniquely identifies the type of the IPlugin interface. </p>
             <p> In fact, the MEF framework contains several options for defining a contract on import:</p>
            <p style="text-align: center"><b>Options for defining contracts by import</b></p>
            <table>
                <tr>
                    <td>ImportAttribute(Type)</td>
                    <td>by specifying a transfer type (as we discussed above)</td>
                </tr>
                <tr>
                    <td>ImportAttribute(String)</td>
                    <td>by passing the contract name as a string - in this case, you must ensure that such a string is unique among other contracts</td>
                </tr>
                <tr>
                    <td>ImportAttribute(String, Type)</td>
                    <td>by passing both the name of the contract as a string and its type - this can be useful when there is a need to create several different contracts for the same type</td>
                </tr>
                <tr>
                    <td>ImportAttribute()</td>
                    <td>if the contract type was not passed to the import attributes (Import and others), then it will be determined automatically based on the type to which this attribute is applied. Thus, you can omit the typeof (IPlugin) parameter.</td>
                </tr>
            </table>
            <p>In cases where the contract name was not passed, it is generated automatically using the GetContractName method, which returns the complete string type definition including its namespace. As already mentioned, if the type of the contract is not specified, then it is also obtained automatically.</p>
            <p>For export attributes, the same rules apply as for import. But when defining an export using the Export attributes and others, it is important to understand the following behavior: if the type and name of the contract are not specified, they will be automatically obtained based on the type of element to which the attribute is applied. In other words, if in the example in Fig. The "exported part" omit the typeof (IPlugin) parameter, then the MEF will automatically determine the contract based on the FirstPlugin type, but not the IPlugin as we need it. This means that if you are building the exported part based on basic interfaces or classes, then you need to explicitly specify its type for the contract.</p>
        </div>
    </div>

<?php

footer_natec();
?>