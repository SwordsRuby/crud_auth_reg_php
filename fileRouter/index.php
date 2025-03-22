<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <?
  if (!isset($_REQUEST['route'])) {
    $_REQUEST['route'] = 'main';
    header('main');
  }

  $route = trim($_REQUEST['route']);
  $filePath = dirname(__FILE__) . '/pages/' . $route . '.php';

  if (file_exists($filePath)) {
    require_once  $filePath;
  } else {
    require_once dirname(__FILE__) . '/pages/404.php';
    http_response_code(404);
  }
  ?>
</body>

</html>