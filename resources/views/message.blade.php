<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesajlar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
@include('menu');
<section class="vh-100 bg-image"
         style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">

    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="panel" id="chat">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="chats">
                                <div class="chat">
                                    <div class="chat-avatar">
                                        <a class="avatar avatar-online" data-toggle="tooltip" href="#"
                                           data-placement="right" title="" data-original-title="June Lane">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png">
                                            <i></i>
                                        </a>
                                    </div>
                                    <div class="chat-body">

                                        <div class="chat-content">
                                            <p>
                                            </p>
                                            <time class="chat-time" datetime="2015-07-01T11:37">11:37:08 am</time>
                                            Okundu
                                        </div>

                                    </div>
                                </div>
                                <div class="chat chat-left">
                                    <div class="chat-avatar">
                                        <a class="avatar avatar-online" data-toggle="tooltip" href="#"
                                           data-placement="left" title="" data-original-title="Edward Fletcher">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="...">
                                            <i></i>
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo
                                                consequuntur quisquam quasi quaerat, ducimus excepturi quis rem animi
                                                minima unde repellendus est magni nam temporibus harum. Illo ipsam iure
                                                minus? </p>
                                            <time class="chat-time" datetime="2015-07-01T11:39">11:39:57 am</time>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat">
                                    <div class="chat-avatar">
                                        <a class="avatar avatar-online" data-toggle="tooltip" href="#"
                                           data-placement="right" title="" data-original-title="June Lane">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="...">
                                            <i></i>
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>
                                                test mesaj test mesaj test mesaj
                                            </p>
                                            <time class="chat-time" datetime="2015-07-01T11:40">11:40:10 am</time>
                                            Okunmadı
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <form action="{{route('send')}}" method="POST">
                                @csrf
                                <div class="input-group">
                                    <input type="text" name="mesaj" class="form-control" placeholder="Birşeyler Yaz">
                                    <input type="text" name="gonderici" value="{{Auth::user()->id}}" class="form-control" style="display: none">
                                    <input type="text" name="alici" value="17" class="form-control" style="display: none">
                                    <span class="input-group-btn">
                                     <button class="btn btn-primary" type="submit">Gönder</button>
                                  </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
</body>
</html>


<style>
    body {
        background: #ddd;
        margin-top: 10px;
    }

    .chat-box {
        height: 100%;
        width: 100%;
        background-color: #fff;
        overflow: hidden
    }

    .chats {
        padding: 30px 15px
    }

    .chat-avatar {
        float: right
    }

    .chat-avatar .avatar {
        width: 30px;
        -webkit-box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.3);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.3);
    }

    .chat-body {
        display: block;
        margin: 10px 30px 0 0;
        overflow: hidden
    }

    .chat-body:first-child {
        margin-top: 0
    }

    .chat-content {
        position: relative;
        display: block;
        float: right;
        padding: 8px 15px;
        margin: 0 20px 10px 0;
        clear: both;
        color: #fff;
        background-color: #62a8ea;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.37);
        box-shadow: 0 1px 4px 0 rgba(0, 0, 0, 0.37);
    }

    .chat-content:before {
        position: absolute;
        top: 10px;
        right: -10px;
        width: 0;
        height: 0;
        content: '';
        border: 5px solid transparent;
        border-left-color: #62a8ea
    }

    .chat-content > p:last-child {
        margin-bottom: 0
    }

    .chat-content + .chat-content:before {
        border-color: transparent
    }

    .chat-time {
        display: block;
        margin-top: 8px;
        color: rgba(255, 255, 255, .6)
    }

    .chat-left .chat-avatar {
        float: left
    }

    .chat-left .chat-body {
        margin-right: 0;
        margin-left: 30px
    }

    .chat-left .chat-content {
        float: left;
        margin: 0 0 10px 20px;
        color: #76838f;
        background-color: #dfe9ef
    }

    .chat-left .chat-content:before {
        right: auto;
        left: -10px;
        border-right-color: #dfe9ef;
        border-left-color: transparent
    }

    .chat-left .chat-content + .chat-content:before {
        border-color: transparent
    }

    .chat-left .chat-time {
        color: #a3afb7
    }

    .panel-footer {
        padding: 0 30px 15px;
        background-color: transparent;
        border-top: 1px solid transparent;
        border-bottom-right-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    .avatar img {
        width: 100%;
        max-width: 100%;
        height: auto;
        border: 0 none;
        border-radius: 1000px;
    }

    .chat-avatar .avatar {
        width: 30px;
    }

    .avatar {
        position: relative;
        display: inline-block;
        width: 40px;
        white-space: nowrap;
        border-radius: 1000px;
        vertical-align: bottom;
    }
</style>
