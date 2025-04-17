<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h2 class="text-center">Записаться на мероприятие</h2>

            <form action="User/insertOrder" class="ms-auto me-auto text-center" method="post" style="width: 400px;">
                <?php foreach ($merop as $row): ?>
                    <div class="mt-3 d-flex flex-column gap-2">
                        <div style="width: 300px;" class="ms-auto me-auto">
                            <img src="<?= $row['image']; ?>" class="img-fluid" alt="...">
                        </div>
                        <h3><?= $row['name_merop']; ?></h3>
                        <i>С: <?= $row['date1']; ?> До: <?= $row['date2']; ?></i>
                        <b>Цена: <?= $row['price'];?> рублей</b>
                        <div class="mb-3">
                            <label for="">Количество</label>
                            <input type="number" name="kol" class="form-control">
                            <input type="hidden" name="id_merop" value=" <?= $row['id_merop'];?>">
                        </div>
                        <button type="submit" class="btn btn-success">Записаться</button>
                    </div>
                <?php endforeach; ?>
            </form>
        </div>
        <div class="col-1"></div>
    </div>
</div>