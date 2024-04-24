$(document).ready(function () {

    // Aggregator Selector
    $("#aggregator_selector").on("change", function () {
        $('#operator_selector').find('option').remove().end().append('<option value="--">--</option>').append('<option value="all">All</option>').val();
        $('#service_selector').find('option').remove().end().append('<option value="--">--</option>').append('<option value="all">All</option>').val();

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var $aggregator_option = $(this).find('option:selected');
        var aggregator_value = $aggregator_option.val();

        $.ajax({
            url: 'finance/aggregator',
            type: 'GET',
            data: { _token: CSRF_TOKEN, aggregator_value: aggregator_value },

            success: function (response) {
                $('#country_selector').html(response);
            }
        });
    });

    // service Selector
    $("#country_selector").on("change", function () {
        $('#service_selector').find('option').remove().end().append('<option value="all">All</option>').val();

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var $country_option = $(this).find('option:selected');
        var aggregator_value = $('#aggregator_selector').val();
        var country_value = $country_option.val();

        $.ajax({
            url: 'finance/operator',
            type: 'GET',
            data: { _token: CSRF_TOKEN, country_value: country_value, aggregator_value: aggregator_value },

            success: function (response) {
                $('#operator_selector').html(response);
            }
        });
    });

    // operator selector
    $("#operator_selector").on("change", function () {

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var $operator_option = $(this).find('option:selected');
        var operator_value = $operator_option.val();
        var aggregator_value = $('#aggregator_selector').val();
        var country_value = $('#country_selector').val();

        $.ajax({
            url: 'finance/service',
            type: 'GET',
            data: { _token: CSRF_TOKEN, aggregator_value: aggregator_value, country_value: country_value, operator_value: operator_value },

            success: function (response) {
                $('#service_selector').html(response);
            }
        });
    });


    // Filter-2 Start

    // Aggregator Selector
    $("#aggregator_selector1").on("change", function () {

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var $aggregator_option = $(this).find('option:selected');
        var aggregator_value = $aggregator_option.val();

        $.ajax({
            url: 'affiliate/aggregator',
            type: 'GET',
            data: { _token: CSRF_TOKEN, aggregator_value: aggregator_value },

            success: function (response) {
                $('#country_selector1').html(response);
            }
        });
    });

    // service Selector
    $("#country_selector1").on("change", function () {

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var $country_option = $(this).find('option:selected');
        var aggregator_value = $('#aggregator_selector1').val();
        var country_value = $country_option.val();

        $.ajax({
            url: 'affiliate/operator',
            type: 'GET',
            data: { _token: CSRF_TOKEN, country_value: country_value, aggregator_value: aggregator_value },

            success: function (response) {
                $('#operator_selector1').html(response);
            }
        });
    });

    // operator selector
    $("#operator_selector1").on("change", function () {

        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        var $operator_option = $(this).find('option:selected');
        var operator_value = $operator_option.val();
        var aggregator_value = $('#aggregator_selector1').val();
        var country_value = $('#country_selector1').val();

        $.ajax({
            url: 'affiliate/service',
            type: 'GET',
            data: { _token: CSRF_TOKEN, aggregator_value: aggregator_value, country_value: country_value, operator_value: operator_value },

            success: function (response) {
                $('#service_selector1').html(response);
            }
        });
    });
    // Filter-2 End

});







