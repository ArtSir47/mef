
# Creation of UI package "from scratch"

> *Передумови. Перед початком потрібно встановити [nodejs](https://nodejs.org/) та [@angular/cli](https://www.npmjs.com/package/@angular/cli)*

> Дана інструкція носить інформаційний характер, для кращого розуміння принципу побудови плагіна. Для економії часу та уникнення помилок, радимо, використовувати шаблони проектів або генератор проектів, що знаходиться в межах платформи

В рамках даної інструкції описаний шлях створення так званого базового плагіна для платформи [mef.dev](https://mef.dev/). Базовий плагін від тому, що **не матиме** реалізацій коду бізнес-логіки. Його мета - технічне оформлення будь-якого начального проекту для успішної роботи плагіна в межах платформи. 
> *Примітка. Протестовано на таких версіях @angular/cli: [12.2.17](https://www.npmjs.com/package/@angular/cli/v/12.2.17 "12.2.17"), [13.3.8](https://www.npmjs.com/package/@angular/cli/v/13.3.8 "13.3.8")*

## 1. Creation Angular project
Створюємо стандартну Angular аплікацію:
```sh
	ng new <app-name>
``` 

## 2. Adding dependencies

#### @natec/mef-dev-platform-connector

В проекті в подальшому можна використовувати практично будь-які додаткові бібліотеки. Проте, для роботи на платформі потрібно використовувати [@natec/mef-dev-platform-connector](https://www.npmjs.com/package/@natec/mef-dev-platform-connector) в якому зібраний основний функціонал роботи з платформою. Задля чого додаємо пакет:

```sh
	npm i @natec/mef-dev-platform-connector
```
#### ngx-build-plus

Для збіки плагіна використовуються ресурси [ngx-build-plus](https://www.npmjs.com/package/ngx-build-plus)

```sh
ng add ngx-build-plus
```

## 3. Changing the base selector 

При генерації проекту за допомогою *@angular/cli* генерується базова компонента `AppComponent` із селектором `app-root`. Нам потрібно його замінити на селектор нашого плагіну. Даний параметр резервуєтеся в межах платформи при створенні плагіну, і має назву **FrontendPluginName**. В прикладі нижче використовується назва проекту з `package.json`. Але це не обов'язково. Для змінний потрібно провести такі зміни:
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

Для коректної роботи роутінгів **УСІ** реальні шляхи повинні міститися в ***children*** секції. 
>***Примітка***. *В іншому випадку при навігації в межах плагіну буде змінюватися ***ВЕСЬ*** шлях (включно із навігацією платформи). Це не призведе до непрацездатності плагіна, проте подальше використання платформи буде непередбачуваним!*

Також, для правильної роботи навігації базові шляхи потрібно 'пропустити' через метод **updatePluginsRoutes(Routes)**. Детальніше [тут](https://www.npmjs.com/package/@natec/mef-dev-platform-connector).

У результаті, оголошення шляхів виглядатиме наступним чином:

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

>***УВАГА!*** *Реалізація розмітки в `AppComponent` небажана. Для подальшого розвитку аплікації рекомендується весь функціонал вивести во власну структуру компонентів. [Приклад](https://github.com/mef-dev/tutorial-ui-plugin/blob/master/src/app/app-routing.module.ts)

Для мінімальної роботи достатньо реалізувати один компонент:

```sh
ng g c test
```

Після чого добавити його в маршрутизацію:

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
Для завантаження на платформу в збірці повинен міститися файл специфікації. Він генерується скриптом, що знаходиться в [@natec/mef-dev-platform-connector](https://www.npmjs.com/package/@natec/mef-dev-platform-connector).

Для генерації необхідно виконати команду:
```
npm explore @natec/mef-dev-platform-connector -- npm run generate-version-file
```
Результат його виконання є генерація файлів що містять набір інформації про збірку плагіна. 

Для копіювання файлу в результати збірки необхідно добавити шлях до нового ассету в файлі налаштувань:
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
Файл специфікації потрібно змінювати перед кожною збіркою для публікації. Хорошою практикою буде оформити *npm scripts* як в [прикладі](https://github.com/mef-dev/tutorial-ui-plugin/blob/master/package.json).

Також результат його роботи можна використовувати в межах аплікації. [Приклад](https://github.com/mef-dev/tutorial-ui-plugin/blob/master/src/environments/environment.ts).

## 7. Build and deploy

Для збірки плагіна можна використовувати команду:

```
 ng build --output-hashing none --prod --single-bundle
```

Після чого вміст папки `dist` можна завантажувати на платформу.

# Useful links

*  Інструкція про реєстрації плагіна на платформі: https://mef.dev/uk/dev_guides/upload_ui_plugin.md