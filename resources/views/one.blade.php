<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style type="text/css">
body,html { height:100;}
    body{
        justify-content: center;
        align-items: center;
        font-family: 'Ubuntu', sans-serif;
        font-size: 48px;
    }
    </style>


</head>
<body>


<form method = "POST" action="/documents" enctype="multipart/form-data">
@csrf

<input type="file" name="document"></input>

<button type="submit"> Save doc </button>

</form>
<div>
<p> Here we go Man </p>
</div>
<a href ="https://goo.gl/Bhj9PR">View doc</a>

<iframe src="https://drive.google.com/file/d/168mBZZ64a3s58qgzdiqH599UMgr8y8Yl/preview" width="640" height="480"></iframe>

<form method="GET" action="pagesmade@gmail.com" enctype="text/plain">
    <div>Subject</div>
    <input type="text" name="subject" />

    <div>Message</div>
    <textarea name="body"></textarea>

    <br/>
    <input type="submit" value="Send" />
</form>

</body>
</html>
