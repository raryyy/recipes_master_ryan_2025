@foreach ($comments as $comment)
    <div class="mb-4">
        <div class="flex items-center mb-2">
            <img src="{{ asset('pictures/' . $comment->user->picture) }}" alt="Nom de l'utilisateur"
                class="w-10 h-10 rounded-full mr-2" />
            <span class="font-bold">{{ $comment->user->name }}</span>
        </div>
        <p class="text-gray-700">
            {{ $comment->content }}
        </p>
    </div>
@endforeach
