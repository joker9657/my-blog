<html>
<head>
    <title>康泰家居</title>
</head>
<body>
{{--<span class="desc">使用微信内置地图查看位置接口</span>--}}
{{--<button class="btn btn_primary" id="openLocation">openLocation</button>--}}
</body>
{{--<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>--}}
<script src="https://res.wx.qq.com/open/js/jweixin-1.4.0.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    var config = <?php echo $config; ?>;

    var latitude;
    var longitude;
    wx.config(config);

    wx.ready(function () {
        // wx.getLocation({
        //     type: 'wgs84',
        //     success: function (res) {
        //         latitude = res.latitude;
        //         longitude = res.longitude;
        //         console.log(latitude);
        //     }
        // })
        wx.openLocation({
            latitude: 23.153631, // 纬度，浮点数，范围为90 ~ -90
            longitude: 114.417440, // 经度，浮点数，范围为180 ~ -180。
            name: '康泰家居广场', // 位置名
            address: '广东省惠州市惠城区站前一路7-1号', // 地址详情说明
            scale: 16, // 地图缩放级别,整形值,范围从1~28。默认为最大
            infoUrl: '' // 在查看位置界面底部显示的超链接,可点击跳转
        });
    });
</script>
</html>
