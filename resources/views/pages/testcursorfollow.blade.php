<head>
<style>
#divoverpage {position:absolute;display:none;color:white;background-color:black; transition: 0.2s;}
#onme {width:100%;height:100%;background-color:white;cursor:pointer}
</style>
<script type="text/javascript">
var divFollow = 'divoverpage'; // div that is to follow the mouse (must be position:absolute)
var offX = 20;          // X offset from mouse position
var offY = 20;          // Y offset from mouse position

function mouseX(evt) {if (!evt) evt = window.event; if (evt.pageX) return evt.pageX; else if (evt.clientX)return evt.clientX + (document.documentElement.scrollLeft ?  document.documentElement.scrollLeft : document.body.scrollLeft); else return 0;}
function mouseY(evt) {if (!evt) evt = window.event; if (evt.pageY) return evt.pageY; else if (evt.clientY)return evt.clientY + (document.documentElement.scrollTop ? document.documentElement.scrollTop : document.body.scrollTop); else return 0;}

function follow(evt) {
    var obj = document.getElementById(divFollow).style;
    obj.left = (parseInt(mouseX(evt))+offX) + 'px';
    obj.top = (parseInt(mouseY(evt))+offY) + 'px';
    }
document.onmousemove = follow;
</script>
</head>
<body>
<div id="divoverpage" onMouseover= ''><a href="www.google.co.uk">test</a></div>
<br><br>
<div id='onme' onMouseover='document.getElementById(divFollow).style.display="block"' onMouseout='document.getElementById(divFollow).style.display="none"'>When hover over this area there will be object following the mouse



<table style="border: 1px solid black;">
  <tr>
    <th>ID</th>
    <th>col1</th>
    <th>col2</th>
    <th>col3</th>
    <th>col4</th>
    <th>col5</th>
  </tr>
 
  @foreach ($tests as $user)
  <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->firstname}}</td>
    <td>{{$user->surname}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->col4}}</td>
    <td>{{$user->col5}}</td>
  </tr>
@endforeach



</table>
<br><br>
<table style="border: 1px solid black;">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
  </tr>
  
 @foreach ($checks as $check)
  <tr>
    <td>{{$check->id}}</td>
    <td>{{$check->Name}}</td>
    <td>{{$check->Surname}}</td>
  </tr>
@endforeach

@foreach ($sprawdzimys as $spr)
@foreach ($nazwiskos as $naz)
<tr>
<td>{{$spr}} {{$naz}}</td>
</tr>
@endforeach
@endforeach
</table>

<br><br>
<table style="border: 2px solid black">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Surname</th>
    <th>Age</th>
    <th>Earnings</th>
    <th>Deductions</th>
    <th> ------- </th>
    <th>Highest income (after deductions) </th>
  </tr>
  @foreach($ordery as $order)
  <tr>
  <td>{{$order->ID}}</td>
    <td>{{$order->Name}}</td>
    <td>{{$order->Surname}}</td>
    <td>{{$order->Age}}</td>
    <td>{{$order->Earnings}}</td>
    <td>{{$order->Deductions}}</td>
    <td> ------- </td>
    <td>{{$income = $order->Earnings-$order->Deductions}}</td>
  </tr>
  @endforeach
</table>
<br>
<table style="border: 2px solid black">
  <tr>
    <th>The richest</th>
    <th>Earning most</th>
    <th>Oldest</th>
    <th>Youngest</th>
  </tr>
  <tr>
  <td>{{$richy}}</td>
  <td>{{print "temp text"}}</td>
  <td>{{$oldest}}</td>
  <td>{{$youngest}}</td>
  </tr>
</table>

</div>
</body>
