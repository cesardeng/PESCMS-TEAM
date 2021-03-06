<div class="am-panel am-panel-default admin-sidebar-panel">
    <div class="am-panel-hd">时效图</div>
    <div class="am-panel-bd am-padding-0">
        <div id="container" style="margin: 0 auto"></div>
    </div>
</div>
<script src="<?= DOCUMENT_ROOT; ?>/Theme/assets/js/highcharts.js"></script>
<script type="text/javascript">
    $(function () {
        var data = eval("(" + '<?=json_encode($aging['list'])?>' + ")");
        var xCategories = ['<?=implode("', '", $aging['date'])?>']
        $('#container').highcharts({
            chart: {
                height: 300,
                type: 'areaspline',
                renderTo: 'container',
            },
            title: {
                text: null
            },
            xAxis: {
                categories: ['<?=implode("', '", $aging['date'])?>'],
                minPadding: 0,
                maxPadding: 0,
            },
            yAxis: {
                labels: {
                    enabled: false
                },
                title: {
                    text: null
                },
                gridLineWidth: 0
            },
            plotOptions: {
                series: {
                    pointPlacement: "on"
                },
                areaspline: {
                    fillOpacity: 0.7
                }
            },
            series: data
        });
    });
</script>