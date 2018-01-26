<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Highcharts Example</title>
    <script type="text/javascript" src="/zheng/Public/Admin/js/jquery.js"></script>
    <script src="/zheng/Public/Admin/plugin/charts/js/highcharts.js"></script>
    <style type="text/css">
    $ {
        demo.css
    }
    </style>
    <script type="text/javascript">
    $(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'ȫ���������˿�����'
        },
        subtitle: {
            text: '���ݽ�ֹ 2017-03����Դ: <a href="https://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: '�˿� (����)'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: '�˿�����: <b>{point.y:.1f} ����</b>'
        },
        series: [{
            name: '���˿�',
            data: [
                ['�Ϻ�', 24.25],
                ['������', 23.50],
                ['����', 21.51],
                ['����', 16.78],
                ['����˹', 16.06],
                ['���', 15.20],
                ['��˹̹����', 14.16],
                ['����', 13.51],
                ['����', 13.08],
                ['����', 12.44],
                ['Ī˹��', 12.19],
                ['ʥ����', 12.03],
                ['����', 10.46],
                ['�żӴ�', 10.07],
                ['���϶�', 10.05],
                ['�׶�', 9.99],
                ['�人', 9.78],
                ['��ɳ��', 9.73],
                ['����', 9.27],
                ['ī����', 8.87]
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
    </script>
</head>

<body>

    
    <div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>
</body>

</html>