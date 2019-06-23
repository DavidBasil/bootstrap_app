@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col bg-danger">
      I am a single column
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col bg-info">
      I am a single column
    </div>
    <div class="col bg-warning">
      I am a single column
    </div>
    <div class="col bg-dark">
      I am a single column
    </div>
    <div class="col bg-primary">
      I am a single column
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-3 col-sm-6 col-md-3 col-lg-6 col-xl-3 bg-info">
      I am a single column
    </div>
    <div class="col-3 col-sm-6 col-md-3 col-lg-6 col-xl-3 bg-warning">
      I am a single column
    </div>
    <div class="col-3 col-sm-6 col-md-3 col-lg-6 col-xl-3 bg-dark">
      I am a single column
    </div>
    <div class="col-3 col-sm-6 col-md-3 col-lg-6 col-xl-3 bg-primary">
      I am a single column
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-3 bg-danger">
      I am 3 column
    </div>
    <div class="col-sm-6 bg-primary">
      I am 6 column
    </div>
    <div class="col-sm-3 bg-secondary">
      I am 3 column
      <div class="row">
        <div class="col-6 bg-success">
          I am a half column
        </div>
        <div class="col-6 bg-dark">
          I am a half column
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
