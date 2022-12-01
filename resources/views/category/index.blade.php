@extends ('layouts.app')
@section('navbar')
  @include('layouts.navbar')
@endsection
@section('sidebar')
  @include('layouts.sidebar')
@endsection
@section('content')
<main id="main" class="main">
  @include('category.view')
</main>
@endsection
@section('footer')
  @include('layouts.footer')
@endsection
