MVC TEST
======

NOTE
----
The master branch will always contain the latest stable version. If you wish to check older versions or newer ones currently under development, please switch to the relevant branch.

Get Started
-----------

#### Requirements

To run this application on your machine, you need at least:

* docker-compose
* >= PHP 8.0
* Apache Web Server with `mod_rewrite enabled`, and `AllowOverride Options` (or `All`) in your `httpd.conf` or or Nginx Web Server
* Latest Phalcon Framework extension installed/enabled
* MySQL >= 5.1.5


Application flow pattern:
---------------------
https://github.com/channaxxx/test_mvc.git

Run the docker for development:
---------------------

You can now build, create, start, and attach to containers to the environment for your application. To build the containers use following command inside the project root:

```bash
docker-compose build
```

To start the application and run the containers in the background, use following command inside project root:

```bash
docker-compose up -d
docker exec -it mvc-app bash
```
```bash
docker-compose down
```

Installing Dependencies via Composer
------------------------------------
Run the composer installer:

```bash
docker exec -it mvc-app composer install
```
or
```bash
docker exec -it mvc-app composer update
```



Map the domain
------------------------------------
Open the hosts file on your local machine `/etc/hosts`.
```bash
127.0.0.1  mvc-test.local
```

Running Application
------------------------------------
Open the browser
```bash
http://mvc-test.local.local:8111
```

