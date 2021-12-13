@extends('layout.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-auto">
                <div class="contact-form">
                    <h3>جهات الاتصال</h1>
                        <table class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">الاسم</th>
                                <th scope="col">العائلة</th>
                                <th scope="col">البريد الإلكتروني</th>
                                <th scope="col">&nbsp</th>
                                <th scope="col">&nbsp</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contents as $content)
                            <tr>
                                <th scope="row">{{$content->id}}</th>
                                <td>{{$content->first_name}}</td>
                                <td>{{$content->last_name}}</td>
                                <td>{{$content->email}}</td>
                                <td><a href="{{url('destroe/' .$content->id)}}" class="btn btn-danger">حذف</a></td>
                                <td><a href="{{url('edit/' .$content->id)}}" class="btn btn-primary" >تعديل</a></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>











@endsection
