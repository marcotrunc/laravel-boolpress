<h1>Il tuo nuovo post è stato aggiunto al blog!</h1>

<h2> Titolo del post: {{ $post->title }}</h2>
<address>Da {{ $post->user->name }}</address>
<ul>
    @foreach ($post->tags as $tag)
        <li>{{ $tag->label }}</li>
    @endforeach
</ul>