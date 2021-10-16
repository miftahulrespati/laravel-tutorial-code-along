@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-8">
      <img src="/storage/{{ $post->image }}" alt="" class="w-100">
    </div>
    <div class="col-4">
      <div class="d-flex align-items-center">
        <div class="pr-3">
        <a href="/profile/{{$post->user->id}}">    
        <img src="{{ $post->user->profile->profileImage() }}" alt="profile image" 
            class="rounded-circle w-100" style="max-width: 40px;">
        </a>
        </div>
        <div>
            <div class="font-weight-bold">
              <a href="/profile/{{$post->user->id}}"><span class="text-dark pr-1">{{$post->user->username}}
            </span>
          </a>
                <span>&bullet;</span>
                <a href="#" class="pl-1">Follow</a>
          </div>
        </div>
      </div>
        
      <hr>

        <p>
          <span class="font-weight-bold">
            <a href="/profile/{{$post->user->id}}"><span class="text-dark">{{$post->user->username}}
              </span>
          </a>
        </span>{{$post->caption}}
      </p>
    </div>
  </div>
</div>
@endsection
