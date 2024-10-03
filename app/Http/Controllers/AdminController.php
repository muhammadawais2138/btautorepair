<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon; 
use App;
use Hash;
use Session;
use Image;


class AdminController extends Controller
{

public function add_invoice_service(Request $req) {
    $validated = $req->validate([
        'service_name' => 'required'
    ]);

    $invoiceId = $req->input('invoice_id'); // Get invoice ID

    // Prepare service data
    $serviceData = [];
    $serviceNames = $req->input('service_name', []);
    $serviceLaborPrices = $req->input('labor_price', []);
    $serviceHours = $req->input('hour', []);
    $serviceDiscounts = $req->input('service_discount', []);
    $serviceExtendeds = $req->input('service_extended', []);

    foreach ($serviceNames as $key => $serviceName) {
        $serviceData[] = [
            'invoice_id' => $invoiceId,
            'service_name' => $serviceName,
            'labor_price' => $serviceLaborPrices[$key] ?? 0,
            'hour' => $serviceHours[$key] ?? 0,
            'service_discount' => $serviceDiscounts[$key] ?? 0,
            'service_extended' => $serviceExtendeds[$key] ?? 0,
        ];
    }

    // Insert invoice_service data
    DB::table('invoice_service')->insert($serviceData);

    // Get the IDs of newly inserted records
    $lastInsertId = DB::getPdo()->lastInsertId();
    $newServiceIds = DB::table('invoice_service')->where('invoice_id', $invoiceId)->pluck('id');

    return response()->json([
        'success' => true,
        'message' => 'Services added successfully.',
        'service_ids' => $newServiceIds // Return the IDs of the newly inserted records
    ]);
}



