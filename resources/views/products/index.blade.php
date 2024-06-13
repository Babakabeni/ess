<x-app-layout>
    <x-slot name="header">
        Liste des produits
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- component -->
                <div tabindex="0" class="focus:outline-none">
<!-- Remove py-8 -->
<div class="mx-auto container py-8">
    <div class="container mt-4">
        <div class="row">
            @foreach ($products->chunk(3) as $productChunk)
                @foreach ($productChunk as $product)
                    <div class="col-md-4">
                        @include('components/product', ['product' => $product])
                        <div>
                            <add-to-cart></add-to-cart>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
        </div>
    </div>
</div>
<!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
</div>
            </div>
        </div>
    </div>

</x-app-layout>
