<div class="container">
  <div id="carouselExampleIndicators" class="carousel slide border border-secondary border-5">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
        <img src="img/slide1.jpg" class="d-block w-100 border border-secondary border-3" alt="...">
      </button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2">
        <img src="img/slide1.jpg" class="d-block w-100 border border-secondary border-3" alt="...">
      </button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3">
        <img src="img/slide1.jpg" class="d-block w-100 border border-secondary border-3" alt="...">
      </button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4">
        <img src="img/slide1.jpg" class="d-block w-100 border border-secondary border-3" alt="...">
      </button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5">
        <img src="img/slide1.jpg" class="d-block w-100 border border-secondary border-3" alt="...">
      </button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slide1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slide1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slide1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slide1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/slide1.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="row">
    <div class="col-md-8">
      <h3 class="mt-4 mb-4 text-success">Туры</h3>
      <div class="row row-cols-1 row-cols-md-2 g-4">
        <?php foreach ($tours as $tour): ?>
          <div class="col">
            <div class="card h-100" style="width: 20rem;">
              <img src="<?= $tour['image']; ?>" class="card-img-top h-100" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $tour['name_merop']; ?></h5>
                <small class="text-body-secondary"><?= $tour['date1']; ?> - <?= $tour['date2']; ?></small>
              </div>
              <div class="card-footer text-end">
                <a href="main/page_merop/<?= $tour['id_merop'];?>" class="btn btn-secondary">Далее</a>
                <a href="user/toOrder/<?= $tour['id_merop'];?>" class="btn btn-success">Записаться</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>


    <div class="col-md-4">
      <h3 class="mt-4 mb-4 text-success">Экскурсии</h3>
      <?php foreach ($excursions as $excursions): ?>
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="<?= $excursions['image']; ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><a href="Main/page_merop?id_merop=<?= $excursions['id_merop'];?>"><?= $excursions['name_merop']; ?></a></h5>
            </div>
          </div>
        </div>
      <?php endforeach; ?>


      <label for="customRange2" class="form-label text-center mt-4 mb-4">Цена</label>
      <input type="range" class="form-range" value="4321" min="1" max="10000" id="customRange2">
      <h5 id="textrange" class="text-center">4321 руб</h5>

      <form class="mt-4 mb-4">
        Куда сходить
        <div class="col-12 mt-2 mb-4">
          <select class="form-select" name="staticEmail2" id="staticEmail2">
            <option value="#">Популярности</option>
            <option value="#">Дате</option>
            <option value="#">Просмотрам</option>
          </select>
        </div>
        Выбрать метро
        <div class="col-12 mt-2 mb-2">
          <select class="form-select" name="metro" id="metro">
            <option value="#">Популярности</option>
            <option value="#">Дате</option>
            <option value="#">Просмотрам</option>
          </select>
        </div>
        <div class="col-12 mt-2 mb-2">
          <input type="date" class="form-control" id="data" placeholder="Password">
        </div>
      </form>

      <h3 class="mt-4 mb-4 text-success">Карта маршрутов</h3>
      <img src="img/картаРФ.png" class="img-thumbnail" alt="carta">
      <h3 class="mt-4 mb-4 text-success">Последние новости</h3>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/img14.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Заголовок новости</h5>
              <p class="card-text">Это описание новости</p>
            </div>
          </div>
        </div>
      </div>
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img/img20.png" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Заголовок новости</h5>
              <p class="card-text">Это описание новости</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <section>
    <h3 class="mt-4 mb-4 text-success">Путешественнику</h3>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100" style="width: 20rem;">
          <img src="img/Нижегород.png" class="card-img-top h-100" alt="...">
          <div class="card-body">
            <h5 class="card-title">Начало нового!</h5>
            <p class="card-text">Нижегородская область – место встречи реки Волга и Ока</p>
            <p class="card-text">
              Здесь Вы сможете:
              • Сделать ёлочную игрушку своими руками
              • Познакомиться с миром стали
              • Испытать чувство гордости за отечественный автопром
              • Узнать при какой температуре закаливается мороженое
            </p>

          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="width: 20rem;">
          <img src="img/Ростовская область.png" class="card-img-top h-100" alt="...">
          <div class="card-body">
            <h5 class="card-title">Дай волю чувствам!</h5>
            <p class="card-text">Ростовская область – Зарядись энергией Вольного Дона! </p>
            <p class="card-text"></p> Здесь Вы сможете:
            • Почувствовать себя настоящим живописцем
            • Примерить на себя роль профессионального сомелье
            • Познакомиться с современным производством сельхозтехники

            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100" style="width: 20rem;">
          <img src="img/г.Севастополь.png" class="card-img-top h-100" alt="...">
          <div class="card-body">
            <h5 class="card-title">Испытай гастрономический восторг!</h5>
            <p class="card-text">Севастополь – город ярких впечатлений</p>
            <p class="card-text"> Здесь Вы сможете:
              • Примерить на себя роль профессионального сомелье
              • Попробовать на вкус изыски моря
              • Поиграть в винное казино
              • Насладиться атмосферой края
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</div>