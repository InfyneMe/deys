<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Deys | Luxury 5-Star Hotel • Rooms • Banquet • Conference • Celebrations</title>
  <!-- Add this inside <head> -->
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              // Deep navy + gold palette for luxury
              50: '#f7f8fb',
              100: '#eef0f6',
              200: '#dfe3ed',
              300: '#c6cad9',
              400: '#9aa1b9',
              500: '#6a7391',
              600: '#2a3455', /* primary */
              700: '#1f2842',
              800: '#161d31',
              900: '#0f1524'
            },
            gold: {
              400: '#d4af37', /* accent */
              500: '#c5a02c',
              600: '#b08d1f'
            }
          },
          boxShadow: {
            subtle: '0 10px 25px rgba(0,0,0,0.06)',
            lift: '0 20px 40px rgba(0,0,0,0.25)'
          },
        //   fontFamily: {
        //     /* Use system stack; swap with editorial serif via CSS if desired */
        //   },
          backgroundImage: {
            // Replace with your hero image URL or storage path
            'hero-deys': "url('https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?q=80&w=1920&auto=format&fit=crop')"
          },
          fontFamily: {
            calligraphy: ['"Great Vibes"', 'cursive'],
            // ...other fonts...
            },
        }
      }
    }
  </script>
</head>
<body class="antialiased text-slate-100 bg-brand-900">
  <!-- Top Nav -->
  <header class="bg-brand-900/60 backdrop-blur sticky top-0 z-40 border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center gap-3">
          <div class="h-9 w-9 rounded-xl bg-gold-400 flex items-center justify-center text-brand-900 font-bold">D</div>
          <div class="leading-tight">
            <span class="font-calligraphy text-2xl font-semibold tracking-wide">Dey's</span>
            <div class="text-[11px] uppercase tracking-[0.25em] text-white/70">Luxury Hotel</div>
          </div>
        </div>
        <nav class="hidden md:flex items-center gap-6 text-sm text-white/80">
          <a href="#rooms" class="hover:text-gold-400 transition">Rooms</a>
          <a href="#banquet" class="hover:text-gold-400 transition">Banquet Hall</a>
          <a href="#conference" class="hover:text-gold-400 transition">Conference</a>
          <a href="#celebrations" class="hover:text-gold-400 transition">Celebrations</a>
          <a href="#contact" class="hover:text-gold-400 transition">Contact</a>
        </nav>
        <div class="flex items-center gap-3">
          <button class="hidden sm:inline-flex items-center px-4 py-2 rounded-lg border border-white/20 text-white/90 hover:border-gold-400 hover:text-gold-400 transition">
            Manage Booking
          </button>
          <a href="#book" class="inline-flex items-center px-4 py-2 rounded-lg bg-gold-400 text-brand-900 hover:bg-gold-500 transition font-medium">
            Book Now
          </a>
        </div>
      </div>
    </div>
  </header>

  <!-- Hero with Background Image -->
  <section class="relative">
    <!-- Background image -->
    <div class="absolute inset-0 bg-hero-deys bg-cover bg-center"></div>
    <!-- Luxury gradient overlays -->
    <div class="absolute inset-0 bg-gradient-to-b from-brand-900/60 via-brand-900/70 to-brand-900/90"></div>
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,rgba(212,175,55,0.18),transparent_50%)]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-10 items-center py-16 lg:py-24">
        <div>
          <p class="inline-block text-[11px] uppercase tracking-[0.3em] text-gold-400 bg-white/5 ring-1 ring-white/10 px-3 py-1 rounded-full mb-4">
            Deys • 5-Star Luxury
          </p>
          <h1 class="text-4xl md:text-5xl font-bold leading-tight">
            Refined Stays, Grand Gatherings.
          </h1>
          <p class="mt-4 text-white/80">
            Experience curated elegance across luxury rooms, opulent banquet halls, modern conference venues, and bespoke celebrations.
          </p>
          <ul class="mt-6 space-y-2 text-white/90">
            <li class="flex items-center gap-2"><span class="text-gold-400">•</span> Prime city location with concierge and valet</li>
            <li class="flex items-center gap-2"><span class="text-gold-400">•</span> Signature dining and crafted event menus</li>
            <li class="flex items-center gap-2"><span class="text-gold-400">•</span> Dedicated planners for flawless events</li>
          </ul>
        </div>

        <!-- Booking Card -->
        <div id="book" class="bg-brand-900/70 backdrop-blur rounded-2xl shadow-lift p-6 border border-white/10">
          <h3 class="text-xl font-semibold mb-4">Reserve Your Experience</h3>
          <form class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="sm:col-span-2">
              <label class="block text-sm font-medium mb-1 text-white/90">Service</label>
              <select class="w-full px-3 py-2 rounded-lg bg-white/5 text-white border border-white/20 focus:outline-none focus:ring-2 focus:ring-gold-400">
                <option class="text-brand-900">Room</option>
                <option class="text-brand-900">Banquet Hall</option>
                <option class="text-brand-900">Conference</option>
                <option class="text-brand-900">Celebration Package</option>
              </select>
            </div>

            <div>
              <label class="block text-sm font-medium mb-1 text-white/90">Check-in / Event Date</label>
              <input type="date" class="w-full px-3 py-2 rounded-lg bg-white/5 text-white placeholder-white/60 border border-white/20 focus:ring-2 focus:ring-gold-400"/>
            </div>
            <div>
              <label class="block text-sm font-medium mb-1 text-white/90">Check-out</label>
              <input type="date" class="w-full px-3 py-2 rounded-lg bg-white/5 text-white placeholder-white/60 border border-white/20 focus:ring-2 focus:ring-gold-400"/>
            </div>

            <div>
              <label class="block text-sm font-medium mb-1 text-white/90">Adults</label>
              <input type="number" min="1" value="2" class="w-full px-3 py-2 rounded-lg bg-white/5 text-white border border-white/20 focus:ring-2 focus:ring-gold-400"/>
            </div>
            <div>
              <label class="block text-sm font-medium mb-1 text-white/90">Children</label>
              <input type="number" min="0" value="0" class="w-full px-3 py-2 rounded-lg bg-white/5 text-white border border-white/20 focus:ring-2 focus:ring-gold-400"/>
            </div>

            <div class="sm:col-span-2">
              <label class="block text-sm font-medium mb-1 text-white/90">Promo Code</label>
              <input type="text" placeholder="OPTIONAL" class="w-full px-3 py-2 rounded-lg bg-white/5 text-white placeholder-white/60 border border-white/20 focus:ring-2 focus:ring-gold-400"/>
            </div>

            <button type="submit" class="sm:col-span-2 mt-2 w-full px-4 py-3 rounded-xl bg-gold-400 text-brand-900 font-medium hover:bg-gold-500 transition">
              Search Availability
            </button>

            <p class="sm:col-span-2 text-xs text-white/60 mt-2">
              By continuing, agreement to terms & policies is implied.
            </p>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Categories Grid -->
  <section class="py-12 bg-brand-900" id="rooms">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-2xl md:text-3xl font-semibold">Explore Our Spaces</h2>
      <p class="text-white/70 mt-2">Luxury stays, grand halls, and bespoke celebrations.</p>

      <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-6 mt-8">
        <!-- Rooms -->
        <a href="#rooms-details" class="group block rounded-2xl overflow-hidden border border-white/10 bg-white/5 hover:bg-white/10 transition">
          <div class="h-40 bg-[url('https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=1200&auto=format&fit=crop')] bg-cover bg-center"></div>
          <div class="p-5">
            <h3 class="font-semibold text-lg group-hover:text-gold-400">Rooms & Suites</h3>
            <p class="text-white/70 mt-1">Premium bedding, ambient lighting, skyline views.</p>
            <div class="mt-3 text-gold-400 text-sm">View details →</div>
          </div>
        </a>

        <!-- Banquet -->
        <a id="banquet" href="#banquet-details" class="group block rounded-2xl overflow-hidden border border-white/10 bg-white/5 hover:bg-white/10 transition">
          <div class="h-40 bg-[url('https://images.unsplash.com/photo-1520899412981-101883d4778e?q=80&w=1200&auto=format&fit=crop')] bg-cover bg-center"></div>
          <div class="p-5">
            <h3 class="font-semibold text-lg group-hover:text-gold-400">Banquet Hall</h3>
            <p class="text-white/70 mt-1">Grand ambience with custom stage and LED walls.</p>
            <div class="mt-3 text-gold-400 text-sm">View packages →</div>
          </div>
        </a>

        <!-- Conference -->
        <a id="conference" href="#conference-details" class="group block rounded-2xl overflow-hidden border border-white/10 bg-white/5 hover:bg-white/10 transition">
          <div class="h-40 bg-[url('https://images.unsplash.com/photo-1515187029135-18ee286d815b?q=80&w=1200&auto=format&fit=crop')] bg-cover bg-center"></div>
          <div class="p-5">
            <h3 class="font-semibold text-lg group-hover:text-gold-400">Conference Rooms</h3>
            <p class="text-white/70 mt-1">AV-ready spaces for business and hybrid events.</p>
            <div class="mt-3 text-gold-400 text-sm">Explore layouts →</div>
          </div>
        </a>

        <!-- Celebrations -->
        <a id="celebrations" href="#celebrations-details" class="group block rounded-2xl overflow-hidden border border-white/10 bg-white/5 hover:bg-white/10 transition">
          <div class="h-40 bg-[url('https://images.unsplash.com/photo-1528605248644-14dd04022da1?q=80&w=1200&auto=format&fit=crop')] bg-cover bg-center"></div>
          <div class="p-5">
            <h3 class="font-semibold text-lg group-hover:text-gold-400">Celebrations</h3>
            <p class="text-white/70 mt-1">Weddings, sangeet, receptions, and socials.</p>
            <div class="mt-3 text-gold-400 text-sm">Start planning →</div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- Highlights -->
  <section class="py-12 bg-brand-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-3 gap-6">
        <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
          <h4 class="font-semibold text-lg">Modern Amenities</h4>
          <p class="text-white/70 mt-1">High-speed Wi-Fi, smart TVs, ergonomic desks, and in-room dining.</p>
        </div>
        <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
          <h4 class="font-semibold text-lg">Event Services</h4>
          <p class="text-white/70 mt-1">Catering, decor, lighting, staging, and professional planners.</p>
        </div>
        <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
          <h4 class="font-semibold text-lg">Business Ready</h4>
          <p class="text-white/70 mt-1">4K projection, array mics, hybrid conferencing, breakout rooms.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Detailed Sections -->
  <section class="py-12 bg-brand-900" id="rooms-details">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
      <!-- Rooms -->
      <div class="grid lg:grid-cols-2 gap-8 items-center">
        <div class="order-2 lg:order-1">
          <h3 class="text-2xl font-semibold">Rooms & Suites</h3>
          <p class="text-white/70 mt-3">
            Deluxe, Executive, and Suites designed for comfort and sophistication.
          </p>
          <ul class="mt-4 text-white/90 space-y-2">
            <li>• King/Queen beds, blackout curtains, rainfall showers</li>
            <li>• Complimentary breakfast & 24/7 room service</li>
            <li>• Skyline or garden views</li>
          </ul>
          <a href="#book" class="inline-flex mt-5 px-4 py-2 rounded-lg bg-gold-400 text-brand-900 hover:bg-gold-500">Check Rooms</a>
        </div>
        <div class="order-1 lg:order-2 h-64 rounded-2xl bg-[url('https://images.unsplash.com/photo-1554995207-c18c203602cb?q=80&w=1200&auto=format&fit=crop')] bg-cover bg-center border border-white/10"></div>
      </div>

      <!-- Banquet -->
      <div class="grid lg:grid-cols-2 gap-8 items-center" id="banquet-details">
        <div class="h-64 rounded-2xl bg-[url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?q=80&w=1200&auto=format&fit=crop')] bg-cover bg-center border border-white/10"></div>
        <div>
          <h3 class="text-2xl font-semibold">Banquet Hall</h3>
          <p class="text-white/70 mt-3">
            Grand venue with modular staging, mood lighting, and curated culinary experiences.
          </p>
          <ul class="mt-4 text-white/90 space-y-2">
            <li>• Capacity up to 500 guests</li>
            <li>• Dedicated bridal and green rooms</li>
            <li>• Themed decor & custom menus</li>
          </ul>
          <a href="#book" class="inline-flex mt-5 px-4 py-2 rounded-lg bg-gold-400 text-brand-900 hover:bg-gold-500">Get a Quote</a>
        </div>
      </div>

      <!-- Conference -->
      <div class="grid lg:grid-cols-2 gap-8 items-center" id="conference-details">
        <div class="order-2 lg:order-1">
          <h3 class="text-2xl font-semibold">Conference & Meetings</h3>
          <p class="text-white/70 mt-3">
            Flexible seating—boardroom, U-shape, classroom, or theatre—with enterprise-grade AV.
          </p>
          <ul class="mt-4 text-white/90 space-y-2">
            <li>• 4K projection, array mics, and video conferencing</li>
            <li>• Multi-room breakout support</li>
            <li>• Onsite tech team</li>
          </ul>
          <a href="#book" class="inline-flex mt-5 px-4 py-2 rounded-lg bg-gold-400 text-brand-900 hover:bg-gold-500">Enquire</a>
        </div>
        <div class="order-1 lg:order-2 h-64 rounded-2xl bg-[url('https://images.unsplash.com/photo-1517817748498-8db31915a86b?q=80&w=1200&auto=format&fit=crop')] bg-cover bg-center border border-white/10"></div>
      </div>

      <!-- Celebrations -->
      <div class="grid lg:grid-cols-2 gap-8 items-center" id="celebrations-details">
        <div class="h-64 rounded-2xl bg-[url('https://images.unsplash.com/photo-1514525253161-7a46d19cd819?q=80&w=1200&auto=format&fit=crop')] bg-cover bg-center border border-white/10"></div>
        <div>
          <h3 class="text-2xl font-semibold">Celebrations & Socials</h3>
          <p class="text-white/70 mt-3">
            From intimate soirées to grand festivities—crafted with signature Deys elegance.
          </p>
          <ul class="mt-4 text-white/90 space-y-2">
            <li>• Weddings, engagements, birthdays, baby showers</li>
            <li>• Live music, DJ, photo booths, theme corners</li>
            <li>• End-to-end planning and execution</li>
          </ul>
          <a href="#book" class="inline-flex mt-5 px-4 py-2 rounded-lg bg-gold-400 text-brand-900 hover:bg-gold-500">Plan an Event</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="py-12 bg-brand-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h3 class="text-2xl font-semibold">Guest Stories</h3>
      <div class="grid md:grid-cols-3 gap-6 mt-6">
        <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
          <p class="text-white/90">“Immaculate rooms and exceptional service. Our corporate meet was flawless.”</p>
          <div class="mt-4 text-sm text-white/70">— Anika R.</div>
        </div>
        <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
          <p class="text-white/90">“Banquet ambience was exquisite. Guests praised the menu and decor.”</p>
          <div class="mt-4 text-sm text-white/70">— Rahul S.</div>
        </div>
        <div class="p-6 rounded-2xl border border-white/10 bg-white/5">
          <p class="text-white/90">“AV and support team were stellar. Ideal for conferences.”</p>
          <div class="mt-4 text-sm text-white/70">— Meera T.</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-12 bg-brand-900 border-t border-white/10" id="contact">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-2 gap-8 items-center">
        <div>
          <h3 class="text-2xl font-semibold">Ready to reserve or plan?</h3>
          <p class="text-white/80 mt-2">Connect for tailored packages and exclusive offers.</p>
        </div>
        <div class="flex md:justify-end gap-3">
          <a href="#book" class="px-5 py-3 rounded-xl bg-gold-400 text-brand-900 font-medium hover:bg-gold-500">Book Now</a>
          <button class="px-5 py-3 rounded-xl border border-white/20 text-white/90 hover:bg-white/10">Call Sales</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-8 bg-brand-900 border-t border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-4 gap-6 text-sm">
        <div>
          <div class="h-9 w-9 rounded-xl bg-gold-400 flex items-center justify-center text-brand-900 font-bold">D</div>
          <p class="text-white/70 mt-3">Deys — refined hospitality and seamless events.</p>
        </div>
        <div>
          <h5 class="font-semibold">Explore</h5>
          <ul class="mt-2 space-y-2 text-white/70">
            <li><a href="#rooms">Rooms</a></li>
            <li><a href="#banquet">Banquet</a></li>
            <li><a href="#conference">Conference</a></li>
            <li><a href="#celebrations">Celebrations</a></li>
          </ul>
        </div>
        <div>
          <h5 class="font-semibold">Support</h5>
          <ul class="mt-2 space-y-2 text-white/70">
            <li>FAQ</li>
            <li>Policies</li>
            <li>Contact</li>
          </ul>
        </div>
        <div>
          <h5 class="font-semibold">Newsletter</h5>
          <div class="mt-2 flex">
            <input type="email" placeholder="Email address" class="flex-1 px-3 py-2 rounded-l-lg bg-white/5 text-white placeholder-white/60 border border-white/20"/>
            <button class="px-4 py-2 rounded-r-lg bg-gold-400 text-brand-900 hover:bg-gold-500">Join</button>
          </div>
        </div>
      </div>
      <div class="mt-8 text-xs text-white/50">
        © 2025 Deys Luxury Hotel. All rights reserved.
      </div>
    </div>
  </footer>

  <!-- Optional: Smooth scroll for internal anchors -->
  <script>
    document.querySelectorAll('a[href^="#"]').forEach(a=>{
      a.addEventListener('click', e=>{
        const id = a.getAttribute('href').slice(1);
        const el = document.getElementById(id);
        if (el) {
          e.preventDefault();
          el.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });
  </script>
</body>
</html>