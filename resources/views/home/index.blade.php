<x-app-layout title="Home">
    <main>
        <section class="hero-slider">
            <!-- Carousel wrapper -->
            <div class="hero-slides">
                <!-- Item 1 -->
                <div class="hero-slide">
                    <div class="container">
                        <div class="slide-content">
                            <h1 class="hero-slider-title">
                                Buy <strong>The Best Cars</strong> <br />
                                in your region
                            </h1>
                            <div class="hero-slider-content">
                                <p>
                                    Use powerful search tool to find your
                                    desired cars based on multiple search
                                    criteria: Maker, Model, Year, Price Range,
                                    Car Type, etc...
                                </p>

                                <button class="btn btn-hero-slider">
                                    Find the car
                                </button>
                            </div>
                        </div>
                        <div class="slide-image">
                            <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hero-slide">
                    <div class="flex container">
                        <div class="slide-content">
                            <h2 class="hero-slider-title">
                                Do you want to <br />
                                <strong>sell your car?</strong>
                            </h2>
                            <div class="hero-slider-content">
                                <p>
                                    Submit your car in our user friendly
                                    interface, describe it, upload photos and
                                    the perfect buyer will find it...
                                </p>

                                <button class="btn btn-hero-slider">
                                    Add Your Car
                                </button>
                            </div>
                        </div>
                        <div class="slide-image">
                            <img src="/img/car-png-39071.png" alt="" class="img-responsive" />
                        </div>
                    </div>
                </div>
                <button type="button" class="hero-slide-prev">
                    <svg style="width: 18px" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </button>
                <button type="button" class="hero-slide-next">
                    <svg style="width: 18px" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </section>
        <x-search-form />
        <section>
            <div class="container">
                <h2>Latest Added Cars</h2>
                @php
                $cars = collect([
                ['Amsterdam', 2021, 'Toyota', 'Corolla', 18500, 'Hatchback', 'Hybrid'],
                ['Rotterdam', 2019, 'Volkswagen', 'Golf', 14900, 'Hatchback', 'Petrol'],
                ['Utrecht', 2022, 'Tesla', 'Model 3', 38900, 'Sedan', 'Electric'],
                ['Eindhoven', 2018, 'BMW', '320d', 16700, 'Sedan', 'Diesel'],
                ['Den Haag', 2020, 'Skoda', 'Octavia', 17200, 'Wagon', 'Petrol'],
                ['Groningen', 2023, 'Hyundai', 'Kona', 27400, 'SUV', 'Electric'],
                ['Maastricht',2017, 'Audi', 'A4', 15300, 'Sedan', 'Diesel'],
                ['Arnhem', 2021, 'Ford', 'Focus', 16100, 'Hatchback', 'Petrol'],
                ])->map(fn ($c) => (object) [
                'location' => $c[0],
                'year' => $c[1],
                'make' => $c[2],
                'model' => $c[3],
                'price' => $c[4],
                'car_type' => $c[5],
                'fuel_type'=> $c[6],
                ]);
                @endphp
                <div class="car-items-listing">
                    @foreach ($cars as $car)
                    <x-car-card :car="$car" />
                    @endforeach
                </div>
            </div>
            </div>
        </section>
    </main>
</x-app-layout>