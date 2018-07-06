<!-- index.blade.php -->

@extends('layouts.template')
@section('content')

<div class="container">
  <div style="margin-left: 5%;">
    <p>
      Displaying results for <b> "{{ $query }}" </b>.
    </p>
  </div>

  @if(count($results) != 0)
  <table id="results" class="display" style="width:100%">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Inventor</th>
        <th>Freshness</th>
        <th>Notes</th>
      </tr>
    </thead>

    <tbody>
      @foreach($results as $result)
      <tr>
        <td>{{ $result->id }}</td>
        <td><a href="#route('artifact.show', $result->id)">{{ $result->name }}</a></td>
        <td>{{ $result->inventor }}</td>
        <td>{{ $result->freshness }}/10</td>
        <td>{{ $result->notes }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @else
    <div style="padding-left:20px; weight: bold;">
      <h4>No results.</h4>
    </div>
  @endif
</div>

@endsection


<!-- script for displaying search results -->
@section('scriptDataTable')
  @if(count($results) != 0)
  <script>
    $(document).ready(function() {
      $('#results').DataTable({
        "order": [[ 1, "asc" ]],
        "searching": false
      });
    });
  </script>
  @endif

@endsection
