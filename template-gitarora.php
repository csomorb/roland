<?php
/*
Template Name: Gitàr ora
*/
get_header(); ?>
<div class="home">
    <div class="parallax-container parahome padding-top-40">
      <div class="parallax"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/bois.jpg"></div>
      <h1 class="center-align">Formulák és árak Guitar Lessons</h1>
      <div class="btncentre">
          <a href="#kapcsolat" target="_blank" class="inscrip">Ora foglalàs</a>
      </div>
    </div>
    <div class="container">
        
    <h2 class="center-align titreconf">TALALJA MEG A JÓ FORMULÁT</h2>
    <h3 class="center-align">Semmi rossz meglepetés, minden benne van az árban!</h3>
    <div class="containertrait"><div class="traitm"></div></div>
    <p>Kis duma hogy milyen olcson milyen profi tanàrt kapnak</p></div>
    
    <div class="parallax-container pralaprix">
      <div class="parallax"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/guitarfielde.jpg"></div>
      <div class="prixcon">
          
          <div class="et_pb_pricing_table et_pb_pricing_table_0">
              <div class="et_pb_pricing_heading">
                  <h2 class="et_pb_pricing_title center-align">Oràk nàllam</h2> 
                  <span class="et_pb_best_value center-align">Enfants de 7 à 10 ans</span>
              </div>
              <div class="et_pb_pricing_content_top center-align"> 
                  <span class="et_pb_et_price">
                      
                      <span class="et_pb_sum">2 500</span>
                      <span class="et_pb_dollar_sign">Ft</span>
                      <span class="et_pb_frequency">/ora</span>
                  </span>
              </div>
              <div class="et_pb_pricing_content">
                  <ul class="et_pb_pricing">
                      <li><span>Ora hossz: <strong>60 perc</strong></span></li>
                      <li><span>Helyszin : <strong>valami</strong></span></li>
                      <li><span>Szint : <strong>kezdo/profi...</strong></span></li>
                   </ul>
               </div>
           </div>
           
           
           <div class="et_pb_pricing_table et_pb_pricing_table_0">
              <div class="et_pb_pricing_heading">
                  <h2 class="et_pb_pricing_title center-align">Oràk nàllad</h2> 
                  <span class="et_pb_best_value center-align">Enfants de 7 à 10 ans</span>
              </div>
              <div class="et_pb_pricing_content_top center-align"> 
                  <span class="et_pb_et_price">
                      
                      <span class="et_pb_sum">3 000</span>
                      <span class="et_pb_dollar_sign">Ft</span>
                      <span class="et_pb_frequency">/ora</span>
                  </span>
              </div>
              <div class="et_pb_pricing_content">
                  <ul class="et_pb_pricing">
                      <li><span>Ora hossz: <strong>60 perc</strong></span></li>
                      <li><span>Helyszin : <strong>valami</strong></span></li>
                      <li><span>Szint : <strong>kezdo/profi...</strong></span></li>
                   </ul>
               </div>
           </div>
          
          
      </div>
    </div>
    <div>
    <h2 class="center-align titreconf">HELYSZIN ...</h2>
    <h3 class="center-align">Ha lusta vagy jonni, megyek hozzàd tomni</h3>
    <div class="containertrait"><div class="traitm"></div></div>
    <div class="container"><p>Cím: 1119. Bp. XI.ker Fehérvári út 215./78-as kapucsengő <br/>
<a href="http://futar.bkk.hu/?toCoord=47.447875%2C19.037695" target="_blank">Tömegközlekedés</a><br/> A helyszín jól megközelíthető:<br/>
Móricztól: -7es busz Fonyód utca/Sáfrány utcai megálló<br/>
-214/213/114es busz Fonyód utcai megálló<br/>
-17/41/47/48/56-os villamos Fonyód utcai megálló
</p></div>
    
    <script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/ol.js"></script>
          <div id="map" class="map"></div>
          <script>
var iconFeatures=[];

var iconFeature = new ol.Feature({
  geometry: new ol.geom.Point(ol.proj.transform([19.036943,47.445171], 'EPSG:4326',     
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
        center: ol.proj.fromLonLat([19.036943,47.455171]),
        zoom: 14})
});
          </script>
    
    
    </div>
    
    
</div>

<script>
$(document).ready(function(){
    $('.parallax').parallax();
  });
</script>

<div id="kapcsolat"><h2 class="center-align">Kapcsolat</h2></div>
<h3 class="center-align">Bàrmilyen kérdéssel keress bàtran, hamarosan vàlaszolok</h3>
<div class="containertrait"><div class="traitm"></div></div>
<div class="container">
        <?php echo do_shortcode( '[contact-form-7 id="18" title="1 kapcsolati űrlap"]' ); ?>    
    </div>
<?php get_footer(); ?>