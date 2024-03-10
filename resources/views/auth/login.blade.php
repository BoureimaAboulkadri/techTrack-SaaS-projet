
<form class="user" action="{{ route('login') }}" method="POST">
  @extends('layouts.app')
    @csrf
    <div class="mb-3">
        <input class="form-control form-control-user" type="email" id="exampleInputEmail" placeholder="Enter Email Address..." name="email">
    </div>
    <div class="mb-3">
        <input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password">
    </div>
    <div class="mb-3">
        <div class="custom-control custom-checkbox small">
            <div class="form-check">
                <input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1" name="remember">
                <label class="form-check-label custom-control-label" for="formCheck-1">Se souvenir de moi</label>
            </div>
        </div>
    </div>
    <button class="btn btn-primary d-block btn-user w-100" type="submit">Connexion</button>
    <!-- Le reste du formulaire -->
    <script src="/public/bootstrap/js/bootstrap.bundle.min.js"></script>
</form>


