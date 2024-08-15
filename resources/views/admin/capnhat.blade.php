<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="container">
  <form action="/admin/update/{{$t ->id }}" method="post">
    <div class="mb-3">
      <label >Name Product</label>
      <input value="{{$t -> tenDT}}"  class="form-control" name="tenDT" >
    </div>
    <div class="mb-3">
      <label >Price</label>
      <input value="{{$t -> gia}}"  class="form-control" name="gia" >
    </div>
    <div class="mb-3">
      <label >Tom Tat</label>
      <textarea  name="baiViet" class="form-control" id="">{{$t -> baiViet}}</textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">image</label>
      <input value="{{$t -> urlHinh}}"    class="form-control" name="urlHinh" >
    </div>
    <div class="mb-3">
      <select class="form-select" name="idLoai">
      @foreach($loaitin_arr as $lt)
        <option value="{{$lt -> id}}" {{$lt->i == $t->idLoai? "selected":""}} > {{$lt -> tenLoai}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    @csrf
  </form>
</div>
</body>
</html>