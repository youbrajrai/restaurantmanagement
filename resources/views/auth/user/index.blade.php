<x-layout>
<main id="main" class="main">
<div class="pagetitle">
  <h1>User</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item active">User</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="col-md-12">
        <div class="card">
            <div class="card-header left">
                <h4 class="card-title pull-left"> Users Table</h4>
                @if(auth()->id()== 1)
                <a href="{{route('register')}}" class="btn btn-primary btn-round text-white pull-right">
                    Add User
                </a>
                @endif
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>S.N</th>
                                <th>Name</th>
                                <th>Email</th> 
                                <th>Avatar</th>                                                                
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $val)
                            <tr>
                                <td>{{$val->id}}</td>
                                <td>{{$val->name}}</td>
                                <td>{{$val->email}}</td>
                                <td><img src="{{asset($val->avatar)}}" style="object-fit:fill;width:50px;heigth:50px"></td>
                                <td width="20%" style="display:flex;gap:10px">
                                    @if(auth()->id()== 1)
                                    @if($val->id!= 1)
                                        <form method="POST" action="{{ route('user.destroy', $val->id) }}" class="pull-left mr-4">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                        </form>
                                        @endif
                                    
                                    @endif                                   
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
