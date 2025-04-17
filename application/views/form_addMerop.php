<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h2>Добавить мероприятие</h2>

            <form action="Manager/insertMerop" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="">Вид группы:</label>
                    <select name="id_grup" class="form-control" id="form-control">
                        <?php foreach ($vid_grupps as $vid_grupp): ?>
                            <option value="<?= $vid_grupp['id_grup']; ?>"><?= $vid_grupp['name_grup']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="">Вид мероприятия:</label>
                    <select name="id_vid" class="form-control" id="form-control">
                        <?php foreach ($vid_merops as $vid_merop): ?>
                            <option value="<?= $vid_merop['id_vid']; ?>"><?= $vid_merop['name_vid']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="">Название мероприятия:</label>
                    <input type="text" name="name_merop" class="form-control" id="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Цена:</label>
                    <input type="number" name="price" class="form-control" id="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Дата начала:</label>
                    <input type="date" name="date1" class="form-control" id="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Дата конца:</label>
                    <input type="date" name="date2" class="form-control" id="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Время:</label>
                    <input type="time" name="time_merop" class="form-control" id="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Фотография:</label>
                    <input type="file" name="image" class="form-control" id="form-control" accept="image/*">
                </div>

                <div class="mb-3">
                    <label for="">Описание:</label>
                    <textarea name="description" class="form-control" id="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label for="">Адрес:</label>
                    <input type="text" name="adres" class="form-control" id="form-control">
                </div>

                <button type="submit" class="btn btn-success">Отправить</button>
            </form>
        </div>
        <div class="col-1"></div>
    </div>
</div>