
  <div class="fluid-container">
    <div class="row">
      <div class="col-12">
         <div class="carousel slide" data-ride="carousel" id="slides">
           <ol class="carousel-indicators">
             <li data-target="#slides" data-slide-to="0" class="active"></li>
             <li data-target="#slides" data-slide-to="1"></li>
             <li data-target="#slides" data-slide-to="2"></li>
             <li data-target="#slides" data-slide-to="3"></li>
           </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('storage/images/home/1.jpg')}}" />
              <div class="carousel-caption">
                <h1 class="display-2">Paper</h1>
                <h3>Лучшие игры и фото</h3>
                <button type="button" class="btn btn-outline-light btn-lg">Посмотреть</button>
                <button type="button" class="btn btn-warning btn-lg">Демо версия</button>
              </div>
            </div>
            <div class="carousel-item">
              <img src=" {{asset('storage/images/home/2.jpg')}}"/>
            </div>
            <div class="carousel-item">
              <img src=" {{asset('storage/images/home/3.jpg')}}" style="transform: translateY(-41%);" />
            </div>
            <div class="carousel-item">
              <img src=" {{asset('storage/images/home/4.jpg')}} " />
            </div>
          </div>
          <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
      </div>
    </div>
    </div>
  </div>
