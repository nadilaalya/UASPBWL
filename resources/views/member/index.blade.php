@extends('layouts.app')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Data Member</title>
</head>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Member') }}</div>

                <div class="card-body">
                    <a href="/member/create" class="btn btn-success mb-2">Tambah Member</a>
                    <table class="table table-hover">
                        <tr>
                            <th>Nomor Member</th>
                            <th>ID Golongan</th>
                            <th>Nama Member</th>
                            <th>NIK</th>
                            <th>No. Telp/Hp</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach($member as $p)
                        <tr>
                            <td>{{ $p->pel_no }}</td>
                            <td>{{ $p->pel_id_gol }}</td>
                            <td>{{ $p->pel_nama }}</td>
                            <td>{{ $p->pel_nik }}</td>
                            <td>{{ $p->pel_hp }}</td>
                            <td style="text-align:center !important;">{{ $p->pel_aktif }}</td>
                            <td><a href="/member/{{$p->id}}/edit" class="btn btn-primary  mb-2"
                                    style="width:70px !important;">Edit</a>
                                <form action="/member/{{$p->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Hapus" class="btn btn-danger  mb-2">
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection