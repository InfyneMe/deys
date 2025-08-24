<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Dey's | Luxury Hotel & Resort</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Fonts: Calligraphy for brand + modern sans for body -->
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"/>

  <style>
    :root{
      --gold:#D4AF37;
      --deep:#0F172A; /* slate-900 like */
      --ink:#0B1220;
    }
    .brand { font-family: 'Great Vibes', cursive; }
    .copy  { font-family: 'Inter', system-ui, -apple-system, Segoe UI, Roboto, "Helvetica Neue", Arial, "Noto Sans", "Apple Color Emoji", "Segoe UI Emoji"; }

    /* Premium glass cards */
    .glass {
      background: linear-gradient(180deg, rgba(255,255,255,.12), rgba(255,255,255,.06));
      border: 1px solid rgba(255,255,255,.22);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
    }

    /* Subtle gold sheen */
    .sheen {
      position: relative;
      overflow: hidden;
    }
    .sheen::after{
      content:'';
      position:absolute;
      top:-120%;
      left:-120%;
      width:240%;
      height:240%;
      background: conic-gradient(from 210deg, transparent 0 30%, rgba(255,255,255,.18) 35% 40%, transparent 45% 100%);
      transform: rotate(8deg);
      transition: transform .8s ease;
      pointer-events:none;
    }
    .sheen:hover::after{
      transform: translateX(8%) translateY(8%) rotate(12deg);
    }

    /* Parallax containers */
    .parallax {
      perspective: 1px;
      transform-style: preserve-3d;
      overflow-x: hidden;
      overflow-y: auto;
    }
    .layer-back   { transform: translateZ(-1px) scale(2); }
    .layer-mid    { transform: translateZ(-.35px) scale(1.35); }
    .layer-front  { transform: translateZ(0); }

    /* Hero overlay gradient */
    .hero-gradient {
      background: radial-gradient(1200px 600px at 20% 20%, rgba(12,15,28,.55), transparent 60%), linear-gradient(180deg, rgba(5,8,20,.85), rgba(5,8,20,.35) 30%, rgba(5,8,20,.85));
    }

    /* Reveal on scroll */
    .reveal { opacity: 0; transform: translateY(26px); transition: opacity .8s ease, transform .8s ease; }
    .reveal.show { opacity:1; transform: translateY(0); }

    /* Gold text util */
    .text-gold { color: var(--gold); }
    .bg-gold   { background-color: var(--gold); }
    .border-gold { border-color: var(--gold); }
  </style>
</head>

<body class="copy text-slate-100 bg-[var(--ink)] selection:bg-amber-300 selection:text-slate-900">
  <!-- NAVBAR -->
  <header id="nav" class="fixed inset-x-0 top-0 z-50 transition-all">
    <div class="max-w-7xl mx-auto px-6">
      <div class="flex items-center justify-between py-4">
        <a href="#" class="flex items-center space-x-3">
          <span class="brand text-4xl leading-none text-gold">dey's</span>
          <span class="tracking-wider uppercase text-xs text-slate-300">Hotel & Resort</span>
        </a>

        <nav class="hidden md:flex items-center space-x-8">
          <a href="#home" class="hover:text-gold">Home</a>
          <a href="#suites" class="hover:text-gold">Suites</a>
          <a href="#dining" class="hover:text-gold">Dining</a>
          <a href="#events" class="hover:text-gold">Weddings & Events</a>
          <a href="#contact" class="hover:text-gold">Contact</a>
        </nav>

        <div class="hidden md:flex items-center space-x-3">
          <button class="px-5 py-2 rounded-full border border-slate-500/50 hover:border-gold hover:text-gold transition-colors">Login</button>
          <a href="#booking" class="px-6 py-2 rounded-full bg-gold text-slate-900 font-semibold hover:opacity-90 transition-opacity sheen">Book Now</a>
        </div>

        <button id="menuBtn" class="md:hidden p-2 rounded-lg border border-slate-700">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
        </button>
      </div>
    </div>
    <div id="mobileMenu" class="md:hidden hidden border-t border-slate-800 bg-slate-900/70 backdrop-blur">
      <div class="max-w-7xl mx-auto px-6 py-4 space-y-3">
        <a href="#home" class="block">Home</a>
        <a href="#suites" class="block">Suites</a>
        <a href="#dining" class="block">Dining</a>
        <a href="#events" class="block">Weddings & Events</a>
        <a href="#contact" class="block">Contact</a>
        <a href="#booking" class="inline-block mt-2 px-5 py-2 rounded-full bg-gold text-slate-900 font-semibold">Book Now</a>
      </div>
    </div>
  </header>

  <!-- HERO with multi-layer parallax -->
  <main id="home" class="parallax min-h-screen">
    <!-- Back image -->
    <div aria-hidden="true" class="layer-back absolute inset-0">
      <img src="{{ asset('weed4.jpg') }}" class="w-full h-full object-cover" alt="">
    </div>

    <!-- Mid floating decor -->
    <div aria-hidden="true" class="layer-mid absolute inset-0 opacity-50 mix-blend-screen">
      <img src="" alt="">
    </div>

    <!-- Foreground content -->
    <section class="relative layer-front min-h-screen hero-gradient flex items-center">
      <div class="max-w-7xl mx-auto px-6 w-full">
        <div class="max-w-3xl">
          <p class="uppercase tracking-[.3em] text-xs text-slate-300/80 mb-6">Where time slows, and luxury whispers</p>
          <h1 class="text-5xl md:text-7xl font-extralight leading-tight">
            Unlock Your Most
            <span class="font-semibold text-gold">Memorable</span><br/>Stays at <span class="font-semibold brand text-gold leading-none">dey's</span>
          </h1>
          <p class="mt-6 text-lg text-slate-300/90">
            A refined sanctuary by the water. Intuitive service, artisanal dining, and suites bathed in warm modernism.
          </p>

          <div class="mt-8 flex flex-col sm:flex-row gap-4">
            <a href="#booking" class="px-8 py-4 rounded-full bg-gold text-slate-900 font-semibold sheen text-center">Book Your Stay</a>
            <a href="#video" class="px-8 py-4 rounded-full glass border border-slate-100/20 text-slate-100 flex items-center justify-center gap-3">
              <span class="inline-grid place-items-center w-9 h-9 rounded-full bg-white/20">
                <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
              </span>
              Watch our story
            </a>
          </div>
        </div>

        <!-- Booking bar floating -->
        <div id="booking" class="mt-16 md:mt-24">
          <div class="glass rounded-2xl p-4 md:p-6 shadow-2xl ring-1 ring-white/10">
            <form class="grid grid-cols-2 md:grid-cols-5 gap-3">
              <div>
                <label class="text-xs uppercase tracking-wider text-slate-300">Check In</label>
                <input type="date" class="mt-1 w-full bg-transparent border border-slate-700 rounded-xl px-3 py-3 focus:outline-none focus:border-gold">
              </div>
              <div>
                <label class="text-xs uppercase tracking-wider text-slate-300">Check Out</label>
                <input type="date" class="mt-1 w-full bg-transparent border border-slate-700 rounded-xl px-3 py-3 focus:outline-none focus:border-gold">
              </div>
              <div>
                <label class="text-xs uppercase tracking-wider text-slate-300">Adults</label>
                <select class="mt-1 w-full bg-transparent border border-slate-700 rounded-xl px-3 py-3 focus:outline-none focus:border-gold">
                  <option class="text-slate-900">1</option><option class="text-slate-900">2</option><option class="text-slate-900">3</option><option class="text-slate-900">4</option>
                </select>
              </div>
              <div>
                <label class="text-xs uppercase tracking-wider text-slate-300">Children</label>
                <select class="mt-1 w-full bg-transparent border border-slate-700 rounded-xl px-3 py-3 focus:outline-none focus:border-gold">
                  <option class="text-slate-900">0</option><option class="text-slate-900">1</option><option class="text-slate-900">2</option><option class="text-slate-900">3</option>
                </select>
              </div>
              <div class="flex items-end">
                <button class="w-full px-6 py-3 rounded-xl bg-gold text-slate-900 font-semibold sheen">Search Rooms</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- SUITES -->
  <section id="suites" class="relative py-24 bg-gradient-to-b from-slate-950 to-slate-900">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="reveal">
          <p class="text-gold uppercase tracking-[.25em] text-xs mb-4">The Suites</p>
          <h2 class="text-4xl md:text-5xl font-light leading-tight">Modern serenity with handcrafted detail</h2>
          <p class="mt-5 text-slate-300/90">Floor‑to‑ceiling vistas, bespoke furniture, and quietly intelligent lighting. Awake to the soft shimmer of the bay and end with a bath ritual infused with botanicals.</p>
          <div class="mt-8 flex gap-4">
            <a href="#" class="px-6 py-3 rounded-full bg-gold text-slate-900 font-semibold sheen">Explore Suites</a>
            <a href="#" class="px-6 py-3 rounded-full border border-slate-600 hover:border-gold hover:text-gold transition-colors">View Gallery</a>
          </div>
        </div>

        <div class="reveal">
          <div class="grid grid-cols-3 gap-4">
            <img class="col-span-2 h-72 w-full object-cover rounded-2xl shadow-2xl" src="{{ asset('hall.jpg') }}" alt="">
            <img class="col-span-1 h-72 w-full object-cover rounded-2xl" src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=1374&auto=format&fit=crop" alt="">
            <img class="col-span-1 h-56 w-full object-cover rounded-2xl" src="{{ asset('weed2.jpg') }}" alt="">
            <img class="col-span-2 h-56 w-full object-cover rounded-2xl" src="https://images.unsplash.com/photo-1554995207-c18c203602cb?q=80&w=2060&auto=format&fit=crop" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- DINING -->
  <section id="dining" class="relative py-24 bg-[url('https://images.unsplash.com/photo-1544025162-d76694265947?q=80&w=2060&auto=format&fit=crop')] bg-cover bg-center">
    <div class="absolute inset-0 bg-slate-900/70"></div>
    <div class="relative max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="reveal">
          <h2 class="text-4xl md:text-5xl font-light leading-tight">Epicurean journeys, under warm amber light</h2>
          <p class="mt-5 text-slate-200/90">Seasonal tasting menus, wood‑fire aromas, and a cellar curated around coastal terroir.</p>
          <div class="mt-8 flex gap-4">
            <a href="#" class="px-6 py-3 rounded-full bg-gold text-slate-900 font-semibold sheen">Reserve a Table</a>
            <a href="#" class="px-6 py-3 rounded-full border border-white/30 hover:border-gold hover:text-gold transition-colors">View Menu</a>
          </div>
        </div>
        <div class="reveal">
          <div class="glass rounded-3xl overflow-hidden">
            <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?q=80&w=2060&auto=format&fit=crop" class="w-full h-[420px] object-cover" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WEDDINGS & EVENTS -->
  <section id="events" class="relative py-26 bg-gradient-to-b from-slate-900 to-slate-950">
    <div class="max-w-7xl mt-x mx-auto px-6">
      <div class="flex items-end justify-between gap-6">
        <div class="reveal">
          <p class="text-gold uppercase tracking-[.25em] text-xs mb-3">Occasions</p>
          <h2 class="text-4xl md:text-5xl font-light">Weddings, Ceremonies & Conferences</h2>
          <p class="mt-4 text-slate-300/90 max-w-2xl">From intimate vows by the reflecting pool to grand ballroom receptions and executive summits—our dedicated planners orchestrate every detail with quiet perfection.</p>
        </div>
        <a href="#" class="hidden md:inline-block px-6 py-3 rounded-full border border-slate-600 hover:border-gold hover:text-gold transition-colors">Download Brochure</a>
      </div>

      <!-- Cards -->
      <div class="mt-12 grid md:grid-cols-3 gap-8">
        <!-- Weddings -->
        <article class="reveal glass rounded-3xl overflow-hidden shadow-2xl">
          <div class="h-56 w-full overflow-hidden">
            <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" src="{{ asset('weed2.jpg') }}" alt="Wedding">
          </div>
          <div class="p-6">
            <h3 class="text-2xl font-semibold">Weddings</h3>
            <p class="mt-2 text-slate-300/90">Garden terrace ceremonies framed by coastal breeze, followed by candlelit banquets.</p>
            <div class="mt-5 flex items-center justify-between">
              <span class="text-gold font-semibold">Up to 280 guests</span>
              <a href="#" class="px-4 py-2 rounded-full bg-gold text-slate-900 font-semibold">Plan Now</a>
            </div>
          </div>
        </article>

        <!-- Ceremonies -->
        <article class="reveal glass rounded-3xl overflow-hidden shadow-2xl">
          <div class="h-56 w-full overflow-hidden">
            <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" src="{{ asset('weed4.jpg') }}" alt="Ceremony">
          </div>
          <div class="p-6">
            <h3 class="text-2xl font-semibold">Ceremonies</h3>
            <p class="mt-2 text-slate-300/90">Cultural rituals and milestone moments set against refined, light‑drenched spaces.</p>
            <div class="mt-5 flex items-center justify-between">
              <span class="text-gold font-semibold">Indoor & Outdoor</span>
              <a href="#" class="px-4 py-2 rounded-full bg-gold text-slate-900 font-semibold">Enquire</a>
            </div>
          </div>
        </article>

        <!-- Conferences -->
        <article class="reveal glass rounded-3xl overflow-hidden shadow-2xl">
          <div class="h-56 w-full overflow-hidden">
            <img class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?q=80&w=1974&auto=format&fit=crop" alt="Conference">
          </div>
          <div class="p-6">
            <h3 class="text-2xl font-semibold">Conferences</h3>
            <p class="mt-2 text-slate-300/90">Acoustic‑treated halls, modular seating, LED walls, and executive breakout suites.</p>
            <div class="mt-5 flex items-center justify-between">
              <span class="text-gold font-semibold">Up to 600 delegates</span>
              <a href="#" class="px-4 py-2 rounded-full bg-gold text-slate-900 font-semibold">Get Quote</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- CALL TO ACTION PARALLAX STRIP -->
  <section class="relative">
    <div class="absolute inset-0">
      <img src="https://images.unsplash.com/photo-1501117716987-c8e2a3a67e0e?q=80&w=2060&auto=format&fit=crop" class="w-full h-full object-cover" alt="">
    </div>
    <div class="relative py-24 bg-slate-900/70 backdrop-blur-sm">
      <div class="max-w-7xl mx-auto px-6 text-center">
        <h3 class="text-3xl md:text-4xl font-light">Your celebration deserves a timeless address</h3>
        <p class="mt-3 text-slate-200/90">Let our planners craft an itinerary that feels effortless and unforgettable.</p>
        <a href="#events" class="mt-6 inline-block px-8 py-4 rounded-full bg-gold text-slate-900 font-semibold sheen">Start Planning</a>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="py-24 bg-slate-950">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12">
      <div class="reveal">
        <h3 class="text-3xl md:text-4xl font-light">We’d love to host your next chapter</h3>
        <p class="mt-4 text-slate-300/90">123 Luxury Avenue, Premium District, City 12345</p>
        <div class="mt-6 space-y-2 text-slate-300">
          <p>+1 (555) 123-4567</p>
          <p>reservations@deyshotel.com</p>
        </div>
        <div class="mt-8 flex gap-3">
          <a class="px-5 py-3 rounded-full border border-slate-700 hover:border-gold hover:text-gold transition-colors" href="#">Directions</a>
          <a class="px-5 py-3 rounded-full bg-gold text-slate-900 font-semibold sheen" href="#booking">Book Now</a>
        </div>
      </div>
      <div class="reveal">
        <div class="glass rounded-3xl p-6">
          <iframe class="w-full rounded-2xl h-80 grayscale-[20%]" src="https://maps.google.com/maps?q=hotel&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-black py-12 border-t border-white/10">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-6">
      <div class="flex items-center gap-3">
        <span class="brand text-3xl text-gold">Dey's</span>
        <span class="text-xs tracking-wider uppercase text-slate-400">Hotel & Resort</span>
      </div>
      <p class="text-slate-400">&copy; 2025 Dey’s. All rights reserved.</p>
      <div class="flex gap-4">
        <a class="hover:text-gold" href="#">Instagram</a>
        <a class="hover:text-gold" href="#">Facebook</a>
        <a class="hover:text-gold" href="#">X</a>
      </div>
    </div>
  </footer>

  <script>
    // Mobile menu
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');
    menuBtn?.addEventListener('click', ()=> mobileMenu.classList.toggle('hidden'));

    // Sticky nav background
    const nav = document.getElementById('nav');
    const onScrollNav = () => {
      if (window.scrollY > 60) {
        nav.classList.add('backdrop-blur','bg-slate-900/70','border-b','border-white/10');
      } else {
        nav.classList.remove('backdrop-blur','bg-slate-900/70','border-b','border-white/10');
      }
    };
    window.addEventListener('scroll', onScrollNav); onScrollNav();

    // Reveal on scroll
    const io = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        if(e.isIntersecting){ e.target.classList.add('show'); io.unobserve(e.target); }
      })
    }, { threshold: .12 });
    document.querySelectorAll('.reveal').forEach(el=> io.observe(el));
  </script>
</body>
</html>
