@extends('layouts.master')

@section('title', 'Contact Us | Zay Shop')
@section('description', 'Contact the Zay Shop team.')

@section('content')

{{-- Roboto font + Leaflet --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700&display=swap">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">

<style>
    .zay-contact { font-family: 'Roboto', sans-serif; }

    .zay-banner { background-color: #e9eef5; padding: 4.5rem 0 5rem; }
    .zay-banner h1 { font-size: 3rem; font-weight: 300; color: #212529; margin-bottom: .75rem; }
    .zay-banner p { font-size: 1.25rem; font-weight: 300; color: #212529; max-width: 900px; margin: 0 auto; }

    
    #contact-map { height: 450px; width: 100%; background: #dddddd; z-index: 0; }
    #contact-map .leaflet-control-zoom a { font: 300 13px 'Roboto', sans-serif; }

    .zay-form label { font-size: 1.1rem; font-weight: 300; color: #212529; margin-bottom: .4rem; }
    .zay-form .form-control { font-size: 1rem; padding: .6rem 1rem; border-radius: .3rem; }
    .zay-form .form-control:focus { border-color: #59ab66; box-shadow: 0 0 0 .2rem rgba(89, 171, 102, .25); }

    .btn-zay { background-color: #59ab66; border-color: #59ab66; color: #fff; font-size: 1.1rem; padding: .5rem 1.25rem; }
    .btn-zay:hover, .btn-zay:focus { background-color: #4a9556; border-color: #4a9556; color: #fff; }
</style>

<div class="zay-contact">

    {{-- Banner --}}
    <section class="zay-banner">
        <div class="container text-center">
            <h1>Contact Us</h1>
            <p>
                Proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet.
            </p>
        </div>
    </section>

    {{-- Map --}}
    <div id="contact-map"></div>

    {{-- Form --}}
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">
                    <form class="zay-form mt-3">
                        <div class="row mb-3">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="subject">Subject</label>
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
                        </div>

                        <div class="mb-3">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
                        </div>

                        <div class="d-flex justify-content-end">
                            {{-- Backend lagne tak type="button"; baad mein type="submit" kar dena --}}
                            <button type="button" class="btn btn-zay">Let’s Talk</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const shopLocation = [51.505, -0.09];

        
        const map = L.map('contact-map', { attributionControl: false }).setView(shopLocation, 13);

        const icon = L.icon({
            iconUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon.png',
            iconRetinaUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-icon-2x.png',
            shadowUrl: 'https://unpkg.com/leaflet@1.9.4/dist/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41]
        });
        L.marker(shopLocation, { icon: icon }).addTo(map);

        setTimeout(function () { map.invalidateSize(); }, 200);
    });
</script>
@endsection