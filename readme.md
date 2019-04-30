<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# yesNo

#### Работающее приложение здесь: http://yesno1.herokuapp.com/questions
**P.S.**
(В силу особенностей временной файловой системы **Heroku**, на которую задеплоено приложение, ссылки на изображения работают только сразу после деплоя/ передедеплоя)

# Задание: 

## 1.CRUD 
Реализовать CRUD (create, read, update, delete) для вопросов, на которые можно давать ответ только да или нет
Структура таблицы для этого:
* id - id вопроса
* title - Текст вопроса (обязательно для заполнения)


## 2. Страница опроса
Затем реализовать страницу (допустим /get-random-question), на которой будет из базы выбираться 1 рандомный вопрос и отображаться на этой странице. Пользователю предоставляется дать на него ответ, да или нет (можно реализовать в качестве select списка или radio инпутов)


## 3. Ajax и api 
после того, как пользователь выберет один из вариантов ответов, с помощью аякс-запроса к этому апи (https://yesno.wtf) мы отправляем туда вариант ответа пользователя и получаем изображение на этот вопрос и вставляем само изображение на страницу

Пример работы:
https://yesno.wtf
