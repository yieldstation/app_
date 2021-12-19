<x-layout>
{{ Form::open(['action' => 'App\Http\Controllers\EventController@store', 'method' => 'post']) }}

<p>
{{ Form::label('title', 'イベント名') }}
{{ Form::text('title', '', ['id' => 'title', 'size' => 50]) }}
</p>

<p>
{{ Form::label('start_time', '開始日時') }}
<input type="datetime-local" id="start_time" name="start_time">
</p>

<p>
{{ Form::label('end_time', '終了日時') }}
<input type="datetime-local" id="end_time" name="end_time">
</p>

<div>
    {{ Form::reset('リセット', ['class' => 'btn btn-outline-success btn-lg']) }}
    {{ Form::submit('登録', ['name' => 'regist', 'class' => 'btn btn-success btn-lg']) }}
</div>
{{ Form::close() }}
</x-layout>