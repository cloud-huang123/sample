@extends('layouts.default')
@section('title','主页')
@section('content')
	<div class="jumbotron">
		<h1>这是一个标题</h1>
		<p class="lead">
			你现在看到的就是简单登录注册页面
		</p>
		<p>
			一切，将从这里开始。
		</p>
		<p>
			<a class="btn btn-lg btn-success" href="{{route('signup')}}" role="button">现在注册</a>
		</p>
	</div>
@stop