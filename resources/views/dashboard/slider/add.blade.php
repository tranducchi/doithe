@extends('dashboard.master')
@section('title', 'Thêm slide')
@section('category', 'Thêm slider')
@section('content')
<div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Slider</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form method="post" action="{{route('slider.store')}}" enctype="multipart/form-data">
      @csrf
      <div class="box-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Tiêu đề</label>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tiêu đề của Slide" name="title">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mô tả slide</label>
          <textarea class="form-control" rows="3" placeholder="Nhập mô tả ngắn cho Slide" ..." name="description"></textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Chọn ảnh</label>
          <input type="file" id="exampleInputFile" name="img">

          <p class="help-block">Chọn ảnh cho Slide</p>
        </div>
      </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Thêm</button>
      </div>
    </form>
  </div>
@endsection