<section>
    <h2 class="text-2xl font-bold mb-4">Recettes</h2>
    @include('recipes._index', [
        'recipes' => $recipes,
    ])
</section>
