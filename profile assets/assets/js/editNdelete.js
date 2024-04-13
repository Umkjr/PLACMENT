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