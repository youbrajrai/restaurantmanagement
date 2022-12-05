<x-layout>
<main id="main" class="main">
<div class="pagetitle">
  <h1>banner</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item active">Banner</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="col-md-12">
        <div class="card">
            <div class="card-header left">
                <h4 class="card-title pull-left"> Banner Table</h4>
                <a href="{{route('banner.create')}}" class="btn btn-primary btn-round text-white pull-right">
                    Add Banner
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>S.N</th>
                                <th>Image</th>
                                <th>Is Current</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($banner as $val)
                            <tr>
                                <td>{{$val->id}}</td>
                                <td> <img src="{{asset('assets/img/banner/'.$val->image)}}" style="object-fit:fill;width:50px;heigth:50px"></td>
                                <td>{{$val->is_current}}</td>
                                <td width="20%" style="display:flex;gap:10px">
                                    <form method="POST" action="{{ route('banner.destroy', $val->id) }}" class="pull-left mr-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </form>
                                    <!-- <a href="{{route('banner.edit' , $val->id)}}" class="btn btn-success btn-sm">
                                        <i class="bi bi-box-arrow-in-up-right"></i>
                                    </a> -->
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
