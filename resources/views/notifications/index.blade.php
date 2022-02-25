@extends('layouts.app')

@section('title', 'test')

@section('content')
  <div class="container">
    <div class="col-md-10 offset-md-1">
      <div class="card ">

        <div class="card-body">

          <h3 class="text-xs-center">
            <i class="far fa-bell" aria-hidden="true"></i> {{trans('forum.notification')}}
          </h3>
          <hr>

          @if ($notifications->count())

            <div class="list-unstyled notification-list">
              @foreach ($notifications as $notification)
                @include('notifications.types._' . Str::snake(class_basename($notification->type)))
              @endforeach

              {!! $notifications->render() !!}
            </div>

          @else
            <div class="empty-block">{{trans('forum.no_notification')}}</div>
          @endif

        </div>
      </div>
    </div>
  </div>
@stop
