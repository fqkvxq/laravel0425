@extends('../layouts.app')

@section('title', $title)
@section('content')
  <h1>foo4.blade.php</h1>
  {{-- 個別ページの内容 --}}
  <h2>{{ $title }}</h2>
  <p>{{ $body }}</p>
@endsection