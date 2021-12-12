<x-layout>
{{ Form::open(['action' => 'App\Http\Controllers\EventController@store', 'method' => 'post']) }}

<p>
{{ Form::label('event_name', 'イベント名') }}
{{ Form::text('event_name', '', ['id' => 'event_name', 'size' => 50]) }}
</p>

<p>
{{ Form::label('start_time', '開始日時') }}
<input type="datetime-local" id="start_time" name="start_time">
</p>

<div>
    {{ Form::reset('リセット', ['class' => 'btn btn-outline-success btn-lg']) }}
    {{ Form::submit('登録', ['name' => 'regist', 'class' => 'btn btn-success btn-lg']) }}
</div>
{{ Form::close() }}
</x-layout>