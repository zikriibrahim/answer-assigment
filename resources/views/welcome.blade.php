<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .box-header.with-border {
                border-bottom: 1px solid #f4f4f4;
            }
            .box-header {
                color: #444;
                display: block;
                padding: 10px;
                position: relative;
            }
            .box.box-success {
                border-top-color: #00a65a;
            }
            .box.box-danger {
                border-top-color: #dd4b39;
            }
            .box {
                position: relative;
                border-radius: 3px;
                background: #fff;
                border-top: 3px solid #d2d6de;
                margin-bottom: 20px;
                width: 100%;
            }
            .box, .small-box {
                box-shadow: 0 1px 1px rgb(0 0 0 / 10%);
            }
            .box-header .box-title, .box-header>.fa, .box-header>.glyphicon, .box-header>.ion {
                display: inline-block;
                font-size: 18px;
                margin: 0;
                line-height: 1;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <div class="container p-5">
            <div class="row">
                <div class="form-group p-0">
                    <input class="form-control input-lg" id="inputorder" type="text" placeholder="Please insert your order here...">
                </div>
            </div>
            <div class="row align-items-start justify-center">
                <div class="col p-0">
                    <button type = "button" class="btn btn-lg btn-primary w-100" id="btnnormal">NORMAL ORDER</button>
                </div>
                <div class="col p-0">
                    <button type = "button" class="btn btn-lg btn-success w-100" id="btnvip">VIP ORDER</button>
                </div>
            </div>
        </div>

        <div class="container p-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="box box-danger">
                        <div class="box-header with-border">
                            <h3 class="box-title">Pending Order</h3>
                        </div>
                        <div class="box-body" id="pendingorder">
                            <table class="table table-bordered example1">
                                <thead>
                                    <tr>
                                        <th class="text-center">Rank</th>
                                        <th>Order Name</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i=1;
                                    $vip='VIP';
                                    $normal='NORMAL';
                                    $orders = DB::select('select * from orders where type = ? order by status,id', [1]);
                                    @endphp
                                    @foreach($orders as $order)
                                    <tr>
                                        <td class="text-center">{{ $i++ }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>
                                            @if($order->status =='1')
                                            {
                                                {!! $vip !!}
                                            }
                                            @else{
                                                {!! $normal !!}
                                            }
                                            @endif
                                        
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row align-items-start justify-center">
                        <div id="displayTime"></div>
                        <div class="col">
                            <button type = "button" class="btn btn-lg btn-success w-100" id="start">+ BOT</button>
                        </div>
                        <div class="col">
                            <button type = "button" class="btn btn-lg btn-danger w-100" id="stop">- BOT</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box box-success ">
                        <div class="box-header with-border">
                            <h3 class="box-title">Complete Order</h3>
                        </div>
                        <div class="box-body" id="completeorder">
                            <table class="table table-bordered example1">
                                <thead>
                                    <tr>
                                        <th class="text-center">Rank</th>
                                        <th>Order Name</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i=1;
                                    $vip='VIP';
                                    $normal='NORMAL';
                                    $orders = DB::select('select * from orders where type = ?', [2]);
                                    @endphp
                                    @foreach($orders as $order)
                                    <tr>
                                        <td class="text-center">{{ $i++ }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->status }}
                                        <td>
                                            @if($order->status =='1')
                                            {
                                                {!! $vip !!}
                                            }
                                            @else{
                                                {!! $normal !!}
                                            }
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </body>
    <script>
        $("#btnnormal").on("click",function(){
            let val_input =  $("#inputorder").val();
            let val_status = '2';
            let text = "Are you sure to proceed Normal Order";
            if (val_input != '') {
                if (confirm(text) == true)
                {
                    $.ajax({
                        url: '/getorder/'+val_input+'/'+val_status,
                        type: "GET",
                        dataType:"json" ,
                        success: function(data){ // What to do if we succeed
                            $("#pendingorder").load(location.href + " #pendingorder");
                            alert('Order Success');
                        }
                    });
                }
            }else{
                alert('Please insert your order.');
            }

            
        });

        $("#btnvip").on("click",function(){
            let val_input =  $("#inputorder").val();
            let val_status = '1';
            let text = "Are you sure to proceed VIP Order";
            if (val_input != '') {
                if (confirm(text) == true)
                {
                    $.ajax({
                        url: '/getorder/'+val_input+'/'+val_status,
                        type: "GET",
                        dataType:"json" ,
                        success: function(data){ // What to do if we succeed
                            $("#pendingorder").load(location.href + " #pendingorder");
                            alert('Order Success');
                        }
                    });
                }
            }else{
                alert('Please insert your order.');
            }
        });

        function showTime(){
            //check database
            $.ajax({
                url: '/getdata',
                type: "GET",
                dataType:"json" ,
                success: function(data){ // What to do if we succeed
                    $("#pendingorder").load(location.href + " #pendingorder");
                    $("#completeorder").load(location.href + " #completeorder");
                    console.log('Complete Order');
                }
            });
        }
        
        
        $("#start").on("click",function(){
            const interval = setInterval("showTime()", 10000);
            setInterval(interval);
            $("#stop").on("click",function(){
                alert('Stop');
                clearInterval(interval); 
            });
        });





    </script>
    
</html>
