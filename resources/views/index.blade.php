<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="container bg-danger">
    <form action="admin/index" method="post">
        @csrf
        <div class="contact_section">
            <h3 class="ml-2">Контактные данные</h3>
            <div>
                <div class="div1"><span>Имя</span>
                    <input type="text" class="input1" name="name" style="margin-left: 150px;"></div>
                <div class="div1"><span>Фамилия</span>
                    <input type="text" name="surname" class="input1" style="margin-left: 117px;"></div>
                <div><span>Город проживания</span>
                    <input type="text" name="city" class="input1" style="margin-left: 42px;"></div>
            </div>
        </div>

        <div class="main_section">
            <h3 class="ml-2">Основная информация</h3>
            <div>
                <div class="div1"><span>Дата рождения</span>
                    <input type="text" name="day" class="input2" style="margin-left: 70px;">
                    <select class="select2" name="select">
                        <option value="value1">Значение 1</option>
                        <option value="value2" selected>Значение 2</option>
                        <option value="value3">Значение 3</option>
                    </select>
                    <input type="text" name="year" class="input2">
                </div>

                <div class="div1 d-flex">
                    <span>Пол</span>
                    <div style="margin-left: 140px;">
                        <label class="container"> Мужской
                            <input type="checkbox" name="man" checked="checked">
                            <span class="checkmark"></span>
                        </label><label class="container">Женский
                            <input name="women" type="checkbox">
                            <span class="checkmark"></span>
                        </label></div>
                </div>

                <div><span>Гражданство</span>
                    <input type="text" class="input1" style="margin-left: 83px;"></div>
            </div>
        </div>
        <input type="submit">
    </form>
</div>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
</body>
</html>
<style>
    .div1 {
        padding-bottom: 20px;

    }

    .input1 {
        width: 240px;
        height: 35px;

    }

    .contact_section {
        margin-bottom: 25px;
    }

    .input2 {
        width: 55px;
        height: 30px;
    }

    .select2 {

        height: 30px;
    }
</style>
