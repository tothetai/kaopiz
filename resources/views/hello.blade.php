<h1 style="color:red">Hello World!</h1>
{{$test['name']}} - {{$test['age']}}
<br>
@if($test['age'] > 18)
	<h3>{{$test['name']}} :Da du tuoi di tu</h3>
@else
	<h3>Chua du tuoi đi tù</h3>
@endif
	