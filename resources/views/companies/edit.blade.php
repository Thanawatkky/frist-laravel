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
                <h2>Edit Company</h2>
            </div>
            <div>
                <a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a>
            </div>
            @if (session('status'))
            <div class="alert alert-succes">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('companies.update', $company->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Company Name</strong>
                            <input type="text" name="name" id="name" value="{{ $company->name }}" class="form-control" placeholder="Company Name">
                            @error('name')
                            <div class="alert alert-danger">
                                {{ $msg }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Company Email</strong>
                            <input type="email" name="email" id="email" value="{{ $company->email }}" class="form-control" placeholder="Company Email">
                            @error('email')
                            <div class="alert alert-danger">
                                {{ $msg }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group my-3">
                            <strong>Company Address</strong>
                            <input type="address" name="address" id="address" value="{{ $company->address }}" class="form-control" placeholder="Company address">
                            @error('address')
                            <div class="alert alert-danger">
                                {{ $msg }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary my-3">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>