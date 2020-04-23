@extends('layouts.app')

@section('title-block')Вход@endsection

@section('content')

  <div class="container">
    <div class="row">
        <div class="offset-lg-2 col-lg-6">
          <h1 class="offset-lg-2">Вход</h1>

          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form action="{{ route('sign-in-form') }}" method="post" class="col-lg-6">
            @csrf
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control"/>
            <label for="password">Введите пароль</label>
            <input type="password" name="password" placeholder="Введите пароль" id="password" class="form-control"/>
            <button type="submit" class="btn btn-success mt-1 ">Войти</button>
          </form>
        </div>
    </div>
  </div>



@endsection
