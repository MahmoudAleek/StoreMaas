<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>brands</title>
    <link rel="stylesheet" href="{{ asset('frontend/Css/Styles.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/Css/dashbord.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body>

    <!--Main Navigation-->
    @include('layouts.admin.body.header')


    <main style="margin-top: 58px">
        @yield('admin')
    </main>
    <!--Main layout-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('frontend/javascript/Javascript.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"></script>



    <script type="text/javascript">
        function test() {
            //alert(this.val());
            let subcatId = $(this).data('subcatid');
            alert('test function ' + subcatId);
        }
        $(document).ready(function() {


            // $('#EditSubCat_btn').click(function() {
            //     alert('lashlaksf');

            //     let subcatId = this.attr("data-subcat-id");
            //     alert(subcatId);
            // });



            $('select[name="category_id"]').on('change', function() {
                const category_id = $(this).val();
                if (category_id) {
                    //alert("test" + category_id);
                    $.ajax({
                        url: "{{ url('category/subcategory/ajax') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            let d = $('select[name="subcategory_id"]').empty();

                            $.each(data, function(key, value) {
                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .name + '</option');
                            });
                        }
                    });
                    //alert("test asd " + category_id);

                } else {
                    alert('something went wrong');
                }
            });
        });
    </script>


</body>

</html>
