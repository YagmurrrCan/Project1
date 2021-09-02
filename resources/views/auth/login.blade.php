@extends('front.layouts.app')

<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="{{route("index")}}">Anasayfa</a></li>
                <li class="active">Giriş Yap</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->

<!--account-starts-->
<div class="account">
    <div class="container">
        <div class="account-top heading">
            <h2>GİRİŞ YAP</h2>
        </div>
        <div class="account-main">
            <div class="col-md-6 account-left">
                <h3>Mevcut Kullanıcı</h3>
                <form method="POST" action="{{ route('userLogin') }}">
                    @csrf

                <div class="account-bottom">
                    <input placeholder="Email" name="email" value="{{ old('email') }}" type="text" tabindex="3" required>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <input placeholder="Password" name="password" type="password" tabindex="4" required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <div class="address">
                        <input type="submit" value="Login">
                    </div>
                </div>
                </form>
                </div>
            </div>

            <div class="col-md-6 account-right account-left">
                <h3>Yeni bir kullanıcı mısın? Kayıt Ol!</h3>
                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                <a href="{{route("register")}}">Üyelik</a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

<!--account-end-->
