<html>
<head>
    <title>Hello/Index</title>
    <style>
    body {font-size:16pt; color:#999;}
    h1 {
        font-size:100pt; text-align:right; color#f6f6f6;
        margin:-50px 0px -100px 0px;
    }
    </style>
</head>
<body>
    <h1>Blade/Index</h1>
    <p>&#064;forディレクティブ例</p>
    @foreach( $datas as $item )
        @if( $loop->first )
            <p>※データ一覧</p><ul>
        @endif
        <li>No,{{$loop->iteration}}. {{$item}}</li>
        @if( $loop->last )
            </ul><p>-------ここまで</p>
        @endif
    @endforeach
</body>
</html>
