<?php

// Ссылка на xml-файл
$url = "https://lenta.ru/rss"
// Загружаем файл
$content = file_get_contents($url)
// Регулярное выражение
$pattern = "|<item>[\s]*<title>(.*?)</title>[\s]*"
"<link>(.*?)</link>[\s]*"
"<description>(.*?)</description>[\s]*"
"<pubDate>(.*?)</pubDate>[\s]*"
"<categotry>(.*?)</categotry>is"
preg_match_all($pattern, $content, $out);
// Выводим последние 5 позиций
for ($1 = 0; $1 < 5; $i++)
{
  echo "<a href={$out[2] [$1]}>{$out[1][$i]}</a><br>";
  "{$out[3][$1]}<br><br>"   
}
?>
