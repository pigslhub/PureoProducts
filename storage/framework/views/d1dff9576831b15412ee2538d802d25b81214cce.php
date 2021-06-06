<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('breadcrumb-title', 'Dashboard'); ?>

<?php $__env->startSection('breadcrumb-item'); ?>
    <li class="breadcrumb-item">Starter Kit</li>
    <li class="breadcrumb-item active">Dashboard</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>All Order Statistics</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="chart-overflow" id="bar-chart1"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Monthly Order Statistics</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="chart-overflow" id="bar-chart2"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Weekly Order Statistics</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="chart-overflow" id="bar-chart3"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>New User's Statistics</h5>
                    </div>
                    <div class="card-body chart-block">
                        <div class="chart-overflow" id="pie-chart2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/js/chart/google/google-chart-loader.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/chart/google/google-chart.js')); ?>"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        /// basic ajax body
        $.ajax({
            dataType:"json",
            url:"<?php echo e(route('orders.loadAllOrdersForChart')); ?>",
            type:"POST",
            success:function(data)
            {
                console.log(data);
                loadAllOrdersChart(data.allongoing, data.allcomplete, data.allready, data.allcancel);
            },
            error:function(err){
                console.log(err);
            }
        });

        $.ajax({
            dataType:"json",
            url:"<?php echo e(route('orders.loadMonthlyOrdersForChart')); ?>",
            type:"POST",
            success:function(data)
            {
                console.log(data);
                loadMonthlyOrdersChart(data.monthlyongoing, data.monthlycomplete, data.monthlyready, data.monthlycancel);
            },
            error:function(err){
                console.log(err);
            }
        });

        $.ajax({
            dataType:"json",
            url:"<?php echo e(route('orders.loadWeeklyOrdersForChart')); ?>",
            type:"POST",
            success:function(data)
            {
                console.log(data);
                loadWeeklyOrdersChart(data.weeklyongoing, data.weeklycomplete, data.weeklyready, data.weeklycancel);
            },
            error:function(err){
                console.log(err);
            }
        });

        $.ajax({
            dataType:"json",
            url:"<?php echo e(route('admin.loadStats')); ?>",
            type:"POST",
            success:function(data)
            {
                loadStatsChart(data.shops, data.customers, data.drivers);
            },
            error:function(err){
                console.log(err);
            }
        });
        // basic ajax body end

        function loadAllOrdersChart(allongoing, allcomplete, allready, allcancel,)
        {
            google.charts.load('current', {packages: ['corechart', 'bar']});
            google.charts.load('current', {'packages':['line']});
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawCharts);

            function drawCharts() {
                if ($("#bar-chart1").length > 0) {
                    var data = google.visualization.arrayToDataTable([
                        ["Element", "Density", { role: "style" } ],
                        ["Cancel", allcancel, "#FF5370"],
                        ["Complete", allcomplete, "#1ea6ec"],
                        ["Ready", allready, "#22af47"],
                        ["Ongoing", allongoing, "#007bff"]
                    ]);
                    var view = new google.visualization.DataView(data);
                    view.setColumns([0, 1,
                        { calc: "stringify",
                            sourceColumn: 1,
                            type: "string",
                            role: "annotation"
                        },
                        2]);
                    var options = {
                        // title: "Density of Precious Metals, in g/cm^3",
                        title: "Orders",
                        width:'200%',
                        height: 350,
                        bar: {groupWidth: "95%"},
                        legend: { position: "none" },
                    };
                    var chart = new google.visualization.ColumnChart(document.getElementById("bar-chart1"));
                    chart.draw(view, options);
                }
            }
        }

        function loadMonthlyOrdersChart(monthlyongoing, monthlycomplete, monthlyready, monthlycancel,)
        {
            google.charts.load('current', {packages: ['corechart', 'bar']});
            google.charts.load('current', {'packages':['line']});
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawCharts);

            function drawCharts() {
                if ($("#bar-chart2").length > 0) {
                    var data = google.visualization.arrayToDataTable([
                        ["Element", "Density", { role: "style" } ],
                        ["Cancel", monthlycancel, "#FF5370"],
                        ["Complete", monthlycomplete, "#1ea6ec"],
                        ["Ready", monthlyready, "#22af47"],
                        ["Ongoing", monthlyongoing, "#007bff"]
                    ]);
                    var view = new google.visualization.DataView(data);
                    view.setColumns([0, 1,
                        { calc: "stringify",
                            sourceColumn: 1,
                            type: "string",
                            role: "annotation"
                        },
                        2]);
                    var options = {
                        // title: "Density of Precious Metals, in g/cm^3",
                        title: "Orders",
                        width:'200%',
                        height: 350,
                        bar: {groupWidth: "95%"},
                        legend: { position: "none" },
                    };
                    var chart = new google.visualization.ColumnChart(document.getElementById("bar-chart2"));
                    chart.draw(view, options);
                }
            }
        }

        function loadWeeklyOrdersChart(weeklyongoing, weeklyready, weeklycomplete, weeklycancel,)
        {
            google.charts.load('current', {packages: ['corechart', 'bar']});
            google.charts.load('current', {'packages':['line']});
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawCharts);

            function drawCharts() {
                if ($("#bar-chart3").length > 0) {
                    var data = google.visualization.arrayToDataTable([
                        ["Element", "Density", { role: "style" } ],
                        ["Cancel", weeklycancel, "#FF5370"],
                        ["Complete", weeklycomplete, "#1ea6ec"],
                        ["Ready", weeklyready, "#22af47"],
                        ["Ongoing", weeklyongoing, "#007bff"]
                    ]);
                    var view = new google.visualization.DataView(data);
                    view.setColumns([0, 1,
                        { calc: "stringify",
                            sourceColumn: 1,
                            type: "string",
                            role: "annotation"
                        },
                        2]);
                    var options = {
                        // title: "Density of Precious Metals, in g/cm^3",
                        title: "Orders",
                        width:'200%',
                        height: 350,
                        bar: {groupWidth: "95%"},
                        legend: { position: "none" },
                    };
                    var chart = new google.visualization.ColumnChart(document.getElementById("bar-chart3"));
                    chart.draw(view, options);
                }
            }
        }

        function loadStatsChart(shops, customers, drivers)
        {
            google.charts.load('current', {packages: ['corechart', 'bar']});
            google.charts.load('current', {'packages':['line']});
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawCharts);

            function drawCharts() {
                if ($("#pie-chart2").length > 0) {
                    var data = google.visualization.arrayToDataTable([
                        ['Task', 'Hours per Day'],
                        ['Shops', shops],
                        ['Customer', customers],
                        ['Drivers', drivers]
                    ]);
                    var options = {
                        title: 'Registered Users',
                        is3D: true,
                        width:'100%',
                        height: 350,
                        colors: ["#FF5370", "#22af47", "#007bff", "#1ea6ec",]
                    };
                    var chart = new google.visualization.PieChart(document.getElementById("pie-chart2"));
                    chart.draw(data, options);
                }
            }
        }
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\shiza\Desktop\SirImran\PureoProducts\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>