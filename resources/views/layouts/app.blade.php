<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css','resources/css/style.css', 'resources/js/app.js','resources/js/main.js','resources/js/charts.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            

            <!-- Page Heading -->
           {{-- @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>--}}

            <div class="flex container">
                @include('layouts.navigation')
        
                <!-- ========================= Main ==================== -->
            
                    <!-- ======================= Cards ================== -->
                    <div class="cardBox">
                        <div class="card">
                            <div>
                                <div class="numbers">1,504</div>
                                <div class="cardName">Daily Views</div>
                            </div>
        
                            <div class="iconBx">
                                <ion-icon name="eye-outline"></ion-icon>
                            </div>
                        </div>
        
                        <div class="card">
                            <div>
                                <div class="numbers">80</div>
                                <div class="cardName">Sales</div>
                            </div>
        
                            <div class="iconBx">
                                <ion-icon name="cart-outline"></ion-icon>
                            </div>
                        </div>
        
                        <div class="card">
                            <div>
                                <div class="numbers">284</div>
                                <div class="cardName">Comments</div>
                            </div>
        
                            <div class="iconBx">
                                <ion-icon name="chatbubbles-outline"></ion-icon>
                            </div>
                        </div>
        
                        <div class="card">
                            <div>
                                <div class="numbers">$7,842</div>
                                <div class="cardName">Earning</div>
                            </div>
        
                            <div class="iconBx">
                                <ion-icon name="cash-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
        
                    <!-- ================ Add Charts JS ================= -->
                    <div class="chartsBx">
                        <div class="chart"> <canvas id="chart-1"></canvas> </div>
                        <div class="chart"> <canvas id="chart-2"></canvas> </div>
                    </div>
        
                    <!-- ================ Order Details List ================= -->
                    <div class="details">
                        <div class="recentOrders">
                            <div class="cardHeader">
                                <h2>Recent Orders</h2>
                                <a href="#" class="btn">View All</a>
                            </div>
        
                            <table>
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Price</td>
                                        <td>Payment</td>
                                        <td>Status</td>
                                    </tr>
                                </thead>
        
                                <tbody>
                                    <tr>
                                        <td>Star Refrigerator</td>
                                        <td>$1200</td>
                                        <td>Paid</td>
                                        <td><span class="status delivered">Delivered</span></td>
                                    </tr>
        
                                    <tr>
                                        <td>Dell Laptop</td>
                                        <td>$110</td>
                                        <td>Due</td>
                                        <td><span class="status pending">Pending</span></td>
                                    </tr>
        
                                    <tr>
                                        <td>Apple Watch</td>
                                        <td>$1200</td>
                                        <td>Paid</td>
                                        <td><span class="status return">Return</span></td>
                                    </tr>
        
                                    <tr>
                                        <td>Addidas Shoes</td>
                                        <td>$620</td>
                                        <td>Due</td>
                                        <td><span class="status inProgress">In Progress</span></td>
                                    </tr>
        
                                    <tr>
                                        <td>Star Refrigerator</td>
                                        <td>$1200</td>
                                        <td>Paid</td>
                                        <td><span class="status delivered">Delivered</span></td>
                                    </tr>
        
                                    <tr>
                                        <td>Dell Laptop</td>
                                        <td>$110</td>
                                        <td>Due</td>
                                        <td><span class="status pending">Pending</span></td>
                                    </tr>
        
                                    <tr>
                                        <td>Apple Watch</td>
                                        <td>$1200</td>
                                        <td>Paid</td>
                                        <td><span class="status return">Return</span></td>
                                    </tr>
        
                                    <tr>
                                        <td>Addidas Shoes</td>
                                        <td>$620</td>
                                        <td>Due</td>
                                        <td><span class="status inProgress">In Progress</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
        
                        <!-- ================= New Customers ================ -->
                        <div class="recentCustomers">
                            <div class="cardHeader">
                                <h2>Recent Customers</h2>
                            </div>
        
                            <table>
                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>David <br> <span>Italy</span></h4>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>Amit <br> <span>India</span></h4>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>David <br> <span>Italy</span></h4>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>Amit <br> <span>India</span></h4>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>David <br> <span>Italy</span></h4>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>Amit <br> <span>India</span></h4>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="assets/imgs/customer01.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>David <br> <span>Italy</span></h4>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td width="60px">
                                        <div class="imgBx"><img src="assets/imgs/customer02.jpg" alt=""></div>
                                    </td>
                                    <td>
                                        <h4>Amit <br> <span>India</span></h4>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </body>
</html>
