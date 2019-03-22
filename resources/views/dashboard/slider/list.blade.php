@extends('dashboard.master')
@section('title', 'Danh sách Slider')
@section('category', 'Danh sách Slider')
@section('content')
<div class="box">
    <div class="box-body">
      <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
        <thead>
        <tr role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">STT</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tiêu đề</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Mô tả</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Hình ảnh</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Sửa</th>
            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Xóa</th>
        </tr>
        </thead>
        <tbody>
        <?php $i=1; ?>
        @if(count($sliders) > 0)
          @foreach($sliders as $sl)
          <tr role="row" class="odd">
          <td class="sorting_1">{{$i}}</td>
          <td>{{$sl->title}}</td>
          <td>{{$sl->description}}</td>
            <td><img src="/storage/images/{{$sl->img}}" width="100%"></td>
          <td><a href="/dashboard/slider/{{$sl->id}}/edit" class="btn btn-warning"><i class="fa fa-fw fa-pencil"></i></a></td>
            <td>
              <form action="">
                <button type="submit" class="btn btn-danger"><i class="fa fa-fw fa-times"></i></button>
              </form>
            </td>
          </tr>
          <?php $i++; ?>
          @endforeach
        @else if

        @endif
      </tbody>
        <tfoot>
        </tfoot>
      </table>
        </div>
        </div>
    </div>
    <!-- /.box-body -->
  </div>
@endsection