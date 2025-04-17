<x-marketing>
    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('frontend/img/bg/breadcrumb_bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h1 class="title">Supply Chains</h1>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{ route('home') }}">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem">Supply Chains</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- services-details-area -->
        <section class="services__details-area section-py-130">
            <div class="container">
                <div class="services__details-inner">
                    <div class="row">
                        <div class="col-70 order-0 order-lg-2">
                            <div class="services__details-thumb">
                                <img src="{{ asset('frontend/img/services/services_img04.jpg') }}" alt="img">
                            </div>
                            <div class="services__details-content">
                                <h2 class="title">Supply Chaining – Global Shipping Made Simple</h2>
                                <p>At FastDelShippingServices, we specialize in comprehensive supply chaining solutions, providing reliable and cost-effective options for businesses looking to transport goods across international waters. Whether you're shipping full container loads (FCL) or less-than-container loads (LCL), our supply chaining services are designed to meet the diverse needs of your business while ensuring safe and timely delivery.</p>
                                <div class="services__details-benefit">
                                    <h2 class="title-two">Why Choose Supply Chaining?</h2>
                                    <p>Supply Chaining is the most efficient and economical solution for large-scale shipments. From raw materials to finished products, air shipping offers a flexible and scalable method for transporting goods worldwide. Whether you're moving cargo across continents or fulfilling regional demands, our supply chaining services offer a dependable way to manage your supply chain.</p>
                                </div>
                                
                                <div class="about__list-box about__list-box-two about__list-box-three">
                                    <ul class="list-wrap">
                                        <li><i class="flaticon-check"></i>Full Container Load (FCL): Ideal for large shipments, we provide dedicated containers for your cargo, ensuring safe handling from port to port.</li>
                                        <li><i class="flaticon-check"></i>Less-than-Container Load (LCL): For smaller shipments, we offer consolidated shipping, combining your goods with others to maximize space and reduce costs.</li>
                                        <li><i class="flaticon-check"></i>Door-to-Door Delivery: From pickup at your facility to delivery at the destination, we handle every step of the process, ensuring smooth and efficient transport.</li>
                                        <li><i class="flaticon-check"></i>Customs Clearance & Documentation: Our experienced team navigates complex customs regulations and handles all necessary paperwork to ensure compliance and prevent delays.</li>
                                        <li><i class="flaticon-check"></i>Global Network: With an extensive network of trusted partners and carriers worldwide, we provide seamless shipping solutions to almost any destination.</li>
                                    </ul>
                                </div>

                                <div class="services__details-benefit">
                                    <h2 class="title-two">Tailored to Your Needs</h2>
                                    <p>Every business has unique requirements, and we offer tailored supply chaining services that are customized to your specific needs. Whether you’re dealing with high-value goods, temperature-sensitive items, or oversized cargo, our team works closely with you to provide the best solution. We assess your shipping requirements and offer flexible options that balance cost, transit time, and reliability.</p>
                                </div>

                                <div class="services__details-benefit">
                                    <h2 class="title-two">Visibility and Transparency</h2>
                                    <p>At FastDelShippingServices, we understand the importance of real-time information. That's why we provide end-to-end visibility throughout the shipping process. You’ll have access to tracking tools that allow you to monitor your shipment’s journey, ensuring transparency and peace of mind every step of the way.</p>
                                </div>

                                <div class="services__details-benefit">
                                    <h2 class="title-two">Sustainability Matters</h2>
                                    <p>We are committed to sustainability and eco-friendly practices in supply chaining. By leveraging optimized shipping routes and modern vessels, we help reduce the carbon footprint of your logistics operations. Choosing supply chaining is a greener, more sustainable shipping option that contributes to reducing overall environmental impact.</p>
                                </div>

                                <div class="services__details-benefit">
                                    <h2 class="title-two">Why Partner With Us?</h2>
                                    <p>Our supply chaining services are backed by a team of logistics professionals with years of experience in managing global shipping. We offer personalized service, competitive rates, and a commitment to timely and safe delivery. With a focus on customer satisfaction, we aim to simplify the complexities of international shipping, allowing you to focus on running your business while we take care of your logistics.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-30">
                            <aside class="services__sidebar">
                                <div class="services__widget">
                                    <div class="services__cat-list">
                                        <ul class="list-wrap">
                                            <li>
                                                <a href="{{ route('services.ocean-freight') }}">
                                                    <span><i class="flaticon-ship"></i>Ocean Freight</span> <i
                                                        class="flaticon-right-arrow"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('services.air-freight') }}">
                                                    <span><i class="flaticon-air-freight"></i>Air Freight</span> <i
                                                        class="flaticon-right-arrow"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('services.supply-chain') }}">
                                                    <span><i class="flaticon-train"></i>Supply Chains</span> <i
                                                        class="flaticon-right-arrow"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('services.road-freight') }}">
                                                    <span><i class="flaticon-truck"></i>Road Freight</span> <i
                                                        class="flaticon-right-arrow"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('services.warehousing') }}">
                                                    <span><i class="flaticon-warehouse-1"></i>Warehousing</span> <i
                                                        class="flaticon-right-arrow"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('services.packaging') }}">
                                                    <span><i class="flaticon-delivery-cart"></i>Packaging</span> <i
                                                        class="flaticon-right-arrow"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-details-area-end -->

    </main>
    <!-- main-area-end -->
</x-marketing>
