document.addEventListener("DOMContentLoaded", function() {
    if (document.querySelector("#sourcesChart")) {
        var options = {
            series: [44, 55, 13, 33],
            chart: { type: 'donut', height: 280, fontFamily: 'Inter, sans-serif' },
            colors: ['#3b82f6', '#10b981', '#f59e0b', '#8b5cf6'],
            labels: ['Organic Search', 'Referral', 'Social Media', 'Email Campaign'],
            plotOptions: { pie: { donut: { size: '75%' } } },
            dataLabels: { enabled: false },
            legend: { position: 'bottom' }
        };
        new ApexCharts(document.querySelector("#sourcesChart"), options).render();
    }
});
