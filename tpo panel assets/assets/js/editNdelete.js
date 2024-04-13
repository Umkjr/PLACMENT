$(document).ready(function () {

    $('.deletebtn').on('click', function () {

        $('#deletemodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#delete_id').val(data[0]);

    });
});
$(document).ready(function () {

    $('.deletebtn2').on('click', function () {

        $('#deletemodal2').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#delete_id2').val(data[0]);

    });
});


$(document).ready(function () {

    $('.editbtn').on('click', function () {

        $('#editmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#cid').val(data[0]);
        $('#cname').val(data[1]);
        $('#cutoff').val(data[2]);
        $('#domain').val(data[3]);
        $('#year').val(data[4]);
        $('#seats').val(data[5]);
    });
});

$(document).ready(function () {

    $('.viewbtn').on('click', function () {

        $('#viewmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#view_id').val(data[0]);

    });
});

$(document).ready(function () {

    $('.removebtn').on('click', function () {

        $('#removemodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#remove_id').val(data[0]);

    });
});

$(document).ready(function () {

    $('.domainbtn').on('click', function () {

        $('#domainmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#domain_id').val(data[0]);

    });
});

$(document).ready(function () {

    $('.viewdetailbtn').on('click', function () {

        $('#viewdetailmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#detail_id').val(data[0]);

    });
});

$(document).ready(function () {

    $('.passbtn').on('click', function () {

        $('#passmodal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        console.log(data);

        $('#id').val(data[0]);
        $('#fname').val(data[1]);
        $('#username').val(data[2]);
        $('#password').val(data[3]);
    });
});