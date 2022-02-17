<div>
    <h2 class="text-center">Tweets</h2>

    <div>
        <form action="" class="form-inline" method="post" wire:submit.prevent="create">
            <div class="form-group">
                <input type="text" name="content" id="content" class="form-control mr-4" wire:model="content">
                @error('content')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                <button class="btn btn-success" type="submit">Criar Tweet</button>
            </div>
        </form>
    </div>

    <div class="mt-4">
        <ul class="list-group">
            @foreach ($tweets as $tweet)
                <li class="list-group-item">
                    <b>{{ $tweet->user->name }}</b>
                    {{ $tweet->content }}

                    @if ($tweet->likes->count())
                        <a href="#" class="text-danger" wire:click.prevent="unlike({{ $tweet->id }})">Descurtir</a>
                    @else
                        <a href="#" class="text-primary" wire:click.prevent="like({{ $tweet->id }})">Curtir</a>
                    @endif
                </li>
            @endforeach
        </ul>
        <div class="mt-4">
            {{ $tweets->links() }}
        </div>
    </div>


</div>
