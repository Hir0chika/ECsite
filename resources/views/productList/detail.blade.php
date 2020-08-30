<!DOCTYPE>

<html>
<body>

<table>
  <form  method = "POST" action = "/merchandise/update" enctype="multipart/form-data">
    @csrf
    <tr><td><input name = "name" value = "{{$name}}"></td></tr>
    <tr><td><input name = "sellingprice" value = "{{$sellingprice}}"></td></tr>
    <tr><td><input type = "file" name = "imageFile"></td></tr>
  </form>
</table>

</body>
</html>
