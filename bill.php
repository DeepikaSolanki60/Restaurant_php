<?php  include 'connection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>

    <style type="text/css">
        .invoice-box{
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0,0,0,0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: Arial, Helvetica, sans-serif;
        }
        .invoice-box table{
            width: 100%;
            line-height: inherit;
            text-align: left;
        }
        .invoice-box table td{
            padding: 5px;
            vertical-align: top;
        }
        .invoice-box table tr td:nth-child(2){
            text-align: right;
        }
        .invoice-box table tr.top table td{
            padding-bottom: 20px;
        }
        .invoice-box table tr.information table td{
            padding-bottom:40px ;
        }
        .invoice-box table tr.heading td{
            background:#eee ;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }
        .invoice-box table tr.details td{
            padding-bottom: 20px ;
        }
        .invoice-box table tr.item td{
            border-bottom: 1px solid #eee;
        }
        @media only screen and (max-width:600){
            .invoice-box table tr.top table td{
                width: 100%;
                display: block;
                text-align: center;
            }
            .invoice-box table tr.information table td{
                width: 100%;
                display: block;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <h4>restautrant</h4>
                            </td>
                            <td>
                                Invoice #: 123 <br>
                                Created: October 17, 2021 <br>
                            </td>
                        </tr>
                    </table>
<!-- End the table -->
                </td>
            </tr>
            <tr class="information">
                <td colspan="2">
                    <!-- inner  -->
                    <table>
                        <tr>
                            <td>
                                Eliterjhhjkjjhjkjkjhj<br>
                                phone : 659879878689698<br>
                            </td>
                            <td>
                                wed devloper:jhjnkjhskjjnsjh<br>
                                ahafnkjjijnnkjjnfjnmnajnvmn<br>
                                Email:hgfhfajkhjkh@gmail.com
                            </td>
                        </tr>
                    </table>
                    <!-- inner End -->
                </td>
            </tr >
            <tr class="heading">
                <td>
                    payment Method
                </td>
                <td>Check #</td>
            </tr>

            <tr class="details">
                <td>Check</td>
                <td>1000</td>
            </tr>

            <tr class="heading">
                <td>item</td>
                <td>price</td>
            </tr>


            <tr class="item">
                <td>wedsite design</td>
                <td>$000000</td>
            </tr>
            <tr class="item">
                <td>hosting</td>
                <td>$000000</td>
            </tr>
            <tr class="item">
                <td>hosting</td>
                <td>$000000</td>
            </tr>
            
        </table>
    </div>
</body>
</html>