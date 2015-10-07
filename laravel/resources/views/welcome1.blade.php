@extends('app')
@section('head')
    <title>Test</title>
    <style>
        .title {
            font-size: 96px;
        }
    </style>
@endsection

@section('content')
    <div class="title">Welcome To Lin Blog</div>
    <?php phpinfo(); ?>
@endsection

