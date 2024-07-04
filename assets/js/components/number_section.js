document.addEventListener("DOMContentLoaded", () => {
  const counters = [
    { id: "total-center", target: 130, duration: 3000 },
    { id: "total-experience", target: 29, duration: 3000 },
    { id: "total-states", target: 25, duration: 3000 },
    { id: "total-patients", target: 550000, duration: 3000 },
  ];
  const animateCounter = (element, start, end, duration) => {
    let startTime = null;

    const step = (currentTime) => {
      if (!startTime) startTime = currentTime;
      const progress = Math.min((currentTime - startTime) / duration, 1);
      element.textContent = Math.floor(progress * (end - start) + start);
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };

    window.requestAnimationFrame(step);
  };

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const counter = counters.find(
            (counter) => counter.id === entry.target.id
          );
          animateCounter(entry.target, 0, counter.target, counter.duration);
          observer.unobserve(entry.target); // Stop observing after the animation starts
        }
      });
    },
    { threshold: 0.5 }
  );

  counters.forEach((counter) => {
    observer.observe(document.getElementById(counter.id));
  });
});
