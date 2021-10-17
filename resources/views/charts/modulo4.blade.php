<script type="text/javascript" src="https://www.amcharts.com/lib/3/gauge.js"></script>

<div id="chartdiv4" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>

<script type="text/javascript">
    AmCharts.makeChart("chartdiv4",
        {
            "type": "gauge",
            "arrows": [
                {
                    "id": "GaugeArrow-1"
                }
            ],
            "axes": [
                {
                    "bottomText": "0 km/h",
                    "bottomTextYOffset": -20,
                    "endValue": 220,
                    "id": "GaugeAxis-1",
                    "valueInterval": 10,
                    "bands": [
                        {
                            "color": "#00CC00",
                            "endValue": 90,
                            "id": "GaugeBand-1",
                            "startValue": 0
                        },
                        {
                            "color": "#ffac29",
                            "endValue": 130,
                            "id": "GaugeBand-2",
                            "startValue": 90
                        },
                        {
                            "color": "#ea3838",
                            "endValue": 220,
                            "id": "GaugeBand-3",
                            "innerRadius": "95%",
                            "startValue": 130
                        }
                    ]
                }
            ],
            "allLabels": [],
            "balloon": {},
            "titles": [
                {
                    "id": "Title-1",
                    "size": 15,
                    "text": "Speedometer"
                }
            ]
        }
    );
</script>