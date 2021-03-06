<?php get_header(); ?>
<div class="home">
    <div class="parallax-container parahome padding-top-40">
      <div class="parallax"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/jefferson-santos-450408-unsplash.jpg"></div>
      <h1 class="center-align">Otthoni gitárórák Budapesten</h1>
      <div class="btncentre">
          <a href="gitar-ora/#kapcsolat" target="_blank" class="inscrip">Ora foglalàs</a>
      </div>
    </div>
    <div class="section white">
      <div class="row container">
          <div class="col m6">
              <h2 class="header">ÜDVÖZÖLJÜK</h2>
              <p>
                <?php the_field('udvozuljuk_szoveg'); ?>

         </div>
          <div class="col m6">
          </div>
      </div>
    </div>
    <div class="parallax-container prala400">
      <div class="parallax"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/ivan-gromov-580410-unsplash.jpg"></div>
      <div class="row colorwhite container">
          <div class="col m4 blockico">
            <p class="center-align"><i class="material-icons icont">home</i></p>
            <h2 class="center-align">OTHONI GITÁR KURSOK</h2>
            <p class="center-align">
Gitárórák otthon, így nem hagyhat ki semmilyen osztályt az ürügyen, hogy kívül esik az eső! Bármilyen időjárás esetén jöttem a helyére.</p>
          </div>
          <div class="col m4 blockico">
              <p class="center-align"><i class="material-icons icont">today</i></p>
             <h2 class="center-align">CUSTOM</h2> 
             <p class="center-align">
Mivel mindegyik diák más, egyedülálló gitárórákat kínálok, amelyek megfelelnek az Ön korának, szintjének és zenei ízlésének.</p>
          </div>
          <div class="col m4 blockico">
              <p class="center-align"><i class="material-icons icont">audiotrack</i></p>
             <h2 class="center-align">
Jó tudni</h2> 
             <p class="center-align">
Az otthoni gitárórákat személyes szolgáltatásnak tekintik. A levont összeg 50% -át vagy az adójóváírást kapja.</p>
          </div>
      </div>
    </div>
</div>
<div>
    <h2 class="center-align titreconf">MEGBIZTAK BENNEM</h2>
    <h3 class="center-align">Kamu szoveg</h3>
    <div class="containertrait"><div class="traitm"></div></div>
    <div class="row container">
        <div class="col m4 blocavis">
            <h4 class="nom"><?php the_field('velemeny_1_nev'); ?></h4>
            <p class="profession">Diák szülok</p>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/five-stars.png" class="star"/>
            <div class="greyblock">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/quote-png-3.png" class="quote"/>
                <?php the_field('velemeny_1'); ?>
            </div>
        </div>
        <div class="col m4 blocavis">
            <h4 class="nom"><?php the_field('velemeny_2_nev'); ?></h4>
            <p class="profession">Diák</p>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/five-stars.png" class="star"/>
            <div class="greyblock">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/quote-png-3.png" class="quote"/>
                <?php the_field('velemeny_2'); ?> 
            </div>
        </div>
        <div class="col m4 blocavis">
            <h4 class="nom"><?php the_field('velemeny_3_nev'); ?></h4>
            <p class="profession">Tanár</p>
            <img src="<?php echo get_bloginfo('template_directory'); ?>/img/five-stars.png" class="star"/>
            <div class="greyblock">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/quote-png-3.png" class="quote"/>
                <?php the_field('velemeny_3'); ?>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col m4 no-padding">
        <?php 
        $image = get_field('kocska_kep_1');
        if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="responsive-img" />
        <?php endif; ?>
        <div class="blockdifu">
            <div><i class="material-icons icog">play_circle_outline</i></div>
            <div>
                <h4 class="center-align"><?php the_field('kocska_kep_1_cim'); ?></h4>
                <p><?php the_field('kocska_kep_1_szoveg'); ?></p>
            </div>
        </div>
    </div>
     <div class="col m4 no-padding">
        <?php 
        $image = get_field('kocska_kep_2');
        if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="responsive-img" />
        <?php endif; ?>
        <div class="blockdifu">
            <div><i class="material-icons icog">queue_music</i></div>
            <div>
                <h4 class="center-align"><?php the_field('kocska_kep_2_cim'); ?></h4>
                <p><?php the_field('kocska_kep_2_szoveg'); ?></p>
            </div>
        </div>
        <div class="btncentre"><span class="spancours"><a href="/tananyag">TANANYAG</a></span></div>
    </div>
     <div class="col m4 no-padding">
        <?php 
        $image = get_field('kocska_kep_3');
        if( !empty($image) ): ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="responsive-img" />
        <?php endif; ?>
        <div class="blockdifu">
            <div><i class="material-icons icog">music_note</i></div>
            <div>
                <h4 class="center-align"><?php the_field('kocska_kep_3_cim'); ?></h4>
                <p><?php the_field('kocska_kep_3_szoveg'); ?></p>
            </div>
        </div>
    </div>
</div>

<!--
<div class="fondgris">
    <h2 class="center-align titreconf">ISMEROS TANAROK</h2>
    <div class="containertrait"><div class="traitm"></div></div>
    <div class="row container fondgris">
        <div class="col m4"><a href="http://www.doboktatás.hu" target="_blank">
            <div class="amis">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/isti.PNG" class="circle amiens"/>
                <p class="center-align">
                « 2000-től dobosként és ütőhangszerészként élek, valamint a tanítás során végzett munkám 
                a ritmus felfedezésében és tanulásában, de csoportokban játszani, koncerteket, dalokat rögzíteni ... »
                </p>
                <h3>Istvàn XXXX</h3>
                <p>Dob Tanàr</p>
            </div></a>
        </div>
        <div class="col m4"><a href="http://www.doboktatás.hu" target="_blank">
            <div class="amis">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/isti.PNG" class="circle amiens"/>
                <p class="center-align">
                « 
    Szenvedélyes zenész vagyok, aki a klasszikus zenére specializálódott, de nagyon nyitott más stílusokra. 
    Különösen szeretem a barokk zenét, az ír zenét, a dalt és én bemutattam a jazzben. Van egy Bac + 5-ös hegedűmesterem 
    (zenei előadások) és a klasszikus-romantikus zenekar 2-esje az Abbaye aux Dames-ben Saintesben / Poitiers-i Egyetemen. 
    Állami oklevelet tartok zenei tanárként, és motivált zenészeket tanítok, önállóan és teljesítve. »
                </p>
                <h3>Gemma Piat</h3>
                <p>Hegedű Tanàr</p>
            </div></a>
        </div>
        <div class="col m4"><a href="http://www.doboktatás.hu" target="_blank">
            <div class="amis">
                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/isti.PNG" class="circle amiens"/>
                <p class="center-align">
                « 
    Jazz zongorista, de tanár, Pierre-Antoine CHAFFANGEON vezeti a PAC Triót Willy 
    BRAUNER dobos és basszus Vincent GIRARD mellett. Ebből a csoportból, a jazz-hagyomány 
    és a modernitás közepén lévő univerzumról alkotott repertoár alkotja az eredeti kompozíciókat és a szabványok újbóli előirányzatait. »
                </p>
                <h3>Pierre Antoine Chaffangeon</h3>
                <p>Zongora Tanàr</p>
            </div>
        </div></a>
    </div> 
</div>
-->

<script>
$(document).ready(function(){
    $('.parallax').parallax();
  });
       

</script>

<?php get_footer(); ?>