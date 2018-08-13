<html>
<head>
    <title>motor</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.css">
</head>
<body>
<form action="{{ route('motors.store') }}" method="POST" enctype="multipart/form-data" role="form">


    {!! csrf_field()!!}

    <div class="form-group">
        <label for="model">Model</label>
        <input type="text" class="form-control" name="model" id="street" value="{{ old('model') }}" required>
    </div>
    <div class="form-group">
        <label for="Price">Price</label>
        <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}"required>
    </div>

    <div class="form-group">
        <label for="color">Color</label>
        <input type="text" class="form-control" name="color" id="color" value="{{ old('color') }}"required>
    </div>



    <div class="form-group">
        <label for="weight">Weight</label>
        <input type="text" class="form-control" name="weight" id="weight" value="{{ old('weight') }}"required>
    </div>

    <hr>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>
</body>
</html>