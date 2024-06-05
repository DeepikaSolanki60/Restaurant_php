<?php include 'connection.php'; ?>
<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/bill.css">
    <title>Bill</title>
    <script>
         function MyLoad(){
            const cols=document.getElementsByTagName("input");
            for (let index=0; index <cols.length; index++){
                cols[index].addEventListener('change', function(){
                    var ls_num = cols[index].name;
                    Total(ls_no);
                });
            }
         }


   
        function Total(ls_no) {
            var base =document.getElementsByName(ls_no);

            var ls_sum = 0;
            for(let index =0; index <base.length; index++){
                var ls_base = base[index].value;
                ls_num =+ls_sum + +ls_base;
            }
            document.getElementById(ls_no + "_tatal").value = ls_sum;
        }
    </script>
</head>

<body onload="MyLoad()">
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
                                <label>
                                    Name:
                                    <input type="text" name="name_of_custember" /><br>
                                </label>
                                <label>
                                    Email:
                                    <input type="email" name="Email" /><br>
                                </label>
                                <label>
                                    Number:
                                    <input type="text" name="cMobaile_no" /><br>
                                </label>
                            </td>
                            <td>
                                <label>
                                    Address
                                    <input type="text" name="address" />
                                </label>
                            </td>
                        </tr>
                    </table>
                    <!-- inner End -->
                </td>
            </tr>
            <tr class="heading">
                <td>
                    payment Method
                </td>
                <td><select name="payment_mode">
                        <option>Cash</option>
                        <option>Online</option>
                        <option>Check</option>
                    </select></td>
            </tr>

            <!-- <tr class="details">
                <td>Check</td>
                <td>1000</td>
            </tr> -->

            <tr class="heading">
                <td>item</td>
                <td>price</td>
            </tr>


            <tr class="item">
                <td>wedsite design</td>
                <td><input type="text" name="col1"></td>
            </tr>
            <tr class="item">
                <td>hosting</td>
                <td><input type="text" name="col1"></td>
            </tr>
            <tr class="item">
                <td>hosting</td>
                <td><input type="text" name="col1"></td>
            </tr>
            <tr class="heading">
                <td>
                    Total Amount<input type="text" name="col1_total">
                </td>
            </tr>
            
        </table>
    </div>
</body>

</html>