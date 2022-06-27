
# Creation of UI package "from scratch"

> *Prerequisites. Before you begin, you have got to install [nodejs](https://nodejs.org) and [@angular/cli](https://www.npmjs.com/package/@angular/cli)*

> This instruction is aimed for information purpose only and to understand better the principle of package developing. To save your time, efforts and to avoid usual mistakes, we kindly recommend to use the project templates source-code generator provided by the platform.

This guide describes how to create some base or initial package for the [mef.dev](https://mef.dev/) platform. This basic package has **not** business logic implementations. Its purpose is the explaining of technical design approach for the successful operation of packages within the platform.
> *Note. Tested on the following versions of @angular/cli: [12.2.17](https://www.npmjs.com/package/@angular/cli/v/12.2.17 "12.2.17"), [13.3.8](https://www.npmjs.com/package/@angular/cli/v/13.3.8 "13.3.8")*

## 1. Creation Angular project
Let's start with creating the standard Angular application:
```sh
	ng new <app-name>
``` 

## 2. Adding dependencies

#### @natec/mef-dev-platform-connector

As you want, you can use almost any additional libraries, нowever to use the platform you have got to use [@natec/mef-dev-platform-connector](https://www.npmjs.com/package/@natec/mef-dev-platform-connector) which provides to you the main functionality of interaction with the platform. On base that, we should to add the package:

```sh
	npm i @natec/mef-dev-platform-connector
```
#### ngx-build-plus

To build the package are used the resources [ngx-build-plus](https://www.npmjs.com/package/ngx-build-plus)

```sh
ng add ngx-build-plus
```

## 3. Changing the base selector 

As you know, the generation of project by using *@angular/cli*, will generate the basic component `AppComponent` with the `app-root` selector. So, you have got to replace that with the your selector from your package. This parameter is reserved by the platform when package is creating, and it is called **FrontendPluginName**. The example below uses the project name from `package.json`. But this is not necessary. The following changes are required for variables:
```
// src/index.html
...
<body>
	<plugin-example></plugin-example>  <!-- <app-root></app-root> -->
</body>
...
```

```
// src/app/app.component.ts
...
@Component({
selector:  'plugin-example', // 'app-root',
template:  '<router-outlet></router-outlet>', // <-- також замінюємо стандартний вміст
styleUrls: ['./app.component.scss']
...
```
## 4. Routing changes

The **ALL** real paths should be contained in ***children*** section to handle correct routing.
> ***Note***. *Otherwise the ***ALL*** paths (including platform navigation) will be changed by navigating within the package. This won't get the package inoperable, but further use within the platform will be irrelevant.*

Also, to work the navigation properly, the base paths should be handled by the **updatePluginsRoutes (Routes)** method. Read more [here](https://www.npmjs.com/package/@natec/mef-dev-platform-connector).

As a result, the path declaration will look like this:

```
// src/app/app-routing.module.ts
import { PlatformHelper } from  '@natec/mef-dev-platform-connector';
...
// const  routes: Routes = [];
const  routes: Routes = PlatformHelper.updatePluginsRoutes([
	{
		path:"",
		children:[
			// insert routes here
		]
	}
]);
...
```

## 5. Creating of first component

> ***ATTENTION!*** *The implementation of markup in `AppComponent` is undesirable. From application development perspective, it is highly recommended to implement all functionality by the own component structure. [Example](https://github.com/mef-dev/tutorial-ui-plugin/blob/master/src/app/app-routing.module.ts)

As minimal, it is quite enough to implement one component to initial work:
```sh
ng g c test
```

After that we can add it into routing:

```
// src/app/app-routing.module.ts
import { PlatformHelper } from  '@natec/mef-dev-platform-connector';
...
// const  routes: Routes = [];
const  routes: Routes = PlatformHelper.updatePluginsRoutes([
	{
		path:"",
		children:[
			{
				path:"",
				redirectTo:"test",
				pathMatch:  'full',
			},
			{
				path:"test",
				component:  TestComponent
			}
		]
	}
]);
...
```

## 6. Specification file version.json

To upload into the platform, the assembly has got to contain a specification file. It is generated by the script located in [@natec/mef-dev-platform-connector](https://www.npmjs.com/package/@natec/mef-dev-platform-connector).

To generate you should to execute the command:
```
npm explore @natec/mef-dev-platform-connector -- npm run generate-version-file
```
The execution result is the file including the assembly information for the package.

To include this file into the build results, you have got to add the new asset path into the configuration file:
```
// angular.json
...
"architect": {
	"build": {
		"options": {
			...
			"assets": [
				"src/favicon.ico",
				"src/assets",
				"src/version.json" // <---	
			]
...
```
The specification file should be modified before each build for publishing. It would be good a practice to format *npm scripts* as in [example](https://github.com/mef-dev/tutorial-ui-plugin/blob/master/package.json).

Also, the execution result can be used within the application: [Example](https://github.com/mef-dev/tutorial-ui-plugin/blob/master/src/environments/environment.ts).

## 7. Build and deploy

To build the package you can use the command below:

```
 ng build --output-hashing none --prod --single-bundle
```

After that the content of the `dist` folder can be uploaded into the platform.

# Useful links

*  Guide to register package into the platform: https://mef.dev/en/dev_guides/upload_ui_plugin.md