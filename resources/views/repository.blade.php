@extends('layouts.admin')
@section('content')
<section class="content-header">
      <h1>
        Repository
        <small> Content Repository</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Repository</li>
      </ol>
    </section>
<!-- Main content -->
<section class="content container-fluid">
<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title"><i class="fa fa-database"></i>&nbsp;</h3>
<div class="box-tools pull-right">
<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
</button>
</div>
<!-- /.box-tools -->
</div>
<!-- /.box-header -->
<div class="box-body">
My Repository
@foreach($repo as $repo)  
  <h3>{!! $repo->category!!}</h3>
  <l><a href="/files/{{$repo->file}}" >{{$repo->file}}</a></l>
  <p>{!! $repo->description!!}</p>
  <l class="pull-right">Posted By: {!! $repo->posted_by!!} at {!! $repo->created_at!!}</l><br>
  <hr />
@endforeach
    </div>
  </div>
</section>

    @endsection