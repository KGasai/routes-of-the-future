<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h2>Заказы</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Клиент</th>
                        <th scope="col">Мероприятие</th>
                        <th scope="col">Дата начала</th>
                        <th scope="col">Дата конца</th>
                        <th scope="col">Количество</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Сумма</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $summa = 0;
                    foreach ($orders as $row):
                        $summa += $row['price'] * $row['kol']; ?>
                        <tr>
                            <td><?= $row['fio'] ?></td>
                            <td><?= $row['name_merop'] ?></td>
                            <td><?= $row['date1'] ?></td>
                            <td><?= $row['date2'] ?></td>
                            <td><?= $row['kol'] ?></td>
                            <td><?= $row['price'] ?></td>
                            <td><?= $row['price'] * $row['kol'] ?> руб</td>
                        </tr>
                    <?php endforeach; ?>
                    <th scope="col" style="background-color: aqua;">Итог:</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col" style="background-color: aqua;"><?= $summa ?> руб</th>
                </tbody>
            </table>
        </div>
        <div class="col-1"></div>
    </div>
</div>