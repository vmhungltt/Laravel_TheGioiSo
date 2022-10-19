@extends('admin.layout.main')
@section('content')
<table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
      <th>STT</th>
      <th>Tên</th>
      <th>Ảnh</th>
      <th>Danh mục</th>
      <th>Nền tảng</th>
      <th>Ngày tạo</th>
      <th>Tổng đánh giá</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($listProduct as $key => $value)
        <tr>
            <td>{{$key + 1}}</td>
            <td> {{$value->name}}
            </td>
            <td> <img src="{{url('storage/products/'.$value->thumb.'')}}" width="80" height="80"/>
            </td>

             <td> {{$value->getCategory->name }}</td>
             <td> {{$value->getCategory->getBusiness->name }}</td>
            <td>{{$value->created_at}}</td>
            <td> <a href="/admin/comment/detail/{{$value->slug}}"> <button type="button" class="btn btn-primary">Xem chi tiết {{count($value->getComment)}} đánh giá</button> </a></td>

          </tr>
        @endforeach

    </tbody>
  </table>
@endsection

