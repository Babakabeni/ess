<div class="card mb-4">
    <img src="{{$product->image}}" alt="">
    <div class="card-body">
        <div class="row">
            <div class="col d-flex justify-content-between">
                <div class="item-1">
                    <h5 class="card-title">
                        {{$product->name}}
                    </h5>
                </div>
                <div class="item-2">
                    <div class="text-black">
                        {{$product->price}}
                    </div>
                </div>
            </div>
        </div>
        <p class="card-text">
            {{$product->description}}
        </p>
        <add-ex></add-ex>
    </div>
</div>
