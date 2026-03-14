document.addEventListener("DOMContentLoaded", function() {
    // Growth Chart
    if (document.querySelector("#customerGrowthChart")) {
        var growthOptions = {
            series: [{
                name: 'New Customers',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 70, 75, 80]
            }, {
                name: 'Churned',
                data: [13, 15, 12, 18, 14, 11, 15, 12, 10, 14, 9, 7]
            }],
            chart: {
                type: 'area',
                height: 300,
                fontFamily: 'Inter, sans-serif',
                toolbar: { show: false }
            },
            colors: ['#3b82f6', '#ef4444'],
            dataLabels: { enabled: false },
            stroke: { curve: 'smooth', width: 2 },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            },
            fill: { type: 'gradient', gradient: { opacityFrom: 0.4, opacityTo: 0.05 } }
        };
        new ApexCharts(document.querySelector("#customerGrowthChart"), growthOptions).render();
    }

    // Demographics Donut
    if (document.querySelector("#demographicsChart")) {
        var demoOptions = {
            series: [45, 35, 20],
            chart: { type: 'donut', height: 250, fontFamily: 'Inter, sans-serif' },
            colors: ['#3b82f6', '#10b981', '#f59e0b'],
            labels: ['Enterprise', 'SMB', 'Startup'],
            dataLabels: { enabled: false },
            plotOptions: { pie: { donut: { size: '75%' } } },
            legend: { show: false }
        };
        new ApexCharts(document.querySelector("#demographicsChart"), demoOptions).render();
    }
});