  // ================Save Invoice=================

// public function save_invoice(Request $req) {
//     // Ensure the customer_name input is an array
//     $customerNames = $req->input('customer_name');

//     // Check if customer_name is an array
//     if (!is_array($customerNames)) {
//         return back()->with('error', 'Invalid data format.');
//     }

//     $quiz_data = [];

//     foreach ($customerNames as $key => $customer_name) {
//         $quiz_data[] = [
//             'invoice_created' => $req->input('invoice_created'),
//             'invoice_closed' => $req->input('invoice_closed'),
//             'service_writer' => $req->input('service_writer'),
//             'customer_name' => $customer_name,
//             'customer_cell_number' => $req->input('customer_cell_number'),
//             'customer_email' => $req->input('customer_email'),
//             'address' => $req->input('address'),
//             'vehicle' => $req->input('vehicle'),
//             'engine' => $req->input('engine'),
//             'license_plate' => $req->input('license_plate'),
//             'vin' => $req->input('vin'),
//             'color' => $req->input('color'),
//             'mileage_in' => $req->input('mileage_in'),
//             'mileage_out' => $req->input('mileage_out'),
//             'part_name' => $req->input('part_name')[$key],
//             'part_price' => $req->input('part_price')[$key],
//             'part_qty' => $req->input('part_qty')[$key],
//             'part_discount' => $req->input('part_discount')[$key],
//             'extended' => $req->input('extended')[$key],
//             // Add other fields here.
//         ];
//     }

//     $insert = DB::table('invoice')->insert($quiz_data);

//     if ($insert) {
//         return back()->with('success', 'Saved Successfully');
//     } else {
//         return back()->with('error', 'Data Not Saved, Technical Error');
//     }
// }


public function save_invoice(Request $req) {
    // Validate incoming data
    $validated = $req->validate([
        'customer_name' => 'required'
    ]);

    // Retrieve the inputs
    $invoiceData = [
        'invoice_created' => $req->input('invoice_created'),
        'invoice_closed' => $req->input('invoice_closed'),
        'service_writer' => $req->input('service_writer'),
        'customer_name' => $req->input('customer_name'),
        'customer_cell_number' => $req->input('customer_cell_number'),
        'customer_email' => $req->input('customer_email'),
        'address' => $req->input('address'),
        'vehicle' => $req->input('vehicle'),
        'engine' => $req->input('engine'),
        'license_plate' => $req->input('license_plate'),
        'vin' => $req->input('vin'),
        'color' => $req->input('color'),
        'mileage_in' => $req->input('mileage_in'),
        'mileage_out' => $req->input('mileage_out'),
        'total_parts_amount' => $req->input('total_parts_amount'),
        'total_labor_amount' => $req->input('total_labor_amount'),
        'sublet_amount' => $req->input('sublet_amount'),
        'sub_total_amount' => $req->input('sub_total_amount'),
        'fees' => $req->input('fees'),
        'epa' => $req->input('epa'),
        'shop_supplies' => $req->input('shop_supplies'),
        'taxes' => $req->input('taxes'),
        'total' => $req->input('total'),
        'payments' => $req->input('payments'),
        'balance_due' => $req->input('balance_due'),
    ];

    // Save invoice data
    $invoiceId = DB::table('invoice')->insertGetId($invoiceData);

    // Prepare parts data
    $partsData = [];
    $partNames = $req->input('part_name', []);
    $partPrices = $req->input('part_price', []);
    $partQtys = $req->input('part_qty', []);
    $partDiscounts = $req->input('part_discount', []);
    $extendeds = $req->input('extended', []);

    foreach ($partNames as $key => $partName) {
        $partsData[] = [
            'invoice_id' => $invoiceId,
            'part_name' => $partName,
            'part_price' => $partPrices[$key] ?? 0,
            'part_qty' => $partQtys[$key] ?? 0,
            'part_discount' => $partDiscounts[$key] ?? 0,
            'extended' => $extendeds[$key] ?? 0,
        ];
    }

    // Insert invoice_parts data
    DB::table('invoice_parts')->insert($partsData);

    // Prepare service data
    $serviceData = [];
    $serviceNames = $req->input('service_name', []);
    $serviceLaborPrices = $req->input('labor_price', []);
    $serviceHours = $req->input('hour', []);
    $serviceDiscounts = $req->input('service_discount', []);
    $serviceExtendeds = $req->input('service_extended', []);

    foreach ($serviceNames as $key => $serviceName) {
        $serviceData[] = [
            'invoice_id' => $invoiceId,
            'service_name' => $serviceName,
            'labor_price' => $serviceLaborPrices[$key] ?? 0,
            'hour' => $serviceHours[$key] ?? 0,
            'service_discount' => $serviceDiscounts[$key] ?? 0,
            'service_extended' => $serviceExtendeds[$key] ?? 0,
        ];
    }

    // Insert invoice_service data
    DB::table('invoice_service')->insert($serviceData);

    return back()->with('success', 'Saved Successfully');
}


public function edit_invoice($invoice_id){
  $invoice = DB::table('invoice')
  ->where('invoice_id', '=', $invoice_id)
  ->get();
  $invoice = json_decode($invoice, true);
  return view('admin.edit_invoice', ['invoice'=>$invoice]);
}

public function update_invoice(Request $req) {
    // Validate incoming data
    $validated = $req->validate([
       'customer_name' => 'required',
    ]);

    // Retrieve the invoice ID
    $invoiceId = $req->input('invoice_id');

    // Prepare invoice data for update
    $invoiceData = [
        'invoice_created' => $req->input('invoice_created'),
        'invoice_closed' => $req->input('invoice_closed'),
        'service_writer' => $req->input('service_writer'),
        'customer_name' => $req->input('customer_name'),
        'customer_cell_number' => $req->input('customer_cell_number'),
        'customer_email' => $req->input('customer_email'),
        'address' => $req->input('address'),
        'vehicle' => $req->input('vehicle'),
        'engine' => $req->input('engine'),
        'license_plate' => $req->input('license_plate'),
        'vin' => $req->input('vin'),
        'color' => $req->input('color'),
        'mileage_in' => $req->input('mileage_in'),
        'mileage_out' => $req->input('mileage_out'),
        'total_parts_amount' => $req->input('total_parts_amount'),
        'total_labor_amount' => $req->input('total_labor_amount'),
        'sublet_amount' => $req->input('sublet_amount'),
        'sub_total_amount' => $req->input('sub_total_amount'),
        'fees' => $req->input('fees'),
        'epa' => $req->input('epa'),
        'shop_supplies' => $req->input('shop_supplies'),
        'taxes' => $req->input('taxes'),
        'total' => $req->input('total'),
        'payments' => $req->input('payments'),
        'balance_due' => $req->input('balance_due'),
    ];

    // Update the invoice data
    DB::table('invoice')->where('invoice_id', $invoiceId)->update($invoiceData);

    // Update parts data
    $partNames = $req->input('part_name', []);
    $partPrices = $req->input('part_price', []);
    $partQtys = $req->input('part_qty', []);
    $partDiscounts = $req->input('part_discount', []);
    $extendeds = $req->input('extended', []);
    $partIds = $req->input('inv_part_id', []); // Part IDs for updating existing parts

    foreach ($partIds as $key => $partId) {
        if (!empty($partId) && isset($partNames[$key])) {
            // Update existing parts
            DB::table('invoice_parts')->where('inv_part_id', $partId)->update([
                'part_name' => $partNames[$key],
                'part_price' => $partPrices[$key] ?? 0,
                'part_qty' => $partQtys[$key] ?? 0,
                'part_discount' => $partDiscounts[$key] ?? 0,
                'extended' => $extendeds[$key] ?? 0,
            ]);
        }
    }

    // Insert new parts
    foreach ($partNames as $key => $partName) {
        if (empty($partIds[$key]) && isset($partNames[$key])) {
            DB::table('invoice_parts')->insert([
                'invoice_id' => $invoiceId, // associate with the current invoice
                'part_name' => $partName,
                'part_price' => $partPrices[$key] ?? 0,
                'part_qty' => $partQtys[$key] ?? 0,
                'part_discount' => $partDiscounts[$key] ?? 0,
                'extended' => $extendeds[$key] ?? 0,
            ]);
        }
    }

    // Update service data
    $serviceNames = $req->input('service_name', []);
    $serviceLaborPrices = $req->input('labor_price', []);
    $serviceHours = $req->input('hour', []);
    $serviceDiscounts = $req->input('service_discount', []);
    $serviceExtendeds = $req->input('service_extended', []);
    $serviceIds = $req->input('inv_ser_id', []); // Assuming service_id for updating services

    foreach ($serviceIds as $key => $serviceId) {
        if (!empty($serviceId) && isset($serviceNames[$key])) {
            // Update existing services
            DB::table('invoice_service')->where('inv_ser_id', $serviceId)->update([
                'service_name' => $serviceNames[$key],
                'labor_price' => $serviceLaborPrices[$key] ?? 0,
                'hour' => $serviceHours[$key] ?? 0,
                'service_discount' => $serviceDiscounts[$key] ?? 0,
                'service_extended' => $serviceExtendeds[$key] ?? 0,
            ]);
        }
    }

    // Insert new services
    foreach ($serviceNames as $key => $serviceName) {
        if (empty($serviceIds[$key]) && isset($serviceNames[$key])) {
            DB::table('invoice_service')->insert([
                'invoice_id' => $invoiceId, // associate with the current invoice
                'service_name' => $serviceName,
                'labor_price' => $serviceLaborPrices[$key] ?? 0,
                'hour' => $serviceHours[$key] ?? 0,
                'service_discount' => $serviceDiscounts[$key] ?? 0,
                'service_extended' => $serviceExtendeds[$key] ?? 0,
            ]);
        }
    }

    return back()->with('success', 'Updated Successfully');
}



public function update_invoice_old(Request $req) {
    // Validate incoming data
    $validated = $req->validate([
       'customer_name' => 'required'
    ]);

    // Retrieve the invoice ID
    $invoiceId = $req->input('invoice_id');

    // Prepare invoice data for update
    $invoiceData = [
        'invoice_created' => $req->input('invoice_created'),
        'invoice_closed' => $req->input('invoice_closed'),
        'service_writer' => $req->input('service_writer'),
        'customer_name' => $req->input('customer_name'),
        'customer_cell_number' => $req->input('customer_cell_number'),
        'customer_email' => $req->input('customer_email'),
        'address' => $req->input('address'),
        'vehicle' => $req->input('vehicle'),
        'engine' => $req->input('engine'),
        'license_plate' => $req->input('license_plate'),
        'vin' => $req->input('vin'),
        'color' => $req->input('color'),
        'mileage_in' => $req->input('mileage_in'),
        'mileage_out' => $req->input('mileage_out'),
        'total_parts_amount' => $req->input('total_parts_amount'),
        'total_labor_amount' => $req->input('total_labor_amount'),
        'sublet_amount' => $req->input('sublet_amount'),
        'sub_total_amount' => $req->input('sub_total_amount'),
        'fees' => $req->input('fees'),
        'epa' => $req->input('epa'),
        'shop_supplies' => $req->input('shop_supplies'),
        'taxes' => $req->input('taxes'),
        'total' => $req->input('total'),
        'payments' => $req->input('payments'),
        'balance_due' => $req->input('balance_due'),
    ];

    // Update the invoice data
    DB::table('invoice')->where('invoice_id', $invoiceId)->update($invoiceData);

    // Update parts data
    $partsData = [];
    $partNames = $req->input('part_name', []);
    $partPrices = $req->input('part_price', []);
    $partQtys = $req->input('part_qty', []);
    $partDiscounts = $req->input('part_discount', []);
    $extendeds = $req->input('extended', []);
    $partIds = $req->input('part_id', []); // Assuming you pass part_id for updating parts

    foreach ($partNames as $key => $partName) {
        $partsData[] = [
            'part_name' => $partName,
            'part_price' => $partPrices[$key] ?? 0,
            'part_qty' => $partQtys[$key] ?? 0,
            'part_discount' => $partDiscounts[$key] ?? 0,
            'extended' => $extendeds[$key] ?? 0,
        ];

         DB::table('invoice_parts')->where('invoice_id', $invoiceId)->update($partsData);

       
    }

    // Update service data
    $serviceData = [];
    $serviceNames = $req->input('service_name', []);
    $serviceLaborPrices = $req->input('labor_price', []);
    $serviceHours = $req->input('hour', []);
    $serviceDiscounts = $req->input('service_discount', []);
    $serviceExtendeds = $req->input('service_extended', []);
    $serviceIds = $req->input('service_id', []); // Assuming you pass service_id for updating services

    foreach ($serviceNames as $key => $serviceName) {
        $serviceData[] = [
            'service_name' => $serviceName,
            'labor_price' => $serviceLaborPrices[$key] ?? 0,
            'hour' => $serviceHours[$key] ?? 0,
            'service_discount' => $serviceDiscounts[$key] ?? 0,
            'service_extended' => $serviceExtendeds[$key] ?? 0,
        ];


        DB::table('invoice_service')->where('invoice_id', $invoiceId)->update($serviceData);
       
    }

    return back()->with('success', 'Updated Successfully');
}


public function deleteInvoicePart($partId) {
    DB::table('invoice_parts')->where('inv_part_id', $partId)->delete();
    return response()->json(['success' => 'Part deleted successfully']);
}

public function deleteInvoiceService($serviceId) {
    DB::table('invoice_service')->where('inv_ser_id', $serviceId)->delete();
    return response()->json(['success' => 'Service deleted successfully']);
}




function update_invoice22222222222222(Request $req){

 $validation = $req->validate([
  'picture_name' => 'required',
]);

 if ($validation) {
  $gallery_id = $req->get('gallery_id');
  $picture_name = $req->get('picture_name');
  
     $update = DB::table('gallery')->where('gallery_id', $gallery_id)->update([
       "picture_name"=>$picture_name,
       "picture_page_url"=>strtolower($picture_page_url),
       
     ]);

     if ($update) {
       return back()->with('success', 'Updated Successfully');
     }
     else{
       return back()->with('error', 'Data Not Updated, Technical Error');
     }
   }

   else{

    return back()->withInput()->withErrors($validation);
  }
} 


public function update_invoice222(Request $req) 
{
    // Validate incoming data
    $validated = $req->validate([
        'customer_name' => 'required|string|max:255',
        'invoice_created' => 'required|date',
        'invoice_closed' => 'nullable|date',
        'service_writer' => 'nullable|string|max:255',
        'customer_cell_number' => 'nullable|string|max:15',
        'customer_email' => 'nullable|email|max:255',
        'address' => 'nullable|string|max:255',
        'vehicle' => 'nullable|string|max:255',
        'engine' => 'nullable|string|max:255',
        'license_plate' => 'nullable|string|max:20',
        'vin' => 'nullable|string|max:17',
        'color' => 'nullable|string|max:30',
        'mileage_in' => 'nullable|integer',
        'mileage_out' => 'nullable|integer',
        'total_parts_amount' => 'nullable|numeric',
        'total_labor_amount' => 'nullable|numeric',
        'sublet_amount' => 'nullable|numeric',
        'sub_total_amount' => 'nullable|numeric',
        'fees' => 'nullable|numeric',
        'epa' => 'nullable|numeric',
        'shop_supplies' => 'nullable|numeric',
        'taxes' => 'nullable|numeric',
        'total' => 'nullable|numeric',
        'payments' => 'nullable|numeric',
        'balance_due' => 'nullable|numeric',
        'part_name' => 'array',
        'part_name.*' => 'nullable|string|max:255',
        'part_price' => 'array',
        'part_price.*' => 'nullable|numeric',
        'part_qty' => 'array',
        'part_qty.*' => 'nullable|integer',
        'part_discount' => 'array',
        'part_discount.*' => 'nullable|numeric',
        'extended' => 'array',
        'extended.*' => 'nullable|numeric',
        'service_name' => 'array',
        'service_name.*' => 'nullable|string|max:255',
        'labor_price' => 'array',
        'labor_price.*' => 'nullable|numeric',
        'hour' => 'array',
        'hour.*' => 'nullable|numeric',
        'service_discount' => 'array',
        'service_discount.*' => 'nullable|numeric',
        'service_extended' => 'array',
        'service_extended.*' => 'nullable|numeric',
    ]);

    // Check for existing invoice ID in the request to either create or update
    $invoiceId = $req->input('invoice_id');

    if ($invoiceId) {
        // Update the existing invoice
        DB::table('invoice')->where('id', $invoiceId)->update(array_filter($validated));
    } else {
        // Save new invoice data and retrieve the ID
        $invoiceId = DB::table('invoice')->insertGetId(array_filter($validated));
    }

    // Prepare parts data
    $partsData = [];
    $partNames = $req->input('part_name', []);
    $partPrices = $req->input('part_price', []);
    $partQtys = $req->input('part_qty', []);
    $partDiscounts = $req->input('part_discount', []);
    $extendeds = $req->input('extended', []);

    foreach ($partNames as $key => $partName) {
        $partsData[] = [
            'invoice_id' => $invoiceId,
            'part_name' => $partName,
            'part_price' => $partPrices[$key] ?? 0,
            'part_qty' => $partQtys[$key] ?? 0,
            'part_discount' => $partDiscounts[$key] ?? 0,
            'extended' => $extendeds[$key] ?? 0,
        ];
    }

    // Insert or update parts data
    if (!empty($partsData)) {
        DB::table('invoice_parts')->where('invoice_id', $invoiceId)->delete(); // Remove existing parts to avoid duplicates
        DB::table('invoice_parts')->insert($partsData);
    }

    // Prepare service data
    $serviceData = [];
    $serviceNames = $req->input('service_name', []);
    $serviceLaborPrices = $req->input('labor_price', []);
    $serviceHours = $req->input('hour', []);
    $serviceDiscounts = $req->input('service_discount', []);
    $serviceExtendeds = $req->input('service_extended', []);

    foreach ($serviceNames as $key => $serviceName) {
        $serviceData[] = [
            'invoice_id' => $invoiceId,
            'service_name' => $serviceName,
            'labor_price' => $serviceLaborPrices[$key] ?? 0,
            'hour' => $serviceHours[$key] ?? 0,
            'service_discount' => $serviceDiscounts[$key] ?? 0,
            'service_extended' => $serviceExtendeds[$key] ?? 0,
        ];
    }

    // Insert or update services data
    if (!empty($serviceData)) {
        DB::table('invoice_service')->where('invoice_id', $invoiceId)->delete(); // Remove existing services to avoid duplicates
        DB::table('invoice_service')->insert($serviceData);
    }

    return back()->with('success', 'Saved Successfully');
}


public function delete_invoice($invoice_id){
  $delete = DB::delete('DELETE FROM invoice WHERE invoice_id  = ?',[$invoice_id]);

  if ($delete) {
    return back()->with('success', 'Deleted Successfully');
  }
  else{
   return back()->with('error', 'Data Not Deleted, Technical Error');
 }
}





// =============End=============
  public function sendEmail(Request $request)
  {
    $to_name = 'Recipient Name';
    $to_email = 'alimuhtsham4@gmail.com';
    $data = array('name' => 'John Doe', 'body' => 'Test message');

    try {
      Mail::send('emails.test_mail', $data, function($message) use ($to_name, $to_email) {
        $message->to($to_email, $to_name)
        ->subject('Test Email');
        $message->from('info@btautorepair.us', 'BtAutoepair');
      });

      $message = 'Email sent successfully!';
    } catch (\Exception $e) {
      $message = 'Failed to send email. Error: ' . $e->getMessage();
    }

    return $message;

  }

