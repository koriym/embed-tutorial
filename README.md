# embed-tutorial
for curl + openssl testing

```
composer install
php run.php
```

liip PHP (NG)
```
/usr/local/opt/php70/bin/php run.php 

PHP Fatal error:  Uncaught Embed\Exceptions\InvalidUrlException: The url 'https://www.youtube.com/watch?v=WCSeiSOaHxY' returns the following error: SSL: CA certificate set, but certificate verification is disabled in /Users/akihito/git/embed-tutorial/vendor/embed/embed/src/Embed.php:54
```

brew PHP (OK)
```
/usr/local/opt/php70/bin/php run.php 

object(Embed\Adapters\Youtube)#5 (7) {
...

```

osx build-in PHP 5.5(OK)
```
/usr/local/opt/php70/bin/php run.php 

object(Embed\Adapters\Youtube)#5 (7) {
...

```
