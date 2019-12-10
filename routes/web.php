<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//გააკეთეთ ბლოგის დამატების, სიის, განახლების გვერდი.
//ბლოგს ჰქონდეს შემდეგი ველები: სათაური, ქვე სათაური, თარიღი, ავტორი, აღწერა.
//სიის გვერდზე გამოიტანეთ ბლოგის სათაური, ქვესათაური და თარიღი.
// სიის გვერდზე დაამატეთ ერთი დამატებითი input რომლითაც გაფილტრავთ მონაცემებს.
// გვერდზე გამოიტანოს 5-5 ბლოგი. გააკეთეთ ვალიდაციები.
// სათაურში აუცილებლად უნდა იყოს მინიმუმ 3 სიტყვა (მოგიწევთ custom ვალიდაციის გამოყენება)

Route::get('/','BlogController@index')->name('index');
Route::post('/getInfo','BlogController@getInfo')->name('getInfo');
Route::get('/search/{q}','BlogController@search')->name('search');
Route::get('list','BlogController@list')->name('list');
Route::get('/article/{id}','BlogController@article');
