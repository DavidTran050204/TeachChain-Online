@extends('layout')
@section('noidung')

  <div class="p-2">{{$listsp ->onEachSide(5)-> links()}}</div>
  <h2>sản phẩm có từ khóa : {{$tukhoa}}</h2>

  <div id="ketquatim">
  <div class="row">
                    @foreach ($listsp as $sp)
                    <div class="col-sm-4">
                        <div class="card" style="width: 18rem;">
                            <img src="{{$sp->urlHinh}}" class="card-img-top p-3 rounded-3" alt="..." style="height: 250px;">
                            <div class="card-body">
                              <h5 class="card-title">{{$sp -> tenDT}}</h5>
                              <p class="card-text">{{number_format($sp->gia,0,',','.')}}</p>
                              <a href="{{url('/chitiet',[$sp -> id])}}" class="btn btn-success">Xem chi tiết</a>
                            </div>
                          </div>
                    </div>
                    @endforeach
                </div>  </div>
</div>
    
                
@endsection