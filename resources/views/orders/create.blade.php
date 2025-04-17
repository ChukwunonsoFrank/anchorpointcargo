<x-app-layout>
    <div id="content-page" class="content-page">
        <div class="nk-body npc-invest bg-lighter">
            <div class="nk-app-root">
                <div class="nk-wrap">
                    <div class="nk-content nk-content-lg nk-content-fluid">
                        <div class="container-xl wide-lg">
                            <div class="nk-content-inner">
                                <div class="iq-card">
                                    <div class="iq-card pb-5">
                                        <div class="iq-card-header d-flex justify-content-between">
                                            <div class="iq-header-title">
                                                <h4 class="card-title" style="font-weight: bold;">Add New Order</h4>
                                            </div>
                                        </div>

                                        <div class="iq-card-body">
                                            <form method="POST" action="{{ route('order.store') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="card-inner">
                                                    <div class="col-12 col-md-12 col-lg-7">
                                                        <h6 class="mb-3" style="font-weight: bold;">Sender Details
                                                        </h6>
                                                        <div class="card mb-4">
                                                            <label for="sender_fullname">Sender's Fullname</label>
                                                            <input id="sender_fullname" name="sender_fullname"
                                                                class="form-control mb-3 border" type="text">

                                                            <label for="sender_email">Sender's Email Address</label>
                                                            <input id="sender_email" name="sender_email"
                                                                class="form-control mb-3 border" type="email">

                                                            <label for="sender_phone">Sender's Phone Number</label>
                                                            <input id="sender_phone" name="sender_phone"
                                                                class="form-control mb-3 border" type="text">

                                                            <label for="sender_residential">Sender's Residential
                                                                Address</label>
                                                            <textarea id="sender_residential" name="sender_residential_address" class="form-control mb-3 border" type="text"></textarea>
                                                        </div>

                                                        <h6 class="mb-3" style="font-weight: bold;">Receiver Details
                                                        </h6>
                                                        <div class="card mb-4">
                                                            <label for="receiver_fullname">Receiver's Fullname</label>
                                                            <input id="receiver_fullname" name="receiver_fullname"
                                                                class="form-control mb-3 border" type="text">

                                                            <label for="receiver_email">Receiver's Email Address</label>
                                                            <input id="receiver_email" name="receiver_email"
                                                                class="form-control mb-3 border" type="email">

                                                            <label for="receiver_phone">Receiver's Phone Number</label>
                                                            <input id="receiver_phone" name="receiver_phone"
                                                                class="form-control mb-3 border" type="text">

                                                            <label for="receiver_residential">Receiver's Residential
                                                                Address</label>
                                                            <textarea id="receiver_residential" name="receiver_residential_address" class="form-control mb-3 border" type="text"></textarea>
                                                        </div>

                                                        <h6 class="mb-3" style="font-weight: bold;">Package Details
                                                        </h6>
                                                        <div class="card">
                                                            <label for="packaging">Package Image</label>
                                                            <div class="form-group row align-items-center">
                                                                <div class="col-md-12">
                                                                    <div class="profile-img-edit">
                                                                        <img width="100" height="100"
                                                                            class="profile-pic"
                                                                            src="{{ asset('default-package-image.png') }}"
                                                                            alt="">
                                                                        <div class="p-image">
                                                                            <i class="ri-pencil-line upload-button"></i>
                                                                            <input class="file-upload" type="file"
                                                                                name="package-image" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <label for="packaging">Package Name</label>
                                                            <input id="packaging" name="packaging"
                                                                class="form-control mb-3 border" type="text">

                                                            <label for="carrier">Carrier</label>
                                                            <input id="carrier" name="carrier"
                                                                class="form-control mb-3 border" type="text">

                                                            {{-- <label for="carrier_reference">Tracking Number</label>
                                                            <input id="carrier_reference" name="carrier_reference"
                                                                class="form-control mb-3 border" type="text"> --}}

                                                            <label for="status">Status</label>
                                                            <input id="status" name="status"
                                                                class="form-control mb-3 border" type="text">

                                                            <label for="status_description">Status Description</label>
                                                            <textarea id="status_description" name="status_description" class="form-control mb-3 border" type="text"></textarea>


                                                            <label for="longitude">Longitude</label>
                                                            <input id="longitude" name="longitude"
                                                                class="form-control mb-3 border" type="text">

                                                            <label for="latitude">Latitude</label>
                                                            <input id="latitude" name="latitude"
                                                                class="form-control mb-3 border" type="text">

                                                            <label for="package_quantity">Package Quantity</label>
                                                            <input id="package_quantity" name="package_quantity"
                                                                class="form-control mb-3 border" type="text">

                                                            <label for="total_freight">Total Freight</label>
                                                            <input id="total_freight" name="total_freight"
                                                                class="form-control mb-3 border" type="text">

                                                            <label for="weight">Weight (kg)</label>
                                                            <input id="weight" name="weight"
                                                                class="form-control mb-3 border" type="text">

                                                            <label for="star_points">Star Points</label>
                                                            <input id="star_points" name="star_points"
                                                                class="form-control mb-3 border" type="text">

                                                            <label for="shipment_mode">Shipment Mode</label>
                                                            <select id="shipment_mode"
                                                                class="form-control invalid mb-3 border"
                                                                name="shipment_mode">
                                                                <option value="Air">Air</option>
                                                                <option value="Sea">Sea</option>
                                                                <option value="Rail">Rail</option>
                                                                <option value="Truck">Truck</option>
                                                            </select>

                                                            <label for="depature_date">Depature Date</label>
                                                            <input id="depature_date" name="depature_date"
                                                                class="form-control mb-3 border" type="date">

                                                            <label for="delivery_date">Delivery Date</label>
                                                            <input id="delivery_date" name="delivery_date"
                                                                class="form-control mb-3 border" type="date">

                                                            <label for="pickup_date">Pickup Date</label>
                                                            <input id="pickup_date" name="pickup_date"
                                                                class="form-control mb-3 border" type="date">
                                                        </div>

                                                        <button type="submit" class="btn btn-primary mt-2 p-2"
                                                            style="width: 100%; font-weight: bold;">Create
                                                            Order</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


</x-app-layout>
