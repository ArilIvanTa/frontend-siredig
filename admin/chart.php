<!--
	THIS EXAMPLE WAS DOWNLOADED FROM https://echarts.apache.org/examples/en/editor.html?c=pie-roseType-simple&lang=ts
-->
<!DOCTYPE html>
<html lang="en" style="height: 100%">

<head>
    <meta charset="utf-8">
</head>

<body style="height: 100%; margin: 0">
    <canvas style="height: 100%;">
        <div id="container" style="height: 100%"></div>
    </canvas>

    <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/echarts.min.js"></script>
    <!-- Uncomment this line if you want to dataTool extension
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/extension/dataTool.min.js"></script>
  -->
    <!-- Uncomment this line if you want to use gl extension
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts-gl@2/dist/echarts-gl.min.js"></script>
  -->
    <!-- Uncomment this line if you want to echarts-stat extension
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts-stat@latest/dist/ecStat.min.js"></script>
  -->
    <!-- Uncomment this line if you want to use map
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@4.9.0/map/js/china.js"></script>
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@4.9.0/map/js/world.js"></script>
  -->
    <!-- Uncomment these two lines if you want to use bmap extension
  <script type="text/javascript" src="https://api.map.baidu.com/api?v=3.0&ak=YOUR_API_KEY"></script>
  <script type="text/javascript" src="https://fastly.jsdelivr.net/npm/echarts@5.4.1/dist/extension/bmap.min.js"></script>
  -->

    <script type="text/javascript">
        var dom = document.getElementById('container');
        var myChart = echarts.init(dom, null, {
            renderer: 'canvas',
            useDirtyRect: false
        });
        var app = {};

        var option;

        option = {
            legend: {
                top: 'bottom'
            },
            toolbox: {
                show: true,
                feature: {
                    mark: {
                        show: true
                    },
                    dataView: {
                        show: true,
                        readOnly: false
                    },
                    restore: {
                        show: true
                    },
                    saveAsImage: {
                        show: true
                    }
                }
            },
            series: [{
                name: 'Nightingale Chart',
                type: 'pie',
                radius: [50, 250],
                center: ['50%', '50%'],
                roseType: 'area',
                itemStyle: {
                    borderRadius: 8
                },
                data: [{
                        value: 40,
                        name: 'rose 1'
                    },
                    {
                        value: 38,
                        name: 'rose 2'
                    },
                    {
                        value: 32,
                        name: 'rose 3'
                    },
                    {
                        value: 30,
                        name: 'rose 4'
                    },
                    {
                        value: 28,
                        name: 'rose 5'
                    },
                    {
                        value: 26,
                        name: 'rose 6'
                    },
                    {
                        value: 22,
                        name: 'rose 7'
                    },
                    {
                        value: 18,
                        name: 'rose 8'
                    }
                ]
            }]
        };



        if (option && typeof option === 'object') {
            myChart.setOption(option);
        }

        window.addEventListener('resize', myChart.resize);
    </script>
</body>

</html>