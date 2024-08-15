@extends('layout')
@section('tieudetrang')
  {{$tenloai}}
@endsection
@section('noidung')
                <h2>Sản Phẩm Trong loai {{$tenloai}}</h2>
                <div >{{$listsp -> links()}}</div>
                <div class="row">
                    @foreach ($listsp as $sp)
                    <div class="col-sm-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$sp->urlHinh}}" class="card-img-top w-100" alt="..." style="height: 250px;">
                            <div class="card-body">
                              <h5 class="card-title">{{$sp -> tenDT}}</h5>
                              <p class="card-text">{{number_format($sp->gia,0,',','.')}}</p>
                              <a href="{{url('/chitiet',[$sp->id])}}" class="btn btn-primary">Xem chi tiết</a>
                            </div>
                          </div>
                    </div>
                    @endforeach
                </div>

@endsection