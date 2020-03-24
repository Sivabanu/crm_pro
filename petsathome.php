<?php
//index.php

$connect = new PDO("mysql:host=localhost;dbname=pro", "root", "");


?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Family Members</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <br />
    <div class="container">
        <h3 align="center">Pets at Home</h3>
        <br />
        <h4 align="center">Enter Pets Details</h4>
        <br />

        <form method="post" id="insert_form2">
            <div class="table-repsonsive">
                <span id="error"></span>
                <table class="table table-bordered" id="item_table2">
                    <tr>
                        <th>Type Of Pet</th>
                        <th>Name</th>
                        <th>Breed</th>
                        <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></th>
                    </tr>
                </table>
                <div align="center">
                    <input type="submit" name="submit" class="btn btn-info" value="Insert" />
                </div>
            </div>
        </form>
    </div>
</body>

</html>

<script>
    $(document).ready(function() {
        $(document).on('click', '.add', function() {
            var html = '';
            html += '<tr>';
            html += '<td><input type="text" name="ptype[]" class="form-control item_quantity" /></td>';
            html += '<td><input type="text" name="pname[]" class="form-control item_quantity" /></td>';
            html += '<td><input type="text" name="breed[]" class="form-control item_quantity" /></td>';
            html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
            $('#item_table2').append(html);
        });

        $(document).on('click', '.remove', function() {
            $(this).closest('tr').remove();
        });

        $('#insert_form2').on('submit', function(event) {
            event.preventDefault();
            var error = '';
            $('.ptype').each(function() {
                var count = 1;
                if ($(this).val() == '') {
                    error += "<p>Select type at " + count + " Row</p>";
                    return false;
                }
                count = count + 1;
            });

            $('.pname').each(function() {
                var count = 1;
                if ($(this).val() == '') {
                    error += "<p>Select pname at " + count + " Row</p>";
                    return false;
                }
                count = count + 1;
            });

            $('.breed').each(function() {
                var count = 1;
                if ($(this).val() == '') {
                    error += "<p>Enter breed at " + count + " Row</p>";
                    return false;
                }
                count = count + 1;
            });
            var form_data = $(this).serialize();
            if (error == '') {
                $.ajax({
                    url: "insertpet.php",
                    method: "POST",
                    data: form_data,
                    success: function(data) {
                        if (data == 'ok') {
                            $('#item_table2').find("tr:gt(0)").remove();
                            $('#error').html('<div class="alert alert-success">Pets Details Saved</div>');
                        }
                    }
                });
            } else {
                $('#error').html('<div class="alert alert-danger">' + error + '</div>');
            }
        });

    });
</script>