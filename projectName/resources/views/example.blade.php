<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">


@section('content')
<?=$id ?><?=$name ?><?=$email ?>
   "В вашей корзине  {{ $sum }} тов. на общую сумму   @mycurrencys($sum, 'vvvvdd') ."
 @mycurrencys('150', 'vvvvdd')
@show

    </body>
</html>
