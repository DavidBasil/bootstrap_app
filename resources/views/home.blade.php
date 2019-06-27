@extends('layouts.app')
<style type="text/css" media="screen">
</style>
@section('content')
{{-- header --}}
<header class="bg-dark" id="header">
  <div class="container">
    <div class="row min-vh-100 align-items-center">
      <div class="col">
        <h1 class="text-danger text-uppercase font-weight-bold font-italic">
          <strong>my first bootstrap</strong>
          <small class="text-light">website</small>
        </h1>
        <p class="text-muted lead py-2 w-75">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        <a href="#" class="btn btn-outline-primary btn-lg m-2 text-capitalize">press here</a>
        <a href="#" class="btn btn-outline-success btn-lg m-2 text-capitalize">press here</a>
      </div>
    </div>
  </div>
</header>
{{-- end of header --}}

{{-- skills section --}}
<section id="skills" class="py-5 bg-white">
  <div class="container">
    {{-- title --}}
    <div class="row justify-content-center">
      <div class="col-sm-4 text-center">
        <h1 class="display-5 text-uppercase text-dark mb-0">
          <strong>skills</strong>
        </h1>
        <div class="w-75 mx-auto p-1 bg-danger"></div>
        <p class="mt-2 text-capitalize text-muted">lorem lorem lorem lorem</p>
      </div>
    </div>
    {{-- end of title --}}
    <div class="row">
      <div class="col-md-6 col-lg-3 text-center my-4">
        <i class="fab fa-node-js fa-5x text-danger"></i>
        <h3 class="text-uppercase my-3">Nodejs</h3>
        <p class="text-muted">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</p>
        <a href="" class="btn btn-outline-danger w-75 text-uppercase">press here</a>
      </div>
      <div class="col-md-6 col-lg-3 text-center my-4">
        <i class="fab fa-html5 fa-5x text-danger"></i>
        <h3 class="text-uppercase my-3">HTML</h3>
        <p class="text-muted">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</p>
        <a href="" class="btn btn-outline-danger w-75 text-uppercase">press here</a>
      </div>
      <div class="col-md-6 col-lg-3 text-center my-4">
        <i class="fab fa-css3 fa-5x text-danger"></i>
        <h3 class="text-uppercase my-3">Css</h3>
        <p class="text-muted">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</p>
        <a href="" class="btn btn-outline-danger w-75 text-uppercase">press here</a>
      </div>
      <div class="col-md-6 col-lg-3 text-center my-4">
        <i class="fab fa-js fa-5x text-danger"></i>
        <h3 class="text-uppercase my-3">js</h3>
        <p class="text-muted">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</p>
        <a href="" class="btn btn-outline-danger w-75 text-uppercase">press here</a>
      </div>
    </div>
  </div>
</section>
{{-- end of skills section --}}

{{-- about section --}}
<section class="bg-info" id="about">
  <div class="container-fluid">
    <div class="row  ">
      <div class="col-md-6 about-picture">
      </div>
      <div class="col-md-6 about-text px-5 py-2 text-center">
        <h1 class="display-5 text-uppercase text-light mb-0">
          <strong>skills</strong>
        </h1>
        <div class="w-50 mx-auto p-1 bg-warning mb-2"></div>
        <div class="row no-gutters mb-2">
          <div class="col-2 text-right pr-3 align-self-center">
            <i class="fas fa-check fa-2x bg-warning p-1"></i>
          </div>
          <div class="col-10">
            <p class="text-light text-left lead mb-0">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
          </div>
        </div>
        <div class="row no-gutters mb-2">
          <div class="col-2 text-right pr-3 align-self-center">
            <i class="fas fa-check fa-2x bg-warning p-1"></i>
          </div>
          <div class="col-10">
            <p class="text-light text-left lead mb-0">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
          </div>
        </div>
        <div class="row no-gutters mb-2">
          <div class="col-2 text-right pr-3 align-self-center">
            <i class="fas fa-check fa-2x bg-warning p-1"></i>
          </div>
          <div class="col-10">
            <p class="text-light text-left lead mb-0">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- end of about section --}}



@endsection
