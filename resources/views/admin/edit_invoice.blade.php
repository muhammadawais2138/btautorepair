<base href="/public">
<!DOCTYPE html>
<html lang="en">
@section('title')
Edit Invoice
@endsection
<!-- Start top links -->
@include('admin.includes.headlinks')
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
       <h1 class="m-0"> Edit Invoice</h1>
     </div><!-- /.col -->
     <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active"> Edit Invoice
        </li>
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

        <li class="nav-item ">
          <a class="nav-link active" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false"><i class="fa fa-building"></i>&nbsp;&nbsp;Edit Invoice</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
     <div class="tab-content" id="custom-tabs-four-tabContent">

      <div class="tab-pane fade show active" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
        @include('frontend.includes.success')
        <form name="CarFrom" action="/update_invoice" method="POST" enctype="multipart/form-data">   
          @csrf
          <input type="hidden" name="invoice_id"  value="@php echo $invoice[0]['invoice_id'] @endphp">
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
                     <input type="date" name="invoice_created" class="form-control" value="@php echo $invoice[0]['invoice_created'] @endphp">
                   </div>
                 </div>

                 <div class="col-md-4">
                  <div class="form-group">
                   <label for="exampleInputBorder">Invoice Closed</label>
                   <input type="date" name="invoice_closed" class="form-control" value="@php echo $invoice[0]['invoice_closed'] @endphp">
                 </div>
               </div>


               <div class="col-md-4">
                <div class="form-group">
                 <label for="exampleInputBorder">Service Writer<code></code></label>
                 <input type="text" name="service_writer" placeholder="Service Writer" class="form-control" value="@php echo $invoice[0]['service_writer'] @endphp">
               </div>
             </div>

             <div class="col-md-12 mb-2" style="background-color: silver;">
              <b>Customer Information</b>
            </div>

            <div class="col-md-6">
              <div class="form-group">
               <label for="exampleInputBorder">Customer Name<code></code></label>
               <input type="text" name="customer_name" placeholder="Customer Name" class="form-control" value="@php echo $invoice[0]['customer_name'] @endphp">
             </div>
           </div>

           <div class="col-md-6">
            <div class="form-group">
             <label for="exampleInputBorder">Customer Cell Number<code></code></label>
             <input type="number" name="customer_cell_number" placeholder="Customer Cell Number" class="form-control" value="@php echo $invoice[0]['customer_cell_number'] @endphp">
           </div>
         </div>

         <div class="col-md-6">
          <div class="form-group">
           <label for="exampleInputBorder">Customer Email<code></code></label>
           <input type="email" name="customer_email" placeholder="Customer Email" class="form-control" value="@php echo $invoice[0]['customer_email'] @endphp">
         </div>
       </div>

       <div class="col-md-6">
        <div class="form-group">
         <label for="exampleInputBorder">Work<code></code></label>
         <input type="text" name="work" placeholder="Work" class="form-control" value="@php echo $invoice[0]['work'] @endphp">
       </div>
     </div>

     <div class="col-md-12">
      <div class="form-group">
       <label for="exampleInputBorder">Customer Address<code></code></label>
       <textarea name="address" class="form-control" placeholder="Customer Address">@php echo $invoice[0]['address'] @endphp</textarea>
     </div>
   </div>

   <div class="col-md-12 mb-2" style="background-color: silver;">
    <b>Vehicle Information</b>
  </div>

  <div class="col-md-12">
    <div class="form-group">
     <label for="exampleInputBorder">Vehicle<code></code></label>
     <input type="text" name="vehicle" placeholder="Vehicle" class="form-control" value="@php echo $invoice[0]['vehicle'] @endphp">
   </div>
 </div>

 <div class="col-md-4">
  <div class="form-group">
   <label for="exampleInputBorder">Engine<code></code></label>
   <input type="text" name="engine" placeholder="Engine" class="form-control" value="@php echo $invoice[0]['engine'] @endphp">
 </div>
</div>

