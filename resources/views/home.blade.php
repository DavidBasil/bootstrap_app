@extends('layouts.app')

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

{{-- project section --}}
<section id="projects" class="py-5 bg-secondary">
  <div class="container-fluid">
    <div class="row text-center">
      <div class="col">
        <h1 class="display-5 text-uppercase text-light mb-0">
          <strong>projects</strong>
        </h1>
        <div class="w-50 mx-auto p-1 bg-warning mb-2"></div>
      </div>
    </div>
    <div class="row py-3 text-center">
      <div class="col-md-4 my-3">
        <img src="https://picsum.photos/id/237/600/400" class="img-fluid rounded" alt="">
      </div>
      <div class="col-md-4 my-3">
        <img src="https://picsum.photos/id/234/600/400" class="img-fluid img-thumbnail bg-danger border border-danger" alt="">
      </div>
      <div class="col-md-4 my-3">
        <img src="https://picsum.photos/id/233/600/400" class="img-fluid rounded-circle" alt="">
      </div>
    </div>

    <div class="row py-3 text-center no-gutters">
      <div class="col-md-4 my-3">
        <img src="https://picsum.photos/id/237/600/400" class="img-fluid rounded" alt="">
      </div>
      <div class="col-md-4 my-3">
        <img src="https://picsum.photos/id/234/600/400" class="img-fluid rounded" alt="">
      </div>
      <div class="col-md-4 my-3">
        <img src="https://picsum.photos/id/233/600/400" class="img-fluid rounded" alt="">
      </div>
    </div>
  </div>
</section>
{{-- end of project section --}}

{{-- team section --}}
<section id="team" class="py-5 bg-light">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h1 class="display-5 text-uppercase text-dark mb-0">
          <strong>team</strong>
        </h1>
        <div class="w-50 mx-auto p-1 bg-warning mb-2"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 my-3">
        <div class="card">
          <img src="https://picsum.photos/id/143/600/400" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-capitalize">team member</h5>
            <p class="card-text">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.
            </p>
            <a href="#" class="btn btn-outline-info text-uppercase">press here</a>
          </div>
          <div class="card-footer bg-secondary">
            <div class="row">
              <div class="col text-center">
                <a href="#" class="text-center"><i class="fab fa-facebook fa-2x text-white"></i></a>
              </div>
              <div class="col text-center">
                <a href="#"><i class="fab fa-twitter fa-2x text-white"></i></a>
              </div>
              <div class="col text-center">
                <a href="#"><i class="fab fa-youtube fa-2x text-white"></i></a>
              </div>
              <div class="col text-center">
                <a href="#"><i class="fab fa-google fa-2x text-white"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 my-3">
        <div class="card">
          <img src="https://picsum.photos/id/143/600/400" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-capitalize">team member</h5>
            <p class="card-text">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.
            </p>
            <a href="#" class="btn btn-outline-info text-uppercase">press here</a>
          </div>
          <div class="card-footer bg-secondary">
            <div class="row">
              <div class="col text-center">
                <a href="#" class="text-center"><i class="fab fa-facebook fa-2x text-white"></i></a>
              </div>
              <div class="col text-center">
                <a href="#"><i class="fab fa-twitter fa-2x text-white"></i></a>
              </div>
              <div class="col text-center">
                <a href="#"><i class="fab fa-youtube fa-2x text-white"></i></a>
              </div>
              <div class="col text-center">
                <a href="#"><i class="fab fa-google fa-2x text-white"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 my-3">
        <div class="card">
          <img src="https://picsum.photos/id/143/600/400" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-capitalize">team member</h5>
            <p class="card-text">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.
            </p>
            <a href="#" class="btn btn-outline-info text-uppercase">press here</a>
          </div>
          <div class="card-footer bg-secondary">
            <div class="row">
              <div class="col text-center">
                <a href="#" class="text-center"><i class="fab fa-facebook fa-2x text-white"></i></a>
              </div>
              <div class="col text-center">
                <a href="#"><i class="fab fa-twitter fa-2x text-white"></i></a>
              </div>
              <div class="col text-center">
                <a href="#"><i class="fab fa-youtube fa-2x text-white"></i></a>
              </div>
              <div class="col text-center">
                <a href="#"><i class="fab fa-google fa-2x text-white"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 my-3">
        <div class="card">
          <img src="https://picsum.photos/id/143/600/400" alt="" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-capitalize">team member</h5>
            <p class="card-text">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.
            </p>
            <a href="#" class="btn btn-outline-info text-uppercase">press here</a>
          </div>
          <div class="card-footer bg-secondary">
            <div class="row">
              <div class="col text-center">
                <a href="#" class="text-center"><i class="fab fa-facebook fa-2x text-white"></i></a>
              </div>
              <div class="col text-center">
                <a href="#"><i class="fab fa-twitter fa-2x text-white"></i></a>
              </div>
              <div class="col text-center">
                <a href="#"><i class="fab fa-youtube fa-2x text-white"></i></a>
              </div>
              <div class="col text-center">
                <a href="#"><i class="fab fa-google fa-2x text-white"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
{{-- end of team section --}}

{{-- carousel section --}}
<section id="carousel" class="py-5 bg-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-4 text-center">
        <h1 class="display-5 text-uppercase text-dark mb-0">
          <strong>first carousel</strong>
        </h1>
        <div class="w-75 mx-auto p-1 bg-warning"></div>
      </div>
    </div>
    <div class="row">
    <div class="col-md-12 mx-auto text-center">
      <!-- carousel -->
      <div id="example" class="carousel slide mt-3" data-ride="carousel">
        <!-- indicators -->
        <ul class="carousel-indicators">
          <li data-target="#example" data-slide-to="0" class="active"></li>
          <li data-target="#example" data-slide-to="1"></li>
          <li data-target="#example" data-slide-to="3"></li>
        </ul>
        <!-- images -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://picsum.photos/id/237/600/400" alt="" class="d-block w-100">
          </div>   
          <div class="carousel-item">
            <img src="https://picsum.photos/id/200/600/400" alt="" class="d-block w-100">
          </div>   
          <div class="carousel-item">
            <img src="https://picsum.photos/id/211/600/400" alt="" class="d-block w-100">
          </div>   
        </div>
        <!-- end of images -->
        <!-- controls -->
        <a href="#example" class="carousel-control-prev" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a href="#example" class="carousel-control-next" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
        <!-- end of controls -->
      </div>
      <!-- end of carousel -->
    </div>
    </div>
  </div>
</section>
{{-- end of carousel section --}}


@endsection
