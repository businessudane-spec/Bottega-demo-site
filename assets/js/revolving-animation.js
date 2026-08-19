/* ==========================================================================
   Revolving Wheel GSAP Animation Engine (Rectangular Gallery Cards)
   ========================================================================== */

function initRevolvingAnimation() {
  if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
    setTimeout(initRevolvingAnimation, 100);
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  // Clear existing triggers
  ScrollTrigger.getAll().forEach(t => t.kill());

  /* ========================================================================
     SECTION 1: Starburst -> Straight Cards -> Revolving Rectangular Ring
     ======================================================================== */
  const wrapper1 = document.querySelector('.revolving-scroll-wrapper');
  const canvas1 = document.querySelector('.revolving-canvas');

  if (wrapper1 && canvas1) {
    const cards1 = document.querySelectorAll('.revolving-scroll-wrapper .gallery-card');
    const totalCards1 = cards1.length;

    cards1.forEach((card, index) => {
      const progress = index / (totalCards1 - 1);
      const startX = (1 - progress) * -360 + progress * 460; 
      const startY = (1 - progress) * 200 + progress * -220;

      gsap.set(card, {
        transformOrigin: 'center center',
        x: startX,
        y: startY,
        rotation: 0,
        borderRadius: '12px',
        scale: 1,
        opacity: 0
      });
    });

    const tl1 = gsap.timeline({
      scrollTrigger: {
        trigger: wrapper1,
        start: 'top top',
        end: '+=3600',
        pin: canvas1,
        pinSpacing: true,
        scrub: 0.8,
        anticipatePin: 1,
        invalidateOnRefresh: true,
      }
    });

    // Phase 1: White -> Black
    tl1.to(canvas1, { backgroundColor: '#050505', color: '#ffffff', ease: 'none', duration: 2 }, 0)
       .to('.starburst-dial-container', { rotation: 180, ease: 'none', duration: 2 }, 0);

    // Phase 2: Straight Rectangular Cards
    tl1.to('.stage1-headline', { opacity: 0, y: -40, duration: 1 }, 2)
       .to('.starburst-dial-container', { opacity: 0, scale: 0.8, duration: 1 }, 2)
       .to('.stage2-container', { opacity: 1, y: 0, duration: 1.2 }, 2.5)
       .to('.revolving-scroll-wrapper .gallery-wheel-wrapper', { autoAlpha: 1, duration: 0.5 }, 2.5);

    cards1.forEach((card, index) => {
      const progressStart = index / (totalCards1 - 1);
      const progressEnd = Math.max(0, (index - 1.5) / (totalCards1 - 1));

      const startX = (1 - progressStart) * -360 + progressStart * 460;
      const startY = (1 - progressStart) * 200 + progressStart * -220;
      const endX = (1 - progressEnd) * -360 + progressEnd * 460;
      const endY = (1 - progressEnd) * 200 + progressEnd * -220;

      tl1.fromTo(card, 
        { opacity: 0, x: startX, y: startY, rotation: 0, borderRadius: '12px', scale: 1 },
        { opacity: 1, x: endX, y: endY, rotation: 0, borderRadius: '12px', scale: 1, ease: 'none', duration: 3 },
        2.5
      );
    });

    // Phase 3: Revolving Rectangular Ring (NO CIRCULAR CROPPING - Clean 12px rounded rectangle!)
    tl1.to('.stage2-container', { opacity: 0, y: -30, duration: 1 }, 5.5)
       .to('.stage3-container', { opacity: 1, y: 0, duration: 1.5 }, 6.0);

    const radius1 = Math.min(window.innerWidth * 0.36, 440);

    cards1.forEach((card, index) => {
      const angle = (index / totalCards1) * (2 * Math.PI);
      const targetX = Math.cos(angle) * radius1 - 100;
      const targetY = Math.sin(angle) * radius1 - 125;

      tl1.to(card, {
        x: targetX,
        y: targetY,
        rotation: 0,
        borderRadius: '12px', // CLEAN RECTANGULAR CARDS!
        scale: 0.72,
        ease: 'power2.inOut',
        duration: 2.5
      }, 5.8);
    });

    tl1.to('.revolving-scroll-wrapper .gallery-wheel-wrapper', {
      rotation: 360,
      ease: 'none',
      duration: 4
    }, 8.2);
  }

  /* ========================================================================
     SECTION 2: Automatic Infinite Horizontal Brand Marquee Ticker (No Circles)
     ======================================================================== */
  const wrapper2 = document.querySelector('.revolving-scroll-wrapper-2');
  const canvas2 = document.querySelector('.revolving-canvas-2');

  if (wrapper2 && canvas2) {
    ScrollTrigger.create({
      trigger: wrapper2,
      start: 'top top',
      end: '+=2000',
      pin: canvas2,
      pinSpacing: true,
      anticipatePin: 1
    });
  }

  ScrollTrigger.refresh();
}

if (document.readyState === 'complete' || document.readyState === 'interactive') {
  initRevolvingAnimation();
} else {
  document.addEventListener('DOMContentLoaded', initRevolvingAnimation);
}

window.addEventListener('load', () => {
  if (typeof ScrollTrigger !== 'undefined') ScrollTrigger.refresh();
});
