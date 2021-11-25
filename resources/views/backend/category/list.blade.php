{{--@extends('backend.layouts.master')--}}
{{--@section('title','Category')--}}
{{--@section('content')--}}
<a href="{{route('categories.create')}}"><button>Create</button></a>

<table border="1px">
    <thead>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Description</th>
        <th>Image</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $key=>$category)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$category['name']}}</td>
            <td>{{$category['description']}}</td>
            <td><img style="width: 100px;height: 100px" src="img/{{$category->image}}" alt=""></td>
            <td><a href="{{route("categories.detail",$category->id)}}">Detail</a></td>
            <td><a href="{{route("categories.update",$category->id)}}">Update</a></td>
            <td><a href="{{route("categories.delete",$category->id)}}">Delete</a></td>
            {{--            <td><a href="{{route("categories.delete","$category->id")}}">Delete</a></td>--}}
        </tr>
    @endforeach
    </tbody>
</table>
{{--@endsection--}}
