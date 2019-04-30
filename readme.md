<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# yesNo

#### Работающее приложение здесь: http://yesno1.herokuapp.com


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


### Estimate

#### День 1

1. Регистрация  Php Storm
2. Переустановка Smart Git
/1час
3. Репозиторий проекта на Git Hub
4. Readme.md
/1час
5. Установка Laravel
6. Отображение приложения в сборке Homestead
/1 час
7. Update DB Configuration
/1час
8. Create Table
/1 час

//(всего за день) 5 часов

#### День 2

1. Create Resource Route
2. Create Controller and Model
/1 час
3. Create Blade files
/2 часа
4. Preparing Random Question page
/1 час

//4 часа

#### День 3

1. Отладка связи по ajax
2. Получение имени селектора в ответе от контроллера
/3 часа

3.Получить изображение по апи
4.Вставить изображение
/2 часа

//5 часов

#### День 4
1. Деплой приложения на Heroku
2. Настройка работоспособности
3. Отчет
// 2 часа

#### ///Всего: 16 часов (4 дня)
