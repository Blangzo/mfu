$(document).ready(function () {
    menuItemHighlight();
    toggleContainer();
    initializeCourseTable();
});

var menuItemHighlight = function () {
    $('.nav-link').on('click', function () {
        event.preventDefault();
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });
}

var toggleContainer = function () {
    $('.group-button').on('click', function () {

        var ariaExpanded = $(this).attr('aria-expanded');

        if (ariaExpanded == 'false') {
            $('.toggle-icon', this).removeClass('oi-chevron-bottom').addClass('oi-chevron-top');
        }
        if (ariaExpanded == 'true') {
            $('.toggle-icon', this).removeClass('oi-chevron-top').addClass('oi-chevron-bottom');
        }
    });
}

var initializeCourseTable = function () {
    $('#course-table').DataTable({
        //"scrollX": true,
        "pageLength": 25,
        "autoWidth": true,
        "orderCellsTop": true,
        "responsive": true,
        "dom": 'lfrtip'
    });
}