document.addEventListener("DOMContentLoaded", function() {
    if (document.querySelector("#revenueChart")) {
        var options = {
            series: [{
                name: 'Revenue',
                data: [31000, 40000, 28000, 51000, 42000, 109000, 100000, 120000]
            }],
            chart: {
                height: 300,
                type: 'bar',
                fontFamily: 'Inter, sans-serif',
                toolbar: { show: false }
            },
            plotOptions: {
                bar: {
                    borderRadius: 4,
                    columnWidth: '40%',
                }
            },
            colors: ['#3b82f6'],
            dataLabels: { enabled: false },
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
            },
            yaxis: {
                labels: {
                    formatter: function (val) {
                        return "$" + val / 1000 + "k"
                    }
                }
            }
        };
        new ApexCharts(document.querySelector("#revenueChart"), options).render();
    }
});
