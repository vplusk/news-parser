<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    
    @foreach ($news as $news_item)
      
      <div class="panel panel-default">
        <div class="panel-heading"><a href="{{ $news_item->article_url }}" target="_blank">{{ $news_item->title }}</a></div>
          <div class="panel-body">
          <p>{{ $news_item->date }} Просмотров {{ $news_item->views }}</p>

          <p>{{ $news_item->tags }}</p>
          </div>
      </div>
        
    @endforeach
  </div>
</body>
</html>