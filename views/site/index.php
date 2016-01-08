<?php
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use app\models\Orders;

    $this->title = 'Система учета времени работы над проектами';
?>
<div class="site-index">
    <div class="row">
        <h3>Добавить новый заказ</h3>
        <div class="site-Form">

        <?php $form = ActiveForm::begin([
                'method' => 'post',
                'action' => ['site/xxx'],
            ]);
        $model = new Orders;
         ?>

            <?= $form->field($model, 'work_dir') ?>
            <?= $form->field($model, 'link') ?>
            <?= $form->field($model, 'price') ?>
            <!-- <?= $form->field($model, 'time_begin') ?> -->
            <!-- <?= $form->field($model, 'time_total') ?> -->

            <div class="form-group">
                <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
            </div>
        <?php ActiveForm::end(); ?>

</div><!-- site-Form -->
    </div>

    <div class="body-content">
        <div class="row">
            <h3>Последние работы</h3>
            <table>
                <?php foreach ($orders as $order) { ?>
                    <tr>
                        <td><?=$order->work_dir ?></td>
                        <td><?=$order->price ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
