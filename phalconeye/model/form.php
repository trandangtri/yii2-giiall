<?php

/**
 * @var yii\web\View                      $this
 * @var yii\widgets\ActiveForm            $form
 * @var yii\gii\generators\form\Generator $generator
 */

echo $form->field($generator, 'ns');
echo $form->field($generator, 'tableName');
echo $form->field($generator, 'modelClass');
echo $form->field($generator, 'baseClass');
echo $form->field($generator, 'generateRelations')->checkbox();