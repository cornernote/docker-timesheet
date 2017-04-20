<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $model \app\models\forms\SaasuSettingsForm */
/* @var $this \yii\web\View */

$this->title = Yii::t('app', 'Saasu Settings');
?>
<?php $form = ActiveForm::begin(); ?>

<?php echo $form->field($model, 'wsAccessKey'); ?>

<?php echo $form->field($model, 'fileUid'); ?>

<?php echo $form->field($model, 'layout'); ?>

<?php echo $form->field($model, 'taxAccountUid'); ?>

<?php echo $form->field($model, 'inventoryItemUid'); ?>

<?php echo $form->field($model, 'fromEmail'); ?>

<?php echo $form->field($model, 'emailSubject'); ?>

<?php echo $form->field($model, 'emailBody')->textarea(); ?>

<?php echo Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>

<?php ActiveForm::end(); ?>