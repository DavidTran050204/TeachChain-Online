@extends('layout')
@section('noidung')
<h2>sản phẩm mới</h2>
                <div class="row">
                    @foreach ($data as $sp)
                    <div class="col-sm-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$sp->urlHinh}}" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{$sp -> tenDT}}</h5>
                              <p class="card-text">{{number_format($sp->gia,0,',','.')}}</p>
                              <a href="{{url('/chitiet',[$sp -> id])}}" class="btn btn-success">Xem chi tiết</a>
                            </div>
                          </div>
                    </div>
                    @endforeach
                </div>
@endsection
