@extends('admin.layouts/verticalLayoutMaster')

@section('title', 'Home')

@section('content')
<!-- Page layout -->
<section id="dashboard-ecommerce">
    <div class="row match-height">
        <!-- Bar Chart - Orders -->
        <div class="col-lg-2 col-md-3 col-6">
            <div class="card">
                <div class="card-body pb-50">
                    <h6>Orders</h6>
                    <h2 class="font-weight-bolder mb-1">2,76k</h2>
                    <div id="statistics-order-chart"></div>
                </div>
            </div>
        </div>
        <!--/ Bar Chart - Orders -->

        <!-- Line Chart - Profit -->
        <div class="col-lg-2 col-md-3 col-6">
            <div class="card card-tiny-line-stats">
                <div class="card-body pb-50">
                    <h6>Profit</h6>
                    <h2 class="font-weight-bolder mb-1">6,24k</h2>
                    <div id="statistics-profit-chart"></div>
                </div>
            </div>
        </div>
        <!--/ Line Chart - Profit -->

        <!-- Statistics Card -->
        <div class="col-xl-8 col-md-6 col-12">
            <div class="card card-statistics">
                <div class="card-header">
                    <h4 class="card-title">Statistics</h4>
                    <div class="d-flex align-items-center">
                        <p class="card-text font-small-2 mr-25 mb-0">Updated 1 month ago</p>
                    </div>
                </div>
                <div class="card-body statistics-body">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <div class="media">
                                <div class="avatar bg-light-primary mr-2">
                                    <div class="avatar-content">
                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">230k</h4>
                                    <p class="card-text font-small-3 mb-0">Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                            <div class="media">
                                <div class="avatar bg-light-info mr-2">
                                    <div class="avatar-content">
                                        <i data-feather="user" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">8.549k</h4>
                                    <p class="card-text font-small-3 mb-0">Customers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                            <div class="media">
                                <div class="avatar bg-light-danger mr-2">
                                    <div class="avatar-content">
                                        <i data-feather="box" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">1.423k</h4>
                                    <p class="card-text font-small-3 mb-0">Products</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 col-12">
                            <div class="media">
                                <div class="avatar bg-light-success mr-2">
                                    <div class="avatar-content">
                                        <i data-feather="dollar-sign" class="avatar-icon"></i>
                                    </div>
                                </div>
                                <div class="media-body my-auto">
                                    <h4 class="font-weight-bolder mb-0">$9745</h4>
                                    <p class="card-text font-small-3 mb-0">Revenue</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Statistics Card -->
    </div>

    <div class="row match-height">
      <!-- Transaction Card -->
      <div class="col-lg-4 col-md-6 col-12">
        <div class="card card-transaction">
            <div class="card-header">
                <h4 class="card-title">Transactions</h4>
                <div class="dropdown chart-dropdown">
                    <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-toggle="dropdown"></i>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                        <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="transaction-item">
                    <div class="media">
                        <div class="avatar bg-light-primary rounded">
                            <div class="avatar-content">
                                <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h6 class="transaction-title">Wallet</h6>
                            <small>Starbucks</small>
                        </div>
                    </div>
                    <div class="font-weight-bolder text-danger">- $74</div>
                </div>
                <div class="transaction-item">
                    <div class="media">
                        <div class="avatar bg-light-success rounded">
                            <div class="avatar-content">
                                <i data-feather="check" class="avatar-icon font-medium-3"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h6 class="transaction-title">Bank Transfer</h6>
                            <small>Add Money</small>
                        </div>
                    </div>
                    <div class="font-weight-bolder text-success">+ $480</div>
                </div>
                <div class="transaction-item">
                    <div class="media">
                        <div class="avatar bg-light-danger rounded">
                            <div class="avatar-content">
                                <i data-feather="dollar-sign" class="avatar-icon font-medium-3"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h6 class="transaction-title">Paypal</h6>
                            <small>Add Money</small>
                        </div>
                    </div>
                    <div class="font-weight-bolder text-success">+ $590</div>
                </div>
                <div class="transaction-item">
                    <div class="media">
                        <div class="avatar bg-light-warning rounded">
                            <div class="avatar-content">
                                <i data-feather="credit-card" class="avatar-icon font-medium-3"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h6 class="transaction-title">Mastercard</h6>
                            <small>Ordered Food</small>
                        </div>
                    </div>
                    <div class="font-weight-bolder text-danger">- $23</div>
                </div>
                <div class="transaction-item">
                    <div class="media">
                        <div class="avatar bg-light-info rounded">
                            <div class="avatar-content">
                                <i data-feather="trending-up" class="avatar-icon font-medium-3"></i>
                            </div>
                        </div>
                        <div class="media-body">
                            <h6 class="transaction-title">Transfer</h6>
                            <small>Refund</small>
                        </div>
                    </div>
                    <div class="font-weight-bolder text-success">+ $98</div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Transaction Card -->

    <!-- Revenue Report Card -->
    <div class="col-lg-8 col-12">
        <div class="card card-revenue-budget">
            <div class="row mx-0">
                <div class="col-md-8 col-12 revenue-report-wrapper">
                    <div class="d-sm-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title mb-50 mb-sm-0">Revenue Report</h4>
                        <div class="d-flex align-items-center">
                            <div class="d-flex align-items-center mr-2">
                                <span class="bullet bullet-primary font-small-3 mr-50 cursor-pointer"></span>
                                <span>Earning</span>
                            </div>
                            <div class="d-flex align-items-center ml-75">
                                <span class="bullet bullet-warning font-small-3 mr-50 cursor-pointer"></span>
                                <span>Expense</span>
                            </div>
                        </div>
                    </div>
                    <div id="revenue-report-chart"></div>
                </div>
                <div class="col-md-4 col-12 budget-wrapper">
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            2020
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">2020</a>
                            <a class="dropdown-item" href="javascript:void(0);">2019</a>
                            <a class="dropdown-item" href="javascript:void(0);">2018</a>
                        </div>
                    </div>
                    <h2 class="mb-25">$25,852</h2>
                    <div class="d-flex justify-content-center">
                        <span class="font-weight-bolder mr-25">Budget:</span>
                        <span>56,800</span>
                    </div>
                    <div id="budget-chart"></div>
                    <button type="button" class="btn btn-primary">Increase Budget</button>
                </div>
            </div>
        </div>
    </div>
    <!--/ Revenue Report Card -->
</div>
</section>
<!--/ Page layout -->
@endsection
<!--/ Page Scripts -->
@section('page-script')
<script>
$(function(){

  // Your scripts here

});
</script>
@endsection
