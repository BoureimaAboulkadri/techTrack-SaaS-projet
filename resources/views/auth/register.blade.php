<form class="user" action="{{ route('register') }}" method="POST">
    @extends('layouts.app')
    @csrf
    <div class="row mb-3">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="First Name" name="first_name" required>
        </div>
        <div class="col-sm-6">
            <input class="form-control form-control-user" type="text" id="exampleLastName" placeholder="Last Name" name="last_name" required>
        </div>
    </div>
    <!-- Continuez à adapter les champs restants... -->
    <div class="mb-3">
        <input class="form-control form-control-user" type="email" id="exampleInputEmail" placeholder="Email Address" name="email" required>

    </div>
    <div class="mb-3">
        <input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password" required>
    </div>
    <button class="btn btn-primary d-block btn-user w-100" type="submit">Register Account</button>
</form>
