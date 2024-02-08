<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        @font-face {
            font-family: 'Kalimati';
            font-style: normal;
            font-weight: normal;
            src: url({#asset /Kalimati.ttf @encoding=dataURI});
            format('truetype');
        }

        @media print {
            @page {
                size: A4 portrait;
                margin-top: 40px;
                margin-left: 40px;
                margin-right: 10px;

                /* margin: 10mm; */
            }
        }

        body {
            margin: 0%;
            /* margin-left: 10px; */
            padding: 0;
            /* width: 100%; */
            font-weight: 100;
            font-family: 'Kalimati';
            -webkit-print-color-adjust: exact !important;
            line-height: 120$;
            font-size: 16px;
        }

        .right {
            float: right;
        }


        h4 {
            margin-left: 40%
        }

        .box {
            margin-left: 30px;
            font-size: 1em;
            margin-top: -27px;
            padding-top: 3px;

        }

        .box span {
            font-size: 0.9em;
            line-height: 1em;
        }

        .user-input {
            font-size: 16px;
            font-weight: bold;
            color: darkblue;

        }

        hr {
            height: 0.1px;
            line-height: 0.2px;
        }

        hr.new1 {
            border-top: 1px solid;
        }

        img {
            margin-top: 20px;
        }

        html,
        body {
            height: 100%;
        }



        .main {
            padding: 5px;
            width: 680px;
            /* font-family: Kalimati; */
            font-size: 16px;
        }

        .logo {
            float: left;
            clear: right;
        }

        /*
                    p {
                        text-align: justify;
                    } */

        table {
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table,
        th {
            font-weight: bold;
        }

        .sign-line {
            padding-top: 5px;
            border-top: 1px solid #000;
        }

        .left {
            float: left;
            clear: right;
        }
    </style>
    </head>

    <body>
        <div class="main">
            <header>
                {{-- <div class="logo">
                    <img src="img/govt.png">
                </div> --}}
                <center>
                    <h3></h3>
                    <h4><br />
                    </h4>
                </center>
            </header>

            <div class="left">
                <p>च.नं. </p>
            </div>
            <div style="float: right">Date:-</div>

            <p style="clear: both; padding:10px 0px;">
            <table width="100%" style="margin-bottom: 50px;">
                <thead>
                    <tr>
                        <th> Pan Id</th>
                        <th>Product</th>
                        <th>Product Value</th>
                        <!-- <th>बचत हिसाब नं</th> -->
                        <th>Vat Amount</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bills as $bill)
                    <tr>
                        <td>{{ $bill->pan_id }}</td>
                        <td>{{ $bill->item }}</td>
                        <td>{{ $bill->quantity }}</td>
                        <!-- <td>....</td> -->
                        <td>{{ $bill->vat }}</td>
                        <td>{{ $bill->total }}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>


            <footer>
                <p class="sign-line" style="float: left; clear: right;"> Director sign</p>
                <p class="sign-line" style="float: right;"> Company Sign</p>

            </footer>
        </div>
    </body>

</html>