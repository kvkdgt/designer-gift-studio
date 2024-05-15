@extends('admin/theme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/enquiries.css'); }} ">

<div>

    <div class="page-heading-section view-header">
        <div class="page-upper">
            <div>
                <div class="page-heading">
                    Enquiries
                </div>
                <div class="page-sub-heading">
                    Got your all enquiries here.
                </div>
            </div>

        </div>
        <a href="{{url('admin/enquiries/delete/'.$enquiries->id)}}">
            <div class="delete-container">
                <svg class="delete" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0H284.2c12.1 0 23.2 6.8 28.6 17.7L320 32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 96 0 81.7 0 64S14.3 32 32 32h96l7.2-14.3zM32 128H416V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V128zm96 64c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16V432c0 8.8 7.2 16 16 16s16-7.2 16-16V208c0-8.8-7.2-16-16-16z" />
                </svg>
            </div>
        </a>

    </div>
    <div class="main-section">
        <table>
            <tr>
                <th>Name</th>
                <td>{{$enquiries->name}}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{$enquiries->email}}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td>{{$enquiries->message}}</td>
            </tr>
        </table>
    </div>
</div>

@endsection