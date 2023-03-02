
## set alias for php runner
We can set the alias to run phpunut directly on the cmd line like so 
alias phpunit="./vendor/phpunit/phpunit/phpunit"


## We can run one test from the Class
phpunit tests/AssertTrue.php --filter testTrueIsTrue

## Run tests with color 
phpunit tests/ --color

## Autoloading with composer
- add this your composer.json 
 ``
  "autoload": {
    "psr-4": {
      "": "src/"
    }
  },
  ``

- run: composer dump-autoload 

- run:  phpunit tests/<Class>.php --bootstrap 'vendor/autoload.ph