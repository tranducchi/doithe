@extends('dashboard.master')
@section('title', 'Sửa slide')
@section('category', 'Sửa')
@section('content')
<div class="box box-primary">
    <!-- /.box-header -->
    <!-- form start -->
    @foreach($sliders as $sl)
    <form method="post" action="{{route('slider.update', $sl->id)}}">
      @csrf
      {{method_field('PUT')}}
        <div class="box-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Tiêu đề</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Tiêu đề của Slide" value="{{$sl->title}}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mô tả slide</label>
          <textarea class="form-control" rows="5" name="description" placeholder="Nhập mô tả ngắn cho Slide" ...">{{$sl->description}}</textarea>
          </div>
          <div class="form-group">
          <img src="/storage/images/{{$sl->img}}" name="img" width="40%" class="img-thumbnail" alt="">
            <label for="exampleInputFile">Chọn ảnh</label>
            <input type="file" id="exampleInputFile">

            <p class="help-block">Chọn ảnh cho Slide</p>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    @endforeach
  </div>
@endsection