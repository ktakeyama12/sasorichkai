<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
        
        <link href="css/login.css" rel="stylesheet" type="text/css">  
        <!-- jQuery -->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
       
    
    
    
</head>

<section class="user">
  <div class="user_options-container">
    <div class="user_options-text">
      <div class="user_options-unregistered">
         <span class="error">  <u>@include('commons.error_messages')</u> </span>
        <h2 class="user_unregistered-title">アカウント作成 </h2>
       
        <p class="user_unregistered-text">新卒のためのお得な情報が盛り沢山！会員登録して情報を✓</p>
        <button class="user_unregistered-signup" id="signup-button">新規作成</button>
      </div>

      <div class="user_options-registered">
        <h2 class="user_registered-title">既存ユーザー</h2>
        <p class="user_registered-text">今日もお得な情報がザクザク。ログインして情報をgetしよう！！</p>
        <button class="user_registered-login" id="login-button">ログイン</button>
      </div>
    </div>
    
    <div class="user_options-forms" id="user_options-forms">
      <div class="user_forms-login">
        <h2 class="forms_title">Login</h2>
        <form class="forms_form" method="post" action="login">
            {{ csrf_field() }}
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" name="name" placeholder="Full Name" class="forms_field-input" required autofocus />
            </div>
            <div class="forms_field">
              <input type="password" name="password" placeholder="Password" class="forms_field-input" required />
            </div>
          </fieldset>
          
          <div class="forms_buttons">
            <button type="button" class="forms_buttons-forgot">Forgot password?</button>
            <input type="submit" value="Log In" class="forms_buttons-action">
           
          </div>
        </form>
      </div>
      <div class="user_forms-signup">
        <h2 class="forms_title">Sign Up</h2>
        <form class="forms_form" method="post" action="signup">
          {{ csrf_field() }}
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" name="name" placeholder="Full Name" value="" class="forms_field-input" required />
            </div>
            
            <div class="forms_field">
              <input type="password" name="password" placeholder="Password" value="" class="forms_field-input" required />
            </div>
          </fieldset>
          <div class="forms_buttons">
            <input type="submit" value="Sign up" class="forms_buttons-action">
            
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript" src="js/login.js"></script>