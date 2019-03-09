# Laravel Mix support plugin

[Laravel Mix](https://laravel-mix.com/docs/4.0/installation) support plugin for [ExpressionEngine](https://github.com/ExpressionEngine/ExpressionEngine). This plugin will expose a `{exp:mix path='/path/to/asset/file.js'}` tag that works like `mix('/path/to/asset/file.js')`. The tag will then return the asset URL base from the `mix-manifest.json` file.

## Installation
1. Download the plugin
2. Extract the downloaded zip file to your ExpressionEngine addons directory (`system/user/addons`)
3. Login to Admin and goto **Developer** > **Add-Ons** > **Third Party Add-Ons**.
4. Look for **Laravel Mix** and click **Install**
5. Add `$config['mix_manifest'] = 'path/to/mix-manifest.json';` to your config file. If the resulting manifest file is located at your root directory, the config entry should be `$config['mix_manifest'] = '{base_path}/mix-manifest.json`.

## Usage
Once the plugin is installed, you should now be able to use the `{exp:mix}` tag. This tag has a single property named `path` where you add the asset path that you want to reference. See examples below:

```
<link href="{exp:mix path='/css/app.css'}" rel="stylesheet" type="text/css" media="screen">
```