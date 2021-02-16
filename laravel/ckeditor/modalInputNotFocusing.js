$(document).on({'show.bs.modal': function () {
    $(this).removeAttr('tabindex');
} }, '.modal');