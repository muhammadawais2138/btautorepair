<base href="/public">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Invoice</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin_assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin_assets/css/adminlte.min.css">
<link rel="stylesheet" href="admin_assets/css/mystyle.css" />
<link rel="stylesheet" href="css/mystyle.css">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
<style type="text/css">
.invoice {
  position: relative;
  background-color: white;
  min-height: 100vh; /* Ensure full height coverage */
  background-image: url('/images/invoice/BtAuto2.png');
  background-position: center center;
  background-repeat: no-repeat;
  background-size: 500px 500px;
  z-index: 1;
}

/* Print-specific styles */
@media print {
  .invoice::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('/images/invoice/BtAuto2.png');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: 500px 500px;
    opacity: 0.1; /* Ensure light opacity for watermark effect */
    z-index: -1; /* Ensure it appears behind content */
  }
  
  .invoice .p-3 {
    position: relative;
    z-index: 1;
  }

  /* Ensure it applies on each printed page */
  .invoice {
    page-break-inside: avoid;
  }
}
</style>


            <!-- Main content -->
           <div class="invoice p-3 mb-3">

              <!-- title row -->
              <div class="row">
                <div class="col-12" align="center">
                  <h4>
                    <img src="/images/invoice/BtAuto.jpg" style="height: 80px;" >
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>BT AUTO REPAIR SHOP</strong><br>
                   5000 Harford Rd, Baltimore, MD 21214, USA<br>
                    Phone: 410 736 3906<br>
                    Email: btautorepairusa@gmail.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>Name: {{ $invoice[0]['customer_name'] }}</strong><br>
                    <b>Phone:</b> {{ $invoice[0]['customer_cell_number'] }}<br>
                    <b>Email:</b> {{ $invoice[0]['customer_email'] }}<br>
                    <b>Work:</b> {{ $invoice[0]['work'] }}<br>
                    <b>Address:</b> {{ $invoice[0]['address'] }}
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice# M0{{ $invoice[0]['invoice_id'] }}</b><br>
                  <br>
                  <b>Invoice Created:</b> {{ $invoice[0]['invoice_created'] }}<br>
                  <b>Invoice Closed:</b> {{ $invoice[0]['invoice_closed'] }}<br>
                  <b>Service Writer:</b> {{ $invoice[0]['service_writer'] }}
                </div>
                <!-- /.col -->
                <div class="col-md-12 mb-2" style="background-color: silver;">
                          <b> <i class="fa fa-car"></i>&nbsp;Vehicle Information</b>
                        </div>

                        <div class="col-3">
                          <b>Vehicle:</b> {{ $invoice[0]['vehicle'] }}
                        </div>

                        <div class="col-3">
                          <b>Engine:</b> {{ $invoice[0]['engine'] }}
                        </div>

                        <div class="col-3">
                          <b>License Plate:</b> {{ $invoice[0]['license_plate'] }}
                        </div>

                        <div class="col-3">
                          <b>VIN:</b> {{ $invoice[0]['vin'] }}
                        </div>

                        <div class="col-3">
                          <b>Color:</b> {{ $invoice[0]['color'] }}
                        </div>

                        <div class="col-3">
                          <b>Mileage In:</b> {{ $invoice[0]['mileage_in'] }}
                        </div>

                        <div class="col-3">
                          <b>Mileage Out:</b> {{ $invoice[0]['mileage_out'] }}
                        </div>

              </div>
              <!-- /.row -->


              <!-- Table row -->
              <div class="row">
                <div class="col-md-12 mb-2 mt-2" style="background-color: silver;">
                            <b><i class="fa fa-cog"></i>&nbsp;Description of Parts</b>
                          </div>
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <table class="table table-striped">
                    <thead>
                    <tr>
                      <th style="width: 5%;">Sr</th>
                      <th style="width: 35%;">Name</th>
                      <th style="width: 15%;">Price</th>
                      <th style="width: 15%;">Quantity</th>
                      <th style="width: 15%;">Discount</th>
                      <th style="width: 15%;">Extended</th>
                    </tr>
                    </thead>
                    <tbody>
                   @php
                                $invoice_id = $invoice[0]['invoice_id'];
                                $invoice_parts = DB::select('SELECT * FROM invoice_parts WHERE invoice_id = ?', [$invoice_id]);
                                @endphp

                                @foreach ($invoice_parts as $data)
                    <tr>
                     <td style="width: 5%;">{{ $loop->iteration }}</td>
                     <td style="width: 35%;">{{ $data->part_name }}</td>
                      <td style="width: 15%;">{{ $data->part_price }}</td>
                     <td style="width: 15%;">{{ $data->part_qty }}</td>
                      <td style="width: 15%;">{{ $data->part_discount }}</td>
                      <td style="width: 15%;">$ {{ $data->extended }}</td>
                    </tr>

                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-md-12 mb-2 mt-2" style="background-color: silver;">
                            <b><i class="fa fa-users"></i>&nbsp;Description of Labor or Service</b>
                          </div>
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th style="width: 5%;">Sr</th>
                      <th style="width: 35%;">Name</th>
                      <th style="width: 15%;">Price</th>
                      <th style="width: 15%;">HR</th>
                      <th style="width: 15%;">Discount</th>
                      <th style="width: 15%;">Extended</th>
                    </tr>
                    </thead>
                    <tbody>
                   @php
                                $invoice_id = $invoice[0]['invoice_id'];
                                $invoice_service = DB::select('SELECT * FROM invoice_service WHERE invoice_id = ?', [$invoice_id]);
                                @endphp

                                @foreach ($invoice_service as $data)
                    <tr>
                      <td style="width: 5%;">{{ $loop->iteration }}</td>
                      <td style="width: 35%;">{{ $data->service_name }}</td>
                      <td style="width: 15%;">{{ $data->labor_price }}</td>
                     <td style="width: 15%;">{{ $data->hour }}</td>
                      <td style="width: 15%;">{{ $data->service_discount }}</td>
                      <td style="width: 15%;">$ {{ $data->service_extended }}</td>
                    </tr>

                    @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
                <div class="col-2"></div>
                <div class="col-8" style="font-weight: bold; font-size: 22px;" align="center">
                  *************************************************************************<br>*************************************<br>
                  ===================Thank You For Your===================<br>
                  *************************************************************************<br>*************************************<br>
                </div>
                <div class="col-2"></div>

              </div>
              <!-- /.row -->
