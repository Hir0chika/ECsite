<!DOCTYPE>

<html>
<body>

<h1>商品一覧</h1>
  <div id=“contents”>
    <ul class=“list-product”>
      @foreach($items as $item)
      <a href=“http://localhost:8000/list/detail/{{$item->code}}”>
        <li>
          <span class = “image”>
            <img src="{{ asset('/storage/img/'.$item->filename) }}" alt = “商品画像”>
          </span>
          <span class = “text” style=“height: 28px;“>
            {{$item->name}}
          </span>
          <span class=“price”>
            {{$item->sellingprice}}
          </span>
        </li>
      </a>
      @endforeach
    </ul>
  </div>

</body>
</html>

<a></a>
<h1></h1>
