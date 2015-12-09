<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title></title>
 <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
 


 <script src="//code.jquery.com/jquery.js"></script>

<script src="js/moment-with-locales.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script src="js/ZeroClipboard.js"></script>




</head>
<body>



@include('base._nav')

<br/>
<br/>
<br/>

<div class='container'>
    @if(Session::has('flash_message') )
    <div class="alert alert-success">
     @if (Session::has('flash_message_important'))
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
     @endif

       {{ Session::get('flash_message') }}
      </div>


     @endif

       @if (Auth::check()) @include('base._header') @endif

        @yield('corpo')

      @include('base._footer')



</div>
@if (Auth::check())
 <script>
 $('div.alert').not('.alert.important').delay(2000).slideUp(300);
</script>
@endif

</body>
</html>