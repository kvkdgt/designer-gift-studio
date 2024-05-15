@extends('admin/theme')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/admin/dashboard.css'); }} ">
<div class="dashboard-admin">
    <div class="welcome-logo">
      <img src="{{ URL::asset('imgs/58-Teamwork.svg'); }}" alt="">  
    </div>
    <div class="welcome-text">
        <span>Welcome to Designer Gift Studio <span class="admin-panel"> Admin Panel</span></span>
    </div>
</div>
@endsection
