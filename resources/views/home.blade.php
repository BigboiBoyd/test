@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-0"></div>
        
        <img src="/images/logo.png" class="rounded-circle" style="width:170px;height:160px"  alt="">
    <div class="col-4"><h1></h1>
    <div class="mx-auto" style="width: 200px;">
    <h1>Testicles</h1>
    <div class="d-flex" style="padding-top:10px;gap:150px;width:100px">
    </div>
    <div class="pt-3" style="font-weight: 700;">links</div>
        <div class="pt-0"><a href="https://discord.gg/J6YrAwjC">Discord</a></div>
        <div class="pt-0"><a href="https://github.com/BigboiBoyd">Github</a></div>  
        <head>   
<link href="calendar.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
include 'calendar.php';
 
$calendar = new Calendar();
 
echo $calendar->show();
?>
</body>
        @endsection
