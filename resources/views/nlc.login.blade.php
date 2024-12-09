<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section class="container">
        <form action="/login" method="POST">
            @csrf
            <div class="card">
                <div class="card_header">
                    <h1>Login</h1>
                </div>
            </div>
            <div class="card_body">
                <div class="mb-3">
                    <label for="NHT_email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="abc@gmai.com">
                  </div>
                  <div class="mb-3">
                    <label for="NHT_password" class="form-label"> password </label>
                    <input type="password" class="form-control" id="password" placeholder="1234566">
                  </div>
            </div>
            <div class="card_footer">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </section>
</body>
</html>