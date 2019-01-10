<div class="welcome-address-container" >
    <div style="background: linear-gradient(to bottom right, rgba(255,0,0,1),rgba(0,0,0,.5),rgba(255,0,0,.5)); padding: 10px 0 ">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div >
                            <div class="text-center white">
                                <h1 class="white">Welcome To Living Faith Church, Owerri</h1>
                                <hr>
                                <h3 class="white">Our global membership is referred to as the Winners’ Family.</h3>	
                            </div>
                                <div style="text-align: justify; line-height: 30px; padding: 20px 10px; color: #fff">
                                <?php if($PREF !==null && $PREF->welcome_address !== null && $PREF->welcome_address !== ''): ?>
                                        <p style="font-size: 20px"><?php echo e($PREF->welcome_address); ?></p> 
                                        <h4 class="text-right">-<?php echo e($PREF->pastor->fullname); ?></h4>
                                        <p class="text-right"><?php echo e($PREF->pastor->position); ?></p> 
                                    <?php endif; ?>
                                </div>
                        </div>
                    </div>
                    
                    <div  class="col-md-6">
                        <?php if($PREF !==null && $PREF->imageAvailable()): ?>
                            <figure class="overlay-caption pastor-figure white-shadow" >
                                <figcaption>
                                    <h4 class="caption text-center"> Pastor Joseph Ademola AJIBADE</h4>
                                </figcaption>
                                <img src="<?php echo e($PREF->frontImageUrl()); ?>" alt="Winners Owerri Pastor" style="border-radius: 5px">
                            </figure>
                        <?php endif; ?>

                    </div>
                </div >
            </div>
        </div>
    </div>
</div>
