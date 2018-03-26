<DOCTYPE html>
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
      <!-- jQuery -->
      <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
      <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!-- Comment Refresh -->
      <script src="/js/commrefresh.js"></script>
  </head>
<html>
    @include('partials.head')
    @include('partials.scripts')
        <head>
            <title>Practice Inserting Data into Database</title>
        </head>
<body style="margin-left: 30px;">
    <h1>Practice Inserting Data into Database</h1>
<div id ="contact_form">
<form class="mine" method="post">
    <table>
        {{ csrf_field() }}
      <tr>
        <td>First Name:</td>
        <td><input type="text" name="firstname" id="firstname"></td>
      </tr>
      <tr>
        <td>Surname:</td>
        <td><input type="text" name="surname" id="surname"></td>
     </tr>
      <tr>
        <td>E-mail:</td>         
        <td><input type="email" name="email" id="email"></td>
     </tr>
     <tr>
            <td>Comment:</td>         
            <td><textarea name="comment" col="30" row="5" id ="comment"></textarea></td>
         </tr>
     <tr>
        <td><input type="button" name="submit" value="Submit" id="submit"></td>
        <td><p id="success"></p></td>
     </tr>
    </table>
  </form>
  <br>
  <p id="success"></p>
</div>
  <div id="comarea">
  <table style="border: 2px solid black; padding: 15px;">
      <tr>
         <th style="border: 1px solid black; padding: 15px;">Name</th>
         <th style="border: 1px solid black; padding: 15px;">Comment</th>
      </tr>
      @foreach (array_reverse($commvals) as $comm)
      <tr>
      <td style="border: 1px solid black; padding: 15px;">{{$comm->firstname}} {{$comm->surname}}</td>
        <td style="border: 1px solid black; padding: 15px;">{{$comm->comment}}</td>
      </tr>
      @endforeach
  </table>
  <br>
  <button type="button" onclick="loadDB()">Change Content</button>
</div>

</body>
</html>