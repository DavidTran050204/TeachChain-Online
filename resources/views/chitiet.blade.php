<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
        <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="/image/logo2.png" alt=""style="height: 40px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
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
    <div class="row my-3">
        <div class="col-md-6">
            <img src="{{$chitiet->urlHinh}}" alt="" class="w-100" style="height: 600px;">
        </div>
        <div class="col-md-4">
          <div class="row">
            <h2 class="text-info fs-2 m-2 mt-3">{{$chitiet ->tenDT}}</h2>
            <p class="text-warning fs-2 mt-3">{{number_format($chitiet->gia,0,',','.')}} VNĐ</p>
            <p class="mt-3">Mô Tả {{$chitiet -> baiViet}}</p>
            <button type="button" class="btn btn-success mt-4">Buy Now</button>
            <hr>
            <button type="button" class="btn btn-info">Add Store</button>
          </div>
        </div>
    </div>
    <h2 style="text-align: center;">Sản Phẩm Cùng loại</h2>
    <div class="row">
                    @foreach ($list as $sp)
                    <div class="col-sm-3" >
                        <div class="card" style="width: 18rem;">
                            <img src="{{$sp->urlHinh}}" class="card-img-top p-3" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">{{$sp -> tenDT}}</h5>
                              <p class="card-text">{{number_format($sp->gia,0,',','.')}}</p>
                              <a href="{{url('/chitiet',[$sp -> id])}}" class="btn btn-success">Xem chi tiết</a>
                            </div>
                          </div>
                    </div>
                    @endforeach
                </div>
</div> 

<hr>
<footer>
          <div class="container">
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