<div>
    Show Tweets

    <p>{{ $content }}</p>

    <form action="" method="post" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model="content">
        @error('content')
            <small>{{ $message }}</small>
        @enderror
        <button type="submit">Criar Tweet</button>
    </form>

    <hr>

    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }} <br>
    @endforeach

    <hr>

    <div>
        {{ $tweets->links() }}
    </div>
</div>
