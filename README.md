hexlet
https://ru.hexlet.io/courses/php-mvc/lessons/slim/theory_unit
----------
SLIM

cd /storage/works/hexlet/slim/

drwxrwxr-x  4 mkaro mkaro  4096 Sep 26 12:35  .
drwxrwxr-x  3 mkaro mkaro  4096 Sep 26 17:20  ..
drwxrwxr-x  4 mkaro mkaro  4096 Sep 26 14:28  public
drwxrwxr-x 11 mkaro mkaro  4096 Sep 26 12:34  vendor
-rw-rw-r--  1 mkaro mkaro   180 Sep 26 12:29  composer.json
-rw-rw-r--  1 mkaro mkaro 40754 Sep 26 12:29  composer.lock
-rw-r--r--  1 mkaro mkaro    56 Sep 26 12:20  Makefile
-rw-r--r--  1 mkaro mkaro     0 Sep 26 12:28 '!root'

composer require slim/slim slim/psr7 slim/http slim/php-view php-di/php-di
make start

cd /storage/works/hexlet/slim/public/

drwxrwxr-x 4 mkaro mkaro 4096 Sep 26 14:28 .
drwxrwxr-x 4 mkaro mkaro 4096 Sep 26 12:35 ..
drwxrwxr-x 2 mkaro mkaro 4096 Sep 26 18:01 example
drwxrwxr-x 8 mkaro mkaro 4096 Sep 26 18:03 .git
-rw-rw-r-- 1 mkaro mkaro   41 Sep 27  2021 .gitignore
-rw-r--r-- 1 mkaro mkaro 1272 Sep 26 18:22 index.php
-rw-r--r-- 1 mkaro mkaro   76 Sep 26 14:02 README.md
-rw-r--r-- 1 mkaro mkaro  253 Sep 26 17:46 users.php

git init
git add .
$ git commit -m "init"
$ git branch -M main

Create repo in GitHub manully before!! hexlet-slim-example
use just main branch !!

$ git remote add origin https://github.com/ichar/hexlet-slim-example.git
$ git push -u origin main

---------------------------

Update repository:

$ git add .
$ git status
$ git commit -m "info"
$ git push -u origin master

---------------------------

Add or Remove repository:

$ git remote add origin https://github.com/ichar/hexlet-slim-example
$ git rm -f --cached hexlet-slim-example

sudo lsof -i :8080

php -S localhost:8080

http://localhost:8080/

