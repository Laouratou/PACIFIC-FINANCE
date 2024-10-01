@extends('layouts.app_admin')
@include('partials.header_admin')
@include('partials.sidebar')

<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget">
                    <div class="dash-widgetimg">
                        <span><img src="{{ asset('img/icons/dash1.svg') }}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5>$<span class="counters" data-count="307144.00">$307,144.00</span></h5>
                        <h6>Total Purchase Due</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash1">
                    <div class="dash-widgetimg">
                        <span><img src="{{ asset('img/icons/dash2.svg') }}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5>$<span class="counters" data-count="4385.00">$4,385.00</span></h5>
                        <h6>Total Sales Due</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash2">
                    <div class="dash-widgetimg">
                        <span><img src="{{ asset('img/icons/dash3.svg') }}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5>$<span class="counters" data-count="385656.50">$385,656.50</span></h5>
                        <h6>Total Sale Amount</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="dash-widget dash3">
                    <div class="dash-widgetimg">
                        <span><img src="{{ asset('img/icons/dash4.svg') }}" alt="img"></span>
                    </div>
                    <div class="dash-widgetcontent">
                        <h5>$<span class="counters" data-count="40000.00">$400.00</span></h5>
                        <h6>Total Sale Amount</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count">
                    <div class="dash-counts">
                        <h4>100</h4>
                        <h5>Customers</h5>
                    </div>
                    <div class="dash-imgs">
                        <i data-feather="user"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12 d-flex">
                <div class="dash-count das1">
                    <div class="dash-counts">
                        <h4>100</h4>
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
                        <h4>100</h4>
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
                        <h4>105</h4>
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
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                    2022 <img src="{{ asset('img/icons/dropdown.svg') }}" alt="img" class="ms-2">
                                </button>
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
                        <h4 class="card-title mb-0">Recently Added Products</h4>
                        <div class="dropdown">
                            <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                                <i class="fa fa-ellipsis-v"></i>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>
                                    <a href="productlist.html" class="dropdown-item">Product List</a>
                                </li>
                                <li>
                                    <a href="addproduct.html" class="dropdown-item">Product Add</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive dataview">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Sno</th>
                                        <th>Products</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="productimgname">
                                            <a href="productlist.html" class="product-img">
                                                <img src="{{ asset('img/product/product22.jpg') }}" alt="product">
                                            </a>
                                            <a href="productlist.html">Apple Earpods</a>
                                        </td>
                                        <td>$891.2</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td class="productimgname">
                                            <a href="productlist.html" class="product-img">
                                                <img src="{{ asset('img/product/product23.jpg') }}" alt="product">
                                            </a>
                                            <a href="productlist.html">iPhone 11</a>
                                        </td>
                                        <td>$668.51</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td class="productimgname">
                                            <a href="productlist.html" class="product-img">
                                                <img src="{{ asset('img/product/product24.jpg') }}" alt="product">
                                            </a>
                                            <a href="productlist.html">Samsung</a>
                                        </td>
                                        <td>$522.29</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td class="productimgname">
                                            <a href="productlist.html" class="product-img">
                                                <img src="{{ asset('img/product/product6.jpg') }}" alt="product">
                                            </a>
                                            <a href="productlist.html">Macbook Pro</a>
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
                <h4 class="card-title">Expired Products</h4>
                <div class="table-responsive dataview">
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>SNo</th>
                                <th>Products</th>
                                <th>Expiry Date</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="productimgname">
                                    <a href="productlist.html" class="product-img">
                                        <img src="{{ asset('img/product/product21.jpg') }}" alt="product">
                                    </a>
                                    <a href="productlist.html">iPhone 7</a>
                                </td>
                                <td>28 Nov 2023</td>
                                <td>$119.00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="productimgname">
                                    <a href="productlist.html" class="product-img">
                                        <img src="{{ asset('img/product/product19.jpg') }}" alt="product">
                                    </a>
                                    <a href="productlist.html">Smart TV</a>
                                </td>
                                <td>15 Sep 2023</td>
                                <td>$99.00</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="productimgname">
                                    <a href="productlist.html" class="product-img">
                                        <img src="{{ asset('img/product/product20.jpg') }}" alt="product">
                                    </a>
                                    <a href="productlist.html">Harman Kardon</a>
                                </td>
                                <td>02 Mar 2023</td>
                                <td>$199.00</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="productimgname">
                                    <a href="productlist.html" class="product-img">
                                        <img src="{{ asset('img/product/product5.jpg') }}" alt="product">
                                    </a>
                                    <a href="productlist.html">Logitech</a>
                                </td>
                                <td>10 Jan 2023</td>
                                <td>$99.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @include('partials.footer_admin') --}}
