@extends('layout/main')

@section('content')
<section class="banner__company__container">
  <img class="desktop" src="https://http2.mlstatic.com/storage/official-stores-images/123comprou/background20211802185414.jpg" alt="" />
  <div class="container flex item__center__mobile">
    <div class="brand__container">
      <img src="https://http2.mlstatic.com/D_NP_795268-MLA44926532297_022021-T.webp" alt="" />
    </div>
    <div class="box__info__banner__mobile mobile">
        <h2>123 Compou</h2>
        <span>Loja oficial</span>
    </div>
  </div>
</section>
<section class="container mt__60">
    <div class="full__width grid grid__columns__2__10 gap__30">
        <aside class="w__full asside__left__container">
           <div class="header__left__container w__full">
              <ul class="crumb__list__container">
                <li><a href="">Lojas Oficial</a></li>
                <li><i class="bi bi-chevron-right"></i></li>
                <li><a href="">Empresa 123</a></li>
              </ul>
              <h2 class="mt__15 inline">123 Comprou Loja Oficial</h2>
           </div>
           <ul class="categories__container">
              <li class="text__title">Categorias</li>
              <li><a href="">Categoria 1</a></li>
              <li><a href="">Categoria 1</a></li>
              <li><a href="">Categoria 1</a></li>
              <li><a href="">Categoria 1</a></li>
              <li><a href="">Categoria 1</a></li>
              <li><a href="">Categoria 1</a></li>
              <li><a href="">Categoria 1</a></li>
           </ul>
        </aside>
        <div class="main__container w__full mb__30">
            <div class="">
              <a href="" class="card__item__link">

              </a>
            </div>
            <div class="">
              <a href="" class="card__item__link">

              </a>
            </div>
            <div class="">
              <a href="" class="card__item__link">

              </a>
            </div>
            <div class="">
              <a href="" class="card__item__link">

              </a>
            </div>
            <div class="">
              <a href="" class="card__item__link">

              </a>
            </div>
            <div class="">
              <a href="" class="card__item__link">

              </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/page.css') }}">
@endpush