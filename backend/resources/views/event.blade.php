<x-layout>
   <article>
       <h1>{{ $event->title }}</h1>

       <div>
           {!! $event->start_time !!}
       </div>
   </article>

   <a href="/">戻る</a>
</x-layout>