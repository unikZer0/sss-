<?php
require_once('header1.php');
?>
<form action="insert_item.php" method="post"  enctype="multipart/form-data" class="row g-3">
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="col-md-12">
    <label for="inputAddress" class="form-label">Price</label>
    <input type="text" class="form-control" name="price" >
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">descript</label>
    <input type="text" class="form-control" name='desc'>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">type</label>
    <input type="text" class="form-control" placeholder="ໃສ່ ເລກ ເທົ່າ ນັ້ນ 0 = notebook and 1 = mobile" name='type'>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">img</label>
    <input type="file" class="form-control" name="image">
  </div>
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary">submit</button>
  </div>
</form>
<?php
require_once('footer1.php');
?>