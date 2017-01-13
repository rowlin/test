@extends('layouts.app')

@section('headData')
    <script src="{{URL::asset('js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{URL::asset('js/faq.js')}}"></script>
    <script src="{{URL::asset('js/ajaxTasks.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap-datepicker.ru.min.js')}}"></script>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap-datepicker3.standalone.min.css')}}">
@endsection

@section('wrapper')
<<<<<<< HEAD
    <?php
        $userData = \Auth::user();
    ?>
=======
    <section class="fon_2">
        @include('elements.headerUser')
        @include('elements.nav2user')
>>>>>>> 4b0d72121ab1be9e0a1bcfe4856d8f68e55944f9

        <section class="container">   <!-- ~~~  class="page" ~~~ -->
            <div class="row">
                @include('elements.navUser')

<<<<<<< HEAD
        <div class="col-md-4">
            <img class="addPhoto" src="{{URL::asset('images/addPhoto.png')}}" alt="">
        </div>
        <div id="task1">
            <div class="col-md-4 inputText">
                <input type="text" name="name" id="name" placeholder="Имя" value="{{$userData->name}}">
                <input type="text" name="surname" id="surname" placeholder="Фамилия">
                <input type="text" name="phone" id="phone" placeholder="Телефон" value={{$userData->phone}}>
                <input type="text" name="birthday" id="birthday" placeholder="Дата рождения" class="form-control">
                <input type="text" name="username" id="username" placeholder="Логин">
            </div>
            <div class="col-md-4 inputText">
                <select name="gender" id="gender">
                    <option disabled selected>Выберите пол</option>
                    <option value="male">Мужской</option>
                    <option value="female">Женский</option>
                </select>
                <input type="text" name="country" id="country" placeholder="Страна">
                <input type="text" name="city" id="city" placeholder="Город">
                <input type="text" name="email" id="email" placeholder="E-mail" value="{{$userData->email}}">
                <input type="text" name="password" id="password" placeholder="Пароль">
                <input type="file" name="avatar" id="avatar">
            </div>
            <div class="col-md-offset-4 col-md-4">
                <p class="error"></p>
            </div>
            <div class="btn btn-default col-md-offset-4 col-md-4" id="sendInfo">
                <a>Сохранить</a>
=======
                <div class="col-md-8 col-md-offset-2">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <section>
                        <h2>Первая задача</h2>
                        <form  action="{{ url('first') }}" enctype="multipart/form-data" method="post" >
                            <div class="form-group">
                                <label for="username">Введите имя :</label>
                                <input class="form-control" type="text" name="username">
                            </div>
                            <div class="form-group">
                                <label for="surname">Введите фамилию:</label>
                                <input class="form-control" type="text" name="surname">
                            </div>
                            <div class="form-group" >
                                <label for="birthday">Ваша дата рождения :</label>
                                <div class="input-group "  >
                                    <input type="text"  id="datepicker" name="birthday" class="form-control">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gender">Выберете пол :</label>
                                <select name="gender" class="form-control">
                                    <option value="1">Мужской</option>
                                    <option value="0">Женский</option>
                                </select>
                            </div>
                            <div class="form-inline">
                                <div class="form-group">
                                    <label for="country">Укажите страну:</label>
                                    <input type="text" name="country" class="form-control" placeholder="Россия"  >
                                </div>
                                <div class="form-group">
                                    <label for="city">Укажите город:</label>
                                    <input type="text" name="city" class="form-control" id="city" placeholder="Санкт-петербург">
                                </div>
                            </div><!--form-inline-->
                            <div class="form-group">

                                <label for="avatar">Загрузите Аватарку:</label>
                                <input type="file" name="image"  id="avatar">
                            </div>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-default">Отправить</button>
                        </form>
                    </section>
                </div><!--col-->
>>>>>>> 4b0d72121ab1be9e0a1bcfe4856d8f68e55944f9
            </div>
        </section>


        <script>
            $('#datepicker').datepicker({format: 'yyyy-mm-dd', locale:'ru'})

        </script>


@endsection
