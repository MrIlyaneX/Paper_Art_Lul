@extends('layouts.app')

@section('title-block') Регистрация @endsection

@section('content')
<div class="container">
  <div class="row">
      <div class="col-lg-8">
        <h1 class="offset-lg-3">Регистрация</h1>

        @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form action="{{ route('sign-up-form') }}" method="post" class="offset-lg-2 col-lg-6">
          @csrf
          <label for="name">Введите Ваше имя</label>
          <input type="text" name="name" placeholder="Введите имя" id="email" class="form-control"/>
          <label for="email">Введите Ваш email</label>
          <input type="email" name="email" placeholder="Введите email" id="email" class="form-control"/>
          <label for="password">Введите пароль</label>
          <input type="password" name="password" placeholder="Введите пароль" id="password" class="form-control"/>
          <label for="password1">Введите пароль еще раз</label>
          <input type="password" name="password1" placeholder="Введите пароль повторно" id="password1" class="form-control"/>
          <button type="submit" class="btn btn-success mt-1 ">Зарегистрироваться</button>

        </form>
      </div>
  </div>
</div>
@endsection
