<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta charset="UTF-8">
    <meta name="_token" content="{{csrf_token()}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Add User</title>

    <!-- Icons font CSS-->
    <link href="{{ asset('css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" media="all">

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){ 
            $('#choose').change(function() {
                $('#titles').val($('#choose option:selected').text());
            });
        });
    </script>

</head>
<body>
<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title" style="text-align: center;">Registration Info</h2>
                    <form method="POST" action="{{ route('store') }}">
                    {{ csrf_field() }}

                        <div class="col-2">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select id="choose" name="user_id">
                                        @foreach ($tables as $table) {
                                            <option value="{{ $table->id }}" >{{ $table->name }}</option>
                                        }@endforeach
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                        <input type="hidden" id="titles" class="rs-select2 js-select-simple select--no-search" type="text" placeholder="Name" name="name" value="" readonly="readonly">
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                        <input class="rs-select2 js-select-simple select--no-search" type="text" placeholder="Address" name="address">
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                        <input class="rs-select2 js-select-simple select--no-search" type="text" placeholder="City" name="city">
                                </div>
                            </div>
                        </div>

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                        <input class="rs-select2 js-select-simple select--no-search" type="text" placeholder="State" name="state">
                                </div>
                            </div>
                        </div>
                       
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                        <input class="rs-select2 js-select-simple select--no-search" type="text" placeholder="Zip Code" name="zip_code">
                                </div>
                            </div>
                        </div>

                        {{csrf_field()}}

                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
</html>