<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h2 class="text-center">Записаться</h2>

            <form action="user/signUp" method="get" style="width: 500px;border:1px solid black" class="p-3 ms-auto me-auto" ;>
                <div class="row">
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="">Введите вид группы:</label>
                            <select name="id_grup" id="form-control" class="form-control">
                                <?php foreach ($vid_grupps as $row): ?>
                                    <option value="<?= $row['id_grup'] ?>"><?= $row['name_grup'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-3">
                            <label for="">Введите вид мероприятия:</label>
                            <select name="id_vid" id="form-control" class="form-control">
                                <?php foreach ($excursions as $row): ?>
                                    <option value="<?= $row['id_vid'] ?>"><?= $row['name_vid'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Найти</button>
                    <button type="reset" class="btn btn-dark">Сбросить</button>
                </div>
            </form>

            <?php if ($merops): ?>
                <div class="d-flex flex-column  gap-3 mt-5">
                    <?php foreach ($merops as $merop): ?>
                        <div class="card h-100 ms-auto me-auto" style="width: 20rem;">
                            <img src="<?= $merop['image']; ?>" class="card-img-top h-100" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $merop['name_merop']; ?></h5>
                                <small class="text-body-secondary"><?= $merop['date1']; ?> - <?= $merop['date2']; ?></small>
                            </div>
                            <div class="card-footer text-end">
                                <a href="main/page_merop/<?= $merop['id_merop']; ?>" class="btn btn-secondary">Далее</a>
                                <a href="user/toOrder/<?= $merop['id_merop']; ?>" class="btn btn-success">Записаться</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <h2 class="text-center">Не найдено</h2>
            <?php endif; ?>
        </div>
        <div class="col-1"></div>
    </div>
</div>