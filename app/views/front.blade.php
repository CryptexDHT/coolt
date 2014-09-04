@extends('layout')


@section('polymers')
    <style>
        @import url(http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic|Lobster+Two:400,400italic,700,700italic&subset=latin,cyrillic);
        
        /*

        font-family: 'Noto Sans', sans-serif;
        font-family: 'Lobster Two', cursive;

        */


        body {
            font-family: 'Noto Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            margin: 0;
            background: #f1f1f1;
            padding: 0;
        }




     

        h1 {
            font-family: 'Lobster Two', cursive;
            color: #FFF;
            font-size: 128pt;
            margin: 0;
            padding: 0;
            text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.3);
            line-height: 100pt;
            margin-top: 43px;
        }


        h2 {
            padding: 0;
            margin: 0;
            text-align: center;
            color: #FFF;
            
            text-transform: uppercase;
            font-size: 14pt;
            text-shadow: 2px 2px 0px rgba(0, 0, 0, 0.3);
            
        }


        .green {
          position: absolute;
          top: 0;
          right: 0;
          left: 0;
          height: 350px;
          background: #70c26f;
        }


        .green h1 ,
        .green h2  {
            text-align: center;
            color: #FFF;
        }

    </style>
    <link rel="import" href="/website/front-page.html">    
@stop




@section('content')
    <div class="green">
        
        <h1>CoolT!</h1>
        <h2>Communication without limits.</h2>


    </div>
    <front-page></front-page>
@stop