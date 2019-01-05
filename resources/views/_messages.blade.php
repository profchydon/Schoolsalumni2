@if(Session::has("message"))
    <div class="alert alert-success text-center">
        {{ Session::get("message") }}
    </div>
@endif @if(Session::has("error"))
    <p id="login-error-message" class="error-message"> {{ Session::get("error") }} </p>
@endif @if(Session::has("info"))
    <div class="alert alert-info text-center">
        {{ Session::get("info") }}
    </div>
@endif @if(Session::has("warning"))
    <div class="alert alert-warning text-center">
        {{ Session::get("warning") }}
    </div>
@endif
