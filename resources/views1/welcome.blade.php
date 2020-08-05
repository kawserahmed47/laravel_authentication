<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
{{--    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>--}}

    <title>Hello, USB!</title>

    <style>
        form{
            margin: 20px 0;
        }
        form input, button{
            padding: 5px;
        }
        table{
            width: 100%;
            margin-bottom: 20px;
            border-collapse: collapse;
        }
        table, th, td{
            border: 1px solid #cdcdcd;
        }
        table th, table td{
            padding: 10px;
            text-align: left;
        }
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#hide_div').hide();
            $(".add-row").click(function(){
                $('#hide_div').show()
                // var name = $("#name").val();
                // var email = $("#email").val();class="form-control" id="ex3"
                var markup = "<tr><td style='width: 20%;'> <input type='checkbox' name='record'> </td><td>  <input type='text' id='ex3' placeholder='Sub Unit Name' class='form-control' ></td><td> <input type='text' id='ex3' name='address' class='form-control' placeholder='Sub Unit Address'> </td></tr>";
                $("#unittable tbody").append(markup);


            });

            //Find and remove selected table rows
            $(".delete-row").click(function(){
                $("table tbody").find('input[name="record"]').each(function(){
                    if($(this).is(":checked")){
                        $(this).parents("tr").remove();
                    }
                });

            });
        });
    </script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col mt-5 ">

            <div class="card">
                <div class="card-header">
                    Quotation Inquery Form
                </div>
                <div class="card-body">
                    <form>


                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Company Name and Legal
                                Status</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword"
                                       placeholder="Company Name and Legal Status">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Address">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Legal Representative</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword"
                                       placeholder="Legal Representative">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Contact Person</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputPassword" placeholder="Contact Person">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Mobile</label>
                            <div class="col-sm-10">
                                <input type="tex" class="form-control" id="inputPassword" placeholder="+88...">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="tex" class="form-control" id="inputPassword" placeholder="email@info.com">
                            </div>
                        </div>


                        {{-- <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"> Tax office/No</label>
                            <div class="col-sm-10">
                                <input type="tex" class="form-control" id="inputPassword" placeholder="Tax office/No">
                            </div>
                        </div> --}}

                        {{--                        <div class="card-footer text-muted">--}}
                        {{--                          <button class="btn btn-outline-success">Submit</button>--}}
                        {{--                        </div>--}}

                        {{--..........................certification unite.........................                        --}}
                        <div class="card-header mt-5">
                            CERTIFICATION PROGRAMS
                        </div>

                        <table class="table table-bordered">
                            {{--                            <thead>--}}
                            {{--                            <tr>--}}
                            {{--                                <th scope="col">#</th>--}}
                            {{--                                <th scope="col">First</th>--}}

                            {{--                            </tr>--}}
                            {{--                            </thead>--}}
                            <tbody>
                            {{--                            <tr>--}}
                            {{--                                <th scope="row">1</th>--}}
                            {{--                                <td>Mark</td>--}}
                            {{--                            </tr>--}}
                            <tr>
                                <td style="width: 20%;"><input type="checkbox" name="subject"></td>
                                <td>Global Grganic Textile standards (GOTS)</td>
                            </tr>
                            <tr>
                                <td style="width: 20%;"><input type="checkbox" name="subject"></td>
                                <td>Organic Content Standard (OCS)</td>
                            </tr>
                            <tr>
                                <td style="width: 20%;"><input type="checkbox" name="subject"></td>
                                <td>TE Recycled Claim Standard (RCS)</td>
                            </tr>
                            <tr>
                                <td style="width: 20%;"><input type="checkbox" name="subject"></td>
                                <td>Global Recycled Standard (GRS)</td>
                            </tr>


                            </tbody>
                        </table>

                        {{--...................processing unite...............................--}}
{{--                        <div class="card-header mt-5 " style="height: 50px;">--}}
{{--                            <div>--}}
{{--                            <div class="float-left">PROCESSING UNITE</div>--}}
{{--                            <div class="float-right"> <a id="addunit" class="btn btn-outline-danger" style=" margin-top: -5px;">Add Unit</a></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <table id="unittable" class="table table-bordered">--}}
{{--                            --}}{{--                            <thead>--}}
{{--                            --}}{{--                            <tr>--}}
{{--                            --}}{{--                                <th scope="col">#</th>--}}
{{--                            --}}{{--                                <th scope="col">First</th>--}}

{{--                            --}}{{--                            </tr>--}}
{{--                            --}}{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            --}}{{--                            <tr>--}}
{{--                            --}}{{--                                <th scope="row">1</th>--}}
{{--                            --}}{{--                                <td>Mark</td>--}}
{{--                            --}}{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <td>--}}
{{--                                    <div>--}}
{{--                                        <div class="col-md-6 col-sm-6 float-left">--}}
{{--                                            <label for="">Unit Name</label>--}}
{{--                                            <br>--}}
{{--                                            <input type="text" class="form-control" id="ex3" name="unit_name">--}}
{{--                                        </div>--}}

{{--                                        <div class="col-md-6 col-sm-6 float-right">--}}
{{--                                            <label for="">Address</label>--}}
{{--                                            <br>--}}
{{--                                            <input type="text" class="form-control" id="ex3" name="address">--}}
{{--                                        </div>--}}

{{--                                    </div>--}}

{{--                                </td>--}}

{{--                                --}}{{--                                <td>Global Grganic Textile standards (GOTS)</td>--}}
{{--                            </tr>--}}
{{--               --}}

{{--                            </tbody>--}}
{{--                        </table>--}}




{{--                        <input type="text" id="name" placeholder="Name">--}}
{{--                        <input type="text" id="email" placeholder="Email Address">--}}


{{--                   ...............................sub unite............................     --}}


{{--                        <div class="card-header mt-5">--}}
{{--                            <div>--}}
{{--                            <div class="float-left"> CERTIFICATION PROGRAMS</div>--}}
{{--                            <div class="float-right">  <input type="button" class="add-row" value="Add Row" style=" margin-top: -5px;"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="card-header mt-5 " style="height: 50px;">
                            <div>
                                <div class="float-left">PROCESSING UNITE</div>
                            </div>
                        </div>

                        <table id="unittable" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Action</th>
                                <th>Name</th>
                                <th>Address</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                    <td></td>
                                <td>  <input type="text" class="form-control" id="ex3" name="unit_name" placeholder="Unit Name"></td>
{{--                                <td>  <input type="text" id="name" name="address" placeholder="Unit Address"></td>--}}
                                <td>   <input type="text" class="form-control" id="ex3" name="address" placeholder=" Unit Address"></td>
                            </tr>

                            <tr>
                                <td>
                                    
                                    <div class="float-left"> <a id="addunit" class="btn btn-outline-danger add-row" >Add More</a></div><br>

                                   
                              
                                    </td>
                            <td>  <input type="text" class="form-control" id="ex3" name="unit_name" placeholder="If any Sub Unit"></td>
{{--                                <td>  <input type="text" id="name" name="address" placeholder="Unit Address"></td>--}}
                            <td>   <input type="text" class="form-control" id="ex3" name="address" placeholder="If any Sub Address"></td>
                           
                            </tr>
                            <tr>
                                <td colspan="3">  <p class="text-danger text-center">(IF NEED MORE SUB UNIT PLEASE CLICK ADD MORE BUTTON )</p></td>
                            </tr>
                            </tbody>
                        </table>




                        <div class="float-left mt-2" id="hide_div">
                            <a type="button" class="delete-row btn btn-outline-danger" style=" ">Delete Row</a>
                            </div>

                        <button type="submit" class="btn btn-outline-danger m-3 float-right"> Submit</button>

                    </form>
                </div>
                {{--                <ul class="list-group list-group-flush">--}}
                {{--                    <li class="list-group-item">Cras justo odio</li>--}}
                {{--                    <li class="list-group-item">Dapibus ac facilisis in</li>--}}
                {{--                    <li class="list-group-item">Vestibulum at eros</li>--}}
                {{--                </ul>--}}
            </div>


        </div>
    </div>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>


<script>
    // $(document).ready(function(){
    //     $("#addunit").click(function(){
    //         // var name = $("#name").val();
    //         // var email = $("#email").val();
    //         var markup = "<tr><td><input type='text' name='unit_name'></td></tr>";
    //         $("#unittable tbody").append(markup);
    //     });

        // // Find and remove selected table rows
        // $(".delete-row").click(function(){
        //     $("table tbody").find('input[name="record"]').each(function(){
        //         if($(this).is(":checked")){
        //             $(this).parents("tr").remove();
        //         }
        //     });
        // });
    });
</script>




</body>
</html>
