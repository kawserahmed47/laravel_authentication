@extends('master')
@section('title')
<title>USB|Application</title>
@endsection

@section('style')
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
    
@endsection
@section('content')
<nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="{{asset('image/logo.png')}}" width="30" height="30" class="d-inline-block align-top" alt="">
      USB ASIA LTD.
    </a>
   <a href="">Application</a>
<a href="{{route('viewApplication')}}">Admin</a>

</nav>
        

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-12">
            <h2 class="text-center p-3">Quotation Inquery Form</h2>
            @if (Session::get('message'))
        <p class="text-success">{{Session::get('message')}}</p>
                
            @endif

        </div>
    </div>
    <div class="row">
        <div class="col m-3 ">
            <div class="card">

                <div class="card-header">
                    Application 
                </div>

                <div class="card-body">
                    <form action="{{route('insertApplication')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Company Name and Legal
                                Status</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="inputPassword"
                                       placeholder="Company Name and Legal Status">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" name="addresss" class="form-control" id="inputPassword" placeholder="Address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Legal Representative</label>
                            <div class="col-sm-10">
                                <input type="text" name="representative" class="form-control" id="inputPassword"
                                       placeholder="Legal Representative">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Contact Person</label>
                            <div class="col-sm-10">
                                <input type="text" name="contact_person" class="form-control" id="inputPassword" placeholder="Contact Person">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Mobile</label>
                            <div class="col-sm-10">
                                <input type="tex" name="mobile" class="form-control" id="inputPassword" placeholder="+88...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="tex" name="email" class="form-control" id="inputPassword" placeholder="email@info.com">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Travel</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="travel" id="">
                                    <option value="">Select Your Travel City (Optional)</option>
                                    <option value="2">Chittagong</option>
                                    <option value="3">Sylhet</option>
                                    <option value="4">Mymensing</option>
                                    <option value="5">Rangpur</option>
                                    <option value="6">Rajshahi</option>
                                    <option value="7">Khulna</option>
                                    <option value="8">Barisal</option>
                                    <option value="9">Gazipur</option>
                                    <option value="10">Comilla</option>
                                </select>
                                <span class="text-info">(Select if travel outside of Dhaka)</span>

                            </div>
                        </div>


                  
                        <div class="card-header mt-5">
                            CERTIFICATION PROGRAMS
                        </div>

                        <table class="table table-bordered">           
                            <tbody>
                                @foreach ($programs as $program)
                                
                                <tr>
                                    <td style="width: 20%; text-align:center"><input type="checkbox" name="programs[]" value="{{$program->id}}"></td>
                                    <td>{{$program->name}}</td>
                                </tr>

                                @endforeach
                               
                            </tbody>
                        </table>


                        <div class="card-header mt-5 " style="height: 50px;">
                            <div>
                                <div class="float-left">PROCESSING UNIT</div>
                            </div>
                        </div>


                        <table id="unittable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Select</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td><input type="text" class="form-control" required id="ex3" name="unit_name" placeholder="Unit Name"></td>
                                    <td><input type="text" class="form-control" required id="ex3" name="unit_address" placeholder=" Unit Address"></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td><input type="text" class="form-control" id="ex3" name="subunit_name[]"       placeholder="If Any Sub Unit"></td>
                                    <td><input type="text" class="form-control" id="ex3" name="subunit_address[]" placeholder="If Any Sub Unit Address"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">  <p class="text-danger text-center">(IF NEED MORE SUB UNIT PLEASE CLICK ADD MORE BUTTON )</p>
                                        <div class="text-center">
                                            <a class="btn btn-outline-warning add-row">Add More Sub Unit</a>
                                        </div>
                                    
                                    </td>
                                </tr>
                            </tbody>
                        </table>


                        <div class="float-left mt-2" id="hide_div">
                            <a type="button" class="delete-row btn btn-outline-danger">Delete Select Row</a>
                        </div>
                        <div class="float-right mt-2" id="hide_div">
                            <button type="submit" class="btn btn-outline-success">Submit</button>
                        </div>
                    </form>
                    {{-- FORM END --}}
                </div>
                {{-- CARD BODY --}}
            </div>
            {{-- CARD END --}}
        </div>
        {{-- COLUMN END --}}
    </div>
    {{-- Row END --}}
</div>
{{-- Container END --}}
@endsection

@section('script')

<script>
    $(document).ready(function(){
        $('#hide_div').hide();

        $(".add-row").click(function(){
            $('#hide_div').show()
            var markup = "<tr><td class='text-center'> <input  type='checkbox' name='record'> </td><td>  <input type='text' id='ex3' placeholder='Sub Unit Name' name='subunit_name[]' class='form-control' ></td><td> <input type='text' id='ex3' name='subunit_address[]' class='form-control' placeholder='Sub Unit Address'> </td></tr>";
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


    
@endsection
