@extends('layouts.admin_layouts.admin_layout')
@section('head-tag')
    <title>Shopholic|| Dashboard</title>
@endsection
@section('content')
    <style>
        .marquee-container {
            height: 200px; /* Set the height of the marquee container */
            overflow: hidden;
        }

        @keyframes marqueeAnimation {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-100%);
            }
        }

        .marquee-content {
            animation: marqueeAnimation 10s linear infinite;
        }
    </style>




    <div class="content">
 <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget">
                    <div class="dash-widgetimg">
                        <span><img src="{{ asset('assets/img/icons/contest.jfif') }}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5>₹<span class="counters" data-count="307144.00">307,144.00</span></h5>
                        <h6>Today Contest Join</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash1">
                    <div class="dash-widgetimg">
                        <span><img src="{{ asset('assets/img/icons/images (39).jfif') }}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5>₹<span class="counters" data-count="4385.00">4,385.00</span></h5>
                        <h6>Amount</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash2">
                    <div class="dash-widgetimg">
                        <span><img src="{{ asset('assets/img/icons/images (38).jfif') }}" style="max-width:131%"
                                alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5>₹<span class="counters" data-count="385656.50">385,656.50</span></h5>
                        <h6>Total Winner Amount</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash3">
                    <div class="dash-widgetimg">
                        <span><img src="{{ asset('assets/img/icons/rdeem.png') }}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5>₹<span class="counters" data-count="40000.00">400.00</span></h5>
                        <h6>Redeem</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count">
                    <div class="dash-counts">
                        <h4>₹100</h4>
                        <h5>Total Wallet Member Amount</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="user"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das1">
                    <div class="dash-counts">
                        <h4>₹100</h4>
                        <h5>Suppliers</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="user-check"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das2">
                    <div class="dash-counts">
                        <h4>₹100</h4>
                        <h5>Purchase Invoice</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="file-text"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das3">
                    <div class="dash-counts">
                        <h4>₹105</h4>
                        <h5>Sales Invoice</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="file"></i>
                    </div>
                </div>
            </div>
        </div>

