<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>

<body>

    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <?php include 
		  "menu.php";
		?>
        </nav>
        <div class="main bg-dark">
            <nav class="navbar navbar-expand navbar-light navbar-bg bg-success">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <button type='button' class='btn btn-outline-dark'><a href="../index.php">Sair</a></button>
                    </ul>
                </div>
            </nav>

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="col-lg-8">
                        <div class="row">

                            <!-- Sales Card -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card sales-card bg-success">
                                    <div class="card-body">
                                        <h5 class="card-title text-dark">Dividendos <span>| Hoje</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-cart"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6 class='text-primary'>145</h6>
                                                <span class="text-primary small pt-1 fw-bold">12%</span> <span
                                                    class="text-dark small pt-2 ps-1">valorização</span>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Sales Card -->

                            <!-- Revenue Card -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card revenue-card bg-success">

                                    <div class="card-body">
                                        <h5 class="card-title text-dark">Receita <span>| Este mês</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-currency-dollar"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6 class='text-primary'>R$ 3.264,00</h6>
                                                <span class="text-primary small pt-1 fw-bold">8%</span> <span
                                                    class="text-dark small pt-2 ps-1">valorização</span>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Revenue Card -->

                            <!-- Customers Card -->
                            <div class="col-xxl-4 col-xl-12">

                                <div class="card info-card customers-card">

                                    <div class="filter">
                                        <a class="icon" href="#" data-bs-toggle="dropdown"><i
                                                class="bi bi-three-dots"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Filter</h6>
                                            </li>

                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">This Month</a></li>
                                            <li><a class="dropdown-item" href="#">This Year</a></li>
                                        </ul>
                                    </div>

                                    <div class="card-body bg-success">
                                        <h5 class="card-title text-dark">Clientes <span>| Esse ano</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-people"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6 class='text-primary'>1244</h6>
                                                <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                                    class="text-dark small pt-2 ps-1">valorização</span>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div><!-- End Customers Card -->

                            <!-- Recent Sales -->
                            <div class="col-12">
                                <div class="card recent-sales overflow-auto bg-success">

                                    <div class="card-body">
                                        <h5 class="card-title text-dark">Lucros recentes <span>| Hoje</span></h5>

                                        <table class="table table-borderless datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Sócios</th>
                                                    <th scope="col">Ações</th>
                                                    <th scope="col">Preço</th>
                                                    <th scope="col">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><a href="#">#2457</a></th>
                                                    <td>Brandon Jacob</td>
                                                    <td><a href="#" class="text-primary">VALE ON</a></td>
                                                    <td>R$ 64,00</td>
                                                    <td><span class="badge bg-primary">Aprovado</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><a href="#">#2147</a></th>
                                                    <td>Bridie Kessler</td>
                                                    <td><a href="#" class="text-primary">PETROBRAS PN</a></td>
                                                    <td>R$ 47,00</td>
                                                    <td><span class="badge bg-warning">Pendente</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><a href="#">#2049</a></th>
                                                    <td>Ashleigh Langosh</td>
                                                    <td><a href="#" class="text-primary">ITAUUNIBANCO PN</a>
                                                    </td>
                                                    <td>R$ 147,00</td>
                                                    <td><span class="badge bg-primary">Aprovado</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><a href="#">#2644</a></th>
                                                    <td>Angus Grady</td>
                                                    <td><a href="#" class="text-primar">BRADESCO PN</a>
                                                    </td>
                                                    <td>R$ 67,00</td>
                                                    <td><span class="badge bg-danger">Rejeitado</span></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><a href="#">#2644</a></th>
                                                    <td>Raheem Lehner</td>
                                                    <td><a href="#" class="text-primary">CUBEOPTIONS PN</a>
                                                    </td>
                                                    <td>R$ 165,00</td>
                                                    <td><span class="badge bg-primary">Aprovado</span></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div><!-- End Recent Sales -->

                            <!-- Top Selling -->
                            <div class="col-12">
                                <div class="card top-selling overflow-auto bg-success">
                                    <div class="card-body pb-0">
                                        <h5 class="card-title text-dark">Mais valorizados <span>| Hoje</span></h5>

                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Visualizar</th>
                                                    <th scope="col">Ações</th>
                                                    <th scope="col">Preço</th>
                                                    <th scope="col">Operações</th>
                                                    <th scope="col">Receita</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row"><a href="#"><img src="assets/img/product-1.jpg"
                                                                alt=""></a></th>
                                                    <td><a href="#" class="text-primary fw-bold">ITAUUNIBANCO PN</a></td>
                                                    <td>R$ 64,00</td>
                                                    <td class="fw-bold">124</td>
                                                    <td>R$ 5.828,00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><a href="#"><img src="assets/img/product-2.jpg"
                                                                alt=""></a></th>
                                                    <td><a href="#" class="text-primary fw-bold">BRADESCO PN</a></td>
                                                    <td>R$ 46,00</td>
                                                    <td class="fw-bold">98</td>
                                                    <td>R$ 4.508,00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><a href="#"><img src="assets/img/product-3.jpg"
                                                                alt=""></a></th>
                                                    <td><a href="#" class="text-primary fw-bold">ITAUUNIBANCO PN</a></td>
                                                    <td>R$ 59,00</td>
                                                    <td class="fw-bold">74</td>
                                                    <td>R$ 4.366,00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><a href="#"><img src="assets/img/product-4.jpg"
                                                                alt=""></a></th>
                                                    <td><a href="#" class="text-primary fw-bold">PETROBRAS PN</a></td>
                                                    <td>R$ 32,00</td>
                                                    <td class="fw-bold">63</td>
                                                    <td>R$ 2.016,00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row"><a href="#"><img src="assets/img/product-5.jpg"
                                                                alt=""></a></th>
                                                    <td><a href="#" class="text-primary fw-bold">CUBEOPTIONS PN</a></td>
                                                    <td>R$ 79,00</td>
                                                    <td class="fw-bold">41</td>
                                                    <td>R$ 3.239,00</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div><!-- End Top Selling -->

                        </div>
                    </div><!-- End Left side columns -->






                </div>
            </main>

            <footer class="footer bg-success">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="text-center">
                            <p class="mb-0">
                                <a class="text-muted" href="https://github.com/leoangonese/cube-fp"
                                    target='blank'><strong class='text-dark'>Todos os direitos reservados
                                        Cube&copy;</strong> <br>
                                    <a class="text-muted" href="https://github.com/leoangonese/cube-fp"
                                        target='blank'><strong class='text-dark'>Leonardo Angonese & João Victor
                                            Silveira</strong>
                            </p>
                        </div>

                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="js/app.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
        var gradient = ctx.createLinearGradient(0, 0, 0, 225);
        gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
        gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
        // Line chart
        new Chart(document.getElementById("chartjs-dashboard-line"), {
            type: "line",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                    "Dec"
                ],
                datasets: [{
                    label: "Sales ($)",
                    fill: true,
                    backgroundColor: gradient,
                    borderColor: window.theme.primary,
                    data: [
                        2115,
                        1562,
                        1584,
                        1892,
                        1587,
                        1923,
                        2566,
                        2448,
                        2805,
                        3438,
                        2917,
                        3327
                    ]
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                tooltips: {
                    intersect: false
                },
                hover: {
                    intersect: true
                },
                plugins: {
                    filler: {
                        propagate: false
                    }
                },
                scales: {
                    xAxes: [{
                        reverse: true,
                        gridLines: {
                            color: "rgba(0,0,0,0.0)"
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            stepSize: 1000
                        },
                        display: true,
                        borderDash: [3, 3],
                        gridLines: {
                            color: "rgba(0,0,0,0.0)"
                        }
                    }]
                }
            }
        });
    });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Pie chart
        new Chart(document.getElementById("chartjs-dashboard-pie"), {
            type: "pie",
            data: {
                labels: ["Chrome", "Firefox", "IE"],
                datasets: [{
                    data: [4306, 3801, 1689],
                    backgroundColor: [
                        window.theme.primary,
                        window.theme.warning,
                        window.theme.danger
                    ],
                    borderWidth: 5
                }]
            },
            options: {
                responsive: !window.MSInputMethodContext,
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                cutoutPercentage: 75
            }
        });
    });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Bar chart
        new Chart(document.getElementById("chartjs-dashboard-bar"), {
            type: "bar",
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                    "Dec"
                ],
                datasets: [{
                    label: "This year",
                    backgroundColor: window.theme.primary,
                    borderColor: window.theme.primary,
                    hoverBackgroundColor: window.theme.primary,
                    hoverBorderColor: window.theme.primary,
                    data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                    barPercentage: .75,
                    categoryPercentage: .5
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false
                        },
                        stacked: false,
                        ticks: {
                            stepSize: 20
                        }
                    }],
                    xAxes: [{
                        stacked: false,
                        gridLines: {
                            color: "transparent"
                        }
                    }]
                }
            }
        });
    });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var markers = [{
                coords: [31.230391, 121.473701],
                name: "Shanghai"
            },
            {
                coords: [28.704060, 77.102493],
                name: "Delhi"
            },
            {
                coords: [6.524379, 3.379206],
                name: "Lagos"
            },
            {
                coords: [35.689487, 139.691711],
                name: "Tokyo"
            },
            {
                coords: [23.129110, 113.264381],
                name: "Guangzhou"
            },
            {
                coords: [40.7127837, -74.0059413],
                name: "New York"
            },
            {
                coords: [34.052235, -118.243683],
                name: "Los Angeles"
            },
            {
                coords: [41.878113, -87.629799],
                name: "Chicago"
            },
            {
                coords: [51.507351, -0.127758],
                name: "London"
            },
            {
                coords: [40.416775, -3.703790],
                name: "Madrid "
            }
        ];
        var map = new jsVectorMap({
            map: "world",
            selector: "#world_map",
            zoomButtons: true,
            markers: markers,
            markerStyle: {
                initial: {
                    r: 9,
                    strokeWidth: 7,
                    stokeOpacity: .4,
                    fill: window.theme.primary
                },
                hover: {
                    fill: window.theme.primary,
                    stroke: window.theme.primary
                }
            },
            zoomOnScroll: false
        });
        window.addEventListener("resize", () => {
            map.updateSize();
        });
    });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
        var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
        document.getElementById("datetimepicker-dashboard").flatpickr({
            inline: true,
            prevArrow: "<span title=\"Previous month\">&laquo;</span>",
            nextArrow: "<span title=\"Next month\">&raquo;</span>",
            defaultDate: defaultDate
        });
    });
    </script>

</body>

</html>