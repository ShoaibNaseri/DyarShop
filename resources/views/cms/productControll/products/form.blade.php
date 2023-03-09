@csrf
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" value="{{old('name') ?? $product->name}}" name="name" class="form-control" id="inputEmail4" required>
</div>

<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Description</label>
    <textarea type="text" name="description" class="form-control" id="inputEmail4" required>{{old('description') ?? $product->description}} </textarea>
</div>
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Price</label>
    <input type="text" value="{{old('price') ?? $product->price}}" name="price" class="form-control" id="inputEmail4" required>
</div>
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Product Link</label>
    <input type="text" value="{{old('link') ?? $product->link}}" name="link" class="form-control" id="inputEmail4" required>
</div>
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Select Category</label>
    <select class="js-states form-control" name="category_id" tabindex="-1">
        <optgroup label="Select Country">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>

            @endforeach
        </optgroup>



    </select>
</div>
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Product Image</label>
    <input type="file" name="image" class="form-control" id="inputEmail4">
</div>