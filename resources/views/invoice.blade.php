<html>

<head>
    <title>Invoice System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <div class="p-5 text-center bg-light">
            <h1 class="mb-3">Invoice System</h1>
            <h4 class="mb-3">Invoice generator</h4>
        </div>
        <div class="">

            <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-2 p-5 text-center bg-light">
                    <!-- Title -->
                    <h4 class="mb-3">Category</h4>
                    <!-- Booking Date -->
                    {{-- Category --}}
                    <div class="col">
                        <input type="Date" class="form-control" id="bookingDate" name="bookingDate"
                            placeholder="Enter Booking Date" />
                        <label for="floatingInputValue">Booking Date:</label>
                        <small id="bookingDateHelpBlock" class="form-text text-muted">
                            02.08.2023
                        </small>
                    </div>

                    <!-- Passenger Name  -->
                    <div class="col">
                        <input type="text" class="form-control" id="passengerName" name="passengerName"
                            placeholder="Enter Passenger Name" />
                        <label for="floatingInputValue">Passenger Name:</label>
                        <small id="passengerNameHelpBlock" class="form-text text-muted">
                            (head of Family ex. Mohammed Al ....)
                        </small>
                    </div>
                    <!-- Package name -->
                    <div class="col-6">
                        <select id="packageName" name="packageName" class="form-control">
                            <option value="Public">Public</option>
                            <option value="Staff">Staff</option>
                            <option value="SME">SME</option>
                            <option value="STOPOVER">STOPOVER</option>

                        </select>
                        <label for="floatingInputValue"> Package name:</label>
                        <small id="packageNameHelpBlock" class="form-text text-muted">
                            Staff
                        </small>
                    </div>

                    <!-- Number of Passengers (Adults) Drop down -->
                    <div class="col-4">
                        <input type="text" class="form-control" id="totalAdults" name="totalAdults"
                            placeholder="Enter Number of Adults" />
                        <label for="floatingInputValue">Adults:</label>
                        <small id="totalAdultsHelpBlock" class="form-text text-muted">
                            1-9
                        </small>
                    </div>
                    <!-- Number of Passengers (Children) -->
                    <div class="col-4">
                        <input type="text" class="form-control" id="totalChildren" name="totalChildren"
                            placeholder="Enter Number of Children" />
                        <label for="floatingInputValue">Children:</label>
                        <small id="totalChildrenHelpBlock" class="form-text text-muted">
                            1-9
                        </small>
                    </div>

                    <!-- Number of Passengers (Infants) drop down  -->
                    <div class="col-4">
                        <input type="text" class="form-control" id="totalInfants" name="totalInfants"
                            placeholder="Enter Number of Infants" />
                        <label for="floatingInputValue">Infant:</label>
                        <small id="totalInfantsHelpBlock" class="form-text text-muted">
                            1-9
                        </small>
                    </div>
                    <!-- Email  -->
                    <div class="col-6">
                        <input type="email" class="form-control" id="Email" name="Email"
                            placeholder="Enter Email Address" />
                        <label for="floatingInputValue">Email:</label>
                        <small id="passwordHelpBlock" class="form-text text-muted">
                            example@comany.com
                        </small>
                    </div>
                    <!-- No Rooms -->
                    <div class="col-3">
                        <input type="text" class="form-control" id="totalRooms" name="totalRooms"
                            placeholder="Enter Number of Rooms" />
                        <label for="floatingInputValue">Rooms:</label>
                        <small id="EmailHelpBlock" class="form-text text-muted">
                            1-9
                        </small>
                    </div>

                    <!-- No of Nights -->

                    <div class="col-3">
                        <input type="text" class="form-control" id="totalNights" name="totalNights"
                            placeholder="Enter Number of Nights" />
                        <label for="floatingInputValue">Night:</label>
                        <small id="totalNightsHelpBlock" class="form-text text-muted">
                            1-9
                        </small>
                    </div>
                    <!-- Destination From-->
                    <div class="col-6">
                        <select id="destinationFrom" name="destinationFrom" class="form-control">
                            <option value="MCT">Muscat International Airport (MCT)</option>
                            <option value="SLL">Salalah Airport (SLL)</option>
                            <option value="DQM">Duqm Airport (DQM)</option>
                            <option value="OHS">Sohar Airport (OHS)</option>
                            <option value="KHS">Khasab Airport (KHS)</option>
                            <option value="DXB">Dubai International Airport (DXB)</option>
                            <option value="AUH">
                                Abu Dhabi International Airport (AUH)
                            </option>
                            <option value="BAH">Bahrain International Airport (BAH)</option>
                            <option value="DOH">
                                Doha Hamad International Airport (DOH)
                            </option>
                            <option value="KWI">Kuwait International Airport (KWI)</option>
                            <option value="RUH">
                                Riyadh King Khalid International Airport (RUH)
                            </option>
                            <option value="JED">
                                Jeddah King Abdulaziz International Airport (JED)
                            </option>
                            <option value="MED">
                                Medina Prince Mohammad bin Abdulaziz Airport (MED)
                            </option>
                            <option value="CAI">Cairo International Airport (CAI)</option>
                            <option value="AMM">
                                Amman Queen Alia International Airport (AMM)
                            </option>
                            <option value="IST">Istanbul Atatürk Airport (IST)</option>
                            <option value="KHI">
                                Karachi Jinnah International Airport (KHI)
                            </option>
                            <option value="LHE">
                                Lahore Allama Iqbal International Airport (LHE)
                            </option>
                            <option value="ISB">
                                Islamabad Benazir Bhutto International Airport (ISB)
                            </option>
                            <option value="CMB">
                                Colombo Bandaranaike International Airport (CMB)
                            </option>
                            <option value="BKK">Bangkok Suvarnabhumi Airport (BKK)</option>
                            <option value="KUL">
                                Kuala Lumpur International Airport (KUL)
                            </option>
                            <option value="CGK">
                                Jakarta Soekarno-Hatta International Airport (CGK)
                            </option>
                            <option value="MNL">
                                Manila Ninoy Aquino International Airport (MNL)
                            </option>
                            <option value="KTM">
                                Kathmandu Tribhuvan International Airport (KTM)
                            </option>
                            <option value="ZNZ">
                                Zanzibar Abeid Amani Karume International Airport (ZNZ)
                            </option>
                            <option value="NBO">
                                Nairobi Jomo Kenyatta International Airport (NBO)
                            </option>
                            <option value="FRA">Frankfurt am Main Airport (FRA)</option>
                            <option value="CDG">
                                Paris Charles de Gaulle Airport (CDG)
                            </option>
                            <option value="LHR">London Heathrow Airport (LHR)</option>
                        </select>
                        <label for="floatingInputValue"> From:</label>
                        <small id="destinationHelpBlock" class="form-text text-muted">
                            DXB,MXP,ZRH,SLL,KHS,MAA.
                        </small>
                    </div>
                    <!-- Destination To-->
                    <div class="col-6">
                        <select id="destinationTo" name="destinationTo" class="form-control">
                            <option value="MCT">Muscat International Airport (MCT)</option>
                            <option value="SLL">Salalah Airport (SLL)</option>
                            <option value="DQM">Duqm Airport (DQM)</option>
                            <option value="OHS">Sohar Airport (OHS)</option>
                            <option value="KHS">Khasab Airport (KHS)</option>
                            <option value="DXB">Dubai International Airport (DXB)</option>
                            <option value="AUH">
                                Abu Dhabi International Airport (AUH)
                            </option>
                            <option value="BAH">Bahrain International Airport (BAH)</option>
                            <option value="DOH">
                                Doha Hamad International Airport (DOH)
                            </option>
                            <option value="KWI">Kuwait International Airport (KWI)</option>
                            <option value="RUH">
                                Riyadh King Khalid International Airport (RUH)
                            </option>
                            <option value="JED">
                                Jeddah King Abdulaziz International Airport (JED)
                            </option>
                            <option value="MED">
                                Medina Prince Mohammad bin Abdulaziz Airport (MED)
                            </option>
                            <option value="CAI">Cairo International Airport (CAI)</option>
                            <option value="AMM">
                                Amman Queen Alia International Airport (AMM)
                            </option>
                            <option value="IST">Istanbul Atatürk Airport (IST)</option>
                            <option value="KHI">
                                Karachi Jinnah International Airport (KHI)
                            </option>
                            <option value="LHE">
                                Lahore Allama Iqbal International Airport (LHE)
                            </option>
                            <option value="ISB">
                                Islamabad Benazir Bhutto International Airport (ISB)
                            </option>
                            <option value="CMB">
                                Colombo Bandaranaike International Airport (CMB)
                            </option>
                            <option value="BKK">Bangkok Suvarnabhumi Airport (BKK)</option>
                            <option value="KUL">
                                Kuala Lumpur International Airport (KUL)
                            </option>
                            <option value="CGK">
                                Jakarta Soekarno-Hatta International Airport (CGK)
                            </option>
                            <option value="MNL">
                                Manila Ninoy Aquino International Airport (MNL)
                            </option>
                            <option value="KTM">
                                Kathmandu Tribhuvan International Airport (KTM)
                            </option>
                            <option value="ZNZ">
                                Zanzibar Abeid Amani Karume International Airport (ZNZ)
                            </option>
                            <option value="NBO">
                                Nairobi Jomo Kenyatta International Airport (NBO)
                            </option>
                            <option value="FRA">Frankfurt am Main Airport (FRA)</option>
                            <option value="CDG">
                                Paris Charles de Gaulle Airport (CDG)
                            </option>
                            <option value="LHR">London Heathrow Airport (LHR)</option>
                        </select>
                        <label for="floatingInputValue">To:</label>
                        <small id="destinationHelpBlock" class="form-text text-muted">
                            DXB,MXP,ZRH,SLL,KHS,MAA.
                        </small>
                    </div>

                    <!-- Package name -->
                    <div class="col-6">
                        <input type="text" class="form-control" id="totalAmountInCurrency"
                            name="totalAmountInCurrency" placeholder="Enter Total amount" />
                        <label for="floatingInputValue"> Total amount:</label>
                        <small id="totalBookingFormHelpBlock" class="form-text text-muted">
                            1.00
                        </small>
                    </div>

                    <!-- Currency -->

                    <div class="col-6">
                        <select id="currency" name="currency" class="form-control">
                            <option value="" disabled selected>Select a currency</option>
                            <option value="USD">🇺🇸 United States Dollar (USD)</option>
                            <option value="EUR">🇪🇺 Euro (EUR)</option>
                            <option value="JPY">🇯🇵 Japanese Yen (JPY)</option>
                            <option value="OMR">🇴🇲 Omani Rial (OMR)</option>
                            <!-- Add Saudi Riyal (SAR) with its corresponding emoji flag -->
                            <option value="SAR">🇸🇦 Saudi Riyal (SAR)</option>
                            <!-- Add Qatari Riyal (QAR) with its corresponding emoji flag -->
                            <option value="QAR">🇶🇦 Qatari Riyal (QAR)</option>
                            <!-- Add United Arab Emirates Dirham (AED) with its corresponding emoji flag -->
                            <option value="AED">
                                🇦🇪 United Arab Emirates Dirham (AED)
                            </option>
                            <!-- Add Indian Rupee (INR) with its corresponding emoji flag -->
                            <option value="INR">🇮🇳 Indian Rupee (INR)</option>
                            <!-- Add more currencies here with their corresponding emoji flags -->
                        </select>

                        <label for="floatingInputValue"> Currency:</label>
                        <small id="currencyHelpBlock" class="form-text text-muted">
                            Currency
                        </small>
                    </div>

                    <!-- Conversion Rate to OMR -->
                    <div class="col-6">
                        <input type="text" class="form-control" id="conversionRateToOMR"
                            name="conversionRateToOMR" placeholder="Enter Conversion Rate to OMR" />
                        <label for="floatingInputValue"> Conversion Rate to OMR:</label>
                        <small id="conversionRateToOMRHelpBlock" class="form-text text-muted">
                            1.00
                        </small>
                    </div>

                    <br />
                    <!-- Title -->
                    <h4 class="mb-3">Tickets</h4>
                    <!-- Number of Tickets -->
                    <div class="col">
                        <input type="text" class="form-control" id="totalTickets" name="totalTickets"
                            placeholder="Enter Number of Tickets" />
                        <label for="floatingInputValue">Number of Tickets:</label>
                        <small id="totalTicketsHelpBlock" class="form-text text-muted">
                            1-15
                        </small>
                    </div>

                    <!-- Ticket Fare  -->
                    <div class="col">
                        <input type="text" class="form-control" id="ticketFare" name="ticketFare"
                            placeholder="Enter Ticket Fare" />
                        <label for="floatingInputValue">Ticket Fare:</label>
                        <small id="ticketFareHelpBlock" class="form-text text-muted">
                            300.00
                        </small>
                    </div>
                    <!-- Ticket Taxes -->
                    <div class="col-6">
                        <input type="text" class="form-control" id="ticketTaxes" name="ticketTaxes"
                            placeholder="Enter Ticket Taxes" />
                        <label for="floatingInputValue">Ticket Taxes:</label>
                        <small id="ticketTaxesHelpBlock" class="form-text text-muted">
                            20.00
                        </small>
                    </div>
                    <div class="row" id="tickets_input">
                        <div id='input-cont' class="form-control">

                        </div>
                        <!-- VAT (Domestic - Exempt) -->
                        <div class="col-6">
                            <input type="text" class="form-control" id="VAT" name="VAT"
                                placeholder="Enter VAT (Domestic - Exempt)" />
                            <label for="floatingInputValue">VAT (Domestic - Exempt):</label>
                            <small id="VATHelpBlock" class="form-text text-muted">
                                In case of an international flight, the VAT rate would be 0%
                            </small>
                        </div>
                        <br />

                        <!-- Title -->
                        <h4 class="mb-3">Holidays Package</h4>
                        <!--   Hotel/Supplier Name -->

                        <div class="form-group col">
                            <label for="exampleInputEmail1">Hotel Name</label>
                            <input type="text" class="form-control" id="hotelSupplierName"
                                name="hotelSupplierName" placeholder="Enter Hotel/Supplier Name" />

                        </div>

                        <!--Hotel Net Rate   -->
                        <div class="col">
                            <input type="text" class="form-control" id="hotelNetRate" name="hotelNetRate"
                                placeholder="Enter Hotel Net Rate " />
                            <label for="floatingInputValue">Hotel Net Rate :</label>
                            <small id="hotelNetRateHelpBlock" class="form-text text-muted">
                                300.00
                            </small>
                        </div>
                        <!-- Hotel VAT Charge 5% -->
                        <div class="col-6">


                            <select id="location" name="location" class="form-control">
                                <option value="MCT">Muscat International Airport (MCT)</option>
                                <option value="SLL">Salalah Airport (SLL)</option>
                                <option value="DQM">Duqm Airport (DQM)</option>
                                {{-- <option value="OHS">Sohar Airport (OHS)</option> --}}
                                <option value="KHS">Khasab Airport (KHS)</option>
                                <option value="DXB">Dubai International Airport (DXB)</option>
                                <option value="AUH">
                                    Abu Dhabi International Airport (AUH)
                                </option>
                                <option value="BAH">Bahrain International Airport (BAH)</option>
                                <option value="DOH">
                                    Doha Hamad International Airport (DOH)
                                </option>
                                <option value="KWI">Kuwait International Airport (KWI)</option>
                                <option value="RUH">
                                    Riyadh King Khalid International Airport (RUH)
                                </option>
                                <option value="JED">
                                    Jeddah King Abdulaziz International Airport (JED)
                                </option>
                                <option value="MED">
                                    Medina Prince Mohammad bin Abdulaziz Airport (MED)
                                </option>
                                <option value="CAI">Cairo International Airport (CAI)</option>
                                <option value="AMM">
                                    Amman Queen Alia International Airport (AMM)
                                </option>
                                <option value="IST">Istanbul Atatürk Airport (IST)</option>
                                <option value="KHI">
                                    Karachi Jinnah International Airport (KHI)
                                </option>
                                <option value="LHE">
                                    Lahore Allama Iqbal International Airport (LHE)
                                </option>
                                <option value="ISB">
                                    Islamabad Benazir Bhutto International Airport (ISB)
                                </option>
                                <option value="CMB">
                                    Colombo Bandaranaike International Airport (CMB)
                                </option>
                                <option value="BKK">Bangkok Suvarnabhumi Airport (BKK)</option>
                                <option value="KUL">
                                    Kuala Lumpur International Airport (KUL)
                                </option>
                                <option value="CGK">
                                    Jakarta Soekarno-Hatta International Airport (CGK)
                                </option>
                                <option value="MNL">
                                    Manila Ninoy Aquino International Airport (MNL)
                                </option>
                                <option value="KTM">
                                    Kathmandu Tribhuvan International Airport (KTM)
                                </option>
                                <option value="ZNZ">
                                    Zanzibar Abeid Amani Karume International Airport (ZNZ)
                                </option>
                                <option value="NBO">
                                    Nairobi Jomo Kenyatta International Airport (NBO)
                                </option>
                                <option value="FRA">Frankfurt am Main Airport (FRA)</option>
                                <option value="CDG">
                                    Paris Charles de Gaulle Airport (CDG)
                                </option>
                                <option value="LHR">London Heathrow Airport (LHR)</option>
                            </select>
                            <label for="floatingInputValue"> Destination:</label>
                            <small id="destinationHelpBlock" class="form-text text-muted">
                                DXB,MXP,ZRH,SLL,KHS,MAA.
                            </small>
                        </div>
                        <!-- Confirmation ID   -->
                        <div class="col-6">
                            <input type="text" class="form-control" id="hotelConfirmationId"
                                name="hotelConfirmationId" placeholder="Enter Hotel Confirmation ID" />
                            <label for="floatingInputValue">Hotel Confirmation ID:</label>
                            <small id="hotelConfirmationIdHelpBlock" class="form-text text-muted">
                                Hotel Confirmation ID
                            </small>
                        </div>
                        <!--Transfer Net Rate   -->
                        <div class="col">
                            <input type="text" class="form-control" id="transferNetRate" name="transferNetRate"
                                placeholder="Enter Transfer Net Rate " />
                            <label for="floatingInputValue">Transfer Net Rate :</label>
                            <small id="hotelNetRateHelpBlock" class="form-text text-muted">
                                Transfer Net Rate (300.00)
                            </small>
                        </div>
                        <!-- Transfer VAT Charge 5% -->

                        <!-- Transfer Confirmation ID   -->
                        <div class="col-6">
                            <input type="text" class="form-control" id="transferConfirmationId"
                                name="transferConfirmationId" placeholder="Enter Transfer Confirmation ID" />
                            <label for="floatingInputValue">Transfer Confirmation ID:</label>
                            <small id="hotelConfirmationIdHelpBlock" class="form-text text-muted">
                                Transfer Confirmation ID
                            </small>
                        </div>
                        <!--Tour Net Rate   -->
                        <div class="col">
                            <input type="text" class="form-control" id="tourNetRate" name="tourNetRate"
                                placeholder="Enter Tour Net Rate " />
                            <label for="floatingInputValue">Tour Net Rate :</label>
                            <small id="hotelNetRateHelpBlock" class="form-text text-muted">
                                Tour Net Rate (300.00)
                            </small>
                        </div>
                        <!-- Tour VAT Charge 5% -->

                        <!-- Tour Confirmation ID   -->
                        <div class="col-6">
                            <input type="text" class="form-control" id="tourConfirmationId"
                                name="tourConfirmationId" placeholder="Enter Tour Confirmation ID" />
                            <label for="floatingInputValue">Tour Confirmation ID:</label>
                            <small id="hotelConfirmationIdHelpBlock" class="form-text text-muted">
                                Tour Confirmation ID
                            </small>
                        </div>
                        <!-- Lounge Net Rate   -->
                        <div class="col-6">
                            <input type="text" class="form-control" id="loungeNetRate" name="loungeNetRate"
                                placeholder="Enter Lounge Net Rate" />
                            <label for="floatingInputValue">Lounge Net Rate:</label>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Lounge Net Rate
                            </small>
                        </div>
                        <!-- Lounge VAT Charge  -->

                        <!-- Lounge VAT Charge 5%  -->
                        <div class="col-6">
                            <input type="text" class="form-control" id="loungeConfirmationId"
                                name="loungeConfirmationId" placeholder="Enter Lounge Confirmation ID" />
                            <label for="floatingInputValue">Lounge Confirmation ID:</label>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Lounge Confirmation ID
                            </small>
                        </div>
                        <!--  Confirmation ID  -->

                        <!--  Visa Net rate  -->
                        <div class="col-6">
                            <input type="text" class="form-control" id="visaNetRate" name="visaNetRate"
                                placeholder="Enter Visa Net rate" />
                            <label for="floatingInputValue"> Visa Net rate:</label>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Visa Net rate
                            </small>
                        </div>
                        <!--   Visa Net rate  -->
                        <div class="col-6">
                            <input type="text" class="form-control" id="visaVATCharge" name="visaVATCharge"
                                placeholder="Enter Visa VAT Charge" />
                            <label for="floatingInputValue"> Visa VAT Charge:</label>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Visa VAT Chargee
                            </small>
                        </div>
                        <!--   Visa Service Charge  -->
                        <div class="col-6">
                            <input type="text" class="form-control" id="visaServiceCharge"
                                name="visaServiceCharge" placeholder="Enter Visa Service Charge" />
                            <label for="floatingInputValue"> Visa Service Charge:</label>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Visa Service Charge
                            </small>
                        </div>
                        <!--   VAT on Visa Service Charge 5%  -->
                        <div class="col-6">
                            <input type="text" class="form-control" id="visaVATServiceCharge"
                                name="visaVATServiceCharge" placeholder="Enter VAT on Visa Service Charge 5%" />
                            <label for="floatingInputValue">
                                VAT on Visa Service Charge 5%:</label>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                VAT on Visa Service Charge 5%
                            </small>
                        </div>
                        <!--    Confirmation ID  -->
                        <div class="col-6">
                            <input type="text" class="form-control" id="visaConfirmationId"
                                name="visaConfirmationId" placeholder="Enter Visa Confirmation ID" />
                            <label for="floatingInputValue"> Visa Confirmation ID:</label>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Visa Confirmation ID
                            </small>
                        </div>
                        <!--    Mark up%  -->
                        <div class="col-6">
                            <input type="text" class="form-control" id="markUp" name="markUp"
                                placeholder="Enter Mark up%" />
                            <label for="floatingInputValue"> Mark up%</label>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Mark up%
                            </small>
                        </div>
                        <!--   Total Amount (OMR)  -->
                        <div class="col-6">
                            <input type="text" class="form-control" id="totalInOMR" name="totalInOMR"
                                placeholder="Enter Total Amount (OMR)" />
                            <label for="floatingInputValue">Total Amount (OMR):</label>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Total Amount (OMR)
                            </small>
                        </div>
                        <!--   Holidays profit  -->
                        <div class="col-6">
                            <input type="text" class="form-control" id="holidaysProfit" name="holidaysProfit"
                                placeholder="Enter Holidays profit" />
                            <label for="floatingInputValue">Holidays profit:</label>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                Holidays profit
                            </small>
                        </div>
                        <!--   VAT  -->
                        <div class="col-6">
                            <input type="text" class="form-control" id="VAT" name="VAT"
                                placeholder="Enter VAT" />
                            <label for="floatingInputValue">VAT:</label>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                VAT
                            </small>
                        </div>
                        <br />


                        <br />
                        <button type="submit"
                            class="btn btn-success text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-half text-center ">
                            Submit Data
                        </button>
                    </div>

            </form>
        </div>
        <!-- Category Ends Here -->

        {{-- Start Displaying data --}}
        <div class="container">
            <div class="row g-2 p-5 text-center bg-light">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">DATA</th>
                            <th scope="col">DATA</th>
                            <th scope="col">DATA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mydata as $data)
                            <tr>
                                <th>{{ $data->user_id }}</th>
                                {{-- <th>{{ $data->user_id }}</th>
                                <th>{{ $data->user_id }}</th>
                                <th>{{ $data->user_id }}</th> --}}

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

        {{-- END Displaying data --}}

        <br><br><br><br><br>

        <form class="form-floating">
            <div class="row g-2 p-5 text-center bg-light">
                <!-- Title -->
                <h4 class="mb-3">EMD</h4>
                <!--  EMD Reference -->
                <div class="col">
                    <input type="text" class="form-control" id="emdReference"
                        placeholder="Enter EMD Reference" />
                    <label for="floatingInputValue"> EMD Reference:</label>
                    <small id="emdReferenceHelpBlock" class="form-text text-muted">
                        EMD Reference
                    </small>
                </div>

                <!-- TKT.NO   -->
                <div class="col">
                    <input type="text" class="form-control" id="tktNumber" placeholder="Enter TKT.NO " />
                    <label for="floatingInputValue">TKT.NO:</label>
                    <small id="tktNumberHelpBlock" class="form-text text-muted">
                        300.00
                    </small>
                </div>
                <!-- Form of Payment -->
                <!-- Others/ Cash/ Credit Card/ Invoice / Check/ Exchange   -->
                <div class="col-6">
                    <select id="paymentMethod" class="form-control">
                        <option value="Cash">Cash</option>
                        <option value="Credit Card">Credit Card</option>
                        <option value="Invoice">Invoice</option>
                        <option value="Check">Check</option>
                        <option value="Exchange">Exchange</option>
                        <option value="Others">Others</option>
                    </select>
                    <label for="floatingInputValue">Form of Payment</label>
                    <small id="paymentHelpBlock" class="form-text text-muted">
                        Form of Payment
                    </small>
                </div>
                <!-- Credit Card Number   -->
                <div class="col-6">
                    <input type="text" class="form-control" id="creditCardNumber"
                        placeholder="Enter Credit Card Number" />
                    <label for="floatingInputValue">Credit Card Number:</label>
                    <small id="creditCardHelpBlock" class="form-text text-muted">
                        Credit Card Number
                    </small>
                </div>
                <!-- Approval Code   -->
                <div class="col-6">
                    <input type="text" class="form-control" id="approvalCode"
                        placeholder="Enter Approval Code" />
                    <label for="floatingInputValue">Approval Code:</label>
                    <small id="approvalCodeHelpBlock" class="form-text text-muted">
                        Approval Code
                    </small>
                </div>
                <!-- Amount Collected (OMR)  -->
                <div class="col-6">
                    <input type="text" class="form-control" id="amountCollected"
                        placeholder="Enter Amount Collected (OMR)" />
                    <label for="floatingInputValue">Amount Collected (OMR):</label>
                    <small id="amountCollectedHelpBlock" class="form-text text-muted">
                        Amount Collected (OMR)
                    </small>
                </div>
                <!-- Staff Name  -->
                <div class="col-6">
                    <input type="text" class="form-control" id="staffName" placeholder="Enter Staff Name" />
                    <label for="floatingInputValue">Staff Name:</label>
                    <small id="staffNameHelpBlock" class="form-text text-muted">
                        Staff Name
                    </small>
                </div>
                <!--  REMARKS  -->
                <div class="col-6">
                    <input type="text" class="form-control" id="Remarks" placeholder="Enter REMARKS" />
                    <label for="floatingInputValue"> REMARKS:</label>
                    <small id="remarksHelpBlock" class="form-text text-muted">
                        REMARKS
                    </small>
                </div>
                <br />
                <br />
                <br />

            </div>

        </form>
        <button onclick="myFunction()" class="btn btn-success" id="b">Print this Invoice</button>
        <br><br>
    </div>
    <script>
        function copyToClipboard(id) {
            document.getElementById(id).select();
            document.execCommand('copy');
        }


        function myFunction() {



            document.getElementById('b').style.display = 'none';

            window.print();



            document.getElementById('b').style.display = 'block';

        }


        const container = document.getElementById("tickets_input");

        function addChild(ticketNumber) {
            let container_input = document.createElement("div");
            container_input.classList.add("m-4");

            //start pet nickname
            let ticketnput = document.createElement("input");
            ticketnput.classList.add("form-control");
            let ticketLabel = document.createElement("label");
            ticketLabel.classList.add("form-label");
            //end pet nickname
            //start pet wieght
            let weightInput = document.createElement("input");
            weightInput.classList.add("form-control");
            let weightLabel = document.createElement("label");
            weightLabel.classList.add("form-label");
            //end pet wieght
            //start pet DOB
            let DOBInput = document.createElement("input");
            DOBInput.classList.add("form-control");
            let DOBLabel = document.createElement("label");
            DOBLabel.classList.add("form-label");
            //END pet DOB

            var ticketErrorMsg = document.createElement("p");
            ticketErrorMsg.id = "ticket_errorMSG" + ticketNumber;
            ticketErrorMsg.name = "errorMSG";
            ticketErrorMsg.className = "errorMSG";
            ticketErrorMsg.style.color = "red";


            //start pet nickname

            ticketLabel.innerHTML = "Ticket #" + ticketNumber + "  <span class='text-danger'>*</span>";
            ticketnput.placeholder = "Enter Ticket Number";
            ticketnput.setAttribute('required', '');
            ticketnput.setAttribute("id", "Ticket" + ticketNumber);
            ticketnput.setAttribute('required', '');

            //End pet nickname



            //start pet nickname
            container_input.appendChild(ticketLabel);
            container_input.appendChild(ticketnput);
            container_input.appendChild(ticketErrorMsg);
            //end pet nickname

            //end pet Date of Birth
            container.appendChild(container_input);
        }

        const selectChild = document.querySelector("#pets");

        selectChild.addEventListener("change", (event) => {
            container.innerHTML = "";
            var totalTickets = document.getElementById("pets");
            var Number = parseInt(totalTickets.value);

            for (var i = 1; i <= Number; i++) {
                addChild(i);
            }
        });
        var totalTickets = document.getElementById("pets");
        var Number = parseInt(totalTickets.value);

        for (var i = 1; i <= Number; i++) {
            var pets = $("#pet" + i).val();
            if (pets == null || pets == '') {
                $("#pet" + i).addClass("invalid");
                $('#ticket_errorMSG' + i).html("Please enter pet " + pets + " NickName");
                valid = false;

            } else {

                $("#pet" + i).removeClass('invalid');
                $('#ticket_errorMSG' + i).html("");
            }
        }
    </script>
</body>

</html>
