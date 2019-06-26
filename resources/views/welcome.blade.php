@extends('layouts.app')

@section('content')
  
<div class="container bg-secondary text-white">
  <div class="row">
    <div class="col">
      <h1>standard heading</h1>
      <p class="text-danger">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
      <button type="button" class="btn btn-primary m-2 p-2">primary button</button>
      <button type="button" class="btn btn-danger m-3 p-3">danger button</button>
    </div>
  </div>
</div>
{{-- end of container --}}

<div class="container-fluid bg-warning text-dark py-5">
  <div class="row">
    <div class="col">
      <h1 class="display-1">display-1</h1>
      <p class="display-1">paragraph with display-1</p>
      <p class="text-success lead px-5">
      Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
      tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
      vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
      no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
      <button class="btn btn-dark text-danger mt-4">dark button</button>
      <button class="btn btn-dark text-muted mb-4">success button</button>
      <button class="btn btn-secondary text-primary mx-4">secondary button</button>
    </div>
  </div>
</div>
{{-- end of container fluid --}}

<section class="bg-dark py-5" id="skills">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h1 class="text-white">Section Example</h1>
        <p class="display-4 text-warning">paragraph display</p>
        <p class="text-info px-5 text-right">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
        <p class="text-light text-left py-5">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
        <button class="btn btn-warning text-secondary">btn warning</button>
        <button class="btn btn-info text-dark">btn info</button>
        <button class="btn btn-light text-dark">btn light</button>
      </div>
    </div>
  </div>
</section>
{{-- end of first section --}}

<section class="bg-light">
  <div class="container">
    <div class="row text-center py-5">
      <div class="col">
        <h1 class="display-2 text-danger text-uppercase">udemy</h1>
        <p class="text-muted lead my-4">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
        no sea takimata sanctus est Lorem ipsum dolor sit amet.
        </p>
        <a href="" class="btn btn-secondary text-danger text-uppercase p-3 mt-3">explore</a>
        <a href="" class="btn btn-dark text-light text-uppercase p-3 mt-3 mx-3">explore</a>
      </div>
    </div>
  </div>
</section>
{{-- end of second section --}}

<section class="bg-primary py-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col text-center bg-danger">
        <i class="fas fa-home fa-3x text-light"></i>
        <h3 class="text-dark">fa-home</h3>
      </div>
      <div class="col text-center bg-info">
        <i class="fas fa-home fa-3x text-light"></i>
        <h3 class="text-dark">fa-home</h3>
      </div>
      <div class="col text-center bg-warning">
        <i class="fas fa-home fa-3x text-dark"></i>
        <h3 class="text-dark">fa-home</h3>
      </div>
      <div class="col text-center bg-success">
        <i class="fas fa-home fa-3x text-dark"></i>
        <h3 class="text-dark">fa-home</h3>
      </div>
    </div>
  </div>
</section>
{{-- end of first grid --}}

<section class="bg-success py-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-8 bg-secondary mb-3 text-center">
        <i class="fas fa-star fa-3x"></i>
        <h3>star</h3>
      </div>
      <div class="col-4 bg-light mb-3 text-center">
        <i class="fas fa-star fa-3x"></i>
        <h3>star</h3>
      </div>
      <div class="col-3 bg-secondary mb-3 text-center">
        <i class="fas fa-star fa-3x"></i>
        <h3>star</h3>
      </div>
      <div class="col-9 bg-primary mb-3 text-center">
        <i class="fas fa-star fa-3x"></i>
        <h3>star</h3>
      </div>
    </div>
  </div>
</section>
{{-- end of second grid --}}

<section class="bg-light py-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <i class="fab fa-html5 fa-3x text-info"></i>
        <h2 class="text-capitalize text-dark py-3">learn html</h2>
        <p class="text-muted">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
        no sea takimata sanctus est Lorem ipsum dolor sit amet.
        </p>
      </div>
      <div class="col-md-4">
        <i class="fab fa-css3 fa-3x text-info"></i>
        <h2 class="text-capitalize text-dark py-3">learn css</h2>
        <p class="text-muted">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
        no sea takimata sanctus est Lorem ipsum dolor sit amet.
        </p>
      </div>
      <div class="col-md-4">
        <i class="fab fa-js fa-3x text-info"></i>
        <h2 class="text-capitalize text-dark py-3">learn js</h2>
        <p class="text-muted">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
        no sea takimata sanctus est Lorem ipsum dolor sit amet.
        </p>
      </div>
    </div>
  </div>
</section>

<section class="bg-danger py-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <i class="fab fa-html5 fa-3x text-white"></i>
        <h2 class="text-capitalize text-dark py-3">learn html</h2>
        <p class="text-muted">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
        no sea takimata sanctus est Lorem ipsum dolor sit amet.
        </p>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-6">
        <i class="fab fa-css3 fa-3x text-white"></i>
        <h2 class="text-capitalize text-dark py-3">learn css</h2>
        <p class="text-muted">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
        no sea takimata sanctus est Lorem ipsum dolor sit amet.
        </p>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <i class="fab fa-js fa-3x text-white"></i>
        <h2 class="text-capitalize text-dark py-3">learn js</h2>
        <p class="text-muted">
        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
        vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
        no sea takimata sanctus est Lorem ipsum dolor sit amet.
        </p>
      </div>
    </div>
  </div>
</section>

@endsection
