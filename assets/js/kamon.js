/**
 * BOTTEGA DESIGN STUDIO - SCROLL-DRIVEN LOGO-TO-TEXT ANIMATION ENGINE
 * Emblem: Sumi-tate Kaku ni Yotsu Janome -> BOTTEGA Typography
 */

document.addEventListener('DOMContentLoaded', () => {

  // Check GSAP Availability
  if (typeof gsap === 'undefined' || typeof ScrollTrigger === 'undefined') {
    console.warn('GSAP or ScrollTrigger not loaded yet.');
    return;
  }

  gsap.registerPlugin(ScrollTrigger);

  // DOM Elements
  const scrollWrapper = document.getElementById('scrollWrapper');
  const progressBar = document.getElementById('progressBar');
  const progressLabel = document.getElementById('progressLabel');
  const badgePhase = document.getElementById('badgePhase');
  const badgeDesc = document.getElementById('badgeDesc');
  const manualScrubSlider = document.getElementById('manualScrubSlider');
  const scrubVal = document.getElementById('scrubVal');
  const scrubAutoPlayBtn = document.getElementById('scrubAutoPlayBtn');

  // Emblem & Text SVG Elements
  const emblemGroup = document.getElementById('emblemGroup');
  const emblemFrame = document.getElementById('emblemFrame');
  const ringTop = document.getElementById('ringTop');
  const ringBottom = document.getElementById('ringBottom');
  const ringLeft = document.getElementById('ringLeft');
  const ringRight = document.getElementById('ringRight');
  const centerSquare = document.getElementById('centerSquare');

  // Letter Paths
  const letterB = document.getElementById('letterB');
  const letterO1 = document.getElementById('letterO1');
  const letterT1 = document.getElementById('letterT1');
  const letterT2 = document.getElementById('letterT2');
  const letterE = document.getElementById('letterE');
  const letterG = document.getElementById('letterG');
  const letterA = document.getElementById('letterA');
  const subtextTitle = document.getElementById('subtextTitle');
  const subtextLoc = document.getElementById('subtextLoc');

  const letterPaths = [letterB, letterO1, letterT1, letterT2, letterE, letterG, letterA];

  // Prepare Letter Paths for Stroke Draw Animation
  letterPaths.forEach(path => {
    const length = path.getTotalLength ? path.getTotalLength() : 300;
    gsap.set(path, {
      strokeDasharray: length,
      strokeDashoffset: length,
      opacity: 0
    });
  });

  // Master GSAP Scroll Timeline
  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: scrollWrapper,
      start: 'top top',
      end: 'bottom bottom',
      scrub: 1, // Smooth scrub tied to scroll position
      onUpdate: (self) => {
        const progress = Math.round(self.progress * 100);
        
        // Progress Bar & Sliders Sync
        progressBar.style.setProperty('--scroll-progress', `${progress}%`);
        progressLabel.textContent = `${progress}% Scroll`;
        manualScrubSlider.value = progress;
        scrubVal.textContent = `${progress}%`;

        // Update Phase Labels based on progress
        if (progress < 25) {
          badgePhase.textContent = 'PHASE 1: EMBLEM CREST';
          badgeDesc.textContent = 'Sumi-tate Kaku ni Yotsu Janome Emblem';
        } else if (progress >= 25 && progress < 65) {
          badgePhase.textContent = 'PHASE 2: DECONSTRUCTION & MORPH';
          badgeDesc.textContent = 'Emblem unravels and expands into typography';
        } else {
          badgePhase.textContent = 'PHASE 3: BOTTEGA TYPOGRAPHY';
          badgeDesc.textContent = 'Bottega Design Studio Architectural Logo';
        }
      }
    }
  });

  /* ========================================================================
     ANIMATION STAGES
     ======================================================================== */

  // STAGE 1 (Progress 0 - 25%): Emblem Rotation & Outer Diamond Expansion
  tl.to(emblemGroup, {
    rotation: 180,
    scale: 0.9,
    duration: 2.5,
    ease: 'power2.inOut'
  }, 0);

  tl.to(emblemFrame, {
    scale: 1.4,
    opacity: 0.3,
    strokeWidth: '4px',
    duration: 2.5,
    ease: 'power2.inOut'
  }, 0);

  // STAGE 2 (Progress 25 - 60%): Rings Separate & Deconstruct
  tl.to(ringTop, { y: -220, scale: 0.5, opacity: 0, duration: 3, ease: 'power3.inOut' }, 2.5)
    .to(ringBottom, { y: 220, scale: 0.5, opacity: 0, duration: 3, ease: 'power3.inOut' }, 2.5)
    .to(ringLeft, { x: -350, scale: 0.5, opacity: 0, duration: 3, ease: 'power3.inOut' }, 2.5)
    .to(ringRight, { x: 350, scale: 0.5, opacity: 0, duration: 3, ease: 'power3.inOut' }, 2.5)
    .to(centerSquare, { scale: 3, opacity: 0, duration: 2, ease: 'power2.inOut' }, 2.5)
    .to(emblemFrame, { opacity: 0, duration: 1.5 }, 3.5);

  // STAGE 3 (Progress 50 - 90%): BOTTEGA Letters Draw-In & Unveil
  letterPaths.forEach((path, i) => {
    const length = path.getTotalLength ? path.getTotalLength() : 300;
    
    tl.to(path, {
      opacity: 1,
      strokeDashoffset: 0,
      duration: 2.2,
      ease: 'power2.out'
    }, 4.8 + i * 0.4);
  });

  // STAGE 4 (Progress 85 - 100%): Subtitle Reveal ("DESIGN STUDIO")
  tl.to(subtextTitle, {
    opacity: 1,
    y: 0,
    duration: 1.5,
    ease: 'power2.out'
  }, 8.2)
  .to(subtextLoc, {
    opacity: 1,
    y: 0,
    duration: 1.5,
    ease: 'power2.out'
  }, 8.6);

  /* ========================================================================
     MANUAL SCRUB SLIDER CONTROLLER
     ======================================================================== */
  manualScrubSlider.addEventListener('input', (e) => {
    const val = parseFloat(e.target.value) / 100;
    
    // Calculate target scroll position
    const scrollHeight = scrollWrapper.offsetHeight - window.innerHeight;
    const targetScroll = scrollWrapper.offsetTop + val * scrollHeight;

    window.scrollTo({
      top: targetScroll,
      behavior: 'auto'
    });
  });

  /* ========================================================================
     AUTO PLAY ANIMATION DEMO
     ======================================================================== */
  let isAutoPlaying = false;

  scrubAutoPlayBtn.addEventListener('click', () => {
    if (isAutoPlaying) return;
    isAutoPlaying = true;
    
    const scrollHeight = scrollWrapper.offsetHeight - window.innerHeight;
    const startScroll = scrollWrapper.offsetTop;

    window.scrollTo({ top: startScroll, behavior: 'smooth' });

    setTimeout(() => {
      gsap.to(window, {
        scrollTo: startScroll + scrollHeight,
        duration: 8,
        ease: 'power1.inOut',
        onComplete: () => {
          isAutoPlaying = false;
        }
      });
    }, 500);
  });

});
