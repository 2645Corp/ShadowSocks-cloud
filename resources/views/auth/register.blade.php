<!DOCTYPE html>
<html lang="en" >
   @include('tree.head')
   @include('tree.bottom')
   <script>
      angular.module("login").constant("CSRF_TOKEN", '{{ csrf_token() }}');
   </script>
<body >
<div class="app app-header-fixed ">
  

    <div ng-app="login" class="container w-xxl w-auto-xs" ng-controller="SigninFormController" ng-init="app.settings.container = false;">
      <a href class="navbar-brand block m-t">ssx.cool2645.com</a>
      <div class="m-b-lg">
        <div class="wrapper text-center">
          <strong><a href="https://github.com/2645Corp/ShadowSocks-cloud">(0.0)Zzzzz</a></strong>
        </div>
        <form name="form" class="form-validation">
          <div class="text-danger wrapper text-center" ng-show="authError">
               @{{authError}}
          </div>
          <div class="list-group list-group-sm">
            <div class="list-group-item">
              <input placeholder="Name" class="form-control no-border" ng-model="user.name" required>
            </div>
            <div class="list-group-item">
              <input type="email" placeholder="Email" class="form-control no-border" ng-model="user.email" required>
            </div>
            <div class="list-group-item">
               <input type="password" placeholder="Password" class="form-control no-border" ng-model="user.password" required>
            </div>
            <div class="list-group-item">
              <input type="password" placeholder="Invitation Code" class="form-control no-border" ng-model="user.code">
            </div>
          </div>
          <div class="checkbox m-b-md m-t-none">
            <label class="i-checks">
              <input type="checkbox" ng-model="agree" required><i></i> 同意 <a href>网站条例</a>
            </label>
          </div>
          <button type="submit" class="btn btn-lg btn-primary btn-block" ng-click="signup()" ng-disabled='form.$invalid'>注册</button>
          <div class="line line-dashed"></div>
          <p class="text-center"><small>已有账号?</small></p>
          <a href="/auth/login" class="btn btn-lg btn-default btn-block">登录</a>
        </form>
      </div>
    
        <p>
      <small class="text-muted">&copy;  2015 rumia.me</small>
</p>
      </div>
</div>


</body>

</html>
