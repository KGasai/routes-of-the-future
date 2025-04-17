<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h2 class="text-center">Мероприятие</h2>
            <?php foreach ($merop as $row): ?>
                <div class="mt-3 d-flex flex-column gap-2">
                    <div  style="width: 300px;">
                        <img src="<?= $row['image']; ?>" class="img-fluid" alt="...">
                    </div>

                    <h3><?= $row['name_merop']; ?></h3>
                    <p><?= $row['description']; ?></p>
                    <i>С: <?= $row['date1']; ?> До: <?= $row['date2']; ?></i> 
                    <b>Цена: <?= $row['price']; ?> рублей</b>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="col-1"></div>
    </div>
</div>