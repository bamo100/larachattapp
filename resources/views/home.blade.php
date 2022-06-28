<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/app.css">
    <title>LaravelChatApp</title>
</head>
<body>
     <div class="container text-center mt-8">
        <h1>Bamo Empire Chat App</h1>
     </div>
     <hr>
     <div class="container m-8 p-5">
         <div class="row">
             <div class="col-xs-6">
                 <div class="card-body">
                     <div class="mb-3" id="messageOutput"></div>
                     <hr>
                     <form action="" id="chatForm">
                          <div class="form-group mb-3">
                              <input type="text" placeholder="Message" id="message" class="form-control">
                          </div>
                          <button type="submit" class="btn btn-success">
                              Send
                          </button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="./js/app.js"></script>