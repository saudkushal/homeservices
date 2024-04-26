@extends('admin.layout.main')
@section('main')

    <div class="dd flex flex-col pt-20 pl-5">
        <p>Service_ID = {{ $resource->id }}</p>
        <p>Service_Name = {{ $resource->servicename }}</p>
        <p>Service_Image= {{ $resource->serviceimage }}</p>
        <p>Created_At = {{ $resource->created_at }}</p>

    </div>
@endsection
