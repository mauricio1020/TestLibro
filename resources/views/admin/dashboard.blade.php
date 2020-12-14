@extends('admin.template')


@section('content')

	<div class="container text-center">

		<div class="page-header">
			<h1><i class="fa fa-rocket">DASHBOARD</i></h1>	
		</div>

		<h2>Bienvenido(a) {{ Auth::user()->user }} al panel de administracio</h2>


		<div class="row">
			<div class="col-md-6">
				<div class="panel">
					<i class="fa fa-shopping-cart icon-home"></i>
					<a href="{{ route('product.index') }}" class="btn btn-warning btn-block btn-home-admin">PRODUCTOS</a> 	 		
				</div>
			</div>	
	</div>
@stop