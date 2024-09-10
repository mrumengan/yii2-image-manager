<div class="thumbnail" style="width: 100px; overflow: hidden">
	<img style="width: 100%; height: 100px;" src="<?= \Yii::$app->imagemanager->getImagePath($model->id, 300, 300) ?>" alt="<?= $model->fileName ?>">
	<div class="filename mt-2 overflow-scroll"><?= $model->fileName ?></div>
</div>