  public function contactUsEmail(Request $request)
  {
    $validation = $request->validate([
      'name' => 'required', 
      'email' => 'required', 
      'subject' => 'required',
      'message' => 'required'         
    ]);

    $data=array(
      "name"=>$request->get('name'),
      "email"=>$request->get('email'),
       "subject"=>$request->get('subject'),
      "message"=>$request->get('message')
    );

    Mail::send('emails.contact_us_email', ['data'=>$data], function($message) use($request){
      $message->to('info@btautorepair.us');
      $message->subject('New Query From BtAutoepair');
    });

    return redirect()->back()->with('success', 'Your message has been sent!');
  }

// =============Start Services==============
  // =========== Save Function =============

  public function save_services(request $req){

    $validation = $req->validate([
     'services' => 'required',
     'picture' => 'required',
     'details' => 'required'
     

   ]);

    if ($validation) {
     $services= $req->get('services');
     $services_page_url = $req->get('services');
       $services_page_url = str_replace(' ', '-', $services_page_url); // Replaces all spaces with hyphens.
   $services_page_url = preg_replace('/[^A-Za-z0-9\-]?/', '', $services_page_url); // Removes special chars.
   $services_page_url = preg_replace('/-+/', '-', $services_page_url); // Replaces multiple hyphens with single one.

   $picture = $req->file('picture');    
   $picture = time().'.'.$req->picture->extension();        
        //move file

   $req->picture->move(public_path('uploads/services'), $picture);

   $data=array(
    "services"=>$services,
    "services_page_url"=>strtolower($services_page_url),
    "picture"=>$picture,
    "details"=>$req->get('details'),
    "page_title"=>$req->get('page_title'),
    "page_keywords"=>$req->get('page_keywords'),
    "page_description"=>$req->get('page_description'),

  );
   $insert = DB::table('services')->insert($data);

   if ($insert) {
     return back()->with('success', 'Saved Successfully');
   }
   else{
     return back()->with('error', 'Data Not Saved, Technical Error');
   }
 }

 else{

  return back()->withInput()->withErrors($validation);
}

}

// ======== Delete Function ==============

public function delete_services($service_id){
  $delete = DB::delete('DELETE FROM services WHERE service_id  = ?',[$service_id]);

  if ($delete) {
    return back()->with('success', 'Deleted Successfully');
  }
  else{
   return back()->with('error', 'Data Not Deleted, Technical Error');
 }
}

// ============ Edit Function =============

public function edit_services($service_id){
  $service = DB::table('services')
  ->where('service_id', '=', $service_id)
  ->get();
  $service = json_decode($service, true);
  return view('admin.edit_services', ['service'=>$service]);
} 

function update_services(Request $req){

 $validation = $req->validate([
   'services' => 'required',
   'details' => 'required'

 ]);

 if ($validation) {
  $service_id = $req->get('service_id');
  $services = $req->get('services');
  $services_page_url = $req->get('services');
      $services_page_url = str_replace(' ', '-', $services_page_url); // Replaces all spaces with hyphens.
      $services_page_url = preg_replace('/[^A-Za-z0-9\-]?/', '', $services_page_url); // Removes special chars.
      $services_page_url = preg_replace('/-+/', '-', $services_page_url); // Replaces multiple hyphens with single one.
      $hidden_pic = $req->get('hidden_pic');
      $picture = $req->file('picture');

      if ($picture=='') {
       $picture = $hidden_pic;
     }

     else{
       $picture = time().'.'.$req->picture->extension();     
         //move file
       $req->picture->move(public_path('uploads/services'), $picture);
     }

     $update = DB::table('services')->where('service_id', $service_id)->update([
      "services"=>$req->get('services'), 
      "services_page_url"=>strtolower($services_page_url),
      "page_description"=>$req->get('page_description'),
      "picture"=>$picture, 
      "page_title"=>$req->get('page_title'),
      "page_keywords"=>$req->get('page_keywords'),
      "details"=>$req->get('details')
    ]);

     if ($update) {
       return back()->with('success', 'Updated Successfully');
     }
     else{
       return back()->with('error', 'Data Not Updated, Technical Error');
     }
   }

   else{

    return back()->withInput()->withErrors($validation);
  }
} 


// ================ End Services ===========================

// =============Start Brands==============
  // =========== Save Function =============