<div class="col-md-4">
  <div class="form-group">
   <label for="exampleInputBorder">License Plate<code></code></label>
   <input type="text" name="license_plate" placeholder="License Plate" class="form-control" value="@php echo $invoice[0]['license_plate'] @endphp">
 </div>
</div>

<div class="col-md-4">
  <div class="form-group">
   <label for="exampleInputBorder">VIN<code></code></label>
   <input type="text" name="vin" placeholder="VIN" class="form-control" maxlength="17" value="@php echo $invoice[0]['vin'] @endphp">
 </div>
</div>

<div class="col-md-4">
  <div class="form-group">
   <label for="exampleInputBorder">Color<code></code></label>
   <input type="text" name="color" placeholder="Color" class="form-control" value="@php echo $invoice[0]['color'] @endphp">
 </div>
</div>

<div class="col-md-4">
  <div class="form-group">
   <label for="exampleInputBorder">Mileage In<code></code></label>
   <input type="text" name="mileage_in" placeholder="Mileage In" class="form-control" value="@php echo $invoice[0]['mileage_in'] @endphp">
 </div>
</div>

<div class="col-md-4">
  <div class="form-group">
   <label for="exampleInputBorder">Mileage Out<code></code></label>
   <input type="text" name="mileage_out" placeholder="Mileage Out" class="form-control" value="@php echo $invoice[0]['mileage_out'] @endphp">
 </div>
</div>


<div class="container-fluid">
  <div class="row">
   <div class="col-md-12 mb-2" style="background-color: silver;">
    <b>Description of Parts</b>
  </div>
</div>
@php
    $invoice_id = $invoice[0]['invoice_id'];
    $invoice_parts = DB::select('SELECT * FROM invoice_parts WHERE invoice_id = ?', [$invoice_id]);
@endphp

@foreach ($invoice_parts as $data)
<input type="hidden" name="inv_part_id[]" value="{{ $data->inv_part_id }}">

<div class="row part-row" data-part-id="{{ $data->inv_part_id }}">
  <div class="col-md-12">
    <div class="form-group">
      <label for="exampleInputBorder">Name</label>
      <input type="text" name="part_name[]" placeholder="Name" class="form-control" value="{{ $data->part_name }}">
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <label for="exampleInputBorder">Price</label>
      <input type="number" name="part_price[]" placeholder="Price" class="form-control" step="0.01" onchange="calculateExtended(this)" value="{{ $data->part_price }}">
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <label for="exampleInputBorder">Quantity</label>
      <input type="number" name="part_qty[]" placeholder="Quantity" class="form-control" step="0.01" onchange="calculateExtended(this)" value="{{ $data->part_qty }}">
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <label for="exampleInputBorder">Discount</label>
      <input type="number" name="part_discount[]" placeholder="Discount" class="form-control" step="0.01" onchange="calculateExtended(this)" value="{{ $data->part_discount }}">
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <label for="exampleInputBorder">Extended</label>
      <input type="number" name="extended[]" placeholder="Extended" class="form-control" step="0.01" readonly value="{{ $data->extended }}">
    </div>
  </div>

  <div class="col-md-6">
    <button type="button" class="btn btn-primary btn-sm" id="add-more">Add More</button>
  </div>

  <div class="col-md-6 text-right">
    <button type="button" class="btn btn-danger btn-sm remove-part-row">Delete</button>
  </div>
</div>
@endforeach

</div>



<div class="container-fluid">
  <div class="row">
   <div class="col-md-12 mb-2 mt-2" style="background-color: silver;">
    <b>Description of Labor or Service</b>
  </div>
</div>

@php
                                $invoice_id = $invoice[0]['invoice_id'];
                                $invoice_service = DB::select('SELECT * FROM invoice_service WHERE invoice_id = ?', [$invoice_id]);
                                @endphp

                                @foreach ($invoice_service as $data)
                                <input type="hidden" name="inv_ser_id[]"  value="{{ $data->inv_ser_id }}">
<div class="row service-row" data-service-id="{{ $data->inv_ser_id }}">
 
 <div class="col-md-12">
  <div class="form-group">
   <label for="exampleInputBorder">Name</label>
   <input type="text" name="service_name[]" placeholder="Name" class="form-control" value="{{ $data->service_name }}">
 </div>
