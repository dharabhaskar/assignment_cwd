<?php

function fetch_all_news($category)
{
    //$myfile = fopen("include/news.json", "r") or die("Unable to open file!");
    //$news_json = fread($myfile, filesize("include/news.json"));

    //$all_news = json_decode($news_json);

    //echo($all_news->category);
    //echo(count($all_news->data));
   // return $all_news;

    //fclose($myfile);


    $curl=curl_init();

//$category="world";
$url="https://inshortsapi.vercel.app/news?category=$category";
curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);

$result=curl_exec($curl);
$result=json_decode($result);
return $result;
}
//var_dump(fetch_all_news());