<div class="row">
                    <div class="col-lg-7 col-sm-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h5 class="card-title mb-0">Purchase & Sales</h5>
                                <div class="graph-sets">
                                    <ul>
                                        <li>
                                            <span>Sales</span>
                                        </li>
                                        <li>
                                            <span>Purchase</span>
                                        </li>
                                    </ul>
                                    <div class="dropdown">
                                        <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">2022<img src="{{asset('assets/img/icons/dropdown.svg')}}" alt="img" class="ms-2"></button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2022</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2021</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item">2020</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="sales_charts"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-12 col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">Recently Added Contest</h4>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                                        <i class="fa fa-ellipsis-v"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a href="productlist.html" class="dropdown-item">Contest List</a>
                                        </li>
                                        <li>
                                            <a href="addproduct.html" class="dropdown-item">Contest Add</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive dataview">
                                    <table class="table datatable ">
                                        <thead>
                                            <tr>
                                                <th>Sno</th>
                                                <th>Contest</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="productimgname">
                                                    <!--<a href="productlist.html" class="product-img">-->
                                                    <!--    <img src="{{asset('assets/img/product/product22.jpg')}}" alt="product">-->
                                                    <!--</a>-->
                                                    <a href="productlist.html">1st</a>
                                                </td>
                                                <td>$891.2</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td class="productimgname">
                                                    <!--<a href="productlist.html" class="product-img">-->
                                                    <!--    <img src="{{asset('assets/img/product/product23.jpg')}}" alt="product">-->
                                                    <!--</a>-->
                                                    <a href="productlist.html">2nd</a>
                                                </td>
                                                <td>$668.51</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td class="productimgname">
                                                    <!--<a href="productlist.html" class="product-img">-->
                                                    <!--    <img src="{{asset('assets/img/product/product24.jpg')}}" alt="product">-->
                                                    <!--</a>-->
                                                    <a href="productlist.html">3rd</a>
                                                </td>
                                                <td>$522.29</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td class="productimgname">
                                                    <!--<a href="productlist.html" class="product-img">-->
                                                    <!--    <img src="{{asset('assets/img/product/product6.jpg')}}" alt="product">-->
                                                    <!--</a>-->
                                                    <a href="productlist.html">4th</a>
                                                </td>
                                                <td>$291.01</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<div class="card mb-0">
                    <div class="card-body">
                        <h4 class="card-title">Running Contest</h4>
                        <div class="table-responsive dataview">
                            <table class="table datatable ">
                                <thead>
                                    <tr>
                                        <th>SNo</th>
                                        <th>Contest Code</th>
                                        <th>Contest Name</th>
                                        <th>Contest Name</th>
                                        <th>Category Contest</th>
                                        <th>Expiry Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><a href="javascript:void(0);">IT0001</a></td>
                                        <td class="productimgname">
                                            <!--<a class="product-img" href="productlist.html">-->
                                            <!--    <img src="{{asset('assets/img/product/product2.jpg')}}" alt="product">-->
                                            <!--</a>-->
                                            <a href="productlist.html">1st</a>
                                        </td>
                                        <td>N/D</td>
                                        <td>running</td>
                                        <td>12-12-2022</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><a href="javascript:void(0);">IT0002</a></td>
                                        <td class="productimgname">
                                            <!--<a class="product-img" href="productlist.html">-->
                                            <!--    <img src="{{asset('assets/img/product/product3.jpg')}}" alt="product">-->
                                            <!--</a>-->
                                            <a href="productlist.html">Running</a>
                                        </td>
                                        <td>N/D</td>
                                        <td>running</td>
                                        <td>25-11-2022</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><a href="javascript:void(0);">IT0003</a></td>
                                        <td class="productimgname">
                                            <!--<a class="product-img" href="productlist.html">-->
                                            <!--    <img src="{{asset('assets/img/product/product4.jpg')}}" alt="product">-->
                                            <!--</a>-->
                                            <a href="productlist.html">Running</a>
                                        </td>
                                        <td>N/D</td>
                                        <td>running</td>
                                        <td>19-11-2022</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><a href="javascript:void(0);">IT0004</a></td>
                                        <td class="productimgname">
                                            <!--<a class="product-img" href="productlist.html">-->
                                            <!--    <img src="{{asset('assets/img/product/product5.jpg')}}" alt="product">-->
                                            <!--</a>-->
                                            <a href="productlist.html">running</a>
                                        </td>
                                        <td>N/D</td>
                                        <td>running</td>
                                        <td>20-11-2022</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
    </div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
   $(document).ready(function(){
  if($('#sales_charts').length > 0) {
    $(document).on('change', '.years_list', function() {
      getYear($(this).val());
    });

    function getYear(year) {
      $.get('/admin/get-chart-record', { year }, function(data) {
        console.log(data.data);
        var options = {
          series: [
            { name: 'Sales', data: data.data.sales },
            { name: 'Purchase', data: data.data.purchase }
          ],
          colors: ['#28C76F', '#EA5455'],
          chart: { type: 'bar', height: 300, stacked: true, zoom: { enabled: true } },
          responsive: [{ breakpoint: 280, options: { legend: { position: 'bottom', offsetY: 0 } } }],
          plotOptions: { bar: { horizontal: false, columnWidth: '20%', endingShape: 'rounded' } },
          xaxis: { categories: data.data.month },
          legend: { position: 'right', offsetY: 40 },
          fill: { opacity: 1 }
        };

        var chart = new ApexCharts(document.querySelector("#sales_charts"), options);
        chart.render();
      });
    }

    // Initial load for default year
    var defaultYear = $('.years_list').val();
    getYear(defaultYear);
  }
});
    </script>
@endsection