</div>

<div class="col-md-3">
  <div class="form-group">
   <label for="exampleInputBorder">Labor Price</label>
   <input type="number" name="labor_price[]" placeholder="Labor Price" class="form-control" step="0.01" onchange="calculateServiceExtended(this)" value="{{ $data->labor_price }}">
 </div>
</div>

<div class="col-md-3">
  <div class="form-group">
   <label for="exampleInputBorder">HR</label>
   <input type="number" name="hour[]" placeholder="HR" class="form-control" step="0.01" onchange="calculateServiceExtended(this)" value="{{ $data->hour }}">
 </div>
</div>

<div class="col-md-3">
  <div class="form-group">
   <label for="exampleInputBorder">Discount</label>
   <input type="number" name="service_discount[]" placeholder="Discount" step="0.01" class="form-control" onchange="calculateServiceExtended(this)" value="{{ $data->service_discount }}">
 </div>
</div>

<div class="col-md-3">
  <div class="form-group">
   <label for="exampleInputBorder">Extended</label>
   <input type="number" name="service_extended[]" placeholder="Extended" step="0.01" class="form-control" readonly value="{{ $data->service_extended }}">
 </div>
</div>

<div class="col-md-6">
  <button type="button" class="btn btn-primary btn-sm" id="add-more2">Add More</button>
</div>

<div class="col-md-6 text-right">
  <button type="button" class="btn btn-danger btn-sm remove-service-row">Close</button>
</div>

</div>
@endforeach

</div>
<div class="col-md-12 mb-2 mt-2" style="background-color: silver;">
  <b>Balance Summary</b>
</div>

<div class="col-md-3">
  <label>Total Parts Amount</label>
  <input type="number" class="form-control" name="total_parts_amount" id="totalPartsAmount" step="0.01" placeholder="Total Parts Amount" readonly="" value="@php echo $invoice[0]['total_parts_amount'] @endphp">
</div>

<div class="col-md-3">
  <label>Labor Amount</label>
  <input type="number" class="form-control" name="total_labor_amount" id="totalLaborAmount" step="0.01" placeholder="Labor Amount" readonly="" value="@php echo $invoice[0]['total_labor_amount'] @endphp">
</div>

<div class="col-md-3">
  <label>Sublet Amount</label>
  <input type="number" class="form-control" name="sublet_amount" id="subletAmount" placeholder="Sublet Amount" step="0.01" oninput="calculateSubTotal()" value="@php echo $invoice[0]['sublet_amount'] @endphp">
</div>

<div class="col-md-3">
  <label>Sub Total Amount</label>
  <input type="number" class="form-control" name="sub_total_amount" id="subTotalAmount" placeholder="Sub Total Amount" step="0.01" readonly="" value="@php echo $invoice[0]['sub_total_amount'] @endphp">
</div>

<div class="col-md-3">
  <label>Fees</label>
  <input type="number" class="form-control" name="fees" step="0.01" id="fees" placeholder="Fees" value="@php echo $invoice[0]['fees'] @endphp">
</div>

<div class="col-md-3">
  <label>EPA</label>
  <input type="number" class="form-control" name="epa" step="0.01" id="epa" placeholder="EPA" value="@php echo $invoice[0]['epa'] @endphp">
</div>

<div class="col-md-3">
  <label>Shop Supplies</label>
  <input type="number" class="form-control" name="shop_supplies" step="0.01" id="shopSupplies" placeholder="Shop Supplies" value="@php echo $invoice[0]['shop_supplies'] @endphp">
</div>

<div class="col-md-3">
  <label>TAXES</label>
  <input type="number" class="form-control" name="taxes" step="0.01" id="taxes" placeholder="Taxes" value="@php echo $invoice[0]['taxes'] @endphp">
</div>

<div class="col-md-4">
  <label>Total</label>
  <input type="number" class="form-control" name="total" step="0.01" id="total" placeholder="Total" readonly value="@php echo $invoice[0]['total'] @endphp">
</div>

