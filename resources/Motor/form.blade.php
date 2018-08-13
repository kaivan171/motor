
{!! csrf_field()!!}

<div class="form-group">
    <label for="street">Street</label>
    <input type="text" class="form-control" name="street" id="street" value="{{ old('street') }}" required>
</div>
<div class="form-group">
    <label for="city">City</label>
    <input type="text" class="form-control" name="city" id="city" value="{{ old('city') }}"required>
</div>

<div class="form-group">
    <label for="zip">Zip</label>
    <input type="text" class="form-control" name="zip" id="zip" value="{{ old('zip') }}"required>
</div>



<div class="form-group">
    <label for="state">State</label>
    <input type="text" class="form-control" name="state" id="state" value="{{ old('state') }}"required>
</div>

<hr>

<div class="form-group">
    <label for="price">Price</label>
    <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}"required>
</div>


<div class="form-group">
    <label for="description">Home Description</label>
    <textarea name="description" id="description" rows="10" class="form-control" required>{{ old('description') }}</textarea>
</div>


<div class="form-group">
    <button type="submit" class="btn btn-primary">Register</button>
</div>