  public function save_brands(request $req){

    $validation = $req->validate([
     'brand_name' => 'required',
     'logo' => 'required'
     

   ]);

    if ($validation) {
     $brand_name= $req->get('brand_name');

   $logo = $req->file('logo');    
   $logo = time().'.'.$req->logo->extension();        
        //move file

   $req->logo->move(public_path('uploads/brands'), $logo);

   $data=array(
    "brand_name"=>$brand_name,
    "logo"=>$logo

  );
   $insert = DB::table('brands')->insert($data);

   if ($insert) {
     return back()->with('success', 'Saved Successfully');
   }
   else{
     return back()->with('error', 'Data Not Saved, Technical Error');
   }
 }

 else{

  return back()->withInput()->withErrors($validation);
}

}

// ======== Delete Function ==============

public function delete_brands($brand_id){
  $delete = DB::delete('DELETE FROM brands WHERE brand_id  = ?',[$brand_id]);

  if ($delete) {
    return back()->with('success', 'Deleted Successfully');
  }
  else{
   return back()->with('error', 'Data Not Deleted, Technical Error');
 }
}

// ============ Edit Function =============

public function edit_brands($brand_id){
  $brand = DB::table('brands')
  ->where('brand_id', '=', $brand_id)
  ->get();
  $brand = json_decode($brand, true);
  return view('admin.edit_brands', ['brand'=>$brand]);
} 

function update_brands(Request $req){

 $validation = $req->validate([
   'brand_name' => 'required'
   

 ]);

 if ($validation) {
  $brand_id = $req->get('brand_id');
  $brand_name = $req->get('brand_name');
      $hidden_pic = $req->get('hidden_pic');
      $logo = $req->file('logo');

      if ($logo=='') {
       $logo = $hidden_pic;
     }

     else{
       $logo = time().'.'.$req->logo->extension();     
         //move file
       $req->logo->move(public_path('uploads/brands'), $logo);
     }

     $update = DB::table('brands')->where('brand_id', $brand_id)->update([
      "brand_name"=>$req->get('brand_name'), 
      "logo"=>$logo
    ]);

     if ($update) {
       return back()->with('success', 'Updated Successfully');
     }
     else{
       return back()->with('error', 'Data Not Updated, Technical Error');
     }
   }

   else{

    return back()->withInput()->withErrors($validation);
  }
} 


// ================ End Brands ===========================

// =============Start Product==============
  // =========== Save Function =============

public function save_products(request $req){

  $validation = $req->validate([
   'products' => 'required',
   'price' => 'required',
   'picture' => 'required',
   'details' => 'required'
 ]);

  if ($validation) {
   $products= $req->get('products');
   $products_page_url = $req->get('products');
       $products_page_url = str_replace(' ', '-', $products_page_url); // Replaces all spaces with hyphens.
   $products_page_url = preg_replace('/[^A-Za-z0-9\-]?/', '', $products_page_url); // Removes special chars.
   $products_page_url = preg_replace('/-+/', '-', $products_page_url); // Replaces multiple hyphens with single one.

   $picture = $req->file('picture');    
   $picture = time().'.'.$req->picture->extension();        
        //move file

   $req->picture->move(public_path('uploads/products'), $picture);

   $data=array(
    "products"=>$products,
    "products_page_url"=>strtolower($products_page_url),
     "price"=>$req->get('price'),
    "picture"=>$picture,
    "details"=>$req->get('details'),

  );
   $insert = DB::table('products')->insert($data);

   if ($insert) {
     return back()->with('success', 'Saved Successfully');
   }
   else{
     return back()->with('error', 'Data Not Saved, Technical Error');
   }
 }

 else{

  return back()->withInput()->withErrors($validation);
}

}

// ======== Delete Function ==============

public function delete_products($product_id){
  $delete = DB::delete('DELETE FROM products WHERE product_id  = ?',[$product_id]);

  if ($delete) {
    return back()->with('success', 'Deleted Successfully');
  }
  else{
   return back()->with('error', 'Data Not Deleted, Technical Error');
 }
}

// ============ Edit Function =============

public function edit_products($product_id){
  $product = DB::table('products')
  ->where('product_id', '=', $product_id)
  ->get();
  $product = json_decode($product, true);
  return view('admin.edit_products', ['product'=>$product]);
} 

function update_products(Request $req){

 $validation = $req->validate([
   'products' => 'required',
   'price' => 'required',
   'details' => 'required'
   
 ]);

 if ($validation) {
  $product_id = $req->get('product_id');
  $products = $req->get('products');
  $products_page_url = $req->get('products');
      $products_page_url = str_replace(' ', '-', $products_page_url); // Replaces all spaces with hyphens.
      $products_page_url = preg_replace('/[^A-Za-z0-9\-]?/', '', $products_page_url); // Removes special chars.
      $products_page_url = preg_replace('/-+/', '-', $products_page_url); // Replaces multiple hyphens with single one.
      $hidden_pic = $req->get('hidden_pic');
      $picture = $req->file('picture');

      if ($picture=='') {
       $picture = $hidden_pic;
     }

     else{
       $picture = time().'.'.$req->picture->extension();     
         //move file
       $req->picture->move(public_path('uploads/products'), $picture);
     }

     $update = DB::table('products')->where('product_id', $product_id)->update([
      "products"=>$req->get('products'), 
      "price"=>$req->get('price'), 
      "products_page_url"=>strtolower($products_page_url),
      "picture"=>$picture, 
      "details"=>$req->get('details')
    ]);

     if ($update) {
       return back()->with('success', 'Updated Successfully');
     }
     else{
       return back()->with('error', 'Data Not Updated, Technical Error');
     }
   }

   else{

    return back()->withInput()->withErrors($validation);
  }
}

// ================ End Products ===========================

// =============Start Team==============
  // =========== Save Function =============

public function save_team(request $req){

  $validation = $req->validate([
   'name' => 'required',
   'picture' => 'required',
   'designation' => 'required'


 ]);

  if ($validation) {
   $name= $req->get('name');
   $team_page_url = $req->get('name');
       $team_page_url = str_replace(' ', '-', $team_page_url); // Replaces all spaces with hyphens.
   $team_page_url = preg_replace('/[^A-Za-z0-9\-]?/', '', $team_page_url); // Removes special chars.
   $team_page_url = preg_replace('/-+/', '-', $team_page_url); // Replaces multiple hyphens with single one.

   $picture = $req->file('picture');    
   $picture = time().'.'.$req->picture->extension();        
        //move file

   $req->picture->move(public_path('uploads/team'), $picture);

   $data=array(
    "name"=>$name,
    "team_page_url"=>strtolower($team_page_url),
    "picture"=>$picture,
    "designation"=>$req->get('designation'),

  );
   $insert = DB::table('team')->insert($data);

   if ($insert) {
     return back()->with('success', 'Saved Successfully');
   }
   else{
     return back()->with('error', 'Data Not Saved, Technical Error');
   }
 }

 else{

  return back()->withInput()->withErrors($validation);
}

}

// ======== Delete Function ==============

public function delete_team($team_id){
  $delete = DB::delete('DELETE FROM team WHERE team_id  = ?',[$team_id]);

  if ($delete) {
    return back()->with('success', 'Deleted Successfully');
  }
  else{
   return back()->with('error', 'Data Not Deleted, Technical Error');
 }
}

// ============ Edit Function =============

public function edit_team($team_id){
  $team = DB::table('team')
  ->where('team_id', '=', $team_id)
  ->get();
  $team = json_decode($team, true);
  return view('admin.edit_team', ['team'=>$team]);
} 

function update_team(Request $req){

 $validation = $req->validate([
  'name' => 'required',
  'designation' => 'required'
]);

 if ($validation) {
  $team_id = $req->get('team_id');
  $name = $req->get('name');
  $team_page_url = $req->get('name');
      $team_page_url = str_replace(' ', '-', $team_page_url); // Replaces all spaces with hyphens.
      $team_page_url = preg_replace('/[^A-Za-z0-9\-]?/', '', $team_page_url); // Removes special chars.
      $team_page_url = preg_replace('/-+/', '-', $team_page_url); // Replaces multiple hyphens with single one.
      $hidden_pic = $req->get('hidden_pic');
      $picture = $req->file('picture');

      if ($picture=='') {
       $picture = $hidden_pic;
     }

     else{
       $picture = time().'.'.$req->picture->extension();     
         //move file
       $req->picture->move(public_path('uploads/team'), $picture);
     }

     $update = DB::table('team')->where('team_id', $team_id)->update([
       "name"=>$name,
       "team_page_url"=>strtolower($team_page_url),
       "picture"=>$picture,
       "designation"=>$req->get('designation'),
     ]);

     if ($update) {
       return back()->with('success', 'Updated Successfully');
     }
     else{
       return back()->with('error', 'Data Not Updated, Technical Error');
     }
   }

   else{

    return back()->withInput()->withErrors($validation);
  }
}

// ================ End Team ===========================

// =============Start Portfolio ==============
  // =========== Save Function =============

public function save_gallery(request $req){

  $validation = $req->validate([
   'picture_name' => 'required',
   'picture' => 'required',


 ]);

  if ($validation) {
   $picture_name= $req->get('picture_name');
   $picture_page_url = $req->get('picture_name');
       $picture_page_url = str_replace(' ', '-', $picture_page_url); // Replaces all spaces with hyphens.
   $picture_page_url = preg_replace('/[^A-Za-z0-9\-]?/', '', $picture_page_url); // Removes special chars.
   $picture_page_url = preg_replace('/-+/', '-', $picture_page_url); // Replaces multiple hyphens with single one.

   $picture = $req->file('picture');    
   $picture = time().'.'.$req->picture->extension();        
        //move file

   $req->picture->move(public_path('uploads/gallery'), $picture);

   $data=array(
    "picture_name"=>$picture_name,
    "picture_page_url"=>strtolower($picture_page_url),
    "picture"=>$picture,

  );
   $insert = DB::table('gallery')->insert($data);

   if ($insert) {
     return back()->with('success', 'Saved Successfully');
   }
   else{
     return back()->with('error', 'Data Not Saved, Technical Error');
   }
 }

 else{

  return back()->withInput()->withErrors($validation);
}

}

// ======== Delete Function ==============

public function delete_gallery($gallery_id){
  $delete = DB::delete('DELETE FROM gallery WHERE gallery_id  = ?',[$gallery_id]);

  if ($delete) {
    return back()->with('success', 'Deleted Successfully');
  }
  else{
   return back()->with('error', 'Data Not Deleted, Technical Error');
 }
}

// ============ Edit Function =============

public function edit_gallery($gallery_id){
  $gallery = DB::table('gallery')
  ->where('gallery_id', '=', $gallery_id)
  ->get();
  $gallery = json_decode($gallery, true);
  return view('admin.edit_gallery', ['gallery'=>$gallery]);
} 

function update_gallery(Request $req){

 $validation = $req->validate([
  'picture_name' => 'required',
]);

 if ($validation) {
  $gallery_id = $req->get('gallery_id');
  $picture_name = $req->get('picture_name');
  $picture_page_url = $req->get('picture_name');
      $picture_page_url = str_replace(' ', '-', $picture_page_url); // Replaces all spaces with hyphens.
      $picture_page_url = preg_replace('/[^A-Za-z0-9\-]?/', '', $picture_page_url); // Removes special chars.
      $picture_page_url = preg_replace('/-+/', '-', $picture_page_url); // Replaces multiple hyphens with single one.
      $hidden_pic = $req->get('hidden_pic');
      $picture = $req->file('picture');

      if ($picture=='') {
       $picture = $hidden_pic;
     }

     else{
       $picture = time().'.'.$req->picture->extension();     
         //move file
       $req->picture->move(public_path('uploads/gallery'), $picture);
     }

     $update = DB::table('gallery')->where('gallery_id', $gallery_id)->update([
       "picture_name"=>$picture_name,
       "picture_page_url"=>strtolower($picture_page_url),
       "picture"=>$picture,
     ]);

     if ($update) {
       return back()->with('success', 'Updated Successfully');
     }
     else{
       return back()->with('error', 'Data Not Updated, Technical Error');
     }
   }

   else{

    return back()->withInput()->withErrors($validation);
  }
}

// ================ End Portfolio ===========================

// // =============Start Blog ==============
//   // =========== Save Function =============

// public function save_blog(request $req){

//   $validation = $req->validate([
//    'title' => 'required',
//    'picture' => 'required',
//    'details' => 'required',
//    'page_title' => 'required',
//    'page_keywords' => 'required',
//    'page_description' => 'required'


//  ]);

//   if ($validation) {
//    $title= $req->get('title');
//    $blog_page_url = $req->get('title');
//        $blog_page_url = str_replace(' ', '-', $blog_page_url); // Replaces all spaces with hyphens.
//    $blog_page_url = preg_replace('/[^A-Za-z0-9\-]?/', '', $blog_page_url); // Removes special chars.
//    $blog_page_url = preg_replace('/-+/', '-', $blog_page_url); // Replaces multiple hyphens with single one.

//    $picture = $req->file('picture');    
//    $picture = time().'.'.$req->picture->extension();        
//         //move file

//    $req->picture->move(public_path('uploads/blog'), $picture);

//    $data=array(
//     "title"=>$title,
//     "blog_page_url"=>strtolower($blog_page_url),
//     "picture"=>$picture,
//     "details"=>$req->get('details'),
//     "page_title"=>$req->get('page_title'),
//     "page_keywords"=>$req->get('page_keywords'),
//     "page_description"=>$req->get('page_description'),

//   );
//    $insert = DB::table('blog')->insert($data);

//    if ($insert) {
//      return back()->with('success', 'Saved Successfully');
//    }
//    else{
//      return back()->with('error', 'Data Not Saved, Technical Error');
//    }
//  }

//  else{

//   return back()->withInput()->withErrors($validation);
// }

// }

// // ======== Delete Function ==============

// public function delete_blog($blog_id){
//   $delete = DB::delete('DELETE FROM blog WHERE blog_id  = ?',[$blog_id]);

//   if ($delete) {
//     return back()->with('success', 'Deleted Successfully');
//   }
//   else{
//    return back()->with('error', 'Data Not Deleted, Technical Error');
//  }
// }

// // ============ Edit Function =============

// public function edit_blog($blog_id){
//   $blog = DB::table('blog')
//   ->where('blog_id', '=', $blog_id)
//   ->get();
//   $blog = json_decode($blog, true);
//   return view('admin.edit_blog', ['blog'=>$blog]);
// } 

// function update_blog(Request $req){

//  $validation = $req->validate([
//   'title' => 'required',
//   'details' => 'required',
//   'page_title' => 'required',
//   'page_keywords' => 'required',
//   'page_description' => 'required'
// ]);

//  if ($validation) {
//   $blog_id = $req->get('blog_id');
//   $title = $req->get('title');
//   $blog_page_url = $req->get('title');
//       $blog_page_url = str_replace(' ', '-', $blog_page_url); // Replaces all spaces with hyphens.
//       $blog_page_url = preg_replace('/[^A-Za-z0-9\-]?/', '', $blog_page_url); // Removes special chars.
//       $blog_page_url = preg_replace('/-+/', '-', $blog_page_url); // Replaces multiple hyphens with single one.
//       $hidden_pic = $req->get('hidden_pic');
//       $picture = $req->file('picture');

//       if ($picture=='') {
//        $picture = $hidden_pic;
//      }

//      else{
//        $picture = time().'.'.$req->picture->extension();     
//          //move file
//        $req->picture->move(public_path('uploads/blog'), $picture);
//      }

//      $update = DB::table('blog')->where('blog_id', $blog_id)->update([
//        "title"=>$title,
//        "blog_page_url"=>strtolower($blog_page_url),
//        "picture"=>$picture,
//        "details"=>$req->get('details'),
//        "page_title"=>$req->get('page_title'),
//        "page_keywords"=>$req->get('page_keywords'),
//        "page_description"=>$req->get('page_description'),
//      ]);

//      if ($update) {
//        return back()->with('success', 'Updated Successfully');
//      }
//      else{
//        return back()->with('error', 'Data Not Updated, Technical Error');
//      }
//    }

//    else{

//     return back()->withInput()->withErrors($validation);
//   }
// }

// // ================ End Blog ===========================

// ================= Profile Area ====================

function login(Request $request){
  $user_data = array(
   'email'  => $request->get('email'),
   'password' => $request->get('password')
 );
  if(Auth::attempt($user_data)){
   $user = Auth::user();
   
   $user_id = $user['id'];
   if ($user['level'] == 0) {
    return redirect('/');
  }
  else{
    return redirect('/dashboard');  
  }  

}

return redirect('/login')->withInput()->with('error', 'Incorrect Username or Password');

}


function logout(Request $req){
  Session::flush();
  Auth::logout();
  return redirect('login')->with('success', 'Log Out Successfully');
}