<div class="col-md-4">
  <label>Payments</label>
  <input type="number" class="form-control" name="payments" step="0.01" id="payments" placeholder="Payments" oninput="calculateBalanceDue()" value="@php echo $invoice[0]['payments'] @endphp">
</div>

<div class="col-md-4">
  <label>Balance Due</label>
  <input type="number" class="form-control" name="balance_due" step="0.01" id="balance_due" placeholder="Balance Due" readonly value="@php echo $invoice[0]['balance_due'] @endphp">
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
 <button type="submit" class="btn btn-primary">Update Invoice</button>
</div>
</form>
</div>
</div>
</div>


<!-- /.card -->


</div>
<!--/.col (left) -->
<!-- right column -->
<div class="col-md-6">

</div>
<!--/.col (right) -->
</div>
<!-- /.row -->
</div>
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!------ Start Footer -->
@include('admin.includes.version')
<!------ end Footer -->

</div>
<!-- ./wrapper -->
<!------ Start Footer links-->
@include('admin.includes.footer_links')
<!------ end Footer links -->

    <!-- Your existing HTML above -->

<script>
   // Function to calculate the balance due
   function calculateBalanceDue() {
       var total = parseFloat(document.getElementById('total').value) || 0;
       var payments = parseFloat(document.getElementById('payments').value) || 0;
       var balanceDue = total - payments;
       document.getElementById('balance_due').value = balanceDue.toFixed(2);
   }
 
   // Function to calculate total parts amount
   function calculateTotalPartsAmount() {
       const extendedFields = document.querySelectorAll('input[name="extended[]"]');
       let totalPartsAmount = 0;

       extendedFields.forEach(function(field) {
           const value = parseFloat(field.value) || 0;
           totalPartsAmount += value;
       });

       document.querySelector('input[name="total_parts_amount"]').value = totalPartsAmount.toFixed(2);
       calculateSubTotal(); // Update subtotal after calculating parts
       calculateTotal(); // Update total after calculating parts
   }

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

   
   // Function to calculate service extended amount
   function calculateServiceExtended(element) {
       const row = element.closest('.row');
       const price = parseFloat(row.querySelector('input[name="labor_price[]"]').value) || 0;
       const qty = parseFloat(row.querySelector('input[name="hour[]"]').value) || 0;
       const discount = parseFloat(row.querySelector('input[name="service_discount[]"]').value) || 0;
       const extendedField = row.querySelector('input[name="service_extended[]"]');

       const extendedValue = (price * qty) - discount;
       extendedField.value = extendedValue.toFixed(2);

       calculateTotalLaborAmount(); // Update total labor amount
       calculateSubTotal(); // Update subtotal
       calculateTotal(); // Update total
   }



   // Function that calculates total labor amount
   function calculateTotalLaborAmount() {
       let total = 0;

       document.querySelectorAll('input[name="service_extended[]"]').forEach(function(input) {
           total += parseFloat(input.value) || 0;
       });

       document.querySelector('input[name="total_labor_amount"]').value = total.toFixed(2);
   }

   // Update subtotal
   function calculateSubTotal() {
       const totalPartsAmount = parseFloat(document.getElementById('totalPartsAmount').value) || 0;
       const totalLaborAmount = parseFloat(document.getElementById('totalLaborAmount').value) || 0;
       const subletAmount = parseFloat(document.getElementById('subletAmount').value) || 0;

       const subTotalAmount = totalPartsAmount + totalLaborAmount + subletAmount;
       document.getElementById('subTotalAmount').value = subTotalAmount.toFixed(2);

       calculateTotal(); // Update total after calculating subtotal
   }

   // Function to calculate the grand total 
   function calculateTotal() {
       const subTotalAmount = parseFloat(document.getElementById('subTotalAmount').value) || 0;
       const fees = parseFloat(document.getElementById('fees').value) || 0;
       const epa = parseFloat(document.getElementById('epa').value) || 0;
       const shopSupplies = parseFloat(document.getElementById('shopSupplies').value) || 0;
       const taxes = parseFloat(document.getElementById('taxes').value) || 0;

       const total = subTotalAmount + fees + epa + shopSupplies + taxes;
       document.getElementById('total').value = total.toFixed(2);

       calculateBalanceDue(); // Update balance due after calculating total
   }

   // Event listeners to trigger calculations
   document.getElementById('payments').addEventListener('input', calculateBalanceDue);
   document.getElementById('fees').addEventListener('input', calculateTotal);
   document.getElementById('epa').addEventListener('input', calculateTotal);
   document.getElementById('shopSupplies').addEventListener('input', calculateTotal);
   document.getElementById('taxes').addEventListener('input', calculateTotal);

   // Handle events for dynamic parts and services
   $(document).ready(function () {
       $(document).on('input', 'input[name="part_price[]"], input[name="part_qty[]"], input[name="part_discount[]"]', function() {
           calculateExtended(this);
       });

       $(document).on('input', 'input[name="labor_price[]"], input[name="hour[]"], input[name="service_discount[]"]', function() {
           calculateServiceExtended(this);
       });

       $('#add-more').click(function () {
           var clonedRow = $('.part-row').first().clone();
           clonedRow.find('input').val('');  // Clear cloned inputs
           clonedRow.insertBefore($(this).closest('.row'));  // Insert before the "Add More" button
       });

       $('#add-more2').click(function () {
           var clonedRow = $('.service-row').first().clone();
           clonedRow.find('input').val('');  // Clear cloned inputs
           clonedRow.insertBefore($(this).closest('.row'));  // Insert before the "Add More" button
       });
   });

