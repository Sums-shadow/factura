
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
<div id="invoice">

<div class="toolbar hidden-print">
    <div class="text-right">
        <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
        <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button>
    </div>
    <hr>
</div>
<div class="invoice overflow-auto  mb-5 pb-5 container">
    <div style="min-width: 600px">
        <header>
            <div class="row">
                <div class="col">
                    <a target="_blank" href="https://lobianijs.com">
                        <img src="http://lobianijs.com/lobiadmin/version/1.0/ajax/img/logo/lobiadmin-logo-text-64.png" data-holder-rendered="true" />
                        </a>
                </div>
                <div class="col company-details">
                    <h2 class="name">
                        <a target="_blank" href="https://lobianijs.com">
                        Wal company
                        </a>
                    </h2>
                    <div>455 wagenia , numero 123 Kin/Gombe</div>
                    <div>(243) 456-789-555</div>
                    <div>info@walcompany.com</div>
                </div>
            </div>
        </header>
        <main>
            <div class="row contacts">
                <div class="col invoice-to">
                    <div class="text-gray-light">Facture à:</div>
                    <h2 class="to f_name_client">Ezechiel Ngbowa</h2>
                    <div class="address f_adresse_client">796 Lokolama A3, Kin/Kalamu</div>
                    <div class="email"><a href="mailto:john@example.com" class="f_email_client">ezechielsums@gmail.com</a></div>
                </div>
                <div class="col invoice-details">
                    <h1 class="invoice-id">Facture n° 12</h1>
                    <div class="date">Date de facture: 05/04/2021</div>
                    <div class="date">Due Date: 30/10/2018</div>
                </div>
            </div>
            <table border="0" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th class="text-left">DESCRIPTION</th>
                        <th class="text-right">PRIX</th>
                        <th class="text-right">QUANTITE</th>
                        <th class="text-right">TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="no">04</td>
                        <td class="text-left"><h3>
                            <a target="_blank" href="https://www.youtube.com/channel/UC_UMEcP_kF0z4E6KbxCpV1w">
                            Machine Leno PC 504
                            </a>
                            </h3>
                            
                        </td>
                        <td class="unit">$0.00</td>
                        <td class="qty">100</td>
                        <td class="total">$0.00</td>
                    </tr>
                    <tr>
                        <td class="no">01</td>
                        <td class="text-left"><h3>Scanner CC 1004</h3></td>
                        <td class="unit">$40.00</td>
                        <td class="qty">30</td>
                        <td class="total">$1,200.00</td>
                    </tr>
                    <tr>
                        <td class="no">02</td>
                        <td class="text-left"><h3>Webcam Altar novo</h3></td>
                        <td class="unit">$40.00</td>
                        <td class="qty">80</td>
                        <td class="total">$3,200.00</td>
                    </tr>
                    <tr>
                        <td class="no">03</td>
                        <td class="text-left"><h3>Moniteur Phillip</h3></td>
                        <td class="unit">$40.00</td>
                        <td class="qty">20</td>
                        <td class="total">$800.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2">SOUS-TOTAL</td>
                        <td>$5,200.00</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2">TAXE 25%</td>
                        <td>$1,300.00</td>
                    </tr>
                    <tr>
                        <td colspan="2"></td>
                        <td colspan="2">GRAND TOTAL</td>
                        <td>$6,500.00</td>
                    </tr>
                </tfoot>
            </table>
            <div class="thanks">MERCI!</div>
            <div class="notices">
                <div>NOTE:</div>
                <div class="notice">Cette facture est pour une durée de 30 jours à daté d'aujourd'hui.</div>
            </div>
        </main>
        <footer>
            <!-- Invoice was created on a computer and is valid without the signature and seal. -->
        </footer>
    </div>
    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
    <div></div>
</div>
</div>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/form.js"></script>
</body>
</html>