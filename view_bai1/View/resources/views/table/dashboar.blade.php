<!DOCTYPE html>
<html lang="en">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<head>
    @extends('layouts.link')
</head>
<body>
    <div class="row">
        <div class="col-3 header-left">
            @include('layouts.header-sidebar')
            <br>
            @include('layouts.sidebar')
        </div>

        <div class="col-9 header-right">
            @include('layouts.header')
            <br>
            @include('layouts.body')
            <div class="row">
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <canvas id="barChart" style="width:100%;max-width:600px background-color:#f8f9fa;box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); "></canvas>
                    <script>
                        const xValuesBar = ["Italy", "France", "Spain", "USA", "Argentina"];
                        const yValuesBar = [55, 49, 44, 24, 15];
                        const barColorsBar = ["red", "green", "blue", "orange", "brown"];

                        new Chart("barChart", {
                            type: "bar",
                            data: {
                                labels: xValuesBar,
                                datasets: [{
                                    backgroundColor: barColorsBar,
                                    data: yValuesBar
                                }]
                            },
                            options: {
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: true,
                                    text: "World Wine Production 2018"
                                }
                            }
                        });
                    </script>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <canvas id="doughnutChart" style="width:100%;height:1500px"></canvas>
                            <script>
                                const xValuesDoughnut = ["Italy", "France", "Spain", "USA", "Argentina"];
                                const yValuesDoughnut = [55, 49, 44, 24, 15];
                                const barColorsDoughnut = [
                                    "#b91d47",
                                    "#00aba9",
                                    "#2b5797",
                                    "#e8c3b9",
                                    "#1e7145"
                                ];

                                new Chart("doughnutChart", {
                                    type: "doughnut",
                                    data: {
                                        labels: xValuesDoughnut,
                                        datasets: [{
                                            backgroundColor: barColorsDoughnut,
                                            data: yValuesDoughnut
                                        }]
                                    },
                                    options: {
                                        title: {
                                            display: true,
                                            text: "World Wide Wine Production 2018"
                                        }
                                    }
                                });
                            </script>
                        </div>
                        <div class="col-6">
                            <canvas id="doughnutChart2" style="width:100%;height:1500px"></canvas>
                            <script>
                                const xValuesDoughnut2 = ["Italy", "France", "Spain", "USA", "Argentina"];
                                const yValuesDoughnut2 = [55, 49, 44, 24, 15];
                                const barColorsDoughnut2 = [
                                    "#b91d47",
                                    "#00aba9",
                                    "#2b5797",
                                    "#e8c3b9",
                                    "#1e7145"
                                ];

                                new Chart("doughnutChart2", {
                                    type: "doughnut",
                                    data: {
                                        labels: xValuesDoughnut,
                                        datasets: [{
                                            backgroundColor: barColorsDoughnut,
                                            data: yValuesDoughnut
                                        }]
                                    },
                                    options: {
                                        title: {
                                            display: true,
                                            text: "World Wide Wine Production 2018"
                                        }
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