$(document).ready(function () {
    // Code for part row deletion
    $(document).on('click', '.remove-part-row', function () {
        var partRow = $(this).closest('.part-row');
        var partId = partRow.data('part-id'); // You need to set data-part-id on the part-row
        
        if (partId) {
            // Make an AJAX request to delete the part from the database
            $.ajax({
                url: '/delete_invoice_part/' + partId,
                type: 'DELETE',
                data: {
                    _token: '{{ csrf_token() }}' // Include CSRF token if needed
                },
                success: function (response) {
                    if(response.success) {
                        // Remove the row from UI and recalculate totals
                        partRow.remove();
                        calculateTotalPartsAmount(); // Recalculate total parts amount
                        calculateSubTotal(); // Recalculate subtotal
                        calculateTotal(); // Recalculate grand total
                        calculateBalanceDue(); // Recalculate balance due
                    } else {
                        alert('Error: ' + response.error);
                    }
                },
                error: function (xhr) {
                    // Handle errors
                    alert('Error deleting part');
                }
            });
        } else {
            partRow.remove(); // If no ID, just remove the row
            calculateTotalPartsAmount(); // Recalculate total parts amount
            calculateSubTotal();
            calculateTotal();
            calculateBalanceDue();
        }
    });
});
     $(document).ready(function () {
        // Code for service row deletion
        $(document).on('click', '.remove-service-row', function () {
            var serviceRow = $(this).closest('.service-row');
            var serviceId = serviceRow.data('service-id'); // Get the service ID

            if (serviceId) {
                // Make an AJAX request to delete the service from the database
                $.ajax({
                    url: '/delete_invoice_service/' + serviceId,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}' // Include CSRF token if needed
                    },
                    success: function (response) {
                        if (response.success) {
                            serviceRow.remove();
                            calculateTotalLaborAmount(); // Recalculate total labor amount
                            calculateSubTotal(); // Recalculate subtotal
                            calculateTotal(); // Recalculate grand total
                            calculateBalanceDue(); // Recalculate balance due
                        } else {
                            alert('Error: ' + response.error);
                        }
                    },
                    error: function (xhr) {
                        // Handle errors
                        alert('Error deleting service');
                    }
                });
            } else {
                // Just remove the row if there's no ID (unsaved service)
                serviceRow.remove();
                calculateTotalLaborAmount(); // Recalculate total labor amount
                calculateSubTotal(); // Recalculate subtotal
                calculateTotal(); // Recalculate grand total
                calculateBalanceDue(); // Recalculate balance due
            }
        });
    });
  

</script>



<!-- Your existing HTML below -->

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
