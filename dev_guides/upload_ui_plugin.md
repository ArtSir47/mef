

# Registration and uploading of packages

Instructions for registering and uploading the plugin for the [mef.dev](https://mef.dev/) platform are given below for the case of the simple UI type plugin. To do this, you must be a registered user of the platform - if you are not registered, the first time you log in to [Preview](https://preview.mef.dev) you will be given the opportunity to register based on your LinkedIn account.

According to the sequence below, we will register [plugin-example](https://github.com/mef-dev/ui-plugin-example) with the minimum functionality on type `Canvas` but for other types of plug-ins, the process is similar.

## Package registration into platform

To begin with, go to the plugin creation page - it is located in the `Plugins` menu item of the mef.dev platform and is available after the user login.

|![Creating page](/Images/dev_guides/create_ui_plugin/1.png)|
| :--: |

> *Note. This functionality is available to users with Developer Admin and Developer roles*

After clicking the Add button, we get to the plugin creation page. In this case, we need to specify the details of the new plugin below:

- **ALIAS** - the name of the subject area of the package, which is used to combine packages by functional purpose (logical group). Should be noted that package names cannot intersect within one ALIAS name. 
- **NAME** - the package name. 

After entering this data, we will pass to a choice of package type. At this time the platform supports 4 main package types - the purpose of each type and the differences between them are written in the help (green block). Now we are interested in the `Canvas` type - a package oriented to handle the UI components, so we choose it.

After the selection, our `Frontend` block was activated to user input. It contains only one field `FrontendPluginName`. This is the main module selector for the package. This selector was described detailed in [guide for creating a package from scratch](https://mef.dev/en/dev_guides/first_ui_plugin.md). Enter the name, by example the value `plugin-example` and click **Save**.
When all fields are filed correctly, you will be directed to the package configuration page.

> *Note. Futher, you can navigate to it via the `Configure` sub-menu in the selected row menu, located in the last column of table on the page* ***Plugins***

|![Creating page](/Images/dev_guides/create_ui_plugin/2.png)|
| :--: |

## Configuration of package
In order for the package get run, you have got to make basic settings before uploading it.

### General settings
These settings are informational parameters only - they do not affect the package operation into platform and are used only to show other users the package information within the platform. 

### Dependencies settings
Used in cases, when the package should use the functionality from other backend packages (already uploaded on the platform), such as Model-driven-API or Service packages.
> *Note. When Dependencies are added, basic information about them will be handled to the UI package using [@natec/mef-dev-platform-connector](https://www.npmjs.com/package/@natec/mef-dev-platform-connector)*

### Router Links settings
That applies only to packages kind of `Canvas` and `Portal`. You have got to describe pages within the package. The platform will reserve a set of pages within the package, thus to use them externaly, you have got to register the list of pages that will be used by the package.

## Uploading version of package
The updated or initial package version is uploaded from the **Frontend** block.

When you click on the Upload button, you have got to select the ZIP archive with **collected package content from the folder** witn name: `dist`.
> ***Attention!*** *Content folder have be placed in the root of the archive!*

It is not allowed to upload has already uploaded version - so it is important to manage the package versioning and do changes of version in `package.json`.

The version selection combo shows the actual version, which will be provided to the user by default when user is requested the package.
> In some scenarios of using, it is desirable to request different versions at the same time, so the platform provides this capability within the package lifecycle on the platform.
