<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopeeHome</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/shopee-icon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap&subset=vietnamese" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome-free-6.4.0-web/css/all.min.css') }}">
</head>

<body>
    <div class="app">
        @include('layouts.header')

        @yield('home')

        @include('layouts.footer')
    </div>

    <input type="checkbox" hidden class="madal__checkbox" id="modal-checkbox">
    <!-- Modal layout -->
    <div class="modal">
        <label for="modal-checkbox" action="#" method="POST" class="modal__overlay"> </label>
        <div class="modal__body">
            <!-- Register form -->
            <form id="form-register" class="auth-form form-register">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký</h3>
                        <span class="auth-form__switch-btn auth-form__switch-btn-login">Đăng nhập</span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" id="email" class="auth-form__input" placeholder="Email">  
                            <span class="form-message"></span>
                        </div>
                        <div class="auth-form__group">
                            <input type="password" id="password" class="auth-form__input" placeholder="Mật khẩu">  
                            <span class="form-message"></span>
                        </div>
                        <div class="auth-form__group">
                            <input type="password" id="password_confirmation" class="auth-form__input" placeholder="Nhập lại mật khẩu">  
                            <span class="form-message"></span>
                        </div>
                    </div>
                    
                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">
                            Bằng việc đang ký, bạn đã đồng ý với chùng tôi về
                            <a href="#" class="auth-form__text-link">Điều khoản dịch vụ </a> &
                            <a href="#" class="auth-form__text-link"> Chính sách bảo mật </a>
                        </p>
                    </div>

                    <div class="auth-form__controls">
                        <button class="btn auth-form__controls-back btn--nomal">TRỞ LẠI</button>
                        <button class="form-submit btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>  

                <div class="auth-form__socials">
                    <a href="#" class="btn auth-form__socials--facebook auth-form__socials-icon btn--side-s btn--with-icon">
                        <i class="fa-brands fa-square-facebook"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Facebook
                        </span>
                    </a>
                    <a href="#" class="btn auth-form__socials--google auth-form__socials-icon btn--side-s btn--with-icon">
                        <i class="fa-brands fa-google"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Google
                        </span>
                    </a>
                </div>
            </form>

              <!-- Login form -->
            <form id="form-login" action="#" method="POST" class="auth-form form-login">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <span class="auth-form__switch-btn auth-form__switch-btn-register">Đăng ký</span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" id="email" class="auth-form__input" placeholder="Email">  
                            <span class="form-message"></span>
                        </div>
                        <div class="auth-form__group">
                            <input type="password" id="password" class="auth-form__input" placeholder="Mật khẩu">  
                            <span class="form-message"></span>
                        </div>
                    </div>
                    
                    <div class="auth-form__aside">
                       <div class="auth-form__help">
                        <a href="#" class="auth-form__help-link auth-form__help-forgot">Quên Mật Khẩu</a>
                        <span class="auth-form__help-separate"></span>
                        <a href="#" class="auth-form__help-link">Cần trợ giúp?</a>
                       </div>
                    </div>

                    <div class="auth-form__controls">
                        <button class="btn auth-form__controls-back btn--nomal">TRỞ LẠI</button>
                        <button class="form-submit btn btn--primary">ĐĂNG NHẬP</button>
                    </div>
                </div>  

                <div class="auth-form__socials">
                    <a href="#" class="btn auth-form__socials--facebook auth-form__socials-icon btn--side-s btn--with-icon">
                        <i class="fa-brands fa-square-facebook"></i>
                        <span class="auth-form__socials-title">
                            Facebook
                        </span>
                    </a>
                    <a href="#" class="btn auth-form__socials--google auth-form__socials-icon btn--side-s btn--with-icon">
                        <i class="fa-brands fa-google"></i>
                        <span class="auth-form__socials-title">
                            Google
                        </span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/validator.js') }}"></script>
<script>
     Validator({
      form: '#form-register',
      formGroupSelector: '.auth-form__group',
      errorSelector: '.form-message',
      rules: [
        Validator.isRequired('#email'),
        Validator.isEmail('#email'),
        Validator.minLength('#password', 6),
        Validator.isRequired('#password_confirmation'),
        Validator.isConfirmed('#password_confirmation', function() {
          return document.querySelector('#form-1 #password').value;
        }, 'Mật khẩu nhập lại không chính xác'),
      ],
      onSubmit: function (data) {
        // Call api
        console.log(data);
      }
    });
    Validator({
      form: '#form-login',
      formGroupSelector: '.auth-form__group',
      errorSelector: '.form-message',
      rules: [
        Validator.isRequired('#email'),
        Validator.isEmail('#email'),
        Validator.isRequired('#password'),
        Validator.minLength('#password', 6),
      ],
      onSubmit: function (data) {
        // Call api
        console.log(data);
      }
    });
</script>
</html>