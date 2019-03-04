<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
    <div class="hero_wrapper">
        <div class="container-fluid">
            <div class="hero_section">
                <div class="row">
                    <div class="col-lg-6 col-sm-5">

                        <?php
                        $atrr=[
                            'class' => "zoomIn wow animated",
//                        	'alt'   => trim(strip_tags( $wp_postmeta->_wp_attachment_image_alt )),
                            ]
                        ?>

                        <?php the_post_thumbnail('post-thumbnail', $atrr); ?>
                    </div>

                    <div class="col-lg-5 col-sm-6">
                        <div class="top_left_cont zoomIn wow animated">
                            <h2 style="text-align: center"><?php the_title() ?></h2>
                            <!--  Header contact  -->

                            <div class='call'><div class='phone'><p><a href='tel:0953015303'>(095) 301 53 03</a></p>
                                    <p><a href='tel:0965212323'>(096) 521 23 23</a></p></div><p class='ili'>или</p></div><div class='form'><a href='#contact' class='btn btn-success scroll-link my-btn'>Оставить заявку онлайн</a></div>
                            <!--  Header contact  -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--Hero_Section-->
<!--Aboutus-->
<section id="aboutUs">
    <div class="inner_wrapper">
        <div class="container-fluid">
            <h2><?php the_title() ?></h2>
            <div class="inner_section">
                <div class="row">

                    <div class=" col-lg-3 col-md-3 col-sm-3 col-xs-12 pull-left">
                        <div class=" delay-01s animated fadeInDown wow animated">
                            <div class="moduletable">
                                <?php
                                    $theme_locations = get_nav_menu_locations(); // взяли все theme_location
    //                                var_dump($theme_locations);
                                    $menu_obj = get_term( $theme_locations['menu-side-bar'], 'nav_menu' ); // ищем нашу theme_location
                                    $menu_name = $menu_obj->name; // получаем имя
                                ?>
                                <h3><?= $menu_name ?></h3>
                                <!--Menu-->
                                <?php
                                    // получаем а не выводим меню
                                    $menu = wp_nav_menu( array(
                                        'echo' => 0,
                                        'theme_location' => 'menu-side-bar',
                                        ) );
                                    // добавляем ко всем пунктам класс my__class
                                    $menu = str_replace('class="menu-item', 'class="li-menu', $menu );
                                    // выводим на экран
                                    echo $menu;

                                ?>
                                <!--Menu-->
                            </div>
                        </div>
                    </div>

                    <div class=" col-lg-9 col-md-9 col-sm-9 col-xs-12 pull-right">
                        <hr>
                        <?php the_content();?>
                    </div>
                </div>

