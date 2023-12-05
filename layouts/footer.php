            </div>
        </div>
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <span class="svg-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                </svg>
            </span>
        </div>
        <script src="<?=  __RESOURCES__ ?>admin/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
        <script src="<?=  __RESOURCES__ ?>admin/plugins/custom/datatables/datatables.bundle.js"></script>
        <script src="<?=  __RESOURCES__ ?>admin/js/widgets.bundle.js"></script>
        <script src="<?=  __RESOURCES__ ?>admin/js/custom/widgets.js"></script>
        <script src="<?=  __RESOURCES__ ?>admin/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
        <script src="<?=  __RESOURCES__ ?>admin/js/quilljs.min.js"></script>
        <script>
            "use strict";
            $('#wheel_repeater').repeater({
                initEmpty: false,

                defaultValues: {
                    'text-input': 'foo'
                },

                show: function () {
                    $(this).slideDown();
                },

                hide: function (deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });

            var toolbarOptions = [
                [{header: [1, 2, 3, 4, 5, false]}],
                ['bold', 'italic', 'underline', 'strike'],
                [{'list': 'ordered'}, {'list': 'bullet'}],
                [{'align': []}],
                ['link', 'image'],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'color': [] }]];
            var quill = new Quill('#home_notification', {
                modules: {
                    toolbar: toolbarOptions
                },
                placeholder: 'Type your text here...',
                theme: 'snow'
            });

            var blogs = new Quill('#blogs_content', {
                modules: {
                    toolbar: toolbarOptions,
                    imageResize: {},
                },
                placeholder: 'Nội dung bài viết...',
                theme: 'snow'
            });

            var KTDatatablesExample = function () {
                var table;
                var datatable;

                var initDatatable = function () {
                    var dataTableOptions = {
                        "info": true,
                        'order': [0, "DESC"],
                        'pageLength': 10,
                        "language": {
                            "emptyTable": '' +
                                '<img src="https://cdn-icons-png.flaticon.com/512/7486/7486744.png" style="width: 100px; height: 100px;" alt="Không có dữ liệu nào được tìm thấy" />' +
                                '<br>' +
                                'Không có dữ liệu nào được tìm thấy',
                            "zeroRecords": '' +
                                '<img src="https://cdn-icons-png.flaticon.com/512/7486/7486744.png" style="width: 100px; height: 100px;" alt="Không có dữ liệu nào được tìm thấy" />' +
                                '<br>' +
                                'Không có dữ liệu nào được tìm thấy',
                        },
                        "dataSrc": function (data) {
                            console.log(data);
                            return data;
                        },
                    };

                    if (typeof table_ajax !== 'undefined') {
                        dataTableOptions.ajax = table_ajax
                    }
                    if (typeof table_columns !== 'undefined') {
                        dataTableOptions.columns = table_columns
                    }

                    if (typeof table_option !== 'undefined') {
                        Object.assign(dataTableOptions, table_option);
                    }

                    datatable = $(table).DataTable(dataTableOptions);
                }

                var handleSearchDatatable = () => {
                    const filterSearch = document.querySelector('[data-kt-filter="search"]');
                    if (filterSearch) {
                        filterSearch.addEventListener('keyup', function (e) {
                            datatable.search(e.target.value).draw();
                        });
                    }
                }

                return {
                    init: function () {
                        table = document.querySelector('#datatable');

                        if (!table) {
                            return;
                        }
                        initDatatable();
                        handleSearchDatatable();
                    }
                };
            }();

            document.addEventListener('DOMContentLoaded', function () {
                KTDatatablesExample.init();
            });

        </script>
        <script src="<?=  __RESOURCES__ ?>admin/plugins/global/plugins.bundle.js"></script>
        <script src="<?=  __RESOURCES__ ?>admin/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
        <script src="<?=  __RESOURCES__ ?>admin/js/scripts.bundle.js"></script>
        <script src="<?=  __RESOURCES__ ?>admin/plugins/custom/datatables/datatables.bundle.js"></script>
        <script src="<?=  __RESOURCES__ ?>admin/js/widgets.bundle.js"></script>
        <script src="<?=  __RESOURCES__ ?>admin/js/custom/widgets.js"></script>
        <script src="<?=  __RESOURCES__ ?>admin/plugins/custom/prismjs/prismjs.bundle.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js" integrity="sha512-mh+AjlD3nxImTUGisMpHXW03gE6F4WdQyvuFRkjecwuWLwD2yCijw4tKA3NsEFpA1C3neiKhGXPSIGSfCYPMlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.0.2/cleave.min.js" integrity="sha512-SvgzybymTn9KvnNGu0HxXiGoNeOi0TTK7viiG0EGn2Qbeu/NFi3JdWrJs2JHiGA1Lph+dxiDv5F9gDlcgBzjfA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>