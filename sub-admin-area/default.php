<!DOCTYPE html>
<html lang="en">

<head>
    <title>Default page</title>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta content="Default page" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', 'Helvetica', sans-serif;
            color: #000;
            padding: 0;
            margin: 0;
            line-height: 1.428;
        }
        
        #pathName {
            margin: 20px 10px;
            color: grey;
            font-weight: 300;
            font-size:18px;
            font-style: italic;
        }
        
    </style>
</head>

<body>
 
<div class="empty-account-page" align="center">
    <div class="container">
        <div class="row congratz">
            <h1>Coming SOON</h1><em></em>
            <h2 id="pathName"><em></em></h2>
        </div>
        
    </div>
</div>
<script>
    var pathName = window.location.hostname;
    var account = document.getElementById("pathName");
    var accountText = document.getElementById("website");
    account.innerHTML = pathName;
    accountText.innerHTML = pathName;
</script>
</body>

</html>