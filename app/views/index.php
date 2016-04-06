<div class="row">
    <div class="col-xs-12 col-sm-10 col-md-6 margin-bottom-50">
        <h1>Login:</h1>
        <form role="form" action="/home/login" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input id="username-input" class="form-control" type="text" name="username" placeholder="Enter your username" />
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input id="password-input" class="form-control" type="password" name="password" placeholder="Enter your password" />
            </div>
            <button id="login-btn" type="submit" class="btn btn-info">Login</button>
        </form>
    </div>
</div>