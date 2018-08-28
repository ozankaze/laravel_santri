@extends('layouts.master')


@section('content')
<div class="content">
    <div class="container-fluid">
        <h4 class="page-title">Form</h4>
        <form action="/santri" method="POST">
            <div class="card">
                @csrf
                <div class="card-header">
                    <div class="card-title">Form Nama Santri</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="squareInput">Name</label>
                        <input name="name" type="text" class="form-control input-square" id="squareInput" placeholder="Masukan Name">
                    </div>
                    <div class="form-group">
                        <label for="squareInput">Address</label>
                        <input name="address" type="text" class="form-control input-square" id="squareInput" placeholder="Masukan Address">
                    </div>
                    <div class="form-group">
                        <label for="squareInput">Status</label>
                        <input name="status" type="text" class="form-control input-square" id="squareInput" placeholder="Jabatan">
                    </div>										
                </div>
                <div class="card-action">
                    <button class="btn btn-success">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection