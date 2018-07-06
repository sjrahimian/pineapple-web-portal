<!-- artifact.blade.php -->

@extends('layouts.template')
@section('content')

  <div class="container">
    <h3 style="text-align: center;">Pineapple Details</h3>

    <h5><b>Name:</b> {{ $item->name }}</h5>
     <div class="col-md-4 agileinfo_single_left">
       <div><b>Artifact ID:</b> {{ $item->id }}</div>
       <div><b>Inventor:</b>  {!! $item->inventor !!}</div>
       <div><b>Freshness:</b>  {{ $item->freshness }}</div>
       <div><b>Date:</b>  {{ $item->date }}</div>
       <div><b>Notes:</b>  {{ $item->notes }}</div>
       <!-- <img id="example" src="{!! $item->image !!}" alt=" " class="img-responsive"> -->
     </div>

  </div>
@endsection
