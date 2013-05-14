<?php
use \Yii;
use \yii\helpers\Html;

use \yii\widgets\Menu;
use \yii\widgets\Breadcrumbs;

$this->registerAssetBundle('app');
$this->beginPage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo Html::encode($this->title); ?></title>
<?php $this->head(); ?>
</head>

<body>

<div class="container" id="page">
<?php $this->beginBody(); ?>

<?php echo $content;?>

<?php $this->endBody(); ?>
</div><!-- page -->

</body>
</html>
<?php $this->endPage(); ?>
