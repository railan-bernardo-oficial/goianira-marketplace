<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $pageTitle ?? 'Goianira Marketplace' }}</title>
  <!-- bootstrap icones -->
  <link rel="stylesheet" href="{{ asset('vendor/twbs/bootstrap-icons/font/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/boot.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
 
  <header class="headder__container">
    <div class="container">
      <!-- conteudo header desktop -->
      <div class="full__width grid gap__x__20 grid__columns__4__1 desktop">
        <div class="logo__container w__full">
          <a href="" class="flex">
            <img src="{{ asset('assets/img/logo-marketplace.svg') }}" alt="Goianira Marketplace" title="Goianira Marketplace" />
          </a>
        </div>

        <div class="search__container w__full">
          <form class="form__search rounded__8">
            <input type="text" name="search" placeholder="Faça sua busca aqui." />
            <button type="submit" class="search__button"><i class="bi bi-search"></i></button>
          </form>
        </div>
        <div class="login__container relative flex">
          <i class="bi bi-person-circle i__person"></i>
          <span class="login__text">
            Olá, faça seu login<br>ou cadastre-se
            <i class="bi bi-chevron-down"></i>
          </span>
          <div class="tootip__login__container">
              <p> Acesse sua conta.</p>
              <a href="" class="btn rounded btn__hover__opacity mb__10 btn__solid__blue">Entrar</a>
              <a href="" class="btn rounded btn__hover__opacity btn__line__blue">Cadastre-se</a>
          </div>
        </div>
        <div class="overlay"></div>
        <div class="favorits_container">
          <i class="bi bi-heart"></i>
        </div>
      </div>
      <!-- conteudo header mobile -->
      <div class="full__width grid gap__x__20 grid__columns__1 mobile">
        <div class="full__width grid grid__columns__2">
          <div class="logo__container w__full flex item_center">
            <button class="button__open__menu" onclick="show('aside__container');">
              <i class="bi bi-list"></i>
            </button>
            <a href="" class="flex">
              <img src="{{ asset('assets/img/logo-marketplace.svg') }}" alt="Goianira Marketplace" title="Goianira Marketplace" />
            </a>
          </div>
          <div class="favorits_container">
            <i class="bi bi-heart"></i>
          </div>
        </div>
        <div class="search__container py__15 w__full">
          <form class="form__search rounded__8">
            <input type="text" name="search" placeholder="Faça sua busca aqui." />
            <button type="submit" class="search__button"><i class="bi bi-search"></i></button>
          </form>
        </div>
      </div>

      <!-- menu desktop -->
      <div class="nav full__width">
        <ul class="menu__container flex item__center gap__15">
          <li class="relative link__departaments_desktop"><a href="" class="link__dep"><i class="bi bi-list i__list"></i> Departamentos</a>
            <ul class="submenu__container_desktop">
                <li><a href="">Serviços</a></li>
                <li><a href="">Ofertas</a></li>
                <li><a href="">Planos</a></li>
                <li><a href="">Anunciar</a></li>
                <li><a href="">Contato</a></li>
            </ul>
          </li>
          <div class="overlay"></div>
          <li><a href="">Serviços</a></li>
          <li><a href="">Ofertas</a></li>
          <li><a href="">Planos</a></li>
          <li><a href="">Anunciar</a></li>
          <li><a href="">Contato</a></li>
        </ul>
      </div>
      <!-- menu mobile -->
      <aside class="aside__container">
        <div class="login__container__mobile w__full">
          <div class="w__full flex justify__end mb__10">
            <button class="btn__close_menu_mobile" onclick="closeX('aside__container');"><i class="bi bi-x-lg"></i></button>
          </div>
          <div class="w__full flex item__center mb__15">
            <i class="bi bi-person-circle i__person__mobile"></i>
            <span class="login__text__mobile">
              Entre ou cadastre-se<br>
              <span class="text__span">Sua história começa aqui!</span>
            </span>
          </div>
          <div class="flex gap__15 w__full">
            <a href="" class="btn w__full rounded__6 btn__solid__blue">Entrar</a>
            <a href="" class="btn w__full rounded__6 btn__line__blue">Cadastrar</a>
          </div>
        </div>
        <ul class="menu__container__mobile">
          <li class="relative">
            <a href="javascript:void(0)" onclick="show('menu__container__departaments__mobile');" class="link__departaments">Departamentos <i class="bi bi-chevron-right"></i>
            </a>
            <div class="menu__container__departaments__mobile">
              <a href="javascript:void(0)" onclick="closeX('menu__container__departaments__mobile');" class="close__submenu__mobile"><i class="bi bi-chevron-left"></i> Voltar</a>
              <a href="">Serviços</a>
              <a href="">Ofertas</a>
              <a href="">Planos</a>
              <a href="">Anunciar</a>
              <a href="">Contato</a>
            </div>
          </li>
          <li><a href="">Serviços</a></li>
          <li><a href="">Ofertas</a></li>
          <li><a href="">Planos</a></li>
          <li><a href="">Anunciar</a></li>
          <li><a href="">Contato</a></li>
        </ul>
    </aside>

    </div>
  </header>
  @yield('content')
  <footer class="footer__container">
    <div class="container">
      <div class="full_width grid grid__columns__3__7 gap__20">
        <div class="logo__foter">
          <img src="{{ asset('assets/img/logo-footer.svg') }}" alt="Goianira Marketplace" title="Goianira Marketplace" />
        </div>
        <div class="menu__footer flex gap__15">
            <div class="w__full">
                <h2>Departamentos</h2>
                <ul>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Ofertas</a></li>
                    <li><a href="">Planos</a></li>
                    <li><a href="">Anunciar</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </div>
            <div class="w__full">
                <h2>Menu</h2>
                <ul>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Ofertas</a></li>
                    <li><a href="">Planos</a></li>
                    <li><a href="">Anunciar</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </div>
        </div>
        <div class="social__midia">
          <h2 class="w__full midia__text__title">Siga</h2>
          <div class="w__full mobile__center flex gap__x__15 mt__15">
            <a href="">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="">
              <i class="bi bi-instagram"></i>
            </a>
        </div>
        </div>
      </div>
    </div>
    <p class="w__full copy__text text__center">&copy; {{ date('Y') }} - Todos os direitos reservados</p>
  </footer>
  <!-- scripts -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>