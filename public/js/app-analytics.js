document.addEventListener("DOMContentLoaded", function() {
    if (document.querySelector("#trafficChart")) {
        var optionsTraffic = {
            series: [{ name: 'Organic', data: [31, 40, 28, 51, 42, 109, 100] }, { name: 'Direct', data: [11, 32, 45, 32, 34, 52, 41] }],
            chart: { height: 320, type: 'area', toolbar: { show: false }, fontFamily: 'Inter, sans-serif' },
            colors: ['#3b82f6', '#10b981'],
            fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.4, opacityTo: 0.05, stops: [0, 90, 100] } },
            dataLabels: { enabled: false },
            stroke: { curve: 'smooth', width: 2 },
            xaxis: { type: 'datetime', categories: ["2026-03-01T00:00:00.000Z", "2026-03-02T01:30:00.000Z", "2026-03-03T02:30:00.000Z", "2026-03-04T03:30:00.000Z", "2026-03-05T04:30:00.000Z", "2026-03-06T05:30:00.000Z", "2026-03-07T06:30:00.000Z"] },
            tooltip: { x: { format: 'dd/MM/yy HH:mm' } },
        };
        new ApexCharts(document.querySelector("#trafficChart"), optionsTraffic).render();
    }

    if (document.querySelector("#deviceChart")) {
        var optionsDevice = {
            series: [55, 35, 10],
            labels: ['Desktop', 'Mobile', 'Tablet'],
            chart: { type: 'donut', height: 320, fontFamily: 'Inter, sans-serif' },
            colors: ['#3b82f6', '#f59e0b', '#10b981'],
            plotOptions: { pie: { donut: { size: '70%' } } },
            legend: { position: 'bottom' },
            dataLabels: { enabled: false }
        };
        new ApexCharts(document.querySelector("#deviceChart"), optionsDevice).render();
    }
});
