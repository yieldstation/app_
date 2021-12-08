<x-layout>
   @foreach($events as $event)
       <article>
           <h1>
               <a href="/events/{{ $event->id}}" >
                   {{ $event->title }}
               </a>
           </h1>

           <div>
               {{ $event->start_time }}
           </div>
       </article>
   @endforeach
    {{ link_to_route('events.create', '新規登録', null, ['class' => 'btn btn-primary mb-3']) }}
</x-layout>