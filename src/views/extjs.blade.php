<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/ext-theme-classic/ext-theme-classic-all.css')}}">
    <script src="{{asset('js/ext-all.js')}}"></script>
    <script src="{{asset('js/ext-lang-zh_CN.js')}}"></script>
    {{--<link rel="stylesheet" href="../../packages/hien/extjs/public/js/ext-all.js">--}}
    <title>Document</title>
    <script>
        Ext.onReady(function () {
            var accordion = Ext.create("Ext.panel.Panel", {
                title: "west",
                layout: "accordion",  //设置为手风琴布局
                layoutConfig: {
                    animate: true
                },
                width: 250,
                minWidth: 90,
                region: "west", //设置方位
                split: true,
                collapsible: true,
                items: [
                    { title: "嵌套面板一", html: "嵌套面板一", iconCls: "save" },
                    { title: "嵌套面板二", html: "嵌套面板二", iconCls: "search" },
                    { title: "嵌套面板三", html: "嵌套面板三", iconCls: "back" },
                    { title: "嵌套面板四", html: "嵌套面板四", iconCls: "12" }
                ]
            });

            new Ext.Viewport({
                title: "Viewport",
                layout: "border", //这里是（border）边界布局
                defaults: {
                    bodyStyle: "background-color: #FFFFFF;",
                    frame: true
                },
                items: [
                    accordion, //这里是（accordion）手风琴布局
                    {region: "east", width: 90, title: 'north', collapsible: true },
                    { region: "north", height: 100, title: 'north', collapsible: true },
                    { region: "center", split: true, border: true, collapsible: true, title: 'center' },
                    { region: "south", title: "south", split: true, border: true, collapsible: true, height: 100 }
                ]
            });
        });

    </script>
</head>
<body>
</body>
</html>