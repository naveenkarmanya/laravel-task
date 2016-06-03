$(document).ready(function () {

    $('#example').DataTable({
        "processing": true,
        "serverSide": true,
        "sPaginationType": "full_numbers",
        "ajax": "ajaxcall",
        "columns": [
            {"data": "Id"},
            {"data": "Name"},
            {"data": "Offset"},
            {"data": "Created"},
            {
                "bSortable": false, "aTargets": [0],
                "targets": -1,
                "data": null,
                "render": function (data, type, full, meta) {
                    return "<a href='dataTimeZone/" + data.Id + "'><button class='one'>EDIT</button></a>" + " " + "<a href='dataTimeZoneDelete/" + data.Id + "'><button class='del' value='" + data.Id + "'>DELETE</button></a>" + " " + "<a href='ViewdataTimeZone/" + data.Id + "'><button class='view' value='" + JSON.stringify(data) + "'>VIEW</a></button>"

                }
            }
        ]


    });
});







