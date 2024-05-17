<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Форма</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">
    <div class="container-lg col-lg-6 ">
        <h4 class="display-4 fw-bold text-white mb-3 text-center my-5 border-bottom ">Форма регистрации</h4>

        @if($errors->any())

            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{$error}}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="needs-validation" method="post" action="/form/check">
            @csrf
            <div class="row g-3">
                <div class="col-12">
                    <label for="name" class="form-label text-white">Введите фамилию и инициалы</label>
                    <input type="text" class="form-control border-warning text-white" name="name" id="name" placeholder="Иванов И.И.">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

            <h4 class="mb-3">Выберете ступень обучения:</h4>
            <div class="my-3 text-center">
                <div class="form-check form-check-inline my-2">
                    <input class="btn-check" type="radio" id="sso" name="levelOfEducation" value="Среднее специальное образование" onclick="display_levelOfEducation('sso')"/>
                    <label for="sso" class="btn btn-outline-warning">Среднее специальное образование</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="btn-check" type="radio" id="vo" name="levelOfEducation" value="Высшее образование" onclick="display_levelOfEducation('vo')" />
                    <label for="vo" class="btn btn-outline-warning">Высшее образование</label>
                </div>
            </div>

            <div data-hide="true" id="ssoContent">
                <fieldset>
                <h4 class="mb-3">После какого класса вы поступаете:</h4>
                <div class="my-3 text-center">
                    <div class="form-check form-check-inline my-2">
                        <input class="btn-check" type="radio" id="sso_9" name="whatHaveFinished" value="9 классов" onclick="display_sso_then('sso_9')"/>
                        <label for="sso_9" class="btn btn-outline-warning">9 классов</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="btn-check" type="radio" id="sso_11" name="whatHaveFinished" value="11 классов" onclick="display_sso_then('sso_11')" />
                        <label for="sso_11" class="btn btn-outline-warning">11 классов</label>
                    </div>
                </div>
                </fieldset>
            </div>

            <div data-hide="true" id="voContent">
                <fieldset>
                <h4 class="mb-3">Что вы закончили:</h4>
                <div class="my-3 text-center">
                    <div class="form-check form-check-inline my-2">
                        <input class="btn-check" type="radio" id="vo_11" name="whatHaveFinished" value="11 классов" onclick="display_vo_then('vo_11')"/>
                        <label for="vo_11" class="btn btn-outline-warning">11 классов</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="btn-check" type="radio" id="vo_sso" name="whatHaveFinished" value="Среднее специальное образование" onclick="display_vo_then('vo_sso')" />
                        <label for="vo_sso" class="btn btn-outline-warning">Среднее специальное образование</label>
                    </div>
                </div>
                </fieldset>
            </div>

            <div data-hide="true" id="ssoAfter9">
                <fieldset>
                <p>ДАТА и ВРЕМЯ ссо 9</p>
                </fieldset>
            </div>

            <div data-hide="true" id="ssoAfter11">
                <fieldset>
                <h4 class="mb-3">На какую форму обучения:</h4>
                <div class="my-3 text-center">
                    <div class="form-check form-check-inline my-2">
                        <input class="btn-check" type="radio" id="sso_11_d" name="formOfStudy" value="Дневное" onclick="display_sso_11_then('sso_11_d')"/>
                        <label for="sso_11_d" class="btn btn-outline-warning">Дневное</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="btn-check" type="radio" id="sso_11_z" name="formOfStudy" value="Заочное" onclick="display_sso_11_then('sso_11_z')" />
                        <label for="sso_11_z" class="btn btn-outline-warning">Заочное</label>
                    </div>
                </div>
                </fieldset>
            </div>

            <div data-hide="true" id="dAfter11_sso">
                <fieldset>
                <p>ДАТА и ВРЕМЯ ссо 11 днев</p>
                </fieldset>
            </div>

            <div data-hide="true" id="zAfter11_sso">
                <fieldset>
                <p>ДАТА и ВРЕМЯ ссо 11 заоч</p>
                </fieldset>
            </div>

            <div data-hide="true" id="voAfter11">
                <fieldset>
                <p> ДАТА и ВРЕМЯ ВО после 11</p>
                </fieldset>
            </div>

            <div data-hide="true" id="voAfterSso">
                <fieldset>
                    <h4 class="mb-3">На какую форму обучения:</h4>
                    <div class="my-3 text-center">
                        <div class="form-check form-check-inline my-2">
                            <input class="btn-check" type="radio" id="vo_sso_d" name="formOfStudy" value="Дневное" onclick="display_vo_sso_then('vo_sso_d')"/>
                            <label for="vo_sso_d" class="btn btn-outline-warning">Дневное</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="btn-check" type="radio" id="vo_sso_z" name="formOfStudy" value="Заочное" onclick="display_vo_sso_then('vo_sso_z')" />
                            <label for="vo_sso_z" class="btn btn-outline-warning">Заочное</label>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div data-hide="true" id="dAfterSso">
                <fieldset>
                <p>ДАТА и ВРЕМЯ ВО после ССО на днев</p>
                </fieldset>
            </div>

            <div data-hide="true" id="zAfterSso">
                <fieldset>
                <p>ДАТА и ВРЕМЯ ВО после ССО на заоч</p>
                </fieldset>
            </div>
                <div class="form-check form-check-inline">
                <input class="custom-control-label" type="checkbox" id="checkbox" name="checkbox">
                <label for="checkbox">Я даю разрешение на обработку персональных данных</label>
                </div>

            <hr class="my-4">
            <button class="btn btn-outline-warning btn-lg px-4 me-sm-3 fw-bold mt-3 mb-5" type="submit">Зарегистрироваться</button>
            </div>
        </form>
    </div>
    <script src={{ asset('./js/form.js')  }} ></script>
</body>
</html>
