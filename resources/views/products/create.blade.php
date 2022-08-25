@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>price:</strong>
                <input type='number' class="form-control" name="price" placeholder="Price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>

        <div class="form-check form-switch my-3">
            <input class="form-check-input" name='status' id='status' type="checkbox" id="flexSwitchCheckDefault" checked>
            <label class="form-check-label" for="flexSwitchCheckDefault">Status</label>
            <label id='statdis' class="text-success" for="flexSwitchCheckDefault">Active</label>
        </div>
        <script>
            const stat = document.getElementById('status')
            const statdis = document.getElementById('statdis')
            stat.addEventListener('change', () => {

                if (!stat.checked) {
                    statdis.classList.remove('text-success')
                    statdis.classList.add('text-danger')
                    statdis.innerHTML = 'Deactive'
                } else {
                    statdis.classList.remove('text-danger')
                    statdis.classList.add('text-success')
                    statdis.innerHTML = 'Active'
                }
            })
        </script>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection