<x-layout>
<main id="main" class="main">
<div class="pagetitle">
  <h1>Contact Us</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
      <li class="breadcrumb-item">Dashboard</li>
      <li class="breadcrumb-item active">Contact</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<div class="col-md-12">
        <div class="card">
            <div class="card-header left">
                <h4 class="card-title pull-left"> Contact Us Table</h4>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>S.N</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Posted at</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($contact as $val)
                            <tr>
                                <td>{{$val->id}}</td>
                                <td>{{$val->first_name}}</td>
                                <td>{{$val->last_name}}</td>
                                <td>{{$val->phone}}</td>
                                <td>{{$val->email}}</td>
                                <td>{{$val->message}}</td>
                                <td>{{$val->created_at->diffForHumans()}}</td>

                                <td width="20%" style="display:flex;gap:10px">
                                    <form method="POST" action="{{ route('contactus.destroy', $val->id) }}" class="pull-left mr-4">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                    </form>

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
