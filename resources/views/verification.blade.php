<div class="container">
        <h5>IPT Security System</h5>
        <p>
        Hi {{$user->name}}!,

        To verify your account click the link below
        </p>
        <a href="{{url('/verification/' . $user->id . "/" . $user->remember_token)}}">Click here</a>
</div>