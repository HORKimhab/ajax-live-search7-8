<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Search with PHP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>

<body>
    <div class="container">
        <br>
        <h2 align="center">Ajax live DATA search using jQuery PHP Mysql</h2>
        <div class="form-group">
            <div class="input-group">
                <span>Search: </span>
                <input type="text" name="search" id="search_text" placeholder="Search by Customer Name"
                    class="form-control">
            </div>
        </div>
        <br>
        <div id="result"></div>
    </div>
</body>
<script>
$(document).ready(function() {
    $("#search_text").keyup(function() {
        var txt = $(this).val();
        console.log(txt);
        if (txt != '') {
            // alert("Have Value");
            $.ajax({
                url: "fetch.php", // file internal same folder
                method: "POST",
                data: {
                    search: txt
                },
                dataType: "text",
                success: function(data) {
                    console.log(data);
                    $('#result').html(data);
                }
            });
        } else {
            $('#result').html('');
            $.ajax({
                url: "fetch.php",
                method: "POST",
                data: {
                    search: txt
                },
                dataType: "text",
                success: function(data) {
                    $('#result').html(data);
                }
            });
        }
    });
});
</script>

</html>