<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
<script>
    wx.config({{ $wechat_config }});
    wx.ready(function () {
        wx.openLocation({
            latitude: 23.159337, // 纬度，浮点数，范围为90 ~ -90
            longitude: 114.423838, // 经度，浮点数，范围为180 ~ -180。
            name: '惠州市康泰家居', // 位置名
            address: '惠州市惠州大道小金口段火车北站旁', // 地址详情说明
            scale: 1, // 地图缩放级别,整形值,范围从1~28。默认为最大
            infoUrl: '' // 在查看位置界面底部显示的超链接,可点击跳转
        });


    })
</script>