@extends('user-page.layout')
@section('title')
    Home
@endsection
@section('current1')
    current
@endsection
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    {{-- indicator --}}
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    {{-- eto yung umiikot --}}
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
                <img src="/assets/img/home-bg-1.png" alt="">
                <span>Lamina Studios has released a new game called "<span style="color: #ffc40c;">Dungeon Souls</span>" on early access on Steam. The game was released on July 7, 2015.
                The game has very good positive reviews from the community and is now under its final development phase.</span>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <img src="/assets/img/home-bg-2.png" alt="">
                <span>Lamina Studios is the publisher of "<span style="color: #ffc40c;">Journey to Valhalla</span>" which was released on September 10, 2018 on early access on Steam. The game is a Hack and Slash adventure game inspired by Dark Souls and Necropolis.
                </span>
            </div>
        </div>
        <div class="carousel-item">
            <div class="container">
                <img src="/assets/img/home-bg-3.png" alt="">
                <span>Lamina Studios is the publisher of "<span style="color: #ffc40c;">Bad Bots Rise</span>" which was released on July 6, 2018 on early access on Steam. The game is is an action-packed platform-shooter.
                </span>
            </div>
        </div>
    </div>
    {{-- next and prev --}}
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection
