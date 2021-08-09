@extends("front.layouts.master")
@section("title", "Anasayfa")

@section("content")

<div id="myCarousel" class="carousel-slde
    carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel"
            data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel"
            data-slide-to="1"></li>
        <li data-target="#myCarousel"
            data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active"
             data-interval="1700";>
            <div class="overlay-image">
                <img src="/images/elektronik.jpg">
            </div>

            <div class="container">
                <h1>Elektronik Aletler</h1>
                <p> Elektronik aletlerin hepsi burada! </p>
                <a href="#" class="btn btn-lg btn-primary">
                    Go Shopping!
                </a>
            </div>
        </div>

        <div class="carousel-item"
             data-interval="700";>
            <div class="overlay-image"
                >
                <img src="/images/kirtasiye.jpg">
            </div>
            <div class="container">
                <h1>Kırtasiye ürünleri</h1>
                <p> Kırtasiye ürünleri burada!</p>
                <a href="#" class="btn btn-lg btn-primary">
                    Go Shopping!
                </a>
            </div>
        </div>

        <div class="carousel-item"
             data-interval="350";>
            <div class="overlay-image"
                >
                <img src="/images/giyim.jpg">
            </div>
            <div class="container">
                <h1>Giyim</h1>
                <p> Lorem ipsum color</p>
                <a href="#" class="btn btn-lg btn-primary">
                    Go Shopping!
                </a>
            </div>
        </div>

    </div>

    <a href="#myCarousel"
       class="carousel-control-prev" role="button"
       data-slide="prev">
        <span class="sr-only">Previous</span>
        <span class="carousel-control-prev-icon"
              aria-hidden="true"></span>
    </a>

    <a href="#myCarousel"
       class="carousel-control-next" role="button"
       data-slide="next">
        <span class="sr-only">Next</span>
        <span class="carousel-control-next-icon"
              aria-hidden="true"></span>
    </a>

</div>

    <article class="information">
        <h1>Information</h1>
        <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </article>


<div class="container-cards">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow" style="width: 20rem;">
                <div class="inner">
                    <img class="card-img-top" src="/images/elektronik.jpg" alt="Card image cap">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Electronics</h5>
                    <p class="card-text">Some quick example text to build on the card title.</p>
                    <a href="#" class="btn btn-success">Go!</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow" style="width: 20rem;">
                <div class="inner">
                    <img class="card-img-top" src="/images/kirtasiye.jpg" alt="Card image cap">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Stationery</h5>
                    <p class="card-text">Kırtasiye ürünleri burada.</p>
                    <a href="#" class="btn btn-success">Go!</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow" style="width: 20rem;">
                <div class="inner">
                    <img class="card-img-top" src="/images/giyim.jpg" alt="Card image cap">
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title">Clothes</h5>
                    <p class="card-text">Giyim ürünleri burada.</p>
                    <a href="#" class="btn btn-success">Go!</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