  // ================Start Profile====================

function update_profile(Request $req){

  $validation = $req->validate([
   'name' => 'required'
 ]);

  if ($validation) {
   $id = $req->get('id');
   $name = $req->get('name');
   $phone = $req->get('phone');
   $email = $req->get('email');
   $person_detail = $req->get('person_detail');
   $pic = $req->file('pic');
   if (isset($pic)) {     
    $pic_name = time().'.'.$req->pic->extension();     
      //move file
    $req->pic->move(public_path('uploads/profile'), $pic_name);
  }
  else{
   $pic_name = $req->get('hidden_pic');
 }


 $update = DB::table('users')->where('id', $id)->update([
   'name' => $req->get('name'),
   'phone' => $req->get('phone'),
   'email' => $req->get('email'),
   'person_detail' => $req->get('person_detail'),
   'pic' => $pic_name,
 ]);

 if ($update) {

   return back()->with('success', 'Updated Successfully');
 }
 else{

   return back()->with('error', 'Data Not Updated, Technical Error');
 }
}

else{

  return back()->withInput()->withErrors($validation);
}
}

// ==============Change Password=============

 // ==============Change Password=============
public function updatePassword(Request $request)
{
  \Config::set('database.default', 'mysql1');
        # Validation
  $request->validate([
    'old_password' => 'required',
    'new_password' => 'required|confirmed',
    'new_confirm_password' => ['same:new_password'],
  ]);


        #Match The Old Password
  if(!Hash::check($request->old_password, auth()->user()->password)){
    return back()->with("error", "Old Password Doesn't match!");
  }


        #Update the new Password
  User::whereId(auth()->user()->id)->update([
    'password' => Hash::make($request->new_password)
  ]);

  return back()->with("status", "Password changed successfully!");
}

    // ==============Change Password=============




}

