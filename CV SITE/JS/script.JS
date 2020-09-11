const sr = ScrollReveal()

sr.reveal('p',{
    origin: 'top',
    distance : '50px',
    duration: 1800,
    reset: true
});

sr.reveal( 'h2' ,{
    origin: 'top',
    distance : '25px',
    duration: 2500,
    scale: 0.5,
    reset: true
});

sr.reveal( '#skills' ,{
    origin: 'top',
    distance : '25px',
    duration: 2500,
    scale: 0.5,
    reset: true
});

sr.reveal( '#logiciels' ,{
  origin: 'top',
  distance : '25px',
  duration: 2500,
  scale: 0.5,
  reset: true
});

var ml4 = {};
ml4.opacityIn = [0,1,0,5];
ml4.scaleIn = [0.3];
ml4.scaleOut = 1;
ml4.durationIn = 800;
ml4.durationOut = 600;
ml4.delay = 500;
// js avant de mettre portfolio//
anime.timeline({loop: true})
  .add({
    targets: '.ml4 .letters-1',
    opacity: ml4.opacityIn,
    scale: ml4.scaleIn,
    duration: ml4.durationIn
  }).add({
    targets: '.ml4 .letters-1',
    opacity: 0,
    scale: ml4.scaleOut,
    duration: ml4.durationOut,
    easing: "easeInExpo",
    delay: ml4.delay
  })
 