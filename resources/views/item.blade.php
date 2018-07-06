<!-- artifact.blade.php -->

@extends('layouts.template')
@section('content')

  <div class="container">
    <h3 style="text-align: center;">The {{ $item->name }}</h3>
    <h5 style="text-align: center;">Item Details</h5>

    <h5><b>Classification:</b> {{ $item->sci_class }}</h5>
    <div class="col-md-4 agileinfo_single_left">
      <div><b>Artifact ID:</b> {{ $item->id }}</div>
      <div><b>Inventor:</b>  {!! $item->inventor !!}</div>
      <div><b>Date invented:</b>  {{ $item->invented }}</div>
      <div><b>Genetically Modified:</b>  {{ $item->modified }}</div>
      <div><b>Pizza Compatibile:</b>  {{ $item->pizza_comp }}</div>
      <div><b>Harvest in:</b>  {!! $item->harvest !!} days</div>
      <div><b>Freshness:</b>  {{ $item->freshness }}/10</div>
      <div><b>Size:</b>  {{ $item->min }} - {{ $item->max }}g</div>
      <div><b>Notes:</b>  {{ $item->notes }}</div>

    </div>


    <div>
      <img id="example" src="{{ asset($item->image->url) }}" alt=" " class="img-responsive" style="width:400px; height:280px;">
    <div>






  </div>
@endsection
