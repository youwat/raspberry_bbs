<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>BBS</title>

    <link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/bbs.css">
  </head>
  <body>
    <div class="header_parts" align="center">
        <div style="height:30px;" class="bg-success"> </div>
        <div style="height:50px;" class="bg-success">
            <div class="bg-success"><?php echo $header->title; ?></div>
        </div>
        <div style="height:30px;" class="bg-success"> </div>
    </div>
    <br />
    <div class="body_parts">
        <div class="col-lg-2 col-md-2 col-sd-2"> </div>
        <div class="col-lg-8 col-md-8 col-sd-8" align="center">
            <div>
                <textarea class="vote" id="id_vote" name="vote_text"></textarea>
                <button type="button" class="btn btn-success" id="id_vote_button"> 投稿 </button>
            </div>
            <hr>
            <div>
                <div class="vote_item" id="vote_item1" align="left">
                    <div class="message">
                        <p>messge</p>
                    </div>
                    <div class="vote_info">
                        <p class="user_name col-lg-10" style="float:left">ユーザ名</p>
                        <p class="vote_time col-lg-2" >2015/8/14</p>
                    </div>
                </div>
                <div class="vote_item" id="vote_item2" align="left">
                    <p>vote stream</p>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sd-2"> </div>
    </div>
    <div class="footer_parts">
        <div class="col-lg-2 col-md-2 col-sd-2"> </div>
        <div class="col-lg-8 col-md-8 col-sd-8" align="center">
        <div class="col-lg-2 col-md-2 col-sd-2"> </div>
    </div>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/js/bbs.js"></script>
  </body>
</html>
