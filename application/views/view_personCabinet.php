<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h2>Личный кабинет</h2>

            <div class="b-3">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Название мероприятия</th>
                            <th>Дата начала</th>
                            <th>Дата конца</th>
                            <th>Время</th>
                            <th>Количество</th>
                            <th>Цена</th>
                            <th>Взаимодействие</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $item): ?>
                            <tr>
                                <td><?= $item['name_merop'] ?></td>
                                <td><?= $item['date1'] ?></td>
                                <td><?= $item['date2'] ?></td>
                                <td><?= $item['time_merop'] ?></td>
                                <td><?= $item['kol'] ?></td>
                                <td><?= $item['price'] * $item['kol'] ?></td>
                                <?php if ($this->orders->checkDate($item['id_order'], date("Y-m-d"))): ?>
                                    <td><a href="user/toCancel/<?= $item['id_order']; ?>" class="btn btn-dark">Оставить отзыв</a></td>
                                <?php else: ?>
                                    <td><a href="user/toCancel/<?= $item['id_order']; ?>" class="btn btn-danger">Отменить</a></td>
                                <?php endif; ?>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php echo $pagination; ?>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>