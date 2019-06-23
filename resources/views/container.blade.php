@extends('layouts.app')

@section('content')

<div class="container bg-danger">
  hey I am a simple container
</div>

<div class="container-fluid bg-primary">
  Im a fluid container
</div>

<section id="skills" class="bg-warning p-5">
  <div class="container">
    <h1>Skills section</h1>
  </div>
</section>

<section id="about" class="bg-danger p-5">
  <div class="container-fluid">
    <h1>About section</h1>
  </div>
</section>

@endsection
