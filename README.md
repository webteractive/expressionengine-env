# [ExpressionEngine CMS](https://github.com/ExpressionEngine/ExpressionEngine) with [PHP dotenv](https://github.com/vlucas/phpdotenv)

An [ExpressionEngine](https://github.com/ExpressionEngine/ExpressionEngine) boilerplate that supports [PHP dotenv](https://github.com/vlucas/phpdotenv) to improve configuration management under git deployment like [Laravel Forge](https://forge.laravel.com/). [Laravel Mix](https://laravel-mix.com/) is also added to handle asset compilation with complimentary [plugin](https://github.com/webteractive/mix) to handle asset versioning URL. [Tailwind CSS](https://tailwindcss.com/docs/what-is-tailwind/) is also added because it's super awesome and why the hell not.

## Requirements
1. Composer
2. PHP 7 or newer
3. MySQL 5.6 or newer
4. Node.JS / NPM

## Installation
1. Download this repository as zip and extract or run `composer create-project webteractive\expressionengine-env your-app`.
2. Run `composer install` to install dependency. This is optional if you use the `composer create-project` way.
3. Import the `migration.sql` file to an empty database i.e. (mysql/mariadb: `mysql -uuser -p theemptydb < path/to/migration.sql`).
4. Rename `.env.stub` to `env` and update the required keys. This is optional if you use the `composer create-project` way.
5. Visit the Admin page to verify installation by going to `/admin.php`. The initial account is `admin` / `secret2019`. **Make sure to update the password!**

## What's inside?
A quick look at the top-level files and directories you'll see in a *expressionengine-env* project.

```
.
├── assets
├── node_modules
├── public
├── system
├── vendor
├── .env.stub
├── .gitignore
├── AUTHORS.md
├── composer.json
├── composer.lock
├── LICENSE.txt
├── Makefile
├── migration.sql
├── package-lock.json
├── package.json
├── README.md
├── tailwind.js
└── webpack.mix.js
```

## The Migration SQL
The **`migration.sql`** is an SQL dump file of a freshly installed [ExpressionEngine](https://github.com/ExpressionEngine/ExpressionEngine) with pre-installed [mix plugin](https://github.com/webteractive/mix). Once you imported this file, you won't need to run the ExpressionEngine install process. All you need to do is login to the Admin (go to `/admin.php`), add more configs and ultimately update the super secure password that has been initially provided.

## Environment Variables
All config keys that has been assigned to the `env` helper method will not be changed via Admin. This is the key to not mess up your git on modifying configurations.

**`BASE_PATH`** - the path where your ExpressionEngine files are located. This should be the directory where the `system` can be found. This key is **required**.

**`BASE_URL`** - the base URL of your ExpressionEngine instance. This key is **required**.

**`DB_NAME`** - the database name. This key is **required**.

**`DB_USER`** - the database user name. This key is **required**.

**`DB_PASSWORD`** - the database user password. This key is **required**.

**`ENV`** - the current environment of your ExpressionEngine install. The value should be `local` for local development to enable LiveReload. Defaults to `production`. 

**`ERROR_VISIBILITY`** - determines who can see PHP/MySQL errors when they occur. Defaults to `1`. [See](https://docs.expressionengine.com/latest/general/system-configuration-overrides.html#debug) for more details on this config key.

## Assets Bundling
A `webpack.mix.js` file is also provided to get your started right away on bundling your assets. If you are familiar on how Laravel Mix works then this is no sweat to you! If this is your first encounter with Laravel Mix, visit https://laravel-mix.com/ for more details on how it works.

The `assets` directory should house all your source assets. But if you like adventures then fire away, put it anywhere you like! Just remember, put your bundles inside the `public` directory. See the sample entry in the `webpack.mix.js` file for more details.

To start bundling, run `npm run dev` to quick compile assets in development mode. To watch for changes, run `npm run watch`. Whenever `npm run watch` is fired, LiveReload is also enabled so your browser should be reloaded once a change in your assets is detected (after compilation). Run `npm run prod` to compile for production.

A `Makefile` is also provided that houses some shortcut commands if your OS (Linux and macOS) supports it. Run `make dev` to start the development right, this will trigger `npm run watch`. Run `make prod` to compile for production.



