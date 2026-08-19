<?php
/**
 * Bottega — Editorial Architecture & Design Homepage Template
 */

// Fallback stubs for standalone local PHP preview environment
if (!function_exists('get_header')) {
  function get_header() {
    if (file_exists(__DIR__ . '/header.php')) include __DIR__ . '/header.php';
  }
}
if (!function_exists('get_footer')) {
  function get_footer() {
    if (file_exists(__DIR__ . '/footer.php')) include __DIR__ . '/footer.php';
  }
}
if (!function_exists('home_url')) {
  function home_url($path = '/') { return $path; }
}

get_header();
?>

<main class="bottega-main">

    <!-- =====================================================
         1. HERO SECTION
    ====================================================== -->
    <section class="bottega-hero-section">
        <div class="bottega-hero-bg" style="background-image: url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=2000&q=85');"></div>
        <div class="bottega-hero-overlay"></div>
        <div class="bottega-hero-content">
            <h1 class="bottega-hero-title">
                Designed<br>
                Around Place.<br>
                Built to Last.
            </h1>
        </div>
    </section>

    <!-- =====================================================
         2. ABOUT & STATEMENT SECTION
    ====================================================== -->
    <section class="bottega-statement-section" id="about">
        <div class="bottega-container">
            <div class="statement-grid">
                <div class="statement-meta">
                    <span class="section-label">WHO WE ARE</span>
                </div>
                <div class="statement-body">
                    <h2 class="statement-heading">
                        We create architecture that belongs to its context, its people, and its future.
                    </h2>
                    
                    <div class="statement-text-grid">
                        <p class="statement-desc">
                            Design is not merely an aesthetic choice—it is a dialogue between land, material, climate, and human ritual. We create enduring structures that age gracefully alongside the landscapes they inhabit.
                        </p>
                        
                        <div class="statement-stats-grid">
                            <div class="stat-item">
                                <span class="stat-number">15+</span>
                                <span class="stat-label">Years Experience</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">120+</span>
                                <span class="stat-label">Projects Built</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">80+</span>
                                <span class="stat-label">Happy Clients</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">4A</span>
                                <span class="stat-label">Design Awards</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Dual Media Showcase (Sketch + Photo) -->
            <div class="dual-media-grid">
                <div class="dual-media-item sketch-card">
                    <img src="https://images.unsplash.com/photo-1600565193348-f74bd3c7ccdf?auto=format&fit=crop&w=1200&q=80" alt="Architectural Plan & Elevation Sketch" class="dual-img">
                    <span class="media-caption">Architectural Elevation & Concept Drawing</span>
                </div>
                <div class="dual-media-item photo-card">
                    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&w=1200&q=80" alt="Concrete and Tropical Architecture" class="dual-img">
                    <span class="media-caption">Courtyard Residence, Calicut</span>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================
         3. SERVICES SECTION (WHAT WE DO)
    ====================================================== -->
    <section class="bottega-services-section" id="services">
        <div class="bottega-container">
            <div class="services-header">
                <span class="section-label">OUR SERVICES</span>
                <h2 class="services-main-heading">Comprehensive Spatial & Architectural Capabilities</h2>
            </div>

            <div class="services-grid">
                <div class="services-list-col">
                    <ul class="services-accordion">
                        <li class="service-item active" data-img="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1400&q=80" data-title="Architecture" data-desc="Private residences, luxury villas, and institutional complexes designed around climate, context, and tactile materiality.">
                            <div class="service-title-wrap">
                                <h3>Architectural Design</h3>
                                <span class="accordion-icon">↓</span>
                            </div>
                        </li>
                        <li class="service-item" data-img="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1400&q=80" data-title="Interior Design" data-desc="Bespoke interior spaces curated with custom furniture, warm lighting, natural stone, and organic wood textures.">
                            <div class="service-title-wrap">
                                <h3>Interior Design</h3>
                                <span class="accordion-icon">↓</span>
                            </div>
                        </li>
                        <li class="service-item" data-img="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=1400&q=80" data-title="Master Planning" data-desc="Comprehensive master plans for eco-resorts, residential communities, and cultural landmarks harmonized with nature.">
                            <div class="service-title-wrap">
                                <h3>Master Planning</h3>
                                <span class="accordion-icon">↓</span>
                            </div>
                        </li>
                        <li class="service-item" data-img="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=1400&q=80" data-title="Landscape Architecture" data-desc="Tropical landscape architecture integrating native flora, cascading water features, and outdoor living terraces.">
                            <div class="service-title-wrap">
                                <h3>Landscape Architecture</h3>
                                <span class="accordion-icon">↓</span>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="services-preview-col">
                    <div class="service-preview-card">
                        <img id="service-preview-img" src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1400&q=80" alt="Featured Architecture Project" class="preview-img">
                        <div class="preview-overlay">
                            <span id="service-preview-title" class="preview-title">Architectural Design</span>
                            <p id="service-preview-desc" class="preview-desc">Private residences, luxury villas, and institutional complexes designed around climate, context, and tactile materiality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================
         4. PHILOSOPHY & VISION SECTIONS
    ====================================================== -->
    <section class="bottega-philosophy-section philosophy-1">
        <div class="bottega-container">
            <div class="philosophy-grid">
                <div class="philosophy-sidebar">
                    <div class="meta-group">
                        <span class="meta-label">Location</span>
                        <span class="meta-value">South India</span>
                    </div>
                    <div class="meta-group">
                        <span class="meta-label">Practice</span>
                        <span class="meta-value">Architecture, Interior, Master Planning</span>
                    </div>
                    <div class="meta-group">
                        <span class="meta-label">Company</span>
                        <span class="meta-value">Bottega</span>
                    </div>
                </div>

                <div class="philosophy-content">
                    <h2 class="philosophy-heading">
                        Architecture shaped by place, material, and the way people live.
                    </h2>
                    <p class="philosophy-paragraph">
                        We observe how light filters through courtyards, how monsoon rains flow over sloped roofs, and how native teak and granite anchor buildings into the terrain. Our practice synthesizes regional heritage with progressive contemporary form.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bottega-philosophy-section philosophy-2">
        <div class="bottega-container">
            <div class="philosophy-grid">
                <div class="philosophy-sidebar">
                    <span class="section-label">OUR VISION</span>
                </div>

                <div class="philosophy-content">
                    <h2 class="philosophy-heading">
                        Every structure grows in a place, a context and the people who will experience it.
                    </h2>
                    <div class="philosophy-paragraphs">
                        <p>
                            We reject generic globalized aesthetics in favor of deeply rooted spatial narratives. Every project begins with a careful reading of microclimate, topography, and local building traditions.
                        </p>
                        <p>
                            By engaging local artisans and employing sustainable materials like exposed masonry, laterite stone, and reclaimed timber, we craft spaces that resonate with quiet tactile permanence.
                        </p>
                        <p>
                            Our architecture is designed not just to be photographed, but to be inhabited, felt, and cherished across generations.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================
         5. STUDIO & TEAM SECTION
    ====================================================== -->
    <section class="bottega-studio-section">
        <div class="bottega-container">
            <div class="studio-grid">
                <div class="studio-image-col">
                    <div class="studio-img-wrapper">
                        <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=1200&q=80" alt="Designers Collaborating Over Architectural Drawings" class="studio-img">
                    </div>
                </div>

                <div class="studio-content-col">
                    <span class="section-label">STUDIO COLLABORATION</span>
                    <h2 class="studio-heading">
                        Designed for place.<br>
                        Rooted in South India.
                    </h2>
                    <p class="studio-text">
                        Operating across Kerala and Karnataka, our interdisciplinary studio brings together architects, structural engineers, interior designers, and master craftsmen under a shared vision of mindful spatial creation.
                    </p>

                    <div class="studio-locations-list">
                        <div class="location-item">
                            <span class="loc-name">Calicut</span>
                            <span class="loc-desc">Main Studio & Design Lab</span>
                        </div>
                        <div class="location-item">
                            <span class="loc-name">Bangalore</span>
                            <span class="loc-desc">Consultation & Urban Office</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================
         6. PROJECTS SECTION
    ====================================================== -->
    <section class="bottega-projects-section" id="projects">
        <div class="bottega-container">
            <div class="projects-top-bar">
                <span class="section-label">SELECTED PROJECTS</span>
                <a href="#projects" class="view-all-link">VIEW ALL PROJECTS →</a>
            </div>

            <div class="projects-grid">
                <!-- Project 1 -->
                <div class="project-card card-large">
                    <div class="project-img-wrap">
                        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1000&q=80" alt="Villa Calicut" class="project-img">
                    </div>
                    <div class="project-info">
                        <h3 class="project-name">Villa Calicut</h3>
                        <span class="project-location">Calicut, Kerala</span>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="project-card card-medium">
                    <div class="project-img-wrap">
                        <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=1000&q=80" alt="Residence at Kochi" class="project-img">
                    </div>
                    <div class="project-info">
                        <h3 class="project-name">Residence at Kochi</h3>
                        <span class="project-location">Kochi, Kerala</span>
                    </div>
                </div>

                <!-- Project 3 & 4 (Stacked Column) -->
                <div class="project-col-stacked">
                    <div class="project-card card-small">
                        <div class="project-img-wrap">
                            <img src="https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?auto=format&fit=crop&w=800&q=80" alt="Wayanad Estate" class="project-img">
                        </div>
                        <div class="project-info">
                            <h3 class="project-name">Hillside Estate</h3>
                            <span class="project-location">Wayanad, Kerala</span>
                        </div>
                    </div>

                    <div class="project-card card-small">
                        <div class="project-img-wrap">
                            <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=800&q=80" alt="Coastal Sanctuary" class="project-img">
                        </div>
                        <div class="project-info">
                            <h3 class="project-name">Coastal Sanctuary</h3>
                            <span class="project-location">Kannur, Kerala</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =====================================================
         7. CONTACT SECTION
    ====================================================== -->
    <section class="bottega-contact-section" id="contact">
        <div class="bottega-container">
            <div class="contact-grid">
                <div class="contact-info-col">
                    <span class="section-label">START A CONVERSATION</span>
                    <h2 class="contact-heading">Let's create<br>spaces that<br>matter.</h2>
                    <p class="contact-subtext">Have a project in mind? Tell us what you are imagining, and let's build thoughtful spaces shaped around your vision.</p>
                    
                    <div class="contact-details">
                        <div class="contact-detail-item">
                            <span class="detail-label">Studio Address</span>
                            <p class="detail-value">Calicut, Kerala, India</p>
                        </div>
                        <div class="contact-detail-item">
                            <span class="detail-label">Email Us</span>
                            <p class="detail-value"><a href="mailto:bottegaconstructions@gmail.com">bottegaconstructions@gmail.com</a></p>
                        </div>
                        <div class="contact-detail-item">
                            <span class="detail-label">Phone Enquiry</span>
                            <p class="detail-value">+91 98765 43210</p>
                        </div>
                    </div>
                </div>

                <div class="contact-form-col">
                    <form class="bottega-form" onsubmit="event.preventDefault(); alert('Thank you for reaching out to Bottega Design Studio. We will contact you shortly.');">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="form-name">Name</label>
                                <input type="text" id="form-name" placeholder="Your full name" required>
                            </div>
                            <div class="form-group">
                                <label for="form-email">Email</label>
                                <input type="email" id="form-email" placeholder="Your email address" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group">
                                <label for="form-phone">Phone</label>
                                <input type="tel" id="form-phone" placeholder="Your contact number">
                            </div>
                            <div class="form-group">
                                <label for="form-service">Service Required</label>
                                <select id="form-service">
                                    <option value="architecture">Architectural Design</option>
                                    <option value="interior">Interior Design</option>
                                    <option value="master-planning">Master Planning</option>
                                    <option value="landscape">Landscape Architecture</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="form-message">Tell us about your project</label>
                            <textarea id="form-message" rows="4" placeholder="Share your vision, site location, timeline, or requirements..."></textarea>
                        </div>

                        <button type="submit" class="submit-btn">
                            Send Enquiry →
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
