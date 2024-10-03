  <!DOCTYPE html>
  <html lang="en">
  @section('title')
  Add Invoice
  @endsection
  <!-- Start top links -->
  @include('admin.includes.headlinks')
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- end top links -->
  <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
   <div class="wrapper">
    <!-- Start navbar -->
    @include('admin.includes.navbar')
    <!-- end navbar -->

    <!-- Start Sidebar -->
    @include('admin.includes.sidebar')
    <!-- end Sidebar -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
       <div class="row mb-2">
        <div class="col-sm-6">
         <h1 class="m-0">Invoice</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Add Invoice</li>
         </ol>
        </div><!-- /.col -->
       </div><!-- /.row -->
      </div><!-- /.container-fluid -->
     </div>
     <!-- /.content-header -->
     <section class="content">
      <div class="container-fluid">
       <div class="row">
        <!-- left column -->
        <div class="col-md-12">
         <div class="card card-primary card-outline card-outline-tabs">
          <div class="card-header p-0 border-bottom-0">
           <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
            <li class="nav-item">
             <a class="nav-link" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">
              <i class="fa fa-list">&nbsp;&nbsp;</i>Invoice Listing
             </a>
            </li>
            <li class="nav-item">
             <a class="nav-link active" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">
              <i class="fa fa-plus"></i>&nbsp;&nbsp; Add Invoice
             </a>
            </li>
           </ul>
          </div>
          <div class="card-body">
           <div class="tab-content" id="custom-tabs-four-tabContent">
            <div class="tab-pane fade" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
             @include('frontend.includes.success')
             <div class="card card-primary">
              <table id="example1" class="table table-bordered table-striped">
               <thead>
                <tr>
                 <th>ID</th>
                 <th>Customer Name</th>
                 <th>Invoice Created</th>
                 <th>Action</th>
                </tr>
               </thead>


               <tbody>

                @foreach ($invoice as $data)
                <tr>
                 <td>{{ $data->invoice_id }}</td>
                 
                 <td>
                  <b>{{ $data->customer_name }}</b>
                  
                 </td>
                 <td>
                  {{ $data->invoice_created }} 
                 </td>
                 <td>
                  <a href="/invoice/{{ $data->invoice_id }}" style="color: #000;"><i class="fa fa-eye"></i>&nbsp;View Invoice</a>
                  <a target="_blank" href="/edit_invoice/{{ $data->invoice_id }}" class="btn btn-info btn-xs" title="Edit"><i class="fa fa-edit"></i>&nbsp;Edit Invoice</a>&nbsp;&nbsp;
                        <a onclick="return confirm('Are you sure to Delete?');" href="/delete_invoice/{{ $data->invoice_id }}" class="btn btn-danger btn-xs" title="Delete"><i class="fa fa-trash"></i></a>
                 </td>
                </tr>
                @endforeach

               </tbody>


              </table>
             </div>
            </div>
            <div class="tab-pane fade show active" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
             @include('frontend.includes.success')
             <form name="CarFrom" action="/save_invoice" method="POST" enctype="multipart/form-data">   
              @csrf
              <div class="col-md-12">
               <div class="container-fluid">
                <div class="row">

                 <div class="col-md-12">
                  <div class="row">

                   <div class="col-md-12">
                    <div class="card">



                     <div class="card-body">
                      <div class="row">

                       <div class="col-md-12 mb-2" style="background-color: silver;">
                        <b>Basic</b>
                       </div>

                       <div class="col-md-4">
                        <div class="form-group">
                         <label for="exampleInputBorder">Invoice Created</label>
                         <input type="date" name="invoice_created" class="form-control">
                        </div>
                       </div>

                       <div class="col-md-4">
                        <div class="form-group">
                         <label for="exampleInputBorder">Invoice Closed</label>
                         <input type="date" name="invoice_closed" class="form-control">
                        </div>
                       </div>


                       <div class="col-md-4">
                        <div class="form-group">
                         <label for="exampleInputBorder">Service Writer<code></code></label>
                         <input type="text" name="service_writer" placeholder="Service Writer" class="form-control">
                        </div>
                       </div>

                       <div class="col-md-12 mb-2" style="background-color: silver;">
                        <b>Customer Information</b>
                       </div>

                       <div class="col-md-6">
                        <div class="form-group">
                         <label for="exampleInputBorder">Customer Name<code></code></label>
                         <input type="text" name="customer_name" placeholder="Customer Name" class="form-control">
                        </div>
                       </div>

                       <div class="col-md-6">
                        <div class="form-group">
                         <label for="exampleInputBorder">Customer Cell Number<code></code></label>
                         <input type="number" name="customer_cell_number" placeholder="Customer Cell Number" class="form-control">
                        </div>
                       </div>

                       <div class="col-md-6">
                        <div class="form-group">
                         <label for="exampleInputBorder">Customer Email<code></code></label>
                         <input type="email" name="customer_email" placeholder="Customer Email" class="form-control">
                        </div>
                       </div>

                       <div class="col-md-6">
                        <div class="form-group">
                         <label for="exampleInputBorder">Work<code></code></label>
                         <input type="text" name="work" placeholder="Work" class="form-control">
                        </div>
                       </div>

                       <div class="col-md-12">
                        <div class="form-group">
                         <label for="exampleInputBorder">Customer Address<code></code></label>
                         <textarea name="address" class="form-control" placeholder="Customer Address"></textarea>
                        </div>
                       </div>

                       <div class="col-md-12 mb-2" style="background-color: silver;">
                        <b>Vehicle Information</b>
                       </div>

                       <div class="col-md-12">
                        <div class="form-group">
                         <label for="exampleInputBorder">Vehicle<code></code></label>
                         <input type="text" name="vehicle" placeholder="Vehicle" class="form-control">
                        </div>
                       </div>

                       <div class="col-md-4">
                        <div class="form-group">
                         <label for="exampleInputBorder">Engine<code></code></label>
                         <input type="text" name="engine" placeholder="Engine" class="form-control">
                        </div>
                       </div>

                       <div class="col-md-4">
                        <div class="form-group">
                         <label for="exampleInputBorder">License Plate<code></code></label>
                         <input type="text" name="license_plate" placeholder="License Plate" class="form-control">
                        </div>
                       </div>

                       <div class="col-md-4">
                        <div class="form-group">
                         <label for="exampleInputBorder">VIN<code></code></label>
                         <input type="text" name="vin" placeholder="VIN" class="form-control" maxlength="17">
                        </div>
                       </div>

                       <div class="col-md-4">
                        <div class="form-group">
                         <label for="exampleInputBorder">Color<code></code></label>
                         <input type="text" name="color" placeholder="Color" class="form-control">
                        </div>
                       </div>

                       <div class="col-md-4">
                        <div class="form-group">
                         <label for="exampleInputBorder">Mileage In<code></code></label>
                         <input type="text" name="mileage_in" placeholder="Mileage In" class="form-control">
                        </div>
                       </div>

                       <div class="col-md-4">
                        <div class="form-group">
                         <label for="exampleInputBorder">Mileage Out<code></code></label>
                         <input type="text" name="mileage_out" placeholder="Mileage Out" class="form-control">
                        </div>
                       </div>


                       <div class="container-fluid">
                        <div class="row">
                         <div class="col-md-12 mb-2" style="background-color: silver;">
                          <b>Description of Parts</b>
                         </div>
                        </div>

                        <div class="row part-row">
                         <div class="col-md-12">
                          <div class="form-group">
                           <label for="exampleInputBorder">Name</label>
                           <input type="text" name="part_name[]" placeholder="Name" class="form-control">
                          </div>
                         </div>

                         <div class="col-md-3">
                          <div class="form-group">
                           <label for="exampleInputBorder">Price</label>
                           <input type="number" name="part_price[]" placeholder="Price" class="form-control" step="0.01" onchange="calculateExtended(this)">
                          </div>
                         </div>

                         <div class="col-md-3">
                          <div class="form-group">
                           <label for="exampleInputBorder">Quantity</label>
                           <input type="number" name="part_qty[]" placeholder="Quantity" class="form-control" step="0.01" onchange="calculateExtended(this)">
                          </div>
                         </div>

                         <div class="col-md-3">
                          <div class="form-group">
                           <label for="exampleInputBorder">Discount</label>
                           <input type="number" name="part_discount[]" placeholder="Discount" class="form-control" step="0.01" onchange="calculateExtended(this)">
                          </div>
                         </div>

                         <div class="col-md-3">
                          <div class="form-group">
                           <label for="exampleInputBorder">Extended</label>
                           <input type="number" name="extended[]" placeholder="Extended" class="form-control" step="0.01" readonly>
                          </div>
                         </div>




                         <div class="col-md-6">
                          <button type="button" class="btn btn-primary btn-sm" id="add-more">Add More</button>
                         </div>

                         <div class="col-md-6 text-right">
                          <button type="button" class="btn btn-danger btn-sm remove-row">Close</button>
                         </div>
                        </div>

                       </div>



                       <div class="container-fluid">
                        <div class="row">
                         <div class="col-md-12 mb-2 mt-2" style="background-color: silver;">
                          <b>Description of Labor or Service</b>
                         </div>
                        </div>

                        <div class="row service-row">
                         <div class="col-md-12">
                          <div class="form-group">
                           <label for="exampleInputBorder">Name</label>
                           <input type="text" name="service_name[]" placeholder="Name" class="form-control">
                          </div>
                         </div>

                         <div class="col-md-3">
                          <div class="form-group">
                           <label for="exampleInputBorder">Labor Price</label>
                           <input type="number" name="labor_price[]" placeholder="Labor Price" class="form-control" step="0.01" onchange="calculateServiceExtended(this)">
                          </div>
                         </div>

                         <div class="col-md-3">
                          <div class="form-group">
                           <label for="exampleInputBorder">HR</label>
                           <input type="number" name="hour[]" placeholder="HR" class="form-control" step="0.01" onchange="calculateServiceExtended(this)">
                          </div>
                         </div>

                         <div class="col-md-3">
                          <div class="form-group">
                           <label for="exampleInputBorder">Discount</label>
                           <input type="number" name="service_discount[]" placeholder="Discount" step="0.01" class="form-control" onchange="calculateServiceExtended(this)">
                          </div>
                         </div>

                         <div class="col-md-3">
                          <div class="form-group">
                           <label for="exampleInputBorder">Extended</label>
                           <input type="number" name="service_extended[]" placeholder="Extended" step="0.01" class="form-control" readonly>
                          </div>
                         </div>

                         <div class="col-md-6">
                          <button type="button" class="btn btn-primary btn-sm" id="add-more2">Add More</button>
                         </div>

                         <div class="col-md-6 text-right">
                          <button type="button" class="btn btn-danger btn-sm remove-row2">Close</button>
                         </div>
                        </div>

                       </div>
                       <div class="col-md-12 mb-2 mt-2" style="background-color: silver;">
                        <b>Balance Summary</b>
                       </div>

                       <div class="col-md-3">
                        <label>Total Parts Amount</label>
                        <input type="number" class="form-control" name="total_parts_amount" id="totalPartsAmount" step="0.01" placeholder="Total Parts Amount" readonly="">
                       </div>

                       <div class="col-md-3">
                        <label>Labor Amount</label>
                        <input type="number" class="form-control" name="total_labor_amount" id="totalLaborAmount" step="0.01" placeholder="Labor Amount" readonly="">
                       </div>

                       <div class="col-md-3">
                        <label>Sublet Amount</label>
                        <input type="number" class="form-control" name="sublet_amount" id="subletAmount" placeholder="Sublet Amount" step="0.01" oninput="calculateSubTotal()">
                       </div>

                       <div class="col-md-3">
                        <label>Sub Total Amount</label>
                        <input type="number" class="form-control" name="sub_total_amount" id="subTotalAmount" placeholder="Sub Total Amount" step="0.01" readonly="">
                       </div>

                       <div class="col-md-3">
                        <label>Fees</label>
                        <input type="number" class="form-control" name="fees" step="0.01" id="fees" placeholder="Fees">
                       </div>

                       <div class="col-md-3">
                        <label>EPA</label>
                        <input type="number" class="form-control" name="epa" step="0.01" id="epa" placeholder="EPA">
                       </div>

                       <div class="col-md-3">
                        <label>Shop Supplies</label>
                        <input type="number" class="form-control" name="shop_supplies" step="0.01" id="shopSupplies" placeholder="Shop Supplies">
                       </div>

                       <div class="col-md-3">
                        <label>TAXES</label>
                        <input type="number" class="form-control" name="taxes" step="0.01" id="taxes" placeholder="Taxes">
                       </div>

                       <div class="col-md-4">
                        <label>Total</label>
                        <input type="number" class="form-control" name="total" step="0.01" id="total" placeholder="Total" readonly value="1000">
                       </div>

                       <div class="col-md-4">
                        <label>Payments</label>
                        <input type="number" class="form-control" name="payments" step="0.01" id="payments" placeholder="Payments" oninput="calculateBalanceDue()">
                       </div>

                       <div class="col-md-4">
                        <label>Balance Due</label>
                        <input type="number" class="form-control" name="balance_due" step="0.01" id="balance_due" placeholder="Balance Due" readonly>
                       </div>

                      </div>
                     </div>
                    </div>
                   </div>

                  </div>
                 </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                 <a href="/dashboard" class="btn btn-danger">Cancel</a>&nbsp;&nbsp;&nbsp;
                 <button type="submit" class="btn btn-primary">Add Invoice</button>
                </div>
               </form>
              </div>
             </div>
            </div>
           </div>
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
           <!-- Your right column content goes here -->
          </div>
          <!--/.col (right) -->
         </div>
         <!-- /.row -->
        </div><!-- /.container-fluid -->
       </section>
       <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
       <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->

      <!------ Start Footer -->
      @include('admin.includes.version')
      <!------ end Footer -->

     </div>
     <!-- ./wrapper -->
     <!------ Start Footer links-->
     @include('admin.includes.footer_links')
     <!------ end Footer links -->

     <script>
      function calculateBalanceDue() {
       var total = parseFloat(document.getElementById('total').value) || 0;
       var payments = parseFloat(document.getElementById('payments').value) || 0;
       var balanceDue = total - payments;
       document.getElementById('balance_due').value = balanceDue.toFixed(2);
      }
     </script>

     <script>
      $(document).ready(function () {
       $('#add-more').click(function () {
        var clonedRow = $('.part-row').first().clone();
            clonedRow.find('input').val('');  // Clear the values in the cloned inputs
            clonedRow.insertBefore($(this).closest('.row'));  // Insert the cloned row before the "Add More" button
           });

        // Delegate the event to handle dynamic elements
        $(document).on('click', '.remove-row', function () {
         $(this).closest('.part-row').remove();
        });
       });
      </script>

      <script>
       $(document).ready(function () {
        $('#add-more2').click(function () {
         var clonedRow = $('.service-row').first().clone();
            clonedRow.find('input').val('');  // Clear the values in the cloned inputs
            clonedRow.insertBefore($(this).closest('.row'));  // Insert the cloned row before the "Add More" button
           });

        // Delegate the event to handle dynamic elements
        $(document).on('click', '.remove-row2', function () {
         $(this).closest('.service-row').remove();
        });
       });
      </script>


      <script>
       function calculateExtended(element) {
    // Find the parent row of the changed element
    const row = element.closest('.row');

    // Get the values from the corresponding input fields
    const price = parseFloat(row.querySelector('input[name="part_price[]"]').value) || 0;
    const qty = parseFloat(row.querySelector('input[name="part_qty[]"]').value) || 0;
    const discount = parseFloat(row.querySelector('input[name="part_discount[]"]').value) || 0;
    const extendedField = row.querySelector('input[name="extended[]"]');

    // Calculate the extended value
    const extendedValue = (price * qty) - discount;

    // Set the extended value in the corresponding input field
    extendedField.value = extendedValue.toFixed(2); // Set to 2 decimal places for currency

    // Call the function to calculate the total parts amount
    calculateTotalPartsAmount();
   }

   function calculateTotalPartsAmount() {
    // Get all extended fields
    const extendedFields = document.querySelectorAll('input[name="extended[]"]');
    let totalPartsAmount = 0;

    // Loop through each extended field and sum their values
    extendedFields.forEach(function(field) {
     const value = parseFloat(field.value) || 0;
     totalPartsAmount += value;
    });

    // Set the total parts amount in the corresponding input field
    document.querySelector('input[name="total_parts_amount"]').value = totalPartsAmount.toFixed(2);
   }
  </script>



  <script>
   function calculateServiceExtended(element) {
    // Find the parent row of the changed element
    const row = element.closest('.row');

    // Get the values from the corresponding input fields
    const price = parseFloat(row.querySelector('input[name="labor_price[]"]').value) || 0;
    const qty = parseFloat(row.querySelector('input[name="hour[]"]').value) || 0;
    const discount = parseFloat(row.querySelector('input[name="service_discount[]"]').value) || 0;
    const extendedField = row.querySelector('input[name="service_extended[]"]');

    // Calculate the extended value
    const extendedValue = (price * qty) - discount;

    // Set the extended value in the corresponding input field
    extendedField.value = extendedValue.toFixed(2); // Set to 2 decimal places for currency

    // Update the total labor amount
    calculateTotalLaborAmount();
   }

   function calculateTotalLaborAmount() {
    let total = 0;

    // Loop through all service_extended[] fields and sum their values
    document.querySelectorAll('input[name="service_extended[]"]').forEach(function(input) {
     total += parseFloat(input.value) || 0;
    });

    // Set the total in the total_labor_amount input field
    document.querySelector('input[name="total_labor_amount"]').value = total.toFixed(2);
   }
  </script>


  <script>
   function calculateSubTotal() {
    const totalPartsAmount = parseFloat(document.getElementById('totalPartsAmount').value) || 0;
    const totalLaborAmount = parseFloat(document.getElementById('totalLaborAmount').value) || 0;
    const subletAmount = parseFloat(document.getElementById('subletAmount').value) || 0;

    const subTotalAmount = totalPartsAmount + totalLaborAmount + subletAmount;
    document.getElementById('subTotalAmount').value = subTotalAmount.toFixed(2);
   }
  </script>

  <script>
  // Function to calculate the total
  function calculateTotal() {
   const subTotalAmount = parseFloat(document.getElementById('subTotalAmount').value) || 0;
   const fees = parseFloat(document.getElementById('fees').value) || 0;
   const epa = parseFloat(document.getElementById('epa').value) || 0;
   const shopSupplies = parseFloat(document.getElementById('shopSupplies').value) || 0;
   const taxes = parseFloat(document.getElementById('taxes').value) || 0;

    // Multiply all values together
    const total = subTotalAmount + fees + epa + shopSupplies + taxes;

    // Display the result in the Total input
    document.getElementById('total').value = total.toFixed(2); // Rounding to 2 decimal places
   }

  // Add event listeners to trigger calculation when any input changes
  document.getElementById('fees').addEventListener('input', calculateTotal);
  document.getElementById('epa').addEventListener('input', calculateTotal);
  document.getElementById('shopSupplies').addEventListener('input', calculateTotal);
  document.getElementById('taxes').addEventListener('input', calculateTotal);
 </script> 
</body>
</html>
<style>
 .images-preview-div img
 {
  padding: 10px;
  max-width: 100px;
 }

 .myDiv{
  display:none;
 }

 .myDiv5{
  display:none;
 }

</style>
