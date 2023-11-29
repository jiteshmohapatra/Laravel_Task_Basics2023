<h1>Welcome to the laravel blade controll statement </h1>
<h2>You are inside the title page </h2>
<h1> {{10 + 3}} </h1>
<ins>{{50*20}}</ins>
<h2>{{50-20}}</h2>
<h1 style=color:orange;> GOOD AFTERNOON {{$x}} </h1>
<h3 style=color:brown;>GOOD AFTER NOON {{$x}} {{$y}} </h3>
@if($x=="sh")
<h1> HELLO {{$x}} YOU NAME IS MATCHED </h1>
@elseif($y=="Raja")
<h2> HII {{$y}} Again it will be matched</h2>
@endif
@for($i=0;$i<=10;$i++)
{{$i}}
@endfor