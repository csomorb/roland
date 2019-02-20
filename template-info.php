<?php
/*
Template Name: Infos
*/
get_header(); ?>

	<div class="container">
    <section>
        <h1 class="center-align"><?php echo __('[:en]What you should know[:fr]Informations[:hu]Amit jo tudni[:]'); ?></h1>
        <p>Vous trouverez ici les infos pour notre mariage</p>
        <article>
           <h2><?php echo __('[:en]When[:fr]La date à réserver[:hu]Mikor?[:]'); ?></h2>
           Du jeudi 21 au samedi 24 mai 2020, plus précisément dans
           <div id="clock2"></div>
           <script>
$('div#clock2').countdown('2020/05/10', {elapse: true}).on('update.countdown', function(event) {
  var $this = $(this).html(event.strftime(''
    + '<div class="clockligne"><span>%D</span> day%!d</div>'
    + '<div class="clockligne"><span>%H</span> hr</div>'
    + '<div class="clockligne"><span>%M</span> min</div>'
    + '<div class="clockligne"><span>%S</span> sec</div>'));
});
</script>
        Vous pouvez arriver quand bon vous souhait le jeudi, ou nous rejoindre vendredi ou samedi.  
        </article>
        <article>
          <h2><?php echo __('[:en]Where[:fr]Le lieu des festivités[:hu]Merre lessz a buli?[:]'); ?></h2>
          <p>Au fin fond de la Hongrie (pour les incultes il s'agit d'un pays dans l'est de l'Europe) aux pieds des collines du Zemplén dans le palais de Bodrogolaszi, 
          vous allez voir, ça vaut le détour.</p>
          
          Kastély utca 1.<br/>
          Bodrogolaszi<br/>
          3943<br/>
          <?php echo __('[:en]HUNGARY[:fr]HONGRIE[:hu]MAGYARORSZAG[:]'); ?>
          <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/ol.js"></script>
          <div id="map" class="map"></div>
          <script>
var iconFeatures=[];

var iconFeature = new ol.Feature({
  geometry: new ol.geom.Point(ol.proj.transform([21.517262,48.289190], 'EPSG:4326',     
  'EPSG:3857'))
});


iconFeatures.push(iconFeature);

var vectorSource = new ol.source.Vector({
  features: iconFeatures //add an array of features
});

