<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel crud index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css
">
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12">
                <h2>Laravel 10 CRUD Example</h2>
            </div>
            <div>
                <a href="{{ route('companies.create') }}" class="btn btn-success">Create Company</a>
            </div>
            @if($msg = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $msg }}</p>
            </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Company Email</th>
                            <th scope="col">Company Address</th>
                            <th scope="col" width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $key => $company) 
                        <tr>
                            <td scope="row">{{ $company->id }}</td>
                            <td>{{ $company->name }}</td>
                            <td>{{ $company->email }}</td>
                            <td>{{ $company->address }}</td>
                            <td>
                              <form action="{{ route('companies.destroy',$company->id) }}" method="post">
                                <a href="{{ route('companies.edit',$company->id) }}" class="btn btn-outline-warning mx-2">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                {!! $companies->links('pagination::bootstrap-5') !!}
            </div>
            
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>