<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
    body, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:"微软雅黑";}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak={{$app_key}}"></script>
    <title>fuck黑中介</title>
</head>

<body>
    <div id="allmap" data-map="{{ json_encode($agents)}}"></div>
</body>

<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("allmap");
    // 初始化地图,设置中心点坐标和地图级别
    map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
    //添加地图类型控件
    map.addControl(new BMap.MapTypeControl());
    // 设置地图显示的城市 此项是必须设置的
    map.setCurrentCity("北京");
    // 开启鼠标滚轮缩放
    map.enableScrollWheelZoom(true);
    // 编写自定义函数,创建标注
    function addMarker(point, title){
        var marker = new BMap.Marker(point);
        map.addOverlay(marker);
        var opts = {
            width : 200,
            height: 100,
            title : title
        }
        var infoWindow = new BMap.InfoWindow("fuck中介", opts);
        marker.addEventListener("click", function(){
            map.openInfoWindow(infoWindow, point);
        });
    }

    var $map = $("#allmap");
    var data = $map.data("map");
    $.each(data, function(key, value) {
        var arr = value.pos.split(",");
        var lng = arr[0];
        var lat = arr[1];
        var point = new BMap.Point(lng, lat);
        addMarker(point, value.name + " " + value.mobile);
        console.log(value);
    });
</script>

</html>
