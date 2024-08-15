
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tieudetrang')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"><img src="/image/logo2.png" alt=""style="height: 40px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sản Phẩm</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Tài Khoản
                </a>
                <ul class="dropdown-menu">
                @if (Auth::check())           
            {{Auth::user()->name}}!
           <li><a href="/thoat" class="text-decoration-none text-white">Thoát</a></li>
        @else             
           <li> <a href="/dangnhap" class="text-decoration-none text-white">Đăng nhập</a></li>
        @endif

        <li> <a href="/dangky" class="text-decoration-none text-white">Đăng ký</a></li>

                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" >Liên Hệ</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>    
<div class="container">
<form method="post" action="{{url('/dangky')}}" 
class="m-auto col-10 border border-2 border-primary rounded mt-3 shadow-lg"> @csrf
<h3 class="text-center mt-2">ĐĂNG KÝ THÀNH VIÊN</h3>
<div class="m-3 mt-0 row">
    <div class="col-6"> Email
        <input name="email" value="{{old('email')}}" type="text" 
        class="form-control border-primary shadow-none p-2">
        <b class="text-danger"> @error('email') {{ $message }} @enderror </b>
    </div>
    <div class="col-6">Họ tên 
        <input name="name" value="{{old('name')}}" type="text" 
        class="form-control border-primary shadow-none p-2">
        <b class="text-danger"> @error('name') {{ $message }} @enderror </b>
    </div>
</div>
<div class="m-3 row">
    <div class="col-6"> Mật khẩu 
        <input name="mk1" value="{{old('mk1')}}" type="password" 
        class="form-control border-primary shadow-none p-2">
        <b class="text-danger"> @error('mk1') {{ $message }} @enderror </b>
    </div>
    <div class="col-6"> Nhập lại mật khẩu 
        <input name="mk2"  value="{{old('mk2')}}" type="password" 
        class="form-control border-primary shadow-none p-2">
        <b class="text-danger"> @error('mk2') {{ $message }} @enderror </b>
    </div>
</div>

<div class="m-3 row">
    <div><button class="btn btn-primary py-2 px-5"type="submit">Đăng ký</button></div>
</div>
</form>
   
</div>
<footer>
          <div class="container mt-3">
              <div class="row">
                  <div class="col-lg-4 col-12">
                      <img src="/image/logo2.png" width="200px" alt="">
                      <ul class="nav flex-column">
                          <li class="nav-item">
                              <h6>CÔNG TY TNHH DU LỊCH QUỐC TẾ BỐN PHƯƠNG</h6>
                          </li>
                          <li class="nav-item">
                              <h6>THÔNG TIN CHUYỂN KHOẢN</h6>
                              <p>1. Chủ tài khoản: Võ Phi Hùng | STK: 0331000443213 | Ngân hàng Ngoại Tương (Vietcombank)
                                  - Chi nhánh
                                  Bến Thành</p>
                              <p>2. Chủ tài khoản: Công ty TNHH Du Lịch Quốc Tế Bốn Phương | STK: 0331000445709 | Ngân
                                  hàng Ngoại Thương
                                  (Vietcombank) - Chi nhánh Bến Thành (Khi quý khách có nhu cầu xuất hóa đơn).</p>
                          </li>
                      </ul>
                  </div>
                  <div class="col-lg-4 col-12">
                      <ul class="nav flex-column">
                          <li class="nav-item">
                              <h6>THÔNG TIN LIÊN HỆ</h6>
                          </li>
                          <li class="nav-item">
                              <p>
                              <h6 class="d-inline">Địa chỉ:</h6> 202 Lê Lai, P.Bến Thành, Quận 1, TP HCM</p>
                              <p>
                              <h6 class="d-inline">Điện thoại:</h6> 0938 179 170</p>
                              <p>
                              <h6 class="d-inline">Hotline:</h6> 0938 179 170 | 0938 003 667</p>
                              <p>
                              <h6 class="d-inline">Email:</h6> kinhdoanh.tourbonphuong@gmail.com</p>
                              <p>
                              <h6 class="d-inline">Website:</h6> tourbonphuong.com</p>
                          </li>
                      </ul>
                  </div>
                  <div class="col-lg-2 col-12">
                      <ul class="nav flex-column">
                          <li class="nav-item">
                              <h6>GIỚI THIỆU</h6>
                          </li>
                          <li class="nav-item">
                              <p>
                              <h6 class="d-inline"><i class="bi bi-chevron-right"></i></h6><a href=""
                                  class="link-underline-light text-dark">Về chúng tôi</a></p>
                              <p>
                              <h6 class="d-inline"><i class="bi bi-chevron-right"></i></h6><a href=""
                                  class="link-underline-light text-dark">Hướng dẫn thanh toán</a></p>
                              <p>
                              <h6 class="d-inline"><i class="bi bi-chevron-right"></i></h6><a href=""
                                  class="link-underline-light text-dark">Hướng dẫn mua giay</a></p>
                              <p>
                              <h6 class="d-inline"><i class="bi bi-chevron-right"></i></h6><a href=""
                                  class="link-underline-light text-dark">Bảng giá</a></p>
                              <p>
                              <h6 class="d-inline"><i class="bi bi-chevron-right"></i></h6><a href=""
                                  class="link-underline-light text-dark">Tour khuyến mãi</a></p>
                          </li>
                      </ul>
                  </div>
                  <div class="col-lg-2 col-12">
                      <ul class="nav flex-column">
                          <li class="nav-item">
                              <h6>CHÍNH SÁCH</h6>
                          </li>
                          <li class="nav-item">
                              <p>
                              <h6 class="d-inline"><i class="bi bi-chevron-right"></i></h6><a href=""
                                  class="link-underline-light text-dark">Chính sách bảo mật</a></p>
                              <p>
                              <h6 class="d-inline"><i class="bi bi-chevron-right"></i></h6><a href=""
                                  class="link-underline-light text-dark">Điều khoản chung</a></p>
                          </li>  
                          <li class="nav-item">
                              <img src="https://tourbonphuong.com/upload/hinhanh/logosalenoti-4351.png" alt=""
                                  style="width: 200px;">
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="d-flex justify-content-center p-3 border">
              <h6 class="text-center fw-normal ">GIẤY PHÉP KINH DOANH SỐ: 0313049973 do Sở Kế hoạch đầu tư TP HCM cấp.
                  <br>Copyright © 2020 Tour Bốn Phương. All rights reserved.
              </h6>
          </div>
      </footer>
</body>
</html>