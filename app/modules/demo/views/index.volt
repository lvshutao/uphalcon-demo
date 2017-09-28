<!DOCTYPE html>
<html lang="{{ lang }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{ assets.outputCss() }}
    <title><?= isset($title) ? $title.' - ' : '' ?><?= gettext('web.title') ?></title>

</head>
<body>
<div class="header"></div>
<div class="container">
    {{ content() }}
</div>
{{ assets.outputJs() }}
</body>
</html>
