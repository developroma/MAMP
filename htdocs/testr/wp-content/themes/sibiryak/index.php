<?php

get_header();
?>

<body>

    <div class="products">
        <div class="container">
            <div class="products__inner">
                <?php
                
                    $my_posts = get_posts( array(
                        'numberposts' => -1,
                        'category'    => 0,
                        'orderby'     => 'date',
                        'order'       => 'DESC',
                        'include'     => array(),
                        'exclude'     => array(),
                        'meta_key'    => '',
                        'meta_value'  =>'',
                        'post_type'   => 'product',
                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                    ) );
                    
                    global $post;
                    
                    foreach( $my_posts as $post ){
                        setup_postdata( $post );
                    
                        ?>
                        <div class="products__column">
                            <div class="products__item">
                                <a class="img__wrap" href="#">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
                                <div class="products__title"><?php the_title(); ?></div>
                            </div>
                        </div>
                        <?php
                        
                        
                    }
                    
                    wp_reset_postdata(); // сброс
                
                ?>
            </div>
        </div>
    </div>

    <div class="blue_background">

        <div class="card">
            <div class="container">
                <div class="card__outer">
                    <div class="card__outer-text">Главная</div>
                </div>
                <div class="card__inner">
                <?php
                
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category'    => 0,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  =>'',
                    'post_type'   => 'card',
                    'suppress_filters' => true,
                ) );
                
                global $post;
                
                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                
                    ?>
                    <div class="card__item">
                        <div class="card__title"><?php the_title(); ?></div>
                        <div class="card__text"><?php the_content(); ?></div>
                    </div>
                    <?php
                    
                    
                }
                
                wp_reset_postdata(); // сброс
            
            ?>
                </div>
            </div>
        </div>

        <div class="card card__slider">
            <div class="container">
                <div class="card__outer">
                    <div class="card__outer-text">Главная</div>
                </div>
                <div class="card__inner card__inner-slider">
                <?php
                
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category'    => 0,
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  =>'',
                    'post_type'   => 'card',
                    'suppress_filters' => true,
                ) );
                
                global $post;
                
                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                
                    ?>
                    <div class="card__item">
                        <div class="card__title"><?php the_title(); ?></div>
                        <div class="card__text"><?php the_content(); ?></div>
                    </div>
                    <?php
                    
                    
                }
                
                wp_reset_postdata(); // сброс
            
            ?>
                </div>
            </div>
        </div>

        <div class="diff_products">
            <div class="container">
                <div class="diff_products__inner">
                    <div class="diff_products__titles">
                        <?php
                
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category'    => 0,
                                'orderby'     => 'title',
                                'order'       => 'ASC',
                                'include'     => array(),
                                'exclude'     => array(),
                                'meta_key'    => '',
                                'meta_value'  =>'',
                                'post_type'   => 'diff_product_title',
                                'suppress_filters' => true,
                            ) );
                            
                            global $post;
                            
                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                            
                                ?>
                                    <div class="diff_products__title diff_products__title"><?php the_title(); ?></div>

                                <?php
                                
                                
                            }
                            
                            wp_reset_postdata(); // сброс
            
                           ?>
                        
                    </div>

                    

                    <div class="diff_products__shown diff_products__shown-novelty">

                    <?php
                
                $my_posts = get_posts( array(
                    'numberposts' => -1,
                    'category'    => 0,
                    'orderby'     => 'title',
                    'order'       => 'ASC',
                    'include'     => array(),
                    'exclude'     => array(),
                    'meta_key'    => '',
                    'meta_value'  =>'',
                    'post_type'   => 'diff_product',
                    'suppress_filters' => true,
                ) );
                
                global $post;
                
                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                
                    ?>
                        <div class="diff_products__wrap diff_products__wrap-novelty">
                            <div class="diff_products__item">
                                <img width="162px" height="145px" class="diff_products__placeholder" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-novelty">
                                        <div class="triangle__text triangle__text-novelty"><?php echo get_post_meta(get_the_ID(), 'is_what', true); ?></div>
                                    </div>
                                    <div class="diff_products__info__title"><?php the_title(); ?></div>
                                    <div class="diff_products__info__about"><?php the_content(); ?></div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от <?php echo get_post_meta(get_the_ID(), 'price', true); ?></b></span>
                                    <div class="diff_products__info__type"><?php echo get_post_meta(get_the_ID(), 'type_product', true); ?></div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                    <?php
                    
                    
                }
                
                wp_reset_postdata(); // сброс

               ?>
                        

                        <!-- <div class="diff_products__wrap diff_products__wrap-novelty">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-novelty">
                                        <div class="triangle__text triangle__text-novelty">Новинка!</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-novelty">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-novelty">
                                        <div class="triangle__text triangle__text-novelty">Новинка!</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-novelty">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-novelty">
                                        <div class="triangle__text triangle__text-novelty">Новинка!</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-novelty">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-novelty">
                                        <div class="triangle__text triangle__text-novelty">Новинка!</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-novelty">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-novelty">
                                        <div class="triangle__text triangle__text-novelty">Новинка!</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>
                    </div>

                    <div class="diff_products__shown">
                        <div class="diff_products__wrap diff_products__wrap-hit">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-hit">
                                        <div class="triangle__text">Хит!</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-hit">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-hit">
                                        <div class="triangle__text">Хит!</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-hit">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-hit">
                                        <div class="triangle__text">Хит!</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-hit">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-hit">
                                        <div class="triangle__text">Хит!</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-hit">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-hit">
                                        <div class="triangle__text">Хит!</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-hit">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-hit">
                                        <div class="triangle__text">Хит!</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>
                    </div>
                    <div class="diff_products__shown">
                        <div class="diff_products__wrap diff_products__wrap-sale">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-sale">
                                        <div class="triangle__text triangle__text-sale">Скидка</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-sale">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-sale">
                                        <div class="triangle__text triangle__text-sale">Скидка</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-sale">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-sale">
                                        <div class="triangle__text triangle__text-sale">Скидка</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-sale">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-sale">
                                        <div class="triangle__text triangle__text-sale">Скидка</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-sale">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-sale">
                                        <div class="triangle__text triangle__text-sale">Скидка</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-sale">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-sale">
                                        <div class="triangle__text triangle__text-sale">Скидка</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>
                    </div>

                    <div class="diff_products__shown diff_products__shown-active">
                        <div class="diff_products__wrap">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-novelty">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-novelty">
                                        <div class="triangle__text triangle__text-novelty">Новинка!</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-hit">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-hit">
                                        <div class="triangle__text">Хит!</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-sale">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="triangle-sale">
                                        <div class="triangle__text triangle__text-sale">Скидка</div>
                                    </div>
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>

                        <div class="diff_products__wrap diff_products__wrap-neutral">
                            <div class="diff_products__item">
                                <img class="diff_products__placeholder" src="img/diff_products/diff_products.png" alt="">
                                <div class="diff_products__info">
                                    <div class="diff_products__info__title">чипсы Delicados nachos</div>
                                    <div class="diff_products__info__about">кукурузные оригинальные 500 г</div>
                                    <span class="diff_products__info__price_of_one">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <span class="diff_products__info__price_of_one-mr">Цена от 1 шт: <b>от 45р/шт.</b></span>
                                    <div class="diff_products__info__type">Снеки</div>
                                </div>
                            </div>
                            <a href="#" class="btn__buy">Купить</a>
                        </div>
                    </div>
                    <a href="#" class="diff_products__show_more">Показать еще</a>-->
                </div>
            </div>
        </div>
        

        <div class="slider">
            <div class="slider__wrapper">
                <div class="container">
                    <h3 class="slider__title">Наш инстаграм</h3>
                </div>

                
                <?php echo do_shortcode('[slick-carousel-slider slidestoshow="5" autoplay="true" autoplay_interval="1200" arrows="false" dots="false" centermode="true" hover_pause="false"]'); ?>

            </div>
        </div>
                    <!--<div class="slider__item">
                        <div class="slider__hover">
                            <div class="slider__hover__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada mattis lectus non vestibulum sollicitudin cursus vivamus justo. Nunc etiam augue nec interdum. 
                                Nunc facilisi semper faucibus lacus tortor faucibus viverra. Velit fermentum, egestas adipiscing tellus mi sapien...</div>

                        </div>
                        <img src="img/slider/2.png" alt="" class="slider__img">

                    </div>

                    <div class="slider__item">
                        <div class="slider__hover">
                            <div class="slider__hover__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada mattis lectus non vestibulum sollicitudin cursus vivamus justo. Nunc etiam augue nec interdum. 
                                Nunc facilisi semper faucibus lacus tortor faucibus viverra. Velit fermentum, egestas adipiscing tellus mi sapien...</div>

                        </div>
                        <img style="width: 234px;" src="img/slider/3.png" alt="" class="slider__img">

                    </div>

                    <div class="slider__item">
                        <div class="slider__hover">
                            <div class="slider__hover__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada mattis lectus non vestibulum sollicitudin cursus vivamus justo. Nunc etiam augue nec interdum. 
                                Nunc facilisi semper faucibus lacus tortor faucibus viverra. Velit fermentum, egestas adipiscing tellus mi sapien...</div>

                        </div>
                        <img src="img/slider/4.png" alt="" class="slider__img">

                    </div>

                    <div class="slider__item">
                        <div class="slider__hover">
                            <div class="slider__hover__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada mattis lectus non vestibulum sollicitudin cursus vivamus justo. Nunc etiam augue nec interdum. 
                                Nunc facilisi semper faucibus lacus tortor faucibus viverra. Velit fermentum, egestas adipiscing tellus mi sapien...</div>

                        </div>
                        <img src="img/slider/5.png" alt="" class="slider__img">

                    </div>

                    <div class="slider__item">
                        <div class="slider__hover">
                            <div class="slider__hover__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada mattis lectus non vestibulum sollicitudin cursus vivamus justo. Nunc etiam augue nec interdum. 
                                Nunc facilisi semper faucibus lacus tortor faucibus viverra. Velit fermentum, egestas adipiscing tellus mi sapien...</div>

                        </div>
                        <img src="img/slider/6.png" alt="" class="slider__img">

                    </div>

                    <div class="slider__item">
                        <div class="slider__hover">
                            <div class="slider__hover__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada mattis lectus non vestibulum sollicitudin cursus vivamus justo. Nunc etiam augue nec interdum. 
                                Nunc facilisi semper faucibus lacus tortor faucibus viverra. Velit fermentum, egestas adipiscing tellus mi sapien...</div>

                        </div>
                        <img src="img/slider/1.png" alt="" class="slider__img">

                    </div>
                    <div class="slider__item">
                        <div class="slider__hover">
                            <div class="slider__hover__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada mattis lectus non vestibulum sollicitudin cursus vivamus justo. Nunc etiam augue nec interdum. 
                                Nunc facilisi semper faucibus lacus tortor faucibus viverra. Velit fermentum, egestas adipiscing tellus mi sapien...</div>

                        </div>
                        <img src="img/slider/2.png" alt="" class="slider__img">

                    </div>

                    <div class="slider__item">
                        <div class="slider__hover">
                            <div class="slider__hover__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada mattis lectus non vestibulum sollicitudin cursus vivamus justo. Nunc etiam augue nec interdum. 
                                Nunc facilisi semper faucibus lacus tortor faucibus viverra. Velit fermentum, egestas adipiscing tellus mi sapien...</div>

                        </div>
                        <img src="img/slider/3.png" alt="" class="slider__img">

                    </div>
                    <div class="slider__item">
                        <div class="slider__hover">
                            <div class="slider__hover__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada mattis lectus non vestibulum sollicitudin cursus vivamus justo. Nunc etiam augue nec interdum. 
                                Nunc facilisi semper faucibus lacus tortor faucibus viverra. Velit fermentum, egestas adipiscing tellus mi sapien...</div>

                        </div>
                        <img src="img/slider/4.png" alt="" class="slider__img">

                    </div>

                    <div class="slider__item">
                        <div class="slider__hover">
                            <div class="slider__hover__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada mattis lectus non vestibulum sollicitudin cursus vivamus justo. Nunc etiam augue nec interdum. 
                                Nunc facilisi semper faucibus lacus tortor faucibus viverra. Velit fermentum, egestas adipiscing tellus mi sapien...</div>

                        </div>
                        <img src="img/slider/5.png" alt="" class="slider__img">

                    </div>
                    <div class="slider__item">
                        <div class="slider__hover">
                            <div class="slider__hover__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Malesuada mattis lectus non vestibulum sollicitudin cursus vivamus justo. Nunc etiam augue nec interdum. 
                                Nunc facilisi semper faucibus lacus tortor faucibus viverra. Velit fermentum, egestas adipiscing tellus mi sapien...</div>

                        </div>
                        <img src="img/slider/6.png" alt="" class="slider__img">

                    </div>
                </div>
            </div>
        </div> -->

        <section class="recept">
            <div class="container">
                <div class="recept__inner">
                    <div class="recept__title">Рецепты</div>
                    <div class="recept__wrapper">
                        <div class="recept__item">
                            <div class="triangle-recept">
                                <div class="triangle__text-recept">25 мая</div>
                            </div>
                            <div class="recept__image">
                                <img class="recept__img" src="img/recept/bg.png" alt="">
                                <img class="recept__img recept__img-decrease" src="img/recept/bg_decrease.png" alt="">
                                <img class="recept__img recept__img-decrease-more" src="img/recept/bg_decrease-more.png" alt="">
                                <div class="rectangle">Картошка по Сибирски</div>
                            </div>

                            <a href="#" class="btn__open_recept">открыть рецепт</a>
                        </div>

                        <div class="recept__item">
                            <div class="triangle-recept">
                                <div class="triangle__text-recept">25 мая</div>
                            </div>
                            <div class="recept__image">
                                <img class="recept__img" src="img/recept/bg.png" alt="">
                                <img class="recept__img recept__img-decrease" src="img/recept/bg_decrease.png" alt="">
                                <img class="recept__img recept__img-decrease-more" src="img/recept/bg_decrease-more.png" alt="">
                                <div class="rectangle">Картошка по Сибирски</div>
                            </div>

                            <a href="#" class="btn__open_recept">открыть рецепт</a>
                        </div>

                        <div class="recept__item">
                            <div class="triangle-recept">
                                <div class="triangle__text-recept">25 мая</div>
                            </div>
                            <div class="recept__image">
                                <img class="recept__img" src="img/recept/bg.png" alt="">
                                <img class="recept__img recept__img-decrease" src="img/recept/bg_decrease.png" alt="">
                                <img class="recept__img recept__img-decrease-more" src="img/recept/bg_decrease-more.png" alt="">
                                <div class="rectangle">Картошка по Сибирски</div>
                            </div>

                            <a href="#" class="btn__open_recept">открыть рецепт</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="about">
            <div class="container">
                <div class="about__inner">
                    <h2 class="about__title">Продукты в Краснодаре - по оптовым ценам</h2>
                    <div class="about__text">
                            ТОРГОВЫЙ ДОМ «Сибиряк» - одна из компаний в Краснодарском крае, которая занимается оптовой торговлей продуктами питания.  
                            Компания  работает на рынке продуктов питания четырнадцатый год и исключительно хорошо зарекомендовала себя в регионе. 
                            В этом нет ничего удивительного, ведь вся наша продукция
                            неизменно отвечает самым высоким стандартам качества, имеет сертификацию, и при этом год за годом мы создаем самые 
                            удобные условия для наших клиентов.
                            Мы уделяем много внимания в нашей работе личному контакту с покупателем, стремимся установить доброжелательные,
                            взаимовыгодные и длительные отношения с каждым клиентом, поставщиком и потребителем. Мы продумываем все подробности
                            нашего сотрудничества – от сроков, способов и условий доставки до удобства фасовки продукции. Нам важно, что бы с нами было не 
                            только выгодно, но и приятно и удобно работать. Подобное отношение к работе позволяет нам вести взаимовыгодное сотрудничество с 
                            большинством партнеров более 10 лет.

                            Стратегия компании ТОРГОВЫЙ ДОМ «Сибиряк» - активное продвижение на рынок продукции отечественного производителя. 
                            Являясь дистрибьютором многих отечественных производителей, мы ведем планомерную и постоянную работу по предоставлению для 
                            воронежских потребителей самых качественных и разнообразных товаров для людей любого достатка.

                            ТОРГОВЫЙ ДОМ «Сибиряк» дорожит своей репутацией, и в первую очередь, репутацией честного партнера, поэтому во главу угла в работе 
                            с покупателями и поставщиками мы ставим ответственность, четкое соблюдение ценовой политики и других условий договора.  
                            Мы всегда строим отношения с поставщиками и потребителями на принципах честности и порядочности. Благодаря этому, а 
                            также за счет грамотной маркетинговой  политики,  даже  в  самые сложные  времена для  развития российского  рынка, 
                            как, например, недавно случившийся кризис, компания  не  растеряла  связей  со своими  постоянными поставщиками. 
                            Более того, нам удалось увеличить объемы и темпы продаж, расширить торговые площади и  оборудовать наши помещения еще 
                            более совершенным оборудованием.

                            Компания ТОРГОВЫЙ ДОМ «Сибиряк» гордится своими сотрудниками, которые являются профессиональными и образованными 
                            специалистами. Наша команда - это люди, не просто знающие свое дело, но и понимающие всю специфику своей деятельности. 
                            Большинство специалистов работают в ТОРГОВОМ ДОМЕ «Сибиряк» уже долгое время и всегда чувствуют на себе заботу руководства 
                            как об условиях работы, так и о качественном отдыхе своих сотрудников. В течении многих лет наши лучшие сотрудники премируются 
                            отдыхом на зарубежных курортах .Руководство компании активно поддерживает стремление своих сотрудников к повышению своей 
                            квалификации и профессиональному совершенствованию.  Главный же результат, к которому мы идем, - это доверие наших клиентов, 
                            которые год от года, покупая продукты, выбирают именно нашу компанию. Во многом это происходит именно по той причине, что  
                            мы сделали слово «качество» основным принципом работы своей компании.
                    </div>
                </div>
            </div>
        </div>

        <div class="map">
        </div>
    </div>
</main>


<!-- 
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="app/slick.min.js"></script>
    <script src="app/app.js"></script> -->

</body>
</html>

<?php

get_footer();
?>
