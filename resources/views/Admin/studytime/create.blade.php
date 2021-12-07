@extends('welcome')

@section('title', 'Page Title')



@section('content')
<form action="{{route('studytime.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="card">
<div class="card-header">
                <h3 class="card-title">Thêm Sinh Viên</h3>
              </div>
<div class="card-body">
<div class="form-group">
                    
                  
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ca Học</label>
                    <input type="text" class="form-control" name="studytime" placeholder="?h-?h">
                  </div>
                  
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="submit" class="btn btn-primary" name="btnname">Thêm</button>
  
                </div>
</div>
</form>
@stop