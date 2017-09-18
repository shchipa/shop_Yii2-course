<div class="table-responsive">
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th>Наименование</th>
            <th>Кол-во</th>
            <th>Цена/ед.</th>
            <th>Сумма</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($session['cart'] as $id => $item) : ?>
            <tr>
                <td><?= $item['name'] ?></a></td>
                <td><?= $item['qty'] ?></td>
                <td><?= $item['price'] ?></td>
                <td><?= $item['qty'] * $item['price'] ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td><strong>Итого:</strong></td>
            <td colspan="3"><b><?= $session['cart.qty'] ?></b></td>
        </tr>
        <tr>
            <td colspan="3"><b>На сумму:</b></td>
            <td><b><?= $session['cart.sum'] ?></b></td>
        </tbody>
    </table>
</div>