<p style="color: #000; background-color: #000; border: 2px solid #000;"></p>
              <div class="row mt-2">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="text-muted well well-sm shadow-none" style="text-align: justify; font-weight: ; color: #000;">
                    <span style="color: #000;">
                    TERMS I hereby authorize the repair work herein set forth to be done along with the ssary materials and agree along with t responsible for or damage vehicle articles left in vehicle of fire, theft or any other any delays caused by unavailability of parts or delay in parts shipments by the tause beyond your control or supplier or transporter. I hereby grant you and/or your employees permission. streets, highways, or elsewhere for the purpose for testing and/or inspection. I understand that pursuant to said express garage beeper's lien, I have no right of possession to the above vehicle until the repairs have been paid in full the discretion of Vip Shop Managemen employees have voluntarily released the vehicle to rate the vehicle herein described storage charge of $ 20.00 per day will be levied for vehicles left 48 hours after completion of repair<br>
COMPLETION STATEMENT Replaced parts their were returned to me or I authorized repair facility to dispose them
                    </span>
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">

                  <div class="table-responsive">
                    <table class="table" style="line-height: 8px;">
                      <tr>
                        <th style="width:50%">PARTS AMOUNT:</th>
                        <td style="font-weight: bold;">$ {{ $invoice[0]['total_parts_amount'] }}</td>
                      </tr>
                      <tr>
                        <th>LABOR AMOUNT</th>
                        <td style="font-weight: bold;">$ {{ $invoice[0]['total_labor_amount'] }}</td>
                      </tr>
                      <tr>
                        <th>SUBLET AMOUNT:</th>
                        <td style="font-weight: bold;">$ {{ $invoice[0]['sublet_amount'] }}</td>
                      </tr>
                      <tr>
                        <th>SUBTOTAL:</th>
                        <td style="font-weight: bold;">$ {{ $invoice[0]['sub_total_amount'] }}</td>
                      </tr>
                      <tr>
                        <th>FEES:</th>
                        <td style="font-weight: bold;">$ {{ $invoice[0]['fees'] }}</td>
                      </tr>
                      <tr>
                        <th>EPA:</th>
                        <td style="font-weight: bold;">$ {{ $invoice[0]['epa'] }}</td>
                      </tr>
                      <tr>
                        <th>SHOP SUPPLIES:</th>
                        <td style="font-weight: bold;">$ {{ $invoice[0]['shop_supplies'] }}</td>
                      </tr>
                      <tr>
                        <th>TAXES:</th>
                        <td style="font-weight: bold;">$ {{ $invoice[0]['taxes'] }}</td>
                      </tr>
                      <tr>
                        <th>TOTAL AMOUNT:</th>
                        <td style="font-weight: bold;">$ {{ $invoice[0]['total'] }}</td>
                      </tr>
                      <tr>
                        <th>PAYMENTS:</th>
                        <td style="font-weight: bold;">$ {{ $invoice[0]['payments'] }}</td>
                      </tr>
                      <tr>
                        <th>BALANCE DUE:</th>
                        <td style="font-weight: bold;">$ {{ $invoice[0]['balance_due'] }}</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
<div class="col-2"></div>
                <div class="col-8 mt-3" style="font-weight: bold; text-align: center;">
                  *****************************************************************************
                </div>
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="/invoice-print/{{ $invoice[0]['invoice_id'] }}" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>

<!-- jQuery -->
<script src="/admin_assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin_assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin_assets/dist/js/demo.js"></script>
</body>
</html>
