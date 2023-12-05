<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
    <style>
        .custom-badge-item {
            background-color: rgba(255, 0, 90, 0.8);
        }
    </style>
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Trang Thống Kê</h1>
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <li class="breadcrumb-item text-muted">
                                <a href="/" class="text-muted text-hover-primary">Trang Chủ</a>
                            </li>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <li class="breadcrumb-item text-muted">Thống Kê</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div class="app-container">
                    <div class="card mb-5 mb-xl-10">
                        <div class="card-body pt-9 pb-0">
                            <div class="d-flex flex-wrap flex-sm-nowrap mb-3">
                                <div class="me-7 mb-4">
                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                        <img src="<?= __RESOURCES__ ?>avatar.gif" alt="image">
                                        <div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"><?= $users["name"]; ?></a>
                                                <a href="#">
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                            <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor"></path>
                                                            <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"></path>
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                                <a href="#" class="d-flex align-items-center fw-bold text-dark me-5 mb-2">
                                                    Chào mừng quay trở lại! Chúc bạn một ngày tốt lành
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-lg-8 mb-4">
                            <div class="card card-xl-stretch mb-5 mb-xl-8">
                                <div class="card-header align-items-center border-0 mt-4">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="fw-bold text-dark">Thống kê</span>
                                        <span class="text-muted mt-3 fw-bold font-size-sm">
                                            Thống kê website
                                        </span>
                                    </h3>
                                    <div class="card-toolbar">
                                        <ul class="nav">
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_4_tab_1">
                                                    Ngày
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_4_tab_2">
                                                    Tháng
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bold px-4" data-bs-toggle="tab" href="#kt_table_widget_4_tab_3">
                                                    Năm
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body pt-4">
                                    <div style="max-height: 500px; overflow: hidden; overflow-y: scroll">
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="kt_table_widget_4_tab_1">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <canvas id="statics_day" class="mh-300px"></canvas>
                                                    </div>
                                                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                                                        <table class="table table-row-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Tổng số thẻ</td>
                                                                    <td><?= number_format($data["day"]["total"]);?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tổng mệnh giá</td>
                                                                    <td><?= number_format($data["day"]["total_request_amount"]);?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tổng mệnh giá thực</td>
                                                                    <td><?= number_format($data["day"]["total_amount"]);?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Tổng thực nhận</td>
                                                                    <td><?= number_format($data["day"]["total_real_amount"]);?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="kt_table_widget_4_tab_2">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <canvas id="statics_month" class="mh-300px"></canvas>
                                                    </div>
                                                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                                                        <table class="table table-row-bordered">
                                                            <tbody>
                                                            <tr>
                                                                <td>Tổng số thẻ</td>
                                                                <td><?= number_format($data["month"]["total"]);?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tổng mệnh giá</td>
                                                                <td><?= number_format($data["month"]["total_request_amount"]);?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tổng mệnh giá thực</td>
                                                                <td><?= number_format($data["month"]["total_amount"]);?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tổng thực nhận</td>
                                                                <td><?= number_format($data["month"]["total_real_amount"]);?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="kt_table_widget_4_tab_3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <canvas id="statics_year" class="mh-300px"></canvas>
                                                    </div>
                                                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                                                        <table class="table table-row-bordered">
                                                            <tbody>
                                                            <tr>
                                                                <td>Tổng số thẻ</td>
                                                                <td><?= number_format($data["year"]["total"]);?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tổng mệnh giá</td>
                                                                <td><?= number_format($data["year"]["total_request_amount"]);?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tổng mệnh giá thực</td>
                                                                <td><?= number_format($data["year"]["total_amount"]);?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tổng thực nhận</td>
                                                                <td><?= number_format($data["year"]["total_real_amount"]);?></td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4">
                            <div class="card card-custom card-stretch gutter-b">
                                <div class="card-header align-items-center border-0 mt-4">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="fw-bold text-dark">Lịch sử tài khoản</span>
                                    </h3>
                                </div>
                                <div class="card-body pt-4">
                                    <div style="max-height: 300px; overflow: hidden; overflow-y: scroll">
                                        <div class="timeline">
                                            <div class="timeline-item align-items-center mb-7">
                                                <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                                <div class="timeline-icon" style="margin-left: 15px">
                                                    <i class="fa fa-genderless text-danger icon-xl"></i>
                                                </div>
                                                <div class="timeline-content m-0">
                                                    <span class="fw-bold text-dark-75 font-size-lg">21:03 - </span>
                                                    Đăng nhập với IP: <a href="#" class="text-primary">127.0.0.1</a>
                                                </div>
                                            </div>
                                            <div class="timeline-item align-items-center mb-7">
                                                <div class="timeline-line w-40px mt-6 mb-n12"></div>
                                                <div class="timeline-icon" style="margin-left: 15px">
                                                    <i class="fa fa-genderless text-danger icon-xl"></i>
                                                </div>
                                                <div class="timeline-content m-0">
                                                    <span class="fw-bold text-dark-75 font-size-lg">21:03 - </span>
                                                    Đăng nhập với IP: <a href="#" class="text-primary">127.0.0.1</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {

        var primaryColor = KTUtil.getCssVariableValue('--kt-primary');
        var dangerColor = KTUtil.getCssVariableValue('--kt-danger');
        var successColor = KTUtil.getCssVariableValue('--kt-success');
        var warningColor = KTUtil.getCssVariableValue('--kt-warning');
        var infoColor = KTUtil.getCssVariableValue('--kt-info');

        var fontFamily = KTUtil.getCssVariableValue('--bs-font-sans-serif');
        const labels = ['Thẻ đúng', 'Thẻ sai', 'Thẻ sai mệnh giá'];

        var ctx = document.getElementById('statics_day');
        var ctx_month = document.getElementById('statics_month');
        var ctx_year = document.getElementById('statics_year');

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: [<?= $data["day"]["success"]; ?>, <?= $data["day"]["error"]; ?>, <?= $data["day"]["wrong"]; ?>],
                    backgroundColor: [
                        successColor,
                        dangerColor,
                        warningColor
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: false,
                    }
                },
                responsive: true,
            },
            defaults:{
                global: {
                    defaultFont: fontFamily
                }
            }
        });
        new Chart(ctx_month, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: [<?= $data["month"]["success"]; ?>, <?= $data["month"]["error"]; ?>, <?= $data["month"]["wrong"]; ?>],
                    backgroundColor: [
                        successColor,
                        dangerColor,
                        warningColor
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: false,
                    }
                },
                responsive: true,
            },
            defaults:{
                global: {
                    defaultFont: fontFamily
                }
            }
        });
        new Chart(ctx_year, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    data: [<?= $data["year"]["success"]; ?>, <?= $data["year"]["error"]; ?>, <?= $data["year"]["wrong"]; ?>],
                    backgroundColor: [
                        successColor,
                        dangerColor,
                        warningColor
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    title: {
                        display: false,
                    }
                },
                responsive: true,
            },
            defaults:{
                global: {
                    defaultFont: fontFamily
                }
            }
        });
    });
</script>