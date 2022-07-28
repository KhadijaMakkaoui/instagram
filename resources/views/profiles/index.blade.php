@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/svg/profile.jpg" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->userName}}</h1>
                <a href="">Add New Post</a>
            </div>
           <div class="d-flex justify-content-between w-50">
                <div class="pr-5">
                    <strong>1</strong> publication
                </div>
                <div class="pr-5">
                    <strong>61</strong> abonnés
                </div>
                <div class="pr-5">
                    <strong>351</strong> abonnements
                </div>
           </div>
           
           <div class="pt-4 fw-bold">{{ $user->profile->title }}</div>
           <div class="">{{ $user->profile->description }}</div>
           <div class="">
            <a href="">{{$user->profile->url}}</a>
           </div>
        </div>
    </div>
    <div class="row">
        @foreach($user->posts as $post)
            <div class="col-4">
                <img src="storage/{{ $post->image }}" class="w-100">
            </div>
            
        @endforeach
    </div>
</div>
@endsection
