<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700,900|Raleway:300,400,700,900" rel="stylesheet">
    <!-- Styles -->
</head>
<body>
@extends('layouts.app')
<div id="app">
    <app></app>
</div>
</body>
</html>