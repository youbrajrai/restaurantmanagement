<x-layout>
<main id="main" class="main">

<div class="pagetitle">
  <h1>My Profile</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item active">Profile</li>
      <li class="breadcrumb-item active">Edit</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
  <div class="col-lg-4" style="  display: flex;
  align-items: center;
  justify-content: center;">
        <div class="card text-center">
            <div class="image">
                <!-- <img src="{{asset('assets/img/profile/messages-3.jpg')}}" alt="..."> -->
            </div>
            <div class="card-body" >
                <div class="author" >
                    <a href="#">
                        <img class="avatar border-gray" style="border-radius: 50%;width: 200px;height:200px;object-fit:fill;"
                             src="{{$user->avatar}}" alt="...">
                        <h5 class="title">{{$user->name}}</h5>
                    </a>
                    <p class="description">
                        {{$user->email}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">My Profile</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('profile.update' , $user->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="col-12">
              <label for="title" class="form-label">Name</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{$user->name}}" name="name" placeholder="Name" value="{{old('name')}}">
                @error('name')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>
            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{$user->email}}" name="email" placeholder="Email" value="{{old('email')}}">
                @error('email')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>
            <div class="col-12">
              <label for="avatar" class="form-label">Avatar</label>
              <input type="file" class="form-control" name="avatar">         
              @error('avatar')
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