<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h2>Мероприятия</h2>
            <div class="row">
                <div class="col-6">
                    <a href="Manager/addMerop" class="btn btn-primary">Добавить мероприятие</a>
                </div>
                <div class="col-6">
                    <a href="Manager/addVidMerop" class="btn btn-primary">Добавить вид мероприятия</a>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">№ Вид мероприятия</th>
                        <th scope="col">Название</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($vid_merops as $vid_merop): ?>
                    <tr>
                        <th><?= $vid_merop['id_vid']; ?></th>
                        <th><?= $vid_merop['name_vid']; ?></th>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="col-1"></div>
    </div>
</div>