<link href="{{asset('backend/css')}}/maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{asset('backend/css/login.css')}}">
<script src="{{asset('backend/css')}}/maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="{{asset('backend/css')}}/cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="{{asset('backend/css')}}/"  alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="POST"action="{{route('login.store')}}">
      @csrf
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="login">
      <input type="password" id="password" class="fadeIn second" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>