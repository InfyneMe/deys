<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dey's - Luxury Hotel & Resort</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <!-- Premium Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Playfair+Display:wght@300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'calligraphy': ['Dancing Script', 'cursive'],
                        'luxury': ['Playfair Display', 'serif'],
                        'modern': ['Inter', 'sans-serif'],
                    },
                    colors: {
                        'gold': {
                            50: '#fefdf8',
                            100: '#fdf6e3',
                            200: '#faecc1',
                            300: '#f6de94',
                            400: '#f1c965',
                            500: '#eab308',
                            600: '#d97706',
                            700: '#b45309',
                            800: '#92400e',
                            900: '#78350f',
                        },
                        'sage': {
                            50: '#f6f7f7',
                            100: '#e3e8e8',
                            200: '#c7d2d3',
                            300: '#a4b5b7',
                            400: '#7a9194',
                            500: '#5f7578',
                            600: '#526064',
                            700: '#475154',
                            800: '#3e4447',
                            900: '#363a3c',
                        }
                    },
                    animation: {
                        'fade-in': 'fadeIn 1s ease-out',
                        'slide-up': 'slideUp 1.2s ease-out',
                        'float': 'float 3s ease-in-out infinite',
                        'scale-in': 'scaleIn 0.8s ease-out',
                    }
                }
            }
        }
    </script>
    
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from { 
                opacity: 0; 
                transform: translateY(40px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }
        
        @keyframes scaleIn {
            from { 
                opacity: 0; 
                transform: scale(0.95); 
            }
            to { 
                opacity: 1; 
                transform: scale(1); 
            }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .hero-overlay {
            background: linear-gradient(135deg, 
                rgba(95, 117, 120, 0.7) 0%, 
                rgba(58, 76, 78, 0.6) 40%, 
                rgba(47, 81, 84, 0.5) 70%, 
                rgba(54, 58, 60, 0.8) 100%);
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.1);
        }
        
        .luxury-button {
            background: linear-gradient(135deg, #f1c965, #eab308);
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(234, 179, 8, 0.2);
        }
        
        .luxury-button:hover {
            background: linear-gradient(135deg, #eab308, #d97706);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(234, 179, 8, 0.3);
        }
        
        .input-modern {
            transition: all 0.3s ease;
            border: 2px solid #e5e7eb;
        }
        
        .input-modern:focus {
            border-color: #eab308;
            box-shadow: 0 0 0 3px rgba(234, 179, 8, 0.1);
        }
        
        .video-overlay {
            background: rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(5px);
        }
        
        .section-bg {
            background: linear-gradient(135deg, #f6f7f7 0%, #e3e8e8 100%);
        }
        
        .parallax {
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="font-modern text-gray-800">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-white/10 backdrop-blur-md transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Hamburger Menu -->
                {{-- <button class="text-white hover:text-gold-300 transition-colors" id="menu-btn">
                    <div class="space-y-1">
                        <div class="w-6 h-0.5 bg-current"></div>
                        <div class="w-6 h-0.5 bg-current"></div>
                        <div class="w-6 h-0.5 bg-current"></div>
                    </div>
                    <span class="ml-2 text-sm font-light tracking-widest uppercase">Menu</span>
                </button> --}}
                
                <!-- Brand Logo -->
                <div class="text-center">
                    <h1 class="text-3xl font-calligraphy font-bold text-white">
                        dey's
                    </h1>
                    <p class="text-xs text-white/80 font-light tracking-widest uppercase">
                        Hotel & Resort
                    </p>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex items-center space-x-6">
                    <button class="text-white hover:text-gold-300 transition-colors text-sm font-light tracking-widest uppercase">
                        Apply
                    </button>
                    <div class="w-px h-6 bg-white/30"></div>
                    <button class="text-white hover:text-gold-300 transition-colors text-sm font-light tracking-widest uppercase">
                        Login
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center parallax"
             style="background-image: url('https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2149&q=80')">
        
        <div class="absolute inset-0 hero-overlay"></div>
        
        <!-- Grid Overlay -->
        <div class="absolute inset-0 opacity-10">
            <div class="w-full h-full" style="background-image: 
                repeating-linear-gradient(0deg, transparent, transparent 100px, rgba(255,255,255,0.1) 100px, rgba(255,255,255,0.1) 101px),
                repeating-linear-gradient(90deg, transparent, transparent 100px, rgba(255,255,255,0.1) 100px, rgba(255,255,255,0.1) 101px)">
            </div>
        </div>
        
        <!-- Hero Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-4 py-20">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-white animate-slide-up">
                    <div class="mb-8">
                        <div class="w-16 h-0.5 bg-gold-400 mb-6"></div>
                        <h1 class="text-5xl md:text-7xl font-luxury font-light leading-tight mb-6">
                            Unlock Your<br>
                            <span class="font-semibold">Best Stays</span>
                        </h1>
                        <p class="text-lg md:text-xl leading-relaxed mb-8 max-w-lg opacity-90">
                            Welcome to luxury, where every moment becomes an experience of 
                            comfort, elegance and personal service. With lavish amenities, 
                            sophisticated design and attention to detail, our hotel caters to guests 
                            seeking a luxurious and exclusive stay.
                        </p>
                        <button class="luxury-button text-black px-8 py-3 rounded-full font-semibold flex items-center group">
                            Book Now 
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Right Content - Video Preview -->
                <div class="animate-scale-in" style="animation-delay: 0.4s;">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80" 
                             alt="Hotel Video Preview" 
                             class="w-full h-64 object-cover">
                        <div class="absolute inset-0 video-overlay flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="bg-white/20 backdrop-blur-sm rounded-full p-4 mb-3 inline-block">
                                    <i class="fas fa-play text-2xl"></i>
                                </div>
                                <h3 class="text-lg font-semibold mb-1">Watch A Video</h3>
                                <p class="text-sm opacity-80">About Us</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Second Section -->
    <section class="py-20 section-bg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Left Content -->
                <div class="animate-slide-up">
                    <div class="mb-6">
                        <p class="text-sm font-medium text-sage-600 tracking-widest uppercase mb-4">
                            The Luxury Hotel
                        </p>
                        <div class="w-16 h-0.5 bg-gold-500 mb-8"></div>
                        <h2 class="text-4xl md:text-6xl font-luxury font-light leading-tight mb-6">
                            Enjoy a Luxury<br>
                            <span class="font-semibold">Experience</span>
                        </h2>
                        <p class="text-lg leading-relaxed mb-8 text-sage-700 max-w-lg">
                            Discover unparalleled luxury in every detail. From our meticulously 
                            designed spaces to our world-class service, every moment at Dey's 
                            is crafted to exceed your expectations and create lasting memories.
                        </p>
                        <button class="luxury-button text-black px-8 py-3 rounded-full font-semibold flex items-center group">
                            Book Now 
                            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Right Content - Hotel Image -->
                <div class="animate-scale-in" style="animation-delay: 0.3s;">
                    <div class="rounded-3xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2340&q=80" 
                             alt="Luxury Hotel Experience" 
                             class="w-full h-[600px] object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="glass-card rounded-3xl p-8 md:p-12 shadow-2xl animate-slide-up">
                <!-- Booking Form Grid -->
                <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                    <!-- Check In -->
                    <div class="space-y-3">
                        <label class="block text-sm font-semibold text-gray-700 tracking-wide uppercase">
                            Check In
                        </label>
                        <div class="relative">
                            <input type="date" 
                                   class="input-modern w-full px-4 py-4 rounded-xl text-gray-800 font-medium text-lg bg-white"
                                   value="2025-03-22">
                            <div class="text-sm text-gray-500 mt-2">Arrival Date</div>
                        </div>
                    </div>
                    
                    <!-- Check Out -->
                    <div class="space-y-3">
                        <label class="block text-sm font-semibold text-gray-700 tracking-wide uppercase">
                            Check Out
                        </label>
                        <div class="relative">
                            <input type="date" 
                                   class="input-modern w-full px-4 py-4 rounded-xl text-gray-800 font-medium text-lg bg-white"
                                   value="2025-04-02">
                            <div class="text-sm text-gray-500 mt-2">Departure Date</div>
                        </div>
                    </div>
                    
                    <!-- Adults -->
                    <div class="space-y-3">
                        <label class="block text-sm font-semibold text-gray-700 tracking-wide uppercase">
                            Adults
                        </label>
                        <div class="relative">
                            <select class="input-modern w-full px-4 py-4 rounded-xl text-gray-800 font-medium text-lg bg-white">
                                <option>1 Adult</option>
                                <option selected>2 Adults</option>
                                <option>3 Adults</option>
                                <option>4 Adults</option>
                            </select>
                            <div class="text-sm text-gray-500 mt-2">Adults</div>
                        </div>
                    </div>
                    
                    <!-- Children -->
                    <div class="space-y-3">
                        <label class="block text-sm font-semibold text-gray-700 tracking-wide uppercase">
                            Children
                        </label>
                        <div class="relative">
                            <select class="input-modern w-full px-4 py-4 rounded-xl text-gray-800 font-medium text-lg bg-white">
                                <option selected>0 Children</option>
                                <option>1 Child</option>
                                <option>2 Children</option>
                                <option>3 Children</option>
                            </select>
                            <div class="text-sm text-gray-500 mt-2">Children</div>
                        </div>
                    </div>
                    
                    <!-- Search Button -->
                    <div class="space-y-3">
                        <label class="block text-sm font-semibold text-transparent tracking-wide uppercase">
                            Search
                        </label>
                        <button class="luxury-button w-full px-6 py-4 rounded-xl text-black font-bold text-lg h-16 flex items-center justify-center">
                            Search Room
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-24 section-bg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16 animate-slide-up">
                <p class="text-sm font-medium text-sage-600 tracking-widest uppercase mb-4">
                    Our Signature Services
                </p>
                <div class="w-16 h-0.5 bg-gold-500 mx-auto mb-8"></div>
                <h2 class="text-4xl md:text-6xl font-luxury font-light leading-tight mb-6">
                    Luxury <span class="font-semibold">Experiences</span>
                </h2>
                <p class="text-lg text-sage-700 max-w-2xl mx-auto">
                    Discover our range of premium services designed to make your stay unforgettable
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Rooms -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 animate-scale-in">
                    <div class="bg-gradient-to-br from-sage-500 to-sage-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-bed text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-luxury font-semibold mb-4">Luxury Rooms</h3>
                    <p class="text-sage-600 leading-relaxed mb-6">
                        Elegantly designed rooms with premium amenities and breathtaking views.
                    </p>
                    <button class="text-gold-600 font-semibold hover:text-gold-700 transition-colors">
                        Explore Rooms →
                    </button>
                </div>
                
                <!-- Conference -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 animate-scale-in" style="animation-delay: 0.1s;">
                    <div class="bg-gradient-to-br from-blue-500 to-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-users text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-luxury font-semibold mb-4">Conference</h3>
                    <p class="text-sage-600 leading-relaxed mb-6">
                        State-of-the-art meeting facilities for successful business events.
                    </p>
                    <button class="text-gold-600 font-semibold hover:text-gold-700 transition-colors">
                        Book Meeting →
                    </button>
                </div>
                
                <!-- Banquet -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 animate-scale-in" style="animation-delay: 0.2s;">
                    <div class="bg-gradient-to-br from-purple-500 to-purple-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-glass-cheers text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-luxury font-semibold mb-4">Banquet</h3>
                    <p class="text-sage-600 leading-relaxed mb-6">
                        Grand celebration halls with exceptional catering and service.
                    </p>
                    <button class="text-gold-600 font-semibold hover:text-gold-700 transition-colors">
                        Plan Event →
                    </button>
                </div>
                
                <!-- Ceremony -->
                <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300 animate-scale-in" style="animation-delay: 0.3s;">
                    <div class="bg-gradient-to-br from-pink-500 to-pink-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-heart text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-luxury font-semibold mb-4">Ceremony</h3>
                    <p class="text-sage-600 leading-relaxed mb-6">
                        Magical wedding venues and bespoke ceremony planning services.
                    </p>
                    <button class="text-gold-600 font-semibold hover:text-gold-700 transition-colors">
                        Dream Wedding →
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-24 parallax relative"
             style="background-image: url('https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80')">
        
        <div class="absolute inset-0 hero-overlay"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto text-center px-4">
            <div class="animate-slide-up">
                <div class="w-16 h-0.5 bg-gold-400 mx-auto mb-8"></div>
                <h2 class="text-4xl md:text-6xl font-luxury font-light text-white leading-tight mb-6">
                    Ready to Experience<br>
                    <span class="font-semibold text-gold-300">Luxury?</span>
                </h2>
                <p class="text-xl text-white/90 mb-12 max-w-2xl mx-auto leading-relaxed">
                    Join thousands of discerning guests who have chosen Dey's for their most important moments
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <button class="luxury-button text-black px-12 py-4 rounded-full text-lg font-bold">
                        Book Your Stay
                    </button>
                    <button class="border-2 border-white text-white px-12 py-4 rounded-full text-lg font-semibold hover:bg-white hover:text-gray-900 transition-all duration-300">
                        Contact Us
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <!-- Brand -->
                <div class="md:col-span-2">
                    <h3 class="text-4xl font-calligraphy font-bold mb-4">dey's</h3>
                    <p class="text-gold-200 text-lg font-luxury mb-6">Hotel & Resort</p>
                    <p class="text-gray-400 leading-relaxed mb-6 max-w-md">
                        Experience the pinnacle of luxury hospitality where every detail is 
                        crafted to perfection for unforgettable moments.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-gold-600 rounded-full flex items-center justify-center hover:bg-gold-500 transition-colors">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gold-600 rounded-full flex items-center justify-center hover:bg-gold-500 transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gold-600 rounded-full flex items-center justify-center hover:bg-gold-500 transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Services -->
                <div>
                    <h4 class="text-xl font-luxury font-bold mb-6 text-gold-300">Services</h4>
                    <ul class="space-y-3 text-gray-300">
                        <li><a href="#" class="hover:text-gold-300 transition-colors">Luxury Rooms</a></li>
                        <li><a href="#" class="hover:text-gold-300 transition-colors">Conference Halls</a></li>
                        <li><a href="#" class="hover:text-gold-300 transition-colors">Banquet Events</a></li>
                        <li><a href="#" class="hover:text-gold-300 transition-colors">Wedding Ceremonies</a></li>
                    </ul>
                </div>
                
                <!-- Contact -->
                <div>
                    <h4 class="text-xl font-luxury font-bold mb-6 text-gold-300">Contact</h4>
                    <div class="space-y-3 text-gray-300">
                        <p class="flex items-start">
                            <i class="fas fa-map-marker-alt mr-3 text-gold-400 mt-1"></i>
                            123 Luxury Boulevard<br>Delhi 110001, India
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-phone mr-3 text-gold-400"></i>
                            +91 XXX XXX XXXX
                        </p>
                        <p class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-gold-400"></i>
                            info@deyshotel.com
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-400">
                    &copy; 2025 <span class="font-calligraphy text-gold-300">Dey's</span> Hotel & Resort. All Rights Reserved.
                </p>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="fixed inset-0 bg-gray-900/95 backdrop-blur-md z-50 hidden">
        <div class="flex flex-col items-center justify-center h-full space-y-8">
            <button id="close-menu" class="absolute top-8 right-8 text-white text-2xl">
                <i class="fas fa-times"></i>
            </button>
            <a href="#" class="text-2xl text-white hover:text-gold-300 font-luxury">Home</a>
            <a href="#" class="text-2xl text-white hover:text-gold-300 font-luxury">Rooms</a>
            <a href="#" class="text-2xl text-white hover:text-gold-300 font-luxury">Services</a>
            <a href="#" class="text-2xl text-white hover:text-gold-300 font-luxury">About</a>
            <a href="#" class="text-2xl text-white hover:text-gold-300 font-luxury">Contact</a>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        const menuBtn = document.getElementById('menu-btn');
        const closeMenu = document.getElementById('close-menu');
        const mobileMenu = document.getElementById('mobile-menu');
        
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('hidden');
        });
        
        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });

        // Dynamic navbar on scroll
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.style.background = 'rgba(255, 255, 255, 0.95)';
                nav.classList.add('shadow-lg');
                nav.querySelectorAll('button, h1, p').forEach(el => {
                    el.classList.add('text-gray-800');
                    el.classList.remove('text-white');
                });
            } else {
                nav.style.background = 'rgba(255, 255, 255, 0.1)';
                nav.classList.remove('shadow-lg');
                nav.querySelectorAll('button, h1, p').forEach(el => {
                    el.classList.add('text-white');
                    el.classList.remove('text-gray-800');
                });
            }
        });

        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0) scale(1)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-slide-up, .animate-scale-in').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px) scale(0.95)';
            observer.observe(el);
        });

        // Form submission
        document.querySelector('.luxury-button').addEventListener('click', (e) => {
            if (e.target.textContent.includes('Search Room')) {
                e.preventDefault();
                alert('Searching for available rooms... You will be redirected to our booking system shortly!');
            }
        });
    </script>
</body>
</html>
