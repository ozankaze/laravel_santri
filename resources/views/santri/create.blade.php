@extends('layouts.master')


@section('content')
<form action="/santri" method="POST">
    <div class="card">
        @csrf
        <div class="card-header">
            <div class="card-title">Form Nama Santri</div>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="squareInput">Nama</label>
                <input name="name" type="text" class="form-control input-square" id="squareInput" placeholder="Square Input">
            </div>
            <div class="form-group">
                <label for="squareInput">Alamat</label>
                <input name="address" type="text" class="form-control input-square" id="squareInput" placeholder="Square Input">
            </div>
            <div class="form-group">
                <label for="squareInput">Status</label>
                <input name="status" type="text" class="form-control input-square" id="squareInput" placeholder="Square Input">
            </div>										
        </div>
        <div class="card-action">
            <button class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
@endsection