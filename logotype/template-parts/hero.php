<?php

/*
Template Name: hero
*/
get_header();
?>

 <div class="power-block" style="background-image: url(<?php echo get_field('hero_background'); ?>);">
                <div class="power-block-items">
                    <div class="power-block-text">
						<?php echo get_field('hero_text'); ?>
                        <ul>
					     <?php $texts = get_field('under_power_block'); ?>
						 <?php if(!empty($texts)){ ?>
                          <?php foreach($texts as $text){ ?>
								<li><span>&#x25BA;</span><?php echo $text['under_power_text']; ?></li>
						  <?php } ?>
                         <?php }else{} ?>
                        </ul>
                        <div class="power-block-btn">
                            <a href="<?php echo get_field('url_youtube_button'); ?>" class="power-block-btn-blue" target="blank">
                                <div>
                                    <svg width="40" height="30" viewBox="0 0 40 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path id="Vector" d="M38.9427 4.00767C38.4853 2.431 37.137 1.188 35.4267 0.766334C32.3243 3.82463e-07 19.887 0 19.887 0C19.887 0 7.44967 3.82463e-07 4.3473 0.766334C2.63702 1.188 1.28868 2.431 0.831277 4.00767C-5.92679e-08 6.86767 0 14.6667 0 14.6667C0 14.6667 -5.92679e-08 22.4657 0.831277 25.3257C1.28868 26.9023 2.63702 28.1453 4.3473 28.567C7.44967 29.3333 19.887 29.3333 19.887 29.3333C19.887 29.3333 32.3243 29.3333 35.4267 28.567C37.139 28.1453 38.4853 26.9023 38.9427 25.3257C39.774 22.4657 39.774 14.6667 39.774 14.6667C39.774 14.6667 39.774 6.86767 38.9427 4.00767ZM15.9096 21.0173V8.316L27.8418 14.6667L15.9096 21.0173Z" fill="#109CF1"/>
                                    </svg>Take A Quick Tour</div></a>
                            <a href="<?php echo get_field('url_button_try_it_for_free_!'); ?>" class="power-block-btn-green"><div>Try It for Free !</div></a>
                        </div>
                    </div>
                    <div class="power-block_img">
                        <img src="<?php echo get_field('hero_photo'); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="second-section">
                <div class="second-section_items">
                    <div class="second-section_img">
                        <img src="<?php echo get_field('second_section_photo'); ?>" alt="">
                    </div>
                    <div class="second-section_text">
					<?php echo get_field('second_section_text'); ?>
                        
                        <a href="<?php echo get_field('second_section_button_url'); ?>">
                            <div>Start Today!</div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="contacts" style="background-image: url(<?php echo get_field('contacts_background'); ?>);">
                <h2>Contact Section<?php echo get_field('contact_name'); ?></h2>
                <p><?php echo get_field('contact_description'); ?></p>
                <div class="contacts-items">
                    <div class="contacts-map">
						<?php echo get_field('map_adress'); ?>
                    </div>
                    <div class="contacts-feedback">
                        <p><?php echo get_field('name_form'); ?></p>
							<?php echo do_shortcode( '[contact-form-7 id="69" title="hero"]' ); ?>
                            
                    </div>
                </div>
            </div>


<?php get_footer(); 