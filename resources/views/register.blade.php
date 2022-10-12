<x-layout>
    <div class="container">
       <div class="row">
                <form method="POST" action={{url('/register')}} class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="inputName" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="col-md-6">
                        <label for="lastname" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lastname" id="lastname">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
       </div>
    </div>
    @if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
</x-layout>
