<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Edit Member</title>
</head>

<body> <br>
    <form action="/member/{{$member->id}}" method="POST" style="margin-left:50px !important;">
        @method('put')
        @csrf
        <h4>Edit Data Member</h4>
        <hr style="width: 25% !important;">

        <div class="mb-3">
            <label for="member" class="form-label">ID Golongan Member</label>
            <input type="text" class="form-control" name="pel_id_gol" style="width: 25% !important;"
                value="{{ $member->pel_id_gol }}">
        </div>
        <div class="mb-3">
            <label for="member" class="form-label">Nomor Member</label>
            <input type="text" name="pel_no" class="form-control" style="width: 25% !important;"
                value="{{ $member->pel_no }}">
        </div>
        <div class="mb-3">
            <label for="member" class="form-label">Nama Member</label>
            <input type="text" name="pel_nama" class="form-control" style="width: 25% !important;"
                value="{{ $member->pel_nama }}">
        </div>
        <div class="mb-3">
            <label for="member" class="form-label">No. Telp/Hp</label>
            <input type="text" name="pel_hp" class="form-control" style="width: 25% !important;"
                value="{{ $member->pel_hp}}">
        </div>
        <div class="mb-3">
            <label for="member" class="form-label">NIK</label>
            <input type="text" name="pel_nik" class="form-control" style="width: 25% !important;"
                value="{{ $member->pel_nik }}">
        </div>
        <div class="mb-3">
            <label for="member" class="form-label">ID User</label>
            <input type="text" name="pel_id_user" class="form-control" style="width: 25% !important;"
                value="{{ $member->pel_id_user }}">
        </div>
        <div class="mb-3">
            <label for="member" class="form-label">Status</label>
            <select name="pel_aktif" class="form-control" class="form-control" style="width: 25% !important;">
                <option value="">--Pilih Status--</option>
                <option value="Y" @if($member->pel_aktif == "Y") selected @endif>Aktif</option>
                <option value="N" @if($member->pel_aktif == "N") selected @endif>Non Aktif</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="member" class="form-label">Alamat Member</label>
            <textarea name="pel_alamat" rows="3" class="form-control" class="form-control"
                style="width: 25% !important;">{{ $member->pel_alamat }}</textarea>
        </div>
        <button type="submit" class="btn btn-success btn-sm">Update</button>
    </form>