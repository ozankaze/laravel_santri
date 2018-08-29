@extends('layouts.master')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Basic Table</div>
            </div>
            <div class="card-body">
                <div class="card-sub">									
                    This is the basic table view of the ready dashboard :
                </div>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    @foreach ($santris as $santri)
                        <tbody>
                            <tr>
                                <td>{{ $santri->id }}</td>
                                <td>{{ $santri->name }}</td>
                                <td>{{ $santri->address }}</td>
                                <td>{{ $santri->status }}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
                <li class="pagination">
                    {{ $santris->links() }}
                </li>
            </div>
        </div>
        </div>
</div>
@endsection