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
        <h2 class="user_unregistered-title">ログイン</h2>
       
        <p class="user_unregistered-text">今日もお得な情報がザクザク。ログインして情報をgetしよう！！</p>
        <button class="user_unregistered-signup" id="signup-button">はじめてご利用の方はこちら</button>
      </div>

      <div class="user_options-registered">
        <h2 class="user_registered-title">サインアップ</h2>
        <p class="user_registered-text">新卒のためのお得な情報が盛り沢山！会員登録して情報をチェック</p>
        <button class="user_registered-login" id="login-button">アカウントを持っている方はこちら</button>
      </div>
    </div>
    
    <div class="user_options-forms" id="user_options-forms">
      <div class="user_forms-login">
        <h2 class="forms_title">ユーザーネームでログイン</h2>
        <form class="forms_form" method="post" action="login">
            {{ csrf_field() }}
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" name="name" placeholder="Your Nickname" class="forms_field-input" required autofocus />
            </div>
            <div class="forms_field">
              <input type="password" name="password" placeholder="Password" class="forms_field-input" required />
            </div>
          </fieldset>
          
          <div class="forms_buttons">
            <button type="button" class="forms_buttons-forgot">パスワードをお忘れですか？</button>
            <input type="submit" value="ログイン" class="forms_buttons-action">
           
          </div>
        </form>
      </div>
      <div class="user_forms-signup">
        <h2 class="forms_title">新規会員登録</h2>
        <form class="forms_form" method="post" action="signup">
          {{ csrf_field() }}
          <fieldset class="forms_fieldset">
            <div class="forms_field">
              <input type="text" name="name" placeholder="Your Nickname" value="" class="forms_field-input" required />
            </div>
            
            <div class="forms_field">
              <input type="password" name="password" placeholder="Password" value="" class="forms_field-input" required />
            </div>
          </fieldset>
          <div class="forms_buttons">
            <input type="submit" value="アカウントを作成" class="forms_buttons-action">
            
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript" src="js/login.js"></script>