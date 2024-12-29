<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\HealthCenter;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $puskesmas = HealthCenter::all();
        $selectedLocation = ''; // Preselected value if any; adjust as needed

        return view('user.booking.index', [
            'title' => 'Booking Jadwal Pemeriksaan',
            'locations' => $puskesmas,
            'selectedLocation' => $selectedLocation,
            'action' => 'create'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'area_code' => 'required',
            'subdistrict' => 'required',
            'district' => 'required',
            'city' => 'required',
            'province' => 'required',
            'location' => 'required',
            'inspection_date' => 'required',
            'origin' => 'nullable',
            'religion' => 'nullable',
            'place_of_birth' => 'nullable',
            'birth_date' => 'nullable',
            'age' => 'nullable',
            'weight' => 'nullable',
            'height' => 'nullable',
            'blood_type' => 'nullable',
            'husband_name' => 'nullable',
        ]);
        $validatedData['user_id'] = auth()->user()->id;
        $puskesmas = HealthCenter::where('code', $validatedData['location'])->first();
        $validatedData['location'] = $puskesmas->name;
        $validatedData['subdistrict'] = strtoupper($validatedData['subdistrict']);
        $validatedData['district'] = strtoupper($validatedData['district']);
        $validatedData['city'] = strtoupper($validatedData['city']);
        $validatedData['province'] = strtoupper($validatedData['province']);

        $latestDocument = Booking::where('location', $puskesmas->name)
            ->latest('id') // Assuming 'id' is an auto-increment field
            ->first();

        $latestSequence = 0;
        if ($latestDocument) {
            // Extract the sequence from the document_no (e.g., '001')
            $latestSequence = (int)substr($latestDocument->document_no, -3);
        }

        // Calculate the next sequence number
        $nextSequence = $latestSequence + 1;
        if ($nextSequence > 999) {
            $nextSequence = 1; // Reset to '001'
        }

        // Format the sequence as a 3-digit number with leading zeros
        $sequenceString = str_pad($nextSequence, 3, '0', STR_PAD_LEFT);

        // Construct the document number
        $validatedData['document_no'] = 'SMG' . $puskesmas->code . 'HPV' . $sequenceString;

        // Save the data
        $booking = Booking::create($validatedData);
        return redirect()->route('formulir.user', $booking->id)->with('success', 'Data booking berhasil disimpan. Silahkan isi formulir berikut!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return view('user.booking.index', [
            'title' => 'Detail Booking',
            'data' => $booking,
            'selectedLocation' => $booking->location,
            'locations' => HealthCenter::all(),
            'action' => 'show'
        ]);
    }

    public function listBooking() {
        $bookings = Booking::where('user_id', auth()->user()->id)->get();
        return view('user.booking.list', [
            'title' => 'List Booking',
            'bookings' => $bookings
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        //
    }
}
