<!DOCTYPE html>
<html>
<head>
@isset($title)
<title>{{ $title }} - vet-app</title>
@else
<title>vet-app</title>
@endisset
<link rel="stylesheet" href="{{  asset('css/style.css') }}" />
</head>
<body>