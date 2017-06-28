

    {{ csrf_field() }}

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" id="email" autofocus value="{{ isUser(Auth::user()) }}">
    </div>

    <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" class="form-control" id="first_name" value="{{ hasProfile('first_name') }}">
    </div>

    <div class="form-group">
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" class="form-control" id="last_name" value="{{ hasProfile('last_name') }}">
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" class="form-control" id="address" value="{{ hasProfile('address') }}">
    </div>

