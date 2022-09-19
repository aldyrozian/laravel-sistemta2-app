@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        {!! Form::open(['url' => 'foo/bar']) !!}
            
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
        
@endsection