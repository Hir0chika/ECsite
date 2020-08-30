<html>
<head>
  <title>@yield('title')</title>
  <style>
  body { text-align: center; font-size:16pt; color:#999; margin:5px;background-color:#DDDDDD;}
  ul {font-size:12pt;}
  hr {margin:25px 100px; border-top:1px dashed #ddd;}
  th {background-color:#999; color:fff; padding:5px 10px;}
  td {border:solid 1px #aaa; color:#999; padding:5px 10px;}
  .menutitle {font-size:14pt; font-weight:bold; margin:0px;}
  .content {margin:10px;}
  .footer {text-align:right; font-size:10pt; margin:10px; border-bottom:solid 1px #ccc; color:#ccc;}
  h1 {
    color: #505050;
    padding: 0.5em;
    display: inline-block;
    line-height: 1.3;
    background: #dbebf8;
    vertical-align: middle;
    border-radius: 25px 0px 0px 25px;
  }

  h1:before {
    content: '●';
    color: white;
    margin-right: 8px;
  }

  table
{
margin-left: auto;
margin-right: auto;
}

  </style>
</head>
<body>
  <h1>@yield('title')</h1>
  <div class = "content">
    @yield('content')
  </div>
  <div class = "footer">
    @yield('footer')
  </div>
</body>
</html>
