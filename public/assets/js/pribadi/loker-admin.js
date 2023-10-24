
$(document).ready(function() {
    var t = $('#loker').DataTable({
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true,
        stateSave: true,
        columnDefs: [{
            searchable: false,
            orderable: false,
            targets: 0,
        }, ],
        order: [
            [1, 'asc']
        ],

    });

    t.on('order.dt search.dt', function() {
        let i = 1;

        t.cells(null, 0, {
            search: 'applied',
            order: 'applied'
        }).every(function(cell) {
            this.data(i++);
        });
    }).draw();
});
    

function Submit() {
    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
    var formData = new FormData(document.getElementById('validationForm'));


    $.ajax({
        type: 'POST',
        url: 'store',
        data: formData,
        contentType: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': CSRF_TOKEN,
        },
        success: function(response) {
            if (response.success) {
               document.getElementById('back').click();
            } else {
                // Handle validation errors
                var errors = response.errors;
                var errorMessages = '';
                for (var key in errors) {
                    errorMessages += errors[key] + '<br>';
                }
                document.getElementById('error-messages').style.display = "block";
                $('#error-messages').html(errorMessages);
            }
        }
    });
}

function Update(id) {
    var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
    var data = $('#validationForm-Update').serialize();
    $.ajax({
        type: 'POST',
        url: 'update/' + id,
        data: data,
        headers: {
            'X-CSRF-TOKEN': CSRF_TOKEN,
        },
        success: function(response) {
            if (response.success) {
                $('#closed2').click();
                document.getElementById('alert-success').style.display = "block";
                setTimeout(function() {
                    location.reload();
                    // Reload the page after a delay
                }, 2000);
            } else {
                // Handle validation errors
                var errors = response.errors;
                var errorMessages = '';
                for (var key in errors) {
                    errorMessages += errors[key] + '<br>';
                }
                document.getElementById('error-messages2').style.display = "block";
                $('#error-messages2').html(errorMessages);
            }
        }
    });
}
    

