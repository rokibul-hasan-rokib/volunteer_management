<div class="mb-3">
    <label for="name" class="form-label">Food Name</label>
    <input type="text" class="form-control" id="name" name="name"
        value="{{ old('name') }}">
</div>
<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="text" class="form-control" id="price" name="price"
        value="{{ old('price') }}">
</div>
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
</div>
<div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file" class="form-control" id="image" name="image">
</div>
