@extends ('layouts.app')
@section('navbar')
  @include('layouts.navbar')
@endsection
@section('sidebar')
  @include('layouts.sidebar')
@endsection
@section('content')
  @include('category.view')
@endsection
@section('footer')
  @include('layouts.footer')
@endsection
