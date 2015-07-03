BDD Demo
========================

This is a basic Symfony 2 app. Make sure you read
the instructions to avoid permissions issues
with the cache and logs directories.

http://symfony.com/doc/current/book/installation.html#checking-symfony-application-configuration-and-setup

Instructions after you've cloned the repo:

```bash
composer install -o

app/console doctrine:database:create

app/console doctrine:schema:update --force

app/console doctrine:fixtures:load 

rm -rf app/cache/* 
```

To get a server running quickly on localhost:
```bash
app/console server:start
```

Run the Behat tests
```bash
bin/behat 
```

Run the phpspec test
```bash
bin/phpspec run --format=pretty
```

Slides: https://speakerdeck.com/pferre/behat-and-phpspec-workshop
