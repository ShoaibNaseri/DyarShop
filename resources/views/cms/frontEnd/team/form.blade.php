@csrf
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="text" value="{{old('name') ?? $team->name}}" name="name" class="form-control" id="inputEmail4" required>
</div>
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Position</label>
    <input type="text" value="{{old('position') ?? $team->position}}" name="position" class="form-control" id="inputEmail4" required>
</div>
<div class="col-12">
    <label for="inputAddress2" class="form-label">Image</label>
    <input type="file" class="form-control" id="inputAddress2" name="image" value="{{old('image') ?? $team->image}}" placeholder="Apartment, studio, or floor">
</div>
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">email</label>
    <input type="email" value="{{old('email') ?? $team->email}}" name="email" class="form-control" id="inputEmail4" required>
</div>
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Linkedin</label>
    <input type="text" value="{{old('linkedin') ?? $team->linkedin}}" name="linkedin" class="form-control" id="inputEmail4" required>
</div>