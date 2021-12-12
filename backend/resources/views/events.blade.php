<x-layout>
    <table class="table table-striped table-bordered table-hover table-sm">
        <thead>
            <tr>
                <th scope="col"">title</th>
                <th scope="col"">start time</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
            <tr>
                <a href="/events/{{ $event->id}}" >
                <td>
                        {{ $event->title }}
                    </a>
                </td>
                <td>
                    {{ $event->start_time }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ link_to_action('App\Http\Controllers\EventController@create', $title = '新規登録', $parameter = null, $attributes = ['class' => 'btn btn-primary mb-3']) }}
</x-layout>