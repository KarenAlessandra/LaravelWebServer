@extends('layout.app')

@section('content')
<body>
<main>
<!-- home -->
<!-- Search bar -->
<br />
<div class="containerPage">

<div class="container2" style="border-radius: 1%; padding-right: 30px !important">

<form action="./functions/searchProducts.php" method="get">
<div class="input-group">
<br /><br />

<div class="container text-center">
@yield('titulo', 'Encontre seu Bolo')
</div>
<br /><br />

<div class="input-group-append">
<button class="btn_send" type="submit">Buscar</button>
</div>
</form>

<br /><br />

<div class="row text-center">
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama" style="border-radius: 3%;">
<img src="{{ asset('./images/1.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/2.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/3.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/4.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/5.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/6.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/7.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/8.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/9.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/10.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/11.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/12.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/13.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/14.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/15.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/16.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/17.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
<div class="col-lg-3 col-sm-6 col-xl-2">
<div class="card chama">
<img src="{{ asset('./images/18.png') }}"></img>
<br />
<p>blablablabla</p>
<h4 class="Price">29,00</h4>
</div>
</div>
</div>
</div>
<br /><br />
<div class="d-flex justify-content-center">
<nav>
<ul class="pagination">
<li class="page-item disabled">
<a class="page-link" href="#" tabindex="-1" aria-disabled="true">&lt;</a>
</li>
<li class="page-item active"><a class="page-link" href="./produtos">1</a></li>
<li class="page-item" aria-current="page">
<a class="page-link" href="./produtos?page=2">2</a>
</li>
<li class="page-item"><a class="page-link" href="./produtos?page=3">3</a></li>
<li class="page-item">
<a class="page-link" href="./produtos?page=2">&gt;</a>
</li>
</ul>
</nav>
</div>

<!-- pagination page 2 -->
<!-- <div class="d-flex justify-content-center">
<nav>
<ul class="pagination">
<li class="page-item">
<a class="page-link" href="./produtos.html">&lt;</a>
</li>
<li class="page-item"><a class="page-link" href="./produtos.html">1</a></li>
<li class="page-item active" aria-current="page">
<a class="page-link" href="./produtos2.html">2</a>
</li>
<li class="page-item"><a class="page-link" href="./produtos3.html">3</a></li>
<li class="page-item">
<a class="page-link" href="./produtos3.html">&gt;</a>
</li>
</ul>
</nav>
</div>
</div> -->

<!-- pagination page 3 -->
<!-- <div class="d-flex justify-content-center">
<nav>
<ul class="pagination">
<li class="page-item">
<a class="page-link" href="./produtos2.html">&lt;</a>
</li>
<li class="page-item"><a class="page-link" href="./produtos.html">1</a></li>
<li class="page-item" aria-current="page">
<a class="page-link" href="./produtos2.html">2</a>
</li>
<li class="page-item active"><a class="page-link" href="./produtos3.html">3</a></li>
<li class="page-item disabled">
<a class="page-link" href="#" aria-disabled="true">&gt;</a>
</li>
</ul>
</nav>
</div> -->
</div>
@endsection