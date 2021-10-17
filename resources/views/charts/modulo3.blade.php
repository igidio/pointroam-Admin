<script type="text/javascript" src="https://www.amcharts.com/lib/3/pie.js"></script>

<div id="chartdiv3" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div> 

<script type="text/javascript">
    AmCharts.makeChart("chartdiv3",
        {
            "type": "pie",
            "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
            "titleField": "category",
            "valueField": "column-1",
            "allLabels": [],
            "balloon": {},
            "legend": {
                "enabled": true,
                "align": "center",
                "markerType": "circle"
            },
            "titles": [],
            "dataProvider": [
                {
                    "category": "category 1",
                    "column-1": 8
                },
                {
                    "category": "category 2",
                    "column-1": 6
                },
                {
                    "category": "category 3",
                    "column-1": 2
                }
            ]
        }
    );
</script>