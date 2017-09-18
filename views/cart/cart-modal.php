<?php if (!empty($session['cart'])): ?>
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Кол-во</th>
                    <th>Цена/ед.</th>
                    <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($session['cart'] as $id => $item) : ?>
                    <tr>
                        <td><?= \yii\helpers\Html::img("@web/images/products/{$item['img']}", ['height' => 30]) ?></td>
                        <td><?= $item['name'] ?></td>
                        <td><?= $item['qty'] ?></td>
                        <td><?= $item['price'] ?></td>
                        <td><span  data-id="<?= $id?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="2"><strong>Итого:</strong></td>
                    <td colspan="3"><b><?= $session['cart.qty'] ?></b></td>
                </tr>
                <tr>
                    <td colspan="3"><b>На сумму:</b></td>
                    <td colspan="2"><b><?= $session['cart.sum'] ?></b></td>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <h3>Корзина пуста</h3>
<?php endif; ?>






