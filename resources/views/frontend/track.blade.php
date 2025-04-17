<x-track-layout>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

    <!-- Contact Form -->
    <section class="my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-sm-12 col-md-12 col-xl-12">
                    <div class="contact-form-rightbox pbmit-bg-color-white">
                        <div class="pbmit-heading animation-style2 mb-4">
                            <h2 class="pbmit-title">Track your package</h2>
                        </div>
                        <form action="{{ route('tracking') }}" class="contact-form" method="post">
                            @csrf
                            @if (session('message'))
                                <div class="alert alert-danger alert-dismissible fade show fw-bold" style="font-size: 13px !important;" role="alert">
                                    {{ session('message') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Enter your Tracking Code*"
                                        name="order_id" required>
                                </div>
                            </div>
                            <button type="submit" class="pbmit-btn submit my-4 text-end">
                                <span class="pbmit-button-content-wrapper">
                                    <span class="pbmit-button-text">Submit</span>
                                </span>
                                <span class="form-btn-loader d-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 100">
                                        <circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="40"
                                            cy="50">
                                            <animate attributeName="opacity" calcMode="spline" dur="2"
                                                values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1"
                                                repeatCount="indefinite" begin="-.4"></animate>
                                        </circle>
                                        <circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="100"
                                            cy="50">
                                            <animate attributeName="opacity" calcMode="spline" dur="2"
                                                values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1"
                                                repeatCount="indefinite" begin="-.2"></animate>
                                        </circle>
                                        <circle fill="#fff" stroke="#fff" stroke-width="15" r="15" cx="160"
                                            cy="50">
                                            <animate attributeName="opacity" calcMode="spline" dur="2"
                                                values="1;0;1;" keySplines=".5 0 .5 1;.5 0 .5 1"
                                                repeatCount="indefinite" begin="0"></animate>
                                        </circle>
                                    </svg>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->
</x-track-layout>
