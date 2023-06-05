<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duyuru</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
@include('menu');
<div class="container pb50">
    <div class="row">
        <div class="col-md-9 mb40">
            <article>
                <div class="post-content">

                    <h3>{{$announcements->title}}</h3>
                    <ul class="post-meta list-inline">
                        <li class="list-inline-item">
                            <i class="fa fa-user-circle-o"></i>admin
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-calendar-o"></i> {{$announcements->created_at}}
                        </li>
                    </ul>
                    <p>{{$announcements->content}} </p>

                    <hr class="mb40">
                    <h4 class="mb40 text-uppercase font500 mb-3">Yorumlar</h4>
                    <div class="media mb40">
                        <div class="media-body">
                            <h5 class="mt-0 font400 clearfix">
                                John Doe</h5> Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum
                            in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                            Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                    <hr class="mb40">
                    <div class="media mb40">
                        <div class="media-body">
                            <h5 class="mt-0 font400 clearfix">
                                John Doe</h5> Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum
                            in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                            Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                    <hr class="mb40">
                    <div class="media mb40">
                        <div class="media-body">
                            <h5 class="mt-0 font400 clearfix">
                                John Doe</h5> Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum
                            in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                            Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                    <hr class="mb40">
                    <h4 class="mb40 text-uppercase font500">Yorum Yaz</h4>
                    <form role="form">
                        <div class="form-group">
                            <label>İsim</label>
                            <input type="text" class="form-control" placeholder="İsim giriniz">
                        </div>
                        <div class="form-group">
                            <label>Yorum</label>
                            <textarea class="form-control" rows="5" placeholder="Yorum"></textarea>
                        </div>
                        <div class="clearfix float-right mt-3 mb-3">
                            <button type="button" class="btn btn-primary btn-lg">Yorum Yap</button>
                        </div>
                    </form>
                </div>
            </article>
            <!-- post article-->

        </div>
    </div>
</div>

</body>
</html>
