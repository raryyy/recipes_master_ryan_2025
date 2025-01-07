@extends('templates.index')


@section('title')
    {{ $recipe->name }}
@stop


@section('content')
    <!-- Recipe Detail -->
    <section class="bg-white rounded-lg shadow-lg p-6 mb-6">
        <!-- Recipe Image -->
        <img class="w-full h-96 object-cover rounded-t-lg" src="{{ $recipe->picture }}" alt="{{ $recipe->name }}" />


        <!-- Recipe Info -->
        <div class="p-4">
            <h1 class="text-3xl font-bold mb-4">{{ $recipe->name }}</h1>
            <div class="flex items-center mb-4">
                <span class="text-yellow-500 mr-1"><i class="fas fa-star"></i></span>
                <span>{{ count($recipe->ratings) }}</span>
                <span class="ml-4 text-gray-700"><i class="fas fa-clock"></i> {{ $recipe->prep_time }}</span>
            </div>
            <p class="text-gray-700 mb-4">
                {{ $recipe->description }}
            </p>
            <div class="flex items-center mb-4">
                <span class="text-gray-700 mr-2">Par {{ $recipe->user->name }}</span>
                <span class="text-gray-500"><i class="fas fa-comment"></i> {{ count($recipe->comments) }}
                    commentaires</span>
            </div>
        </div>


        <!-- Ingredients -->
        <div class="p-4 border-t">
            <h2 class="text-2xl font-bold mb-4">Ingrédients</h2>
            <ul class="list-disc pl-5">
                @foreach ($recipe->ingredients as $ingredient)
                    <li>
                        {{ $ingredient->pivot->quantity }}
                        de {{ $ingredient->name }}
                    </li>
                @endforeach


            </ul>
        </div>


        <!-- Comments -->
        <div class="p-4 border-t">
            <h2 class="text-2xl font-bold mb-4">Commentaires</h2>
            @include('comments._index', [
                'comments' => $recipe->comments,
            ])
        </div>
    </section>


@stop
