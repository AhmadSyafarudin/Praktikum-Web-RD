<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>

    <style>
        #print td {
            text-align: center;
            padding: 15px;          
        }

        #list, #container {
            display: flex;
        }

        #kolom1, #kolom2 {
            justify-content: center;
            padding: 15px;

        }

        h3 {
            margin-left: 70px;
        }

        #print {
            margin-top: 20px;
            margin-left: 20px;
        }
        
        form {
            padding: 10px;
            background-color: lightblue;
            margin-right: 77%;
        }
    </style>
</head>
<body>
    
    <form action="" method="post">
    <h3>Daftar Harga</h3>
    <div id="list">
        <div id="kolom1">
            <ol>Mangga</ol>
            <ol>Jambu</ol>
            <ol>Salak</ol>
        </div>
        <div id="kolom2">
            <p>Rp15.000</p>
            <p>Rp13.000</p>
            <p>Rp10.000</p>
        </div>
    </div>
    <div id="container">
        <div id="kolom1">
        <label for="mangga">Mangga</label>
        <br>
        <label for="jambu">Jambu</label>
        <br>
        <label for="salak">Salak</label>
        </div>
        <div id="kolom2">
        <input type="number" name="mangga" id="mangga" value="0">
        <br>
        <input type="number" name="jambu" id="jambu" value="0">
        <br>
        <input type="number" name="salak" id="salak" value="0">
        <br>
        </div>
    </div>
        <input type="submit" name="submit" value="Bayar" style="margin-left: 95px;">
    </form>

    <div id="print"></div>

    <?php
        require_once ("struk.php");
    ?>

    <script >
        var mangga = '<?php echo $struk->mangga; ?>';
		var jambu = '<?php echo $struk->jambu; ?>';
		var salak = '<?php echo $struk->salak; ?>';
        var jmlmangga = '<?php echo $struk->jmlmangga; ?>';
		var jmljambu = '<?php echo $struk->jmljambu; ?>';
		var jmlsalak = '<?php echo $struk->jmlsalak; ?>';
        var total = '<?php echo $struk->total; ?>';
        
        
			
		var t1 = "<table><tr><td colspan='3'>KANTIN ITERA</td></tr><tr><td colspan='3'>------------------------------------</td></tr><tr><td>Buah :</td><td>Jumlah :</td><td>Harga :</td></tr>";
        var mgg = "<tr><td>1. Jambu </td><td>"+jmljambu+"</td><td>"+jambu+"</td></tr><tr><td>2. Salak </td><td>"+jmlsalak+"</td><td>"+salak+"</td></tr>";
        var mgg1 = "'<tr><td>1. Mangga </td><td>"+jmlmangga+"</td><td>"+mangga;      
        var jmb = "<tr><td>1. Mangga </td><td>"+jmlmangga+"</td><td>"+mangga+"</td></tr><tr><td>2. Salak </td><td>"+jmlsalak+"</td><td>"+salak+"</td></tr>";
        var jmb1 = "><tr><td>1. Jambu </td><td>"+jmljambu+"</td><td>"+jambu;
        var slk = "<tr><td>1. Jambu </td><td>"+jmlmangga+"</td><td>"+mangga+"</td></tr><tr><td>2. Jambu </td><td>"+jmljambu+"</td><td>"+jambu+"</td></tr>"; 
        var slk1 = "<tr><td>1. Salak </td><td>"+jmlsalak+"</td><td>"+salak;
        var all = "<tr><td>1. Jambu </td><td>"+jmlmangga+"</td><td>"+mangga+"</td></tr><tr><td>2. Jambu </td><td>"+jmljambu+"</td><td>"+jambu+"</td></tr><tr><td>3. Salak </td><td>"+jmlsalak+"</td><td style='padding-left : 50px'>"+salak+"</td></tr>";
        var total = "<tr><td colspan='3'>------------------------------------</td></tr><tr><td>Total :</td><td colspan='2' style='padding-left  : 100px;'>"+total+"</td></tr></table>"; 
        
        if (mangga == 0 && jambu == 0 && salak ==0) {
            document.getElementById("print").innerHTML = "Ayo Belanja Sekarang";
        } else if (jambu == 0 && salak == 0) {
            document.getElementById("print").innerHTML = t1 + mgg1 + "<br>" + total;
        } else if (mangga == 0 && salak == 0) {
            document.getElementById("print").innerHTML = t1 + jmb1 + total;
        } else if (jambu == 0 && mangga == 0) {
            document.getElementById("print").innerHTML = t1 + slk1 + total;
        } else if (mangga == 0) {
            document.getElementById("print").innerHTML = t1 + mgg + total;
        } else if (jambu == 0) {
            document.getElementById("print").innerHTML = t1 + jmb + total;
        } else if (slk == 0) {
            document.getElementById("print").innerHTML = t1 + slk + total;
        } else {
            document.getElementById("print").innerHTML = t1 + all + total;
        }
               
    </script>
</body>
</html>

