document.addEventListener('DOMContentLoaded', function() {
    // Monthly Earnings Line Chart
    if (document.querySelector("#earningsChart")) {
        var earningsOptions = {
            series: [{
                name: "Earnings",
                data: [31, 40, 28, 51, 42, 109, 100]
            }],
            chart: {
                height: 150,
                type: 'line',
                sparkline: { enabled: true },
                animations: { enabled: true }
            },
            stroke: { curve: 'smooth', width: 3 },
            colors: ['#3b82f6'],
            tooltip: { enabled: false }
        };
        var earningsChart = new ApexCharts(document.querySelector("#earningsChart"), earningsOptions);
        earningsChart.render();
    }

    // Visitor Value Bar Chart
    if (document.querySelector("#visitorChart")) {
        var visitorOptions = {
            series: [{
                name: "Value",
                data: [44, 55, 41, 67, 22, 43, 21, 33, 45, 31, 87, 65]
            }],
            chart: {
                height: 150,
                type: 'bar',
                sparkline: { enabled: true }
            },
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    columnWidth: '50%',
                }
            },
            colors: ['#3b82f6'],
            tooltip: { enabled: false }
        };
        var visitorChart = new ApexCharts(document.querySelector("#visitorChart"), visitorOptions);
        visitorChart.render();
    }

    // Market Share Doughnut Chart
    if (document.querySelector("#marketShareChart")) {
        var marketOptions = {
            series: [29.7, 31.9, 23, 14.4],
            chart: {
                type: 'donut',
                height: 180,
            },
            labels: ['Alligator', 'CheckMark', 'Stripes', 'Head & Mead'],
            colors: ['#3b82f6', '#ef4444', '#f97316', '#10b981'],
            dataLabels: { enabled: false },
            legend: { show: false },
            plotOptions: {
                pie: {
                    donut: {
                        size: '75%',
                        labels: {
                            show: true,
                            total: {
                                show: true,
                                label: '$6,322.32',
                                fontSize: '18px',
                                fontWeight: 700,
                                formatter: function() { return 'Total' }
                            }
                        }
                    }
                }
            }
        };
        var marketChart = new ApexCharts(document.querySelector("#marketShareChart"), marketOptions);
        marketChart.render();
    }

    // Clients Bar Chart
    if (document.querySelector("#clientsBarChart")) {
        var clientsOptions = {
            series: [{
                name: 'Clients',
                data: [44, 41, 38, 27, 19, 13, 11, 7]
            }],
            chart: {
                type: 'bar',
                height: 300,
                toolbar: { show: false }
            },
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    distributed: true,
                }
            },
            colors: ['#3b82f6', '#3b82f6', '#3b82f6', '#3b82f6', '#3b82f6', '#3b82f6', '#3b82f6', '#3b82f6'],
            xaxis: {
                categories: ['Jan', 'Greenland', 'India', 'Egypt', 'Mexico', 'Angola', 'Colombia', 'Finland'],
                labels: { style: { fontSize: '10px' } }
            },
            dataLabels: { enabled: false },
            legend: { show: false }
        };
        var clientsChart = new ApexCharts(document.querySelector("#clientsBarChart"), clientsOptions);
        clientsChart.render();
    }
});
