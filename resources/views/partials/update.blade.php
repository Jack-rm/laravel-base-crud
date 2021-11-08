<div class="card-title d-flex justify-content-between">
    <h1>{{ $request->routeIs('comic.edit') ? "Modifica $comic->title" : "Add New Comic" }}</h1>
</div>
<div class="card-body">
    <form action="{{  $request->routeIs('comic.edit') ? route('comic.update', $comic) : route('comic.store') }}" method="POST">
    
    @if($request->routeIs('comic.edit')) 
    
        @method('PATCH')
    
    @endif

    @csrf
        <div class="row">
            <div class="col-4 mb-4">
                <label for="title" class="form-label">Title</label>
                <input class="form-control" type="text" id="title" name="title" placeholder="Title" value="{{ $comic->title }}" required>
                <div class="form-text">New comic title</div>
            </div>

            <div class="col-4 mb-4">
                <label for="thumb" class="form-label">Cover</label>
                <input class="form-control" type="text" id="thumb" name="thumb" placeholder="Cover" value="{{ $comic->thumb }}">
                <div class="form-text">New comic url cover</div>
            </div>

            <div class="col-4 mb-4">
                <label for="series" class="form-label">Series</label>
                <input class="form-control" type="text" id="series" name="series" placeholder="Series" required value="{{ $comic->series }}">
                <div class="form-text">New comic series</div>
            </div>

            <div class="col-4 mb-4">
                <label for="price" class="form-label">Price</label>
                <input class="form-control" type="text" id="price" name="price" placeholder="Price" required value="{{ $comic->price }}">
                <div class="form-text">New comic price</div>
            </div>

            <div class="col-4 mb-4">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input class="form-control" type="text" id="sale_date" name="sale_date" placeholder="Sale Date" value="{{ $comic->sale_date }}" required>
                <div class="form-text">New comic sale date</div>
            </div>
        </div>

        <div class="col-12 mb-4 text-end">
            <button type="reset" class="btn btn-secondary me-3">Delete</button>
            <button type="submit" class="btn btn-danger">{{ $request->routeIs('comic.edit') ? "Edit $comic->title" : "Create" }}</button>
        </div>
    </form>
</div> 