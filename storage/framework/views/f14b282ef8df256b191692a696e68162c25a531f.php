<div class="card">
    <div class="card-header">
        <h4><i class="fa fa-phone"></i>  Contacts</h4>
    </div>
    <div class="card-body">

        <?php if($CONTACTS !== null): ?>
        <div class="accordion" id="contacts-accordion">
            <div class="contact">
                <i class="fa fa-map-marker"></i>  <?php echo e($CONTACTS->address); ?> 
            </div>
            <div class="contact">
                <i class="fa fa-phone"></i>  <?php echo e($CONTACTS->phone1.', '.$CONTACTS->phone2); ?> 
            </div>   
            <div class="contact">
                <i class="fa fa-envelope"></i>  <?php echo e($CONTACTS->email); ?> 
            </div>   
            <div class="contact">
                <i class="fab fa-facebook"></i>  <?php echo e($CONTACTS->facebook); ?> 
            </div>
            <div class="contact">
                <i class="fab fa-instagram"></i>  <?php echo e($CONTACTS->instagram); ?> 
            </div>   
            <div class="contact">
                <i class="fab fa-twitter"></i>  <?php echo e($CONTACTS->twitter); ?> 
            </div>  
            <div class="contact">
                <i class="fab fa-youtube"></i>  <?php echo e($CONTACTS->youtube); ?> 
            </div> 
                <p class="text-right">
                    <a href="#update-contacts"  data-toggle="collapse" data-target="#update-contacts" aria-expanded="true" aria-controls="update-contacts">
                        <i class="fa fa-pen"></i> Update Contacts 
                    </a> 
                </p>

                <div id="update-contacts" class="collapse admin-panel-collapse" aria-labelledby="" data-parent="#contacts-accordion">
                    <h5>Update Contacts</h5>
                    <form action="<?php echo e(route('update.contacts')); ?>" method="POST">
                        
                        <?php echo e(csrf_field()); ?>

                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group <?php echo e($errors->has('address') ? 'has-error' : ''); ?>">
                            <label for="" class="label-control"><i class="fa fa-map-marker"></i>  Address</label>
                            <input class="form-control" type="text" name="address" value="<?php echo e($CONTACTS->address); ?>">
                            <?php if($errors->has('address')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('address')); ?>

                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group <?php echo e($errors->has('phone1') ? 'has-error' : ''); ?>">
                            <label for="" class="label-control"><i class="fa fa-phone"></i>  Phone 1</label>
                            <input class="form-control" type="tel" name="phone1" value="<?php echo e($CONTACTS->phone1); ?>">
                            <?php if($errors->has('phone1')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('phone1')); ?>

                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group <?php echo e($errors->has('phone2') ? 'has-error' : ''); ?>">
                            <label for="" class="label-control"><i class="fa fa-phone"></i>  Phone 2</label>
                            <input class="form-control" type="tel" name="phone2" value="<?php echo e($CONTACTS->phone2); ?>">
                            <?php if($errors->has('phone2')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('phone2')); ?>

                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                            <label for="" class="label-control"><i class="fa fa-envelope"></i>  Email Address</label>
                            <input class="form-control" type="tel" name="email" value="<?php echo e($CONTACTS->email); ?>">
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('email')); ?>

                                </span>
                            <?php endif; ?>
                        </div>


                        <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                            <label for="" class="label-control"><i class="fa fa-envelope"></i>  Email Address</label>
                            <input class="form-control" type="tel" name="email" value="<?php echo e($CONTACTS->email); ?>">
                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('email')); ?>

                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group <?php echo e($errors->has('facebook') ? 'has-error' : ''); ?>">
                            <label for="" class="label-control"><i class="fab fa-facebook"></i>  Facebook Page</label>
                            <input class="form-control" type="url" name="facebook" value="<?php echo e($CONTACTS->facebook); ?>">
                            <?php if($errors->has('facebook')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('facebook')); ?>

                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group <?php echo e($errors->has('instagram') ? 'has-error' : ''); ?>">
                            <label for="" class="label-control"><i class="fab fa-instagram"></i>  Instagram</label>
                            <input class="form-control" type="url" name="instagram" value="<?php echo e($CONTACTS->instagram); ?>">
                            <?php if($errors->has('instagram')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('instagram')); ?>

                                </span>
                            <?php endif; ?>
                        </div>


                        <div class="form-group <?php echo e($errors->has('twitter') ? 'has-error' : ''); ?>">
                            <label for="" class="label-control"><i class="fab fa-twitter"></i>  Twitter</label>
                            <input class="form-control" type="url" name="twitter" value="<?php echo e($CONTACTS->twitter); ?>">
                            <?php if($errors->has('twitter')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('twitter')); ?>

                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group <?php echo e($errors->has('youtube') ? 'has-error' : ''); ?>">
                            <label for="" class="label-control"><i class="fab fa-youtube"></i>  Youtube Channel</label>
                            <input class="form-control" type="url" name="youtube" value="<?php echo e($CONTACTS->youtube); ?>">
                            <?php if($errors->has('youtube')): ?>
                                <span class="help-block">
                                    <?php echo e($errors->first('youtube')); ?>

                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="custom-btn" >
                                Update Contacts
                            </button>
                        </div>
                        
                    </form>
                </div>
        </div>
        <?php else: ?>
            <div class="alert alert-warning">No contact added yet</div>
        <?php endif; ?>
    </div>
</div>