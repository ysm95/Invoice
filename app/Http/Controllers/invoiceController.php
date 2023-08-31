<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class invoiceController extends Controller
{

    public function getInvoice()
    {
        $mydata = invoice::where('user_id', Auth::id())->get();
        //dd($myfiles);
        return view('invoice', compact('mydata'));
    }
    public function store(Request $request)
    {
        // dd($request->all());

        $invoiceData = new invoice();
        $invoiceData->booking_date = $request->bookingDate;
        $invoiceData->passenger_name = $request->passengerName;
        $invoiceData->package_name = $request->packageName;
        $invoiceData->adults = $request->totalAdults;
        $invoiceData->children = $request->totalChildren;
        $invoiceData->infants = $request->totalInfants;
        $invoiceData->email = $request->Email;
        $invoiceData->rooms = $request->totalRooms;
        $invoiceData->nights = $request->totalNights;
        $invoiceData->destenation_from = $request->destinationFrom;
        $invoiceData->destenation_to = $request->destinationTo;
        $invoiceData->total_in_currency = $request->totalAmountInCurrency;
        $invoiceData->currency = $request->currency;
        $invoiceData->omr_rate = $request->conversionRateToOMR;
        $invoiceData->number_of_tickets = $request->totalTickets;
        $invoiceData->ticket_fare = $request->ticketFare;
        $invoiceData->ticket_taxes = $request->ticketTaxes;
        if (($request->destinationTo) == 'SLL' || ($request->destinationTo) == 'DQM' || ($request->destinationTo) == 'KHS' || ($request->destinationTo) == 'MCT') {
            $invoiceData->tickets_vat = ($request->ticketFare) * 0.05; //

        } else {
            $invoiceData->tickets_vat = 0; //

        }

        $invoiceData->hotel_name = $request->hotelSupplierName;
        $invoiceData->hotel_net_range = $request->hotelNetRate;
        if (($request->destinationTo) == 'SLL' || ($request->destinationTo) == 'DQM' || ($request->destinationTo) == 'KHS' || ($request->destinationTo) == 'MCT') {
            $invoiceData->hotel_vat_charge = ($request->hotelNetRate) * 0.05; //

        } else {
            $invoiceData->hotel_vat_charge = 0; //

        }
        $invoiceData->hotel_confirmation_id = $request->hotelConfirmationId;
        $invoiceData->transfer_net_rate = $request->transferNetRate;
        if (($request->destinationTo) == 'SLL' || ($request->destinationTo) == 'DQM' || ($request->destinationTo) == 'KHS' || ($request->destinationTo) == 'MCT') {
            $invoiceData->transfer_vat_charge = ($request->transferNetRate) * 0.05; //

        } else {
            $invoiceData->transfer_vat_charge = 0; //

        }
        $invoiceData->transfer_confirmation_id = $request->transferConfirmationId;
        $invoiceData->tour_net_rate = $request->tourNetRate;
        if (($request->destinationTo) == 'SLL' || ($request->destinationTo) == 'DQM' || ($request->destinationTo) == 'KHS' || ($request->destinationTo) == 'MCT') {
            $invoiceData->tour_vat_charge = ($request->tourNetRate) * 0.05; //

        } else {
            $invoiceData->tour_vat_charge = 0; //

        }
        $invoiceData->tour_confirmation_id = $request->tourConfirmationId;
        $invoiceData->lounge_net_rate = $request->loungeNetRate;
        if (($request->destinationTo) == 'SLL' || ($request->destinationTo) == 'DQM' || ($request->destinationTo) == 'KHS' || ($request->destinationTo) == 'MCT') {
            $invoiceData->lounge_vat_charge = ($request->loungeNetRate) * 0.05; //

        } else {
            $invoiceData->lounge_vat_charge = 0; //

        }
        $invoiceData->lounge_confirmation_id = $request->loungeConfirmationId;
        $invoiceData->visa_net_rate = $request->visaNetRate;

        $invoiceData->visa_vat = 'Out of Scope';
        $invoiceData->visa_service_charge = $request->visaServiceCharge;
        if (($request->destinationTo) == 'SLL' || ($request->destinationTo) == 'DQM' || ($request->destinationTo) == 'KHS' || ($request->destinationTo) == 'MCT') {
            $invoiceData->visa_vat_service_charge = ($request->visaServiceCharge) * 0.05; //

        } else {
            $invoiceData->visa_vat_service_charge = 0; //

        }
        $invoiceData->visa_confirmation_id = $request->visaConfirmationId;
        $invoiceData->mark_up = ($request->markUp) / 100;
        $invoiceData->total_in_omr = $invoiceData->hotel_net_range +
            $invoiceData->transfer_net_rate +
            $invoiceData->tour_net_rate +
            $invoiceData->lounge_net_rate +
            $invoiceData->visa_service_charge;
        $invoiceData->holidays_profit = $invoiceData->total_in_omr * $invoiceData->mark_up;
        $invoiceData->total_vat = $invoiceData->visa_vat_service_charge +
            $invoiceData->lounge_vat_charge +
            $invoiceData->tour_vat_charge +
            $invoiceData->transfer_vat_charge +
            $invoiceData->ticketVAT +
            $invoiceData->hotel_vat_charge;
        $invoiceData->user_id = Auth::id(); // Set the user_id to the authenticated user's ID

        // dd($invoiceData);
        $invoiceData->save();
        dd($invoiceData);


        return back()
            ->with('success', 'File has been successfully uploaded.');
    }
}
