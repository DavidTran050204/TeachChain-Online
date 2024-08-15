<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="container">
  <form action="/admin/them" method="post">
    <div class="mb-3">
      <label >Name Product</label>
      <input  class="form-control" name="tenDT" >
    </div>
    <div class="mb-3">
      <label >Price</label>
      <input  class="form-control" name="gia" >
    </div>
    <div class="mb-3">
      <label >Tom Tat</label>
      <textarea name="baiViet" class="form-control" id="baiViet"></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">image</label>
      <input  class="form-control" name="urlHinh" >
    </div>
    <div class="mb-3">
      <select class="form-select" name="idLoai">
        <option value="1">Samsung</option>
        <option value="2">HTC</option>
        <option value="3">Apple</option>
        <option value="4">LG</option>
        <option value="5">Acer</option>
        <option value="6">Dell</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  
    @csrf
  </form>
</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#baiViet' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>
</html>