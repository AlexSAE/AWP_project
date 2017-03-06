@foreach($posts as $post)
    <div>
        {{$post->title}}
        {{$post->user->name}}
        {{method_field('delete')}}
    </div>










@endforeach