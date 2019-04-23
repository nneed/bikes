        <div class="container">
            <div class="card text-center">
                <div class="card-header">
                    {{$bike->Make}}
                </div>
                <div class="card-body">
                    @foreach($bike->getAttributes() as $key => $attributes)
                        <div class="card-title"><span class="font-weight-bold">{{$key}}</span> : {{$attributes}}</div>
                    @endforeach
                </div>
            </div>
        </div>



