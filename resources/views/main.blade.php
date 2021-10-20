@extends('layouts.app')

@section('content')

@section("title","目次")

<h1>コウヘイへのメッセージ</h1>

<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>名前</th>
        <th>作成日時</th>
        <th>メッセージ</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($gifts as $gift)
        <tr>
          <td>
            <a href="/show/{{  $gift->id }}">{{ $gift->id }}
            </a>
          </td>
          <td>{{ $gift->name }}</td>
          <td>{{ $gift->created_at->format('Y.m.d') }}</td>
          <td>{{ $gift->text }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
