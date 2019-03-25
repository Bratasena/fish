@extends('layouts.admin')
@section('title','Dashboard')
@section('content')
    <div class="container-fluid  dashboard-content">
        <div class="row">
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 style="display: inline">Tabel Pengadaan</h5>
                        <a href="/pembelian/tambah" class="btn btn-primary float-right">Tambah</a>
                        <a href="/pembelian/clear" class="btn btn-danger float-right" style="margin-right: 10px;">Bersihkan</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th>Jumlah</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->attributes['harga_jual']}}</td>
                                        <td>{{$item->quantity}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Basic Form</h5>
                    <div class="card-body">
                        <form action="/pembelian" method="POST" id="basicform" data-parsley-validate="">
                            <div class="form-group">
                                <label for="inputUserName">Tanggal</label>
                                <input id="inputUserName" type="date" name="tanggal" data-parsley-trigger="change"
                                       data-date-format="yyyy-MM-dd" autocomplete="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">Supplier</label>
                                <select class="form-control" name="supplier">
                                    <option></option>
                                    @foreach($supplier as $item)
                                        <option value="{{$item->id_supplier}}">{{$item->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                </div>
                                <div class="col-sm-9 pl-0">
                                    <p class="text-right">
                                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                    </p>
                                </div>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection