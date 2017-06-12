<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/**
 * @var $this \yii\web\View
 * @var $model \app\models\forms\TogglSettingsForm
 */

$model->load(Yii::$app->request->post());

$this->title = Yii::t('app', 'Toggl Settings');
?>
<?php $form = ActiveForm::begin(); ?>

<?php echo $form->errorSummary($model); ?>

<?php echo $form->field($model, 'startDate'); ?>

<?php echo $form->field($model, 'endDate'); ?>

<?php echo Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>

<?php ActiveForm::end(); ?>
