<!-- index.blade.php -->

@extends('layouts.template')
@section('content')

<div class="container">
  <div style="margin-left: 5%;">
    <p>
      @if(isset($users))
      Displaying {{ "ABC" }} - {{ "XYZ" }} of
      @endif
      {{ "XYZ" }} results for <b> "{{ $query }}" </b>.
    </p>
  </div>

  @if(isset($users))
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
      @foreach($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td><a href="#route('artifact.show', $user->id)">{{ $user->name }}</a></td>
        <td>{{ $user->inventor }}</td>
        <td>{{ $user->freshness }}/10</td>
        <td>{{ $user->notes }}</td>
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

<script>
  $(document).ready(function() {
    $('#results').DataTable({
      "searching": false
    });
  });
</script>

@endsection
