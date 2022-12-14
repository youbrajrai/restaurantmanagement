<x-layout>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Create product</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item active">Product</li>
      <li class="breadcrumb-item active">Edit</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">


    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Product Form</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="col-12">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{$product->title}}" name="title" placeholder="Title" value="{{old('title')}}">
                @error('title')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>
            <div class="col-12">
              <label for="title" class="form-label">Parent Category</label>
              <select class="form-control" name="category_id" id="">
                <option value="">Category Name</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}" 
                        @if ($product->category_id!=null && $product->category_id==$category->id)
                        selected
                        @endif
                        >{{$category->title}}</option>
                @endforeach
              </select>
            @error('category_id')
            <span class="text-danger" role="alert">
                <p>{{ $message }}</p>
            </span>
            @enderror           
            </div>
            <div class="col-12">
              <label for="title" class="form-label">Price</label>
              <input type="number" class="form-control @error('price') is-invalid @enderror" value="{{$product->price}}"  name="price" placeholder="Price" value="{{old('price')}}">
                @error('price')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>
            <div class="col-12">
              <label for="content" class="form-label">Content</label>
              
              <textarea class="form-control @error('content') is-invalid @enderror" name="content" placeholder="Content">{{old('content',$product->content)}}</textarea>
                @error('content')
                    <span class="text-danger" role="alert">
                        <p>{{ $message }}</p>
                    </span>
                @enderror              
            </div>              
            <div class="col-12">
              <label for="title" class="form-label">Image</label>
              <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
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
            </div>
          </form><!-- Vertical Form -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
</x-layout>