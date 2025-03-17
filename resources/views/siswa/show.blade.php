@extends('templates.layout')
@section('title','data kelas')
@section('kontent')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                tambah data Siswa
            </div>
            <div class="row mt-5">
                <div class="col-6">
            <div class="card">
                <div class="card-header">
                <h5 class="m-0 font-weight-bold text-ptimary">input data kelas</h5>
                </div>

                <div class="card-body">
                    <table>
                <tr>
                    <td>nama</td>
                    <td>:</td>
                    <td>{{$siswa->nama}}</td>
</tr>
                    <tr>
                        <td> NISN</td>
                        <td>:</td>
                        <td>{{$siswa->nisn}}</td>
                    </tr>
                    <tr>
                        <td> jk</td>
                        <td>:</td>
                        <td>{{$siswa->jenis kelamin}}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>{{$siswa->alamat}}</td>
                    </tr>
                    <tr>
                        <td>telepon</td>
                        <td>:</td>
                        <td>{{$siswa->no_telp}}</td>
                    </tr>   
                    <tr>
                        <td> nama orgtua</td>
                        <td>:</td>
                        <td>{{$siswa->nama orgtua}}</td>
                    </tr>
                    <tr>
                        <td>lokal_id</td>
                        <td>:</td>
                        <td>{{$siswa->kelas->lokal id}}</td>
                    
                    <tr>    
                        <td>user_id</td>
                        <td>:</td>
                        <td>{{$siswa->user_id}}</td>