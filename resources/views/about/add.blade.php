<x-layout>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Create About us</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item active">About us</li>
      <li class="breadcrumb-item active">Create</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">


    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">About Form</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('aboutus.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-10">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Title" value="{{old('title')}}">
                @error('title')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>
            <div class="col-2">
              <label for="is_current" class="form-label">Is Current about Us ?</label>
              <input name="is_current" type="hidden" value=0>
              <input class="form-check-input @error('is_current') is-invalid @enderror" name="is_current" type="checkbox" id="gridCheck1" value=1>
                @error('is_current')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>
            <div class="col-12">
              <label for="content" class="form-label">Content</label>
              
              <textarea class="form-control @error('content') is-invalid @enderror" name="content" placeholder="Content">{{old('content')}}</textarea>
                @error('content')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>            

            @if(Session::has('message'))
                <span class="text-success">
                    <p>{{ Session::get('message') }}</p>
                </span>
            @endif            
            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
</x-layout>