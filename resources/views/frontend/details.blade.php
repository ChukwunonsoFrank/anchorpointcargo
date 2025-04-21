<x-track-layout>
    <style>
        #map {
            height: 500px;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
    </style>

        <!-- Contact Form -->
        <section class="my-5">
            <div class="container">
                <div class="row g-0">
                    <div class="col-sm-12 col-md-12 col-xl-12">
                        <div class="contact-form-rightbox pbmit-bg-color-white">
                            <div class="pbmit-heading animation-style2 mb-4">
                                <h2 class="pbmit-title">Package Details</h2>
                            </div>
                            <div id="map"></div>
                            <form action="#" class="contact-form" method="#">
                                <div><img width="200" height="200"
                                    src="{{ $order->package_image ? asset('storage/' . $order->package_image) : asset('default-package-image.png') }}"
                                    alt=""></div>
                                <div class="mt-4">
                                    <span class="title d-inline-block mb-2 fw-bold">Status: </span>
                                    <span class="badge rounded-pill text-bg-success">{{ $order->status }}</span>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Sender Fullname</span>
                                        <input value="{{ $order->sender_fullname }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Sender Email Address</span>
                                        <input value="{{ $order->sender_email }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Sender Phone Number</span>
                                        <input value="{{ $order->sender_phone }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Sender Residential Address</span>
                                        <input value="{{ $order->sender_residential }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Receiver Fullname</span>
                                        <input value="{{ $order->receiver_fullname }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Receiver Email Address</span>
                                        <input value="{{ $order->receiver_email }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Receiver Phone Number</span>
                                        <input value="{{ $order->receiver_phone }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Receiver Residential Address</span>
                                        <input value="{{ $order->receiver_residential }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Package Name</span>
                                        <input value="{{ $order->packaging }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Carrier</span>
                                        <input value="{{ $order->carrier }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Quantity</span>
                                        <input value="{{ $order->package_quantity }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Total Freight</span>
                                        <input value="{{ $order->total_freight }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Weight(Kg)</span>
                                        <input value="{{ $order->weight }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Star Points</span>
                                        <input value="{{ $order->star_points }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Mode of Shipping</span>
                                        <input value="{{ $order->shipment_mode }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Depature Date</span>
                                        <input value="{{ \Carbon\Carbon::parse($order->depature_date)->format('F j, Y') }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Delivery Date</span>
                                        <input value="{{ \Carbon\Carbon::parse($order->delivery_date)->format('F j, Y') }}" type="text" class="form-control" readonly>
                                    </div>
                                    <div class="col-md-4">
                                        <span class="title d-inline-block mb-2 fw-bold">Pickup Date</span>
                                        <input value="{{ \Carbon\Carbon::parse($order->pickup_date)->format('F j, Y') }}" type="text" class="form-control" readonly>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Form End -->

    <script>
        mapboxgl.accessToken = '{{ config('mapbox.api_key') }}';
        const map = new mapboxgl.Map({
            container: 'map', // container ID
            center: [{{ $order->longitude }}, {{ $order->latitude }}], // starting position [lng, lat]. Note that lat must be set between -90 and 90
            zoom: 9 // starting zoom
        });
        const marker = new mapboxgl.Marker() // initialize a new marker
            .setLngLat([{{ floatval($order->longitude) }}, {{ floatval($order->latitude) }}]) // Marker [lng, lat] coordinates
            .addTo(map); // Add the marker to the map
    </script>
</x-track-layout>
