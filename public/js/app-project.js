document.addEventListener("DOMContentLoaded", function() {
    if (document.querySelector("#tasksChart")) {
        var options = {
            series: [44, 55, 13],
            chart: { type: 'polarArea', height: 280, fontFamily: 'Inter, sans-serif' },
            labels: ['High Priority', 'Medium Priority', 'Low Priority'],
            colors: ['#ef4444', '#f59e0b', '#3b82f6'],
            stroke: { colors: ['#fff'] },
            fill: { opacity: 0.8 },
            legend: { position: 'bottom' }
        };
        new ApexCharts(document.querySelector("#tasksChart"), options).render();
    }
});