var iconStyle = new ol.style.Style({
  image: new ol.style.Icon(/** @type {olx.style.IconOptions} */ ({
    anchor: [0.5, 0.5],
    opacity: 0.75,
    src: 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEwAACxMBAJqcGAAABABJREFUWIW1V9trHGUU/50zuzu51iYYs9nEV6ktSiEvNgliahCbpMULXhDxb4hUUSFVSxHxwWIFRVBQENG+iCUXA9aSmKQXJYitNYjQojTJptqmabLbmZ2dc3yIuzu7mcnOJvU8zbn9fr/vfN98wxAqsOs9PXdYpvUcFPsIsluY4wDAIkll/hnQ0VjW+fLOsR9vhsWkMEXa3h5djFe/7BJeYWDbRrUCXWbB2/FU5F2amMhuWcD8o11NYJwgxp4wYj026Ubsx9u++enapgX82dfVEFFMMmNXheQAABU5X5WpebDx5MnloJrIRgAR0s+ZqIjcFcGSZWM148AWF6SEmMGoM2NoME0YXFgTMd9vV1mfAngiiCNwAgv7O5+G0nFvLJXJYiG1ClfUt8cgQqK+FjXRaDEJ0WPxockTfj0cJEAUg17/VjaLuZUi8msCGYLIsALXAcBVxZWbKVhZtwhLVQ8F8fgKuNLbsZtB9+UBACRX01Bozj+qsdW2vWdmDzx0bna/qfVtqnpsLadIrqaA4iG1zx/o2unH5XsGmLnb66cyDjKumyP/ovvMxYPefMfZs7cADIw/sLMZRM/arotU1kGtZytItBvAb6EmQJAdXj/tOIWc8jt+PQCgjHwu7RRfAQrasa4hSIAob/f6WZUCkNk4GyQA0aZfc4+OSFGKgIbQAhhiF/lUeFlYFpuC+F37RnPu2Sh5vxSwS+sDBQB0yetVGYW9FMd4PkiAAeeFfE+k9Hjp5dAChPS0199mRvNTUNLD4x27ukt7Tu2592FSeh1Ym1hdLFaUJ+LTpT1AwEWk7e3RZIs5B3B+3EuWjaup9JpAQFhwXAmn1lC0R0FP8X8Laq6twfYqs7AgSDKxEr3b7+MUeBPO93cOEuiIN3Y1lcaS5buVeWusrkJTTXVxUPTVltFp37cn8CZUWEch+Msbu6u2Bq31dTANY129aRhora9bRy4il61U5FgQz4Zfw4X+jmcA/sovl3FdZFwBCIixgZjhvxYVfTIxOv31pgQAwEJv1yQYXeXq/EyA8dbhqXUH1muBW5AzJQxI6c0ehlwgEdWBcnVlBSRGpmZI9LNKBTDLJ80j079sWQAAsJF9TQQrYckFuqxZHixfGVJAfOjcIkPfCiuAFEcSY1N/3zYBALAi9e8J5FK5OoX80ZK03g+LG1rAPWNjNpReKldHoIM0M+OUqyvUV2hzfZ3fM9Fev5wqvkuMTD1SCV7oCeTMEGNARNzSuIi4xPpipXgVC4h/+8MFBn+8LkH8UcvQ9MX/XQAACBuHIHLDE1nSqP3GZrA2JaB1eOIfITrsgXmz3C/YbRUAAImk9QEUvwM6G18xPtwszpZsvq+jd76/c99WMP4FAmiE/p/SsE8AAAAASUVORK5CYII='
  }))
});


var vectorLayer = new ol.layer.Vector({
  source: vectorSource,
  style: iconStyle
});
	
	
var map = new ol.Map({
    target: 'map',
    layers: [
        new ol.layer.Tile({
        source: new ol.source.OSM()
        }),
        vectorLayer
    ],
    view: new ol.View({
        center: ol.proj.fromLonLat([21.517262,48.289190]),
        zoom: 10})
});
          </script>
          <p>
          Vous avez plusieurs choix pour venir jusqu’à chez nous : Avion, voiture, bus, train, à cheval, stop, en tapis volant…  Le plus simple est de venir jusqu’à Budapest en avion. Pour venir jusqu’à Bodroglaszi, c’est encore en préparation. Mais ce qui est sûre, c’est qu’il y a un train qui relie les deux lieux. Nous vous donnerons plus d’informations par la suite. 
          </p>
          
        </article>
        <article>
          <h2><?php echo __('[:en]What is the program about?[:fr]Quel est le super programme?[:hu]Milyen lesz a program[:]'); ?></h2>
          carte + description + comment je peux venir ici
        </article>
        
        <article>
           <h2><?php echo __('[:en]What should I take with me[:fr]Que prendre avec moi?[:hu]Mit hozzak magammal?[:]'); ?></h2>
           <ul>
             <li>Instrument de musique</li>
             <li>Ton jeu de société préféré</li>
             <li>Sac de couchage</li>
             <li>Des chaussures confortables (les talons sont peu pratiques pour les balades forestières)</li>
             <li>Carte d’identité ou passeport (sinon vous ne passez pas la douane à l’aéroport !)</li>
             <li>Carte européenne d’assurance maladie (elle est gratuite, demandez-la, elle peut toujours servir en cas de besoin... qu’on n’espère pas...)</li>
             <li>Maillot de bain</li>
             <li></li>
             <li></li>
             <li></li>
           </ul>
        </article>
        
        
    </section>
</div>

<?php get_footer(); ?>