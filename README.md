webapp
======

webapp template for yii2.0


## Used

1. git clone https://github.com/netyum/webapp.git
2. move webapp to  yii2/yii/console/
3. run in command-line
```
  yii2/yii/yiic app/create path/to/appname 
```
or
```
  php yii2/yii/yiic.php app/create path/to/appname
```

## Deployment

webserver document_root is www/
modify www/index.php on line ```$frameworkPath = 'yii2/yii';``` as framework absolute or relative(www) path.

if your php php5.4.x then test run used
```
php -S localhost:88 -t www/
```
