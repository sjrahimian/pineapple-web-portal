<!-- index.blade.php -->

@extends('layouts.template')
@section('content')


  <div class="container">
    <div style="margin-left: 5%;">
      <p>
        @if($users->total() != 0)
        Displaying {{ $users->firstItem() }} - {{ $users->lastItem() }} of
        @endif
        {{ $users->total() }} results for <b> "{{ $query }}" </b>.
      </p>
    </div>
    <div style="background: green;">

    </div>
    @if($users->total() != 0)
    <table class="table table-striped">
      <thead>
        <tr>
          <th>@sortablelink('id', "ID")</th>
          <th>@sortablelink('title', "Title")</th>
          <th>@sortablelink('author', "Author")</th>
          <th>@sortablelink('type', "Type")</th>
          <th>@sortablelink('date', "Date")</th>
        </tr>
      </thead>

      <tbody>
        @foreach($users as $user)
        <tr>
          <td>{{ $user->id }}</td>
          <td><a href="{{ route('artifact.show', $user->id)}}">{{ $user->title }}</a></td>
          <td>{{ $user->author }}</td>
          <td>{{ $user->type }}</td>
          <td>{{ $user->date }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
      <div class="page-nums">
        {{ $users->appends(\Request::except('page'))->render() }}
      </div>
    @else
      <div style="padding-left:20px; weight: bold;">
        <h4>No results.</h4>
      </div>
    @endif
  </div>

@endsection
