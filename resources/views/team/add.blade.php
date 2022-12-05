<x-layout>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Create team</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item active">Team</li>
      <li class="breadcrumb-item active">Create</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">


    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Team Form</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('team.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{old('name')}}">
                @error('name')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>
            <div class="col-12">
              <label for="designation" class="form-label">Designation</label>
              <input type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" placeholder="Web Developer" value="{{old('designation')}}">
                @error('designation')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>
            <div class="col-12">
              <label for="facebook" class="form-label">Facebook</label>
              <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" placeholder="www.facebook.com/john" value="{{old('facebook')}}">
                @error('facebook')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>
            <div class="col-12">
              <label for="twitter" class="form-label">Twitter</label>
              <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" placeholder="www.twitter.com/john" value="{{old('twitter')}}">
                @error('twitter')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>
            <div class="col-12">
              <label for="instagram" class="form-label">Instagram</label>
              <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" placeholder="www.instagram.com/john" value="{{old('instagram')}}">
                @error('instagram')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>
            <div class="col-12">
              <label for="linkedin" class="form-label">linkedin</label>
              <input type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" placeholder="www.linkedin.com/john" value="{{old('linkedin')}}">
                @error('linkedin')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>
            <div class="col-12">
              <label for="image" class="form-label">image</label>
              <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" placeholder="image" value="{{old('image')}}">
                @error('image')
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
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
</x-layout>