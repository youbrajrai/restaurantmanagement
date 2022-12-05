<x-layout>
<main id="main" class="main">
<div class="pagetitle">
  <h1>About Us</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item active">About Us</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="col-md-12">
        <div class="card">
            <div class="card-header left">
                <h4 class="card-title pull-left"> About Table</h4>
                <a href="{{route('aboutus.create')}}" class="btn btn-primary btn-round text-white pull-right">
                    Add About Us
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>S.N</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Is Current</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($about_us as $val)
                            <tr>
                                <td>{{$val->id}}</td>
                                <td>{{$val->title}}</td>
                                <td>{{$val->content}}</td>
                                <td>{{$val->is_current}}</td>
                                <td width="20%" style="display:flex;gap:10px">
                                    <form method="POST" action="{{ route('aboutus.destroy', $val->id) }}" class="pull-left mr-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </form>
                                    <a href="{{route('aboutus.edit' , $val->id)}}" class="btn btn-success btn-sm">
                                        <i class="bi bi-box-arrow-in-up-right"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
</x-layout>
