<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">


    @foreach ($recipes as $recipe)
        <article class="bg-white rounded-lg overflow-hidden shadow-lg relative">
            <img class="w-full h-48 object-cover" src="{{ $recipe->picture }}" alt="{{ $recipe->name }}" />
            <div class="p-4">
                <h3 class="text-xl font-bold mb-2">{{ $recipe->name }}</h3>
                <div class="flex items-center mb-2">
                    <span class="text-yellow-500 mr-1"><i class="fas fa-star"></i></span>
                    <span>{{ count($recipe->ratings) }}</span>
                </div>
                <p class="text-gray-600">
                    {{ Str::limit($recipe->description, 100) }}
                </p>
                <div class="flex items-center mt-4">
                    <span class="text-gray-700 mr-2">Par {{ $recipe->user->name }}</span>
                    <span class="text-gray-500"><i class="fas fa-comment"></i> {{ count($recipe->comments) }}
                        commentaires</span>
                </div>
                <a href="recipe.html"
                    class="inline-block mt-4 bg-red-500 hover:bg-red-800 rounded-full px-4 py-2 text-white">
                    Voir la recette
                </a>
            </div>
        </article>
    @endforeach


</div>
